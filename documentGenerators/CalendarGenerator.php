<?php
class CalendarGenerator
{
	public $fileName;
	public $responses;
	public $fileOutput;
	public $fileContentString;
	public $generationDate;
	public $generationTime;
	public $partyAFull;
	public $partyBFull;
	public function __construct(string $fileName,array $responses)
 	{
		$this->fileName = $fileName;
		$this->responses = $responses;
		$this->fileOutput = fopen("./".$fileName,"w+");
		$this->partyAFull = $this->responses["partyAFirst"] . ' '.$this->responses["partyALast"];
		$this->partyBFull = $this->responses["partyBFirst"] . ' '.$this->responses["partyBLast"];
 	}

	private function generateEvent($eventTitle,$eventDescription,$start_date, $recurrence = "FREQ=WEEKLY;INTERVAL=2;BYDAY=MO,TU,WE,TH,FR,SA,SU") : string
	{
				// Generate RRULE
				$rrule = $recurrence;
				// Format the dates according to iCalendar format
				$start_date_formatted = $start_date->format('Ymd');
				// Other event information
				$generationDate = date("Ymd");
				$generationTime = date("His");
				// Construct the iCalendar event as a string
				$ical_event = "BEGIN:VEVENT\n";
				$ical_event .= "DTSTART;TZID=Pacific/Honolulu:" . $start_date_formatted . "\n";
				//$ical_event .= "DTEND;TZID=Pacific/Honolulu:" . $end_date_formatted . "\n";
				$ical_event .= "RRULE:" . $rrule . "\n";
				$ical_event .= "DTSTAMP:" . $generationDate . "T" . $generationTime . "Z\n";
				$ical_event .= "CREATED:" . $generationDate . "T" . $generationTime . "Z\n";
				$ical_event .= "LAST-MODIFIED:" . $generationDate . "T" . $generationTime . "Z\n";
				$ical_event .= "SEQUENCE:1\n";
				$ical_event .= "STATUS:CONFIRMED\n";
				$ical_event .= "SUMMARY:".$eventTitle."\n";
				$ical_event .= "DESCRIPTION:".$eventDescription."\n";
				$ical_event .= "TRANSP:OPAQUE\n";
				$ical_event .= "END:VEVENT\n";
				return $ical_event; // Just for demonstration, you can remove this line

	}
	// Generate the different components.
	public function genHeader()
	{
	   
	   $headerString =  "BEGIN:VCALENDAR\n";
       $headerString .=  "PRODID:-//Google Inc//Google Calendar 70.9054//EN\n";
       $headerString .=  "VERSION:2.0\n";
       $headerString .=  "CALSCALE:GREGORIAN\n";
       $headerString .=  "METHOD:PUBLISH\n";
       $headerString .=  "X-WR-CALNAME:Parenting Time Schedule\n";
       $headerString .=  "X-WR-TIMEZONE:Pacific/Honolulu\n";
       $headerString .=  "BEGIN:VTIMEZONE\n";
       $headerString .=  "TZID:Pacific/Honolulu\n";
       $headerString .=  "X-LIC-LOCATION:Pacific/Honolulu\n";
       $headerString .=  "BEGIN:STANDARD\n";
       $headerString .=  "TZOFFSETFROM:-1000\n";
       $headerString .=  "TZOFFSETTO:-1000\n";
       $headerString .=  "TZNAME:HST\n";
       $headerString .=  "DTSTART:19700101T000000\n";
       $headerString .=  "END:STANDARD\n";
       $headerString .=  "END:VTIMEZONE\n";
        $this->fileContentString .= $headerString;
	}
	public function genFooter()
	{
     $footerString ="END:VCALENDAR";
     $this->fileContentString .= $footerString;
	}
	//todo make it party specific.
	public function gen_7_7()
	{
		// Define the start date and end date of the event
		$start_date = new DateTime('now', new DateTimeZone('Pacific/Honolulu'));
		$alternate_date = $start_date;
		if($alternate_date->modify('+7 days') == false)
		{
			echo "DATE MODIFICATION NOT WORKING";
		}
		$parentAEvents = $this->generateEvent($this->partyAFull," Parenting time for ".$this->partyAFull.".",$start_date);
		$parentBEvents = $this->generateEvent($this->partyBFull," Parenting time for ".$this->partyBFull.".",$alternate_date);
        $this->fileContentString .= $parentAEvents;
		$this->fileContentString .= $parentBEvents;
	}

	public function packageDocument()
	{
	    fwrite($this->fileOutput,$this->fileContentString);
	}
	/* TODO:// HEY YOU GUYS, THIS IS WHERE ALL OF THE LOGIC GOES.*/
    public function generateDocument()
	{
			$this->genHeader();
            switch ($this->responses['schoolYearSchedule']) {
                // Equal Timesharing schedules.
                case "2-2-3":
                 $this->gen_2_2_3();
                break;
                case "3-4-4-3":
                 $this->gen_3_4_4_3();
                break;
                case "2-2-5-5":
                 $this->gen_2_2_5_5();
                break;
                case "7-7":
                 $this->gen_7_7();
                break;
                // Other Timesharing schedules.
                case "8-6":
                 $this->gen_8_6();
                case "10-4":
                  $this->gen_10_4();
				case "ownSchedule":
				default:
$this->gen_7_7();
                break;
            }
		$this->genFooter();
		$this->packageDocument();
		fclose($this->fileOutput);
	}
}