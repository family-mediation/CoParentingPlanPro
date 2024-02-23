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
	//todo make it party specific.
	public function genPart1()
	{
    $part1String =
        "BEGIN:VEVENT
        DTSTART;TZID=Pacific/Honolulu:20150901T120000
        DTEND;TZID=Pacific/Honolulu:20150901T131500
        RRULE:FREQ=WEEKLY;UNTIL=20151229T220000Z;BYDAY=TU,TH
        DTSTAMP:20240206T030807Z
        UID:r79kfboffhrmncef3ca2fe4sqk@google.com
        CREATED:".$this->generationDate."T".$this->generationTime."Z
        LAST-MODIFIED:20150830T020131Z
        LOCATION:Pacific Ocean Science & Technology\, Honolulu\, HI 96822\, USA
        SEQUENCE:1
        STATUS:CONFIRMED
        SUMMARY: simpleEvent
        TRANSP:OPAQUE
        END:VEVENT
        ";
        $this->fileContentString .= $part1String;

	}
	public function genPart2(){}
	public function genPart3(){}
	public function genPart4(){}
	public function genPart5(){}
	public function genPart6(){}
	public function genPart7(){}
	public function genFooter()
	{
     $footerString ="END:VCALENDAR";
     $this->fileContentString .= $footerString;
	}
	public function packageDocument()
	{
	    fwrite($this->fileOutput,$this->fileContentString);
	}
	/* TODO:// HEY YOU GUYS, THIS IS WHERE ALL OF THE LOGIC GOES.*/
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