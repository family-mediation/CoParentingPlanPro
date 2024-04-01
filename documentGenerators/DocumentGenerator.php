<?php
abstract class documentGenerator
{
	public $fileName;
	public $responses;
	public $fileOutput;
	public $fileContentString;
	public $tableOfContentsString;
	public function __construct(string $fileName, array $responses)
	{
		$this->fileName = $fileName;
		$this->responses = $responses;
		$this->fileOutput = fopen("./" . $fileName, "w+");
	}
	// Generate the different components.
	public abstract function genHeader();
	public abstract function genPart1();
	public abstract function genPart2();
	public abstract function genPart3();

	// Section 3: Legal Custody 
	public abstract function gen_legal_custody_5_00();
	public abstract function gen_legal_custody_5_01();
	public abstract function gen_legal_custody_5_03A();
	public abstract function gen_legal_custody_5_03B();
	public abstract function gen_legal_custody_5_05A();
	public abstract function gen_legal_custody_5_05B();
	public abstract function gen_legal_custody_5_04();
	public abstract function gen_legal_custody_5_06();
	public abstract function gen_legal_custody_5_07();
	public abstract function gen_legal_custody_5_08();
	public abstract function gen_legal_custody_5_09();
	public abstract function gen_legal_custody_5_10();
	public abstract function gen_legal_custody_5_11();

	// Section 6: Child Support
	public abstract function gen_child_support_8_00();
	public abstract function gen_child_support_8_01();
	public abstract function gen_child_support_8_03();
	public abstract function gen_child_support_8_04();
	public abstract function gen_child_support_8_05();
	public abstract function gen_child_support_8_06();
	public abstract function gen_child_support_8_07();
	public abstract function gen_child_support_8_08();
	public abstract function gen_child_support_8_09();
	public abstract function gen_child_support_8_09A();
	public abstract function gen_child_support_8_09B();
	public abstract function gen_child_support_8_09C();




	public abstract function genPart4();
	public abstract function genPart5();
	public abstract function genPart6();
	public abstract function genPart7();
	public abstract function genFooter();
	public abstract function packageDocument();
	/* TODO:// HEY YOU GUYS, THIS IS WHERE ALL OF THE LOGIC GOES.*/
	public function generateDocument()
	{

		$this->genHeader();

		//the logic for the tree goes Here its a work in progress hence the if false.
		if (false) {
			switch ($responses["legalCustody"]) {
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

		var_dump($_SESSION['responses']);

		/*** Section 3: Legal Custody ***/
		// Legal Custody: page 0 (definition)
		$this->gen_legal_custody_5_00();

		// Legal Custody: page 1
		// joint to both parents -> tie-breaking authority to parent A or B
		if (isset($_SESSION['responses']['custody']) && $_SESSION['responses']['custody'] == "joint") {
			$this->gen_legal_custody_5_01();
			if (isset($_SESSION['responses']['tieBreakingAuthority']) && $_SESSION['responses']['tieBreakingAuthority'] == "tieBreakA") {
				$this->gen_legal_custody_5_03A();
			}
			if (isset($_SESSION['responses']['tieBreakingAuthority']) && $_SESSION['responses']['tieBreakingAuthority'] == "tieBreakB") {
				$this->gen_legal_custody_5_03B();
			}
		}
		// sole to parent A
		if (isset($_SESSION['responses']['custody']) && $_SESSION['responses']['custody'] == "soleA") {
			$this->gen_legal_custody_5_05A();
		}
		// sole to parent B
		if (isset($_SESSION['responses']['custody']) && $_SESSION['responses']['custody'] == "soleB") {
			$this->gen_legal_custody_5_05B();
		}
		// parent must consult but there is a division of authority 
		if (isset($_SESSION['responses']['custody']) && $_SESSION['responses']['custody'] == "divisionAuth") {
			$this->gen_legal_custody_5_04();
		}

		// Legal Custody: page 2 (optional)
		if (isset($_SESSION['responses']['legalcustody'])) {
			foreach ($_SESSION['responses']['legalcustody'] as $x) {
				switch ($x) {
					case '5.06': // emergency contacts for the child(ren) 
						$this->gen_legal_custody_5_06();
						break;
					case '5.07': // expert advice when making legal custody decisions 
						$this->gen_legal_custody_5_07();
						break;
					case '5.08': // day-to-day decisions
						$this->gen_legal_custody_5_08();
						break;
					case '5.09': // emergency decisions
						$this->gen_legal_custody_5_09();
						break;
					case '5.10': // health emergency or death of other parent
						$this->gen_legal_custody_5_10();
						break;
					case '5.11': // parallel parenting
						$this->gen_legal_custody_5_11();
						break;
				}
			}
		} //end of if

		/*** Section 6: Child Support ***/
		// Child support: page 0
		// header & child support guidelines amount under the law
		$this->gen_child_support_8_00();

		// page 0 -> pick only one 
		if (isset($_SESSION['responses']['childSupport'])) {
			switch ($_SESSION['responses']['childSupport']) {
				case 'sameState':
					$this->gen_child_support_8_01();
					break;
				case 'mutuAgreed':
					$this->gen_child_support_8_03();
					break;
				case 'noAgree':
					$this->gen_child_support_8_04();
					break;
				case 'alternative':
					$this->gen_child_support_8_05();
					break;
			}
		}
		// page 0 -> payment 
		if (isset($_SESSION['responses']['payment'])) {
			switch ($_SESSION['responses']['payment']) {
				case 'directPay':
					$this->gen_child_support_8_06();
					break;
				case 'stateEnforce':
					$this->gen_child_support_8_07();
					break;
			}
		}
		// page 1 -> health insurance premiums 
		$this->gen_child_support_8_08();

		// page 1 -> uninsured co-pays for health-related expenses 
		if (isset($_SESSION['responses']['insurance'])) {
			$this->gen_child_support_8_09();
			switch ($_SESSION['responses']['insurance']) {
				case 'soleResp':
					$this->gen_child_support_8_09A();
					break;
				case 'splitResp':
					$this->gen_child_support_8_09B();
					break;
				case 'threshold':
					$this->gen_child_support_8_09C();
					break;
			}
		}
		// page 2 -> extracurricular expenses 
		// page 2 -> private school expenses 
		// page 2 -> post-high school expenses





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
