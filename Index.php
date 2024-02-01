<?php
session_start();
require_once("MysqlUtil.php");
// create an object that will serve as our database.
$db = new Database; 
require_once("views/Header.php");
    require_once("ParentForum.php");
require_once("views/Footer.php");

