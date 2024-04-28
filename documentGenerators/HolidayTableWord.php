<?php
class HolidayTableWord {
    public function getHolidayTable(array $res, string $parentAFirst, string $parentBFirst, string $parentABirthday, string $parentBBirthday): string {
        return "<w:body>
        <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000001'>
            <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto' />
                <w:ind w:right='36' />
                <w:jc w:val='both' />
                <w:rPr>
                    <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                    <w:sz w:val='24' />
                    <w:szCs w:val='24' />
                </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                <w:rPr>
                    <w:rtl w:val='0' />
                </w:rPr>
            </w:r>
        </w:p>
        <w:tbl>
            <w:tblPr>
                <w:tblStyle w:val='Table1' />
                <w:tblW w:w='8640.0' w:type='dxa' />
                <w:jc w:val='left' />
                <w:tblBorders>
                    <w:top w:color='000000' w:space='0' w:sz='8' w:val='single' />
                    <w:left w:color='000000' w:space='0' w:sz='8' w:val='single' />
                    <w:bottom w:color='000000' w:space='0' w:sz='8' w:val='single' />
                    <w:right w:color='000000' w:space='0' w:sz='8' w:val='single' />
                    <w:insideH w:color='000000' w:space='0' w:sz='8' w:val='single' />
                    <w:insideV w:color='000000' w:space='0' w:sz='8' w:val='single' />
                </w:tblBorders>
                <w:tblLayout w:type='fixed' />
                <w:tblLook w:val='0600' />
            </w:tblPr>
            <w:tblGrid>
                <w:gridCol w:w='3285' />
                <w:gridCol w:w='2670' />
                <w:gridCol w:w='2685' />
                <w:tblGridChange w:id='0'>
                    <w:tblGrid>
                        <w:gridCol w:w='3285' />
                        <w:gridCol w:w='2670' />
                        <w:gridCol w:w='2685' />
                    </w:tblGrid>
                </w:tblGridChange>
            </w:tblGrid>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000002'>
                        <w:pPr>
                            <w:keepNext w:val='0' />
                            <w:keepLines w:val='0' />
                            <w:pageBreakBefore w:val='0' />
                            <w:widowControl w:val='0' />
                            <w:pBdr>
                                <w:top w:space='0' w:sz='0' w:val='nil' />
                                <w:left w:space='0' w:sz='0' w:val='nil' />
                                <w:bottom w:space='0' w:sz='0' w:val='nil' />
                                <w:right w:space='0' w:sz='0' w:val='nil' />
                                <w:between w:space='0' w:sz='0' w:val='nil' />
                            </w:pBdr>
                            <w:shd w:fill='auto' w:val='clear' />
                            <w:spacing w:after='0' w:before='0' w:line='240' w:lineRule='auto' />
                            <w:ind w:left='0' w:right='0' w:firstLine='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:u w:val='single' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:u w:val='single' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Holiday</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000003'>
                        <w:pPr>
                            <w:keepNext w:val='0' />
                            <w:keepLines w:val='0' />
                            <w:pageBreakBefore w:val='0' />
                            <w:widowControl w:val='0' />
                            <w:pBdr>
                                <w:top w:space='0' w:sz='0' w:val='nil' />
                                <w:left w:space='0' w:sz='0' w:val='nil' />
                                <w:bottom w:space='0' w:sz='0' w:val='nil' />
                                <w:right w:space='0' w:sz='0' w:val='nil' />
                                <w:between w:space='0' w:sz='0' w:val='nil' />
                            </w:pBdr>
                            <w:shd w:fill='auto' w:val='clear' />
                            <w:spacing w:after='0' w:before='0' w:line='240' w:lineRule='auto' />
                            <w:ind w:left='0' w:right='0' w:firstLine='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:u w:val='single' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:u w:val='single' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Party A</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000004'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='360' w:lineRule='auto' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:u w:val='single' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Party B</w:t>
                        </w:r>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rtl w:val='0' />
                            </w:rPr>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000005'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>New Year’s Day (Jan 1)</w:t>
                            <w:tab />
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000006'>
                        <w:pPr>
                            <w:keepNext w:val='0' />
                            <w:keepLines w:val='0' />
                            <w:pageBreakBefore w:val='0' />
                            <w:widowControl w:val='0' />
                            <w:pBdr>
                                <w:top w:space='0' w:sz='0' w:val='nil' />
                                <w:left w:space='0' w:sz='0' w:val='nil' />
                                <w:bottom w:space='0' w:sz='0' w:val='nil' />
                                <w:right w:space='0' w:sz='0' w:val='nil' />
                                <w:between w:space='0' w:sz='0' w:val='nil' />
                            </w:pBdr>
                            <w:shd w:fill='auto' w:val='clear' />
                            <w:spacing w:after='0' w:before='0' w:line='276' w:lineRule='auto' />
                            <w:ind w:left='0' w:right='0' w:firstLine='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000007'>
                        <w:pPr>
                            <w:keepNext w:val='0' />
                            <w:keepLines w:val='0' />
                            <w:pageBreakBefore w:val='0' />
                            <w:widowControl w:val='0' />
                            <w:pBdr>
                                <w:top w:space='0' w:sz='0' w:val='nil' />
                                <w:left w:space='0' w:sz='0' w:val='nil' />
                                <w:bottom w:space='0' w:sz='0' w:val='nil' />
                                <w:right w:space='0' w:sz='0' w:val='nil' />
                                <w:between w:space='0' w:sz='0' w:val='nil' />
                            </w:pBdr>
                            <w:shd w:fill='auto' w:val='clear' />
                            <w:spacing w:after='0' w:before='0' w:line='276' w:lineRule='auto' />
                            <w:ind w:left='0' w:right='0' w:firstLine='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000008'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Martin Luther King Day (Monday)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000009'>
                        <w:pPr>
                            <w:keepNext w:val='0' />
                            <w:keepLines w:val='0' />
                            <w:pageBreakBefore w:val='0' />
                            <w:widowControl w:val='0' />
                            <w:pBdr>
                                <w:top w:space='0' w:sz='0' w:val='nil' />
                                <w:left w:space='0' w:sz='0' w:val='nil' />
                                <w:bottom w:space='0' w:sz='0' w:val='nil' />
                                <w:right w:space='0' w:sz='0' w:val='nil' />
                                <w:between w:space='0' w:sz='0' w:val='nil' />
                            </w:pBdr>
                            <w:shd w:fill='auto' w:val='clear' />
                            <w:spacing w:after='0' w:before='0' w:line='276' w:lineRule='auto' />
                            <w:ind w:left='0' w:right='0' w:firstLine='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000000A'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000000B'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>President’s Day (Monday)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000000C'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000000D'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000000E'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Kuhio Day (Friday)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000000F'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000010'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000011'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Good Friday (Friday)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000012'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000013'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000014'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Easter (Sunday)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000015'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000016'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000017'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Mother’s Day (Sunday)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000018'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000019'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000001A'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Memorial Day (Monday)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000001B'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000001C'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000001D'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Father’s Day (Sunday)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000001E'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000001F'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000020'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Fourth of July (July 4)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000021'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000022'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000023'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Statehood Day (Friday)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000024'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000025'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000026'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Labor Day (Monday)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000027'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000028'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000029'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Election Day (Tuesday)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000002A'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000002B'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000002C'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Veteran’s Day (Nov 11)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000002D'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000002E'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000002F'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Thanksgiving (Thursday)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000030'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000031'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000032'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Christmas Eve (Dec 24)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000033'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000034'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000035'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Christmas Day (Dec 25)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000036'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000037'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000038'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>New Year’s Eve (Dec 31)</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000039'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000003A'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000003B'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Parent A’s Birthday [insert date]</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000003C'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000003D'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000003E'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Parent B’s Birthday [insert date]</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000003F'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000040'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
            <w:tr>
                <w:trPr>
                    <w:cantSplit w:val='0' />
                    <w:tblHeader w:val='0' />
                </w:trPr>
                <w:tc>
                    <w:tcPr />
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000041'>
                        <w:pPr>
                            <w:spacing w:after='1' w:line='276' w:lineRule='auto' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Child(ren)’s Birthday(s) [insert dates]</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000042'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
                <w:tc>
                    <w:tcPr>
                        <w:shd w:fill='auto' w:val='clear' />
                        <w:tcMar>
                            <w:top w:w='100.0' w:type='dxa' />
                            <w:left w:w='100.0' w:type='dxa' />
                            <w:bottom w:w='100.0' w:type='dxa' />
                            <w:right w:w='100.0' w:type='dxa' />
                        </w:tcMar>
                        <w:vAlign w:val='top' />
                    </w:tcPr>
                    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000043'>
                        <w:pPr>
                            <w:widowControl w:val='0' />
                            <w:jc w:val='center' />
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                            </w:rPr>
                        </w:pPr>
                        <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                            <w:rPr>
                                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                                <w:sz w:val='24' />
                                <w:szCs w:val='24' />
                                <w:rtl w:val='0' />
                            </w:rPr>
                            <w:t xml:space='preserve'>Every Year</w:t>
                        </w:r>
                    </w:p>
                </w:tc>
            </w:tr>
        </w:tbl>
        <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000044'>
            <w:pPr>
                <w:spacing w:after='1' w:line='360' w:lineRule='auto' />
                <w:ind w:right='36' />
                <w:jc w:val='both' />
                <w:rPr />
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                <w:rPr>
                    <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' />
                    <w:sz w:val='24' />
                    <w:szCs w:val='24' />
                    <w:rtl w:val='0' />
                </w:rPr>
                <w:tab />
            </w:r>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
                <w:rPr>
                    <w:rtl w:val='0' />
                </w:rPr>
            </w:r>
        </w:p>
        <w:sectPr>
            <w:pgSz w:h='15840' w:w='12240' w:orient='portrait' />
            <w:pgMar w:bottom='1440' w:top='1440' w:left='1440' w:right='1440' w:header='720' w:footer='720' />
            <w:pgNumType w:start='1' />
        </w:sectPr>
    </w:body>
";
        
        /*return "<w:body>
    <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000001'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:right='36'/>
        <w:jc w:val='both'/>
        <w:rPr>
          <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
          <w:sz w:val='24'/>
          <w:szCs w:val='24'/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
        <w:rPr>
          <w:rtl w:val='0'/>
        </w:rPr>
      </w:r>
    </w:p>
    <w:tbl>
      <w:tblPr>
        <w:tblStyle w:val='Table1'/>
        <w:tblW w:w='8640.0' w:type='dxa'/>
        <w:jc w:val='left'/>
        <w:tblBorders>
          <w:top w:color='000000' w:space='0' w:sz='8' w:val='single'/>
          <w:left w:color='000000' w:space='0' w:sz='8' w:val='single'/>
          <w:bottom w:color='000000' w:space='0' w:sz='8' w:val='single'/>
          <w:right w:color='000000' w:space='0' w:sz='8' w:val='single'/>
          <w:insideH w:color='000000' w:space='0' w:sz='8' w:val='single'/>
          <w:insideV w:color='000000' w:space='0' w:sz='8' w:val='single'/>
        </w:tblBorders>
        <w:tblLayout w:type='fixed'/>
        <w:tblLook w:val='0600'/>
      </w:tblPr>
      <w:tblGrid>
        <w:gridCol w:w='3285'/>
        <w:gridCol w:w='2670'/>
        <w:gridCol w:w='2685'/>
        <w:tblGridChange w:id='0'>
          <w:tblGrid>
            <w:gridCol w:w='3285'/>
            <w:gridCol w:w='2670'/>
            <w:gridCol w:w='2685'/>
          </w:tblGrid>
        </w:tblGridChange>
      </w:tblGrid>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000002'>
            <w:pPr>
              <w:keepNext w:val='0'/>
              <w:keepLines w:val='0'/>
              <w:pageBreakBefore w:val='0'/>
              <w:widowControl w:val='0'/>
              <w:pBdr>
                <w:top w:space='0' w:sz='0' w:val='nil'/>
                <w:left w:space='0' w:sz='0' w:val='nil'/>
                <w:bottom w:space='0' w:sz='0' w:val='nil'/>
                <w:right w:space='0' w:sz='0' w:val='nil'/>
                <w:between w:space='0' w:sz='0' w:val='nil'/>
              </w:pBdr>
              <w:shd w:fill='auto' w:val='clear'/>
              <w:spacing w:after='0' w:before='0' w:line='240' w:lineRule='auto'/>
              <w:ind w:left='0' w:right='0' w:firstLine='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:u w:val='single'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:u w:val='single'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Holiday</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000003'>
            <w:pPr>
              <w:keepNext w:val='0'/>
              <w:keepLines w:val='0'/>
              <w:pageBreakBefore w:val='0'/>
              <w:widowControl w:val='0'/>
              <w:pBdr>
                <w:top w:space='0' w:sz='0' w:val='nil'/>
                <w:left w:space='0' w:sz='0' w:val='nil'/>
                <w:bottom w:space='0' w:sz='0' w:val='nil'/>
                <w:right w:space='0' w:sz='0' w:val='nil'/>
                <w:between w:space='0' w:sz='0' w:val='nil'/>
              </w:pBdr>
              <w:shd w:fill='auto' w:val='clear'/>
              <w:spacing w:after='0' w:before='0' w:line='240' w:lineRule='auto'/>
              <w:ind w:left='0' w:right='0' w:firstLine='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:u w:val='single'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:u w:val='single'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Party A</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000004'>
            <w:pPr>
              <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:u w:val='single'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Party B</w:t>
            </w:r>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rtl w:val='0'/>
              </w:rPr>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000005'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>New Year’s Day (Jan 1)</w:t>
              <w:tab/>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000006'>
            <w:pPr>
              <w:keepNext w:val='0'/>
              <w:keepLines w:val='0'/>
              <w:pageBreakBefore w:val='0'/>
              <w:widowControl w:val='0'/>
              <w:pBdr>
                <w:top w:space='0' w:sz='0' w:val='nil'/>
                <w:left w:space='0' w:sz='0' w:val='nil'/>
                <w:bottom w:space='0' w:sz='0' w:val='nil'/>
                <w:right w:space='0' w:sz='0' w:val='nil'/>
                <w:between w:space='0' w:sz='0' w:val='nil'/>
              </w:pBdr>
              <w:shd w:fill='auto' w:val='clear'/>
              <w:spacing w:after='0' w:before='0' w:line='276' w:lineRule='auto'/>
              <w:ind w:left='0' w:right='0' w:firstLine='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[0]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000007'>
            <w:pPr>
              <w:keepNext w:val='0'/>
              <w:keepLines w:val='0'/>
              <w:pageBreakBefore w:val='0'/>
              <w:widowControl w:val='0'/>
              <w:pBdr>
                <w:top w:space='0' w:sz='0' w:val='nil'/>
                <w:left w:space='0' w:sz='0' w:val='nil'/>
                <w:bottom w:space='0' w:sz='0' w:val='nil'/>
                <w:right w:space='0' w:sz='0' w:val='nil'/>
                <w:between w:space='0' w:sz='0' w:val='nil'/>
              </w:pBdr>
              <w:shd w:fill='auto' w:val='clear'/>
              <w:spacing w:after='0' w:before='0' w:line='276' w:lineRule='auto'/>
              <w:ind w:left='0' w:right='0' w:firstLine='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[1]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000008'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Martin Luther King Day (Monday)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000009'>
            <w:pPr>
              <w:keepNext w:val='0'/>
              <w:keepLines w:val='0'/>
              <w:pageBreakBefore w:val='0'/>
              <w:widowControl w:val='0'/>
              <w:pBdr>
                <w:top w:space='0' w:sz='0' w:val='nil'/>
                <w:left w:space='0' w:sz='0' w:val='nil'/>
                <w:bottom w:space='0' w:sz='0' w:val='nil'/>
                <w:right w:space='0' w:sz='0' w:val='nil'/>
                <w:between w:space='0' w:sz='0' w:val='nil'/>
              </w:pBdr>
              <w:shd w:fill='auto' w:val='clear'/>
              <w:spacing w:after='0' w:before='0' w:line='276' w:lineRule='auto'/>
              <w:ind w:left='0' w:right='0' w:firstLine='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[2]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000000A'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[3]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000000B'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>President’s Day (Monday)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000000C'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[4]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000000D'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[5]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000000E'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Kuhio Day (Friday)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000000F'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[6]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000010'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[7]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000011'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Good Friday (Friday)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000012'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[8]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000013'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[9]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000014'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Easter (Sunday)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000015'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[10]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000016'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[11]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000017'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Mother’s Day (Sunday)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000018'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[12]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000019'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[13]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000001A'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Memorial Day (Monday)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000001B'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[14]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000001C'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[15]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000001D'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Father’s Day (Sunday)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000001E'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[16]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000001F'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[17]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000020'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Fourth of July (July 4)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000021'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[18]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000022'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[19]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000023'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Statehood Day (Friday)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000024'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[20]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000025'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[21]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000026'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Labor Day (Monday)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000027'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[22]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000028'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[23]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000029'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Election Day (Tuesday)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000002A'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[24]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000002B'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[25]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000002C'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Veteran’s Day (Nov 11)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000002D'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[26]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000002E'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[27]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000002F'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Thanksgiving (Thursday)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000030'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[28]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000031'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[29]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000032'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Christmas Eve (Dec 24)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000033'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[30]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000034'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[31]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000035'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>Christmas Day (Dec 25)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000036'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[32]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000037'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[33]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000038'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>New Year’s Eve (Dec 31)</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000039'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[34]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000003A'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[35]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000003B'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$parentAFirst ’s Birthday [$parentABirthday]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000003C'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[36]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000003D'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[37]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000003E'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$parentBFirst ’s Birthday [$parentBBirthday]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='0000003F'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[38]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000040'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$res[39]</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>";*/
    }
    
