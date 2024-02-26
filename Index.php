<?php
session_start();
require_once("MysqlUtil.php");
// create an object that will serve as our database.
$db = new Database; 
require_once("views/Header.php");
$page = $_GET['page'];
switch($page)
{
    case 0:
        require_once("ParentForum.php");
        break;
    case 1:
        require_once("Children.php");
        break;
    case 2:
        require_once("ParentForum.php");
        break;
    case 3:
        require_once("ParentForum.php");
        break;
    case 4:
        require_once("ParentForum.php");
        break;
    case 5:
        require_once("ParentForum.php");
        break;

}
require_once("views/Footer.php");
