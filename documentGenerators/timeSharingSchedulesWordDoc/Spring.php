<?php
class Spring {
    public function get_split(string $parentAFirst, string $parentALast, string $parentBFirst, string $parentBLast): string {
        return "<w:p w14:paraId='747688C0' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:bookmarkStart w:id='46' w:name='PhysicalCustodySpringBreakSB'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02D(</w:t>
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
        <w:t xml:space='preserve'>.  </w:t>
      </w:r>
      <w:bookmarkEnd w:id='46'/>
      <w:r>
      <w:t xml:space='preserve'>In odd years, </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentAFirst $parentALast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the Child(ren) during the first half of the break and </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentBFirst $parentBLast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the Child(ren) during the second half of the break. In even years, </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentBFirst $parentBLast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the Child(ren) during the first half of the break and </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentAFirst $parentALast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the Child(ren) during the second half of the break.</w:t>
  </w:r>
  
    </w:p>";
    }
    public function get_alternate(string $parentAFirst, string $parentALast, string $parentBFirst, string $parentBLast): string {
        return "<w:p w14:paraId='0269341A' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:bookmarkStart w:id='47' w:name='PhysicalCustodySpringBreakAB'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02D(ii)</w:t>
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
      <w:bookmarkEnd w:id='47'/>
      <w:r>
      <w:t xml:space='preserve'>.  In odd calendar years, </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentAFirst $parentALast</w:t>
  </w:r>
  <w:r>
      <w:t> shall have the entire break.  In even calendar years, </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentBFirst $parentBLast</w:t>
  </w:r>
  <w:r>
      <w:t> shall have the entire break.</w:t>
  </w:r>
  
    </w:p>";
    }
    public function get_continue(): string {
        return "<w:p w14:paraId='190070C9' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:u w:val='single'/>
        </w:rPr>
      </w:pPr>
      <w:bookmarkStart w:id='48' w:name='PhysicalCustodySpringBreakContinueSched'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02D(iii)</w:t>
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
      <w:bookmarkEnd w:id='48'/>
      <w:r>
        <w:t xml:space='preserve'>  Parents shall continue the normal during the school year schedule during this break.</w:t>
      </w:r>
    </w:p>";
    }
}