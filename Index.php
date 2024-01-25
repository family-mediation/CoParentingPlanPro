<?php
session_start();
require_once("MysqlUtil.php");
// create an object that will serve as our database.
$db = new Database; 
require_once("Views\Header.php");
    require_once("ParentForum.php");
require_once("Views\Footer.php");





