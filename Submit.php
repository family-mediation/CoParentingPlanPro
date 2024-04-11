<?php
require_once("documentGenerators/HtmlGenerator.php");
require_once("documentGenerators/WordDocGenerator.php");
require_once("documentGenerators/CalendarGenerator.php");
require_once("views/Header.php");
$src = $_SESSION['responses'];
$fileName = $src["partyALast"]." ".$src["partyBLast"];
$filePath = "./documents/" . $fileName;
$zipFilePath = $filePath . "/" . $fileName ;
//later check for E_warning to see if directory already exists.
if(!is_dir($filePath))
{
    mkdir($filePath);
 }
$htmlGen = new HtmlGenerator($filePath.'/'.$fileName.".html",$src);
$htmlGen->generateDocument();
//$wordGen = new wordDocGenerator($filePath.'/'.$fileName.".docx",$src);
//$wordGen->generateDocument();
//$calGen = new CalendarGenerator($filePath.'/'.$fileName.".ics",$src);
//$calGen->generateDocument();
//unset($_SESSION['responses']);
$documents = new ZipArchive();// add error testing
if($documents->open($zipFilePath . ".zip",ZipArchive::CREATE) != true)
{
  exit("unable to create zip folder ".$zipFilePath . ".zip");
}
$documents->addFile($zipFilePath . ".html");
$documents->close();
echo "<a href=\"".$zipFilePath.".zip\" >Download Your Folder </a>";
require_once("views/Footer.php");