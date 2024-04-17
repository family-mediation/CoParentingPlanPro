<?php
include 'timeSharingSchedulesWordDoc/EqualTimeSharing.php';
include 'timeSharingSchedulesWordDoc/OtherTimeSharing.php';
include 'timeSharingSchedulesWordDoc/Fall.php';
include 'timeSharingSchedulesWordDoc/Thanksgiving.php';
include 'timeSharingSchedulesWordDoc/Winter.php';
include 'timeSharingSchedulesWordDoc/Spring.php';
include 'timeSharingSchedulesWordDoc/Summer.php';
//include 'Signature.php';
//include 'HolidayTable.php';
require_once("DocumentGenerator.php");
class wordDocGenerator extends documentGenerator
{
	function genHeader()
	{
		echo "Generating Header " . $this->fileName . " <br/>";
		$this->fileContentString .= "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
                <w:document xmlns:wpc=\"http://schemas.microsoft.com/office/word/2010/wordprocessingCanvas\" xmlns:cx=\"http://schemas.microsoft.com/office/drawing/2014/chartex\" xmlns:cx1=\"http://schemas.microsoft.com/office/drawing/2015/9/8/chartex\" xmlns:cx2=\"http://schemas.microsoft.com/office/drawing/2015/10/21/chartex\" xmlns:cx3=\"http://schemas.microsoft.com/office/drawing/2016/5/9/chartex\" xmlns:cx4=\"http://schemas.microsoft.com/office/drawing/2016/5/10/chartex\" xmlns:cx5=\"http://schemas.microsoft.com/office/drawing/2016/5/11/chartex\" xmlns:cx6=\"http://schemas.microsoft.com/office/drawing/2016/5/12/chartex\" xmlns:cx7=\"http://schemas.microsoft.com/office/drawing/2016/5/13/chartex\" xmlns:cx8=\"http://schemas.microsoft.com/office/drawing/2016/5/14/chartex\" xmlns:mc=\"http://schemas.openxmlformats.org/markup-compatibility/2006\" xmlns:aink=\"http://schemas.microsoft.com/office/drawing/2016/ink\" xmlns:am3d=\"http://schemas.microsoft.com/office/drawing/2017/model3d\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:oel=\"http://schemas.microsoft.com/office/2019/extlst\" xmlns:r=\"http://schemas.openxmlformats.org/officeDocument/2006/relationships\" xmlns:m=\"http://schemas.openxmlformats.org/officeDocument/2006/math\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:wp14=\"http://schemas.microsoft.com/office/word/2010/wordprocessingDrawing\" xmlns:wp=\"http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing\" xmlns:w10=\"urn:schemas-microsoft-com:office:word\" xmlns:w=\"http://schemas.openxmlformats.org/wordprocessingml/2006/main\" xmlns:w14=\"http://schemas.microsoft.com/office/word/2010/wordml\" xmlns:w15=\"http://schemas.microsoft.com/office/word/2012/wordml\" xmlns:w16cex=\"http://schemas.microsoft.com/office/word/2018/wordml/cex\" xmlns:w16cid=\"http://schemas.microsoft.com/office/word/2016/wordml/cid\" xmlns:w16=\"http://schemas.microsoft.com/office/word/2018/wordml\" xmlns:w16sdtdh=\"http://schemas.microsoft.com/office/word/2020/wordml/sdtdatahash\" xmlns:w16se=\"http://schemas.microsoft.com/office/word/2015/wordml/symex\" xmlns:wpg=\"http://schemas.microsoft.com/office/word/2010/wordprocessingGroup\" xmlns:wpi=\"http://schemas.microsoft.com/office/word/2010/wordprocessingInk\" xmlns:wne=\"http://schemas.microsoft.com/office/word/2006/wordml\" xmlns:wps=\"http://schemas.microsoft.com/office/word/2010/wordprocessingShape\" mc:Ignorable=\"w14 w15 w16se w16cid w16 w16cex w16sdtdh wp14\">
                <w:body>";
	}
    function gen_guiding_principals_statement(){}
	function genFooter()
	{
		echo "Generating Footer " . $this->fileName . " <br/>";
		$this->fileContentString .= "
		<w:sectPr w:rsidR=\"00505307\">
                   <w:footerReference w:type=\"even\" r:id=\"rId9\" />
                   <w:footerReference w:type=\"default\" r:id=\"rId10\" />
                   <w:footerReference w:type=\"first\" r:id=\"rId11\" />
                   <w:pgSz w:w=\"12240\" w:h=\"15840\" />
                   <w:pgMar w:top=\"1440\" w:right=\"1440\" w:bottom=\"1440\" w:left=\"1440\" w:header=\"720\" w:footer=\"720\" w:gutter=\"0\" />
                   <w:pgNumType w:start=\"1\" />
                   <w:cols w:space=\"720\" />
                   <w:titlePg />
               </w:sectPr>
           </w:body>
       </w:document>";
	}

