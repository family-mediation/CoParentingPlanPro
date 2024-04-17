<?php

class SignatureWord {
    public function getSignature(string $parentAName, string $parentBName, string $addressA, string $addressB, string $partyAEmail, string $partyBEmail, int $ssnA, int $ssnB, string $dateA, string $dateB): string {
        return "<w:p w14:paraId='3137585E' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='160' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='0' w:firstLine='0'/>
        <w:jc w:val='center'/>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:sz w:val='32'/>
          <w:szCs w:val='32'/>
        </w:rPr>
        <w:t>[SIGNATURE PAGE TO FOLLOW]</w:t>
      </w:r>
    </w:p>
    <w:p w14:paraId='3345CE83' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='160' w:line='360' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:r>
        <w:br w:type='page'/>
      </w:r>
    </w:p>
    <w:p w14:paraId='1810528E' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-5' w:right='36' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:r>
        <w:lastRenderedPageBreak/>
        <w:t>APPROVED AS TO FORM AND CONTENT:</w:t>
      </w:r>
    </w:p>
    <w:p w14:paraId='453BD8B1' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:line='240' w:lineRule='auto'/>
        <w:ind w:left='-5' w:right='36' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='23F4E69A' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='053F75CB' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='6E96AA09' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='1' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='25060B70' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:tabs>
          <w:tab w:val='right' w:pos='9406'/>
        </w:tabs>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:r>
        <w:t>____________________________________</w:t>
      </w:r>
      <w:r>
        <w:tab/>
        <w:t>____________________________________</w:t>
      </w:r>
    </w:p>
    <w:p w14:paraId='73F19E60' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='4' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:r>
        <w:t>Name:</w:t>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
        <w:t>Name:</w:t>
      </w:r>
    </w:p>
    <w:p w14:paraId='1755CF26' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:spacing w:after='4' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:r>
        <w:t xml:space='preserve'>$parentAName </w:t>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
        <w:t>$parentBName</w:t>
      </w:r>
    </w:p>
    <w:p w14:paraId='51F8AB76' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:tabs>
          <w:tab w:val='left' w:pos='1440'/>
          <w:tab w:val='left' w:pos='2160'/>
          <w:tab w:val='center' w:pos='4680'/>
        </w:tabs>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:r>
        <w:t>Residential Address: $addressA</w:t>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
        <w:t>Residential Address: $addressB</w:t>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
    </w:p>
    <w:p w14:paraId='4BD6B2B8' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:tabs>
          <w:tab w:val='left' w:pos='1440'/>
          <w:tab w:val='left' w:pos='2160'/>
          <w:tab w:val='center' w:pos='4680'/>
        </w:tabs>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='0693296B' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:tabs>
          <w:tab w:val='left' w:pos='1440'/>
          <w:tab w:val='left' w:pos='2160'/>
          <w:tab w:val='center' w:pos='4680'/>
        </w:tabs>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='56A8A8EA' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:tabs>
          <w:tab w:val='left' w:pos='1440'/>
          <w:tab w:val='left' w:pos='2160'/>
          <w:tab w:val='center' w:pos='4680'/>
        </w:tabs>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:r>
        <w:t>E-Mail Address:$partyAEmail</w:t>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
        <w:t>E-Mail Address:$partyBEmail</w:t>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
    </w:p>
    <w:p w14:paraId='1F64F7F2' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:tabs>
          <w:tab w:val='left' w:pos='1440'/>
          <w:tab w:val='left' w:pos='2160'/>
          <w:tab w:val='center' w:pos='4680'/>
        </w:tabs>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='7F88B7B5' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:tabs>
          <w:tab w:val='left' w:pos='1440'/>
          <w:tab w:val='left' w:pos='2160'/>
          <w:tab w:val='center' w:pos='4680'/>
        </w:tabs>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='3AFC8ED2' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:tabs>
          <w:tab w:val='left' w:pos='1440'/>
          <w:tab w:val='left' w:pos='2160'/>
          <w:tab w:val='center' w:pos='4680'/>
        </w:tabs>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:r>
        <w:t>SSN:</w:t>
      </w:r>
      <w:r>
        <w:tab/>
        <w:t>XXX-XX-$ssnA</w:t>
      </w:r>
      <w:r>
        <w:tab/>
      </w:r>
      <w:r>
        <w:tab/>
        <w:t>XXX-XX-$ssnB</w:t>
      </w:r>
    </w:p>
    <w:p w14:paraId='05FFCFB5' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='41CFF5D2' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='6216536D' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='1' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='0D8B6A25' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='006830FF'>
      <w:pPr>
        <w:tabs>
          <w:tab w:val='left' w:pos='5040'/>
          <w:tab w:val='right' w:pos='9406'/>
        </w:tabs>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
      <w:r>
        <w:t>Date: $dateA</w:t>
      </w:r>
      <w:r>
        <w:tab/>
        <w:t>Date: $dateB</w:t>
      </w:r>
    </w:p>
    <w:p w14:paraId='3873D659' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='3' w:line='259' w:lineRule='auto'/>
        <w:ind w:right='44'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:sz w:val='20'/>
          <w:szCs w:val='20'/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='4EF2E40E' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-5' w:right='36' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='5723D11D' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-5' w:right='36' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='141A322F' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='4' w:line='259' w:lineRule='auto'/>
        <w:ind w:left='-15' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='4C03F716' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:tabs>
          <w:tab w:val='left' w:pos='1440'/>
          <w:tab w:val='left' w:pos='2160'/>
          <w:tab w:val='center' w:pos='4680'/>
        </w:tabs>
        <w:spacing w:after='0' w:line='259' w:lineRule='auto'/>
        <w:ind w:right='0'/>
        <w:jc w:val='both'/>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='4F2AE1CE' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='3' w:line='259' w:lineRule='auto'/>
        <w:ind w:right='44'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:sz w:val='20'/>
          <w:szCs w:val='20'/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='3B257B5F' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='3' w:line='259' w:lineRule='auto'/>
        <w:ind w:right='44'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:sz w:val='20'/>
          <w:szCs w:val='20'/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='27FAB5B1' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='3' w:line='259' w:lineRule='auto'/>
        <w:ind w:right='44'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:sz w:val='20'/>
          <w:szCs w:val='20'/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='58191A65' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='3' w:line='259' w:lineRule='auto'/>
        <w:ind w:right='44'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:sz w:val='20'/>
          <w:szCs w:val='20'/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='56167F63' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='3' w:line='259' w:lineRule='auto'/>
        <w:ind w:right='44'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:sz w:val='20'/>
          <w:szCs w:val='20'/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='3821EBFB' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='3' w:line='259' w:lineRule='auto'/>
        <w:ind w:right='44'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:sz w:val='20'/>
          <w:szCs w:val='20'/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='0866CF0F' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='3' w:line='259' w:lineRule='auto'/>
        <w:ind w:right='44'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:sz w:val='20'/>
          <w:szCs w:val='20'/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='6B2221E0' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:spacing w:after='3' w:line='259' w:lineRule='auto'/>
        <w:ind w:right='44'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:sz w:val='20'/>
          <w:szCs w:val='20'/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w14:paraId='177A8DC2' w14:textId='77777777' w:rsidR='00505307' w:rsidRDefault='00505307'>
      <w:pPr>
        <w:pBdr>
          <w:top w:val='nil'/>
          <w:left w:val='nil'/>
          <w:bottom w:val='nil'/>
          <w:right w:val='nil'/>
          <w:between w:val='nil'/>
        </w:pBdr>
        <w:spacing w:after='0' w:line='240' w:lineRule='auto'/>
        <w:ind w:left='0' w:right='0' w:firstLine='0'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:sz w:val='20'/>
          <w:szCs w:val='20'/>
        </w:rPr>
      </w:pPr>
    </w:p>";
    }
}