<?php
class FallSchedules {

    public function get_split(string $parentAFirst, string $parentBFirst): string {
        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><a
        name=PhysicalCustodyFallBreakSB><b>6.02A(i)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SPLIT BREAK</u>.</a>&nbsp;
        In odd years, $parentAFirst shall have the Child(ren) during the first half of the
        break and $parentBFirst shall have the Child(ren) during the second half of the
        break.&nbsp; In even years, $parentBFirst shall have the Child(ren) during the first half
        of the break and $parentAFirst shall have the Child(ren) during the second half of
        the break.</p>";
    }
    public function get_alternate(string $parentAFirst, string $parentBFirst): string {
        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><a
            name=PhysicalCustodyFallBreakAB><b>6.02A(ii)&nbsp;&nbsp;&nbsp;&nbsp; </b><u>ALTERNATE BREAK</u></a>.&nbsp;
            In odd calendar years, $parentAFirst shall have the entire break.&nbsp; In even calendar
            years, $parentBFirst shall have the entire break.&nbsp;&nbsp; </p>";
    }
    public function get_continue(): string {
        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><a
            name=PhysicalCustodyFallBreakContinueSchedule><b>6.02A(iii)&nbsp;&nbsp;&nbsp; </b><u>CONTINUE
            SCHEDULE DURING THE SCHOOL YEAR</u></a>.&nbsp; Parents shall continue the normal
            during the school year schedule during this break.</p>";
    }
}
