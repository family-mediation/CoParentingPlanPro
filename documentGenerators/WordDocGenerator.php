<?php
require_once("DocumentGenerator.php");
class wordDocGenerator extends documentGenerator
{
	function genHeader()
	{
	    echo "Generating Header " . $this->fileName . " <br/>";
	   $this->fileContentString .= "test test test";
	}
	function genFooter()
	{
	echo "Generating Footer " . $this->fileName . " <br/>";
	    $this->fileContentString .= "test test test";
	}
	function genPart1()
	{
        echo "Generating Part1 " . $this->fileName . " <br/>";
        $this->fileContentString .= "test test test";
	}
	function genPart2()
	{
         echo "Generating Part2 <br/>";
	}
    function genPart3()
	{
         echo "Generating Part3 <br/>";
	}
    function genPart4()
	{
         echo "Generating Part4 <br/>";
	}
	function genPart5()
	{
         echo "Generating Part5 <br/>";
	}
	function genPart6()
	{
          echo "Generating Part6 <br/>";
	}
	function genPart7()
	{
          echo "Generating Part7 <br/>";
	}
	function packageDocument()
	{
	// Take the template.zip copy it and rename it in the downloads folder
    if(!copy("Templates/Co-ParentingPlanTemplate.docx",$this->fileName))
    {
        alert("file not copied!");
    };
	// Take the string and write it to document.xml
	fwrite($this->fileOutput,$this->fileContentString);
	// Zip the folder and rename it to .docx
	// Serve the .docx
	}
}