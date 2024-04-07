<?php
require_once("DocumentGenerator.php");
class wordDocGenerator extends documentGenerator
{
	function genHeader()
	{
		echo "Generating Header " . $this->fileName . " <br/>";
		$this->fileContentString .= "test test test";
	}
    function gen_guiding_principals_statement(){}
	function genFooter()
	{
		echo "Generating Footer " . $this->fileName . " <br/>";
		$this->fileContentString .= "test test test";
	}

    // Section 2: Children
    function gen_children_4_00() {}


    // legal custody section 3
	function gen_legal_custody_5_00()
	{
		$definition = "<w:p w14:paraId='3CB4A065' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='13' w:name='_heading=h.gjdgxs' w:colFirst='0' w:colLast='0' />
		<w:bookmarkStart w:id='14' w:name='LegalCustodyDefinition' />
		<w:bookmarkEnd w:id='13' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>5.00</w:t>
		</w:r>
		<w:r>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: DEFINITION</w:t>
		</w:r>
		<w:bookmarkEnd w:id='14' />
		<w:r>
			<w:t xml:space='preserve'>. Legal custody is the authority to make major decisions involving the Child(ren).  Such major decisions would include, among others, the decision to allow the Child(ren) to enter the armed forces, the decision to marry before the legal age, the decision to file a lawsuit, or accept a settlement of claims involving the Child(ren), the decision to allow the Child(ren) to use birth control, including pregnancy termination, the decision to allow the children to obtain a driver’s license or passport, the decision to allow the Child(ren) to obtain substantial employment, the decision to authorize non-emergency medical or other treatment for the Child(ren), the decision to involve the Child(ren) in counseling, religious decisions affecting the Child(ren), major decisions involving the Child(ren)’s education, such as choice of school, change in school, advancement or retention, choice of curriculum, participation in extracurricular activities, and special education needs like tutoring, decisions as to the management of any substantial monies received by the Child(ren), decisions regarding major expenditures by or for the Child(ren), decisions involving serious discipline problems of the Child(ren), decisions involving the receipt, management and sale of real or personal property while a child is under </w:t>
		</w:r>
		<w:r>
			<w:lastRenderedPageBreak />
			<w:t>eighteen (18) years of age, and decisions involving a child’s travel to any distance beyond the jurisdiction of the United States for any period of time. </w:t>
		</w:r>
	</w:p>";
        echo $definition;
        $this->fileContentString .= $definition;
	}
	function gen_legal_custody_5_01()
	{
		$snippet = "<w:p w14:paraId='787A26F1' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='15' w:name='LegalCustodyJoint' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>5.01</w:t>
		</w:r>
		<w:r>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: JOINT TO BOTH PARENTS</w:t>
		</w:r>
		<w:bookmarkEnd w:id='15' />
		<w:r>
			<w:t xml:space='preserve'>. Parents shall share joint legal custody of the Child(ren) and shall make decisions together. </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333' />
			</w:rPr>
			<w:t>Parents agree they shall make significant decisions together and encourage input from Child(ren). If Parents cannot come to an agreement about a major decision, they shall use the dispute resolution process set out in this document.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_legal_custody_5_03A()
	{	
		$snippet = "<w:p w14:paraId='6678DA88' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='17' w:name='LegalCustodyParentsConsultOneAuthority' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>5.03</w:t>
		</w:r>
		<w:r>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: PARENTS MUST CONSULT BUT ONE PARENT HAS TIE-BREAKING AUTHORITY</w:t>
		</w:r>
		<w:bookmarkEnd w:id='17' />
		<w:r>
			<w:t>. Parents shall share joint legal custody of the Child(ren), provided however, that if Parents cannot mutually agree on a legal custody decision for the Child(ren) after consulting with the other Parent and the Child(ren), then <span style='background:yellow'>Parent A</span> shall have tie-breaking authority to make the legal custody decision in the event of an impasse.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_legal_custody_5_03B()
	{
		$snippet = "<w:p w14:paraId='6678DA88' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='17' w:name='LegalCustodyParentsConsultOneAuthority' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>5.03</w:t>
		</w:r>
		<w:r>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: PARENTS MUST CONSULT BUT ONE PARENT HAS TIE-BREAKING AUTHORITY</w:t>
		</w:r>
		<w:bookmarkEnd w:id='17' />
		<w:r>
			<w:t>. Parents shall share joint legal custody of the Child(ren), provided however, that if Parents cannot mutually agree on a legal custody decision for the Child(ren) after consulting with the other Parent and the Child(ren), then <span style='background:yellow'>Parent B</span> shall have tie-breaking authority to make the legal custody decision in the event of an impasse.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_legal_custody_5_05A()
	{   // 5.02  
		$snippet = "<w:p w14:paraId='0134ED1B' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='16' w:name='LegalCustodySole' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>5.02</w:t>
		</w:r>
		<w:r>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: SOLE TO ONE PARENT</w:t>
		</w:r>
		<w:bookmarkEnd w:id='16' />
		<w:r>
			<w:t>.<span style='background:yellow'>Parent A</span> shall have sole legal custody of the Child(ren).</w:t>
		</w:r>
	</w:p>
	
<w:p w14:paraId='3A1BB760' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
	<w:pPr>
		<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
		<w:ind w:left='0' w:right='36' w:firstLine='0' />
		<w:jc w:val='both' />
	</w:pPr>
	<w:bookmarkStart w:id='19' w:name='LegalCustodyAccesstoInformation' />
	<w:r>
		<w:rPr>
			<w:b />
		</w:rPr>
		<w:t>5.05</w:t>
	</w:r>
	<w:r>
		<w:tab />
	</w:r>
	<w:r>
		<w:rPr>
			<w:u w:val='single' />
		</w:rPr>
		<w:t>LEGAL CUSTODY: ACCESS TO INFORMATION FOR PARENT WITHOUT LEGAL CUSTODY</w:t>
	</w:r>
	<w:bookmarkEnd w:id='19' />
	<w:r>
		<w:t xml:space='preserve'>. Although <span style='background:yellow'>Parent A </span> is awarded sole legal custody, <span style='background:yellow'>Parent B </span> shall have free and unrestricted access to all information pertaining to the Child(ren). The Parent who does not have legal custody may independently contact any provider serving the Child(ren) including education, health-related, extracurricular, etc. and access </w:t>
	</w:r>
	<w:proofErr w:type='gramStart' />
	<w:r>
		<w:t>any and all</w:t>
	</w:r>
	<w:proofErr w:type='gramEnd' />
	<w:r>
		<w:t xml:space='preserve'> records or information. The Parent </w:t>
	</w:r>
	<w:r>
		<w:lastRenderedPageBreak />
		<w:t>with legal custody shall have an affirmative duty to inform the other Parent of any new providers working with the Child(ren).</w:t>
	</w:r>
</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_legal_custody_5_05B()
	{   // 5.02 
		$snippet = "<w:p w14:paraId='0134ED1B' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='16' w:name='LegalCustodySole' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>5.02</w:t>
		</w:r>
		<w:r>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: SOLE TO ONE PARENT</w:t>
		</w:r>
		<w:bookmarkEnd w:id='16' />
		<w:r>
			<w:t>.<span style='background:yellow'>Parent B</span> shall have sole legal custody of the Child(ren).</w:t>
		</w:r>
	</w:p>
	
<w:p w14:paraId='3A1BB760' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
	<w:pPr>
		<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
		<w:ind w:left='0' w:right='36' w:firstLine='0' />
		<w:jc w:val='both' />
	</w:pPr>
	<w:bookmarkStart w:id='19' w:name='LegalCustodyAccesstoInformation' />
	<w:r>
		<w:rPr>
			<w:b />
		</w:rPr>
		<w:t>5.05</w:t>
	</w:r>
	<w:r>
		<w:tab />
	</w:r>
	<w:r>
		<w:rPr>
			<w:u w:val='single' />
		</w:rPr>
		<w:t>LEGAL CUSTODY: ACCESS TO INFORMATION FOR PARENT WITHOUT LEGAL CUSTODY</w:t>
	</w:r>
	<w:bookmarkEnd w:id='19' />
	<w:r>
		<w:t xml:space='preserve'>. Although <span style='background:yellow'>Parent B </span> is awarded sole legal custody, <span style='background:yellow'>Parent A </span> shall have free and unrestricted access to all information pertaining to the Child(ren). The Parent who does not have legal custody may independently contact any provider serving the Child(ren) including education, health-related, extracurricular, etc. and access </w:t>
	</w:r>
	<w:proofErr w:type='gramStart' />
	<w:r>
		<w:t>any and all</w:t>
	</w:r>
	<w:proofErr w:type='gramEnd' />
	<w:r>
		<w:t xml:space='preserve'> records or information. The Parent </w:t>
	</w:r>
	<w:r>
		<w:lastRenderedPageBreak />
		<w:t>with legal custody shall have an affirmative duty to inform the other Parent of any new providers working with the Child(ren).</w:t>
	</w:r>
</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_legal_custody_5_04()
	{
		$snippet = "<w:p w14:paraId='45647650' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='18' w:name='LegalCustodyParentsConsultDivofAuthority' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>5.04</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: PARENTS MUST CONSULT BUT THERE IS A DIVISION OF AUTHORITY</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'>. </w:t>
		</w:r>
		<w:bookmarkEnd w:id='18' />
		<w:r>
			<w:t xml:space='preserve'>Parents shall share joint legal custody of the Child(ren), provided however, that if Parents cannot mutually agree on a legal custody decision for the Child(ren), then <span style='background:yellow'>" . $this->responses["parentABW"] . "</span> shall have tie-breaking authority to make </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333' />
			</w:rPr>
			<w:t>major decisions about the Child(ren)'s education and extracurricular activities, after consulting with <span style='background:yellow'>" . $this->responses["parentABX"] . "</span> and the Child(ren) and <span style='background:yellow'>" . $this->responses["parentABY"] . "</span> 
			shall have tie-breaking authority to make major decisions about the Child(ren)'s health care, language, and spirituality, after consulting with <span style='background:yellow'>" . $this->responses["parentABZ"] . "</span> and the child.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_legal_custody_5_06()
	{
		$snippet = "<w:p w14:paraId='5456AF52' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='20' w:name='LegalCustodyEmergencyContact' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>5.06</w:t>
		</w:r>
		<w:r>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: EMERGENCY CONTACTS FOR THE CHILD(REN</w:t>
		</w:r>
		<w:bookmarkEnd w:id='20' />
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>)</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'>. Both Parents shall be listed as the initial emergency contacts for the Child(ren) for any school, extracurricular </w:t>
		</w:r>
		<w:proofErr w:type='gramStart' />
		<w:r>
			<w:t>activity</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd' />
		<w:r>
			<w:t xml:space='preserve'> or other event where an emergency contact is requested.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_legal_custody_5_07()
	{
		$snippet = "<w:p w14:paraId='1C90C7A4' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='21' w:name='LegalCustodyExpertAdvice' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>5.07</w:t>
		</w:r>
		<w:r>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: EXPERT ADVICE WHEN MAKING LEGAL CUSTODY DECISIONS</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'>. </w:t>
		</w:r>
		<w:bookmarkEnd w:id='21' />
		<w:r>
			<w:t xml:space='preserve'> Parents shall seek the advice and be guided by subject matter experts when making legal custody decisions on behalf of the Child(ren). </w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_legal_custody_5_08()
	{
		$snippet = "<w:p w14:paraId='794792CD' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:b />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='22' w:name='LegalCustodyDaytoDay' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>5.08</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: DAY-TO-DAY DECISIONS</w:t>
		</w:r>
		<w:bookmarkEnd w:id='22' />
		<w:r>
			<w:t xml:space='preserve'>. </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333' />
			</w:rPr>
			<w:t>During the period when the Child(ren) is or are living with or in the care of a Parent, that Parent can make day-to-day decisions about our child, for example about, doing homework, meals, visiting with their friends, use of computer, etc.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_legal_custody_5_09()
	{
		$snippet = "<w:p w14:paraId='49D7B377' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:color w:val='333333' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='23' w:name='LegalCustodyEmergencyDecisions' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>5.09</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: EMERGENCY DECISIONS</w:t>
		</w:r>
		<w:bookmarkEnd w:id='23' />
		<w:r>
			<w:t xml:space='preserve'>. </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333' />
			</w:rPr>
			<w:t>In a health emergency for a Child, the Parent with care of the Child(ren) at that time will make the treatment decision, on the advice of medical personnel. If a Parent makes an emergency health decision for a Child, the Parent who has made the decision must immediately contact the other Parent.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_legal_custody_5_10()
	{
		$snippet = "<w:p w14:paraId='730CB2C5' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:color w:val='333333' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='24' w:name='LegalCustodyHealthEmergencyDeathofParent' />
		<w:r>
			<w:rPr>
				<w:b />
				<w:color w:val='333333' />
			</w:rPr>
			<w:t>5.10</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333' />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: HEALTH EMERGENCY OR DEATH OF OTHER PARENT</w:t>
		</w:r>
		<w:r>
			<w:t>.</w:t>
		</w:r>
		<w:bookmarkEnd w:id='24' />
		<w:r>
			<w:t xml:space='preserve'> </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333' />
			</w:rPr>
			<w:t>In the event of a Parent’s medical emergency, the other Parent shall assume the major decision-making responsibilities for the Child(ren) until the situation becomes resolved. In the event of the death of one Parent, the other Parent shall care for the Child(ren), but the surviving Parent shall ensure that the Child(ren) has/have continued relations with the relatives of the deceased Parent.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_legal_custody_5_11()
	{
		$snippet = "<w:p w14:paraId='493327E7' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:color w:val='333333' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='25' w:name='LegalCustodyParallelParenting' />
		<w:r>
			<w:rPr>
				<w:b />
				<w:color w:val='333333' />
			</w:rPr>
			<w:t>5.11</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333' />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>LEGAL CUSTODY: PARALLEL PARENTING</w:t>
		</w:r>
		<w:bookmarkEnd w:id='25' />
		<w:r>
			<w:t xml:space='preserve'>. </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333' />
			</w:rPr>
			<w:t>Parents shall disengage from one another and make decisions independently when the Child(ren) is in their care.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	} //end of legal custody section 3

    //Section 4: Physical Custody and Timesharing
    function gen_physical_custody_timesharing_6_00() {}
    function gen_physical_custody_timesharing_6_01() {}
    function gen_physical_custody_timesharing_6_01A() {}
    function gen_physical_custody_timesharing_6_01B() {}
    function gen_physical_custody_timesharing_6_02() {}
    function gen_physical_custody_timesharing_6_02A(string $type) {}
    function gen_physical_custody_timesharing_6_02B(string $type) {}
    function gen_physical_custody_timesharing_6_02C(string $type) {}
    function gen_physical_custody_timesharing_6_02D(string $type) {}
    function gen_physical_custody_timesharing_6_02E(string $type) {}
    function gen_physical_custody_timesharing_6_03() {}
    function gen_physical_custody_timesharing_6_04() {}
    function gen_physical_custody_timesharing_6_05() {}
    function gen_physical_custody_timesharing_6_06() {}
    function gen_physical_custody_timesharing_6_07() {}
    function gen_physical_custody_timesharing_6_08() {}
    function gen_physical_custody_timesharing_6_09() {}
    function gen_physical_custody_timesharing_6_10() {}
    function gen_physical_custody_timesharing_6_11() {}
    function gen_physical_custody_timesharing_6_12() {}
    function gen_physical_custody_timesharing_6_13() {}
    function gen_physical_custody_timesharing_6_14() {

    } // End of section 4: Physical custody and Timesharing

	//Communication section
	function gen_communication_7() {}
	function gen_communication_7_01() {}
	function gen_communication_7_02() {}
	function gen_communication_7_03() {}
	function gen_communication_7_04() {}
	function gen_communication_7_05() {}
	function gen_communication_7_06() {}
	function gen_communication_7_06a() {}
	function gen_communication_7_07() {}
	function gen_communication_7_08() {}
	function gen_communication_7_09() {}
	function gen_communication_7_10() {}
	function gen_communication_7_11() {}

	// End of Communication


	// child support section 6
	function gen_child_support_8_00()
	{
		$snippet = "<w:p w14:paraId='039E6D0E' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:pBdr>
				<w:top w:val='nil' />
				<w:left w:val='nil' />
				<w:bottom w:val='nil' />
				<w:right w:val='nil' />
				<w:between w:val='nil' />
			</w:pBdr>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='0' w:firstLine='0' />
		</w:pPr>
		<w:bookmarkStart w:id='81' w:name='SoCMonthlyUnderLaw' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.00</w:t>
		</w:r>
		<w:r>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>SUPPORT OF THE CHILD(REN): MONTHLY CHILD SUPPORT AMOUNT UNDER THE LAW</w:t>
		</w:r>
		<w:r>
			<w:t>.</w:t>
		</w:r>
		<w:bookmarkEnd w:id='81' />
		<w:r>
			<w:t xml:space='preserve'> Each State has Child Support Guidelines used to calculate monthly child support. Each parent shall be bound by and follow the Uniform Interstate Family Support Act.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_01()
	{
		$snippet = "<w:p w14:paraId='6FCA6FAD' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:pBdr>
				<w:top w:val='nil' />
				<w:left w:val='nil' />
				<w:bottom w:val='nil' />
				<w:right w:val='nil' />
				<w:between w:val='nil' />
			</w:pBdr>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='0' w:firstLine='0' />
		</w:pPr>
		<w:bookmarkStart w:id='82' w:name='SoCChildSupportSameState' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.01</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>SUPPORT OF THE CHILD(REN): CHILD SUPPORT GUIDELINES AMOUNT WHEN PARENTS RESIDE IN THE SAME STATE</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'>. </w:t>
		</w:r>
		<w:bookmarkEnd w:id='82' />
		<w:r>
			<w:t xml:space='preserve'>Child support shall be paid by <span style='background:yellow'>" . $this->responses["parentAB1"] . "</span> to <span style='background:yellow'>" . $this->responses["parentAB2"] . "</span> and calculated pursuant to the State child support guidelines worksheet. </w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_03()
	{
		$snippet = "<w:p w14:paraId='464B7240' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='84' w:name='SoCChildSupportAgreedAlternative' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.03</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>SUPPORT OF THE CHILD(REN): MUTUALLY AGREED UPON CHILD SUPPORT AMOUNT ALTERNATIVE</w:t>
		</w:r>
		<w:bookmarkEnd w:id='84' />
		<w:r>
			<w:t xml:space='preserve'>. Child Support shall be paid by <span style='background:yellow'>" . $this->responses["parentAB3"] . "</span> to <span style='background:yellow'>" . $this->responses["parentAB4"] . "</span> by agreement of the Parents in the 
			amount of <span style='background:yellow'>$" . $this->responses["mutual-1"] . "/per Child</span> per month for a total monthly child support amount of <span style='background:yellow'>$" . $this->responses["mutual-2"] . "</span>. Both Parents understand that child support
			is modifiable going forward and at any time either Parent may request that child support be calculated pursuant to their State guidelines and ordered to be paid pursuant to </w:t>
		</w:r>
		<w:proofErr w:type='spellStart' />
		<w:r>
			<w:t>and</w:t>
		</w:r>
		<w:proofErr w:type='spellEnd' />
		<w:r>
			<w:t xml:space='preserve'> Order for Income Withholding (or similar order) via the State Child Support Enforcement Agency.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_04()
	{
		$snippet = "<w:p w14:paraId='576AE2A8' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:pBdr>
				<w:top w:val='nil' />
				<w:left w:val='nil' />
				<w:bottom w:val='nil' />
				<w:right w:val='nil' />
				<w:between w:val='nil' />
			</w:pBdr>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='0' w:firstLine='0' />
		</w:pPr>
		<w:bookmarkStart w:id='85' w:name='SoCChildSupportNoAgreement' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.04</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>SUPPORT OF THE CHILD(REN): NO AGREEMENT OF THE PARTIES RE MONTHLY CHILD SUPPORT AMOUNT AND/OR JURISDICTION</w:t>
		</w:r>
		<w:bookmarkEnd w:id='85' />
		<w:r>
			<w:t xml:space='preserve'>. Parents do not agree on the amount of Child Support to be paid and/or on which State should have jurisdiction to calculate child support under the Uniform Interstate Family Support Act. Parents agree to litigate the issue of child support through the Family Court and/or the State Child Support Enforcement Agency. </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t xml:space='preserve'>Note: In many states, physical </w:t>
		</w:r>
		<w:proofErr w:type='gramStart' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>custody</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t xml:space='preserve'> and timesharing with the Child(ren) impacts the calculation of child support. If the child support amount if going to be litigated through the Family Court or administratively through the State Child Support Enforcement Agency, Parents are hereby advised to seek independent legal counsel before making any agreements regarding physical custody and timesharing. </w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_05()
	{
		$snippet = "<w:p w14:paraId='3A8625F7' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='86' w:name='SoCChildSupportAccountAlternative' />
		<w:r>
			<w:rPr>
				<w:b />
				<w:highlight w:val='yellow' />
			</w:rPr>
			<w:t xml:space='preserve'>8.05 </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:highlight w:val='yellow' />
				<w:u w:val='single' />
			</w:rPr>
			<w:t>SUPPO</w:t>
		</w:r>
		<w:bookmarkEnd w:id='86' />
		<w:r>
			<w:rPr>
				<w:highlight w:val='yellow' />
				<w:u w:val='single' />
			</w:rPr>
			<w:t>RT OF THE CHILD(REN): CHILD SUPPORT ACCOUNT ALTERNATIVE</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:highlight w:val='yellow' />
			</w:rPr>
			<w:t xml:space='preserve'>. Parents agree </w:t>
		</w:r>
		<w:proofErr w:type='gramStart' />
		<w:r>
			<w:rPr>
				<w:highlight w:val='yellow' />
			</w:rPr>
			<w:t>that</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd' />
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_06()
	{
		$snippet = "<w:p w14:paraId='476B53E4' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='87' w:name='SocDirectPayment' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.06</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>SUPPORT OF THE CHILD(REN): DIRECT PAYMENT OF CHILD SUPPORT</w:t>
		</w:r>
		<w:r>
			<w:t>.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_07()
	{
		$snippet = "<w:p w14:paraId='7B7E1F87' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='88' w:name='SoCThroughStateAgency' />
		<w:bookmarkEnd w:id='87' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.07</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>SUPPORT OF THE CHILD(REN): PAYMENT OF CHILD SUPPORT THROUGH THE STATE CHILD SUPPORT ENFORCEMENT AGENCY</w:t>
		</w:r>
		<w:bookmarkEnd w:id='88' />
		<w:r>
			<w:t>.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_08()
	{
		$snippet = "<w:p w14:paraId='308C65BF' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='89' w:name='SoCHealthInsurance' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.08</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>SUPPORT OF THE CHILD(REN): HEALTH INSURANCE PREMIUM</w:t>
		</w:r>
		<w:bookmarkEnd w:id='89' />
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>S</w:t>
		</w:r>
		<w:r>
			<w:t>. <span style='background:yellow'>" . $this->responses["parentAB5"] . "</span> shall cover the Child(ren)’s health insurance premiums in the amount of <span style='background:yellow'>$" . $this->responses["insurancePremium"] . "</span> per month.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_09()
	{
		$snippet = "<w:p w14:paraId='152812DA' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='90' w:name='SoCUninsuredCoPays' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:lastRenderedPageBreak />
			<w:t>8.09</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>SUPPORT OF THE CHILD(REN): UNINSURED CO-PAYS FOR HEALTH-RELATED EXPENSES</w:t>
		</w:r>
		<w:bookmarkEnd w:id='90' />
		<w:r>
			<w:t>.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_09A()
	{
		$snippet = "<w:p w14:paraId='3D67ED18' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:tab />
		</w:r>
		<w:bookmarkStart w:id='91' w:name='SoCUninsuredCoPaysSR' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.09A</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>SOLE RESPONSIBILITY</w:t>
		</w:r>
		<w:bookmarkEnd w:id='91' />
		<w:r>
			<w:t>. <span style='background:yellow'>" . $this->responses["parentAB6"] . "</span> shall cover 100% of the Child(ren)’s uninsured co-pays for health-related expenses premiums in the amount of <span style='background:yellow'>$" . $this->responses["sole-1"] . "</span> per month.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_09B()
	{
		$snippet = "<w:p w14:paraId='56FF7886' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:bookmarkStart w:id='92' w:name='SoCUninsuredCoPaysSpR' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.09B</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>SPLIT RESPONSIBILITY</w:t>
		</w:r>
		<w:bookmarkEnd w:id='92' />
		<w:r>
			<w:t>. Parent A shall cover <span style='background:yellow'>" . $this->responses["split-1"] . "%</span> and Parent B shall cover <span style='background:yellow'>" . $this->responses["split-2"] . "%</span> of the Child(ren)’s uninsured 
			co-pays for health-related expenses premiums in the amount of <span style='background:yellow'>$" . $this->responses["split-3"] . "</span> per month.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_09C()
	{
		$snippet = "<w:p w14:paraId='21BF9F79' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:bookmarkStart w:id='93' w:name='SoCUninsuredCoPaysThresholdAmount' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.09C</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>RESPONSIBILITY FOR THRESHOLD AMOUNT</w:t>
		</w:r>
		<w:bookmarkEnd w:id='93' />
		<w:r>
			<w:t xml:space='preserve'>. Each Parent shall cover up to <span style='background:yellow'>$" . $this->responses["threshold1"] . "</span> per Child per calendar year in uninsured co-pays for health-related expenses. </w:t>
		</w:r>
		<w:proofErr w:type='gramStart' />
		<w:r>
			<w:t>In the event that</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd' />
		<w:r>
			<w:t xml:space='preserve'> any Child’s uninsured co-pays for health-related expenses paid by either parent exceeds <span style='background:yellow'>$" . $this->responses["threshold2"] . "</span> per calendar year, then Parent A shall cover <span style='background:yellow'>" . $this->responses["threshold3"] . "%</span> and Parent B shall cover <span style='background:yellow'>" . $this->responses["threshold4"] . "%</span> of the Child(ren)’s uninsured co-pays for health-related expenses premiums exceeding the threshold amount.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_10()
	{
	}
	function gen_child_support_8_10A()
	{
	}
	function gen_child_support_8_10B()
	{
	}
	function gen_child_support_8_10C()
	{
	}
	function gen_child_support_8_10D()
	{
	}
	function gen_child_support_8_11()
	{
	}
	function gen_child_support_8_11A()
	{
	}
	function gen_child_support_8_11B()
	{
	}
	function gen_child_support_8_11C()
	{
	}
	function gen_child_support_8_11D()
	{
	}
	function gen_child_support_8_11E()
	{
	}
	function gen_child_support_8_12()
	{
	}
	function gen_child_support_8_12A()
	{
	}
	function gen_child_support_8_12B()
	{
	}
	function gen_child_support_8_12C()
	{
	}
	function gen_child_support_8_12D()
	{
	}
	function gen_child_support_8_12E()
	{
	}
	function gen_child_support_8_12F()
	{
	}
	function gen_child_support_8_12G()
	{
	}
	function gen_child_support_8_12H()
	{
	}
	function gen_child_support_8_13()
	{
	}
	function gen_child_support_8_13A()
	{
	}
	function gen_child_support_8_13B()
	{
	}
	function gen_child_support_8_13C()
	{
	}
	function gen_child_support_8_13D()
	{
	}
	function gen_child_support_8_14()
	{
	}
	function gen_child_support_8_14A()
	{
	}
	function gen_child_support_8_14B()
	{
	}
	function gen_child_support_8_14C()
	{
	}
	function gen_child_support_8_14D()
	{
	}
	function gen_child_support_8_14E()
	{
	}
	function gen_child_support_8_14F()
	{
	} //end of child support section 6

	//Other Section
	function gen_other_9_00() {}
	function gen_other_9_01() {}
	function gen_other_9_02() {}
	function gen_other_9_03() {}
	function gen_other_9_04() {}
	function gen_other_9_05() {}
	function gen_other_9_06() {}
	function gen_other_9_07() {}
	function gen_other_9_08() {}
	function gen_other_9_09() {}
	function gen_other_9_10() {}
	function gen_other_9_11() {}
	function gen_other_9_12() {}
	function gen_other_9_13() {}
	function gen_other_9_14() {}
	function gen_other_9_15() {}
	function gen_other_9_16() {}
	//End of other section
	function packageDocument()
	{
		// Take the template.zip copy it and rename it in the downloads folder
		// Take the string and write it to document.xml
		fwrite($this->fileOutput, $this->fileContentString);
		// Zip the folder and rename it to .docx
		// Serve the .docx
	}
}
