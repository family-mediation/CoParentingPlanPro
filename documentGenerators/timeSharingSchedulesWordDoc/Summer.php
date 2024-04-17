<?php
class Summer {
    public function get_split(string $parentAFirst, string $parentBFirst): string {
        return "<w:p w14:paraId='5AF5F2E3' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:bookmarkStart w:id='50' w:name='PhysicalCustodySummerBreakSB'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02E(</w:t>
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
      <w:bookmarkEnd w:id='50'/>
      <w:r>
        <w:t>. In odd years, $parentAFirst shall have the Child(ren) during the first half of the break and $parentBFirst shall have the Child(ren) during the second half of the break. In even years, $parentBFirst shall have the Child(ren) during the first half of
          the break and $parentAFirst shall have the Child(ren) during the second half of the break, to include New Year’s Eve and New Year’s Day.
        </w:t>
      </w:r>
    </w:p>";
    }
    public function get_continue(): string {
        return "<w:p w14:paraId='2873C3A9' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:u w:val='single'/>
        </w:rPr>
      </w:pPr>
      <w:bookmarkStart w:id='51' w:name='PhysicalCustodySummerBreakContSched'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02E(ii)</w:t>
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
      <w:bookmarkEnd w:id='51'/>
      <w:r>
        <w:t xml:space='preserve'>  Parents shall continue the normal during the school year schedule during this break.</w:t>
      </w:r>
    </w:p>";
    }

    /** Haven't implemented this choice fully - need to collect dates (replaced Alternate schedule). */
    public function get_continue_uninterrupted(string $parentAFirst, string $parentBFirst, string $days_weeks, string $no_later_than): string {
        return "<w:p w14:paraId='7C25F206' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='36' w:firstLine='2160'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:bookmarkStart w:id='52' w:name='PhysicalCustodySummerBreakContSchedUnint'/>
      <w:r>
        <w:rPr>
          <w:b/>
        </w:rPr>
        <w:t>6.02E(iii)</w:t>
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
        <w:t>CONTINUE SCHEDULE DURING THE SCHOOL YEAR WITH OPTION FOR UNITERRUPTED TIME</w:t>
      </w:r>
      <w:bookmarkEnd w:id='52'/>
      <w:r>
        <w:t xml:space='preserve'>.  Parents shall continue the normal during the school year schedule during this break provided however that both parents shall have the option to take $days_weeks days/weeks of uninterrupted time with the Child(ren) every summer.  Parents shall select and exchange their dates for uninterrupted time with the Child(ren) by no later than $no_later_than of the same year.  In even years, $parentAFirst shall have the first choice of dates for uninterrupted time during the Summer Break.  In odd years, $parentBFirst shall have the first choice of dates for uninterrupted time during the Summer Break.  </w:t>
      </w:r>
    </w:p>";
    }
}
