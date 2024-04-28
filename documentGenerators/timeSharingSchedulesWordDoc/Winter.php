<?php
class Winter {
    public function get_split(string $parentAFirst, string $parentALast, string $parentBFirst, string $parentBLast): string {
        return "<w:p w14:paraId='6FE23BCB' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:bookmarkStart w:id='41' w:name='PhysicalCustodyWinterBreakSB'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02C(</w:t>
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
      <w:bookmarkEnd w:id='41'/>
      <w:r>
      <w:t xml:space='preserve'>. In odd years, </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentAFirst $parentALast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the Child(ren) during the first half of the break, to include Christmas Eve and Christmas Day, and </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentBFirst $parentBLast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the Child(ren) during the second half of the break, to include New Year’s Eve and New Year’s Day. In even years, </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentBFirst $parentBLast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the Child(ren) during the first half of the break, to include Christmas Eve and Christmas Day, and </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentAFirst $parentALast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the Child(ren) during the second half of the break, to include New Year’s Eve and New Year’s Day.</w:t>
  </w:r>
  
    </w:p>";
    }
    public function get_alternate(string $parentAFirst, string $parentALast, string $parentBFirst, string $parentBLast): string {
        return "<w:p w14:paraId='551CC585' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:bookmarkStart w:id='42' w:name='PhysicalCustodyWinterBreakAB'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:lastRenderedPageBreak/>
        <w:t>6.02C(ii)</w:t>
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
      <w:r>
        <w:t>.</w:t>
      </w:r>
      <w:bookmarkEnd w:id='42'/>
      <w:r>
      <w:t xml:space='preserve'>  In odd calendar years, </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentAFirst $parentALast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the entire break. In even calendar years, </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentBFirst $parentBLast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the entire break.</w:t>
  </w:r>
  
    </w:p>";
    }

    public function get_continue(): string {
        return "<w:p w14:paraId='5EC76FCE' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6</w:t>
      </w:r>
      <w:bookmarkStart w:id='44' w:name='PhysicalCustodyWinterBreakContinueSched'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>.02C(iv)</w:t>
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
      <w:bookmarkEnd w:id='44'/>
      <w:r>
        <w:t>. Parents shall continue the normal during the school year schedule during this break.</w:t>
      </w:r>
    </w:p>";
    }

    public function get_split_break_holidays(string $parentAFirst, $parentALast, string $parentBFirst, $parentBLast, string $christmas_start, string $christmas_end, string $newYears_start, $newYears_end): string {
       // Convert times (prints in miltary format) to AM/PM format
       $christmas_start_am_pm = date("h:i A", strtotime($christmas_start));
       $christmas_end_am_pm = date("h:i A", strtotime($christmas_end));
       $newYears_start_am_pm = date("h:i A", strtotime($newYears_start));
       $newYears_end_am_pm = date("h:i A", strtotime($newYears_end));
      
      return "<w:p w14:paraId='4BD25303' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:b/>
          <w:u w:val='single'/>
        </w:rPr>
      </w:pPr>
      <w:bookmarkStart w:id='43' w:name='PhysicalCustodyWinterBreakSBwithHoliday'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02C(iii)</w:t>
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
        <w:t>SPLIT BREAK WITH HOLIDAY TIME</w:t>
      </w:r>
      <w:bookmarkEnd w:id='43'/>
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
      <w:t xml:space='preserve'>In even years, </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentAFirst $parentALast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the first half of Winter Break to include Christmas Eve and Christmas Day, and </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentBFirst $parentBLast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the second half to include New Year’s Eve and New Year’s Day. In odd years, </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentBFirst $parentBLast</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> shall have the first half of Winter Break to include Christmas Eve and Christmas Day and </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$parentAFirst $parentALast</w:t>
  </w:r>
  <w:r>
      <w:t> shall have the second half, to include New Year’s Eve and New Year’s Day. During their time, either parent may elect to travel with the Child(ren).</w:t>
  </w:r>
  
      <w:proofErr w:type='gramStart'/>
      <w:r>
        <w:t xml:space='preserve'> In the event that</w:t>
      </w:r>
      <w:proofErr w:type='gramEnd'/>
      <w:r>
      <w:t xml:space='preserve'> the custodial parent is not traveling, the non-custodial parent shall have the opportunity to spend time with the children on Christmas Day between </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$christmas_start_am_pm</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> and </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$christmas_end_am_pm</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> and New Year’s Day between </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$newYears_start_am_pm</w:t>
  </w:r>
  <w:r>
      <w:t xml:space='preserve'> and </w:t>
  </w:r>
  <w:r>
      <w:rPr>
          <w:highlight w:val='yellow' />
      </w:rPr>
      <w:t>$newYears_end_am_pm</w:t>
  </w:r>
  <w:r>
      <w:t>.</w:t>
  </w:r>
  
    </w:p>";
    }
}
