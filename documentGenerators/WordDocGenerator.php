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
	function gen_legal_custody_5_00()
	{
	}
	function gen_legal_custody_5_01()
	{
	}
	function gen_legal_custody_5_03A()
	{
	}
	function gen_legal_custody_5_03B()
	{
	}
	function gen_legal_custody_5_05A()
	{
	}
	function gen_legal_custody_5_05B()
	{
	}
	function gen_legal_custody_5_04()
	{
	}
	function gen_legal_custody_5_06()
	{
	}
	function gen_legal_custody_5_07()
	{
	}
	function gen_legal_custody_5_08()
	{
	}
	function gen_legal_custody_5_09()
	{
	}
	function gen_legal_custody_5_10()
	{
	}
	function gen_legal_custody_5_11()
	{
	}
	function gen_child_support_8_00()
	{
	}
	function gen_child_support_8_01()
	{
	}
	function gen_child_support_8_03()
	{
	}
	function gen_child_support_8_04()
	{
	}
	function gen_child_support_8_05()
	{
	}
	function gen_child_support_8_06()
	{
	}
	function gen_child_support_8_07()
	{
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
		// Take the string and write it to document.xml
		fwrite($this->fileOutput, $this->fileContentString);
		// Zip the folder and rename it to .docx
		// Serve the .docx
	}
}
