<?php
include 'timeSharingSchedules/EqualTimeSharingSchedules.php';
include 'timeSharingSchedules/OtherTimeSharingSchedules.php';
include 'timeSharingSchedules/FallSchedules.php';
include 'timeSharingSchedules/WinterSchedules.php';
include 'timeSharingSchedules/SpringSchedules.php';
include 'timeSharingSchedules/SummerSchedules.php';
require_once("DocumentGenerator.php");
class HtmlGenerator extends documentGenerator
{
    function genHeader()
    {
        $headerString = "
	    <html>
         <meta http-equiv=Content-Type content=\"text/html; charset=windows-1252\">
         <meta name=Generator content=\"Microsoft Word 15 (filtered)\">
         </head>

         <body lang=EN-US link=\"#0563C1\" vlink=\"#954F72\" style='word-wrap:break-word'>
         <div class=WordSection1>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;</p>

         <p class=MsoNormal align=center style='margin:0in;text-align:center;line-height:
         normal'>INDEX TO CO-PARENTING PLAN:</p>

         <p class=MsoNormal align=center style='margin:0in;text-align:center;line-height:
         normal'>AGREEMENT REGARDING CHILD CUSTODY, TIMESHARING AND SUPPORT</p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#IntroductionParentsDesire\">1.01&nbsp;&nbsp; Introduction: Parents' Desire to
         Effect Complete Agreement</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#IntroductionParentstoSeekFamilyCourt\">1.02&nbsp;&nbsp; Introduction: Parents to
         Seek Family Court Approval</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#IntroductionParentsDoNotSeekFamilyCourt\">1.03&nbsp;&nbsp; Introduction: Parents Do
         Not Intend to Seek Family Court Approval</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         name=GuidingPrinciplesResponsibilitiestoChild></a><a
         href=\"#GuidingPrinciplesResponsibilitiestoChild\">2.00&nbsp;&nbsp; Guiding Principles.
         Responsibilities to Our Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#GuidingPrinciplesResponsibilitiestoCoPar\">2.01&nbsp;&nbsp; Guiding Principles.&nbsp;
         Responsibilities to Our Co-Parent</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#GuidingPrinciplesNewIntimatePartners\">2.02&nbsp;&nbsp; Guiding Principles.&nbsp;
         Statement About New Intimate Partners</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#GuidingPrinciplesProtectionFromDisputes\">2.03&nbsp;&nbsp; Guiding Principles.&nbsp;
         Protection from Parental Disputes</a> </p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PartiesInformationon" .  $this->responses["partyAFirst"] . " " . $this->responses["partyALast"] . "\"><span lang=FR>3.00&nbsp;&nbsp; Parties: Information
         on " .  $this->responses["partyAFirst"] . " " . $this->responses["partyALast"] . "</span></a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PartiesInformationonParentB\"><span lang=FR>3.01&nbsp;&nbsp; Parties: Information
         on " .  $this->responses["partyBFirst"] . " " . $this->responses["partyBLast"] . "</span></a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#ChildrenInformationonChildren\">4.00&nbsp;&nbsp; Children: Information on the
         Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalCustodyDefinition\">5.00&nbsp;&nbsp; Legal Custody: Definition</a> </p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalCustodyJoint\">5.01&nbsp;&nbsp; Legal Custody: Joint to Both Parents</a> </p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalCustodySole\">5.02&nbsp;&nbsp; Legal Custody: Sole to One Parent</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalCustodyParentsConsultOneAuthority\">5.03&nbsp;&nbsp; Legal Custody: Parents
         Must Consult but One Parent has Tie-Breaking Authority</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalCustodyParentsConsultDivofAuthority\">5.04&nbsp;&nbsp; Legal Custody: Parents
         Must Consult but there is a Division of Authority</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalCustodyAccesstoInformation\">5.05&nbsp;&nbsp; Legal Custody: Access to
         Information for Parent Without Legal Custody</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalCustodyEmergencyContact\">5.06&nbsp;&nbsp; Legal Custody: Emergency Contacts
         for the Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalCustodyExpertAdvice\">5.07&nbsp;&nbsp; Legal Custody: Expert Advice When
         Making Legal Custody Decisions</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalCustodyDaytoDay\">5.08&nbsp;&nbsp; Legal Custody: Day-to-Day Decisions</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalCustodyEmergencyDecisions\">5.09&nbsp;&nbsp; Legal Custody: Emergency
         Decisions</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalCustodyHealthEmergencyDeathofParent\">5.10&nbsp;&nbsp; Legal Custody: Health
         Emergency or Death of the Other Parent</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalCustodyParallelParenting\">5.11&nbsp;&nbsp; Legal Custody: Parallel Parenting</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhysicalCustodyGlobalPriority\">6.00&nbsp;&nbsp; Physical Custody and Timesharing:
         Global Priority</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhysicalCustodyDuringSchoolYear\">6.01&nbsp;&nbsp; Physical Custody and
         Timesharing: Timesharing During the School Year</a></p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal'><a
         href=\"#PhysicalCustodyEqual\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.01A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Equal Timesharing
         Schedules</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhysicalCustodyOther\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.01B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Other Timesharing
         Schedules</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhysicalCustodyDuringSchoolBreaks\">6.02&nbsp;&nbsp; Physical Custody and
         Timesharing: Timesharing During the School Breaks</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhysicalCustodyFallBreak\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.02A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fall Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         name=\"_heading=h.hcavjzxvdgkz\"></a><a href=\"#PhysicalCustodyFallBreakSB\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.02A(i)
         Split Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         name=\"_heading=h.ptfvl3aera8c\"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyFallBreakAB\">6.02A(ii) Alternate Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         name=\"_heading=h.q5n0t569stji\"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyFallBreakContinueSchedule\">6.02A(iii) Continue Schedule
         During the School Year</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyThanksgiving\">6.02B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thanksgiving Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyThanksgivingSB\">6.02B (i) Split Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyThanksgivingAB\">6.02B (ii) Alternate Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyThanksgivingTimeonDay\">6.02B (iii) Time on Thanksgiving
         Day</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyThanksgivingContinueSched\">6.02B (iv) Continue Schedule
         During the School Year</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhysicalCustodyWinterBreak\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.02C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Winter Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyWinterBreakSB\">6.02C (i) Split Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyWinterBreakAB\">6.02C (ii) Alternate Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyWinterBreakSBwithHoliday\">6.02C (iii) Split Break with
         Holiday Time</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyWinterBreakContinueSched\">6.02C (iv) Continue Schedule
         During the School Year</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodySpringBreak\">6.02D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Spring Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodySpringBreakSB\">6.02D (i) Split Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodySpringBreakAB\">6.02D (ii) Alternate Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodySpringBreakContinueSched\">6.02D (iii) Continue Scheduling
         During the School Year</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodySummerBreak\">6.02E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Summer Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodySummerBreakSB\">6.02E (i) Split Break</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodySummerBreakContSched\">6.02E (ii) Continue Schedule During
         the School Year</a> </p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodySummerBreakContSchedUnint\">6.02E (iii) Continue Schedule
         During the School Year with Option for Uninterrupted Time</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhysicalCustodyHolidaysandSpecialDays\">6.03&nbsp;&nbsp; Physical Custody and
         Timesharing: Holidays and Special Days</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhysicalCustodyHolidaysAltYearly\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.03A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Alternate
         Yearly</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyHolidaysSplitEveryYear\">6.03B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Split Every Year</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyHolidaysMonFri\">6.03C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Monday/Friday Holidays
         Attached to a Weekend</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#PhysicalCustodyHolidaysEveryYearWithAorB\">6.03D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Every Year with
         " .  $this->responses["partyAFirst"] . " " . $this->responses["partyALast"] . " or " .  $this->responses["partyBFirst"] . " " . $this->responses["partyBLast"] . "</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhysicalCustodyTravelwithChild\">6.04&nbsp;&nbsp; Physical Custody and Timesharing:
         Travel with the Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhysicalCustodyRescheduling\">6.05&nbsp;&nbsp; Physical Custody and Timesharing:
         Rescheduling and Make-Up Time</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhysicalCustodyROFR\">6.06&nbsp;&nbsp; Physical Custody and Timesharing: Right of
         First Refusal</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhysicalCustodyPickupNonSchool\">6.07&nbsp;&nbsp; Physical Custody and Timesharing:
         Pick-Up for Non-School Exchanges</a>. <a href=\"#PhysicalCustodyDropOffNonSchool\">6.08&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Physical
         Custody and Timesharing: Drop Off for Non-School Exchanges</a>.</p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhyscialCustodyNeutralLocation\">6.09&nbsp;&nbsp; Physical Custody and Timesharing:
         Exchanges at a Neutral Location.</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhyscialCustodyDelgationPickupDropOff\">6.10&nbsp;&nbsp; Physical Custody and
         Timesharing: Parental Authority to Delegate Pick-Up and Drop Off the Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhyscialCustodyAuthorizatioPickupDropOff\">6.11&nbsp;&nbsp;  Physical Custody and
         Timesharing: Persons Authorized to Pick Up and Drop Off the Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhyscialCustodyChildBelongings\">6.12&nbsp;&nbsp; Physical Custody and Timesharing:
         Child(ren)'s Personal Belongings</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhyscialCustodyRelocation\">6.13&nbsp;&nbsp; Physical Custody and Timesharing:
         Relocation</a>&nbsp;&nbsp;&nbsp; </p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PhyscialCustodyModofSchedule\">6.14&nbsp;&nbsp; Physical Custody and Timesharing:
         Modification of Schedule by Agreement of Both Parents</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#Communication\">7.00&nbsp;&nbsp; Communication</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#CommunicationEmailOnly\">7.01&nbsp;&nbsp; Communication Between Co-Parents: E-mail
         Only</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#CommunicationEmailandTextOnly\">7.02&nbsp;&nbsp; Communication Between Co-Parents:
         E-mail and Text Only</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#CommunicationOurFamilyWizard\">7.03&nbsp;&nbsp; Communication Between Co-Parents:
         Our Family Wizard or Other Mutually Agreed Upon Parenting Communication
         Application</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#CommunicationMonthlyConference\">7.04&nbsp;&nbsp; Communication Between Co-Parents:
         Monthly Conference</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#CommunicationSemiAnnualConference\">7.05&nbsp;&nbsp; Communication Between
         Co-Parents: Semi Annual Conference</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#CommunicationAnnualConference\">7.06 &nbsp; Communication Between Co-Parents:
         Annual Conference</a> </p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#CommunicationUnlimited\">7.07&nbsp;&nbsp; Communication Between Child(ren) and
         Non-Custodial Parent: Unlimited</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#CommunicationSpecific\">7.08&nbsp;&nbsp; Communication Between Child(ren) and
         Non-Custodial Parent: Specific</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#CommunicationExchangeofContactInfo\">7.09&nbsp;&nbsp; Communication: Exchange of
         Contact Information</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#CommunicationSchedulingExtracurricular\">7.10&nbsp;&nbsp; Communication: Scheduling
         Extracurricular Activities for the Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#CommunicationSelectingExtracurricular\">7.11&nbsp;&nbsp; Communication: Selecting
         Extracurricular Activities for the Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCMonthlyUnderLaw\">8.00&nbsp;&nbsp; Support of the Child(ren): Child Support
         Guidelines Amount Under the Law</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCChildSupportSameState\">8.01&nbsp;&nbsp; Support of the Child(ren): Child
         Support Guidelines Amount When Parents Reside in the Same State</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCChildSupportDifferentState\">8.02&nbsp;&nbsp; Support of the Child(ren): Child
         Support Guidelines Amount When Parents Reside in Different States</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCChildSupportAgreedAlternative\">8.03&nbsp;&nbsp; Support of the Child(ren):
         Mutually Agreed Upon Amount Alternative</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCChildSupportNoAgreement\">8.04&nbsp;&nbsp; Support of the Child(ren): No
         Agreement of the Parties Re Monthly Child Support Amount and/or Jurisdiction</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCChildSupportAccountAlternative\">8.05&nbsp;&nbsp; Support of the Child(ren):
         Child Support Account Alternative</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SocDirectPayment\">8.06&nbsp;&nbsp; Support of the Child(ren): Direct Payment of
         the Child Support</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCThroughStateAgency\">8.07&nbsp;&nbsp; Support of the Child(ren): Payment of
         Child Support Through the State Child Support Enforcement Agency</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCHealthInsurance\">8.08&nbsp;&nbsp; Support of the Child(ren): Health Insurance
         Premiums</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCUninsuredCoPays\">8.09&nbsp;&nbsp; Support of the Child(ren): Uninsured Co-Pays
         for Health-Related Expenses</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCUninsuredCoPaysSR\">8.09A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sole Responsibility</a> </p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCUninsuredCoPaysSpR\">8.09B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Split Responsibility</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCUninsuredCoPaysThresholdAmount\">8.09C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Responsibility for
         Threshold Amount</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCUninsuredCoPaysRecbyProvider\">8.09D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Definition of Uninsured
         Health-Related Expenses: Recommended by Providers</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCUninsuredCoPaysAgreementbyParents\">8.09E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Definition of
         Uninsured Health-Related Expenses: Mutual Agreement of the Parents</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCExtracurricular\">8.10&nbsp;&nbsp; Support of the Child(ren): Extracurricular
         Expenses</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCExtracurricularSR\">8.10A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sole Responsibility</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCExtracurricularSpR\">8.10B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Split Responsibility</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCExtracurricularSelection\">8.10C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Selecting Extracurricular
         Activities for the Child(ren) Pursuant to 7.10 Hereinabove</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCExtracurricularMutualAgreement\">8.10D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Extracurricular
         Activities Must Be Mutually Agreed Upon</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCPrivateSchoolExpenses\">8.11&nbsp;&nbsp; Support of the Child(ren): Private
         School Expenses</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPrivateSchoolExpensesSR\">8.11A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sole Responsibility</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPrivateSchoolExpensesSpR\">8.11B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Split Responsibility</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPrivateSchoolExpensesDefinition\">8.11C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Definition of Private
         School Expenses</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPrivateSchoolExpensesMutualAgreement\">8.11D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mutual Agreement
         of Parents</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPrivateSchoolExpensesReserve\">8.11E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reserve</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCPostSchoolExpenses\">8.12&nbsp;&nbsp; Support of the Child(ren): Post-High
         School Expenses</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPostSchoolExpensesSR\">8.12A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sole Responsibility</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPostSchoolExpensesSpR\">8.12B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Split Responsibility</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPostSchoolExpensesSRFundsfromchildacc\">8.12C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sole
         Responsibility After Funds from Any 529 Accounts held on Behalf of a Child or
         Children, Coverdell Accounts of Other Funds</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPostSchoolExpensesSpRFundsfromchildac\">8.12D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Split
         Responsibility After Funds from Any 529 Accounts held on Behalf of a Child or
         Children, Coverdell Accounts of Other Funds Ear-Marked to Pay for a Child's
         Post-High School Education Expenses</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPostSchoolExpensesCap\">8.12E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cap on Payment by Each Parent
         per Academic School Year</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPostSchoolExpensesDef\">8.12F&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Definition of Post-High School
         Education Expenses</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPostSchoolExpensesMutualAgreement\">8.12G&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mutual Agreement of
         Parents</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCPostSchoolExpensesReserve\">8.12H &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reserve</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#SoCDependents\">8.13&nbsp;&nbsp; Support of the Child(ren): Claiming the Child(ren)
         as a Dependent for Tax Purposes</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCDependentsSA\">8.13A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sole Authority to Claim the Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCDependentsSpA\">8.13B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Split Authority to Claim the Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCDependentsSpAthenAlternate\">8.13C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Split Authority to Claim
         the Child(ren) then Alternate</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCDependentsAlternate\">8.13D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Alternate Authority to Claim the
         Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal'><a
         href=\"#SoCProtocolsforReimbursment\">8.14&nbsp;&nbsp; Support of the Child(ren): Protocols
         for Reimbursement of Child-Related Expenses</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCProtocolsforReimbursmentTimeframe\">8.14A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Timeframe for
         Reimbursement of Child-Related Expenses and Reimbursement</a> </p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCProtocolsforReimbursmentMonthly\">8.14B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Monthly Calculation
         of Child-Related Expenses and Reimbursement</a> </p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCProtocolsforReimbursmentQuarterly\">8.14C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quarterly
         Calculation of Child-Related Expenses and Reimbursement</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCProtocolsforReimbursmentAnnual\">8.14D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Annual Calculation of
         Child-Related Expenses and Reimbursement</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCProtocolsforReimbursmentDocumentation\">8.14E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Documentation
         Required for Reimbursement of Child-Related Expenses</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
         href=\"#SoCProtocolsforReimbursmentMethod\">8.14F&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reimbursement Method</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesCoParentingCounseling\">9.00&nbsp;&nbsp; Other Issues:&nbsp; Co-Parent
         Counseling</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesChildFocusedTherapist\">9.01&nbsp;&nbsp; Other Issues:&nbsp; Child-Focused
         Therapist</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesSocialMediaBetweenParents\">9.02&nbsp;&nbsp; Other Issues:&nbsp; Social Media
         Between Parents</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesSocialMediaForChild\">9.03&nbsp;&nbsp; Other Issues:&nbsp; Social Media For
         Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesJointTeacherMeeting\">9.04&nbsp;&nbsp; Other Issues:&nbsp; Joint
         Parent-Teacher Meetings</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesSeperateTeacherMeeting\">9.05&nbsp;&nbsp; Other Issues:&nbsp; Separate
         Parent-Teacher Meetings</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesOneParentTeacherMeeting\">9.06&nbsp;&nbsp; Other Issues:&nbsp; One Parent to
         Attend Parent-Teacher Meetings</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesReportCard\">9.07&nbsp;&nbsp; Other Issues:&nbsp; Report Cards for the
         Child(ren)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesJointAttendance\">9.08&nbsp;&nbsp; Other Issues:&nbsp; Joint Attendance at
         School and Extracurricular Events</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesOneParentExtracurricular\">9.09&nbsp;&nbsp; Other Issues:&nbsp; Custodial
         Parent to Attend School and Extracurricular Events</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesAlternateAttendance\">9.10&nbsp;&nbsp; Other Issues:&nbsp; Alternate
         Attendance at School and Extracurricular Events</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesDocuments\">9.11&nbsp;&nbsp; Other Issues: Documents</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesJointConsentPassport\">9.12&nbsp;&nbsp; Other Issues: Joint Authority to
         Consent for Passport</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesSoleConsentPassport\">9.13&nbsp;&nbsp; Other Issues: Sole Authority to
         Consent for Passport</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesNewIntimatePartnerLD\">9.14&nbsp;&nbsp; Other Issues: New Intimate
         Partner Protocols (Less Detailed)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesNewIntimatePartnerMD\">9.15&nbsp;&nbsp; Other Issues: New Intimate
         Partner Protocols (More Detailed)</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#OtherIssuesAlternativeDisputeResolution\">9.16&nbsp;&nbsp; Other Issues:
         Alternative Dispute Resolution</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalContinuingJurisdiction\">10.00 Legal: Continuing Jurisdiction</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalEnforcement\">10.01 Legal: Enforcement</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#LegalVoluntaryExecution\">10.02 Legal: Voluntary Execution</a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>Name of Parent A: " .  $this->responses["partyAFirst"] . " " . $this->responses["partyALast"] . "</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>Address: " . $this->responses["partyAResidence"] . ", " . $this->responses["partyACity"] . ",
         " . $this->responses["partyAState"] . ", " . $this->responses["partyAZip"] . "</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>Telephone: " . $this->responses["partyACell"] . "</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>E-Mail: " . $this->responses["partyAEmail"] . "</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>Name of Parent B: " .  $this->responses["partyBFirst"] . " " . $this->responses["partyBLast"] . "</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>Address: " . $this->responses["partyBResidence"] . ", " . $this->responses["partyBCity"] . ",  
         " . $this->responses["partyBState"] . ", " . $this->responses["partyBZip"] . "</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>Telephone: " . $this->responses["partyBCell"] . "</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>E-Mail: " . $this->responses["partyBEmail"] . "</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal align=center style='margin:0in;text-align:center;text-indent:
         0in;line-height:normal;border:none'>IN THE FAMILY COURT OF THE <span style='background:yellow'>" . $this->responses["court"] . "</span>
         CIRCUIT</p>

         <p class=MsoNormal align=center style='margin:0in;text-align:center;text-indent:
         0in;line-height:normal;border:none'>&nbsp;</p>

         <p class=MsoNormal align=center style='margin:0in;text-align:center;text-indent:
         0in;line-height:normal;border:none'>STATE OF HAWAII</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <table class=a border=0 cellspacing=0 cellpadding=0 width=624 style='border-collapse:
          collapse'>
          <tr>
           <td width=307 valign=top style='width:3.2in;border:none;border-right:solid black 1.0pt;
           padding:0in 0in 0in 0in'>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>" .  $this->responses["partyAFirst"] . " " . $this->responses["partyALast"] . ",</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Plaintiff/Petitioner,</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
           margin-left:.5in;text-indent:0in;line-height:normal;border:none'>vs.</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>" .  $this->responses["partyBFirst"] . " " . $this->responses["partyBLast"] . ",</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Defendant/Respondent.</p>
           </td>
           <td width=29 valign=top style='width:.3in;padding:0in 0in 0in 0in'>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           </td>
           <td width=288 valign=top style='width:3.0in;padding:0in 0in 0in 0in'>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>Case No. <span style='background:yellow'>" . $this->responses["caseNo"] . "</span>
           <br>Nature of Case: <span style='background:yellow'>" . $this->responses["natureCase"] . "</span></p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'><b>CO-PARENTING PLAN: AGREEMENT REGARDING CHILD CUSTODY,
           TIMESHARING, AND SUPPORT</b></p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           </td>
          </tr>
          <tr>
           <td width=307 valign=top style='width:3.2in;border-top:none;border-left:none;
           border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in'>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           </td>
           <td width=29 valign=top style='width:.3in;padding:0in 0in 0in 0in'>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           </td>
           <td width=288 valign=top style='width:3.0in;padding:0in 0in 0in 0in'>
           <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
           border:none'>&nbsp;</p>
           </td>
          </tr>
         </table>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:107%'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:107%'>&nbsp;</p>

         <p class=MsoNormal align=center style='margin:0in;text-align:center;text-indent:
         0in;line-height:normal;border:none'><b><u>CO-PARENTING PLAN: AGREEMENT
         REGARDING </u></b></p>

         <p class=MsoNormal align=center style='margin:0in;text-align:center;text-indent:
         0in;line-height:normal;border:none'><b><u>CHILD CUSTODY, TIMESHARING, AND
         SUPPORT</u></b></p>

         <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
         margin-left:-.75pt;text-align:justify;text-indent:0in;line-height:150%'>&nbsp;</p>

         <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>1.00 </b>THIS
         AGREEMENT is made and <span style='background:white'>entered this <span style='background:yellow'>" . $this->day . " (day) day
         of " . $this->month . " (month), " . $this->year . " (year)</span></span>, by and between <span style='background:yellow'>PARENT A</span> and <span style='background:yellow'>PARENT B</span>
         (collectively hereinafter referred to as 'Parents') and applies to the
         Child(ren) named below in Paragraph 3.00.</p>

         <p class=MsoNormal style='margin-top:0in;margin-right:2.3pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%;border:
         none'><a name=IntroductionParentsDesire><b>1.01</b> </a>WHEREAS, Parents wish
         to effectuate a preliminary settlement of all matters relating to their minor
         Child(ren);</p>

         <p class=MsoNormal style='margin-top:0in;margin-right:2.3pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%;border:
         none'><a name=IntroductionParentstoSeekFamilyCourt><b>1.02</b> </a>WHEREAS,
         parents intend to seek approval of their Agreement from the Family Court of the
         <span style='background:yellow'>" . $this->responses["court"] . "</span> Circuit of the State of Hawaii hereinafter referred to as
         the 'Family Court';</p>

         <p class=MsoNormal style='margin-top:0in;margin-right:2.3pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%;border:
         none'><a name=IntroductionParentsDoNotSeekFamilyCourt><b>1.03</b> </a>WHEREAS,
         Parents intend this to be a binding agreement between them to govern the
         co-parenting of their Child(ren) but do not plan to seek approval of their
         Agreement from the Family Court of their jurisdiction.</p>
         
         <p class=MsoNormal align=center style='margin-top:0in;margin-right:2.15pt;
         margin-bottom:.05pt;margin-left:0in;text-align:center;text-indent:0in;
         line-height:150%;border:none'><u><span lang=FR>PARTIES:</span></u></p>

         <p class=MsoNormal style='margin-top:0in;margin-right:2.3pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=PartiesInformationon<b><span lang=FR>3.00&nbsp; </span></b></a><u><span
         lang=FR>PARTIES: INFORMATION ON PARENT A</span></u><span lang=FR>.&nbsp; </span>PARENT
         A's full legal name is <span style='background:yellow'>" .  $this->responses["partyAFirst"] . " " . $this->responses["partyALast"] . "</span>.&nbsp; 
         Parent A's residence address is <span style='background:yellow'>" . $this->responses["partyAResidence"] . ", 
          " . $this->responses["partyACity"] . ", " . $this->responses["partyAState"] . ", " . $this->responses["partyBZip"] . "</span>.&nbsp; </p>

         <p class=MsoNormal style='margin-top:0in;margin-right:2.3pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=PartiesInformationonParentB><b>3.01</b> <u>PARTIES: INFORMATION ON PARENT B</u></a>. 
         Parent B's full legal name is <span style='background:yellow'>" .  $this->responses["partyBFirst"] . " " . $this->responses["partyBLast"] . "</span>.&nbsp; Parent B's residence
         address is <span style='background:yellow'>" . $this->responses["partyBResidence"] . ", 
          " . $this->responses["partyBCity"] . ", " . $this->responses["partyBState"] . ", " . $this->responses["partyBZip"] . "</span>.&nbsp; </p>";

        echo $headerString;
        $this->fileContentString .= $headerString;
    }
    function genFooter()
    {
        $footerString = "
        </div>

        </body>

        </html>
        ";
        echo $footerString;
        $this->fileContentString .= $footerString;
    }
    function genPart1()
    {
        $part1String = "";
        echo $part1String;
        $this->fileContentString .= $part1String;
    }

