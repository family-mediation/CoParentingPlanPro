<?php
class Fall {

    public function get_split(string $parentAFirst, string $parentBFirst): string {
        return "<w:p w14:paraId='0CADBFB1' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:bookmarkStart w:id='32' w:name='PhysicalCustodyFallBreakSB'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02A(</w:t>
      </w:r>
      <w:proofErr w:type='spellStart'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>i</w:t>
      </w:r>
      <w:proofErr w:type='spellEnd'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>)</w:t>
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
        <w:t>SPLIT BREAK</w:t>
      </w:r>
      <w:r>
        <w:t>.</w:t>
      </w:r>
      <w:bookmarkEnd w:id='32'/>
      <w:r>
        <w:t xml:space='preserve'>  In odd years, $parentAFirst shall have the Child(ren) during the first half of the break and $parentBFirst shall have the Child(ren) during the second half of the break.  In even years, $parentBFirst shall have the Child(ren) during the first half of the break and $parentAFirst shall have the Child(ren) during the second half of the break.</w:t>
      </w:r>
    </w:p>";
    }
    public function get_alternate(string $parentAFirst, string $parentBFirst): string {
        return "<w:p w14:paraId='009F9ECE' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:bookmarkStart w:id='33' w:name='PhysicalCustodyFallBreakAB'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02A(ii)</w:t>
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
        <w:t>ALTERNATE BREAK</w:t>
      </w:r>
      <w:bookmarkEnd w:id='33'/>
      <w:r>
        <w:t xml:space='preserve'>.  In odd calendar years, $parentAFirst shall have the entire break.  In even calendar years, $parentBFirst shall have the entire break.   </w:t>
      </w:r>
    </w:p>";
    }
    public function get_continue(): string {
        return "<w:p w14:paraId='069BEC7A' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:u w:val='single'/>
        </w:rPr>
      </w:pPr>
      <w:bookmarkStart w:id='34' w:name='PhysicalCustodyFallBreakContinueSchedule'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:lastRenderedPageBreak/>
        <w:t>6.02A(iii)</w:t>
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
        <w:t>CONTINUE SCHEDULE DURING THE SCHOOL YEAR</w:t>
      </w:r>
      <w:bookmarkEnd w:id='34'/>
      <w:r>
        <w:t>. Parents shall continue the normal during the school year schedule during this break.</w:t>
      </w:r>
    </w:p>";
    }
}
