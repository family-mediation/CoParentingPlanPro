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
    function gen_physical_custody_timesharing_6_02BOptional() {}
    function gen_physical_custody_timesharing_6_02C(string $type) {}
    function gen_physical_custody_timesharing_6_02D(string $type) {}
    function gen_physical_custody_timesharing_6_02E(string $type) {}
    function gen_physical_custody_timesharing_6_03() {}
    function gen_physical_custody_timesharing_6_03A() {}
    function gen_physical_custody_timesharing_6_03B() {}
    function gen_physical_custody_timesharing_6_03C() {}
    function gen_physical_custody_timesharing_6_03D() {}
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
		$snippet = "<w:p w14:paraId='05E617B9' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='96' w:name='SoCExtracurricular' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.10</w:t>
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
			<w:t>SUPPORT OF THE CHILD(REN): EXTRACURRICULAR EXPENSES</w:t>
		</w:r>
		<w:bookmarkEnd w:id='96' />
		<w:r>
			<w:t>.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_10A()
	{
		$snippet = "<w:p w14:paraId='6728CA27' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
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
		<w:bookmarkStart w:id='97' w:name='SoCExtracurricularSR' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.10A</w:t>
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
		<w:bookmarkEnd w:id='97' />
		<w:r>
			<w:t>. <span style='background:yellow'>" . $this->responses["parentAB_EC"] . "</span> shall cover 100% of the Child(ren)’s extracurricular expenses.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_10B()
	{
		$snippet = "<w:p w14:paraId='22E031FB' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:lastRenderedPageBreak />
			<w:tab />
		</w:r>
		<w:bookmarkStart w:id='98' w:name='SoCExtracurricularSpR' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.10B</w:t>
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
		<w:r>
			<w:t>.</w:t>
		</w:r>
		<w:bookmarkEnd w:id='98' />
		<w:r>
			<w:t xml:space='preserve'> Parent A shall cover <span style='background:yellow'>" . $this->responses["splitEC-1"] . "%</span> and Parent B shall cover <span style='background:yellow'>" . $this->responses["splitEC-2"] . "%</span> of the Child(ren)’s extracurricular expenses.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_10C()
	{
		$snippet = "<w:p w14:paraId='0DEA2EAC' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
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
		<w:bookmarkStart w:id='99' w:name='SoCExtracurricularSelection' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.10C</w:t>
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
			<w:t>SELECTING EXTRACURRICULAR ACTIVITIES FOR THE CHILD(REN) PURSUANT TO 7.10 HEREINABOVE</w:t>
		</w:r>
		<w:bookmarkEnd w:id='99' />
		<w:r>
			<w:t>. If the Parents have elected to separately select</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333' />
			</w:rPr>
			<w:t xml:space='preserve'> and pay for one extra-curricular activity that occurs no more than once a week for each Child, then the other Parent shall be expected to take each Child to that activity and support the Child’s participation during the time that the Child is in their care, pursuant to Paragraph 7.10 hereinabove. Each Parent shall pay for 100% of their selected extracurricular activity, which shall include supplies, uniforms, travel out-of-state, and other expenses required for the Child to participate</w:t>
		</w:r>
		<w:r>
			<w:t>.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_10D()
	{
		$snippet = "<w:p w14:paraId='6C0D30B5' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
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
		<w:bookmarkStart w:id='100' w:name='SoCExtracurricularMutualAgreement' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.10D</w:t>
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
			<w:t>EXTRACURRICULAR ACTIVITIES MUST BE MUTUALLY AGREED UPON</w:t>
		</w:r>
		<w:bookmarkEnd w:id='100' />
		<w:r>
			<w:t>. Parents shall only be responsible for paying for extracurricular activities that are mutually agreed upon by both Parents. Parents agree to consult and be guided by the Child’s preferences in selecting mutually agreed upon extracurricular activities.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_11()
	{
		$snippet = "<w:p w14:paraId='511280BF' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='101' w:name='SoCPrivateSchoolExpenses' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.11</w:t>
		</w:r>
		<w:r>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>SUPPORT OF THE CHILD(REN): PRIVATE SCHOOL EXPENSES</w:t>
		</w:r>
		<w:r>
			<w:t>.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_11A()
	{
		$snippet = "<w:p w14:paraId='4DE1F5EE' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
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
		<w:bookmarkStart w:id='102' w:name='SoCPrivateSchoolExpensesSR' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.11A</w:t>
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
		<w:bookmarkEnd w:id='102' />
		<w:r>
			<w:t>. <span style='background:yellow'>" . $this->responses["parentAB_Priv"] . "</span> shall cover 100% of the Child(ren)’s private school expenses.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_11B()
	{
		$snippet = "<w:p w14:paraId='70A47D6E' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
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
		<w:bookmarkStart w:id='103' w:name='SoCPrivateSchoolExpensesSpR' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.11B</w:t>
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
		<w:bookmarkEnd w:id='103' />
		<w:r>
			<w:t>. Parent A shall cover <span style='background:yellow'>" . $this->responses["splitPriv-1"] . "%</span> and Parent B shall cover <span style='background:yellow'>" . $this->responses["splitPriv-2"] . "%</span> of the Child(ren)’s private school expenses.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_11C()
	{
		$snippet = "<w:p w14:paraId='716CDA39' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
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
		<w:bookmarkStart w:id='104' w:name='SoCPrivateSchoolExpensesDefinition' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.11C</w:t>
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
			<w:t>DEFINITION OF PRIVATE SCHOOL EXPENSES</w:t>
		</w:r>
		<w:bookmarkEnd w:id='104' />
		<w:r>
			<w:t>. Private school expenses shall be defined to include all expenses related to a Child’s attendance at a private school including, without limitation, application fees/costs, tuition, books, uniforms, school lunches, and before and/or after school care expenses.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_11D()
	{
		$snippet = "<w:p w14:paraId='77FCA0E2' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
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
		<w:bookmarkStart w:id='105' w:name='SoCPrivateSchoolExpensesMutualAgreement' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.11D</w:t>
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
			<w:t>MUTUAL AGREEMENT OF PARENTS</w:t>
		</w:r>
		<w:bookmarkEnd w:id='105' />
		<w:r>
			<w:t>. Either Parent may apply for a Child to attend private school but unless one parent has sole legal custody, both Parents must approve the enrollment of any Child in a private school.</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_11E()
	{
		$snippet = "<w:p w14:paraId='31B4F8C3' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:b />
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:lastRenderedPageBreak />
			<w:tab />
		</w:r>
		<w:bookmarkStart w:id='106' w:name='SoCPrivateSchoolExpensesReserve' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.11E</w:t>
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
			<w:t>RESERVE</w:t>
		</w:r>
		<w:bookmarkEnd w:id='106' />
		<w:r>
			<w:t>. Parents shall reserve the issue of private school expenses.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_12()
	{
		$snippet = "<w:p w14:paraId='06B811A8' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='107' w:name='SoCPostSchoolExpenses' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.12</w:t>
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
			<w:t>SUPPORT OF THE CHILD(REN): POST-HIGH SCHOOL EDUCATION EXPENSES</w:t>
		</w:r>
		<w:bookmarkEnd w:id='107' />
		<w:r>
			<w:t>.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_12A()
	{
		$snippet = "<w:p w14:paraId='5E8A1213' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='720' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='108' w:name='SoCPostSchoolExpensesSR' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.12A</w:t>
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
		<w:bookmarkEnd w:id='108' />
		<w:r>
			<w:t xml:space='preserve'>.  <span style='background:yellow'>" . $this->responses["parentAB_High"] . "</span> shall cover 100% of the Child(ren)’s post-high school education expenses. </w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_12B()
	{
		$snippet = "<w:p w14:paraId='71E45E02' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
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
		<w:bookmarkStart w:id='109' w:name='SoCPostSchoolExpensesSpR' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.12B</w:t>
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
		<w:bookmarkEnd w:id='109' />
		<w:r>
			<w:t>. Parent A shall cover <span style='background:yellow'>" . $this->responses["splitHigh-1"] . "%</span> and Parent B shall cover <span style='background:yellow'>" . $this->responses["splitHigh-2"] . "%</span> of the Child(ren)’s post-high school education expenses.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_12C()
	{
		$snippet = "<w:p w14:paraId='60F75D46' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:bookmarkStart w:id='110' w:name='SoCPostSchoolExpensesSRFundsfromchildacc' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.12C</w:t>
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
			<w:t>SOLE RESPONSIBILITY AFTER FUNDS FROM ANY 529 ACCOUNTS HELD ON BEHALF OF A CHILD OR CHILD(REN), COVERDELL ACCOUNTS OR OTHER FUNDS EAR-MARKED TO PAY FOR A CHILD’S POST-HIGH SCHOOL EDUCATION EXPENSES</w:t>
		</w:r>
		<w:bookmarkEnd w:id='110' />
		<w:r>
			<w:t>. After funds from any 529 accounts held on behalf of a Child or Child(ren), Coverdell accounts or other funds ear-marked to pay for a Child’s post-high school education expenses are expended, then <span style='background:yellow'>" . $this->responses["parentAB_Sole529"] . "</span> shall 
			cover 100% of the Child(ren)’s remaining post-high school education expenses.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_12D()
	{
		$snippet = "<w:p w14:paraId='0CC22BA9' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='720' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='111' w:name='SoCPostSchoolExpensesSpRFundsfromchildac' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.12D</w:t>
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
			<w:t>SPLIT RESPONSIBILITY AFTER FUNDS FROM ANY 529 ACCOUNTS HELD ON BEHALF OF A CHILD OR CHILD(REN), COVERDELL ACCOUNTS OR OTHER FUNDS EAR-MARKED TO PAY FOR A CHILD’S POST-HIGH SCHOOL EDUCATION EXPENSES</w:t>
		</w:r>
		<w:bookmarkEnd w:id='111' />
		<w:r>
			<w:t>. After funds from any 529 accounts held on behalf of a Child or Child(ren), Coverdell accounts or other funds ear-marked to pay for a Child’s post-high school education expenses are expended, then Parent A shall cover <span style='background:yellow'>" . $this->responses["split529-1"] . "%</span> and 
			Parent B shall cover <span style='background:yellow'>" . $this->responses["split529-2"] . "%</span> of the Child(ren)’s remaining post-high school education expenses.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_12E()
	{
		$snippet = "<w:p w14:paraId='1011B515' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
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
		<w:bookmarkStart w:id='112' w:name='SoCPostSchoolExpensesCap' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.12E</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'> </w:t>
		</w:r>
		<w:r>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>CAP ON PAYMENT BY EACH PARENT PER ACADEMIC SCHOOL YEAR</w:t>
		</w:r>
		<w:bookmarkEnd w:id='112' />
		<w:r>
			<w:t xml:space='preserve'>. The Child(ren)’s post-high school education expenses shall be paid such that Parent A shall cover <span style='background:yellow'>" . $this->responses["postCap-1"] . "%</span> up to a cap 
			of <span style='background:yellow'>$" . $this->responses["postCapA"] . "</span> amount per academic school year and Parent B shall cover <span style='background:yellow'>" . $this->responses["postCap-2"] . "%</span> up to a cap 
			of <span style='background:yellow'>$" . $this->responses["postCapB"] . "</span> amount per academic school year. </w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_12F()
	{
		$snippet = "<w:p w14:paraId='125CB36F' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='720' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='113' w:name='SoCPostSchoolExpensesDef' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:lastRenderedPageBreak />
			<w:t>8.12F</w:t>
		</w:r>
		<w:r>
			<w:tab />
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>DEFINITION OF POST-HIGH SCHOOL EDUCATION EXPENSES</w:t>
		</w:r>
		<w:bookmarkEnd w:id='113' />
		<w:r>
			<w:t>. Private school expenses shall be defined to include all expenses related to a Child’s attendance at any post-high school educational institution (including vocational and trade schools), without limitation, application fees/costs, tuition, books, uniforms, school lunches, and before and/or after school care expenses.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_12G()
	{
		$snippet = "<w:p w14:paraId='095C63C6' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
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
		<w:bookmarkStart w:id='114' w:name='SoCPostSchoolExpensesMutualAgreement' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.12G</w:t>
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
			<w:t>MUTUAL AGREEMENT OF PARENTS</w:t>
		</w:r>
		<w:bookmarkEnd w:id='114' />
		<w:r>
			<w:t xml:space='preserve'>. Either Parent may apply for a Child to attend a post-high school education institution (includes trade and vocational schools), but </w:t>
		</w:r>
		<w:proofErr w:type='gramStart' />
		<w:r>
			<w:t>in order for</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd' />
		<w:r>
			<w:t xml:space='preserve'> the other Parent to be financially responsible, both Parents must approve the enrollment of any Child or Adult Child in a post-high school educational institution.</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_12H()
	{
		$snippet = "<w:p w14:paraId='386C4A1E' w14:textId='1AEEE9CB' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:b />
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
		<w:bookmarkStart w:id='115' w:name='SoCPostSchoolExpensesReserve' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.12H</w:t>
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
			<w:t>RESERVE</w:t>
		</w:r>
		<w:bookmarkEnd w:id='115' />
		<w:r>
			<w:t>. Parents shall reserve the issue of post-high school educational school expenses.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_13()
	{
		$snippet = "<w:p w14:paraId='2D643AAA' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='116' w:name='SoCDependents' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.13</w:t>
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
			<w:t>SUPPORT OF THE CHILD(REN): CLAIMING THE CHILD(REN) AS A DEPENDENT FOR TAX PURPOSES</w:t>
		</w:r>
		<w:bookmarkEnd w:id='116' />
		<w:r>
			<w:t>.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_13A()
	{
		$snippet = "<w:p w14:paraId='792B5675' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='720' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='117' w:name='SoCDependentsSA' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.13A</w:t>
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
			<w:t>SOLE AUTHORITY TO CLAIM THE CHILD(REN</w:t>
		</w:r>
		<w:bookmarkEnd w:id='117' />
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>)</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'>. <span style='background:yellow'>" . $this->responses["parentAB_taxSole"] . "</span> shall be entitled to claim any Child(ren) as a dependent for tax purposes every year. </w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_13B()
	{
		$snippet = "<w:p w14:paraId='0EA0CA62' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='720' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='118' w:name='SoCDependentsSpA' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.13B</w:t>
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
			<w:t>SPLIT AUTHORITY TO CLAIM THE CHILD(REN</w:t>
		</w:r>
		<w:bookmarkEnd w:id='118' />
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>)</w:t>
		</w:r>
		<w:r>
			<w:t>. Parent A shall be entitled to claim <span style='background:yellow'>" . $this->responses["partyATax"] . "</span></w:t>
		</w:r>
		<w:proofErr w:type='gramStart' />
		<w:r>
			<w:t>_(</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd' />
		<w:r>
			<w:t>Child’s Initials) as a dependent for tax purposes every year. Parent B shall be entitled to claim <span style='background:yellow'>" . $this->responses["partyBTax"] . "</span></w:t>
		</w:r>
		<w:proofErr w:type='gramStart' />
		<w:r>
			<w:t>_(</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd' />
		<w:r>
			<w:t xml:space='preserve'>Child’s Initials) as a dependent for tax purposes every year. </w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_13C()
	{
		$snippet = "<w:p w14:paraId='4980B917' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='720' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='119' w:name='SoCDependentsSpAthenAlternate' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.13C</w:t>
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
			<w:t>SPLIT AUTHORITY TO CLAIM THE CHILD(REN) THEN ALTERNATE</w:t>
		</w:r>
		<w:bookmarkEnd w:id='119' />
		<w:r>
			<w:t>. Parent A shall be entitled to claim <span style='background:yellow'>" . $this->responses["partyATaxAlt"] . "</span></w:t>
		</w:r>
		<w:proofErr w:type='gramStart' />
		<w:r>
			<w:t>_(</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd' />
		<w:r>
			<w:t>Child’s Initials) as a dependent for tax purposes every year. Parent B shall be entitled to claim <span style='background:yellow'>" . $this->responses["partyBTaxAlt"] . "</span></w:t>
		</w:r>
		<w:proofErr w:type='gramStart' />
		<w:r>
			<w:t>_(</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd' />
		<w:r>
			<w:t xml:space='preserve'>Child’s Initials) as a dependent for tax purposes every year. Once the older Child is no longer eligible to be claimed for tax purposes, then the Parents shall alternate claiming the younger Child. </w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_13D()
	{
		$snippet = "<w:p w14:paraId='6A4976A1' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='720' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='120' w:name='SoCDependentsAlternate' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.13D</w:t>
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
			<w:t>ALTERNATE AUTHORITY TO CLAIM THE CHILD(REN</w:t>
		</w:r>
		<w:bookmarkEnd w:id='120' />
		<w:r>
			<w:rPr>
				<w:u w:val='single' />
			</w:rPr>
			<w:t>)</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'>. Parent A shall be entitled to claim the Child(ren) as dependent(s) for tax purposes </w:t>
		</w:r>
		<w:r>
			<w:lastRenderedPageBreak />
			<w:t xml:space='preserve'>in even years. Parent B shall be entitled to claim the Child(ren) as dependent(s) for tax purposes in odd years. </w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_14()
	{
		$snippet = "<w:p w14:paraId='1F58DF13' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='121' w:name='SoCProtocolsforReimbursment' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.14</w:t>
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
			<w:t>SUPPORT OF THE CHILD(REN): PROTOCOLS FOR REIMBURSEMENT OF CHILD-RELATED EXPENSES</w:t>
		</w:r>
		<w:bookmarkEnd w:id='121' />
		<w:r>
			<w:t>.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_14A()
	{
		$snippet = "<w:p w14:paraId='2F72948D' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:r>
			<w:tab />
		</w:r>
		<w:bookmarkStart w:id='122' w:name='SoCProtocolsforReimbursmentTimeframe' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.14A</w:t>
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
			<w:t>TIMEFRAME FOR REIMBURSEMENT OF CHILD-RELATED EXPENSES</w:t>
		</w:r>
		<w:bookmarkEnd w:id='122' />
		<w:r>
			<w:t>. Upon a request in writing (text or email is ok) from a Parent for reimbursement, the other Parent shall reimburse the requesting Parent within <span style='background:yellow'>" . $this->responses["timeVal"] . "</span> days.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_14B()
	{
		$snippet = "<w:p w14:paraId='59B9A4FC' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:b />
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:tab />
		</w:r>
		<w:bookmarkStart w:id='123' w:name='SoCProtocolsforReimbursmentMonthly' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.14B</w:t>
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
			<w:t>MONTHLY CALCULATION OF CHILD-RELATED EXPENSES AND REIMBURSEMENT</w:t>
		</w:r>
		<w:bookmarkEnd w:id='123' />
		<w:r>
			<w:t xml:space='preserve'>. Parents shall calculate child-related expenses and reimburse each other </w:t>
		</w:r>
		<w:proofErr w:type='gramStart' />
		<w:r>
			<w:t>on a monthly basis</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd' />
		<w:r>
			<w:t>.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_14C()
	{
		$snippet = "<w:p w14:paraId='41FB477D' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='720' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:b />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='124' w:name='SoCProtocolsforReimbursmentQuarterly' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.14C</w:t>
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
			<w:t>QUARTERLY CALCULATION OF CHILD-RELATED EXPENSES AND REIMBURSEMENT</w:t>
		</w:r>
		<w:r>
			<w:t>.</w:t>
		</w:r>
		<w:bookmarkEnd w:id='124' />
		<w:r>
			<w:t xml:space='preserve'> Parents shall calculate child-related expenses and reimburse each other on a quarterly basis.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_14D()
	{
		$snippet = "<w:p w14:paraId='5FF26E7C' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='720' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:b />
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='125' w:name='SoCProtocolsforReimbursmentAnnual' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.14D</w:t>
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
			<w:t>ANNUAL CALCULATION OF CHILD-RELATED EXPENSES AND REIMBURSEMENT</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'>. </w:t>
		</w:r>
		<w:bookmarkEnd w:id='125' />
		<w:r>
			<w:t>Parents shall calculate child-related expenses and reimburse each other on an annual basis.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_14E()
	{
		$snippet = "<w:p w14:paraId='72857059' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='720' />
			<w:jc w:val='both' />
		</w:pPr>
		<w:bookmarkStart w:id='126' w:name='SoCProtocolsforReimbursmentDocumentation' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.14E</w:t>
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
			<w:t>DOCUMENTATION REQUIRED FOR REIMBURSEMENT OF CHILD-RELATED EXPENSES</w:t>
		</w:r>
		<w:bookmarkEnd w:id='126' />
		<w:r>
			<w:t xml:space='preserve'>. A requesting Parent shall include written documentation proving the child-related expense </w:t>
		</w:r>
		<w:proofErr w:type='gramStart' />
		<w:r>
			<w:t>in order to</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd' />
		<w:r>
			<w:t xml:space='preserve'> receive reimbursement from the other Parent.</w:t>
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_child_support_8_14F()
	{
		$content = $this->responses["reimburseMethod"]; // if user doesn't enter anything, show a blank line instead of displaying nothing
        if (empty($content)) {
            $content = "________";
        }
		$snippet = "<w:p w14:paraId='0433F65B' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto' />
			<w:ind w:left='0' w:right='36' w:firstLine='0' />
			<w:jc w:val='both' />
			<w:rPr>
				<w:b />
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:tab />
		</w:r>
		<w:bookmarkStart w:id='127' w:name='SoCProtocolsforReimbursmentMethod' />
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:t>8.14F</w:t>
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
			<w:t>REIMBURSEMENT METHOD</w:t>
		</w:r>
		<w:bookmarkEnd w:id='127' />
		<w:r>
			<w:t>. Parents shall use the following method to reimburse each other for child-related expenses: Check, Bank Account Transfer, Venmo, Our Family Wizard or other mutually 
			agreed upon parenting expense tool or application, or <span style='background:yellow'>$content</span>.</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b />
			</w:rPr>
			<w:tab />
		</w:r>
	</w:p>";
        echo $snippet;
        $this->fileContentString .= $snippet;
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

    //Section 8: Legal
    function gen_legal_10_00()
    {
        // TODO: Implement gen_legal_10_00() method.
    }
    function gen_legal_10_01()
    {
        // TODO: Implement gen_legal_10_01() method.
    }
    function gen_legal_10_02()
    {
        // TODO: Implement gen_legal_10_02() method.
    }

    function signature()
    {
        // TODO: Implement signature() method.
    }

    //End of other section
	function packageDocument()
	{
		// Take the template.zip copy it and rename it in the downloads folder
		// Take the string and write it to document.xml
        if($this->fileOutput != false)
        {
		    fwrite($this->fileOutput, $this->fileContentString);
        }
		// Zip the folder and rename it to .docx
		// Serve the .docx

	}

}
