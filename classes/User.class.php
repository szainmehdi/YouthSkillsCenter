<?php

/*
 * @author      S. Zain Mehdi
 * @file        user.class.php
 * @project     AutoAdsToday
 * @description user class definition.
*/

//require Database
require_once "Database.class.php";
require_once $cfg['root_dir'] . "includes/functions.inc.php";

//class definition
class User {
    //Variable definitions for user class
    public $id;                 //user ID
    public $name;           //name
    public $email;           //email
    private $password;          //User Password
    public $type;

    //Default Constructor
    function __construct($data=null, $field=null, $value=null) {
        global $cfg;

        if($data==null && $field!=null && $value!=null) {
            //Initialize the database
            $db = new Database();

            //Select the user based on the parameters above, limit 1
            $result = $db->where("$field", $value)->get($cfg['tables']['users'], null, 1);

            //If no user found, return false
            if(!$result) {
                return false;
            }
            //if user found, return the user object.
            else {
                $data = $result[0];
            }
        }
        //copy data from data array to variables.
        $this->id = (isset($data['id'])) ? $data['id'] : "";
        $this->name = (isset($data['name'])) ? $data['name'] : "";
        $this->email = (isset($data['email'])) ? $data['email'] : "";
        $this->password = (isset($data['password'])) ? $data['password'] : "";
        $this->type = (isset($data['type'])) ? $data['type'] : "";

    }
    function edit($data) {
        $db = new Database();
        //copy data from data array to variables.

        if(isset($data['password']) && $data['password']!="") {

            $user = (isset($data['email']))             ? $data['email']            : $this->email;
            $user = strip_tags(substr($user,0,32));
            $plain_pw = strip_tags(substr($data['password'],0,32));
            $password = crypt(md5($plain_pw),md5($user));
        }

        $this->id = (isset($data['id'])) ? $data['id'] : $this->id;
        $this->name = (isset($data['name'])) ? $data['name'] : $this->name;
        $this->email = (isset($data['email'])) ? $data['email'] : $this->email;
        $this->password = (isset($data['password'])) ? $password : $this->password;
        $this->type = (isset($data['type'])) ? $data['type'] : $this->type;

        //save the vehicle to the database
        return $this->save();
    }

    //update or add user to the users table
    public function save() {
        global $cfg;

        $db = new Database();

        $exists = (strlen($this->id)==0) ? false : true;

        //set the data array
        $data = array(
            "name" => $this->name,
            "email" => $this->email,
            "password" => $this->password,
            "type" => $this->type
        );

        //IF THE user IS A NEW user
        if(!$exists) {
            if($db->insert($cfg['tables']['users'], $data)) {
                $this->id = $db->getInsertId();
                $this->_prepareDatabase();
                return $this->id;
            }
            //successfully inserted new user
            else {
                return false;
            }
            //Failed to insert new user
        }
        //IF UPDATING EXISTING user
        else {
            $db->where("id", $this->id);
            if($db->update($cfg['tables']['users'], $data)) {return true; } //successfully updated new user
            else { return false; } //Failed to update new user
        }
    }

    public function login($pw) {
        if($pw==$this->password) {
            return true;
        }
        else {
            return false;
        }
    }
    private function _prepareDatabase() {
        //create and insert all the necessary data

    }

}
