<?php
class SummerSchedules {
    public function get_split(string $parentAFirst, string $parentBFirst): string {
        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><a
            name=PhysicalCustodySummerBreakSB><b>6.02E(i)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SPLIT BREAK</u></a>.&nbsp;
            In odd years, $parentAFirst shall have the Child(ren) during the first half of the
            break and $parentBFirst shall have the Child(ren) during the second half of the
            break.&nbsp; In even years, $parentBFirst shall have the Child(ren) during the first half
            of the break and $parentAFirst shall have the Child(ren) during the second half of
            the break, to include New Year's Eve and New Year's Day.</p>";
    }
    public function get_continue(): string {
        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><a
            name=PhysicalCustodySummerBreakContSched><b>6.02E(ii)&nbsp;&nbsp;&nbsp;&nbsp; </b><u>CONTINUE
            SCHEDULE DURING THE SCHOOL YEAR</u>.</a>&nbsp; Parents shall continue the normal
            during the school year schedule during this break.</p>";
    }

    /** Haven't implemented this choice fully - need to collect dates (replaced Alternate schedule). */
    public function get_continue_uninterrupted(string $parentAFirst, string $parentBFirst, string $days_weeks, string $no_later_than): string {
        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><a
            name=PhysicalCustodySummerBreakContSchedUnint><b>6.02E(iii)&nbsp;&nbsp;&nbsp; </b><u>CONTINUE
            SCHEDULE DURING THE SCHOOL YEAR WITH OPTION FOR UNITERRUPTED TIME</u></a>.&nbsp;
            Parents shall continue the normal during the school year schedule during this
            break provided however that both parents shall have the option to take
            $days_weeks days/weeks of uninterrupted time with the Child(ren) every summer.&nbsp; Parents
            shall select and exchange their dates for uninterrupted time with the
            Child(ren) by no later than $no_later_than of the same year.&nbsp; In even
            years, $parentAFirst shall have the first choice of dates for uninterrupted time
            during the Summer Break.&nbsp; In odd years, $parentBFirst shall have the first choice of
            dates for uninterrupted time during the Summer Break.&nbsp; </p>";
    }
}
