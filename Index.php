<?php
session_start();
if(!isset($_SESSION['responses'])) {
    $_SESSION['responses'] = array();
}
if(isset($_POST)) {
    $_SESSION['responses'] = array_replace($_SESSION['responses'], $_POST);
}
require_once("MysqlUtil.php");
function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
if(isset($_SESSION['canSeeParties'])) {
    $_SESSION['canSeeParties'] = true;
}
if(isset($_SESSION['canSeeChildren'])) {
    $_SESSION['canSeeChildren'] = false;
}
if(!isset($_SESSION['canSeeCustody'])) {
    $_SESSION['canSeeCustody'] = false;
}
if(!isset($_SESSION['canSeeTimesharing'])) {
    $_SESSION['canSeeTimesharing'] = false;
}
if(!isset($_SESSION['canSeeCommunication'])) {
    $_SESSION['canSeeCommunication'] = false;
}
if(!isset($_SESSION['canSeeSupport'])) {
    $_SESSION['canSeeSupport'] = false;
}
if(!isset($_SESSION['canSeeIssues'])) {
    $_SESSION['canSeeIssues'] = false;
}
if(!isset($_SESSION['canSeeLegal'])) {
    $_SESSION['canSeeLegal'] = false;
}
// create an object that will serve as our database.
$db = new Database;
$page = $_GET['page'] ?? 1;
console_log($page);
switch($page)
{
    case 1:
        //values that determine if a nav item can be clicked on
        require("views/Header.php");
        require_once("views/Parties.php");
        break;
    case 2:
        $_SESSION['canSeeParties'] = true;
        require("views/Header.php");
        require_once("views/Children.php");
        break;
    case 3:
        $_SESSION['canSeeChildren'] = true;
        require("views/Header.php");
        require_once("views/Custody.php");
        break;
    case 4:
        $_SESSION['canSeeCustody'] = true;
        require("views/Header.php");
        require_once("views/Timesharing.php");
        break;
    case 5:
        $_SESSION['canSeeTimesharing'] = true;
        require("views/Header.php");
        require_once("views/Communication.php");
        break;
    case 6:
        $_SESSION['canSeeCommunication'] = true;
        require("views/Header.php");
        require_once("views/ChildSupport.php");
        break;
    case 7:
        $_SESSION['canSeeSupport'] = true;
        require("views/Header.php");
        require_once("views/Other.php");
        break;
    case 8:
        $_SESSION['canSeeIssues'] = true;
        require("views/Header.php");
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
