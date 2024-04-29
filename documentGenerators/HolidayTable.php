<?php
class HolidayTable {
    public function getHolidayTable(array $res, string $parentAFirst, string $parentBFirst, string $parentABirthday, string $parentBBirthday): string {
        return "<body class='c8 doc-content'><p class='c11'><span class='c0'></span></p><a id='t.d3363e6d847e3a4431506d233c5dda81d43b8398'></a><a id='t.0'></a>
            <table class='c10'>
              <tr class='c6' style='text-align: center;'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c14'><span class='c7'>Holiday</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c14'><span class='c7 pl-2 pr-2'>Party A</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c17'><span class='c12 pl-2 pr-2'>Party B</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>New Year&rsquo;s Day (Jan 1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c15'><span class='c0 p-3'>$res[0]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c15'><span class='c0 p-3'>$res[1]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Martin Luther King Day (Monday)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[2]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[3]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>President&rsquo;s Day (Monday)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[4]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[5]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Kuhio Day (Friday)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[6]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[7]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Good Friday (Friday)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[8]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[9]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Easter (Sunday)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[10]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[11]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Mother&rsquo;s Day (Sunday)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[12]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[13]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Memorial Day (Monday)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[14]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[15]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Father&rsquo;s Day (Sunday)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[16]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[17]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Fourth of July (July 4)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[18]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[19]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Statehood Day (Friday)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[20]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[21]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Labor Day (Monday)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[22]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[23]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Election Day (Tuesday)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[24]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[25]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Veteran&rsquo;s Day (Nov 11)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[26]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[27]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Thanksgiving (Thursday)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[28]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[29]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Christmas Eve (Dec 24)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[30]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[31]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>Christmas Day (Dec 25)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[32]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[33]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>New Year&rsquo;s Eve (Dec 31)</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[34]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[35]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>$parentAFirst&rsquo;s Birthday [$parentABirthday]</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[36]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[37]</span></p></td>
              </tr>
              <tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>$parentBFirst&rsquo;s Birthday [$parentBBirthday]</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[38]</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$res[39]</span></p></td>
              </tr>";
    }

    public function getChildren(string $childXInitials, string $childXBirthday, string $partyARes, string $partyBRes): string {
        return "<tr class='c6'>
                <td class='c1' colspan='1' rowspan='1' style='border:solid black 1.0pt;'><p class='c5'><span class='c0 p-3'>$childXInitials&rsquo;s Birthday [$childXBirthday]</span></p></td>
                <td class='c3' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$partyARes</span></p></td>
                <td class='c2' colspan='1' rowspan='1' style='border:solid black 1.0pt;text-align: center;'><p class='c4'><span class='c0 p-3'>$partyBRes</span></p></td>
              </tr>";
    }

    public function getEnd(): string {
        return "</table>
            <p class='c18'><span class='c16'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p></body>";
    }
}