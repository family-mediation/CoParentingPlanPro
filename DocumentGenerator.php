<?php
abstract class documentGenerator
{
	$fileName;
	$responses;
	$fileOutputString = fopen($fileName, "a+");
	public function __construct(int $fileName, $responses)
 	{
		$this->fileName = $fileName;
		$this->responses = $responses;
 	}
// Generate the different components.
	abstract function genPart1();
	abstract function packageDocument();
	function generateDocument()
	{
		genPart1();
		genPart2();
		genPart3();
		genPart4();
		genPart5();
		genPart6();
		genPart7();
		genPart8();
		genPart9();
		genPart10();
		packageDocument();
	}
}