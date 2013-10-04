<?php

//Some php settings
date_default_timezone_set("America/Los_Angeles");

//require all includes and classes
require_once $cfg['root_dir'] . "/classes/Database.class.php";
require_once $cfg['root_dir'] . "/classes/User.class.php";
require_once $cfg['root_dir'] . "/includes/functions.inc.php";

$db = new Database();