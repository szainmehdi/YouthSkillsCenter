<?php

session_start();

//refresh session variables if logged in
if(isset($_SESSION['login'])) {
    $db = new Database();
    $user_current = new User(null,"id",$_SESSION['userID']);
}
else { 
	header("Location: " . $cfg['base_dir'] . "admin/login.php");
}