    /**
     * Guiding Principals statement.
     * @return void - concats to the output content string
     */
    function genPart2()
    {
        $guidingPrincipals = "from co-parenting plan template.php: RESPONSIBILITIES TO OUR CHILD(REN)";
        echo $guidingPrincipals;
        $this->fileContentString .= $guidingPrincipals;
    }
    function genPart3()
    {
        echo "Generating Part3 <br/>";
    }

    /** Section 2: Children. */
    function gen_children_4_00() {
        $childrenInfo = "<p class=MsoNormal align=center style='margin-top:0in;margin-right:2.3pt;
            margin-bottom:0in;margin-left:0in;text-align:center;text-indent:0in;line-height:
            150%'><u>CHILDREN:</u></p>
        
            <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=ChildrenInformationonChildren><b>4.00&nbsp; </b><u>CHILD(REN): INFORMATION ON
            CHILD(REN</u></a><u>)</u>.&nbsp; The Parents have: "
                . $this->responses["numChildren"] . " Child(ren) together as follows: Child A (\""
                . $this->responses["child1Initials"] . "\") born in ("
                . $this->responses["child1BirthYears"] . "), Child B (\""
                . $this->responses["child2Initials"] . "\") born in ("
                . $this->responses["child2BirthYears"] . ") collectively hereinafter referred to as the Child(ren) or individually referred to using their initials.</p>";
        echo $childrenInfo;
        $this->fileContentString .= $childrenInfo;
    }

