<?php
    //open the file
    $directory = "documents/";
    $fileName = $directory."testCalendar.ics";
    $calendarFile = fopen($fileName, "w");
    //generate the calendar string.
    $calendarHeader = "BEGIN:VCALENDAR";
    $calendarEvent = "   BEGIN:VEVENT
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
            SUMMARY:".$fileName."
            TRANSP:OPAQUE
            END:VEVENT
            ";
    $calendarString = $calendarHeader . $calendarEvent; // this will eventually have multiple events in a loop.    
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
    <H1>Heres your generated Calendar</H1>
    <p><a href="<?php echo $fileName; ?>">click</a> to download <?php echo $fileName; ?></p>
</row>
<?php
require_once("views/footer.php");
?>