    public function getChildren(string $childXInitials, string $childXBirthday, string $partyARes, string $partyBRes): string
    {
        return "<w:tr w:rsidR='00A15BAD' w14:paraId='6850C610' w14:textId='77777777'>
              <w:tc>
                <w:tcPr>
                  <w:tcW w:w='3285' w:type='dxa'/>
                </w:tcPr>
                <w:p w14:paraId='3BF8E7AC' w14:textId='77777777' w:rsidR='00A15BAD' w:rsidRDefault='00000000'>
                  <w:pPr>
                    <w:spacing w:after='1'/>
                    <w:rPr>
                      <w:rFonts w:ascii='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' w:cs='Bookman Old Style'/>
                      <w:sz w:val='24'/>
                      <w:szCs w:val='24'/>
                    </w:rPr>
                  </w:pPr>
                  <w:r>
                    <w:rPr>
                      <w:rFonts w:ascii='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' w:cs='Bookman Old Style'/>
                      <w:sz w:val='24'/>
                      <w:szCs w:val='24'/>
                    </w:rPr>
                    <w:lastRenderedPageBreak/>
                    <w:t>Child(ren)’s Birthday(s) [insert dates]</w:t>
                  </w:r>
                </w:p>
              </w:tc>
              <w:tc>
                <w:tcPr>
                  <w:tcW w:w='2670' w:type='dxa'/>
                  <w:shd w:val='clear' w:color='auto' w:fill='auto'/>
                  <w:tcMar>
                    <w:top w:w='100' w:type='dxa'/>
                    <w:left w:w='100' w:type='dxa'/>
                    <w:bottom w:w='100' w:type='dxa'/>
                    <w:right w:w='100' w:type='dxa'/>
                  </w:tcMar>
                </w:tcPr>
                <w:p w14:paraId='56DC797D' w14:textId='77777777' w:rsidR='00A15BAD' w:rsidRDefault='00000000'>
                  <w:pPr>
                    <w:widowControl w:val='0'/>
                    <w:jc w:val='center'/>
                    <w:rPr>
                      <w:rFonts w:ascii='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' w:cs='Bookman Old Style'/>
                      <w:sz w:val='24'/>
                      <w:szCs w:val='24'/>
                    </w:rPr>
                  </w:pPr>
                  <w:r>
                    <w:rPr>
                      <w:rFonts w:ascii='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' w:cs='Bookman Old Style'/>
                      <w:sz w:val='24'/>
                      <w:szCs w:val='24'/>
                    </w:rPr>
                    <w:t>Every Year</w:t>
                  </w:r>
                </w:p>
              </w:tc>
              <w:tc>
                <w:tcPr>
                  <w:tcW w:w='2685' w:type='dxa'/>
                  <w:shd w:val='clear' w:color='auto' w:fill='auto'/>
                  <w:tcMar>
                    <w:top w:w='100' w:type='dxa'/>
                    <w:left w:w='100' w:type='dxa'/>
                    <w:bottom w:w='100' w:type='dxa'/>
                    <w:right w:w='100' w:type='dxa'/>
                  </w:tcMar>
                </w:tcPr>
                <w:p w14:paraId='632D9F9A' w14:textId='77777777' w:rsidR='00A15BAD' w:rsidRDefault='00000000'>
                  <w:pPr>
                    <w:widowControl w:val='0'/>
                    <w:jc w:val='center'/>
                    <w:rPr>
                      <w:rFonts w:ascii='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' w:cs='Bookman Old Style'/>
                      <w:sz w:val='24'/>
                      <w:szCs w:val='24'/>
                    </w:rPr>
                  </w:pPr>
                  <w:r>
                    <w:rPr>
                      <w:rFonts w:ascii='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' w:cs='Bookman Old Style'/>
                      <w:sz w:val='24'/>
                      <w:szCs w:val='24'/>
                    </w:rPr>
                    <w:t>Every Year</w:t>
                  </w:r>
                </w:p>
              </w:tc>
            </w:tr>
          </w:tbl>";
        /*return "<w:tr>
        <w:trPr>
          <w:cantSplit w:val='0'/>
          <w:tblHeader w:val='0'/>
        </w:trPr>
        <w:tc>
          <w:tcPr/>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000041'>
            <w:pPr>
              <w:spacing w:after='1' w:line='276' w:lineRule='auto'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$childXInitials ’s Birthday [$childXBirthday]</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000042'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$partyARes</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:shd w:fill='auto' w:val='clear'/>
            <w:tcMar>
              <w:top w:w='100.0' w:type='dxa'/>
              <w:left w:w='100.0' w:type='dxa'/>
              <w:bottom w:w='100.0' w:type='dxa'/>
              <w:right w:w='100.0' w:type='dxa'/>
            </w:tcMar>
            <w:vAlign w:val='top'/>
          </w:tcPr>
          <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000043'>
            <w:pPr>
              <w:widowControl w:val='0'/>
              <w:jc w:val='center'/>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
                <w:rtl w:val='0'/>
              </w:rPr>
              <w:t xml:space='preserve'>$partyBRes</w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>";*/
    }

