<?php
abstract class documentGenerator
{
	public $fileName;
	public $responses;
	public $fileOutput;
	public $fileContentString;
	public $tableOfContentsString;
	public function __construct(string $fileName,array $responses)
 	{
		$this->fileName = $fileName;
		$this->responses = $responses;
		$this->fileOutput = fopen("./".$fileName,"w+");
 	}
// Generate the different components.
	public abstract function genHeader();
	public abstract function genPart1();
	public abstract function genPart2();
	public abstract function genPart3();
	public abstract function genPart4();
	public abstract function genPart5();
	public abstract function genPart6();
	public abstract function genPart7();
	public abstract function genFooter();
	public abstract function packageDocument();
	public function generateDocument()
	{
		$this->genHeader();
		$this->genPart1();
		$this->genPart1();
		$this->genPart2();
		$this->genPart3();
		$this->genPart4();
		$this->genPart5();
		$this->genPart6();
		$this->genPart7();
		$this->genFooter();
		$this->packageDocument();
		fclose($this->fileOutput);
	}
}