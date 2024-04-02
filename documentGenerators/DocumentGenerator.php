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

    // Section 2: Children
    public abstract function gen_children_4_00();

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

    //Section 4: Physical Custody and Timesharing
    public abstract function gen_physical_custody_timesharing_6_00();
    public abstract function gen_physical_custody_timesharing_6_01();
    public abstract function gen_physical_custody_timesharing_6_01A();
    public abstract function gen_physical_custody_timesharing_6_01B();
    public abstract function gen_physical_custody_timesharing_6_02();
    public abstract function gen_physical_custody_timesharing_6_02A(string $type);
    public abstract function gen_physical_custody_timesharing_6_02B(string $type);
    public abstract function gen_physical_custody_timesharing_6_02C(string $type);
    public abstract function gen_physical_custody_timesharing_6_02D();
    public abstract function gen_physical_custody_timesharing_6_02E();
    public abstract function gen_physical_custody_timesharing_6_03();
    public abstract function gen_physical_custody_timesharing_6_04();
    public abstract function gen_physical_custody_timesharing_6_05();
    public abstract function gen_physical_custody_timesharing_6_06();
    public abstract function gen_physical_custody_timesharing_6_07();
    public abstract function gen_physical_custody_timesharing_6_08();
    public abstract function gen_physical_custody_timesharing_6_09();
    public abstract function gen_physical_custody_timesharing_6_10();
    public abstract function gen_physical_custody_timesharing_6_11();
    public abstract function gen_physical_custody_timesharing_6_12();
    public abstract function gen_physical_custody_timesharing_6_13();
    public abstract function gen_physical_custody_timesharing_6_14();

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
	public abstract function gen_child_support_8_10();
	public abstract function gen_child_support_8_10A();
	public abstract function gen_child_support_8_10B();
	public abstract function gen_child_support_8_10C();
	public abstract function gen_child_support_8_10D();
	public abstract function gen_child_support_8_11();
	public abstract function gen_child_support_8_11A();
	public abstract function gen_child_support_8_11B();
	public abstract function gen_child_support_8_11C();
	public abstract function gen_child_support_8_11D();
	public abstract function gen_child_support_8_11E();
	public abstract function gen_child_support_8_12();
	public abstract function gen_child_support_8_12A();
	public abstract function gen_child_support_8_12B();
	public abstract function gen_child_support_8_12C();
	public abstract function gen_child_support_8_12D();
	public abstract function gen_child_support_8_12E();
	public abstract function gen_child_support_8_12F();
	public abstract function gen_child_support_8_12G();
	public abstract function gen_child_support_8_12H();
	public abstract function gen_child_support_8_13();
	public abstract function gen_child_support_8_13A();
	public abstract function gen_child_support_8_13B();
	public abstract function gen_child_support_8_13C();
	public abstract function gen_child_support_8_13D();
	public abstract function gen_child_support_8_14();
	public abstract function gen_child_support_8_14A();
	public abstract function gen_child_support_8_14B();
	public abstract function gen_child_support_8_14C();
	public abstract function gen_child_support_8_14D();
	public abstract function gen_child_support_8_14E();
	public abstract function gen_child_support_8_14F();


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

        /** Section 2: Children. */
        $this->gen_children_4_00();

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
		} //end of legal custody section 3

        /** Section 4: Physical Custody and Timesharing. */
        $this->gen_physical_custody_timesharing_6_00();
        $this->gen_physical_custody_timesharing_6_01();
        // Page 0.
        if (isset($_SESSION['responses']['schoolYearSchedule'])) {
            switch ($_SESSION['responses']['schoolYearSchedule']) {
                // Equal Timesharing schedules.
                case "2-2-3":
                case "3-4-4-3":
                case "2-2-5-5":
                case "7-7":
                    $this->gen_physical_custody_timesharing_6_01A();
                    break;
                // Other Timesharing schedules.
                case "8-6":
                case "10-4":
                case "ownSchedule":
                    $this->gen_physical_custody_timesharing_6_01B();
                    break;
            }
        }
        // Page 1.
        $this->gen_physical_custody_timesharing_6_02();
        if (isset($_SESSION['responses']['schoolFallBreakSchedule'])) {
            switch ($_SESSION['responses']['schoolFallBreakSchedule']) {
                case "fall-split-break":
                    $this->gen_physical_custody_timesharing_6_02A("fall-split-break");
                    break;
                case "fall-alternate-break":
                    $this->gen_physical_custody_timesharing_6_02A("fall-alternate-break");
                    break;
                case "fall-continue-schedule":
                    $this->gen_physical_custody_timesharing_6_02A("fall-continue-schedule");
                    break;
            }
        }
        if (isset($_SESSION['responses']['schoolThanksgivingBreakSchedule'])) {
            switch ($_SESSION['responses']['schoolThanksgivingBreakSchedule']) {
                case "thanksgiving-split-break":
                    $this->gen_physical_custody_timesharing_6_02B("thanksgiving-split-break");
                    break;
                case "thanksgiving-alternate-break":
                    $this->gen_physical_custody_timesharing_6_02B("thanksgiving-alternate-break");
                    break;
                case "thanksgiving-continue-schedule":
                    $this->gen_physical_custody_timesharing_6_02B("thanksgiving-continue-schedule");
                    break;
            }
        }
        if (isset($_SESSION['responses']['schoolWinterBreakSchedule'])) {
            switch ($_SESSION['responses']['schoolWinterBreakSchedule']) {
                case "winter-split-break":
                    $this->gen_physical_custody_timesharing_6_02C("winter-split-break");
                    break;
                case "winter-alternate-break":
                    $this->gen_physical_custody_timesharing_6_02C("winter-alternate-break");
                    break;
                case "winter-continue-schedule":
                    $this->gen_physical_custody_timesharing_6_02C("winter-continue-schedule");
                    break;
            }
        }


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
			$this->gen_child_support_8_09(); //header
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
		if (isset($_SESSION['responses']['extraCurr'])) {
			$this->gen_child_support_8_10(); //header
			switch ($_SESSION['responses']['extraCurr']) {
				case 'extraSoleResp':
					$this->gen_child_support_8_10A();
					break;
				case 'extraSplitResp':
					$this->gen_child_support_8_10B();
					break;
				case 'pursuant':
					$this->gen_child_support_8_10C();
					break;
				case 'mutuallyExtra':
					$this->gen_child_support_8_10D();
					break;
			}
		}
		// page 2 -> private school expenses 
		// per Kristin, include "8.11C Definition" with sole, split & mutual only  
		if (isset($_SESSION['responses']['privateSchool'])) {
			$this->gen_child_support_8_11(); //header
			switch ($_SESSION['responses']['privateSchool']) {
				case 'privateSoleResp':
					$this->gen_child_support_8_11A();
					$this->gen_child_support_8_11C();
					break;
				case 'privateSplitResp':
					$this->gen_child_support_8_11B();
					$this->gen_child_support_8_11C();
					break;
				case 'privateSchoolMutual':
					$this->gen_child_support_8_11C();
					$this->gen_child_support_8_11D();
					break;
				case 'privateReserve':
					$this->gen_child_support_8_11E();
					break;
			}
		}
		// page 2 -> post-high school expenses
		// per Kristin, include "8.12F Definition" with everything except for Reserve   
		if (isset($_SESSION['responses']['postHigh'])) {
			$this->gen_child_support_8_12(); //header
			switch ($_SESSION['responses']['postHigh']) {
				case 'postSoleResp':
					$this->gen_child_support_8_12A();
					$this->gen_child_support_8_12F();
					break;
				case 'postSplitResp':
					$this->gen_child_support_8_12B();
					$this->gen_child_support_8_12F();
					break;
				case 'postSole529':
					$this->gen_child_support_8_12C();
					$this->gen_child_support_8_12F();
					break;
				case 'postSplit529':
					$this->gen_child_support_8_12D();
					$this->gen_child_support_8_12F();
					break;
				case 'postCap':
					$this->gen_child_support_8_12E();
					$this->gen_child_support_8_12F();
					break;
				case 'postMutual':
					$this->gen_child_support_8_12F();
					$this->gen_child_support_8_12G();
					break;
				case 'postReserve':
					$this->gen_child_support_8_12H();
					break;
			}
		}

		// page 3 -> claiming the child(ren) as a dependent for tax purposes 
		if (isset($_SESSION['responses']['taxPurpose'])) {
			$this->gen_child_support_8_13(); //header
			switch ($_SESSION['responses']['taxPurpose']) {
				case 'taxSole':
					$this->gen_child_support_8_13A();
					break;
				case 'taxSplit':
					$this->gen_child_support_8_13B();
					break;
				case 'taxAlt':
					$this->gen_child_support_8_13C();
					break;
				case 'taxAltAut':
					$this->gen_child_support_8_13D();
					break;
			}
		}
		// page 3 -> protocols for reimbursement of child-related expenses -> radio buttons 
		if (isset($_SESSION['responses']['protocols'])) {
			$this->gen_child_support_8_14(); //header
			switch ($_SESSION['responses']['protocols']) {
				case 'timeframe':
					$this->gen_child_support_8_14A();
					break;
				case 'monthlyCal':
					$this->gen_child_support_8_14B();
					break;
				case 'quarterCal':
					$this->gen_child_support_8_14C();
					break;
				case 'annualCal':
					$this->gen_child_support_8_14D();
					break;
			}
		}
		// page 3 -> protocols for reimbursement of child-related expenses -> optional
		if (isset($_SESSION['responses']['childSupportRei']) && $_SESSION['responses']['childSupportRei'] == "8.14e") {
			$this->gen_child_support_8_14E();
		}
		// page 3 -> protocols for reimbursement of child-related expenses -> reimbursement method 
		$this->gen_child_support_8_14F(); // end of child support section 6






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
