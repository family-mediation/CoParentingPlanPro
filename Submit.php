<?php
require_once("documentGenerators/HtmlGenerator.php");
require_once("documentGenerators/WordDocGenerator.php");
require_once("views/Header.php");
$htmlGen = new HtmlGenerator("./documents/"."output".".html",$_POST);
$htmlGen->generateDocument();
$wordGen = new wordDocGenerator("./documents/"."output".".html",$_POST);
$wordGen->generateDocument();
echo "</div>";
require_once("views/Footer.php");