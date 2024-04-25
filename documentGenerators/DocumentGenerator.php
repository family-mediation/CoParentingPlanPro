<?php
abstract class documentGenerator
{
	public $fileName;
	public $responses;
	public $fileOutput;
	public $fileContentString;
	public $tableOfContentsString;

	// for section 1.00 on coparenting plan to get the day, month and year
	protected $day;
    protected $month;
    protected $year;

	public function __construct(string $fileName, array $responses)
	{
		$this->fileName = $fileName;
		$this->responses = $responses;
		$this->fileOutput = fopen("./" . $fileName, "w+");
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
    public abstract function gen_physical_custody_timesharing_6_03(array $res);
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
		if (isset($_SESSION['responses']['date1'])) {
			// get the date from the session
			$dateString = $_SESSION['responses']['date1'];

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
        if (isset($_SESSION['responses']['schoolThanksgivingBreakScheduleOptional'])) {
            if ($_SESSION['responses']['schoolThanksgivingBreakScheduleOptional']) {
                $this->gen_physical_custody_timesharing_6_02BOptional();
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
                case "winter-split-holiday-break":
                    $this->gen_physical_custody_timesharing_6_02C("winter-split-holiday-break");
                    break;
            }
        }
        if (isset($_SESSION['responses']['schoolSpringBreakSchedule'])) {
            switch ($_SESSION['responses']['schoolSpringBreakSchedule']) {
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
        if (isset($_SESSION['responses']['schoolSummerBreakSchedule'])) {
            switch ($_SESSION['responses']['schoolSummerBreakSchedule']) {
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
        // Page 2 - Holiday Table
        $arr = []; //an array that will be assigned values to list out in the table
        for ($i = 0; $i < 40; $i++) {
            $arr[$i] = 'Blank';
        }
        //newYears
        switch ($this->responses['newYearsA']) {
            case 'newYearsBlankA':
                $arr[0] = 'Blank';
                break;
            case 'newYearsEveryA':
                $arr[0] = 'Every Year';
                break;
            case 'newYearsEvenA':
                $arr[0] = 'Even Years';
                break;
            case 'newYearsOddA':
                $arr[0] = 'Odd Years';
                break;
            case 'newYearsAttachA':
                $arr[0] = 'Attach to Weekend';
                break;
            case 'newYearsSplitA':
                $arr[0] = 'Split';
                break;
            default:
                console_log("error in newYearsA switch - DocumentGenerator.php");
        }
        switch ($this->responses['newYearsB']) {
            case 'newYearsBlankB':
                $arr[1] = 'Blank';
                break;
            case 'newYearsEveryB':
                $arr[1] = 'Every Year';
                break;
            case 'newYearsEvenB':
                $arr[1] = 'Even Years';
                break;
            case 'newYearsOddB':
                $arr[1] = 'Odd Years';
                break;
            case 'newYearsAttachB':
                $arr[1] = 'Attach to Weekend';
                break;
            case 'newYearsSplitB':
                $arr[1] = 'Split';
                break;
            default:
                console_log("error in newYearsB switch - DocumentGenerator.php");
        }

        //mlk
        switch ($this->responses['mlkA']) {
            case 'mlkBlankA':
                $arr[2] = 'Blank';
                break;
            case 'mlkEveryA':
                $arr[2] = 'Every Year';
                break;
            case 'mlkEvenA':
                $arr[2] = 'Even Years';
                break;
            case 'mlkOddA':
                $arr[2] = 'Odd Years';
                break;
            case 'mlkAttachA':
                $arr[2] = 'Attach to Weekend';
                break;
            case 'mlkSplitA':
                $arr[2] = 'Split';
                break;
            default:
                console_log("error in mlkA switch - DocumentGenerator.php");
        }
        switch ($this->responses['mlkB']) {
            case 'mlkBlankB':
                $arr[3] = 'Blank';
                break;
            case 'mlkEveryB':
                $arr[3] = 'Every Year';
                break;
            case 'mlkEvenB':
                $arr[3] = 'Even Years';
                break;
            case 'mlkOddB':
                $arr[3] = 'Odd Years';
                break;
            case 'mlkAttachB':
                $arr[3] = 'Attach to Weekend';
                break;
            case 'mlkSplitB':
                $arr[3] = 'Split';
                break;
            default:
                console_log("error in mlkB switch - DocumentGenerator.php");
        }

        //presidents
        switch ($this->responses['presidentsA']) {
            case 'presidentsBlankA':
                $arr[4] = 'Blank';
                break;
            case 'presidentsEveryA':
                $arr[4] = 'Every Year';
                break;
            case 'presidentsEvenA':
                $arr[4] = 'Even Years';
                break;
            case 'presidentsOddA':
                $arr[4] = 'Odd Years';
                break;
            case 'presidentsAttachA':
                $arr[4] = 'Attach to Weekend';
                break;
            case 'presidentsSplitA':
                $arr[4] = 'Split';
                break;
            default:
                console_log("error in presidentsA switch - DocumentGenerator.php");
        }
        switch ($this->responses['presidentsB']) {
            case 'presidentsBlankB':
                $arr[5] = 'Blank';
                break;
            case 'presidentsEveryB':
                $arr[5] = 'Every Year';
                break;
            case 'presidentsEvenB':
                $arr[5] = 'Even Years';
                break;
            case 'presidentsOddB':
                $arr[5] = 'Odd Years';
                break;
            case 'presidentsAttachB':
                $arr[5] = 'Attach to Weekend';
                break;
            case 'presidentsSplitB':
                $arr[5] = 'Split';
                break;
            default:
                console_log("error in presidentsB switch - DocumentGenerator.php");
        }

        //kuhio
        switch ($this->responses['kuhioA']) {
            case 'kuhioBlankA':
                $arr[6] = 'Blank';
                break;
            case 'kuhioEveryA':
                $arr[6] = 'Every Year';
                break;
            case 'kuhioEvenA':
                $arr[6] = 'Even Years';
                break;
            case 'kuhioOddA':
                $arr[6] = 'Odd Years';
                break;
            case 'kuhioAttachA':
                $arr[6] = 'Attach to Weekend';
                break;
            case 'kuhioSplitA':
                $arr[6] = 'Split';
                break;
            default:
                console_log("error in kuhioA switch - DocumentGenerator.php");
        }
        switch ($this->responses['kuhioB']) {
            case 'kuhioBlankB':
                $arr[7] = 'Blank';
                break;
            case 'kuhioEveryB':
                $arr[7] = 'Every Year';
                break;
            case 'kuhioEvenB':
                $arr[7] = 'Even Years';
                break;
            case 'kuhioOddB':
                $arr[7] = 'Odd Years';
                break;
            case 'kuhioAttachB':
                $arr[7] = 'Attach to Weekend';
                break;
            case 'kuhioSplitB':
                $arr[7] = 'Split';
                break;
            default:
                console_log("error in kuhioB switch - DocumentGenerator.php");
        }

        //goodFriday
        switch ($this->responses['goodFridayA']) {
            case 'goodFridayBlankA':
                $arr[8] = 'Blank';
                break;
            case 'goodFridayEveryA':
                $arr[8] = 'Every Year';
                break;
            case 'goodFridayEvenA':
                $arr[8] = 'Even Years';
                break;
            case 'goodFridayOddA':
                $arr[8] = 'Odd Years';
                break;
            case 'goodFridayAttachA':
                $arr[8] = 'Attach to Weekend';
                break;
            case 'goodFridaySplitA':
                $arr[8] = 'Split';
                break;
            default:
                console_log("error in goodFridayA switch - DocumentGenerator.php");
        }
        switch ($this->responses['goodFridayB']) {
            case 'goodFridayBlankB':
                $arr[9] = 'Blank';
                break;
            case 'goodFridayEveryB':
                $arr[9] = 'Every Year';
                break;
            case 'goodFridayEvenB':
                $arr[9] = 'Even Years';
                break;
            case 'goodFridayOddB':
                $arr[9] = 'Odd Years';
                break;
            case 'goodFridayAttachB':
                $arr[9] = 'Attach to Weekend';
                break;
            case 'goodFridaySplitB':
                $arr[9] = 'Split';
                break;
            default:
                console_log("error in goodFridayB switch - DocumentGenerator.php");
        }

        //easter
        switch ($this->responses['easterA']) {
            case 'easterBlankA':
                $arr[10] = 'Blank';
                break;
            case 'easterEveryA':
                $arr[10] = 'Every Year';
                break;
            case 'easterEvenA':
                $arr[10] = 'Even Years';
                break;
            case 'easterOddA':
                $arr[10] = 'Odd Years';
                break;
            case 'easterAttachA':
                $arr[10] = 'Attach to Weekend';
                break;
            case 'easterSplitA':
                $arr[10] = 'Split';
                break;
            default:
                console_log("error in easterA switch - DocumentGenerator.php");
        }
        switch ($this->responses['easterB']) {
            case 'easterBlankB':
                $arr[11] = 'Blank';
                break;
            case 'easterEveryB':
                $arr[11] = 'Every Year';
                break;
            case 'easterEvenB':
                $arr[11] = 'Even Years';
                break;
            case 'easterOddB':
                $arr[11] = 'Odd Years';
                break;
            case 'easterAttachB':
                $arr[11] = 'Attach to Weekend';
                break;
            case 'easterSplitB':
                $arr[11] = 'Split';
                break;
            default:
                console_log("error in easterB switch - DocumentGenerator.php");
        }

        //mothers
        switch ($this->responses['mothersA']) {
            case 'mothersBlankA':
                $arr[12] = 'Blank';
                break;
            case 'mothersEveryA':
                $arr[12] = 'Every Year';
                break;
            case 'mothersEvenA':
                $arr[12] = 'Even Years';
                break;
            case 'mothersOddA':
                $arr[12] = 'Odd Years';
                break;
            case 'mothersAttachA':
                $arr[12] = 'Attach to Weekend';
                break;
            case 'mothersSplitA':
                $arr[12] = 'Split';
                break;
            default:
                console_log("error in mothersA switch - DocumentGenerator.php");
        }
        switch ($this->responses['mothersB']) {
            case 'mothersBlankB':
                $arr[13] = 'Blank';
                break;
            case 'mothersEveryB':
                $arr[13] = 'Every Year';
                break;
            case 'mothersEvenB':
                $arr[13] = 'Even Years';
                break;
            case 'mothersOddB':
                $arr[13] = 'Odd Years';
                break;
            case 'mothersAttachB':
                $arr[13] = 'Attach to Weekend';
                break;
            case 'mothersSplitB':
                $arr[13] = 'Split';
                break;
            default:
                console_log("error in mothersB switch - DocumentGenerator.php");
        }

        //memorial
        switch ($this->responses['memorialA']) {
            case 'memorialBlankA':
                $arr[14] = 'Blank';
                break;
            case 'memorialEveryA':
                $arr[14] = 'Every Year';
                break;
            case 'memorialEvenA':
                $arr[14] = 'Even Years';
                break;
            case 'memorialOddA':
                $arr[14] = 'Odd Years';
                break;
            case 'memorialAttachA':
                $arr[14] = 'Attach to Weekend';
                break;
            case 'memorialSplitA':
                $arr[14] = 'Split';
                break;
            default:
                console_log("error in memorialA switch - DocumentGenerator.php");
        }
        switch ($this->responses['memorialB']) {
            case 'memorialBlankB':
                $arr[15] = 'Blank';
                break;
            case 'memorialEveryB':
                $arr[15] = 'Every Year';
                break;
            case 'memorialEvenB':
                $arr[15] = 'Even Years';
                break;
            case 'memorialOddB':
                $arr[15] = 'Odd Years';
                break;
            case 'memorialAttachB':
                $arr[15] = 'Attach to Weekend';
                break;
            case 'memorialSplitB':
                $arr[15] = 'Split';
                break;
            default:
                console_log("error in memorialB switch - DocumentGenerator.php");
        }

        //fathers
        switch ($this->responses['fathersA']) {
            case 'fathersBlankA':
                $arr[16] = 'Blank';
                break;
            case 'fathersEveryA':
                $arr[16] = 'Every Year';
                break;
            case 'fathersEvenA':
                $arr[16] = 'Even Years';
                break;
            case 'fathersOddA':
                $arr[16] = 'Odd Years';
                break;
            case 'fathersAttachA':
                $arr[16] = 'Attach to Weekend';
                break;
            case 'fathersSplitA':
                $arr[16] = 'Split';
                break;
            default:
                console_log("error in fathersA switch - DocumentGenerator.php");
        }
        switch ($this->responses['fathersB']) {
            case 'fathersBlankB':
                $arr[17] = 'Blank';
                break;
            case 'fathersEveryB':
                $arr[17] = 'Every Year';
                break;
            case 'fathersEvenB':
                $arr[17] = 'Even Years';
                break;
            case 'fathersOddB':
                $arr[17] = 'Odd Years';
                break;
            case 'fathersAttachB':
                $arr[17] = 'Attach to Weekend';
                break;
            case 'fathersSplitB':
                $arr[17] = 'Split';
                break;
            default:
                console_log("error in fathersB switch - DocumentGenerator.php");
        }

        //julyFourth
        switch ($this->responses['julyFourthA']) {
            case 'julyFourthBlankA':
                $arr[18] = 'Blank';
                break;
            case 'julyFourthEveryA':
                $arr[18] = 'Every Year';
                break;
            case 'julyFourthEvenA':
                $arr[18] = 'Even Years';
                break;
            case 'julyFourthOddA':
                $arr[18] = 'Odd Years';
                break;
            case 'julyFourthAttachA':
                $arr[18] = 'Attach to Weekend';
                break;
            case 'julyFourthSplitA':
                $arr[18] = 'Split';
                break;
            default:
                console_log("error in julyFourthA switch - DocumentGenerator.php");
        }
        switch ($this->responses['julyFourthB']) {
            case 'julyFourthBlankB':
                $arr[19] = 'Blank';
                break;
            case 'julyFourthEveryB':
                $arr[19] = 'Every Year';
                break;
            case 'julyFourthEvenB':
                $arr[19] = 'Even Years';
                break;
            case 'julyFourthOddB':
                $arr[19] = 'Odd Years';
                break;
            case 'julyFourthAttachB':
                $arr[19] = 'Attach to Weekend';
                break;
            case 'julyFourthSplitB':
                $arr[19] = 'Split';
                break;
            default:
                console_log("error in julyFourthB switch - DocumentGenerator.php");
        }

        //statehood
        switch ($this->responses['statehoodA']) {
            case 'statehoodBlankA':
                $arr[20] = 'Blank';
                break;
            case 'statehoodEveryA':
                $arr[20] = 'Every Year';
                break;
            case 'statehoodEvenA':
                $arr[20] = 'Even Years';
                break;
            case 'statehoodOddA':
                $arr[20] = 'Odd Years';
                break;
            case 'statehoodAttachA':
                $arr[20] = 'Attach to Weekend';
                break;
            case 'statehoodSplitA':
                $arr[20] = 'Split';
                break;
            default:
                console_log("error in statehoodA switch - DocumentGenerator.php");
        }
        switch ($this->responses['statehoodB']) {
            case 'statehoodBlankB':
                $arr[21] = 'Blank';
                break;
            case 'statehoodEveryB':
                $arr[21] = 'Every Year';
                break;
            case 'statehoodEvenB':
                $arr[21] = 'Even Years';
                break;
            case 'statehoodOddB':
                $arr[21] = 'Odd Years';
                break;
            case 'statehoodAttachB':
                $arr[21] = 'Attach to Weekend';
                break;
            case 'statehoodSplitB':
                $arr[21] = 'Split';
                break;
            default:
                console_log("error in statehoodB switch - DocumentGenerator.php");
        }

        //labor
        switch ($this->responses['laborA']) {
            case 'laborBlankA':
                $arr[22] = 'Blank';
                break;
            case 'laborEveryA':
                $arr[22] = 'Every Year';
                break;
            case 'laborEvenA':
                $arr[22] = 'Even Years';
                break;
            case 'laborOddA':
                $arr[22] = 'Odd Years';
                break;
            case 'laborAttachA':
                $arr[22] = 'Attach to Weekend';
                break;
            case 'laborSplitA':
                $arr[22] = 'Split';
                break;
            default:
                console_log("error in laborA switch - DocumentGenerator.php");
        }
        switch ($this->responses['laborB']) {
            case 'laborBlankB':
                $arr[23] = 'Blank';
                break;
            case 'laborEveryB':
                $arr[23] = 'Every Year';
                break;
            case 'laborEvenB':
                $arr[23] = 'Even Years';
                break;
            case 'laborOddB':
                $arr[23] = 'Odd Years';
                break;
            case 'laborAttachB':
                $arr[23] = 'Attach to Weekend';
                break;
            case 'laborSplitB':
                $arr[23] = 'Split';
                break;
            default:
                console_log("error in laborB switch - DocumentGenerator.php");
        }

        //election
        switch ($this->responses['electionA']) {
            case 'electionBlankA':
                $arr[24] = 'Blank';
                break;
            case 'electionEveryA':
                $arr[24] = 'Every Year';
                break;
            case 'electionEvenA':
                $arr[24] = 'Even Years';
                break;
            case 'electionOddA':
                $arr[24] = 'Odd Years';
                break;
            case 'electionAttachA':
                $arr[24] = 'Attach to Weekend';
                break;
            case 'electionSplitA':
                $arr[24] = 'Split';
                break;
            default:
                console_log("error in electionA switch - DocumentGenerator.php");
        }
        switch ($this->responses['electionB']) {
            case 'electionBlankB':
                $arr[25] = 'Blank';
                break;
            case 'electionEveryB':
                $arr[25] = 'Every Year';
                break;
            case 'electionEvenB':
                $arr[25] = 'Even Years';
                break;
            case 'electionOddB':
                $arr[25] = 'Odd Years';
                break;
            case 'electionAttachB':
                $arr[25] = 'Attach to Weekend';
                break;
            case 'electionSplitB':
                $arr[25] = 'Split';
                break;
            default:
                console_log("error in electionB switch - DocumentGenerator.php");
        }

        //veterans
        switch ($this->responses['veteransA']) {
            case 'veteransBlankA':
                $arr[26] = 'Blank';
                break;
            case 'veteransEveryA':
                $arr[26] = 'Every Year';
                break;
            case 'veteransEvenA':
                $arr[26] = 'Even Years';
                break;
            case 'veteransOddA':
                $arr[26] = 'Odd Years';
                break;
            case 'veteransAttachA':
                $arr[26] = 'Attach to Weekend';
                break;
            case 'veteransSplitA':
                $arr[26] = 'Split';
                break;
            default:
                console_log("error in veteransA switch - DocumentGenerator.php");
        }
        switch ($this->responses['veteransB']) {
            case 'veteransBlankB':
                $arr[27] = 'Blank';
                break;
            case 'veteransEveryB':
                $arr[27] = 'Every Year';
                break;
            case 'veteransEvenB':
                $arr[27] = 'Even Years';
                break;
            case 'veteransOddB':
                $arr[27] = 'Odd Years';
                break;
            case 'veteransAttachB':
                $arr[27] = 'Attach to Weekend';
                break;
            case 'veteransSplitB':
                $arr[27] = 'Split';
                break;
            default:
                console_log("error in veteransB switch - DocumentGenerator.php");
        }

        //thanksgiving
        switch ($this->responses['thanksgivingA']) {
            case 'thanksgivingBlankA':
                $arr[28] = 'Blank';
                break;
            case 'thanksgivingEveryA':
                $arr[28] = 'Every Year';
                break;
            case 'thanksgivingEvenA':
                $arr[28] = 'Even Years';
                break;
            case 'thanksgivingOddA':
                $arr[28] = 'Odd Years';
                break;
            case 'thanksgivingAttachA':
                $arr[28] = 'Attach to Weekend';
                break;
            case 'thanksgivingSplitA':
                $arr[28] = 'Split';
                break;
            default:
                console_log("error in thanksgivingA switch - DocumentGenerator.php");
        }
        switch ($this->responses['thanksgivingB']) {
            case 'thanksgivingBlankB':
                $arr[29] = 'Blank';
                break;
            case 'thanksgivingEveryB':
                $arr[29] = 'Every Year';
                break;
            case 'thanksgivingEvenB':
                $arr[29] = 'Even Years';
                break;
            case 'thanksgivingOddB':
                $arr[29] = 'Odd Years';
                break;
            case 'thanksgivingAttachB':
                $arr[29] = 'Attach to Weekend';
                break;
            case 'thanksgivingSplitB':
                $arr[29] = 'Split';
                break;
            default:
                console_log("error in thanksgivingB switch - DocumentGenerator.php");
        }

        //christmasEve
        switch ($this->responses['christmasEveA']) {
            case 'christmasEveBlankA':
                $arr[30] = 'Blank';
                break;
            case 'christmasEveEveryA':
                $arr[30] = 'Every Year';
                break;
            case 'christmasEveEvenA':
                $arr[30] = 'Even Years';
                break;
            case 'christmasEveOddA':
                $arr[30] = 'Odd Years';
                break;
            case 'christmasEveAttachA':
                $arr[30] = 'Attach to Weekend';
                break;
            case 'christmasEveSplitA':
                $arr[30] = 'Split';
                break;
            default:
                console_log("error in christmasEveA switch - DocumentGenerator.php");
        }
        switch ($this->responses['christmasEveB']) {
            case 'christmasEveBlankB':
                $arr[31] = 'Blank';
                break;
            case 'christmasEveEveryB':
                $arr[31] = 'Every Year';
                break;
            case 'christmasEveEvenB':
                $arr[31] = 'Even Years';
                break;
            case 'christmasEveOddB':
                $arr[31] = 'Odd Years';
                break;
            case 'christmasEveAttachB':
                $arr[31] = 'Attach to Weekend';
                break;
            case 'christmasEveSplitB':
                $arr[31] = 'Split';
                break;
            default:
                console_log("error in christmasEveB switch - DocumentGenerator.php");
        }

        //christmas
        switch ($this->responses['christmasA']) {
            case 'christmasBlankA':
                $arr[32] = 'Blank';
                break;
            case 'christmasEveryA':
                $arr[32] = 'Every Year';
                break;
            case 'christmasEvenA':
                $arr[32] = 'Even Years';
                break;
            case 'christmasOddA':
                $arr[32] = 'Odd Years';
                break;
            case 'christmasAttachA':
                $arr[32] = 'Attach to Weekend';
                break;
            case 'christmasSplitA':
                $arr[32] = 'Split';
                break;
            default:
                console_log("error in christmasA switch - DocumentGenerator.php");
        }
        switch ($this->responses['christmasB']) {
            case 'christmasBlankB':
                $arr[33] = 'Blank';
                break;
            case 'christmasEveryB':
                $arr[33] = 'Every Year';
                break;
            case 'christmasEvenB':
                $arr[33] = 'Even Years';
                break;
            case 'christmasOddB':
                $arr[33] = 'Odd Years';
                break;
            case 'christmasAttachB':
                $arr[33] = 'Attach to Weekend';
                break;
            case 'christmasSplitB':
                $arr[33] = 'Split';
                break;
            default:
                console_log("error in christmasB switch - DocumentGenerator.php");
        }

        //nye
        switch ($this->responses['nyeA']) {
            case 'nyeBlankA':
                $arr[34] = 'Blank';
                break;
            case 'nyeEveryA':
                $arr[34] = 'Every Year';
                break;
            case 'nyeEvenA':
                $arr[34] = 'Even Years';
                break;
            case 'nyeOddA':
                $arr[34] = 'Odd Years';
                break;
            case 'nyeAttachA':
                $arr[34] = 'Attach to Weekend';
                break;
            case 'nyeSplitA':
                $arr[34] = 'Split';
                break;
            default:
                console_log("error in nyeA switch - DocumentGenerator.php");
        }
        switch ($this->responses['nyeB']) {
            case 'nyeBlankB':
                $arr[35] = 'Blank';
                break;
            case 'nyeEveryB':
                $arr[35] = 'Every Year';
                break;
            case 'nyeEvenB':
                $arr[35] = 'Even Years';
                break;
            case 'nyeOddB':
                $arr[35] = 'Odd Years';
                break;
            case 'nyeAttachB':
                $arr[35] = 'Attach to Weekend';
                break;
            case 'nyeSplitB':
                $arr[35] = 'Split';
                break;
            default:
                console_log("error in nyeB switch - DocumentGenerator.php");
        }

        //partyA
        switch ($this->responses['partyAA']) {
            case 'partyABlankA':
                $arr[36] = 'Blank';
                break;
            case 'partyAEveryA':
                $arr[36] = 'Every Year';
                break;
            case 'partyAEvenA':
                $arr[36] = 'Even Years';
                break;
            case 'partyAOddA':
                $arr[36] = 'Odd Years';
                break;
            case 'partyAAttachA':
                $arr[36] = 'Attach to Weekend';
                break;
            case 'partyASplitA':
                $arr[36] = 'Split';
                break;
            default:
                console_log("error in partyAA switch - DocumentGenerator.php");
        }
        switch ($this->responses['partyAB']) {
            case 'partyABlankB':
                $arr[37] = 'Blank';
                break;
            case 'partyAEveryB':
                $arr[37] = 'Every Year';
                break;
            case 'partyAEvenB':
                $arr[37] = 'Even Years';
                break;
            case 'partyAOddB':
                $arr[37] = 'Odd Years';
                break;
            case 'partyAAttachB':
                $arr[37] = 'Attach to Weekend';
                break;
            case 'partyASplitB':
                $arr[37] = 'Split';
                break;
            default:
                console_log("error in partyAB switch - DocumentGenerator.php");
        }

        //partyB
        switch ($this->responses['partyBA']) {
            case 'partyBBlankA':
                $arr[38] = 'Blank';
                break;
            case 'partyBEveryA':
                $arr[38] = 'Every Year';
                break;
            case 'partyBEvenA':
                $arr[38] = 'Even Years';
                break;
            case 'partyBOddA':
                $arr[38] = 'Odd Years';
                break;
            case 'partyBAttachA':
                $arr[38] = 'Attach to Weekend';
                break;
            case 'partyBSplitA':
                $arr[38] = 'Split';
                break;
            default:
                console_log("error in partyBA switch - DocumentGenerator.php");
        }
        switch ($this->responses['partyBB']) {
            case 'partyBBlankB':
                $arr[39] = 'Blank';
                break;
            case 'partyBEveryB':
                $arr[39] = 'Every Year';
                break;
            case 'partyBEvenB':
                $arr[39] = 'Even Years';
                break;
            case 'partyBOddB':
                $arr[39] = 'Odd Years';
                break;
            case 'partyBAttachB':
                $arr[39] = 'Attach to Weekend';
                break;
            case 'partyBSplitB':
                $arr[39] = 'Split';
                break;
            default:
                console_log("error in partyBB switch - DocumentGenerator.php");
        }

        $this->gen_physical_custody_timesharing_6_03($arr);
        $this->gen_physical_custody_timesharing_6_03A();
        $this->gen_physical_custody_timesharing_6_03B();
        $this->gen_physical_custody_timesharing_6_03C();
        $this->gen_physical_custody_timesharing_6_03D();

        // Page 3 - Optional checkboxes.
        // Must implement new input data for all:
        if (isset($_SESSION['responses']['travel-with-children'])) {
            $this->gen_physical_custody_timesharing_6_04();
        }
        if (isset($_SESSION['responses']['reschedule-make-up-time'])) {
            $this->gen_physical_custody_timesharing_6_05();
        }
        if (isset($_SESSION['responses']['first-refusal'])) {
            $this->gen_physical_custody_timesharing_6_06();
        }
        if (isset($_SESSION['responses']['pick-up'])) {
            $this->gen_physical_custody_timesharing_6_07();
        }
        if (isset($_SESSION['responses']['drop-off'])) {
            $this->gen_physical_custody_timesharing_6_08();
        }
        if (isset($_SESSION['responses']['exchanges-neutral-location'])) {
            $this->gen_physical_custody_timesharing_6_09();
        }
        if (isset($_SESSION['responses']['delegate-pick-up'])) {
            $this->gen_physical_custody_timesharing_6_10();
        }
        if (isset($_SESSION['responses']['persons-authorized'])) {
            $this->gen_physical_custody_timesharing_6_11();
        }
        if (isset($_SESSION['responses']['children-belongings'])) {
            $this->gen_physical_custody_timesharing_6_12();
        }
        if (isset($_SESSION['responses']['relocation'])) {
            $this->gen_physical_custody_timesharing_6_13();
        }
        if (isset($_SESSION['responses']['modify-schedule'])) {
            $this->gen_physical_custody_timesharing_6_14();
        }

		/***Communication (supposed to be section 5, but 7 according to index of plan) ***/
		//Communication: explanation page 0 
		$this->gen_communication_7();

		//Communication method page 1 
		if (isset($_SESSION['responses']['commMethod']) && $_SESSION['responses']['commMethod'] == "email") {
			$this->gen_communication_7_01();
		}

		if (isset($_SESSION['responses']['commMethod']) && $_SESSION['responses']['commMethod'] == "bothemailtext") {
			$this->gen_communication_7_02();
		}

		if (isset($_SESSION['responses']['commMethod']) && $_SESSION['responses']['commMethod'] == "wizardmutual") {
			$this->gen_communication_7_03();
		}

		//Optional communication page2
		//Communication Between Co-Parents:
		if (isset($_SESSION['responses']['commbetweenCP'])) {
			switch ($_SESSION['responses']['commbetweenCP']) {
				case '7.04':
					$this->gen_communication_7_04();
					break;
				case '7.05':
					$this->gen_communication_7_05();
					break;
				case '7.06':
					$this->gen_communication_7_06a();
					break;
			}
		}

		
		//Communication Between Child(ren) and Non-Custodial Parent:
		if (isset($_SESSION['responses']['betweenchildparent'])) {
			switch ($_SESSION['responses']['betweenchildparent']) {
				case '7.07':
					$this->gen_communication_7_07();
					break;
				case 'A9:00':
					$this->gen_communication_7_08();
					break;
				case 'A17:00':
					$this->gen_communication_7_08();
					break;
				case 'B9:00':
					$this->gen_communication_7_08();
					break;
				case 'B17:00':
					$this->gen_communication_7_08();
					break;
			}
		}

		//Other Communication:
		if (isset($_SESSION['reponses']['otherComm'])) {
		  switch($_SESSION['reponses']['otherComm']) {
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


		//Section 8 Other section
		if (isset($_SESSION['responses']['counseling'])) {
			switch ($_SESSION['responses']['counseling']) {
				case 'therapistInput9.00':
					$this->gen_other_9_00();
					break;
			}
		}

		if (isset($_SESSION['responses']['childfocused'])) {
			switch ($_SESSION['responses']['childfocused']) {
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

		if (isset($_SESSION['responses']['other'])) {
			switch ($_SESSION['responses']['other']) {
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

		if (isset($_SESSION['responses']['other'])) {
			switch ($_SESSION['responses']['other']) {
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

		if (isset($_SESSION['responses']['other'])) {
			switch ($_SESSION['responses']['other']) {
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
