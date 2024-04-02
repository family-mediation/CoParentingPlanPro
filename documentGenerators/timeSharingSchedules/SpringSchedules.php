<?php
class SpringSchedules {
    public function get_split(string $parentAFirst, string $parentBFirst): string {
        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><a
            name=PhysicalCustodySpringBreakSB><b>6.02D(i)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SPLIT BREAK</u>.&nbsp; </a>In
            odd years, <?php echo $parentAFirst; ?> shall have the Child(ren) during the first half of the
            break and <?php echo $parentBFirst; ?> shall have the Child(ren) during the second half of the
            break.&nbsp; In even years, <?php echo $parentBFirst; ?> shall have the Child(ren) during the first half
            of the break and <?php echo $parentAFirst; ?> shall have the Child(ren) during the second half of
            the break.</p>";
    }
    public function get_alternate(string $parentAFirst, string $parentBFirst): string {
        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><a
            name=PhysicalCustodySpringBreakAB><b>6.02D(ii)&nbsp;&nbsp;&nbsp;&nbsp; </b><u>ALTERNATE BREAK</u></a>.&nbsp;
            In odd calendar years, <?php echo $parentAFirst; ?> shall have the entire break.&nbsp; In even calendar
            years, <?php echo $parentBFirst; ?> shall have the entire break.&nbsp;&nbsp; </p>";
    }
    public function get_continue(): string {
        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><a
            name=PhysicalCustodySpringBreakContinueSched><b>6.02D(iii)&nbsp;&nbsp; </b><u>CONTINUE
            SCHEDULE DURING THE SCHOOL YEAR</u>.</a>&nbsp; Parents shall continue the normal
            during the school year schedule during this break.</p>";
    }
}