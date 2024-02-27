<?php
session_start();
require_once("MysqlUtil.php");
// create an object that will serve as our database.
$db = new Database; 
require_once("views/Header.php");
$page = $_GET['page'] ?? 0;

switch($page)
{
    case 0:
        require_once("views/Parties.php");
        break;
    case 1:
        require_once("views/Children.php");
        break;
    default:
        require_once("views/Parties.php");
}
require_once("views/Footer.php");
