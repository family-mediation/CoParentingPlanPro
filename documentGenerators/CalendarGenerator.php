<?php
class CalendarGenerator
{
	public $fileName;
	public $responses;
	public $fileOutput;
	public $fileContentString;
	public $generationDate;
	public $generationTime;
	public function __construct(string $fileName,array $responses)
 	{
		$this->fileName = $fileName;
		$this->responses = $responses;
		$this->fileOutput = fopen("./".$fileName,"w+");
        $timestamp = time();
        $this->$generationDate = gmdate('Ymd', $timestamp);
        $this->$generationTime = gmdate('His', $timestamp);
 	}

	private function generateEvent($eventTitle,$eventDescription) : string
	{
				// Define the start date and end date of the event
				$start_date = new DateTime('2015-09-07 12:00:00', new DateTimeZone('Pacific/Honolulu'));
				$end_date = new DateTime('2015-09-07 13:15:00', new DateTimeZone('Pacific/Honolulu'));
				$end_repeat_date = new DateTime('2015-12-28 22:00:00', new DateTimeZone('Pacific/Honolulu'));
		
				// Generate RRULE
				$rrule = 'FREQ=WEEKLY;INTERVAL=1;COUNT=7;BYDAY=MO';
				// Format the dates according to iCalendar format
				$start_date_formatted = $start_date->format('Ymd\THis');
				$end_date_formatted = $end_date->format('Ymd\THis');
				$end_repeat_date_formatted = $end_repeat_date->format('Ymd\THis');
				// Other event information
				$generationDate = date("Ymd");
				$generationTime = date("His");
				// Construct the iCalendar event as a string
				$ical_event = "BEGIN:VEVENT\n";
				$ical_event .= "DTSTART;TZID=Pacific/Honolulu:" . $start_date_formatted . "\n";
				$ical_event .= "DTEND;TZID=Pacific/Honolulu:" . $end_date_formatted . "\n";
				$ical_event .= "RRULE:" . $rrule . ";UNTIL=" . $end_repeat_date_formatted . "Z\n";
				$ical_event .= "DTSTAMP:" . $generationDate . "T" . $generationTime . "Z\n";
				$ical_event .= "CREATED:" . $generationDate . "T" . $generationTime . "Z\n";
				$ical_event .= "LAST-MODIFIED:" . $generationDate . "T" . $generationTime . "Z\n";
				$ical_event .= "SEQUENCE:1\n";
				$ical_event .= "STATUS:CONFIRMED\n";
				$ical_event .= "SUMMARY:".$eventTitle"\n";
				$ical_event .= "DESCRIPTION:".$eventDescription."\n";
				$ical_event .= "TRANSP:OPAQUE\n";
				$ical_event .= "END:VEVENT\n";
				return $ical_event; // Just for demonstration, you can remove this line

	}
// Generate the different components.
	public function genHeader()
	{
	    $headerString =
	    "BEGIN:VCALENDAR
        PRODID:-//Google Inc//Google Calendar 70.9054//EN
        VERSION:2.0
        CALSCALE:GREGORIAN
        METHOD:PUBLISH
        X-WR-CALNAME:wjs7@hawaii.edu
        X-WR-TIMEZONE:Pacific/Honolulu
        BEGIN:VTIMEZONE
        TZID:Pacific/Honolulu
        X-LIC-LOCATION:Pacific/Honolulu
        BEGIN:STANDARD
        TZOFFSETFROM:-1000
        TZOFFSETTO:-1000
        TZNAME:HST
        DTSTART:19700101T000000
        END:STANDARD
        END:VTIMEZONE
        ";
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
		$parentAEvents = $this->generateEvent();
        $this->fileContentString .= $parentAEvents;
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
                    $this->gen_10_4()
				case "ownSchedule":
				default:
					$this->gen_7_7();
                break;
            }
		$this->genPart1();
		$this->genFooter();
		$this->packageDocument();
		fclose($this->fileOutput);
	}
}