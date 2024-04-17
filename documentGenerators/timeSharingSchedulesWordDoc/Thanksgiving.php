<?php
class Thanksgiving {
    public function get_split(string $parentAFirst, string $parentBFirst): string {
        return "<w:p w14:paraId='70D84475' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:bookmarkStart w:id='36' w:name='PhysicalCustodyThanksgivingSB'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02B(</w:t>
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
      <w:bookmarkEnd w:id='36'/>
      <w:r>
        <w:t>. In odd years, $parentAFirst shall have the Child(ren) during the first half of the break and $parentBFirst shall have the Child(ren) during the second half of the break. In even years, $parentBFirst shall have the Child(ren) during the first half of
          the break and $parentAFirst shall have the Child(ren) during the second half of the break.
        </w:t>
      </w:r>
    </w:p>";
    }
    public function get_alternate(string $parentAFirst, string $parentBFirst): string {
        return "<w:p w14:paraId='33C72345' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:bookmarkStart w:id='37' w:name='PhysicalCustodyThanksgivingAB'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02B(ii)</w:t>
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
      <w:bookmarkEnd w:id='37'/>
      <w:r>
        <w:t xml:space='preserve'>.  In odd calendar years, $parentAFirst shall have the entire break.  In even calendar years, $parentBFirst shall have the entire break.   </w:t>
      </w:r>
    </w:p>";
    }

    public function get_continue(): string {
        return "<w:p w14:paraId='2ABFDA0B' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:u w:val='single'/>
        </w:rPr>
      </w:pPr>
      <w:bookmarkStart w:id='39' w:name='PhysicalCustodyThanksgivingContinueSched'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02B(iv)</w:t>
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
      <w:r>
        <w:t>.</w:t>
      </w:r>
      <w:bookmarkEnd w:id='39'/>
      <w:r>
        <w:t xml:space='preserve'>  Parents shall continue the normal during the school year schedule during this break.</w:t>
      </w:r>
    </w:p>";
    }

    public function get_time(): string {
        return "<w:p w14:paraId='79A0D95E' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:keepLines/>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:bookmarkStart w:id='38' w:name='PhysicalCustodyThanksgivingTimeonDay'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02B(iii)</w:t>
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
        <w:t>TIME ON THANKSGIVING DAY</w:t>
      </w:r>
      <w:bookmarkEnd w:id='38'/>
      <w:r>
        <w:t xml:space='preserve'>.  Notwithstanding the above, the Parent who does not have the Child(ren) on Thanksgiving Day shall have the right to spend time with the Child(ren) between 12 noon and 3pm on Thanksgiving Day. </w:t>
      </w:r>
    </w:p>";
    }
}
