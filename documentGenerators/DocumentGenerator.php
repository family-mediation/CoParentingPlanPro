<?php
abstract class documentGenerator
{
	public $fileName;
	public $responses;
	public $fileOutput;
	public $fileContentString;
	public $tableOfContentsString;
	public $fileType;

	// for section 1.00 on coparenting plan to get the day, month and year
	protected $day;
    protected $month;
    protected $year;

	public function __construct(string $fileName, string $fileType, array $responses)
	{
		$this->fileName = $fileName;
		$this->responses = $responses;
		$this->fileType = $fileType;
		$this->fileOutput = fopen("./" . $fileName . $fileType, "w+");
	}
	// Generate the different components.
	public abstract function genHeader();
	public abstract function gen_guiding_principals_statement();



    // Section 2: Children
    public abstract function gen_children_4_00(int $num);
    public abstract function gen_children_4_00_individual(int $childNum, string $letter);
    public abstract function gen_children_4_00_last();
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
    public abstract function gen_physical_custody_timesharing_6_02BOptional();
    public abstract function gen_physical_custody_timesharing_6_02C(string $type);
    public abstract function gen_physical_custody_timesharing_6_02D(string $type);
    public abstract function gen_physical_custody_timesharing_6_02E(string $type);
    public abstract function gen_physical_custody_timesharing_6_03();
    public abstract function gen_physical_custody_timesharing_6_03A();
    public abstract function gen_physical_custody_timesharing_6_03B();
    public abstract function gen_physical_custody_timesharing_6_03C();
    public abstract function gen_physical_custody_timesharing_6_03D();
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


	//Section 5 Communication
	public abstract function gen_communication_7();
	public abstract function gen_communication_7_01();
	public abstract function gen_communication_7_02();
	public abstract function gen_communication_7_03();
	public abstract function gen_communication_7_04();
	public abstract function gen_communication_7_05();
	public abstract function gen_communication_7_06();
	public abstract function gen_communication_7_06a();
	public abstract function gen_communication_7_07();
	public abstract function gen_communication_7_08();
	public abstract function gen_communication_7_09();
	public abstract function gen_communication_7_10();
	public abstract function gen_communication_7_11();


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

	//Section 8 Other section
	public abstract function gen_other_9_00();
	public abstract function gen_other_9_01();
	public abstract function gen_other_9_02();
	public abstract function gen_other_9_03();
	public abstract function gen_other_9_04();
	public abstract function gen_other_9_05();
	public abstract function gen_other_9_06();
	public abstract function gen_other_9_07();
	public abstract function gen_other_9_08();
	public abstract function gen_other_9_09();
	public abstract function gen_other_9_10();
	public abstract function gen_other_9_11();
	public abstract function gen_other_9_12();
	public abstract function gen_other_9_13();
	public abstract function gen_other_9_14();
	public abstract function gen_other_9_15();
	public abstract function gen_other_9_16();

    //Section 8: Legal
    public abstract function gen_legal_10_00();
    public abstract function gen_legal_10_01();
    public abstract function gen_legal_10_02();

    public abstract function signature();