    public function getEnd(): string {
      return "<w:p w14:paraId='7DCB3BF6' w14:textId='77777777' w:rsidR='00A15BAD' w:rsidRDefault='00000000'>
            <w:pPr>
              <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
              <w:ind w:right='36'/>
              <w:jc w:val='both'/>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style' w:cs='Bookman Old Style'/>
                <w:sz w:val='24'/>
                <w:szCs w:val='24'/>
              </w:rPr>
              <w:tab/>
            </w:r>
          </w:p>
          <w:sectPr w:rsidR='00A15BAD'>
            <w:pgSz w:w='12240' w:h='15840'/>
            <w:pgMar w:top='1440' w:right='1440' w:bottom='1440' w:left='1440' w:header='720' w:footer='720' w:gutter='0'/>
            <w:pgNumType w:start='1'/>
            <w:cols w:space='720'/>
          </w:sectPr>
        </w:body>";
        /*return "</w:tbl>
      <w:p w:rsidR='00000000' w:rsidDel='00000000' w:rsidP='00000000' w:rsidRDefault='00000000' w:rsidRPr='00000000' w14:paraId='00000044'>
      <w:pPr>
        <w:spacing w:after='1' w:line='360' w:lineRule='auto'/>
        <w:ind w:right='36'/>
        <w:jc w:val='both'/>
        <w:rPr/>
      </w:pPr>
      <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
        <w:rPr>
          <w:rFonts w:ascii='Bookman Old Style' w:cs='Bookman Old Style' w:eastAsia='Bookman Old Style' w:hAnsi='Bookman Old Style'/>
          <w:sz w:val='24'/>
          <w:szCs w:val='24'/>
          <w:rtl w:val='0'/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidDel='00000000' w:rsidR='00000000' w:rsidRPr='00000000'>
        <w:rPr>
          <w:rtl w:val='0'/>
        </w:rPr>
      </w:r>
    </w:p>
    <w:sectPr>
      <w:pgSz w:h='15840' w:w='12240' w:orient='portrait'/>
      <w:pgMar w:bottom='1440' w:top='1440' w:left='1440' w:right='1440' w:header='720' w:footer='720'/>
      <w:pgNumType w:start='1'/>
    </w:sectPr>
  </w:body>";*/
    }
}