<?php
require_once $cfg['root_dir'] . 'includes/global.inc.php';

session_start();

if(isset($_POST['email']) && isset($_POST['password']) && strlen($_POST['email'])>0 && strlen($_POST['password'])>0) {
    $result = $db->where("email",$_POST['email'])->get($cfg['tables']['users']);
    if($result) {
        $user_current = new User($result[0]);

        $user = strip_tags(substr($user_current->email,0,32));
        $plain_pw = strip_tags(substr($_POST['password'],0,32));
        $password = crypt(md5($plain_pw),md5($user));

        if($user_current->login($password)) {
            $_SESSION['userID'] = $user_current->id;
            $_SESSION['login'] = true;
            echo "<span class='success'>Logged in successfully!</span>";
        }
        else {
            echo "<span class='error'>Your email and password do not match. Try again.</span>";
        }
    }
    else {
        echo "<span class='error'>Your email could not be found. Try again.</span>";
    }
}
else {
    echo "<span class='error'>The email and password cannot be blank.</span>";
}