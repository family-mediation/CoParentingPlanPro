<?php
session_start();
require_once("MysqlUtil.php");
// create an object that will serve as our database.
$db = new Database;
$page = $_GET['page'] ?? 0;

require_once("views/Header.php");
switch($page) {
    case 0:
        require_once("views/Parties.php");
        break;
    case 1:
        require_once("views/Children.php");
        break;
    case 2:
        require_once("views/Custody.php");
        break;
    case 3:
        require_once("views/Timesharing.php");
        break;
    case 4:
        require_once("views/Communication.php");
        break;
    case 5:
        require_once("views/ChildSupport.php");
        break;
    case 6:
        require_once("views/OtherIssues.php");
        break;
    default:
        require_once("views/Parties.php");
}
require_once("views/Footer.php");
