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

	//Section 7: Communication 
	public abstract function gen_communication_7();


	public abstract function genFooter();
	public abstract function packageDocument();
	/* TODO:// HEY YOU GUYS, THIS IS WHERE ALL OF THE LOGIC GOES.*/
    public function generateDocument()
	{

		$this->genHeader();
	//the logic for the tree goes Here its a work in progress hence the if false.
	if(false)
    {
		switch($responses["legalCustody"])
		{
            case 'joint':
            break;
            case 'soleA':
            break;
            case 'soleB':
            break;
            case 'tieBreakA':
            break;
            case 'tieBreakB':
            break;
            case 'divisionA':
            break;
            case 'divisionB':
            break;
		}
	}

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