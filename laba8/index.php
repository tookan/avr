<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once 'tovarBD.php';


$tovarBD= new tovarBD();
$tovar=$tovarBD->downloadtovar();
include 'main.php';






