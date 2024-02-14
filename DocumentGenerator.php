<?php
abstract class documentGenerator
{
	public $fileName;
	public $responses;
	public $fileOutputString;
	public function __construct(string $fileName,array $responses)
 	{
		$this->fileName = $fileName;
		$this->responses = $responses;
		$this->fileOutputString = fopen($fileName, "w");
 	}
// Generate the different components.
	public abstract function genPart1();
	public abstract function genPart2();
	public abstract function genPart3();
	public abstract function genPart4();
	public abstract function genPart5();
	public abstract function genPart6();
	public abstract function genPart7();
	public abstract function packageDocument();
	public function generateDocument()
	{
		$this->genPart1();
		$this->genPart2();
		$this->genPart3();
		$this->genPart4();
		$this->genPart5();
		$this->genPart6();
		$this->genPart7();
		$this->packageDocument();
	}
}

class wordDocGenerator extends documentGenerator
{
	function genPart1()
	{
        echo "Generating Part1 <br/>";
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

	}
}
$wordGen = new wordDocGenerator("output.docx",array(1,2,3));
$wordGen->generateDocument();