    /** Section 4: Physical Custody and Timesharing. */
    function gen_physical_custody_timesharing_6_00() {
        $header = "<p class=MsoNormal align=center style='margin-top:0in;margin-right:1.8pt;
            margin-bottom:.05pt;margin-left:0in;text-align:center;text-indent:0in;
            line-height:150%'><u>PHYSICAL CUSTODY AND TIMESHARING:</u></p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhysicalCustodyGlobalPriority><b>6.00</b>&nbsp; <u>PHYSICAL CUSTODY AND
            TIMESHARING: GLOBAL PRIORITY</u></a>.&nbsp; If there is a conflict with different
            sections of the Physical Custody and Timesharing schedule, the governing
            hierarchy is from the highest to lowest as follows: (1) Holidays and Special
            Days; (2) Travel and Uninterrupted Time with the Child(ren); (3) Timesharing
            with the Child(ren) During School Breaks, and (4) Timesharing with the
            Child(ren) During the School Year.</p>";
        echo $header;
        $this->fileContentString .= $header;
    }
    function gen_physical_custody_timesharing_6_01() {
        $header = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhysicalCustodyDuringSchoolYear><b>6.01&nbsp; </b><u>PHYSICAL CUSTODY AND
            TIMESHARING: TIMESHARING DURING THE SCHOOL YEAR</u>.&nbsp; </a>During the school
            year, parents agree to share time with their children as set forth
            hereinbelow.&nbsp; Understanding that each individual Child's developmental stage
            and needs should be the primary consideration for setting a schedule.&nbsp;
            Generally, younger children need more frequent transitions so they do not feel
            abandoned by either parent, while older children can tolerate longer absences.&nbsp;
            Each Child's health, education, special needs, and social, emotional, and
            physical well-being must be considered in selecting an appropriate schedule.&nbsp;
            Schedules may change over time by agreement of the Parents based on the
            Child(ren)'s needs.&nbsp; Below are suggested templates to be modified and based on each
            family's needs.</p>";
        echo $header;
        $this->fileContentString .= $header;
    }