	//end of other section
	public abstract function genFooter();
	public abstract function packageDocument();
	/* TODO:// HEY YOU GUYS, THIS IS WHERE ALL OF THE LOGIC GOES.*/
	public function generateDocument()
	{
		// for section 1.00 on coparenting plan
		if (isset($this->responses['date1'])) {
			// get the date from the session
			$dateString = $this->responses['date1'];

			// parse the date string
			$dateComponents = date_parse($dateString);
			if ($dateComponents !== false) {
				// extract day, month, and year
				$this->day = $dateComponents['day'];
				$this->month = $dateComponents['month'];
				$this->year = $dateComponents['year'];
			}
		}
		$this->genHeader();

        /** Section 2: Children. */
        $childNum = 1;
        for ($i  = 2; $i <= 6; $i++) {
            if (($_SESSION['responses']['child' . $i . 'Initials'] != "") && ($_SESSION['responses']['child' . $i . 'Birthday'] != "")) {
                console_log($_SESSION['responses']['child' . $i . 'Initials']);
                $childNum++;
            }
        }
        $this->gen_children_4_00($childNum);
        $this->gen_children_4_00_individual(1, "A"); //included by default
        //cannot put into a for loop since letters will be different:
        if (($_SESSION['responses']['child2Initials'] != "") && ($_SESSION['responses']['child2Birthday'] != "")) {
            $this->gen_children_4_00_individual(2, "B");
        }
        if (($_SESSION['responses']['child3Initials'] != "") && ($_SESSION['responses']['child3Birthday'] != "")) {
            $this->gen_children_4_00_individual(3, "C");
        }
        if (($_SESSION['responses']['child4Initials'] != "") && ($_SESSION['responses']['child4Birthday'] != "")) {
            $this->gen_children_4_00_individual(4, "D");
        }
        if (($_SESSION['responses']['child5Initials'] != "") && ($_SESSION['responses']['child5Birthday'] != "")) {
            $this->gen_children_4_00_individual(5, "E");
        }
        if (($_SESSION['responses']['child6Initials'] != "") && ($_SESSION['responses']['child6Birthday'] != "")) {
            $this->gen_children_4_00_individual(6, "F");
        }

        $this->gen_children_4_00_last();


		/*** Section 3: Legal Custody ***/
		// Legal Custody: page 0 (definition)
		$this->gen_legal_custody_5_00();

		// Legal Custody: page 1
		// joint to both parents -> tie-breaking authority to parent A or B
		if (isset($this->responses['custody']) && $this->responses['custody'] == "joint") {
			$this->gen_legal_custody_5_01();
			if (isset($this->responses['tieBreakingAuthority']) && $this->responses['tieBreakingAuthority'] == "tieBreakA") {
				$this->gen_legal_custody_5_03A();
			}
			if (isset($this->responses['tieBreakingAuthority']) && $this->responses['tieBreakingAuthority'] == "tieBreakB") {
				$this->gen_legal_custody_5_03B();
			}
		}
		// sole to parent A
		if (isset($this->responses['custody']) && $this->responses['custody'] == "soleA") {
			$this->gen_legal_custody_5_05A();
		}
		// sole to parent B
		if (isset($this->responses['custody']) && $this->responses['custody'] == "soleB") {
			$this->gen_legal_custody_5_05B();
		}
		// parent must consult but there is a division of authority 
		if (isset($this->responses['custody']) && $this->responses['custody'] == "divisionAuth") {
			$this->gen_legal_custody_5_04();
		}

		// Legal Custody: page 2 (optional)
		if (isset($this->responses['legalcustody'])) {
			foreach ($this->responses['legalcustody'] as $x) {
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
        if (isset($this->responses['schoolYearSchedule'])) {
            switch ($this->responses['schoolYearSchedule']) {
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
        if (isset($this->responses['schoolFallBreakSchedule'])) {
            switch ($this->responses['schoolFallBreakSchedule']) {
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
        if (isset($this->responses['schoolThanksgivingBreakSchedule'])) {
            switch ($this->responses['schoolThanksgivingBreakSchedule']) {
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
        if (isset($this->responses['schoolThanksgivingBreakScheduleOptional'])) {
            if ($this->responses['schoolThanksgivingBreakScheduleOptional']) {
                $this->gen_physical_custody_timesharing_6_02BOptional();
            }
        }
        if (isset($this->responses['schoolWinterBreakSchedule'])) {
            switch ($this->responses['schoolWinterBreakSchedule']) {
                case "winter-split-break":
                    $this->gen_physical_custody_timesharing_6_02C("winter-split-break");
                    break;
                case "winter-alternate-break":
                    $this->gen_physical_custody_timesharing_6_02C("winter-alternate-break");
                    break;
                case "winter-continue-schedule":
                    $this->gen_physical_custody_timesharing_6_02C("winter-continue-schedule");
                    break;
                case "winter-split-holiday-break":
                    $this->gen_physical_custody_timesharing_6_02C("winter-split-holiday-break");
                    break;
            }
        }
        if (isset($this->responses['schoolSpringBreakSchedule'])) {
            switch ($this->responses['schoolSpringBreakSchedule']) {
                case "spring-split-break":
                    $this->gen_physical_custody_timesharing_6_02D("spring-split-break");
                    break;
                case "spring-alternate-break":
                    $this->gen_physical_custody_timesharing_6_02D("spring-alternate-break");
                    break;
                case "spring-continue-schedule":
                    $this->gen_physical_custody_timesharing_6_02D("spring-continue-schedule");
                    break;
            }
        }
        if (isset($this->responses['schoolSummerBreakSchedule'])) {
            switch ($this->responses['schoolSummerBreakSchedule']) {
                case "summer-split-break":
                    $this->gen_physical_custody_timesharing_6_02E("summer-split-break");
                    break;
                case "summer-continue-uninterrupted-schedule":
                    $this->gen_physical_custody_timesharing_6_02E("summer-continue-uninterrupted-schedule");
                    break;
                case "summer-continue-schedule":
                    $this->gen_physical_custody_timesharing_6_02E("summer-continue-schedule");
                    break;
            }
        }
        // Page 2 - Holiday Table, need to implement: three choices shown in doc but excel sheet only chooses between parent A and B.
        $this->gen_physical_custody_timesharing_6_03();
        $this->gen_physical_custody_timesharing_6_03A();
        $this->gen_physical_custody_timesharing_6_03B();
        $this->gen_physical_custody_timesharing_6_03C();
        $this->gen_physical_custody_timesharing_6_03D();

        // Page 3 - Optional checkboxes.
        // Must implement new input data for all:
        if (isset($this->responses['travel-with-children'])) {
            $this->gen_physical_custody_timesharing_6_04();
        }
        if (isset($this->responses['reschedule-make-up-time'])) {
            $this->gen_physical_custody_timesharing_6_05();
        }
        if (isset($this->responses['first-refusal'])) {
            $this->gen_physical_custody_timesharing_6_06();
        }
        if (isset($this->responses['pick-up'])) {
            $this->gen_physical_custody_timesharing_6_07();
        }
        if (isset($this->responses['drop-off'])) {
            $this->gen_physical_custody_timesharing_6_08();
        }
        if (isset($this->responses['exchanges-neutral-location'])) {
            $this->gen_physical_custody_timesharing_6_09();
        }
        if (isset($this->responses['delegate-pick-up'])) {
            $this->gen_physical_custody_timesharing_6_10();
        }
        if (isset($this->responses['persons-authorized'])) {
            $this->gen_physical_custody_timesharing_6_11();
        }
        if (isset($this->responses['children-belongings'])) {
            $this->gen_physical_custody_timesharing_6_12();
        }
        if (isset($this->responses['relocation'])) {
            $this->gen_physical_custody_timesharing_6_13();
        }
        if (isset($this->responses['modify-schedule'])) {
            $this->gen_physical_custody_timesharing_6_14();
        }


		/***Communication (supposed to be section 5, but 7 according to index of plan) ***/
		//Communication: explanation page 0 
		$this->gen_communication_7();

		//Communication method page 1 
		if (isset($this->responses['commMethod']) && $this->responses['commMethod'] == "email") {
			$this->gen_communication_7_01();
		}

		if (isset($this->responses['commMethod']) && $this->responses['commMethod'] == "bothemailtext") {
			$this->gen_communication_7_02();
		}

		if (isset($this->responses['commMethod']) && $this->responses['commMethod'] == "wizardmutual") {
			$this->gen_communication_7_03();
		}

		//Optional communication page2
		//Communication Between Co-Parents:
		if (isset($_SESSION['responses']['commbetweenCP'])) {
		  foreach($_SESSION['responses']['commbetweenCP']as $x) {
			switch ($x) {
				case '7.04':
					$this->gen_communication_7_04();
					break;
				case '7.05':
					$this->gen_communication_7_05();
					break;
				case '7.06':
					$this->gen_communication_7_06();
					$this->gen_communication_7_06a();
					break;
			}
		  }
	    }

		//Communication Between Child(ren) and Non-Custodial Parent:
		if (isset($_SESSION['responses']['betweenchildparent'])) {
		  foreach($_SESSION['responses']['betweenchildparent'] as $x) {
			switch ($x) {
				case '7.07':
					$this->gen_communication_7_07();
					break;
				case '7.08':
					$this->gen_communication_7_08();
					break;
			}
		  }	
		}

		//Other Communication:
		if (isset($_SESSION['responses']['otherComm'])) {
		  foreach($_SESSION['responses']['otherComm'] as $x) {
			switch ($x) {
				case '7.09':
					$this->gen_communication_7_09();
					break;
				case '7.10':
					$this->gen_communication_7_10();
					break;
				case '7.11':
					$this->gen_communication_7_11();
					break;
			}
		  }
		}

		/*** Section 6: Child Support ***/
		// Child support: page 0
		// header & child support guidelines amount under the law
		$this->gen_child_support_8_00();

		// page 0 -> pick only one 
		if (isset($this->responses['childSupport'])) {
			switch ($this->responses['childSupport']) {
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
		if (isset($this->responses['payment'])) {
			switch ($this->responses['payment']) {
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
		if (isset($this->responses['insurance'])) {
			$this->gen_child_support_8_09(); //header
			switch ($this->responses['insurance']) {
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
		if (isset($this->responses['extraCurr'])) {
			$this->gen_child_support_8_10(); //header
			switch ($this->responses['extraCurr']) {
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
		if (isset($this->responses['privateSchool'])) {
			$this->gen_child_support_8_11(); //header
			switch ($this->responses['privateSchool']) {
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
		if (isset($this->responses['postHigh'])) {
			$this->gen_child_support_8_12(); //header
			switch ($this->responses['postHigh']) {
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
		if (isset($this->responses['taxPurpose'])) {
			$this->gen_child_support_8_13(); //header
			switch ($this->responses['taxPurpose']) {
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
		if (isset($this->responses['protocols'])) {
			$this->gen_child_support_8_14(); //header
			switch ($this->responses['protocols']) {
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
		if (isset($this->responses['childSupportRei']) && $this->responses['childSupportRei'] == "8.14e") {
			$this->gen_child_support_8_14E();
		}
		// page 3 -> protocols for reimbursement of child-related expenses -> reimbursement method 
		$this->gen_child_support_8_14F(); // end of child support section 6


		//Section 8 Other section
		if (isset($this->responses['counseling'])) {
			switch ($this->responses['counseling']) {
				case 'therapistInput9.00':
					$this->gen_other_9_00();
					break;
			}
		}

		if (isset($this->responses['childfocused'])) {
			switch ($this->responses['childfocused']) {
				case 'therapistInput9.01':
					$this->gen_other_9_01();
					break;
			}
		}

		if (isset($_SESSION['responses']['other']) && $_SESSION['responses']['other'] == "9.02") {
			$this->gen_other_9_02();
		}
		
		if (isset($_SESSION['responses']['other']) && $_SESSION['responses']['other'] == "9.03") {
			$this->gen_other_9_03();
		}

		if (isset($_SESSION['responses']['other']) && $_SESSION['responses']['other'] == "9.04") {
			$this->gen_other_9_04();
		}

		if (isset($_SESSION['responses']['other']) && $_SESSION['responses']['other'] == "9.05") {
			$this->gen_other_9_05();
		}

		if (isset($this->responses['other'])) {
			switch ($this->responses['other']) {
				case 'parentAB_Other':
					$this->gen_other_9_06();
					break;
			}
		}

		if (isset($_SESSION['responses']['other']) && $_SESSION['responses']['other'] == "9.07") {
			$this->gen_other_9_07();
		}

		if (isset($_SESSION['responses']['other']) && $_SESSION['responses']['other'] == "9.08") {
			$this->gen_other_9_08();
		}

		if (isset($_SESSION['responses']['other']) && $_SESSION['responses']['other'] == "9.09") {
			$this->gen_other_9_09();
		}

		$this->gen_other_9_10();
		if (isset($_SESSION['responses']['other']) && $_SESSION['responses']['other'] == "9.10") {
			$this->gen_other_9_10();
		}

		if (isset($this->responses['other'])) {
			switch ($this->responses['other']) {
				case 'parentABdoc_Other':
					$this->gen_other_9_11();
					break;
				case 'parentABdoc_Other2':
					$this->gen_other_9_11();
					break;
			}
		}

		if (isset($_SESSION['responses']['other']) && $_SESSION['responses']['other'] == "9.12") {
			$this->gen_other_9_12();
		}

		if (isset($this->responses['other'])) {
			switch ($this->responses['other']) {
				case 'parentABdoc_Other3':
					$this->gen_other_9_13();
					break;
				case 'parentABdoc_Other4':
					$this->gen_other_9_13();
					break;
			}
		}

		if (isset($_SESSION['responses']['other']) && $_SESSION['responses']['other'] == "9.14") {
			$this->gen_other_9_14();
		}

		if (isset($_SESSION['responses']['other']) && $_SESSION['responses']['other'] == "9.15") {
			$this->gen_other_9_15();
		}

		if (isset($_SESSION['responses']['other']) && $_SESSION['responses']['other'] == "9.16") {
			$this->gen_other_9_16();
		}

        // Legal
        $this->gen_legal_10_00();
        $this->gen_legal_10_01();
        $this->gen_legal_10_02();

        $this->signature();

		$this->genFooter();
		$this->packageDocument();

        if($this->fileOutput != false) {
            fclose($this->fileOutput);
        }
	}
}
