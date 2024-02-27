<?php
session_start();
require_once("MysqlUtil.php");
// create an object that will serve as our database.
$db = new Database;
$page = isset($_GET['page']) ?$_GET['page'] : 1 ;
require_once("views/Header.php");
switch($page)
{
    case 1:
        require_once("views/Parties.php");
        break;
    case 2:
        require_once("views/Children.php");
        break;
    case 3:
        require_once("views/Custody.php");
        break;
    case 4:
        require_once("views/TimeSharing.php");
        break;
    case 5:
        require_once("views/Communication.php");
        break;
    case 6:
        require_once("views/ChildSupport.php");
        break;
    case 7:
        require_once("views/Other.php");
        break;
    case 8:
        require_once("views/Legal.php");
        break;
    case 9:
        require_once("Submit.php");
        break;
    default:
        require_once("views/404.php");
        break;
}
require_once("views/Footer.php");
