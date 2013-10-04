<?php

session_start();
session_destroy();

header("location: " . $cfg['base_dir'] . "admin/login.php");