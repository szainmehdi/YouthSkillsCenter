<?php

use YouthSkillsCenter\Auth\Permission;
use YouthSkillsCenter\Auth\Role;
use YouthSkillsCenter\Auth\User;

class UsersSeeder extends Seeder {

    public function run() {

        // Default Admin User
        $user = new User();
        $user->username = 'admin@ysc5.com';
        $user->first_name = 'Zain';
        $user->last_name = 'Mehdi';
        $user->email = 'admin@ysc5.com';
        $user->password = Hash::make(getenv('default_admin_password'));
        $user->confirmation_code = md5(uniqid(mt_rand(), true));
        $user->family_id = 1;
        $user->confirmed = true;
        $user->save();

        // Roles
        $owner = new Role();
        $owner->name = 'owner';
        $owner->save();

        $parent = new Role();
        $parent->name = 'parent';
        $parent->save();

        // Permissions
        $manage_families = new Permission();
        $manage_families->name = 'manage_families';
        $manage_families->display_name = 'Manage Families';
        $manage_families->save();

        //Attach permissions to roles
        $owner->perms()->sync([$manage_families->id]);

        //Assign Roles
        $user->attachRole($owner);

    }


} 