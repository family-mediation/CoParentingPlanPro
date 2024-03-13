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

if(isset($_SESSION['canSeeChildren'])) {
    $_SESSION['canSeeChildren'] = false;
    console_log('settign false');
}
    console_log($_SESSION);
// create an object that will serve as our database.
$db = new Database;
$_SESSION['page'] = isset($_GET['page']) ?$_GET['page'] : 1 ;
if(isset($_SESSION['page'])){
    $_SESSION['page'] = 1;
}
console_log($_SESSION['page']);
require_once("views/Header.php");
switch($_SESSION['page'])
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
        require_once("views/Timesharing.php");
        //values that determine if a nav item can be clicked on
        $_SESSION['canSeeChildren'] = true;
        console_log("setting true in index");
        console_log($_SESSION);
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
