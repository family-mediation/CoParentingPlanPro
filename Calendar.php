<?php
    //open the file
    $directory = "documents/";
    $fileName = $directory."testCalendar.ics";
    $calendarFile = fopen($fileName, "w");
    //generate the calendar string.
    $calendarHeader = "BEGIN:VCALENDAR
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
    $calendarEvent = "BEGIN:VEVENT
DTSTART;TZID=Pacific/Honolulu:20150901T120000
DTEND;TZID=Pacific/Honolulu:20150901T131500
RRULE:FREQ=WEEKLY;UNTIL=20151229T220000Z;BYDAY=TU,TH
DTSTAMP:20240206T030807Z
UID:r79kfboffhrmncef3ca2fe4sqk@google.com
CREATED:20150830T020031Z
LAST-MODIFIED:20150830T020131Z
LOCATION:Pacific Ocean Science & Technology\, Honolulu\, HI 96822\, USA
SEQUENCE:1
STATUS:CONFIRMED
SUMMARY: simpleEvent
TRANSP:OPAQUE
END:VEVENT
";
    $calendarFooter ="END:VCALENDAR";
    $calendarString = $calendarHeader . $calendarEvent . $calendarFooter; // this will eventually have multiple events in a loop.
    fwrite($calendarFile, $calendarString);
    fclose($calendarFile);
    //
    //serve the file for downloading.
    //https://stackoverflow.com/questions/3697748/fastest-way-to-serve-a-file-using-php


    ?>
<?php
require_once("views/header.php");
?>
<row class="text-center">
    <div id="page0" class="card p-4">
        <H1>Heres your generated Calendar</H1>
        <p><a href="<?php echo $fileName; ?>">click</a> to download <?php echo $fileName; ?></p>
    </div>
</row>
<?php
require_once("views/footer.php");
?>
