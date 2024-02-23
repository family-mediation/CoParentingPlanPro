<?php
require_once("documentGenerators/HtmlGenerator.php");
require_once("documentGenerators/WordDocGenerator.php");
require_once("documentGenerators/CalendarGenerator.php");
require_once("views/Header.php");
$fileName = $_POST["partyALast"]." ".$_POST["partyBLast"];
$filePath = "./documents/" . $fileName;
//later check for E_warning to see if directory already exists.
if(!is_dir($filePath))
{
    mkdir($filePath);
 }
$htmlGen = new HtmlGenerator($filePath.'/'.$fileName.".html",$_POST);
$htmlGen->generateDocument();
$wordGen = new wordDocGenerator($filePath.'/'.$fileName.".docx",$_POST);
$wordGen->generateDocument();
$calGen = new CalendarGenerator($filePath.'/'.$fileName.".ics",$_POST);
$calGen->generateDocument();
require_once("views/Footer.php");