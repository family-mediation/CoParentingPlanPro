<?php
class WinterSchedules {
    public function get_split(string $parentAFirst, string $parentALast, string $parentBFirst, string $parentBLast): string {
        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><a
            name=PhysicalCustodyWinterBreakSB><b>6.02C(i)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SPLIT BREAK</u></a>.&nbsp;
            In odd years, <span style='background:yellow'>$parentAFirst $parentALast</span> shall have the Child(ren) during the first half of the
            break, to include Christmas Eve and Christmas Day, and <span style='background:yellow'>$parentBFirst $parentBLast</span> shall have the
            Child(ren) during the second half of the break, to include New Year's Eve and
            New Year's Day.&nbsp; In even years, <span style='background:yellow'>$parentBFirst $parentBLast</span> shall have the Child(ren) during the
            first half of the break, to include Christmas Eve and Christmas Day, and <span style='background:yellow'>$parentAFirst $parentALast</span> shall have the Child(ren) during the second half of the break, to include New
            Year's Eve and New Year's Day.</p>";
    }
    public function get_alternate(string $parentAFirst, string $parentALast, string $parentBFirst, string $parentBLast): string {
        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><a
            name=PhysicalCustodyWinterBreakAB><b>6.02C(ii)&nbsp;&nbsp;&nbsp;&nbsp; </b><u>ALTERNATE BREAK</u>.</a>&nbsp;
            In odd calendar years, <span style='background:yellow'>$parentAFirst $parentALast</span> shall have the entire break.&nbsp; In even calendar
            years, <span style='background:yellow'>$parentBFirst $parentBLast</span> shall have the entire break.&nbsp;&nbsp; </p>";
    }

    public function get_continue(): string {
        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><b>6<a
            name=PhysicalCustodyWinterBreakContinueSched>.02C(iv)&nbsp;&nbsp;&nbsp; </a></b><u>CONTINUE
            SCHEDULE DURING THE SCHOOL YEAR</u>.&nbsp; Parents shall continue the normal during
            the school year schedule during this break.</p>";
    }

    public function get_split_break_holidays(string $parentAFirst, $parentALast, string $parentBFirst, $parentBLast, string $christmas_start, string $christmas_end, string $newYears_start, $newYears_end): string {
        // Convert times (prints in miltary format) to AM/PM format
        $christmas_start_am_pm = date("h:i A", strtotime($christmas_start));
        $christmas_end_am_pm = date("h:i A", strtotime($christmas_end));
        $newYears_start_am_pm = date("h:i A", strtotime($newYears_start));
        $newYears_end_am_pm = date("h:i A", strtotime($newYears_end));

        return "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:1.5in;line-height:150%'><a
            name=PhysicalCustodyWinterBreakSBwithHoliday><b>6.02C(iii)&nbsp;&nbsp;&nbsp; </b><u>SPLIT
            BREAK WITH HOLIDAY TIME</u></a>.<b>&nbsp; </b>In even years, <span style='background:yellow'>$parentAFirst $parentALast</span> shall have the
            first half of Winter Break to include Christmas Eve and Christmas Day, and
            <span style='background:yellow'>$parentBFirst $parentBLast</span> shall have the second half to include New Year's Eve and New Year's
            Day.&nbsp; In odd years, <span style='background:yellow'>$parentBFirst $parentBLast</span> shall have the first half of Winter Break to
            include Christmas Eve and Christmas Day and <span style='background:yellow'>$parentAFirst $parentALast</span> shall have the second
            half, to include New Year's Eve and New Year's Day.&nbsp; During their time, either
            parent may elect to travel with the Child(ren).&nbsp; In the event that the
            custodial parent is not traveling, the non-custodial parent shall have the
            opportunity to spend time with the children on Christmas Day between <span style='background:yellow'>$christmas_start_am_pm</span> and <span style='background:yellow'>$christmas_end_am_pm</span> and New Year's Day between <span style='background:yellow'>$newYears_start_am_pm</span> and <span style='background:yellow'>$newYears_end_am_pm</span>.</p>";
    }
}
