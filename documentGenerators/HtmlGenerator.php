<?php
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
         href=\"#PartiesInformationon" .  $this->responses["partyAFirst"]." ".$this->responses["partyALast"] . "\"><span lang=FR>3.00&nbsp;&nbsp; Parties: Information
         on " .  $this->responses["partyAFirst"]." ".$this->responses["partyALast"] . "</span></a></p>

         <p class=MsoNormal style='margin:0in;line-height:normal'><a
         href=\"#PartiesInformationonParentB\"><span lang=FR>3.01&nbsp;&nbsp; Parties: Information
         on " .  $this->responses["partyBFirst"]." ".$this->responses["partyBLast"] . "</span></a></p>

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
         " .  $this->responses["partyAFirst"]." ".$this->responses["partyALast"] . " or " .  $this->responses["partyBFirst"]." ".$this->responses["partyBLast"] . "</a></p>

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
         border:none'>Name of " .  $this->responses["partyAFirst"]." ".$this->responses["partyALast"] . "</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>Address ".$this->responses["partyAResidence"]."</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>Telephone ".$this->responses["partyACell"]."</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>E-Mail ".$this->responses["partyAEmail"]."</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>Name of " .  $this->responses["partyBFirst"]." ".$this->responses["partyBLast"] . "</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>Address ".$this->responses["partyBResidence"]."</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>Telephone ".$this->responses["partyBCell"]."</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>E-Mail ".$this->responses["partyBEmail"]."</p>

         <p class=MsoNormal style='margin:0in;text-indent:0in;line-height:normal;
         border:none'>&nbsp;</p>

         <p class=MsoNormal align=center style='margin:0in;text-align:center;text-indent:
         0in;line-height:normal;border:none'>IN THE FAMILY COURT OF THE  <?php echo $varName; ?>
         CIRCUIT</p>

         <p class=MsoNormal align=center style='margin:0in;text-align:center;text-indent:
         0in;line-height:normal;border:none'>&nbsp;</p>

         <p class=MsoNormal align=center style='margin:0in;text-align:center;text-indent:
         0in;line-height:normal;border:none'>STATE OF  <?php echo $varName; ?></p>

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
           border:none'>" .  $this->responses["partyAFirst"]." ".$this->responses["partyALast"] . ",</p>
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
           border:none'>" .  $this->responses["partyBFirst"]." ".$this->responses["partyBLast"] . ",</p>
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
           border:none'>Case No. (Family Court)</p>
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
         AGREEMENT is made and <span style='background:white'>entered this  <?php echo $varName; ?> (day) day
         of  <?php echo $varName; ?> (month),  <?php echo $varName; ?> (year)</span>, by and between " .  $this->responses["partyAFirst"]." ".$this->responses["partyALast"] . " and " .  $this->responses["partyBFirst"]." ".$this->responses["partyBLast"] . "
         (collectively hereinafter referred to as �Parents�) and applies to the
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
          <?php echo $varName; ?> Circuit of the State of  <?php echo $varName; ?> hereinafter referred to as
         the �Family Court�;</p>

         <p class=MsoNormal style='margin-top:0in;margin-right:2.3pt;margin-bottom:0in;
         margin-left:0in;text-align:justify;text-indent:0in;line-height:150%;border:
         none'><a name=IntroductionParentsDoNotSeekFamilyCourt><b>1.03</b> </a>WHEREAS,
         Parents intend this to be a binding agreement between them to govern the
         co-parenting of their Child(ren) but do not plan to seek approval of their
         Agreement from the Family Court of their jurisdiction.</p>";

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
	function genPart2()
	{
         echo "Generating Part2 <br/>";
	}
    function genPart3()
	{
         echo "Generating Part3 <br/>";
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

    //Communication method

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
        pertaining to their child(ren).&nbsp; Conferences shall be on the first  <span style='background:yellow'>" . $this->responses["monthly"] . "</span>&nbsp;
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
        annually by no later than <span sytle='background:yellow'>" . $this->responses["semifromdate"] . "</span> and <span sytle='background:yellow'>" . $this->responses["semitodate"] . "</span>
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
        regular parenting time schedule, Parent A may call the child between <span syle='background:yellow'>" . $this->responses["PAfromtime"] . "</span> and <span syle='background:yellow'>" . $this->responses["PAtotime"] . "</span> when they are with Parent B 
        and Parent B may call the
        child between <span syle='background:yellow'>" . $this->responses["PBfromtime"] . "</span> and <span syle='background:yellow'>" . $this->responses["PBtotime"] . "</span> when they are with ParentA.
        Calls will normally be no more than 10 minutes.</span></p>";

        echo $snippet;
        $this -> fileContentString .= $snippet;
    }

    function gen_communication_7_08_comm()
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

    function gen_communication_7_09()
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

    function gen_communication_7_10()
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

	function packageDocument()
	{
	// Take the template.zip copy it and rename it in the downloads folder
	// Take the string and write it to document.xml
	 fwrite($this->fileOutput,$this->fileContentString);
	// Zip the folder and rename it to .docx
	// Serve the .docx
	}
}

