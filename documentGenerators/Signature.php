<?php

class Signature {
    public function getSignature(string $parentAName, string $parentBName, string $addressA, string $addressB, string $partyAEmail, string $partyBEmail, int $ssnA, int $ssnB, string $dateA, string $dateB): string {
        return "<p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
            margin-bottom:8.0pt;margin-left:0in;text-align:center;text-indent:0in;
            line-height:150%'><span style='font-size:16.0pt;line-height:150%'>[SIGNATURE
            PAGE TO FOLLOW]</span></p>
            
            <span style='font-size:12.0pt;line-height:150%;font-family:'Bookman Old Style',serif;
            color:black'><br clear=all style='page-break-before:always'>
            </span>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'>&nbsp;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
            margin-left:-.25pt;text-align:justify;text-indent:0in;line-height:107%'>APPROVED
            AS TO FORM AND CONTENT:</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:5.8pt;
            margin-left:-.25pt;text-align:justify;text-indent:0in;line-height:normal'>&nbsp;</p>
            
            <p class=MsoNormal style='margin:0in;text-align:justify;text-indent:0in;
            line-height:107%'>&nbsp;</p>
            
            <p class=MsoNormal style='margin:0in;text-align:justify;text-indent:0in;
            line-height:107%'>&nbsp;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:107%'>&nbsp;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
            margin-left:-.75pt;text-align:justify;text-indent:0in;line-height:107%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:.2pt;
            margin-left:-.75pt;text-align:justify;text-indent:0in;line-height:107%'>Name: $parentAName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name: $parentBName</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:.2pt;
            margin-left:-.75pt;text-align:justify;text-indent:0in;line-height:107%'> $parentAName </p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $parentBName</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
            margin-left:-.75pt;text-align:justify;text-indent:0in;line-height:107%'>Residential
            Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Residential Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            
            $addressA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$addressB
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
            margin-left:-.75pt;text-align:justify;text-indent:0in;line-height:107%'>&nbsp;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
            margin-left:-.75pt;text-align:justify;text-indent:0in;line-height:107%'>&nbsp;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
            margin-left:-.75pt;text-align:justify;text-indent:0in;line-height:107%'>E-Mail
            Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E-Mail Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
            
            $partyAEmail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$partyBEmail
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
            margin-left:-.75pt;text-align:justify;text-indent:0in;line-height:107%'>&nbsp;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
            margin-left:-.75pt;text-align:justify;text-indent:0in;line-height:107%'>&nbsp;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
            margin-left:-.75pt;text-align:justify;text-indent:0in;line-height:107%'>SSN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XXX-XX-$ssnA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XXX-XX-$ssnB</p>
            
            <p class=MsoNormal style='margin:0in;text-align:justify;text-indent:0in;
            line-height:107%'>&nbsp;</p>
            
            <p class=MsoNormal style='margin:0in;text-align:justify;text-indent:0in;
            line-height:107%'>&nbsp;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:107%'>&nbsp;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
            margin-left:-.75pt;text-align:justify;text-indent:0in;line-height:107%'>Date: $dateA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date:
            $dateB</p>";
    }
}