    /** Equal Timesharing Schedules. */
    function gen_physical_custody_timesharing_6_01A() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
            name=PhysicalCustodyEqual><b>6.01A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>EQUAL TIMESHARING SCHEDULES</u></a>.&nbsp;
            50/50 schedules can benefit a Child because the Child spends substantial time
            living with both Parents.&nbsp; This allows the Child(ren) to build close
            relationships with both Parents and to feel cared for by both Parents.&nbsp; 50/50
            schedules work best when:</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
            margin-left:2.0in;text-align:justify;text-indent:-.25in;line-height:150%;
            border:none'><span style='font-family:\"Noto Sans Symbols\"'>&#9679;<span
            style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Parents
            live fairly close to one another, so exchanges are easier;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
            margin-left:2.0in;text-align:justify;text-indent:-.25in;line-height:150%;
            border:none'><span style='font-family:\"Noto Sans Symbols\"'>&#9679;<span
            style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Parents
            are able to communicate with each other about the Child(ren) without fighting;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
            margin-left:2.0in;text-align:justify;text-indent:-.25in;line-height:150%;
            border:none'><span style='font-family:\"Noto Sans Symbols\"'>&#9679;<span
            style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Child(ren)
            is/are able to handle switching between parents' homes;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
            margin-left:2.0in;text-align:justify;text-indent:-.25in;line-height:150%;
            border:none'><span style='font-family:\"Noto Sans Symbols\"'>&#9679;<span
            style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Both
            Parents are committed to putting the Child(ren)'s best interests first;</p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:2.0in;text-align:justify;text-indent:-.25in;line-height:150%;
            border:none'><span style='font-family:\"Noto Sans Symbols\"'>&#9679;<span
            style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Both
            Parents agree that best for their Child(ren).</p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($this->responses["schoolYearSchedule"]) {
            case "2-2-3":
                $equalSchedule = new EqualTimeSharingSchedules();
                $schedule = $equalSchedule->get_2_2_3();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            case "3-4-4-3":
                $equalSchedule = new EqualTimeSharingSchedules();
                $schedule = $equalSchedule->get_3_4_4_3();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            case "2-2-5-5":
                $equalSchedule = new EqualTimeSharingSchedules();
                $schedule = $equalSchedule->get_2_2_5_5();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            case "7-7":
                $equalSchedule = new EqualTimeSharingSchedules();
                $schedule = $equalSchedule->get_7_7();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            default:
                echo "Error in HTML Generator for the variable: schoolYearSchedule - equal schedules.";
        }
    }

    /** Other Timesharing Schedules. */
    function gen_physical_custody_timesharing_6_01B() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
            name=PhysicalCustodyOther>6.01B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>OTHER TIMESHARING SCHEDULES</u>.</p>
            ";
        echo $content;
        $this->fileContentString .= $content;
        switch ($this->responses["schoolYearSchedule"]) {
            case "8-6":
                $otherSchedule = new OtherTimeSharingSchedules();
                $schedule = $otherSchedule->get_8_6();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            case "10-4":
                $otherSchedule = new OtherTimeSharingSchedules();
                $schedule = $otherSchedule->get_10_4();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            case "ownSchedule":
                $otherSchedule = new OtherTimeSharingSchedules();
                $schedule = $otherSchedule->get_own_schedule();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            default:
                echo "Error in HTML Generator for the variable: schoolYearSchedule - other schedules.";
        }
    }
    function gen_physical_custody_timesharing_6_02() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhysicalCustodyDuringSchoolBreaks><b>6.02</b>&nbsp; <u>PHYSICAL CUSTODY AND
            TIMESHARING: TIMESHARING DURING THE SCHOOL BREAKS</u></a>.&nbsp; Unless otherwise
            agreed by both Parents, school breaks shall be defined as beginning after
            school on the last day prior to the break and ending at the morning drop off at
            school on the day school resumes.&nbsp; During their designated school break time
            with the Child(ren), either Parent may elect to travel with the Child(ren) per
            the Travel with the Child(ren) provision hereinbelow.</p>";
        echo $content;
        $this->fileContentString .= $content;
    }

    // Fall Break schedules.
    function gen_physical_custody_timesharing_6_02A(string $type) {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:.5pt;text-align:justify;text-indent:35.5pt;line-height:150%'><a
            name=PhysicalCustodyFallBreak><b>6.02A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </b><u>FALL BREAK</u>.&nbsp; </a>The
            Parents shall share time with the Child(ren) during Fall Breaks as follows:&nbsp; </p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($type) {
            case "fall-split-break":
                $split = new FallSchedules();
                $fall = $split->get_split($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $fall;
                $this->fileContentString .= $fall;
                break;
            case "fall-alternate-break":
                $alternate = new FallSchedules();
                $fall = $alternate->get_alternate($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $fall;
                $this->fileContentString .= $fall;
                break;
            case "fall-continue-schedule":
                $continue = new FallSchedules();
                $fall = $continue->get_continue();
                echo $fall;
                $this->fileContentString .= $fall;
                break;
            default:
                echo "Error in HTML Generator for the variable: schoolFallBreakSchedule.";
        }
    }

    // Thanksgiving Break schedules.
    function gen_physical_custody_timesharing_6_02B(string $type) {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:.5pt;text-align:justify;text-indent:35.5pt;line-height:150%'><a
            name=PhysicalCustodyThanksgiving><b>6.02B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>THANKSGIVING BREAK</u></a>.&nbsp;
            The Parents shall share time with the Child(ren) during Thanksgiving Breaks as
            follows:&nbsp; </p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($type) {
            case "thanksgiving-split-break":
                $split = new ThanksgivingSchedules();
                $thanksgiving = $split->get_split($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $thanksgiving;
                $this->fileContentString .= $thanksgiving;
                break;
            case "thanksgiving-alternate-break":
                $alternate = new ThanksgivingSchedules();
                $thanksgiving = $alternate->get_alternate($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $thanksgiving;
                $this->fileContentString .= $thanksgiving;
                break;
            case "thanksgiving-continue-schedule":
                $continue = new ThanksgivingSchedules();
                $thanksgiving = $continue->get_continue();
                echo $thanksgiving;
                $this->fileContentString .= $thanksgiving;
                break;
            default:
                echo "Error in HTML Generator for the variable: schoolThanksgivingBreakSchedule.";
        }
        // Adding option for parent to see child(ren).
        $get_time = new ThanksgivingSchedules();
        $content = $get_time->get_time();
        echo $content;
        $this->fileContentString .= $content;
    }

    // Winter Break schedules.
    function gen_physical_custody_timesharing_6_02C(string $type) {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:.5pt;text-align:justify;text-indent:35.5pt;line-height:150%'><a
            name=PhysicalCustodyWinterBreak><b>6.02C &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>WINTER BREAK</u></a>.&nbsp;
            The Parents shall share time with the Child(ren) during Winter Break as
            follows:</p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($type) {
            case "winter-split-break":
                $split = new WinterSchedules();
                $winter = $split->get_split($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $winter;
                $this->fileContentString .= $winter;
                break;
            case "winter-alternate-break":
                $alternate = new WinterSchedules();
                $winter = $alternate->get_alternate($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $winter;
                $this->fileContentString .= $winter;
                break;
            case "winter-continue-schedule":
                $continue = new WinterSchedules();
                $winter = $continue->get_continue();
                echo $winter;
                $this->fileContentString .= $winter;
                break;
            default:
                echo "Error in HTML Generator for the variable: schoolWinterBreakSchedule.";
        }
    }

    // Spring Break schedules.
    function gen_physical_custody_timesharing_6_02D(string $type) {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:.5pt;text-align:justify;text-indent:35.5pt;line-height:150%'><a
            name=PhysicalCustodySpringBreak><b>6.02D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SPRING BREAK</u>.&nbsp; </a>The Parents shall share time with the Child(ren) during Spring Breaks as follows:&nbsp; </p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($type) {
            case "spring-split-break":
                $split = new SpringSchedules();
                $spring = $split->get_split($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $spring;
                $this->fileContentString .= $spring;
                break;
            case "spring-alternate-break":
                $alternate = new SpringSchedules();
                $spring = $alternate->get_alternate($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $spring;
                $this->fileContentString .= $spring;
                break;
            case "spring-continue-schedule":
                $continue = new SpringSchedules();
                $spring = $continue->get_continue();
                echo $spring;
                $this->fileContentString .= $spring;
                break;
            default:
                echo "Error in HTML Generator for the variable: schoolSpringBreakSchedule.";
        }
    }

    // Summer Break schedules.
    function gen_physical_custody_timesharing_6_02E(string $type) {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:.5pt;text-align:justify;text-indent:35.5pt;line-height:150%'><a
            name=PhysicalCustodySummerBreak><b>6.02E </b><u>SUMMER BREAK</u></a>.&nbsp; The
            Parents shall share time with the Child(ren) during Summer Break as follows:</p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($type) {
            case "summer-split-break":
                $split = new SummerSchedules();
                $summer = $split->get_split($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $summer;
                $this->fileContentString .= $summer;
                break;
            case "summer-uniterrupted-break":
                $alternate = new SummerSchedules();
                $summer = $alternate->get_continue_uniterrupted($this->responses['partyAFirst'], $this->responses['partyBFirst']); //need to implement this part, taking in time inputs
                echo $summer;
                $this->fileContentString .= $summer;
                break;
            case "summer-continue-schedule":
                $continue = new SummerSchedules();
                $summer = $continue->get_continue();
                echo $summer;
                $this->fileContentString .= $summer;
                break;
            default:
                echo "Error in HTML Generator for the variable: schoolSummerBreakSchedule.";
        }
    }
    function gen_physical_custody_timesharing_6_03() {}

    // Travel with children checked.
    function gen_physical_custody_timesharing_6_04() {
        //must implement the input - grabbing additional data if the user checks the box
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhysicalCustodyTravelwithChild><b>6.04&nbsp; </b><u>PHYSICAL CUSTODY AND
            TIMESHARING: TRAVEL WITH THE CHILD(REN)</u>.&nbsp; </a>Each parent shall have the
            right to take up to " . $this->responses['daysOff'] . "[insert days/weeks] days/weeks of off-island
            travel with the Child(ren) every year. The traveling parent shall provide" . $this->responses['daysNotify'] . " [insert number of days] days' notice in writing to the non-traveling parent
            if the trip is outside of the State of Hawaii.&nbsp; If the trip is within the
            State of Hawai�i, the traveling parent shall provide   " . $this->responses['daysNotifyHawaii'] . " [insert number of
            days] days' notice in writing to the non-traveling parent.&nbsp; For out-of-state
            travel, at least   " . $this->responses['daysNotifyOutside'] . " [insert number of days] days prior to departure (or
              " . $this->responses['dayNotifyHawaii'] . " [insert number of days] days prior to departure for in-state travel),
            the traveling parent shall provide the non-traveling parent full details
            regarding the trip including: (a) airline; flight number; dates and times of
            each flight leg; (b) the dates and times the traveling parent and the
            Child(ren) will be staying in each hotel, residence, etc.; and (c) if the
            Child(ren) are going to be traveling with others, the names of the other
            travelers.&nbsp; If the traveling parent does not provide this information, the trip
            shall not occur.&nbsp;&nbsp; </p>
            
            <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%;
            border:none'>Parents shall alternate having the first choice for dates for
            off-island travel during the Child(ren)'s summer vacations each year.&nbsp; In even
            years,  " . $this->responses['partyAFirst'] . " shall have first choice for dates of travel so long as they
            provide those specific dates in writing to  " . $this->responses['partyBFirst'] . " by no later than  " . $this->responses['yearsNotify'] . "
            [insert date] of that same year.&nbsp; In odd years, " . $this->responses['partyBFirst'] . " shall have first
            choice for dates of travel so long as they provide the specific dates in
            writing to " . $this->responses['partyAFirst'] . " by no later than  " . $this->responses['sameYearNotify'] . "[insert date] of that same year.
            If either parent wishes to take the Child(ren) out of the country or miss any
            school days in order to travel, such a trip shall require the non-traveling
            parent's consent which, if such requests are occasional, shall not be
            unreasonably withheld. Parents agree that off-island travel shall not
            negatively impact the Child(ren)'s education.</p>";
        echo $content;
        $this->fileContentString .= $content;
    }

    // Rescheduling and Make-Up time checked.
    function gen_physical_custody_timesharing_6_05() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhysicalCustodyRescheduling><b>6.05&nbsp; </b><u>PHYSICAL CUSTODY AND
            TIMESHARING: RESCHEDULING AND MAKE-UP TIME</u>.</a><span style='color:#333333'>&nbsp;
            </span><span style='color:#333333'>If a Parent is faced with an unexpected
            situation such as illness or a death in the family, or an irregular event like
            a family wedding, the other Parent will make every effort to accommodate a
            request for a change in the </span>schedule. If the change in the schedule
            results in the Child(ren) missing considerable time with the accommodating
            parent, reasonable make-up time will be arranged by the Parents.</p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    // Right of first refusal checked.
    function gen_physical_custody_timesharing_6_06() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhysicalCustodyROFR><b>6.06&nbsp; </b><u>PHYSICAL CUSTODY AND TIMESHARING:
            RIGHT OF FIRST REFUSAL</u></a>.<b>&nbsp; </b><span style='color:#333333'>We agree
            that if a Parent is unable to care for the Child(ren) themselves for a period
            of more than  " . $this->responses['refusalHours'] . "</span> [insert number of hours]<span style='color:#333333'>
            hours during their time with the Child(ren), they shall notify the other Parent
            and give them the opportunity to spend the period for which childcare is
            required with the Child(ren). </span>If the non-custodial Parent cannot
            accommodate the request, the custodial Parent is responsible for arranging and
            paying for alternate childcare and will inform the other Parent of who will be
            caring for the Child(ren).</p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    // Pick-up, non-school.
    function gen_physical_custody_timesharing_6_07() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhysicalCustodyPickupNonSchool><b>6.07&nbsp; </b><u>PHYSICAL CUSTODY AND
            TIMESHARING: PICK-UP FOR NON-SCHOOL EXCHANGES</u></a>.&nbsp; If possible, exchanges
            shall occur at school provided however, that if exchanges are not during school
            pick-ups or drop offs, then the Parents receiving the Child(ren) for custodial
            time shall pick-up the Child(ren) from the other Parent.</p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    // Drop-off, non-school.
    function gen_physical_custody_timesharing_6_08() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhysicalCustodyDropOffNonSchool><b>6.08&nbsp; </b><u>PHYSICAL CUSTODY AND
            TIMESHARING: DROP OFF FOR NON-SCHOOL EXCHANGES</u></a>.&nbsp; If possible, exchanges
            shall occur at school provided however, that if exchanges are not during school
            pick-ups or drop offs, then the Parents relinquishing the Child(ren) for
            custodial time shall drop off the Child(ren) to the other Parent. &nbsp;&nbsp;&nbsp; </p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    // Exchanges, neutral location.
    function gen_physical_custody_timesharing_6_09() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhyscialCustodyNeutralLocation><b>6.09&nbsp; </b><u>PHYSICAL CUSTODY AND
            TIMESHARING: EXCHANGES AT A NEUTRAL LOCATION</u>.&nbsp; </a>If possible, exchanges
            shall occur at school provided however, that if exchanges are not during school
            pick-ups or drop offs, Parents agree to exchange the child at the following
            neutral location&nbsp;  " . $this->responses['exchangeAddress'] . " [insert address].</p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    // Delegate Pick up and Drop off.
    function gen_physical_custody_timesharing_6_10() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhyscialCustodyDelgationPickupDropOff><b>6.10&nbsp; </b><u>PHYSICAL CUSTODY AND
            TIMESHARING:&nbsp; PARENTAL AUTHORITY TO DELEGATE PICK-UP AND DROP OFF THE CHILD(REN</u></a><u>)</u>.&nbsp;
            <span style='color:#333333'>If it is not possible for " . $this->responses['parentAFirst'] . " or " . $this->responses['parentBFirst'] . " to
            pick up or drop off the Child(ren) as provided for in the parenting time
            arrangement, the Parent who is responsible for the pick-up or drop off may
            delegate another person to pick up or drop off the Child(ren).</span></p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    // Persons authorized to pick up/drop off.
    function gen_physical_custody_timesharing_6_11() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhyscialCustodyAuthorizatioPickupDropOff><b>6.11&nbsp; </b><u>PHYSICAL CUSTODY
            AND TIMESHARING:&nbsp; PERSONS AUTHORIZED TO PICK-UP AND DROP OFF THE CHILD(REN</u></a><u>)</u>.
            <span style='color:#333333'>If it is not possible for " . $this->responses['parentAFirst'] . " or " . $this->responses['parentBFirst'] . " to
            pick up or drop off the Child(ren) as provided for in the parenting time
            arrangement, the following people may pick up or drop off the Child(ren):
             " . $this->responses['personsAuthorized'] . "[insert names of all jointly authorized
            individuals].</span></p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    // Children's personal belongings.
    function gen_physical_custody_timesharing_6_12() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhyscialCustodyChildBelongings><b>6.12&nbsp; </b><u>PHYSICAL CUSTODY AND
            TIMESHARING: CHILD(REN)'S PERSONAL BELONGINGS</u>.</a><span style='color:#333333'>
            </span><span style='color:#333333'>Child(ren) often have favorite clothing,
            toys, or communication devices that they would like to have with them, wherever
            they are living. Even if these are gifts from one parent, it is normally
            appropriate to recognize the Child(ren)'s attachments and rights to personal
            property. If there is potential for conflict on this issue, it can be important
            to be clear about where the Child(ren) may take these items and communicate
            this directly to the other Parent.&nbsp; </span>Child(ren) may take personal items
            (for example, clothing, toys, sports equipment, cell phone, regardless of which
            Parent purchased these items), between the homes of " . $this->responses['parentAFirst'] . " and " . $this->responses['parentBFirst'] . ".
            Parents will not restrict the Child(ren)'s ability to take these items between
            homes. Parents will each have toiletries, pajamas and as many belongings as
            possible for the Child(ren) in their homes. These items will not travel back
            and forth.</p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    // Relocation.
    function gen_physical_custody_timesharing_6_13() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhyscialCustodyRelocation><b>6.13&nbsp; </b><u>PHYSICAL CUSTODY AND
            TIMESHARING: RELOCATION</u></a>.<b>&nbsp; </b>If either Parent intends to relocate
            away from the island of their current residences or outside of the State where
            they currently reside, then the moving Parent shall provide the other Parent at
            least  " . $this->responses['relocationDays'] . " ( " . $this->responses['relocationDays'] . ") [insert number of days] days' notice of their intent to
            move.&nbsp; After receiving notice of an intent to relocate, Parents shall meet and
            review this <u>Co-Parenting Plan:</u> <u>Agreement Regarding Child Custody,
            Timesharing, and Support</u> to try to mutually agree on a modified plan they
            feel is in the best interests of the Child(ren). In the event that Parents
            cannot reach an agreement, the Child(ren) shall remain with the non-moving
            parent until Parents are able to mutually agree or further order of the Court.&nbsp;
            </p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_14() {
        $content = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
            margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
            name=PhyscialCustodyModofSchedule><b>6.14</b>&nbsp; <u>PHYSICAL CUSTODY AND
            TIMESHARING: MODIFICATION OF SCHEDULE BY AGREEMENT OF BOTH PARENTS</u></a>.
            While both Parents agree and intend that it is a priority to maintain stability
            and consistency in the life of their Child(ren), they understand that they have
            the power to modify the foregoing schedule at any time.&nbsp; Parents shall continue
            to work out the details of the Child(ren)'s schedules based on what is
            reasonable under the circumstances, mutually agreed to, and deemed in the best
            interest of the Child(ren).&nbsp; The foregoing schedule may be modified upon mutual
            agreement of the Parents in writing (text or e-mail is sufficient).</p>";
        echo $content;
        $this->fileContentString .= $content;
    } // End of section 4: Physical custody and Timesharing


     //Section 7 Communication: Definition
     function gen_communication_7()
     {
         $definition = "<p class=MsoNormal align=center style='margin-top:0in;margin-right:1.8pt;
         margin-bottom:.05pt;margin-left:0in;text-align:center;text-indent:0in;
         line-height:150%'><u>COMMUNICATION:</u></p>
 
         <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=Communication><b>7.00</b>&nbsp; <u>COMMUNICATION</u></a>.&nbsp; Parents agree and
         understand that communication between Co-Parents is critical to their
         Child(ren)'s well-being.&nbsp; Parents shall work together to agree on what
         information needs to be communicated to the other Parent in a timely manner
         and, at a minimum agree, that the following shall be communicated:</p>
         
         <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%;
         border:none'>a.<span style='font:7.0pt'>&nbsp;&nbsp;&nbsp; </span>A
         child is sick.</p>
 
         <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%;
         border:none'>b.<span style='font:7.0pt'>&nbsp;&nbsp; </span>A
         child is missing school.</p>
 
         <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%;
         border:none'>c.<span style='font:7.0pt'>&nbsp;&nbsp;&nbsp; </span>A
         child will be spending the night somewhere other than the custodial parent's
         home.</p>
 
         <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%;
         border:none'>d.<span style='font:7.0pt'>&nbsp;&nbsp; </span>A
         pet belonging to a child is missing, dying, or new.</p>
 
         <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%;
         border:none'>e.<span style='font:7.0pt'>&nbsp;&nbsp;&nbsp; </span>An
         individual, other than the parent or subject child(ren), is moving into the
         custodial parent's home or property (includes long-term tenants).</p>
 
         <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%;
         border:none'>f.<span style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;
         </span>An individual other than a parent is transporting a child (those
         authorized to transport the Child(ren) shall be agreed upon in advance in
         writing).</p>
 
         <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%;
         border:none'>g.<span style='font:7.0pt'>&nbsp;&nbsp;&nbsp; </span>An
         individual other than a parent is caring a child when the custodial parent is
         not present (those authorized to care for the children shall be agreed upon in
         advance in writing).</p>
 
         <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%;
         border:none'>h.<span style='font:7.0pt'>&nbsp;&nbsp; </span>Discipline
         of a child during one parent's timesharing day which may affect the other
         parent's timesharing.&nbsp; </p>";
 
         echo $definition;
         $this->fileContentString .= $definition;
     }
 
     //Communication method page1
 
     function gen_communication_7_01()
     {
         $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=CommunicationEmailOnly><b>7.01</b>&nbsp; <u>COMMUNICATION BETWEEN CO-PARENTS:
         <span style='background:yellow'>E-MAIL ONLY</span></u></a>. 
         Parents shall communicate primarily through e-mail.&nbsp; The
         Parents may utilize text or telephone calls in an emergency situation or in the
         event a timely response is needed (within 2 � 4 hours).&nbsp; Otherwise, all
         communication shall be via e-mail.&nbsp; Both Parents shall check their e-mail at
         least once daily and shall respond to messages or other items needing attention
         (i.e. switch requests) within 48 hours.&nbsp; If more time is needed to respond, the
         receiving parent shall acknowledge the message and provide a timeline in which
         a response shall be provided.</p>";
 
         echo $snippet;
         $this -> fileContentString .= $snippet;
     }
 
     function gen_communication_7_02()
     {
         $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=CommunicationEmailandTextOnly><b>7.02</b>&nbsp; <u>COMMUNICATION BETWEEN
         CO-PARENTS: <span style='background:yellow'>E-MAIL AND TEXT ONLY</span></u></a>. 
         Parents shall communicate primarily through e-mail and text.&nbsp; The Parents may utilize telephone calls in an
         emergency situation or in the event a timely response is needed (within 2 � 4
         hours).&nbsp; Otherwise, all communication shall be via e-mail or text.&nbsp; Both
         Parents shall check their e-mail and texts at least once daily and shall
         respond to messages or other items needing attention (i.e. switch requests)
         within 48 hours.&nbsp; If more time is needed to respond, the receiving parent shall
         acknowledge the message and provide a timeline in which a response shall be
         provided.</p>";
         
         echo $snippet;
         $this -> fileContentString .= $snippet;
     }
 
     function gen_communication_7_03()
     {
         $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=CommunicationOurFamilyWizard><b>7.03</b>&nbsp; <u>COMMUNICATION BETWEEN
         CO-PARENTS: <span style='background:yellow'>OUR FAMILY WIZARD OR OTHER MUTUALLY AGREED UPON PARENTING
         COMMUNICATION APPLICATION</span></u>.</a> Parents shall communicate solely through Our
         Family Wizard or other mutually agreed upon parenting communication
         application.&nbsp; Both Parents shall sign up for Our Family Wizard or other
         mutually agreed upon parenting communication application within ten (10) days
         of the date the last party signs this Agreement and shall maintain an account
         with said program.</p>";
 
         echo $snippet;
         $this -> fileContentString .= $snippet;
     }
 
     //communication between co-parents
     function gen_communication_7_04()
     {
         $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=CommunicationMonthlyConference><b>7.04&nbsp; </b><u>COMMUNICATION BETWEEN
         CO-PARENTS: <span style='background:yellow'>MONTHLY CONFERENCE</span></u></a>. Parents shall meet monthly to discuss
         the children's development and needs including education, health, well-being,
         extracurricular activities, scheduling issues, travel and any other issues
         pertaining to their child(ren).&nbsp; Conferences shall be on the first  <span style='background:yellow'>" . $this->responses["insertmonthly"] . "</span>&nbsp;
         [insert day of the week] of each month unless mutually agreed to otherwise.
         Meetings may be via in-person, video conference or telephone calls, as mutually
         agreed by the Parents.&nbsp; This requirement for monthly conferences between
         Parents shall end upon each child's eighteenth (18th) birthday, or as mutually
         agreed by the Parents.&nbsp; </p>";
 
         echo $snippet;
         $this -> fileContentString .= $snippet;
     }
 
     function gen_communication_7_05()
     {
         $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=CommunicationSemiAnnualConference><b>7.05&nbsp; </b><u>COMMUNICATION BETWEEN
         CO-PARENTS: SEMI-ANNUAL CONFERENCE</u></a>. Parents shall meet and confer twice
         annually by no later than <span sytle='background:yellow'>" . $this->responses["semidate1"] . "</span> and <span sytle='background:yellow'>" . $this->responses["semidate2"] . "</span>
         every year.&nbsp; Meetings may be via in-person, video conference or telephone
         calls, as mutually agreed by the Parents.&nbsp; This requirement for bi-annual
         conferences between Parents shall end upon each child's eighteenth (18th)
         birthday, or as mutually agreed by the Parents.&nbsp; </p>";
 
         echo $snippet;
         $this -> fileContentString .= $snippet;
     }
 
     function gen_communication_7_06()
     {
         $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=CommunicationAnnualConference><b>7.06&nbsp; </b><u>COMMUNICATION BETWEEN
         CO-PARENTS: ANNUAL CONFERENCE</u></a>.</p>";
 
         echo $snippet;
         $this -> fileContentString .= $snippet;
     }
     
     function gen_communication_7_06a()
     {
         $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'>Parents
         shall meet and confer annually by no later than <span syle='background:yellow'>" . $this->responses["annuldate"] . "</span> every
         year.&nbsp; Meetings may be via in-person, video conference or telephone calls, as
         mutually agreed by the Parents.&nbsp; This requirement for annual conferences
         between Parents shall end upon each child's eighteenth (18th) birthday, or as
         mutually agreed by the Parents.<u> </u></p>";
 
         echo $snippet;
         $this -> fileContentString .= $snippet;
     }
 
     function gen_communication_7_07()
     {
         $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=CommunicationUnlimited><b>7.07&nbsp; </b><u>COMMUNICATION BETWEEN CHILD(REN)
         AND NON-CUSTODIAL PARENT: <span style='background:yellow'>UNLIMITED</span></u></a>.&nbsp; <span style='color:#333333'>During
         the regular parenting time schedule, the child may contact each parent whenever
         they wish.</span></p>";
 
         echo $snippet;
         $this -> fileContentString .= $snippet;
     }
 
     function gen_communication_7_08()
     {
         $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=CommunicationSpecific><b>7.08&nbsp; </b><u>COMMUNICATION BETWEEN CHILD(REN) AND
         NON-CUSTODIAL PARENT: SPECIFIC</u></a>. <span style='color:#333333'>During the
         regular parenting time schedule, Parent A may call the child between <span syle='background:yellow'>" . $this->responses["A9:00"] . "</span> and <span syle='background:yellow'>" . $this->responses["A17:00"] . "</span> when they are with Parent B 
         and Parent B may call the
         child between <span syle='background:yellow'>" . $this->responses["B09:00"] . "</span> and <span syle='background:yellow'>" . $this->responses["B17:00"] . "</span> when they are with ParentA.
         Calls will normally be no more than 10 minutes.</span></p>";
 
         echo $snippet;
         $this -> fileContentString .= $snippet;
     }
 
     function gen_communication_7_09()
     {
         $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=CommunicationExchangeofContactInfo><b>7.08 </b> <u>COMMUNICATION:&nbsp;
         EXCHANGE OF CONTACT INFORMATION</u></a>.&nbsp; <span style='color:#333333'>Parents
         shall provide to the other Parent with updated telephone number(s), email
         address, and home address. Parents agree that if this contact information
         changes, they shall provide the new contact information to the other Parent
         immediately.</span></p>";
 
         echo $snippet;
         $this -> fileContentString .= $snippet;
     }
 
     function gen_communication_7_10()
     {
         $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=CommunicationSchedulingExtracurricular><b>7.09&nbsp; </b><u>COMMUNICATION:
         SCHEDULING EXTRACURRICULAR ACTIVITIES FOR THE CHILD(REN)</u></a>.&nbsp; Both Parents
         understand that reasonable extracurricular activities are healthy and
         appropriate outlets for our Child(ren).&nbsp; Both Parents understand that selecting
         extracurricular activities for the Child(ren) is a legal custody decision. <span
         style='color:#333333'>Neither of us will schedule extra-curricular activities
         during the time the Child(ren) is to be living with or in the care of the other
         Parent, unless the other Parent agrees.</span><b>&nbsp; </b><span style='color:#333333'>The
         other Parent shall not unreasonably withhold their agreement.</span></p>";
 
         echo $snippet;
         $this -> fileContentString .= $snippet;
     }
 
     function gen_communication_7_11()
     {
         $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
         name=CommunicationSelectingExtracurricular><b>7.10</b>&nbsp; <u>COMMUNICATION:
         SELECTING EXTRACURRICULAR ACTIVITIES FOR THE CHILD(REN)</u>.&nbsp; </a><span
         style='color:#333333'>Each Parent may select and pay for one extra-curricular
         activity that occurs no more than once a week for each Child, and the other
         Parent shall be expected to take each Child to that activity and support the
         Child's participation during the time that the Child is in their care.</span>&nbsp; </p>";
 
         echo $snippet;
         $this -> fileContentString .= $snippet;
     }

     // End of Communication
     
    // LEGAL CUSTODY
    // Header & definition section 
    function gen_legal_custody_5_00()
    {
        $definition = "<p class=MsoNormal align=center style='margin-top:0in;margin-right:1.8pt;
        margin-bottom:.05pt;margin-left:0in;text-align:center;text-indent:0in;
        line-height:150%'><u>LEGAL CUSTODY:</u></p>
        
        <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyDefinition></a><a name='_heading=h.gjdgxs'></a><b>5.00</b>&nbsp; <u>LEGAL
        CUSTODY: DEFINITION</u>. Legal custody is the authority to make major decisions
        involving the Child(ren).&nbsp; Such major decisions would include, among
        others, the decision to allow the Child(ren) to enter the armed forces, the
        decision to marry before the legal age, the decision to file a lawsuit, or
        accept a settlement of claims involving the Child(ren), the decision to allow
        the Child(ren) to use birth control, including pregnancy termination, the
        decision to allow the children to obtain a driver's license or passport, the
        decision to allow the Child(ren) to obtain substantial employment, the decision
        to authorize non-emergency medical or other treatment for the Child(ren), the
        decision to involve the Child(ren) in counseling, religious decisions affecting
        the Child(ren), major decisions involving the Child(ren)'s education, such as
        choice of school, change in school, advancement or retention, choice of
        curriculum, participation in extracurricular activities, and special education
        needs like tutoring, decisions as to the management of any substantial monies
        received by the Child(ren), decisions regarding major expenditures by or for
        the Child(ren), decisions involving serious discipline problems of the
        Child(ren), decisions involving the receipt, management and sale of real or
        personal property while a child is under eighteen (18) years of age, and
        decisions involving a child's travel to any distance beyond the jurisdiction of
        the United States for any period of time.&nbsp;</p>";
        echo $definition;
        $this->fileContentString .= $definition;
    }
    // joint to both parents 
    function gen_legal_custody_5_01()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyJoint><b>5.01</b>&nbsp; <u>LEGAL CUSTODY: JOINT TO BOTH PARENTS</u></a>.&nbsp;
        Parents shall share joint legal custody of the Child(ren) and shall make
        decisions together. <span style='color:#333333'>Parents agree they shall make
        significant decisions together and encourage input from Child(ren). If Parents
        cannot come to an agreement about a major decision, they shall use the dispute
        resolution process set out in this document.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // joint to both parents -> tie-breaking authority to parent A
    function gen_legal_custody_5_03A()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyParentsConsultOneAuthority><b>5.03</b>&nbsp; <u>LEGAL CUSTODY:
        PARENTS MUST CONSULT BUT ONE PARENT HAS TIE-BREAKING AUTHORITY</u></a>.&nbsp;
        Parents shall share joint legal custody of the Child(ren), provided however,
        that if Parents cannot mutually agree on a legal custody decision for the
        Child(ren) after consulting with the other Parent and the Child(ren), then
        <span style='background:yellow'>Parent A</span> shall have tie-breaking authority to make the legal custody decision
        in the event of an impasse.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // joint to both parents -> tie-breaking authority to parent B 
    function gen_legal_custody_5_03B()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyParentsConsultOneAuthority><b>5.03</b>&nbsp; <u>LEGAL CUSTODY:
        PARENTS MUST CONSULT BUT ONE PARENT HAS TIE-BREAKING AUTHORITY</u></a>.&nbsp;
        Parents shall share joint legal custody of the Child(ren), provided however,
        that if Parents cannot mutually agree on a legal custody decision for the
        Child(ren) after consulting with the other Parent and the Child(ren), then
        <span style='background:yellow'>Parent B</span> shall have tie-breaking authority to make the legal custody decision
        in the event of an impasse.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // sole to parent A
    function gen_legal_custody_5_05A()
    {   // 5.02  
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodySole><b>5.02</b>&nbsp; <u>LEGAL CUSTODY: SOLE TO ONE PARENT</u></a>.&nbsp;
        <span style='background:yellow'>Parent A</span> shall have sole legal custody of the Child(ren).</p>
        
        <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyAccesstoInformation><b>5.05</b>&nbsp; <u>LEGAL CUSTODY: ACCESS TO
        INFORMATION FOR PARENT WITHOUT LEGAL CUSTODY</u></a>.&nbsp; Although <span style='background:yellow'>Parent A </span> is
        awarded sole legal custody, <span style='background:yellow'>Parent B </span> shall have free and unrestricted access
        to all information pertaining to the Child(ren).&nbsp; The Parent who does not have
        legal custody may independently contact any provider serving the Child(ren)
        including education, health-related, extracurricular, etc. and access any and
        all records or information.&nbsp; The Parent with legal custody shall have an
        affirmative duty to inform the other Parent of any new providers working with
        the Child(ren).</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // sole to parent B
    function gen_legal_custody_5_05B()
    {   // 5.02
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodySole><b>5.02</b>&nbsp; <u>LEGAL CUSTODY: SOLE TO ONE PARENT</u></a>.&nbsp;
        <span style='background:yellow'>Parent B</span> shall have sole legal custody of the Child(ren).</p>
        
        <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyAccesstoInformation><b>5.05</b>&nbsp; <u>LEGAL CUSTODY: ACCESS TO
        INFORMATION FOR PARENT WITHOUT LEGAL CUSTODY</u></a>.&nbsp; Although <span style='background:yellow'>Parent B </span> is
        awarded sole legal custody, <span style='background:yellow'>Parent A </span> shall have free and unrestricted access
        to all information pertaining to the Child(ren).&nbsp; The Parent who does not have
        legal custody may independently contact any provider serving the Child(ren)
        including education, health-related, extracurricular, etc. and access any and
        all records or information.&nbsp; The Parent with legal custody shall have an
        affirmative duty to inform the other Parent of any new providers working with
        the Child(ren).</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // parents must consult but there is a division of authority 
    function gen_legal_custody_5_04()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyParentsConsultDivofAuthority><b>5.04&nbsp; </b><u>LEGAL CUSTODY:
        PARENTS MUST CONSULT BUT THERE IS A DIVISION OF AUTHORITY</u>.&nbsp; </a>Parents
        shall share joint legal custody of the Child(ren), provided however, that if
        Parents cannot mutually agree on a legal custody decision for the Child(ren),
        then   <span style='background:yellow'>" . $this->responses["parentABW"] . "</span> shall have tie-breaking authority to make <span style='color:
        #333333'>major decisions about the Child(ren)'s education and extracurricular
        activities, after consulting with  <span style='background:yellow'>" . $this->responses["parentABX"] . "</span> and the Child(ren) and  <span style='background:yellow'>" . $this->responses["parentABY"] . "</span>
        shall have tie-breaking authority to make major decisions about the Child(ren)'s
        health care, language, and spirituality, after consulting with  <span style='background:yellow'>" . $this->responses["parentABZ"] . "</span> and the
        child.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // emergency contacts for the child(ren) 
    function gen_legal_custody_5_06()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyEmergencyContact><b>5.06</b>&nbsp; <u>LEGAL CUSTODY: EMERGENCY
        CONTACTS FOR THE CHILD(REN</u></a><u>)</u>.&nbsp; Both Parents shall be listed as
        the initial emergency contacts for the Child(ren) for any school,
        extracurricular activity or other event where an emergency contact is
        requested.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // expert advice when making legal custody decisions 
    function gen_legal_custody_5_07()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyExpertAdvice><b>5.07</b>&nbsp; <u>LEGAL CUSTODY: EXPERT ADVICE WHEN
        MAKING LEGAL CUSTODY DECISIONS</u>. </a>&nbsp;Parents shall seek the advice and be
        guided by subject matter experts when making legal custody decisions on behalf
        of the Child(ren). </p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // day-to-day decisions
    function gen_legal_custody_5_08()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyDaytoDay><b>5.08&nbsp; </b><u>LEGAL CUSTODY: DAY-TO-DAY DECISIONS</u></a>.&nbsp;
        <span style='color:#333333'>During the period when the Child(ren) is or are
        living with or in the care of a Parent, that Parent can make day-to-day
        decisions about our child, for example about, doing homework, meals, visiting
        with their friends, use of computer, etc.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // emergency decisions 
    function gen_legal_custody_5_09()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyEmergencyDecisions><b>5.09&nbsp; </b><u>LEGAL CUSTODY: EMERGENCY
        DECISIONS</u></a>.&nbsp; <span style='color:#333333'>In a health emergency for a
        Child, the Parent with care of the Child(ren) at that time will make the
        treatment decision, on the advice of medical personnel. If a Parent makes an
        emergency health decision for a Child, the Parent who has made the decision must
        immediately contact the other Parent.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // health emergency or death of other parent
    function gen_legal_custody_5_10()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyHealthEmergencyDeathofParent><b><span style='color:#333333'>5.10</span></b></a><span
        style='color:#333333'>&nbsp; </span><u>LEGAL CUSTODY: HEALTH EMERGENCY OR DEATH OF
        OTHER PARENT</u>.&nbsp; <span style='color:#333333'>In the event of a Parent's
        medical emergency, the other Parent shall assume the major decision-making
        responsibilities for the Child(ren) until the situation becomes resolved.&nbsp; In
        the event of the death of one Parent, the other Parent shall care for the Child(ren),
        but the surviving Parent shall ensure that the Child(ren) has/have continued
        relations with the relatives of the deceased Parent.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // parallel parenting 
    function gen_legal_custody_5_11()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=LegalCustodyParallelParenting><b><span style='color:#333333'>5.11</span></b></a><span
        style='color:#333333'>&nbsp; </span><u>LEGAL CUSTODY: PARALLEL PARENTING</u>.&nbsp; <span
        style='color:#333333'>Parents shall disengage from one another and make
        decisions independently when the Child(ren) is in their care.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }  // end of legal custody

    // CHILD SUPPORT 
    // header & monthly child support amount under the law 
    function gen_child_support_8_00()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'>&nbsp;</p>
        
        <p class=MsoNormal align=center style='margin-top:0in;margin-right:1.8pt;
        margin-bottom:.05pt;margin-left:0in;text-align:center;text-indent:0in;
        line-height:150%'><u>SUPPORT OF THE CHILD(REN):</u></p>
        
        <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:150%;
        border:none'><a name=SoCMonthlyUnderLaw><b>8.00</b>&nbsp; <u>SUPPORT OF THE
        CHILD(REN): MONTHLY CHILD SUPPORT AMOUNT UNDER THE LAW</u>.</a>&nbsp; Each State has
        Child Support Guidelines used to calculate monthly child support. Each parent
        shall be bound by and follow the Uniform Interstate Family Support Act.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // same state 
    function gen_child_support_8_01()
    {
        $snippet = "<p class=MsoNormal style='margin:0in;text-indent:0in;line-height:150%;
        border:none'><a name=SoCChildSupportSameState><b>8.01&nbsp; </b><u>SUPPORT OF THE
        CHILD(REN): CHILD SUPPORT GUIDELINES AMOUNT WHEN PARENTS RESIDE IN THE SAME
        STATE</u>.&nbsp; </a>Child support shall be paid by <span style='background:yellow'>" . $this->responses["parentAB1"] . "</span> to <span style='background:yellow'>" . $this->responses["parentAB2"] . "</span> and
        calculated pursuant to the State child support guidelines worksheet. </p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // mutually agreed upon amount alternative 
    function gen_child_support_8_03()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;line-height:150%'><a
        name=SoCChildSupportAgreedAlternative><b>8.03&nbsp; </b><u>SUPPORT OF THE
        CHILD(REN): MUTUALLY AGREED UPON CHILD SUPPORT AMOUNT ALTERNATIVE</u></a>.&nbsp;
        Child Support shall be paid by <span style='background:yellow'>" . $this->responses["parentAB3"] . "</span> to <span style='background:yellow'>" . $this->responses["parentAB4"] . "</span> by agreement of the
        Parents in the amount of <span style='background:yellow'>$" . $this->responses["mutual-1"] . "/per Child</span> per month for a total monthly child
        support amount of <span style='background:yellow'>$" . $this->responses["mutual-2"] . "</span>.&nbsp; Both Parents understand that child support is
        modifiable going forward and at any time either Parent may request that child
        support be calculated pursuant to their State guidelines and ordered to be paid
        pursuant to and Order for Income Withholding (or similar order) via the State
        Child Support Enforcement Agency.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // no agreement of the parents 
    function gen_child_support_8_04()
    {
        $snippet = "<p class=MsoNormal style='margin:0in;text-indent:0in;line-height:150%;
        border:none'><a name=SoCChildSupportNoAgreement><b>8.04&nbsp; </b><u>SUPPORT OF THE
        CHILD(REN): NO AGREEMENT OF THE PARTIES RE MONTHLY CHILD SUPPORT AMOUNT AND/OR
        JURISDICTION</u></a>.&nbsp; Parents do not agree on the amount of Child Support to
        be paid and/or on which State should have jurisdiction to calculate child
        support under the Uniform Interstate Family Support Act.&nbsp; Parents agree to
        litigate the issue of child support through the Family Court and/or the State
        Child Support Enforcement Agency.&nbsp; <b>Note: In many states, physical custody
        and timesharing with the Child(ren) impacts the calculation of child support.&nbsp;
        If the child support amount if going to be litigated through the Family Court
        or administratively through the State Child Support Enforcement Agency, Parents
        are hereby advised to seek independent legal counsel before making any
        agreements regarding physical custody and timesharing. </b></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // child support account alternative 
    // *** per Kristin, will add some text to this section & get back to us ***
    function gen_child_support_8_05()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=SoCChildSupportAccountAlternative><b><span style='background:yellow'>8.05 </span></b><u><span
        style='background:yellow'>SUPPO</span></u></a><u><span style='background:yellow'>RT
        OF THE CHILD(REN): CHILD SUPPORT ACCOUNT ALTERNATIVE</span></u><span
        style='background:yellow'>.&nbsp; Parents agree that</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // payment -> pick only one -> direct payment 
    function gen_child_support_8_06()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=SocDirectPayment><b>8.06&nbsp; </b><u>SUPPORT OF THE CHILD(REN): DIRECT PAYMENT
        OF CHILD SUPPORT</u>.</a></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // payment -> pick only one -> payment of child support through support enforcement agency 
    function gen_child_support_8_07()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=SoCThroughStateAgency><b>8.07&nbsp; </b><u>SUPPORT OF THE CHILD(REN): PAYMENT
        OF CHILD SUPPORT THROUGH THE STATE CHILD SUPPORT ENFORCEMENT AGENCY</u></a>.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // health insurance premiums 
    function gen_child_support_8_08()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=SoCHealthInsurance><b>8.08&nbsp; </b><u>SUPPORT OF THE CHILD(REN): HEALTH
        INSURANCE PREMIUM</u></a><u>S</u>.&nbsp;&nbsp;<span style='background:yellow'>" . $this->responses["parentAB5"] . "</span> shall cover the Child(ren)'s
        health insurance premiums in the amount of <span style='background:yellow'>$" . $this->responses["insurancePremium"] . "</span> per month.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // header for uninsured co-pays for health-related expenses
    function gen_child_support_8_09()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=SoCUninsuredCoPays><b>8.09&nbsp; </b><u>SUPPORT OF THE CHILD(REN): UNINSURED
        CO-PAYS FOR HEALTH-RELATED EXPENSES</u></a>.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_09A() //uninsured co-pays for health-related expenses -> sole responsibility
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCUninsuredCoPaysSR><b>8.09A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SOLE RESPONSIBILITY</u></a>.
        <span style='background:yellow'>" . $this->responses["parentAB6"] . "</span> shall cover 100% of the Child(ren)'s uninsured co-pays for
        health-related expenses premiums in the amount of <span style='background:yellow'>$" . $this->responses["sole-1"] . "</span> per month.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_09B() //split responsibility
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCUninsuredCoPaysSpR>8.09B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></b><u>SPLIT RESPONSIBILITY</u>.
        Parent A shall cover <span style='background:yellow'>" . $this->responses["split-1"] . "%</span> and Parent B shall cover  <span style='background:yellow'>" . $this->responses["split-2"] . "%</span> of the Child(ren)'s
        uninsured co-pays for health-related expenses premiums in the amount of <span style='background:yellow'>$" . $this->responses["split-3"] . "</span>
        per month.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_09C() //responsibility for threshold amount
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCUninsuredCoPaysThresholdAmount>8.09C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>RESPONSIBILITY
        FOR THRESHOLD AMOUNT</u>. Each Parent shall cover up to <span style='background:yellow'>$" . $this->responses["threshold1"] . "</span> per Child per
        calendar year in uninsured co-pays for health-related expenses.&nbsp; In the event
        that any Child's uninsured co-pays for health-related expenses paid by either
        parent exceeds <span style='background:yellow'>$" . $this->responses["threshold2"] . "</span> per calendar year, then Parent A shall cover  <span style='background:yellow'>" . $this->responses["threshold3"] . "%</span> and
        Parent B shall cover <span style='background:yellow'>" . $this->responses["threshold4"] . "%</span> of the Child(ren)'s uninsured co-pays for
        health-related expenses premiums exceeding the threshold amount.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // header for Extracurricular Expenses 
    function gen_child_support_8_10()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=SoCExtracurricular><b>8.10&nbsp; </b><u>SUPPORT OF THE CHILD(REN):
        EXTRACURRICULAR EXPENSES</u></a>.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_10A() // extracurricular expenses -> sole responsibility 
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCExtracurricularSR><b>8.10A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SOLE RESPONSIBILITY</u></a>.
        <span style='background:yellow'>" . $this->responses["parentAB_EC"] . "</span> shall cover 100% of the Child(ren)'s extracurricular expenses.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_10B() // split responsibility
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCExtracurricularSpR>8.10B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>SPLIT RESPONSIBILITY</u>.
        Parent A shall cover <span style='background:yellow'>" . $this->responses["splitEC-1"] . "%</span> and Parent B shall cover <span style='background:yellow'>" . $this->responses["splitEC-2"] . "%</span> of the Child(ren)'s
        extracurricular expenses.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_10C() // pursuant to 7.10 hereinabove 
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCExtracurricularSelection>8.10C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>SELECTING
        EXTRACURRICULAR ACTIVITIES FOR THE CHILD(REN) PURSUANT TO 7.10 HEREINABOVE</u>.&nbsp;
        If the Parents have elected to separately select<span style='color:#333333'>
        and pay for one extra-curricular activity that occurs no more than once a week
        for each Child, then the other Parent shall be expected to take each Child to
        that activity and support the Child's participation during the time that the
        Child is in their care, pursuant to Paragraph 7.10 hereinabove.&nbsp; Each Parent
        shall pay for 100% of their selected extracurricular activity, which shall
        include supplies, uniforms, travel out-of-state, and other expenses required
        for the Child to participate</span>.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_10D() // mutually agreed upon
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCExtracurricularMutualAgreement>8.10D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>EXTRACURRICULAR
        ACTIVITIES MUST BE MUTUALLY AGREED UPON</u>.&nbsp; Parents shall only be responsible
        for paying for extracurricular activities that are mutually agreed upon by both
        Parents.&nbsp; Parents agree to consult and be guided by the Child's preferences in
        selecting mutually agreed upon extracurricular activities.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // header for private school expenses 
    function gen_child_support_8_11()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=SoCPrivateSchoolExpenses><b>8.11</b>&nbsp; <u>SUPPORT OF THE CHILD(REN):
        PRIVATE SCHOOL EXPENSES</u>.</a></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_11A() // sole
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCPrivateSchoolExpensesSR><b>8.11A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SOLE RESPONSIBILITY</u></a>.
        <span style='background:yellow'>" . $this->responses["parentAB_Priv"] . "</span> shall cover 100% of the Child(ren)'s private school expenses.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_11B() // split
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCPrivateSchoolExpensesSpR>8.11B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>SPLIT RESPONSIBILITY</u>.
        Parent A shall cover <span style='background:yellow'>" . $this->responses["splitPriv-1"] . "%</span> and Parent B shall cover <span style='background:yellow'>" . $this->responses["splitPriv-2"] . "%</span> of the Child(ren)'s
        private school expenses.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_11C() // definition
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCPrivateSchoolExpensesDefinition>8.11C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>DEFINITION OF
        PRIVATE SCHOOL EXPENSES</u>.&nbsp; Private school expenses shall be defined to
        include all expenses related to a Child's attendance at a private school
        including, without limitation, application fees/costs, tuition, books,
        uniforms, school lunches, and before and/or after school care expenses.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_11D() // mutual agreement of parents
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCPrivateSchoolExpensesMutualAgreement>8.11D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>MUTUAL
        AGREEMENT OF PARENTS</u>.&nbsp; Either Parent may apply for a Child to attend
        private school but unless one parent has sole legal custody, both Parents must
        approve the enrollment of any Child in a private school.<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_11E() // reserve
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCPrivateSchoolExpensesReserve>8.11E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>RESERVE</u>.&nbsp;
        Parents shall reserve the issue of private school expenses.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // header for post-high school expenses 
    function gen_child_support_8_12()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=SoCPostSchoolExpenses><b>8.12&nbsp; </b><u>SUPPORT OF THE CHILD(REN): POST-HIGH
        SCHOOL EDUCATION EXPENSES</u></a>.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_12A() // sole
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%'><a
        name=SoCPostSchoolExpensesSR><b>8.12A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SOLE RESPONSIBILITY</u></a>.
        <span style='background:yellow'>" . $this->responses["parentAB_High"] . "</span> shall cover 100% of the Child(ren)'s post-high school education
        expenses.&nbsp; </p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_12B() // split
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCPostSchoolExpensesSpR>8.12B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>SPLIT RESPONSIBILITY</u>.
        Parent A shall cover <span style='background:yellow'>" . $this->responses["splitHigh-1"] . "%</span> and Parent B shall cover <span style='background:yellow'>" . $this->responses["splitHigh-2"] . "%</span> of the Child(ren)'s
        post-high school education expenses.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_12C() // sole after 529 
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCPostSchoolExpensesSRFundsfromchildacc>8.12C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>SOLE
        RESPONSIBILITY AFTER FUNDS FROM ANY 529 ACCOUNTS HELD ON BEHALF OF A CHILD OR
        CHILD(REN), COVERDELL ACCOUNTS OR OTHER FUNDS EAR-MARKED TO PAY FOR A CHILD'S
        POST-HIGH SCHOOL EDUCATION EXPENSES</u>.&nbsp; After funds from any 529 accounts
        held on behalf of a Child or Child(ren), Coverdell accounts or other funds
        ear-marked to pay for a Child's post-high school education expenses are
        expended, then <span style='background:yellow'>" . $this->responses["parentAB_Sole529"] . "</span> shall cover 100% of the Child(ren)'s remaining
        post-high school education expenses.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_12D() // split after 529
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%'><a
        name=SoCPostSchoolExpensesSpRFundsfromchildac><b>8.12D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SPLIT
        RESPONSIBILITY AFTER FUNDS FROM ANY 529 ACCOUNTS HELD ON BEHALF OF A CHILD OR
        CHILD(REN), COVERDELL ACCOUNTS OR OTHER FUNDS EAR-MARKED TO PAY FOR A CHILD'S
        POST-HIGH SCHOOL EDUCATION EXPENSES</u></a>.&nbsp; After funds from any 529 accounts
        held on behalf of a Child or Child(ren), Coverdell accounts or other funds
        ear-marked to pay for a Child's post-high school education expenses are
        expended, then Parent A shall cover <span style='background:yellow'>" . $this->responses["split529-1"] . "%</span> and Parent B shall cover <span style='background:yellow'>" . $this->responses["split529-2"] . "%</span> of the
        Child(ren)'s remaining post-high school education expenses.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_12E() // cap on payment
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCPostSchoolExpensesCap>8.12E</a></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>CAP ON PAYMENT BY EACH
        PARENT PER ACADEMIC SCHOOL YEAR</u>.&nbsp; The Child(ren)'s post-high school
        education expenses shall be paid such that Parent A shall cover <span style='background:yellow'>" . $this->responses["postCap-1"] . "%</span> up to a
        cap of <span style='background:yellow'>$" . $this->responses["postCapA"] . "</span> amount per academic school year and Parent B shall cover <span style='background:yellow'>" . $this->responses["postCap-2"] . "%</span> up
        to a cap of <span style='background:yellow'>$" . $this->responses["postCapB"] . "</span> amount per academic school year. </p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_12F() // definition
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%'><a
        name=SoCPostSchoolExpensesDef><b>8.12F</b> <u>DEFINITION OF POST-HIGH SCHOOL
        EDUCATION EXPENSES</u></a>.&nbsp; Private school expenses shall be defined to
        include all expenses related to a Child's attendance at any post-high school
        educational institution (including vocational and trade schools), without
        limitation, application fees/costs, tuition, books, uniforms, school lunches,
        and before and/or after school care expenses.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_12G() // mutual agreement
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCPostSchoolExpensesMutualAgreement>8.12G&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>MUTUAL
        AGREEMENT OF PARENTS</u>.&nbsp; Either Parent may apply for a Child to attend a
        post-high school education institution (includes trade and vocational schools),
        but in order for the other Parent to be financially responsible, both Parents
        must approve the enrollment of any Child or Adult Child in a post-high school
        educational institution.<b>&nbsp; </b></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_12H() // reserve
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCPostSchoolExpensesReserve>8.12H&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></b><u>RESERVE</u>.&nbsp;
        Parents shall reserve the issue of post-high school educational school
        expenses.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // header for claiming the child(ren) as a dependent for tax purposes 
    function gen_child_support_8_13()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=SoCDependents><b>8.13&nbsp; </b><u>SUPPORT OF THE CHILD(REN): CLAIMING THE
        CHILD(REN) AS A DEPENDENT FOR TAX PURPOSES</u></a>.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_13A() // sole    
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%'><a
        name=SoCDependentsSA><b>8.13A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SOLE AUTHORITY TO CLAIM THE
        CHILD(REN</u></a><u>)</u>.  <span style='background:yellow'>" . $this->responses["parentAB_taxSole"] . "</span> shall be entitled to claim any Child(ren)
        as a dependent for tax purposes every year.&nbsp; </p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_13B() // split     
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%'><a
        name=SoCDependentsSpA><b>8.13B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SPLIT AUTHORITY TO CLAIM THE
        CHILD(REN</u></a><u>)</u>. Parent A shall be entitled to claim <span style='background:yellow'>" . $this->responses["partyATax"] . "</span> (Child's
        Initials) as a dependent for tax purposes every year.&nbsp; Parent B shall be
        entitled to claim <span style='background:yellow'>" . $this->responses["partyBTax"] . "</span> (Child's Initials) as a dependent for tax purposes every
        year.&nbsp; </p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_13C() // split then alternate
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%'><a
        name=SoCDependentsSpAthenAlternate><b>8.13C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>SPLIT AUTHORITY TO
        CLAIM THE CHILD(REN) THEN ALTERNATE</u></a>. Parent A shall be entitled to
        claim <span style='background:yellow'>" . $this->responses["partyATaxAlt"] . "</span>(Child's Initials) as a dependent for tax purposes every year.&nbsp;
        Parent B shall be entitled to claim <span style='background:yellow'>" . $this->responses["partyBTaxAlt"] . "</span>(Child's Initials) as a dependent for
        tax purposes every year. Once the older Child is no longer eligible to be
        claimed for tax purposes, then the Parents shall alternate claiming the younger
        Child.&nbsp;&nbsp; </p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_13D() // alternate authority
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%'><a
        name=SoCDependentsAlternate><b>8.13D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>ALTERNATE AUTHORITY TO
        CLAIM THE CHILD(REN</u></a><u>)</u>. <span style='background:yellow'>Parent A</span> shall be entitled to claim the
        Child(ren) as dependent(s) for tax purposes in even years.&nbsp; <span style='background:yellow'>Parent B</span> shall be
        entitled to claim the Child(ren) as dependent(s) for tax purposes in odd
        years.&nbsp; </p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // header for protocols for reimbursement -> radio buttons
    function gen_child_support_8_14()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'><a
        name=SoCProtocolsforReimbursment><b>8.14&nbsp; </b><u>SUPPORT OF THE CHILD(REN):
        PROTOCOLS FOR REIMBURSEMENT OF CHILD-RELATED EXPENSES</u></a>.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_14A() // timeframe
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCProtocolsforReimbursmentTimeframe><b>8.14A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>TIMEFRAME FOR
        REIMBURSEMENT OF CHILD-RELATED EXPENSES</u></a>.&nbsp; Upon a request in writing
        (text or email is ok) from a Parent for reimbursement, the other Parent shall
        reimburse the requesting Parent within <span style='background:yellow'>" . $this->responses["timeVal"] . "</span> days.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_14B() // monthly
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCProtocolsforReimbursmentMonthly><b>8.14B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>MONTHLY
        CALCULATION OF CHILD-RELATED EXPENSES AND REIMBURSEMENT</u></a>.&nbsp; Parents shall
        calculate child-related expenses and reimburse each other on a monthly basis.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_14C() // quarterly
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%'><a
        name=SoCProtocolsforReimbursmentQuarterly><b>8.14C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>QUARTERLY
        CALCULATION OF CHILD-RELATED EXPENSES AND REIMBURSEMENT</u>.</a>&nbsp; Parents shall
        calculate child-related expenses and reimburse each other on a quarterly basis.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    function gen_child_support_8_14D() // annual
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%'><a
        name=SoCProtocolsforReimbursmentAnnual><b>8.14D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>ANNUAL
        CALCULATION OF CHILD-RELATED EXPENSES AND REIMBURSEMENT</u>.&nbsp; </a>Parents shall
        calculate child-related expenses and reimburse each other on an annual basis.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    // protocols for reimbursement -> optional 
    function gen_child_support_8_14E() // documentation required
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:.5in;line-height:150%'><a
        name=SoCProtocolsforReimbursmentDocumentation><b>8.14E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><u>DOCUMENTATION
        REQUIRED FOR REIMBURSEMENT OF CHILD-RELATED EXPENSES</u></a>.&nbsp; A requesting
        Parent shall include written documentation proving the child-related expense in
        order to receive reimbursement from the other Parent.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    // protocols for reimbursement -> reimbursement method      
    function gen_child_support_8_14F() // reimbursement method
    {
        $content = $this->responses["reimburseMethod"]; // if user doesn't enter anything, show a blank line instead of displaying nothing
        if (empty($content)) {
            $content = "________";
        }
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:0in;text-align:justify;text-indent:0in;line-height:150%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
        name=SoCProtocolsforReimbursmentMethod><b>8.14F </b><u>REIMBURSEMENT METHOD</u></a>.
        Parents shall use the following method to reimburse each other for
        child-related expenses: Check, Bank Account Transfer, Venmo, Our Family Wizard
        or other mutually agreed upon parenting expense tool or application, or
        <span style='background:yellow'>$content</span>.<b>&nbsp;&nbsp;&nbsp; </b></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }   // end of child support

    //Other section
    function gen_other_9_00()
    {
        $header = "<p class=MsoNormal align=center style='margin-top:0in;margin-right:1.8pt;
        margin-bottom:.05pt;margin-left:0in;text-align:center;text-indent:0in;
        line-height:150%'><u>OTHER ISSUES:</u></p>
        
        <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesCoParentingCounseling><b>9.00</b>&nbsp; <u>OTHER ISSUES: CO-PARENT
        COUNSELING</u></a>.&nbsp; Parents agree to engage <span style='background:yellow'>" . $this->responses["therapistInput9.00"] . "</span>(name), or
        other mutually selected licensed mental health professional, as a Co-Parent
        Counselor to assist them in collaboratively parenting the Child(ren).&nbsp; Both
        Parents shall continue in Co-Parent Counseling until clinically discharged or
        upon the mutual agreement of both Parents.</p>";
        echo $header;
        $this->fileContentString .= $header;
    }

    function gen_other_9_01()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesChildFocusedTherapist><b>9.01&nbsp; </b><u>OTHER ISSUES:
        CHILD-FOCUSED THERAPIST</u></a>.&nbsp; Parents agree to
        engage <span style='background:yellow'>" . $this->responses["therapistInput9.01"] . "</span>(name), or other mutually selected licensed mental
        health professional, as a Child-Focused Therapist for Child(ren).&nbsp; Both parents
        shall have access to the child therapist and shall participate in therapy and/or
        engage with the Child-Focused Therapist at the therapist's discretion.&nbsp; Parents
        shall alternate taking the Child(ren) to therapy.&nbsp; Parents agree that the
        Child(ren) shall continue in therapy as needed and upon the schedule
        recommended by the therapist with input from the Child(ren) until clinically
        discharged.&nbsp; If mutually agreed, parent may jointly select a new therapist for
        Child(ren).&nbsp; Unless they have sole legal custody of the Child(ren), neither
        Parent may unilaterally terminate child therapy without the other Parent's
        consent.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    function gen_other_9_02() 
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesSocialMediaBetweenParents><b>9.02&nbsp; </b><u>OTHER ISSUES: SOCIAL
        MEDIA BETWEEN PARENTS</u></a>.&nbsp; Neither Parent shall post any pictures of the
        other Parent on social media nor make any derogatory comment about the other
        Parent on social media.&nbsp; </p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }
    
    function gen_other_9_03()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesSocialMediaForChild><b>9.03</b>&nbsp; <u>OTHER ISSUES: SOCIAL MEDIA
        FOR CHILD(REN</u></a><u>)</u>.&nbsp; Parents agree that none of their Child(ren)
        shall have access to any social media platform until they reach thirteen (13)
        years of age, and thereafter both Parents shall monitor any Child's social
        media usage to ensure that it is safe and does not cause embarrassment to
        either Parent or the Child. </p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    function gen_other_9_04()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesJointTeacherMeeting><b>9.04&nbsp; </b><u>OTHER ISSUES: JOINT
        PARENT-TEACHER MEETINGS</u></a>.<span style='color:#333333'>&nbsp; Parents agree
        that it is in their Child(ren)'s best interests that they both attend
        parent-teacher meetings together.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    function gen_other_9_05()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesSeperateTeacherMeeting><b>9.05&nbsp; </b><u>OTHER ISSUES: SEPARATE
        PARENT-TEACHER MEETINGS</u></a>.<span style='color:#333333'>&nbsp; Parents agree </span>that
        they<span style='color:#333333'> will each arrange our own separate
        parent-teacher meetings.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    function gen_other_9_06()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesOneParentTeacherMeeting><b>9.</b></a><b><span style='color:
        #333333'>06</span></b><span style='color:#333333'>&nbsp; </span><u>OTHER ISSUES: ONE
        PARENT TO ATTEND PARENT-TEACHER MEETINGS</u>.&nbsp; <span style='color:#333333'>Parent
        A/B will attend all parent-teacher meetings and will advise <span style='background:yellow'>" . $this->responses["9.06"] . "</span>/A of the
        Child(ren)'s progress.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    function gen_other_9_07()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesReportCard><b>9.</b></a><b><span style='color:#333333'>07</span></b><span
        style='color:#333333'>&nbsp; <u>OTHER ISSUES: REPORT CARDS FOR THE CHILD(REN</u></span><u><span
        style='color:#333333'>)</span></u><span style='color:#333333'>.&nbsp; Both Parents
        will be provided with separate report cards for the Child(ren). Parents shall
        notify the school authorities to provide separate report cards.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    } 
    
    function gen_other_9_08()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesJointAttendance><b>9.</b></a><b><span style='color:#333333'>08</span></b><span
        style='color:#333333'>&nbsp; <u>OTHER ISSUES: JOINT ATTENDANCE AT SCHOOL AND
        EXTRACURRICULAR EVENTS</u></span><span style='color:#333333'>.&nbsp; Both Parents
        may attend school events and extra-curricular activities.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    function gen_other_9_09()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesOneParentExtracurricular></a><a name='_heading=h.30j0zll'></a><b>9.</b><b><span
        style='color:#333333'>09</span></b><span style='color:#333333'>&nbsp; <u>OTHER
        ISSUES: CUSTODIAL PARENT TO ATTEND SCHOOL AND EXTRACURRICULAR EVENTS</u>.&nbsp; </span><span
        style='color:#333333'>The Parent with whom the Child(ren) is/are residing at
        the time of the school event and extracurricular activity will be the sole
        Parent to attend these events.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    function gen_other_9_10()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesAlternateAttendance><b>9.10&nbsp; </b></a><u><span style='color:
        #333333'>OTHER ISSUES: ALTERNATE ATTENDANCE AT SCHOOL AND EXTRACURRICULAR
        EVENTS</span></u><span style='color:#333333'>.&nbsp; Parent shall alternate
        attending the Child(ren)'s school events and extracurricular activities.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    function gen_other_9_11()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesDocuments><b>9.11&nbsp; </b><u>OTHER ISSUES: DOCUMENTS</u></a>.&nbsp; <span
        style='color:#333333'><span style='background:yellow'>" . $this->responses["parentABdoc_Other"] . "</span>/B will keep the original passport issued in the
        Child(ren)'s name, their social security card, birth certificate, and [insert
        any other relevant documents] at their home, and these documents will be made
        available to<span style='background:yellow'>" . $this->responses["parentABdoc_Other2"] . "</span>/A as needed. Both Parents shall have copies of all of the
        important documents.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    function gen_other_9_12()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesJointConsentPassport><b>9.12&nbsp; </b><u>OTHER ISSUES: JOINT
        AUTHORITY TO CONSENT FOR PASSPORT</u></a>.&nbsp; Parent A and Parent B must both consent for the purposes of a passport application for
        any Child.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    function gen_other_9_13()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesSoleConsentPassport><b>9.13&nbsp; </b><u>OTHER ISSUES: SOLE
        AUTHORITY TO CONSENT FOR PASSPORT</u></a>.&nbsp; <span style='color:#333333'>Parent
        <span style='background:yellow'>" . $this->responses["parentAB_Other3"] . "</span> can apply for the passport for a Child without the consent of <span style='background:yellow'>" . $this->responses["parentAB_Other4"] . "</span>/A.</span></p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    function gen_other_9_14()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesNewIntimatePartnerLD><b>9.14&nbsp; </b><u>OTHER ISSUES: NEW INTIMATE
        PARTNER PROTOCOLS (LESS DETAILED)</u>.&nbsp; </a>Both parents agree that they shall
        not introduce any of their minor children to a new significant other or
        intimate partner until (a) they have been in an intimate dating relationship
        for six (6) months or longer and (b) the other parent has been given an
        opportunity to meet that significant other/intimate partner first.&nbsp; Parents
        shall be guided by the children's best interests and conflict minimization in
        determining a reasonable compromise on any issues arising from this provision.
        If parents cannot agree, they shall consult with and engage mutually acceptable
        therapist or other mental health professional informed and guided by their
        recommendations. Unless otherwise agreed upon in writing, neither parent shall
        be allowed to travel with the children and their significant other/intimate
        partner unless or until that parent has, in fact, married their new partner.&nbsp;
        This plan is subject to further review based on the best interests of the
        children and their observed reactions and behaviors throughout any introduction
        process.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
    }

    function gen_other_9_15()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesNewIntimatePartnerMD><b>9.15&nbsp; </b><u>OTHER ISSUES: NEW INTIMATE
        PARTNER PROTOCOLS (MORE DETAILED)</u></a>.&nbsp; Given that both parents will likely
        engage in new intimate partner relationships in the future, it is their intent
        that the children's well-being, comfort and stability remain the highest
        priority.&nbsp; Both parents agree to be respectful of one another and guided by the
        following concepts and protocols: </p>
        
        <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
        margin-left:71.5pt;text-align:justify;text-indent:-.25in;line-height:150%;
        border:none'><span style='font-family:'Noto Sans Symbols''>&#9679;<span
        style='font:7.0pt 'Times New Roman''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Take
        an honest look at the relationship.&nbsp; If you are just having fun enjoying a new
        person's company but know there is no long-term potential, it is probably best
        not to introduce the children to a new intimate partner.</p>
        
        <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
        margin-left:71.5pt;text-align:justify;text-indent:-.25in;line-height:150%;
        border:none'><span style='font-family:'Noto Sans Symbols''>&#9679;<span
        style='font:7.0pt 'Times New Roman''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Your
        relationship shall be well-established and stable prior to initiating these new
        intimate partner protocols.&nbsp; The Parents shall discuss the appropriate timing
        and circumstances in which the children should formally meet a new intimate
        partner and be told that the nature of the relationship is romantic.&nbsp; It is
        understood that the children may come into contact with the new intimate
        partner in advance, but the actual introduction of this new person as a
        romantic relationship shall not occur before the Parents are able to discuss
        the circumstances in co-parent counseling.&nbsp; </p>
        
        <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
        margin-left:71.5pt;text-align:justify;text-indent:-.25in;line-height:150%;
        border:none'><span style='font-family:'Noto Sans Symbols''>&#9679;<span
        style='font:7.0pt 'Times New Roman''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>The
        other parent shall be notified in advance of the children and given the
        opportunity to meet the new intimate partner prior to the children being
        introduced to the new intimate partner and told the nature of the relationship
        is romantic.&nbsp; </p>
        
        <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
        margin-left:71.5pt;text-align:justify;text-indent:-.25in;line-height:150%;
        border:none'><span style='font-family:'Noto Sans Symbols''>&#9679;<span
        style='font:7.0pt 'Times New Roman''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Parents
        shall use best practices and judgment when engaging in appropriate public
        displays of affection with their new intimate partner in front of any of the
        children.&nbsp; Parents shall further check in with the children to gauge their
        comfort with the new intimate partner.&nbsp; This may be accomplished within a
        therapeutic process (e.g. check-ins by the co-parent counselor with the child
        therapist as discussed below). </p>
        
        <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:0in;
        margin-left:71.5pt;text-align:justify;text-indent:-.25in;line-height:150%;
        border:none'><span style='font-family:'Noto Sans Symbols''>&#9679;<span
        style='font:7.0pt 'Times New Roman''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>New
        intimate partners, and even step-parents, shall refrain from disciplining the
        children unless there is an agreement between both parents otherwise<b>.&nbsp; </b>The
        Parents shall discuss age-appropriate discipline options for the children.</p>
        
        <p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:71.5pt;text-align:justify;text-indent:-.25in;line-height:150%;
        border:none'><span style='font-family:'Noto Sans Symbols''>&#9679;<span
        style='font:7.0pt 'Times New Roman''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>In
        the event there are any problems related to the new intimate partner or these
        protocols, the Parents shall engage a mental health professional such as a
        co-parent counselor or family therapist who may also confer with the child
        therapist to ensure the children's well-being, comfort and stability remain the
        highest priority.&nbsp; </p>";
        echo $snippet;
        $this->fileContentString .= $snippet; 
    }

    function gen_other_9_16()
    {
        $snippet = "<p class=MsoNormal style='margin-top:0in;margin-right:1.8pt;margin-bottom:.05pt;
        margin-left:.5pt;text-align:justify;line-height:150%'><a
        name=OtherIssuesAlternativeDisputeResolution><b>9.16&nbsp; </b><u>OTHER ISSUES:
        ALTERNATIVE DISPUTE RESOLUTION</u></a>.&nbsp; If there is any disagreement related
        to this Agreement or any Child-related issues, both Parents agree that they
        shall engage a mutually selected mediator to help them resolve the issue(s)
        prior to filing a motion for relief with the Family Court.</p>";
        echo $snippet;
        $this->fileContentString .= $snippet; 
    }
    

    function genPart4()
    {
        echo "Generating Part4 <br/>";
    }
    function genPart5()
    {
        echo "Generating Part5 <br/>";
    }
    function genPart6()
    {
        echo "Generating Part6 <br/>";
    }
    function genPart7()
    {
        echo "Generating Part7 <br/>";
    }
    function packageDocument()
    {
        // Take the template.zip copy it and rename it in the downloads folder
        // Take the string and write it to document.xml
        fwrite($this->fileOutput, $this->fileContentString);
        // Zip the folder and rename it to .docx
        // Serve the .docx
    }
}