    // Section 2: Children
    function gen_children_4_00() {
        $childrenInfo = "<w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>CHILDREN:</w:t>
              </w:r>
            </w:p>
            <w:p w14:paraId='6F945AB7' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='12' w:name='ChildrenInformationonChildren'/>
              <w:r w:rsidRPr='00D52A55'>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>4.00</w:t>
              </w:r>
              <w:r w:rsidRPr='00D52A55'>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>CHILD(REN): INFORMATION ON CHILD(REN</w:t>
              </w:r>
              <w:bookmarkEnd w:id='12'/>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>)</w:t>
              </w:r>
              <w:r>
                <w:t>. The Parents have " . $this->responses["numChildren"] . " Child(ren) together as follows: Child A (“". $this->responses["partyAFirst"] . "”) born in ( ". $this->responses["child1BirthYears"] . "), Child B (“". $this->responses["child2BirthYears"] . "”) born in (". $this->responses["child2BirthYears"] . "), collectively hereinafter referred to as “the Child(ren)” or individually referred to using their initials.
                </w:t>
              </w:r>";
        echo $childrenInfo;
        $this->fileContentString .= $childrenInfo;
    }


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
    function gen_physical_custody_timesharing_6_00() {
        $header = "<w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING:</w:t>
              </w:r>
            </w:p>
            <w:p w14:paraId='5B68D0C5' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='26' w:name='PhysicalCustodyGlobalPriority'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:lastRenderedPageBreak/>
                <w:t>6.00</w:t>
              </w:r>
              <w:r>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: GLOBAL PRIORITY</w:t>
              </w:r>
              <w:bookmarkEnd w:id='26'/>
              <w:r>
                <w:t>. If there is a conflict with different sections of the Physical Custody and Timesharing schedule, the governing hierarchy is from the highest to lowest as follows: (1) Holidays and Special Days; (2) Travel and Uninterrupted Time with
                  the Child(ren); (3) Timesharing with the Child(ren) During School Breaks, and (4) Timesharing with the Child(ren) During the School Year.
                </w:t>
              </w:r>
            </w:p>";
        echo $header;
        $this->fileContentString .= $header;
    }
    function gen_physical_custody_timesharing_6_01() {
        $header = "<w:p w14:paraId='5F1E00F0' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='27' w:name='PhysicalCustodyDuringSchoolYear'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.01</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: TIMESHARING DURING THE SCHOOL YEAR</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'>.  </w:t>
              </w:r>
              <w:bookmarkEnd w:id='27'/>
              <w:r>
                <w:t>During the school year, parents agree to share time with their children as set forth hereinbelow. Understanding that each individual Child’s developmental stage and needs should be the primary consideration for setting a schedule.
                  Generally, younger children need more frequent transitions so they do not feel abandoned by either parent, while older children can tolerate longer absences. Each Child’s health, education, special needs, and social, emotional, and physical
                  well-being must be considered in selecting an appropriate schedule. Schedules may change over time by agreement of the Parents based on the Child(ren)’s needs. Below are suggested templates to be modified and based on each family’s needs.
                </w:t>
              </w:r>
            </w:p>";
        echo $header;
        $this->fileContentString .= $header;
    }
    function gen_physical_custody_timesharing_6_01A() {
        $content = "<w:p w14:paraId='1D16DC31' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:r>
                <w:tab/>
              </w:r>
              <w:bookmarkStart w:id='28' w:name='PhysicalCustodyEqual'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.01A</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>EQUAL TIMESHARING SCHEDULES</w:t>
              </w:r>
              <w:bookmarkEnd w:id='28'/>
              <w:r>
                <w:t>. 50/50 schedules can benefit a Child because the Child spends substantial time living with both Parents. This allows the Child(ren) to build close relationships with both Parents and to feel cared for by both Parents. 50/50 schedules
                  work best when:
                </w:t>
              </w:r>
            </w:p>
            <w:p w14:paraId='110A17F3' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:numPr>
                  <w:ilvl w:val='0'/>
                  <w:numId w:val='5'/>
                </w:numPr>
                <w:pBdr>
                  <w:top w:val='nil'/>
                  <w:left w:val='nil'/>
                  <w:bottom w:val='nil'/>
                  <w:right w:val='nil'/>
                  <w:between w:val='nil'/>
                </w:pBdr>
                <w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
                <w:ind w:right='36'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:r>
                <w:t xml:space='preserve'>Parents live </w:t>
              </w:r>
              <w:proofErr w:type='gramStart'/>
              <w:r>
                <w:t>fairly close</w:t>
              </w:r>
              <w:proofErr w:type='gramEnd'/>
              <w:r>
                <w:t xml:space='preserve'> to one another, so exchanges are easier;</w:t>
              </w:r>
            </w:p>
            <w:p w14:paraId='4B457814' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:numPr>
                  <w:ilvl w:val='0'/>
                  <w:numId w:val='5'/>
                </w:numPr>
                <w:pBdr>
                  <w:top w:val='nil'/>
                  <w:left w:val='nil'/>
                  <w:bottom w:val='nil'/>
                  <w:right w:val='nil'/>
                  <w:between w:val='nil'/>
                </w:pBdr>
                <w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
                <w:ind w:right='36'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:r>
                <w:t xml:space='preserve'>Parents </w:t>
              </w:r>
              <w:proofErr w:type='gramStart'/>
              <w:r>
                <w:t>are able to</w:t>
              </w:r>
              <w:proofErr w:type='gramEnd'/>
              <w:r>
                <w:t xml:space='preserve'> communicate with each other about the Child(ren) without fighting;</w:t>
              </w:r>
            </w:p>
            <w:p w14:paraId='431C76F3' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:numPr>
                  <w:ilvl w:val='0'/>
                  <w:numId w:val='5'/>
                </w:numPr>
                <w:pBdr>
                  <w:top w:val='nil'/>
                  <w:left w:val='nil'/>
                  <w:bottom w:val='nil'/>
                  <w:right w:val='nil'/>
                  <w:between w:val='nil'/>
                </w:pBdr>
                <w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
                <w:ind w:right='36'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:r>
                <w:t xml:space='preserve'>Child(ren) </w:t>
              </w:r>
              <w:proofErr w:type='gramStart'/>
              <w:r>
                <w:t>is/are able to</w:t>
              </w:r>
              <w:proofErr w:type='gramEnd'/>
              <w:r>
                <w:t xml:space='preserve'> handle switching between parents’ homes;</w:t>
              </w:r>
            </w:p>
            <w:p w14:paraId='360C2065' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:numPr>
                  <w:ilvl w:val='0'/>
                  <w:numId w:val='5'/>
                </w:numPr>
                <w:pBdr>
                  <w:top w:val='nil'/>
                  <w:left w:val='nil'/>
                  <w:bottom w:val='nil'/>
                  <w:right w:val='nil'/>
                  <w:between w:val='nil'/>
                </w:pBdr>
                <w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
                <w:ind w:right='36'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:r>
                <w:t>Both Parents are committed to putting the Child(ren)’s best interests first;</w:t>
              </w:r>
            </w:p>
            <w:p w14:paraId='0A438D8C' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:numPr>
                  <w:ilvl w:val='0'/>
                  <w:numId w:val='5'/>
                </w:numPr>
                <w:pBdr>
                  <w:top w:val='nil'/>
                  <w:left w:val='nil'/>
                  <w:bottom w:val='nil'/>
                  <w:right w:val='nil'/>
                  <w:between w:val='nil'/>
                </w:pBdr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:right='36'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:r>
                <w:lastRenderedPageBreak/>
                <w:t>Both Parents agree that the 50/50 schedule is best for their Child(ren).</w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($this->responses["schoolYearSchedule"]) {
            case "2-2-3":
                $equalSchedule = new EqualTimeSharing();
                $schedule = $equalSchedule->get_2_2_3();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            case "3-4-4-3":
                $equalSchedule = new EqualTimeSharing();
                $schedule = $equalSchedule->get_3_4_4_3();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            case "2-2-5-5":
                $equalSchedule = new EqualTimeSharing();
                $schedule = $equalSchedule->get_2_2_5_5();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            case "7-7":
                $equalSchedule = new EqualTimeSharing();
                $schedule = $equalSchedule->get_7_7();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            default:
                echo "Error in WordDoc Generator for the variable: schoolYearSchedule - equal schedules.";
        }
    }
    function gen_physical_custody_timesharing_6_01B() {
        $content = "<w:p w14:paraId='03D22859' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
              </w:pPr>
            </w:p>
            <w:p w14:paraId='30629F25' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:bookmarkStart w:id='29' w:name='PhysicalCustodyOther'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.01B</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>OTHER TIMESHARING SCHEDULES</w:t>
              </w:r>
              <w:bookmarkEnd w:id='29'/>
              <w:r>
                <w:t>.</w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($this->responses["schoolYearSchedule"]) {
            case "8-6":
                $otherSchedule = new OtherTimeSharing();
                $schedule = $otherSchedule->get_8_6();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            case "10-4":
                $otherSchedule = new OtherTimeSharing();
                $schedule = $otherSchedule->get_10_4();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            case "ownSchedule":
                $otherSchedule = new OtherTimeSharing();
                $schedule = $otherSchedule->get_own_schedule();
                echo $schedule;
                $this->fileContentString .= $schedule;
                break;
            default:
                echo "Error in Word Doc Generator for the variable: schoolYearSchedule - other schedules.";
        }
    }
    function gen_physical_custody_timesharing_6_02() {
        $content = "<w:p w14:paraId='5767565F' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='30' w:name='PhysicalCustodyDuringSchoolBreaks'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.02</w:t>
              </w:r>
              <w:r>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: TIMESHARING DURING THE SCHOOL BREAKS</w:t>
              </w:r>
              <w:bookmarkEnd w:id='30'/>
              <w:r>
                <w:t>. Unless otherwise agreed by both Parents, school breaks shall be defined as beginning after school on the last day prior to the break and ending at the morning drop off at school on the day school resumes. During their designated school
                  break time with the Child(ren), either Parent may elect to travel with the Child(ren) per the Travel with the Child(ren) provision hereinbelow.
                </w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_02A(string $type) {
        $content = "<w:p w14:paraId='32694CA2' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:right='36' w:firstLine='710'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='31' w:name='PhysicalCustodyFallBreak'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.02A</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
                <w:t xml:space='preserve'> </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>FALL BREAK</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'>.  </w:t>
              </w:r>
              <w:bookmarkEnd w:id='31'/>
              <w:r>
                <w:t xml:space='preserve'>The Parents shall share time with the Child(ren) during Fall Breaks as follows:  </w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($type) {
            case "fall-split-break":
                $split = new Fall();
                $fall = $split->get_split($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $fall;
                $this->fileContentString .= $fall;
                break;
            case "fall-alternate-break":
                $alternate = new Fall();
                $fall = $alternate->get_alternate($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $fall;
                $this->fileContentString .= $fall;
                break;
            case "fall-continue-schedule":
                $continue = new Fall();
                $fall = $continue->get_continue();
                echo $fall;
                $this->fileContentString .= $fall;
                break;
            default:
                echo "Error in WordDoc Generator for the variable: schoolFallBreakSchedule.";
        }
    }
    function gen_physical_custody_timesharing_6_02B(string $type) {
        $content = "<w:p w14:paraId='26CBBB2C' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:right='36' w:firstLine='710'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='35' w:name='PhysicalCustodyThanksgiving'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.02B</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>THANKSGIVING BREAK</w:t>
              </w:r>
              <w:bookmarkEnd w:id='35'/>
              <w:r>
                <w:t xml:space='preserve'>.  The Parents shall share time with the Child(ren) during Thanksgiving Breaks as follows:  </w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($type) {
            case "thanksgiving-split-break":
                $split = new Thanksgiving();
                $thanksgiving = $split->get_split($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $thanksgiving;
                $this->fileContentString .= $thanksgiving;
                break;
            case "thanksgiving-alternate-break":
                $alternate = new Thanksgiving();
                $thanksgiving = $alternate->get_alternate($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $thanksgiving;
                $this->fileContentString .= $thanksgiving;
                break;
            case "thanksgiving-continue-schedule":
                $continue = new Thanksgiving();
                $thanksgiving = $continue->get_continue();
                echo $thanksgiving;
                $this->fileContentString .= $thanksgiving;
                break;
            default:
                echo "Error in WordDoc Generator for the variable: schoolThanksgivingBreakSchedule.";
        }
    }
    function gen_physical_custody_timesharing_6_02BOptional() {
        $time_break = new Thanksgiving();
        $thanksgiving = $time_break->get_time();
        echo $thanksgiving;
        $this->fileContentString .= $thanksgiving;
    }
    function gen_physical_custody_timesharing_6_02C(string $type) {
        $content = "<w:p w14:paraId='1D1CAB3E' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:right='36' w:firstLine='710'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='40' w:name='PhysicalCustodyWinterBreak'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t xml:space='preserve'>6.02C </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>WINTER BREAK</w:t>
              </w:r>
              <w:bookmarkEnd w:id='40'/>
              <w:r>
                <w:t>. The Parents shall share time with the Child(ren) during Winter Break as follows:</w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($type) {
            case "winter-split-break":
                $split = new Winter();
                $winter = $split->get_split($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $winter;
                $this->fileContentString .= $winter;
                break;
            case "winter-alternate-break":
                $alternate = new Winter();
                $winter = $alternate->get_alternate($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $winter;
                $this->fileContentString .= $winter;
                break;
            case "winter-split-holiday-break":
                $split_holiday = new Winter();
                $winter = $split_holiday->get_split_break_holidays($this->responses['partyAFirst'], $this->responses['partyBFirst'], $this->responses['christmasStart'], $this->responses['christmasEnd'], $this->responses['newYearsStart'], $this->responses['newYearsEnd']);
                echo $winter;
                $this->fileContentString .= $winter;
                break;
            case "winter-continue-schedule":
                $continue = new Winter();
                $winter = $continue->get_continue();
                echo $winter;
                $this->fileContentString .= $winter;
                break;
            default:
                echo "Error in WordDoc Generator for the variable: schoolWinterBreakSchedule.";
        }
    }
    function gen_physical_custody_timesharing_6_02D(string $type) {
        $content = "<w:p w14:paraId='24192A3F' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:right='36' w:firstLine='710'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='45' w:name='PhysicalCustodySpringBreak'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.02D</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>SPRING BREAK</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'>.  </w:t>
              </w:r>
              <w:bookmarkEnd w:id='45'/>
              <w:r>
                <w:t xml:space='preserve'>The Parents shall share time with the Child(ren) during Spring Breaks as follows:  </w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($type) {
            case "spring-split-break":
                $split = new Spring();
                $spring = $split->get_split($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $spring;
                $this->fileContentString .= $spring;
                break;
            case "spring-alternate-break":
                $alternate = new Spring();
                $spring = $alternate->get_alternate($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $spring;
                $this->fileContentString .= $spring;
                break;
            case "spring-continue-schedule":
                $continue = new Spring();
                $spring = $continue->get_continue();
                echo $spring;
                $this->fileContentString .= $spring;
                break;
            default:
                echo "Error in WordDoc Generator for the variable: schoolSpringBreakSchedule.";
        }
    }
    function gen_physical_custody_timesharing_6_02E(string $type) {
        $content = "<w:p w14:paraId='40F3905C' w14:textId='303A9C49' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:right='36' w:firstLine='710'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='49' w:name='PhysicalCustodySummerBreak'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:lastRenderedPageBreak/>
                <w:t xml:space='preserve'>6.02E </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>S</w:t>
              </w:r>
              <w:r w:rsidR='00D72616'>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>UMMER</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t xml:space='preserve'> BREAK</w:t>
              </w:r>
              <w:bookmarkEnd w:id='49'/>
              <w:r>
                <w:t>. The Parents shall share time with the Child(ren) during Summer Break as follows:</w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
        switch ($type) {
            case "summer-split-break":
                $split = new Summer();
                $summer = $split->get_split($this->responses['partyAFirst'], $this->responses['partyBFirst']);
                echo $summer;
                $this->fileContentString .= $summer;
                break;
            case "summer-continue-uninterrupted-schedule":
                $alternate = new Summer();
                $summer = $alternate->get_continue_uninterrupted($this->responses['partyAFirst'], $this->responses['partyBFirst'], $this->responses['summerDaysUninterrupted'], $this->responses['no-later-than']); //need to implement this part, taking in time inputs
                echo $summer;
                $this->fileContentString .= $summer;
                break;
            case "summer-continue-schedule":
                $continue = new Summer();
                $summer = $continue->get_continue();
                echo $summer;
                $this->fileContentString .= $summer;
                break;
            default:
                echo "Error in WordDoc Generator for the variable: schoolSummerBreakSchedule.";
        }
    }
    function gen_physical_custody_timesharing_6_03() {
        $table = new HolidayTableWord();
        $holidayTable = $table->getHolidayTable($this->responses['partyABirthday'], $this->responses['partyBBirthday'], $this->responses['childBirthdays']);
        echo $holidayTable;
        $this->fileContentString .= $holidayTable;
    }
    function gen_physical_custody_timesharing_6_03A() {
        $alt = "<w:p w14:paraId='51C48F5A' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:r>
                <w:tab/>
              </w:r>
              <w:bookmarkStart w:id='54' w:name='PhysicalCustodyHolidaysAltYearly'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.03A</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>ALTERNATE YEARLY</w:t>
              </w:r>
              <w:bookmarkEnd w:id='54'/>
              <w:r>
                <w:t>. Parent A shall have the Child(ren) in even/odd years. Parent B shall have the Child(ren) in even/odd years. An alternated holiday/special day shall be defined as beginning at <span style='background:yellow'>___</span> am/pm and ending at <span style='background:yellow'>___</span> am/pm.</w:t>
              </w:r>
            </w:p>";
        echo $alt;
        $this->fileContentString .= $alt;
    }
    function gen_physical_custody_timesharing_6_03B() {
        $split = "<w:p w14:paraId='7CBC596A' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:r>
                <w:tab/>
              </w:r>
              <w:bookmarkStart w:id='55' w:name='PhysicalCustodyHolidaysSplitEveryYear'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.03B</w:t>
              </w:r>
              <w:r>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>SPLIT EVERY YEAR</w:t>
              </w:r>
              <w:bookmarkEnd w:id='55'/>
              <w:r>
                <w:t>. Parent A shall have the Child(ren) for the first half and Parent B shall have the Child(ren) for the second half of this holiday/special day in even/odd years. Parent B shall have the Child(ren) for the first half and Parent A shall
                  have the Child(ren) for the second half of this holiday/special day in even/odd years. A split holiday shall be defined as beginning at <span style='background:yellow'>___</span> am/pm and ending at <span style='background:yellow'>___</span> am/pm.
                </w:t>
              </w:r>
            </w:p>";
        echo $split;
        $this->fileContentString .= $split;
    }
    function gen_physical_custody_timesharing_6_03C() {
        $content = "<w:p w14:paraId='60BF4306' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
              </w:pPr>
              <w:r>
                <w:lastRenderedPageBreak/>
                <w:tab/>
              </w:r>
              <w:bookmarkStart w:id='56' w:name='PhysicalCustodyHolidaysMonFri'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.03C</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>MONDAY/FRIDAY HOLIDAYS ATTACHED TO A WEEKEND</w:t>
              </w:r>
              <w:r>
                <w:t>.</w:t>
              </w:r>
            </w:p>
            <w:bookmarkEnd w:id='56'/>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_03D() {
        $content = "<w:p w14:paraId='247B1F6A' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
              </w:pPr>
              <w:r>
                <w:tab/>
              </w:r>
              <w:bookmarkStart w:id='57' w:name='PhysicalCustodyHolidaysEveryYearWithAorB'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.03D</w:t>
              </w:r>
              <w:r>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>EVERY YEAR WITH " . $this->responses['partyAFirst'] . " OR " . $this->responses['partyBFirst'] . "</w:t>
              </w:r>
              <w:bookmarkEnd w:id='57'/>
              <w:r>
                <w:t>.</w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_04() {
        $content = "<w:p w14:paraId='2270DE02' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='58' w:name='PhysicalCustodyTravelwithChild'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.04</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: TRAVEL WITH THE CHILD(REN)</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'>.  </w:t>
              </w:r>
              <w:bookmarkEnd w:id='58'/>
              <w:r>
                <w:t xml:space='preserve'>Each parent shall have the right to take up to " . $this->responses['daysOff'] . " days/weeks of </w:t>
              </w:r>
              <w:proofErr w:type='gramStart'/>
              <w:r>
                <w:t>off-island</w:t>
              </w:r>
              <w:proofErr w:type='gramEnd'/>
              <w:r>
                <w:t xml:space='preserve'> travel with the Child(ren) every year. The traveling parent shall provide " . $this->responses['daysNotify'] . " days’ notice in writing to the non-traveling parent if the trip is outside of the State of </w:t>
              </w:r>
              <w:proofErr w:type='gramStart'/>
              <w:r>
                <w:t>Hawai‘</w:t>
              </w:r>
              <w:proofErr w:type='gramEnd'/>
              <w:r>
                <w:t xml:space='preserve'>i.  If the trip is within the State of </w:t>
              </w:r>
              <w:proofErr w:type='gramStart'/>
              <w:r>
                <w:t>Hawai‘</w:t>
              </w:r>
              <w:proofErr w:type='gramEnd'/>
              <w:r>
                <w:t xml:space='preserve'>i, the traveling parent shall provide " . $this->responses['daysNotifyHawaii'] . " days’ notice in writing to the non-traveling parent.  For out-of-state travel, at least " . $this->responses['daysNotifyOutside'] . " days prior to departure (or " . $this->responses['dayNotifyHawaii'] . " days prior to departure for in-state travel), the traveling parent shall provide the non-traveling parent full details regarding the trip including: (a) airline; flight number; dates and times of each flight leg; (b) the dates and times the traveling parent and the Child(ren) will be staying in each hotel, residence, etc.; and (c) if the Child(ren) are going to be traveling with others, the names of the other travelers.  If the traveling parent does not provide this information, the trip shall not occur.   </w:t>
              </w:r>
            </w:p>
            <w:p w14:paraId='5F01A48D' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:pBdr>
                  <w:top w:val='nil'/>
                  <w:left w:val='nil'/>
                  <w:bottom w:val='nil'/>
                  <w:right w:val='nil'/>
                  <w:between w:val='nil'/>
                </w:pBdr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='720'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:r>
                <w:t xml:space='preserve'>Parents shall alternate having the first choice for dates for off-island travel during the Child(ren)’s summer vacations each year.  In even years, " . $this->responses['partyAFirst'] . " shall have first choice for dates of travel so long as they provide those specific dates in writing to " . $this->responses['partyBFirst'] . " by no later than " . $this->responses['dateANotify'] . " of that same year.  In odd years, " . $this->responses['partyBFirst'] . " shall have first choice for dates of travel so long as they provide the specific dates in writing to " . $this->responses['partyAFirst'] . " by no later than " . $this->responses['dateBNotify'] . " of that same year. If either parent wishes to take the Child(ren) out of the country or miss any school days </w:t>
              </w:r>
              <w:proofErr w:type='gramStart'/>
              <w:r>
                <w:t>in order to</w:t>
              </w:r>
              <w:proofErr w:type='gramEnd'/>
              <w:r>
                <w:t xml:space='preserve'> travel, such a trip shall require the non-traveling parent’s consent which, if such requests are occasional, shall not be unreasonably withheld. Parents agree that off-island travel shall not negatively impact the Child(ren)’s education.</w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_05() {
        $content = "<w:p w14:paraId='5D12AD68' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='59' w:name='PhysicalCustodyRescheduling'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.05</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: RESCHEDULING AND MAKE-UP TIME</w:t>
              </w:r>
              <w:r>
                <w:t>.</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:color w:val='333333'/>
                </w:rPr>
                <w:t xml:space='preserve'>  </w:t>
              </w:r>
              <w:bookmarkEnd w:id='59'/>
              <w:r>
                <w:rPr>
                  <w:color w:val='333333'/>
                </w:rPr>
                <w:t xml:space='preserve'>If a Parent is faced with an unexpected situation such as illness or a </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:color w:val='333333'/>
                </w:rPr>
                <w:lastRenderedPageBreak/>
                <w:t xml:space='preserve'>death in the family, or an irregular event like a family wedding, the other Parent will make every effort to accommodate a request for a change in the </w:t>
              </w:r>
              <w:r>
                <w:t>schedule. If the change in the schedule results in the Child(ren) missing considerable time with the accommodating parent, reasonable “make-up time” will be arranged by the Parents.</w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_06() {
        $content = "<w:p w14:paraId='3093561C' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='60' w:name='PhysicalCustodyROFR'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.06</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: RIGHT OF FIRST REFUSAL</w:t>
              </w:r>
              <w:bookmarkEnd w:id='60'/>
              <w:r>
                <w:t>.</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t xml:space='preserve'>  </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:color w:val='333333'/>
                </w:rPr>
                <w:t>We agree that if a Parent is unable to care for the Child(ren) themselves for a period of more than " . $this->responses['refusalHours'] . "</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'> [insert number of hours]</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:color w:val='333333'/>
                </w:rPr>
                <w:t xml:space='preserve'> hours during their time with the Child(ren), they shall notify the other Parent and give them the opportunity to spend the period for which childcare is required with the Child(ren). </w:t>
              </w:r>
              <w:r>
                <w:t>If the non-custodial Parent cannot accommodate the request, the custodial Parent is responsible for arranging and paying for alternate childcare and will inform the other Parent of who will be caring for the Child(ren).</w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_07() {
        $content = "<w:p w14:paraId='1F5B3628' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='61' w:name='PhysicalCustodyPickupNonSchool'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.07</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: PICK-UP FOR NON-SCHOOL EXCHANGES</w:t>
              </w:r>
              <w:bookmarkEnd w:id='61'/>
              <w:r>
                <w:t>. If possible, exchanges shall occur at school provided however, that if exchanges are not during school pick-ups or drop offs, then the Parents receiving the Child(ren) for custodial time shall pick-up the Child(ren) from the other
                  Parent.
                </w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_08() {
        $content = "<w:p w14:paraId='09396909' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='62' w:name='PhysicalCustodyDropOffNonSchool'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.08</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: DROP OFF FOR NON-SCHOOL EXCHANGES</w:t>
              </w:r>
              <w:bookmarkEnd w:id='62'/>
              <w:r>
                <w:t xml:space='preserve'>.  If possible, exchanges shall occur at school provided however, that if exchanges are not during school pick-ups or drop offs, then the Parents relinquishing the Child(ren) for custodial time shall drop off the Child(ren) to the other Parent. </w:t>
              </w:r>
              <w:r>
                <w:tab/>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_09() {
        $content = "<w:p w14:paraId='7A7F4333' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
              </w:pPr>
              <w:bookmarkStart w:id='63' w:name='PhyscialCustodyNeutralLocation'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.09</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: EXCHANGES AT A NEUTRAL LOCATION</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'>.  </w:t>
              </w:r>
              <w:bookmarkEnd w:id='63'/>
              <w:r>
                <w:t xml:space='preserve'>If possible, exchanges shall occur at school provided however, that if exchanges are not during school pick-ups or drop offs, Parents agree to exchange the child at the following neutral </w:t>
              </w:r>
              <w:proofErr w:type='gramStart'/>
              <w:r>
                <w:t>location _</w:t>
              </w:r>
              <w:proofErr w:type='gramEnd'/>
              <w:r>
                <w:t>" . $this->responses['exchangesNeutral'] . ".</w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_10() {
        $content = "<w:p w14:paraId='7F41FFEC' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
                <w:rPr>
                  <w:b/>
                </w:rPr>
              </w:pPr>
              <w:bookmarkStart w:id='64' w:name='PhyscialCustodyDelgationPickupDropOff'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.10</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: PARENTAL AUTHORITY TO DELEGATE PICK-UP AND DROP OFF THE CHILD(REN</w:t>
              </w:r>
              <w:bookmarkEnd w:id='64'/>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>)</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'>.  </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:color w:val='333333'/>
                </w:rPr>
                <w:t xml:space='preserve'>If it is not possible for </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:color w:val='333333'/>
                </w:rPr>
                <w:lastRenderedPageBreak/>
                <w:t>" . $this->responses['partyAFirst'] . " or " . $this->responses['partyBFirst'] . " to pick up or drop off the Child(ren) as provided for in the parenting time arrangement, the Parent who is responsible for the pick-up or drop off may delegate another person to pick up or drop off the Child(ren).
                </w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_11() {
        $content = "<w:p w14:paraId='2203FF71' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
                <w:rPr>
                  <w:color w:val='333333'/>
                </w:rPr>
              </w:pPr>
              <w:bookmarkStart w:id='65' w:name='PhyscialCustodyAuthorizatioPickupDropOff'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.11</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: PERSONS AUTHORIZED TO PICK-UP AND DROP OFF THE CHILD(REN</w:t>
              </w:r>
              <w:bookmarkEnd w:id='65'/>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>)</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'>. </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:color w:val='333333'/>
                </w:rPr>
                <w:t>If it is not possible for " . $this->responses['partyAFirst'] . " or " . $this->responses['partyBFirst'] . " to pick up or drop off the Child(ren) as provided for in the parenting time arrangement, the following people may pick up or drop off the Child(ren): " . $this->responses['personsAuthorized'] . ".
                </w:t>
              </w:r>
            </w:p>"; //only one person has been implemented so far
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_12() {
        $content = "<w:p w14:paraId='0E6B4B86' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
                <w:rPr>
                  <w:b/>
                </w:rPr>
              </w:pPr>
              <w:bookmarkStart w:id='66' w:name='PhyscialCustodyChildBelongings'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.12</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: CHILD(REN)’S PERSONAL BELONGINGS</w:t>
              </w:r>
              <w:r>
                <w:t>.</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:color w:val='333333'/>
                </w:rPr>
                <w:t xml:space='preserve'> </w:t>
              </w:r>
              <w:bookmarkEnd w:id='66'/>
              <w:r>
                <w:rPr>
                  <w:color w:val='333333'/>
                </w:rPr>
                <w:t xml:space='preserve'>Child(ren) often have favorite clothing, toys, or communication devices that they would like to have with them, wherever they are living. Even if these are gifts from one parent, it is normally appropriate to recognize the Child(ren)’s attachments and rights to personal property. If there is potential for conflict on this issue, it can be important to be clear about where the Child(ren) may take these items and communicate this directly to the other Parent.  </w:t>
              </w:r>
              <w:r>
                <w:t>Child(ren) may take personal items (for example, clothing, toys, sports equipment, cell phone, regardless of which Parent purchased these items), between the homes of " . $this->responses['parentAFirst'] . " and " . $this->responses['parentBFirst'] . ". Parents will not restrict the Child(ren)'s
                  ability to take these items between homes. Parents will each have toiletries, pajamas and as many belongings as possible for the Child(ren) in their homes. These items will not travel back and forth.
                </w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_13() {
        $content = "<w:p w14:paraId='453D135E' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
                <w:rPr>
                  <w:b/>
                </w:rPr>
              </w:pPr>
              <w:bookmarkStart w:id='67' w:name='PhyscialCustodyRelocation'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.13</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: RELOCATION</w:t>
              </w:r>
              <w:bookmarkEnd w:id='67'/>
              <w:r>
                <w:t>.</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t xml:space='preserve'>  </w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'>If either Parent intends to relocate away from the island of their current residences or outside of the State where they currently reside, then the moving Parent shall provide the other Parent at least " . $this->responses['relocationDays'] . " (" . $this->responses['relocationDays'] . ") days’ notice of their intent to move.  After receiving notice of an intent to relocate, Parents shall meet and review this </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>Co-Parenting Plan:</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'> </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>Agreement Regarding Child Custody, Timesharing, and Support</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'> to try to mutually agree on a modified plan they feel is in the best interests of the Child(ren). </w:t>
              </w:r>
              <w:proofErr w:type='gramStart'/>
              <w:r>
                <w:t>In the event that</w:t>
              </w:r>
              <w:proofErr w:type='gramEnd'/>
              <w:r>
                <w:t xml:space='preserve'> Parents cannot reach </w:t>
              </w:r>
              <w:r>
                <w:lastRenderedPageBreak/>
                <w:t xml:space='preserve'>an agreement, the Child(ren) shall remain with the non-moving parent until Parents are able to mutually agree or further order of the Court.  </w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
    }
    function gen_physical_custody_timesharing_6_14() {
        $content = "<w:p w14:paraId='531CE61F' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='0' w:right='36' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='68' w:name='PhyscialCustodyModofSchedule'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>6.14</w:t>
              </w:r>
              <w:r>
                <w:tab/>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>PHYSICAL CUSTODY AND TIMESHARING: MODIFICATION OF SCHEDULE BY AGREEMENT OF BOTH PARENTS</w:t>
              </w:r>
              <w:bookmarkEnd w:id='68'/>
              <w:r>
                <w:t>. While both Parents agree and intend that it is a priority to maintain stability and consistency in the life of their Child(ren), they understand that they have the power to modify the foregoing schedule at any time. Parents shall
                  continue to work out the details of the Child(ren)’s schedules based on what is reasonable under the circumstances, mutually agreed to, and deemed in the best interest of the Child(ren). The foregoing schedule may be modified upon mutual
                  agreement of the Parents in writing (text or e-mail is sufficient).
                </w:t>
              </w:r>
            </w:p>";
        echo $content;
        $this->fileContentString .= $content;
    } // End of section 4: Physical custody and Timesharing

	//Communication section
	function gen_communication_7() 
	{
		$snippet = "<w:p w14:paraId='3D84B06F' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='69' w:name='Communication'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>7.00</w:t>
		</w:r>
		<w:r>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>COMMUNICATION</w:t>
		</w:r>
		<w:bookmarkEnd w:id='69'/>
		<w:r>
			<w:t>.  Parents agree and understand that communication between Co-Parents is critical to their Child(ren)’s well-being.  Parents shall work together to agree on what information needs to be communicated to the other Parent in a timely manner and, at a minimum agree, that the following shall be communicated:</w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='26715F81' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='1'/>
				<w:numId w:val='4'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:tabs>
				<w:tab w:val='left' w:pos='1080'/>
			</w:tabs>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='720'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:t>A child is sick.</w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='66698EC9' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='1'/>
				<w:numId w:val='4'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:tabs>
				<w:tab w:val='left' w:pos='1080'/>
			</w:tabs>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='720'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:t>A child is missing school.</w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='7A979453' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='1'/>
				<w:numId w:val='4'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:tabs>
				<w:tab w:val='left' w:pos='1080'/>
			</w:tabs>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='720'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:t>A child will be spending the night somewhere other than the custodial parent’s home.</w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='24223628' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='1'/>
				<w:numId w:val='4'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:tabs>
				<w:tab w:val='left' w:pos='1080'/>
			</w:tabs>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='720'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:t>A pet belonging to a child is missing, dying, or new.</w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='4F8455B3' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='1'/>
				<w:numId w:val='4'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:tabs>
				<w:tab w:val='left' w:pos='1080'/>
			</w:tabs>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='720'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:t>An individual, other than the parent or subject child(ren), is moving into the custodial parent’s home or property (includes long-term tenants).</w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='22D8A492' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='1'/>
				<w:numId w:val='4'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:tabs>
				<w:tab w:val='left' w:pos='1080'/>
			</w:tabs>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='720'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:t>An individual other than a parent is transporting a child (those authorized to transport the Child(ren) shall be agreed upon in advance in writing).</w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='6C2E4822' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='1'/>
				<w:numId w:val='4'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:tabs>
				<w:tab w:val='left' w:pos='1080'/>
			</w:tabs>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='720'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:lastRenderedPageBreak/>
			<w:t>An individual other than a parent is caring a child when the custodial parent is not present (those authorized to care for the children shall be agreed upon in advance in writing).</w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='46922B0D' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='1'/>
				<w:numId w:val='4'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:tabs>
				<w:tab w:val='left' w:pos='1080'/>
			</w:tabs>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='720'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:t xml:space='preserve'>Discipline of a child during one parent’s timesharing day which may affect the other parent’s timesharing.  </w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}
	function gen_communication_7_01() 
	{
		$snippet = "<w:p w14:paraId='708A5E5F' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='70' w:name='CommunicationEmailOnly'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>7.01</w:t>
		</w:r>
		<w:r>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>COMMUNICATION BETWEEN CO-PARENTS: E-MAIL ONLY</w:t>
		</w:r>
		<w:bookmarkEnd w:id='70'/>
		<w:r>
			<w:t xml:space='preserve'>. Parents shall communicate primarily through e-mail.  The Parents may utilize text or telephone calls in </w:t>
		</w:r>
		<w:proofErr w:type='gramStart'/>
		<w:r>
			<w:t>an emergency situation</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd'/>
		<w:r>
			<w:t xml:space='preserve'> or in the event a timely response is needed (within 2 – 4 hours).  Otherwise, all communication shall be via e-mail.  Both Parents shall check their e-mail at least once daily and shall respond to messages or other items needing attention (</w:t>
		</w:r>
		<w:proofErr w:type='gramStart'/>
		<w:r>
			<w:t>i.e.</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd'/>
		<w:r>
			<w:t xml:space='preserve'> switch requests) within 48 hours.  If more time is needed to respond, the receiving parent shall acknowledge the message and provide a timeline in which a response shall be provided.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}

	function gen_communication_7_02() 
	{
		$snippet = "<w:p w14:paraId='07535BC0' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='71' w:name='CommunicationEmailandTextOnly'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>7.02</w:t>
		</w:r>
		<w:r>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>COMMUNICATION BETWEEN CO-PARENTS: E-MAIL AND TEXT ONLY</w:t>
		</w:r>
		<w:bookmarkEnd w:id='71'/>
		<w:r>
			<w:t xml:space='preserve'>. Parents shall communicate primarily through e-mail and text.  The Parents may utilize telephone calls in </w:t>
		</w:r>
		<w:proofErr w:type='gramStart'/>
		<w:r>
			<w:t>an emergency situation</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd'/>
		<w:r>
			<w:t xml:space='preserve'> or in the event a timely response is needed (within 2 – 4 hours).  Otherwise, all communication shall be via e-mail or text.  Both Parents shall check their e-mail and texts at least once daily and shall respond to messages or other items needing attention (</w:t>
		</w:r>
		<w:proofErr w:type='gramStart'/>
		<w:r>
			<w:t>i.e.</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd'/>
		<w:r>
			<w:t xml:space='preserve'> switch requests) within 48 hours.  If more time is needed to respond, the receiving parent shall acknowledge the message and provide a timeline in which a response shall be provided.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}
	function gen_communication_7_03() 
	{
		$snippet = "<w:p w14:paraId='23F38455' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='72' w:name='CommunicationOurFamilyWizard'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>7.03</w:t>
		</w:r>
		<w:r>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>COMMUNICATION BETWEEN CO-PARENTS: OUR FAMILY WIZARD OR OTHER MUTUALLY AGREED UPON PARENTING COMMUNICATION APPLICATION</w:t>
		</w:r>
		<w:r>
			<w:t>.</w:t>
		</w:r>
		<w:bookmarkEnd w:id='72'/>
		<w:r>
			<w:t xml:space='preserve'> Parents shall communicate solely through Our Family Wizard or other mutually agreed upon parenting communication application.  Both Parents shall sign up for Our Family Wizard or other mutually agreed upon parenting communication application within ten (10) days of the date the last party signs this Agreement and shall maintain an account with said program.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}
	function gen_communication_7_04() 
	{
		$snippet = "<w:p w14:paraId='50287177' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='73' w:name='CommunicationMonthlyConference'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:lastRenderedPageBreak/>
			<w:t>7.04</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>COMMUNICATION BETWEEN CO-PARENTS: MONTHLY CONFERENCE</w:t>
		</w:r>
		<w:bookmarkEnd w:id='73'/>
		<w:r>
			<w:t>.</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'> Parents shall meet monthly to discuss the children’s development and needs including education, health, well-being, extracurricular activities, scheduling issues, travel and any other issues pertaining to their child(ren).  Conferences shall be on the first <span style='background:yellow'>" . $this->responses["insertmonthly"] . "</span></w:t>
		</w:r>
		<w:proofErr w:type='gramStart'/>
		<w:r>
			<w:t>_  [</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd'/>
		<w:r>
			<w:t xml:space='preserve'>insert day of the week] of each month unless mutually agreed to otherwise. Meetings may be via in-person, video conference or telephone calls, as mutually agreed by the Parents.  This requirement for monthly conferences between Parents shall end upon each child’s eighteenth (18th) birthday, or as mutually agreed by the Parents.  </w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}
	function gen_communication_7_05() 
	{
		$snippet = "<w:p w14:paraId='3A95D219' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='74' w:name='CommunicationSemiAnnualConference'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>7.05</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>COMMUNICATION BETWEEN CO-PARENTS: SEMI-ANNUAL CONFERENCE</w:t>
		</w:r>
		<w:bookmarkEnd w:id='74'/>
		<w:r>
			<w:t xml:space='preserve'>. Parents shall meet and confer twice annually by no later than <span sytle='background:yellow'>" . $this->responses["semidate1"] . "</span> [insert date] and <span sytle='background:yellow'>" . $this->responses["semidate2"] . "</span> [insert date] every year.  Meetings may be via in-person, video conference or telephone calls, as mutually agreed by the Parents.  This requirement for bi-annual conferences between Parents shall end upon each child’s eighteenth (18th) birthday, or as mutually agreed by the Parents.  </w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}
	function gen_communication_7_06() 
	{
		$snippet = "<w:p w14:paraId='20A9EA31' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='75' w:name='CommunicationAnnualConference'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>7.06</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>COMMUNICATION BETWEEN CO-PARENTS: ANNUAL CONFERENCE</w:t>
		</w:r>
		<w:bookmarkEnd w:id='75'/>
		<w:r>
			<w:t>.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}
	function gen_communication_7_06a() 
	{
		$snippet = "<w:p w14:paraId='318A1CDD' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:t>Parents shall meet and confer annually by no later than <span syle='background:yellow'>" . $this->responses["annuldate"] . "</span> [insert date] every year.  Meetings may be via in-person, video conference or telephone calls, as mutually agreed by the Parents.  This requirement for annual conferences between Parents shall end upon each child’s eighteenth (18th) birthday, or as mutually agreed by the Parents.</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t xml:space='preserve'> </w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}
	function gen_communication_7_07() 
	{
		$snippet = "<w:p w14:paraId='1A821391' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='76' w:name='CommunicationUnlimited'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>7.07</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>COMMUNICATION BETWEEN CHILD(REN) AND NON-CUSTODIAL PARENT: UNLIMITED</w:t>
		</w:r>
		<w:bookmarkEnd w:id='76'/>
		<w:r>
			<w:t xml:space='preserve'>.  </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>During the regular parenting time schedule, the child may contact each parent whenever they wish.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}
	function gen_communication_7_08() 
	{
		$snippet = "<w:p w14:paraId='0B356DE2' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='77' w:name='CommunicationSpecific'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>7.08</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>COMMUNICATION BETWEEN CHILD(REN) AND NON-CUSTODIAL PARENT: SPECIFIC</w:t>
		</w:r>
		<w:bookmarkEnd w:id='77'/>
		<w:r>
			<w:t xml:space='preserve'>. </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>During the regular parenting time schedule, Parent A may call the child between <span syle='background:yellow'>" . $this->responses["A9:00"] . "</span> and <span syle='background:yellow'>" . $this->responses["A17:00"] . "</span> when they are with Parent B and Parent B may call the child between <span syle='background:yellow'>" . $this->responses["B09:00"] . "</span> and <span syle='background:yellow'>" . $this->responses["B17:00"] . "</span> when they are with Parent A. Calls will normally be no more than 10 minutes.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}
	function gen_communication_7_09() 
	{
		$snippet = "<w:p w14:paraId='1BC5202A' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='78' w:name='CommunicationExchangeofContactInfo'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:lastRenderedPageBreak/>
			<w:t xml:space='preserve'>7.08 </w:t>
		</w:r>
		<w:r>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>COMMUNICATION:  EXCHANGE OF CONTACT INFORMATION</w:t>
		</w:r>
		<w:bookmarkEnd w:id='78'/>
		<w:r>
			<w:t xml:space='preserve'>.  </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>Parents shall provide to the other Parent with updated telephone number(s), email address, and home address. Parents agree that if this contact information changes, they shall provide the new contact information to the other Parent immediately.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}
	function gen_communication_7_10() 
	{
		$snippet = "<w:p w14:paraId='746FB369' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='79' w:name='CommunicationSchedulingExtracurricular'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>7.09</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>COMMUNICATION: SCHEDULING EXTRACURRICULAR ACTIVITIES FOR THE CHILD(REN)</w:t>
		</w:r>
		<w:bookmarkEnd w:id='79'/>
		<w:r>
			<w:t xml:space='preserve'>.  Both Parents understand that reasonable extracurricular activities are healthy and appropriate outlets for our Child(ren).  Both Parents understand that selecting extracurricular activities for the Child(ren) is a legal custody decision. </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t xml:space='preserve'>Neither of us will schedule extra-curricular activities during the time the Child(ren) is to be living with or in the care of the other </w:t>
		</w:r>
		<w:proofErr w:type='gramStart'/>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t xml:space='preserve'>Parent, unless</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd'/>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t xml:space='preserve'> the other Parent agrees.</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t xml:space='preserve'>  </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>The other Parent shall not unreasonably withhold their agreement.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}
	function gen_communication_7_11() 
	{
		$snippet = "<w:p w14:paraId='7C42C045' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='80' w:name='CommunicationSelectingExtracurricular'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>7.10</w:t>
		</w:r>
		<w:r>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>COMMUNICATION: SELECTING EXTRACURRICULAR ACTIVITIES FOR THE CHILD(REN)</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'>.  </w:t>
		</w:r>
		<w:bookmarkEnd w:id='80'/>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>Each Parent may select and pay for one extra-curricular activity that occurs no more than once a week for each Child, and the other Parent shall be expected to take each Child to that activity and support the Child’s participation during the time that the Child is in their care.</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'>  </w:t>
		</w:r>
	</w:p>";
		echo $snippet;
		$this->fileContentString .= $snippet;
	}

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
	function gen_other_9_00() 
	{
		$snippet = "<w:p w14:paraId='587EA373' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:left='0' w:right='36' w:firstLine='0'/>
			<w:jc w:val='center'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES:</w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='0D515AEE' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='128' w:name='OtherIssuesCoParentingCounseling'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.00</w:t>
		</w:r>
		<w:r>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: CO-PARENT COUNSELING</w:t>
		</w:r>
		<w:bookmarkEnd w:id='128'/>
		<w:r>
			<w:t xml:space='preserve'>.  Parents agree to engage<span style='background:yellow'>" . $this->responses["therapistInput9.00"] . "</span> (name), or other mutually selected licensed mental health professional, as a Co-Parent Counselor to assist them in collaboratively </w:t>
		</w:r>
		<w:r>
			<w:lastRenderedPageBreak/>
			<w:t>parenting the Child(ren).  Both Parents shall continue in Co-Parent Counseling until clinically discharged or upon the mutual agreement of both Parents.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_01() 
	{
		$snippet = "<w:p w14:paraId='051A225F' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='129' w:name='OtherIssuesChildFocusedTherapist'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.01</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: CHILD-FOCUSED THERAPIST</w:t>
		</w:r>
		<w:bookmarkEnd w:id='129'/>
		<w:r>
			<w:t>.  Parents agree to <span style='background:yellow'>" . $this->responses["therapistInput9.01"] . "</span> (name), or other mutually selected licensed mental health professional, as a Child-Focused Therapist for Child(ren).  Both parents shall have access to the child therapist and shall participate in therapy and/or engage with the Child-Focused Therapist at the therapist’s discretion.  Parents shall alternate taking the Child(ren) to therapy.  Parents agree that the Child(ren) shall continue in therapy as needed and upon the schedule recommended by the therapist with input from the Child(ren) until clinically discharged.  If mutually agreed, parent may jointly select a new therapist for Child(ren).  Unless they have sole legal custody of the Child(ren), neither Parent may unilaterally terminate child therapy without the other Parent’s consent.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_02() 
	{
		$snippet = "<w:p w14:paraId='56A55C0B' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='130' w:name='OtherIssuesSocialMediaBetweenParents'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.02</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: SOCIAL MEDIA BETWEEN PARENTS</w:t>
		</w:r>
		<w:bookmarkEnd w:id='130'/>
		<w:r>
			<w:t xml:space='preserve'>.  Neither Parent shall post any pictures of the other Parent on social media nor make any derogatory comment about the other Parent on social media.  </w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_03() 
	{
		$snippet = "<w:p w14:paraId='20C9016B' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='131' w:name='OtherIssuesSocialMediaForChild'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.03</w:t>
		</w:r>
		<w:r>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: SOCIAL MEDIA FOR CHILD(REN</w:t>
		</w:r>
		<w:bookmarkEnd w:id='131'/>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>)</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'>.  Parents agree that none of their Child(ren) shall have access to any social media platform until they reach thirteen (13) years of age, and thereafter both Parents shall monitor any Child’s social media usage to ensure that it is safe and does not cause embarrassment to either Parent or the Child. </w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_04() 
	{
		$snippet = "<w:p w14:paraId='5A481D2B' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='132' w:name='OtherIssuesJointTeacherMeeting'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.04</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: JOINT PARENT-TEACHER MEETINGS</w:t>
		</w:r>
		<w:bookmarkEnd w:id='132'/>
		<w:r>
			<w:t>.</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t xml:space='preserve'>  Parents agree that it is in their Child(ren)’s best interests that they both attend parent-teacher meetings together.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_05() 
	{
		$snippet = "<w:p w14:paraId='1B93D669' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='133' w:name='OtherIssuesSeperateTeacherMeeting'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.05</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: SEPARATE PARENT-TEACHER MEETINGS</w:t>
		</w:r>
		<w:bookmarkEnd w:id='133'/>
		<w:r>
			<w:t>.</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t xml:space='preserve'>  Parents agree </w:t>
		</w:r>
		<w:r>
			<w:t>that they</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t xml:space='preserve'> will each arrange our own separate parent-teacher meetings.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_06() 
	{
		$snippet = "<w:p w14:paraId='1195412E' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='134' w:name='OtherIssuesOneParentTeacherMeeting'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>06</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: ONE PARENT TO ATTEND PARENT-TEACHER MEETINGS</w:t>
		</w:r>
		<w:bookmarkEnd w:id='134'/>
		<w:r>
			<w:t>.</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>Parent A/B will attend all parent-teacher meetings and will advise <span style='background:yellow'>" . $this->responses["9.06"] . "</span>/A of the Child(ren)'s progress.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_07() 
	{
		$snippet = "<w:p w14:paraId='25F23CAE' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='135' w:name='OtherIssuesReportCard'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:lastRenderedPageBreak/>
			<w:t>9.</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>07</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: REPORT CARDS FOR THE CHILD(REN</w:t>
		</w:r>
		<w:bookmarkEnd w:id='135'/>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>)</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>.  Both Parents will be provided with separate report cards for the Child(ren). Parents shall notify the school authorities to provide separate report cards.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_08() 
	{
		$snippet = "<w:p w14:paraId='590EB72D' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='136' w:name='OtherIssuesJointAttendance'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>08</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: JOINT ATTENDANCE AT SCHOOL AND EXTRACURRICULAR EVENTS</w:t>
		</w:r>
		<w:bookmarkEnd w:id='136'/>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>.  Both Parents may attend school events and extra-curricular activities.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_09() 
	{
		$snippet = "<w:p w14:paraId='24961CA1' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:i/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='137' w:name='_heading=h.30j0zll' w:colFirst='0' w:colLast='0'/>
		<w:bookmarkStart w:id='138' w:name='OtherIssuesOneParentExtracurricular'/>
		<w:bookmarkEnd w:id='137'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>09</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: CUSTODIAL PARENT TO ATTEND SCHOOL AND EXTRACURRICULAR EVENTS</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t xml:space='preserve'>.  </w:t>
		</w:r>
		<w:bookmarkEnd w:id='138'/>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>The Parent with whom the Child(ren) is/are residing at the time of the school event and extracurricular activity will be the sole Parent to attend these events.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_10() 
	{
		$snippet = "<w:p w14:paraId='2DD519D1' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:b/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='139' w:name='OtherIssuesAlternateAttendance'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.10</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: ALTERNATE ATTENDANCE AT SCHOOL AND EXTRACURRICULAR EVENTS</w:t>
		</w:r>
		<w:bookmarkEnd w:id='139'/>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>.  Parent shall alternate attending the Child(ren)’s school events and extracurricular activities.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_11() 
	{
		$snippet = "<w:p w14:paraId='634C2BC8' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='140' w:name='OtherIssuesDocuments'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.11</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: DOCUMENTS</w:t>
		</w:r>
		<w:bookmarkEnd w:id='140'/>
		<w:r>
			<w:t xml:space='preserve'>.  </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t xml:space='preserve'><span style='background:yellow'>" . $this->responses["parentABdoc_Other"] . "</span>/B will keep the original passport issued in the Child(ren)'s name, their social security card, birth certificate, and [insert any other relevant documents] at their home, and these documents will be made available to <span style='background:yellow'>" . $this->responses["parentABdoc_Other2"] . "</span>/A as needed. Both Parents shall have copies of </w:t>
		</w:r>
		<w:proofErr w:type='gramStart'/>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>all of</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd'/>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t xml:space='preserve'> the important documents.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_12() 
	{
		$snippet = "<w:p w14:paraId='7C389515' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='141' w:name='OtherIssuesJointConsentPassport'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.12</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: JOINT AUTHORITY TO CONSENT FOR PASSPORT</w:t>
		</w:r>
		<w:bookmarkEnd w:id='141'/>
		<w:r>
			<w:t xml:space='preserve'>.  </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>Parent A and Parent B must both consent for the purposes of a passport application for any Child.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_13() 
	{
		$snippet = "<w:p w14:paraId='21BC4962' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='142' w:name='OtherIssuesSoleConsentPassport'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.13</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: SOLE AUTHORITY TO CONSENT FOR PASSPORT</w:t>
		</w:r>
		<w:bookmarkEnd w:id='142'/>
		<w:r>
			<w:t xml:space='preserve'>.  </w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
			<w:t>Parent <span style='background:yellow'>" . $this->responses["parentAB_Other3"] . "</span> can apply for the passport for a Child without the consent of <span style='background:yellow'>" . $this->responses["parentAB_Other4"] . "</span>/A.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_14() 
	{
		$snippet = "<w:p w14:paraId='4F57E6BA' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
			<w:rPr>
				<w:color w:val='333333'/>
			</w:rPr>
		</w:pPr>
		<w:bookmarkStart w:id='143' w:name='OtherIssuesNewIntimatePartnerLD'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.14</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: NEW INTIMATE PARTNER PROTOCOLS (LESS DETAILED)</w:t>
		</w:r>
		<w:r>
			<w:t xml:space='preserve'>.  </w:t>
		</w:r>
		<w:bookmarkEnd w:id='143'/>
		<w:r>
			<w:t xml:space='preserve'>Both parents agree that they shall not introduce any of their minor children to a new significant other or intimate partner until (a) they have been in an intimate dating relationship for six (6) months or longer and (b) the other parent has been given an opportunity to meet that significant other/intimate partner first.  Parents shall be guided by the children’s best interests and conflict </w:t>
		</w:r>
		<w:r>
			<w:lastRenderedPageBreak/>
			<w:t>minimization in determining a reasonable compromise on any issues arising from this provision. If parents cannot agree, they shall consult with and engage mutually acceptable therapist or other mental health professional informed and guided by their recommendations. Unless otherwise agreed upon in writing, neither parent shall be allowed to travel with the children and their significant other/intimate partner unless or until that parent has, in fact, married their new partner.  This plan is subject to further review based on the best interests of the children and their observed reactions and behaviors throughout any introduction process.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_15() 
	{
		$snippet = "<w:p w14:paraId='7A3B5B43' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='144' w:name='OtherIssuesNewIntimatePartnerMD'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.15</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: NEW INTIMATE PARTNER PROTOCOLS (MORE DETAILED)</w:t>
		</w:r>
		<w:bookmarkEnd w:id='144'/>
		<w:r>
			<w:t xml:space='preserve'>.  Given that both parents will likely engage in new intimate partner relationships in the future, it is their intent that the children’s well-being, </w:t>
		</w:r>
		<w:proofErr w:type='gramStart'/>
		<w:r>
			<w:t>comfort</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd'/>
		<w:r>
			<w:t xml:space='preserve'> and stability remain the highest priority.  Both parents agree to be respectful of one another and guided by the following concepts and protocols: </w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='5229168B' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='0'/>
				<w:numId w:val='1'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:r>
			<w:t>Take an honest look at the relationship.  If you are just having fun enjoying a new person’s company but know there is no long-term potential, it is probably best not to introduce the children to a new intimate partner.</w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='0D52C06B' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='0'/>
				<w:numId w:val='1'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:r>
			<w:t xml:space='preserve'>Your relationship shall be well-established and stable prior to initiating these new intimate partner protocols.  The Parents shall discuss the appropriate timing and circumstances in which the children should formally meet a new intimate partner and be told that the nature of the relationship is romantic.  It is understood that the children may </w:t>
		</w:r>
		<w:proofErr w:type='gramStart'/>
		<w:r>
			<w:t>come into contact with</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd'/>
		<w:r>
			<w:t xml:space='preserve'> the new intimate partner in advance, but the actual introduction of this new person as a romantic relationship shall not occur before the Parents are able to discuss the circumstances in co-parent counseling.  </w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='3AAC8E41' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='0'/>
				<w:numId w:val='1'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:r>
			<w:t xml:space='preserve'>The other parent shall be notified in advance of the children and given the opportunity to meet the new intimate partner prior to the </w:t>
		</w:r>
		<w:r>
			<w:lastRenderedPageBreak/>
			<w:t xml:space='preserve'>children being introduced to the new intimate partner and told the nature of the relationship is romantic.  </w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='08DA3519' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='0'/>
				<w:numId w:val='1'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:r>
			<w:t>Parents shall use best practices and judgment when engaging in appropriate public displays of affection with their new intimate partner in front of any of the children.  Parents shall further check in with the children to gauge their comfort with the new intimate partner.  This may be accomplished within a therapeutic process (</w:t>
		</w:r>
		<w:proofErr w:type='gramStart'/>
		<w:r>
			<w:t>e.g.</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd'/>
		<w:r>
			<w:t xml:space='preserve'> check-ins by the co-parent counselor with the child therapist as discussed below). </w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='3633BF9F' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='0'/>
				<w:numId w:val='1'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:r>
			<w:t xml:space='preserve'>New intimate partners, and even </w:t>
		</w:r>
		<w:proofErr w:type='gramStart'/>
		<w:r>
			<w:t>step-parents</w:t>
		</w:r>
		<w:proofErr w:type='gramEnd'/>
		<w:r>
			<w:t>, shall refrain from disciplining the children unless there is an agreement between both parents otherwise</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t xml:space='preserve'>.  </w:t>
		</w:r>
		<w:r>
			<w:t>The Parents shall discuss age-appropriate discipline options for the children.</w:t>
		</w:r>
	</w:p>
	<w:p w14:paraId='7A4B11CC' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:numPr>
				<w:ilvl w:val='0'/>
				<w:numId w:val='1'/>
			</w:numPr>
			<w:pBdr>
				<w:top w:val='nil'/>
				<w:left w:val='nil'/>
				<w:bottom w:val='nil'/>
				<w:right w:val='nil'/>
				<w:between w:val='nil'/>
			</w:pBdr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:r>
			<w:t xml:space='preserve'>In the event there are any problems related to the new intimate partner or these protocols, the Parents shall engage a mental health professional such as a co-parent counselor or family therapist who may also confer with the child therapist to ensure the children’s well-being, comfort and stability remain the highest priority.  </w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	function gen_other_9_16() 
	{
		$snippet = "<w:p w14:paraId='2CF6B38D' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
		<w:pPr>
			<w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
			<w:ind w:right='36'/>
			<w:jc w:val='both'/>
		</w:pPr>
		<w:bookmarkStart w:id='145' w:name='OtherIssuesAlternativeDisputeResolution'/>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:t>9.16</w:t>
		</w:r>
		<w:r>
			<w:rPr>
				<w:b/>
			</w:rPr>
			<w:tab/>
		</w:r>
		<w:r>
			<w:rPr>
				<w:u w:val='single'/>
			</w:rPr>
			<w:t>OTHER ISSUES: ALTERNATIVE DISPUTE RESOLUTION</w:t>
		</w:r>
		<w:bookmarkEnd w:id='145'/>
		<w:r>
			<w:t>.  If there is any disagreement related to this Agreement or any Child-related issues, both Parents agree that they shall engage a mutually selected mediator to help them resolve the issue(s) prior to filing a motion for relief with the Family Court.</w:t>
		</w:r>
	</w:p>";
		echo $snippet;
        $this->fileContentString .= $snippet;
	}
	//End of other section

    //Section 8: Legal
    function gen_legal_10_00() {
        $continuingJurisdiction = "<w:p w14:paraId='0F52E631' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:right='36'/>
                <w:jc w:val='center'/>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
              </w:pPr>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>LEGAL:</w:t>
              </w:r>
            </w:p>
            <w:p w14:paraId='7A55A197' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
                <w:ind w:right='36'/>
                <w:jc w:val='both'/>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
              </w:pPr>
              <w:bookmarkStart w:id='146' w:name='LegalContinuingJurisdiction'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>10.00</w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:tab/>
                <w:t xml:space='preserve'> </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>LEGAL: CONTINUING JURISDICTION</w:t>
              </w:r>
              <w:bookmarkEnd w:id='146'/>
              <w:r>
                <w:t>. Except as otherwise limited by Statute, Court Rule or case authority, the Family Court shall have the ongoing authority and personal and subject matter jurisdiction to make any other just and equitable orders which may be necessary to
                  enforce the intended agreement and specific provisions set forth herein.
                </w:t>
              </w:r>
            </w:p>";
        echo $continuingJurisdiction;
        $this->fileContentString .= $continuingJurisdiction;
    }
    function gen_legal_10_01() {
        $enforcement = "<w:p w14:paraId='42251C1C' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:tabs>
                  <w:tab w:val='left' w:pos='1440'/>
                  <w:tab w:val='right' w:pos='9406'/>
                </w:tabs>
                <w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='147' w:name='LegalEnforcement'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t>10.01</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'> </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>LEGAL: ENFORCEMENT</w:t>
              </w:r>
              <w:bookmarkEnd w:id='147'/>
              <w:r>
                <w:t xml:space='preserve'>.  A Parent who fails to comply with this </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>Co-Parenting Plan: Agreement Regarding Child Custody, Timesharing, and Support</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'> </w:t>
              </w:r>
              <w:r>
                <w:lastRenderedPageBreak/>
                <w:t xml:space='preserve'>shall be liable to the other Parent for all reasonable legal fees and costs incurred and reasonable damages suffered by the other Parent </w:t>
              </w:r>
              <w:proofErr w:type='gramStart'/>
              <w:r>
                <w:t>as a result of</w:t>
              </w:r>
              <w:proofErr w:type='gramEnd'/>
              <w:r>
                <w:t xml:space='preserve'> noncompliance.  The Family Court shall have continuing jurisdiction over the parents and their property to enforce and implement the provisions of the Agreement, to the extent permitted by applicable statutory authority, court rule and/or case law.</w:t>
              </w:r>
            </w:p>";
        echo $enforcement;
        $this->fileContentString .= $enforcement;
    }
    function gen_legal_10_02() {
        $execution = "<w:p w14:paraId='24B43A8F' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
              <w:pPr>
                <w:tabs>
                  <w:tab w:val='left' w:pos='1440'/>
                  <w:tab w:val='right' w:pos='9406'/>
                </w:tabs>
                <w:spacing w:after='0' w:line='360' w:lineRule='auto'/>
                <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
                <w:jc w:val='both'/>
              </w:pPr>
              <w:bookmarkStart w:id='148' w:name='LegalVoluntaryExecution'/>
              <w:r>
                <w:rPr>
                  <w:b/>
                </w:rPr>
                <w:t xml:space='preserve'>10.02 </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>LEGAL: VOLUNTARY EXECUTION</w:t>
              </w:r>
              <w:bookmarkEnd w:id='148'/>
              <w:r>
                <w:t xml:space='preserve'>.  Each Parent acknowledges that they have voluntarily executed this </w:t>
              </w:r>
              <w:r>
                <w:rPr>
                  <w:u w:val='single'/>
                </w:rPr>
                <w:t>Co-Parenting Plan: Agreement Regarding Child Custody, Timesharing, and Support</w:t>
              </w:r>
              <w:r>
                <w:t xml:space='preserve'> with sufficient knowledge of the facts and the law, and that it is fair and reasonable.  Both Parents have been advised to seek independent legal counsel regarding these and all other matters contained herein.</w:t>
              </w:r>
            </w:p>";
        echo $execution;
        $this->fileContentString .= $execution;
    }

    function signature() {
        $signature = new SignatureWord();
        $signatures = $signature->getSignature($this->responses['partyAFirst'], $this->responses['partyBFirst'], $this->responses['partyAResidence'], $this->responses['partyBResidence'], $this->responses['partyAEmail'], $this->responses['partyBEmail'], $this->responses['partyASocial'], $this->responses['partyBSocial'], $this->responses['partyADateSigned'], $this->responses['partyBDateSigned']);
        echo $signatures;
        $this->fileContentString .= $signatures;
    }

    //End of other section
	function packageDocument()
	{
		// Take the template.zip copy it and rename it in the downloads folder
        copy("./Templates/template.zip",$this->fileName . ".zip");
        // Extract the zip
        $zip = new ZipArchive;
        if($zip->open($this->fileName . ".zip"))
        {
            $zip->extractTo($this->fileName);
		// Take the string and write it to document.xml
		}
		$zip->close();
		$documentXML = fopen($this->fileName . "/word/document.xml" , "w+");
        if($documentXML != false)
        {
		    fwrite( $documentXML, $this->fileContentString);
        }
        fclose($documentXML);
		// Zip the folder and rename it to .docx
		$zipOutput = new ZipArchive;
		echo "packaging document";
		if($zipOutput->open($this->fileName . " Coparenting Plan.zip",(ZipArchive::CREATE)))
		{
		    $folderRefsToZip = $this->fileName ."/\_rels/.rels";
		    $folderLevel1ToZip = $this->fileName ."/*.*";
		    $folderLevel2ToZip = $this->fileName ."/*/*.*";
		    $folderLevel3ToZip = $this->fileName ."/*/*/*.*";
		    $zipOutput->addGlob($folderRefsToZip ,ZipArchive::CM_DEFLATE,['remove_path' => $this->fileName]);
		    $zipOutput->addGlob($folderLevel1ToZip ,ZipArchive::CM_DEFLATE,['remove_path' => $this->fileName]);
		    $zipOutput->addGlob($folderLevel2ToZip ,ZipArchive::CM_DEFLATE,['remove_path' => $this->fileName]);
		    $zipOutput->addGlob($folderLevel3ToZip ,ZipArchive::CM_DEFLATE,['remove_path' => $this->fileName]);
		    echo var_dump($zipOutput);
		}
		if ($zipOutput->status != ZIPARCHIVE::ER_OK)
            echo "Failed to write files to zip\n";
		echo $zipOutput->close();

		//rename($this->fileName . " Coparenting Plan.zip",$this->fileName . " Coparenting Plan.docx");
		// Cleanup

	}

}
