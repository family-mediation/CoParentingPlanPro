<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="./?page=7" onsubmit="return false;">
    <div id="mainForm">
      <div id="page0" class="container card p-4">
        <h1>Child Support</h1>
        <br>
        <h4>Child Support Guidelines Amount under the Law</h4>
        <p>Each State has Child Support Guidelines used to calculate monthly
          child support. Each parent shall be bound by and follow the Uniform Interstate Family
          Support Act.</p>

        <br>
        <h4>Pick only one</h4>
        <div>
          <input type="radio" name="childSupport" id="sameState" value="sameState" />
          <label for="sameState">Child Support Guidelines Amount when Parents Reside in the Same State</label>
        </div>
        <div>
          <input type="radio" name="childSupport" id="diffState" value="diffState" />
          <label for="diffState">Child Support Guidelines Amount when Parents Reside in Different States</label>
        </div>
        <div>
          <input type="radio" name="childSupport" id="mutuAgreed" value="mutuAgreed" />
          <label for="mutuAgreed">Mutually Agreed Upon Amount Alternative</label>
        </div>
        <div>
          <input type="radio" name="childSupport" id="noAgree" value="noAgree" />
          <label for="noAgree">No Agreement of the Parents Re Monthly Child Support Amount and/or Jurisdiction</label>
        </div>
        <div>
          <input type="radio" name="childSupport" id="alternative" value="alternative" />
          <label for="alternative">Child Support Account Alternative</label>
        </div>

        <br>
        <h4>Payment: pick only one</h4>
        <div>
          <input type="radio" name="payment" id="directPay" value="directPay" />
          <label for="directPay">Direct Payment of the Child Support</label>
        </div>
        <div>
          <input type="radio" name="payment" id="stateEnforce" value="stateEnforce" />
          <label for="stateEnforce">Payment of Child Support through the State Child Support Enforcement Agency</label>
        </div>

        <div class="row justify-content-center pt-4 pb-4">
          <button id="next0" onclick="showPage('page1')">Next Page</button>
          <!-- <button id="next" onclick="nextHandler()">Next Page</button> -->
        </div>
      </div>

      <div id="page1" class="container card p-4" style="display: none;">
        <h1>Child Support</h1>
        <br>
        <h4>Health Insurance Premiums</h4>
        <p>Parent
          A/B shall cover the Child(ren)'s health insurance premiums in the amount of $<input type="number" name="insurancePremium" style="width: 100px;" step="0.01" />
          per month.</p>
        <br>
        <h4>Uninsured Co-Pays for Health-Related Expenses</h4>
        <h5>Pick only one</h5>
        <div>
          <input type="radio" name="insurance" id="soleResp" value="soleResp" />
          <label for="soleResp">Sole Responsibility</label>
        </div>
        <div>
          <input type="radio" name="insurance" id="splitResp" value="splitResp" />
          <label for="splitResp">Split Responsibility</label>
        </div>
        <div>
          <input type="radio" name="insurance" id="threshold" value="thresold" />
          <label for="thresold">Responsibility for Threshold Amount</label>
        </div>
        <div>
          <input type="radio" name="insurance" id="recommend" value="recommend" />
          <label for="recommend">Definition of Uninsured Health-Related Expenses: Recommended by Providers</label>
        </div>
        <div>
          <input type="radio" name="insurance" id="mutual" value="mutual" />
          <label for="mutual">Definition of Uninsured Health-Related Expenses: Mutual Agreement of the Parents</label>
        </div>

        <div class="row justify-content-center pt-4 pb-4">
          <button id="previous1" onClick="showPage('page0')">Previous Page</button> &nbsp;&nbsp;
          <button id="next1" onclick="nextHandler()">Next Page</button>
          <!-- <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="another" onclick="nextHandler()">Next Page</button> -->
        </div>

      </div>

      <div id="page2" class="container card p-4" style="display: none;">
        <h1>Child Support</h1>
        <br>
        <h4>Extracurricular Expenses</h4>
        <h5>Pick only one</h5>
        <div>
          <input type="radio" name="extraCurr" id="extraSoleResp" value="extraSoleResp" />
          <label for="extraSoleResp">Sole Responsibility</label>
        </div>
        <div>
          <input type="radio" name="extraCurr" id="extraSplitResp" value="extraSplitResp" />
          <label for="extraSplitResp">Split Responsibility</label>
        </div>
        <div>
          <input type="radio" name="extraCurr" id="pursuant" value="pursuant" />
          <label for="pursuant">Selecting Extracurricular Activities for the Child(ren) Pursuant to 7.10 Hereinabove</label>
        </div>
        <div>
          <input type="radio" name="extraCurr" id="mutuallyExtra" value="mutuallyExtra" />
          <label for="mutuallyExtra">Extracurricular Activities Must Be Mutually Agreed Upon</label>
        </div>

        <br>
        <h4>Private School Expenses</h4>
        <h5>Pick only one</h5>
        <div>
          <input type="radio" name="privateSchool" id="privateSoleResp" value="privateSoleResp" />
          <label for="extraSoleResp">Sole Responsibility</label>
        </div>
        <div>
          <input type="radio" name="privateSchool" id="privateSplitResp" value="privateSplitResp" />
          <label for="extraSplitResp">Split Responsibility</label>
        </div>
        <div>
          <input type="radio" name="privateSchool" id="defPrivateSchool" value="defPrivateSchool" />
          <label for="defPrivateSchool">Definition of Private School Expenses</label>
        </div>
        <div>
          <input type="radio" name="privateSchool" id="privateSchoolMutual" value="privateSchoolMutual" />
          <label for="privateSchoolMutual">Mutual Agreement of Parents</label>
        </div>
        <div>
          <input type="radio" name="privateSchool" id="privateReserve" value="privateReserve" />
          <label for="privateReserve">Reserve</label>
        </div>

        <br>
        <h4>Post-High School Expenses</h4>
        <h5>Pick only one</h5>
        <div>
          <input type="radio" name="postHigh" id="postSoleResp" value="postSoleResp" />
          <label for="postSoleResp">Sole Responsibility</label>
        </div>
        <div>
          <input type="radio" name="postHigh" id="postSplitResp" value="postSplitResp" />
          <label for="postSplitResp">Split Responsibility</label>
        </div>
        <div>
          <input type="radio" name="postHigh" id="postSole529" value="postSole529" />
          <label for="postSole529">Sole Responsibility After Funds from Any 529 Accounts held on Behalf of a Child or Children, Coverdell Accounts of Other Funds</label>
        </div>
        <div style="display: flex; align-items: center;">
          <input type="radio" name="postHigh" id="postSplit529" value="postSplit529" style="margin-right: 10px;" />
          <label for="postSplit529">Split Responsibility After Funds from Any 529 Accounts held on Behalf of a Child or Children, Coverdell Accounts of Other Funds Ear-Marked to Pay for a Child’s Post-High School Education Expenses</label>
        </div>
        <div>
          <input type="radio" name="postHigh" id="postCap" value="postCap" />
          <label for="postCap">Cap on Payment by Each Parent per Academic School Year</label>
        </div>
        <div>
          <input type="radio" name="postHigh" id="postCap" value="postCap" />
          <label for="postCap">Definition of Post-High School Education Expenses</label>
        </div>
        <div>
          <input type="radio" name="postHigh" id="postMutual" value="postMutual" />
          <label for="postMutual">Mutual Agreement of Parents</label>
        </div>
        <div>
          <input type="radio" name="postHigh" id="postReserve" value="postReserve" />
          <label for="postReserve">Reserve</label>
        </div>

        <div class="row justify-content-center pt-4 pb-4">
          <button id="previous2" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="next2" onclick="nextToPage3()">Next Page</button>
          <!-- <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="next" onclick="nextHandler()">Next Page</button> -->
        </div>
      </div>

      <div id="page3" class="container card p-4" style="display: none;">
        <h1>Child Support</h1>
        <br>
        <h4>Claiming the Child(ren) as a Dependent for Tax Purposes</h4>
        <h5>Pick only one</h5>
        <div>
          <input type="radio" name="taxPurpose" id="taxSole" value="taxSole" />
          <label for="taxSole">Sole Authority to Claim the Child(ren)</label>
        </div>
        <div>
          <input type="radio" name="taxPurpose" id="taxSplit" value="taxSplit" />
          <label for="taxSplit">Split Authority to Claim the Child(ren)</label>
        </div>
        <div>
          <input type="radio" name="taxPurpose" id="taxAlt" value="taxAlt" />
          <label for="taxAlt">Split Authority to Claim the Child(ren) then Alternate</label>
        </div>
        <div>
          <input type="radio" name="taxPurpose" id="taxAltAut" value="taxAltAut" />
          <label for="taxAltAut">Alternate Authority to Claim the Child(ren)</label>
        </div>

        <br>
        <h4>Protocols for Reimbursement of Child-Related Expenses</h4>
        <h5>Pick only one</h5>
        <div>
          <input type="radio" name="protocols" id="timeframe" value="timeframe" />
          <label for="timeframe">Timeframe for Reimbursement of Child-Related Expenses and Reimbursement</label>
        </div>
        <div>
          <input type="radio" name="protocols" id="monthlyCal" value="monthlyCal" />
          <label for="monthlyCal">Monthly Calculation of Child-Related Expenses and Reimbursement</label>
        </div>
        <div>
          <input type="radio" name="protocols" id="quarterCal" value="quarterCal" />
          <label for="quarterCal">Quarterly Calculation of Child-Related Expenses and Reimbursement</label>
        </div>
        <div>
          <input type="radio" name="protocols" id="annualCal" value="annualCal" />
          <label for="annualCal">Annual Calculation of Child-Related Expenses and Reimbursement</label>
        </div>

        <br>
        <h5>Optional</h5>
        <div>
          <input type="checkbox" id="8.14e" name="childsupportRei" />
          <label for="8.14e">Documentation Required for Reimbursement of Child-Related Expenses</label>
        </div>
        <br>
        <h5>Reimbursement Method</h5>
        <p>Parents shall use the following method to
          reimburse each other for child-related expenses: Check, Bank Account Transfer,
          Venmo, Our Family Wizard or other mutually agreed upon parenting expense tool or
          application, or <input type="text" name="reimburseMethod" />
        </p>

        <div class="row justify-content-center pt-4 pb-4">
          <button id="previous3" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="next3" onclick="nextToPage3()">Next Page</button>
          <!-- <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="next" onclick="nextHandler()">Next Page</button> -->
        </div>
      </div>

    </div>
  </form>
</div>

<script>
  function showPage(pageId) {
    document.getElementById("page0").style.display = "none";
    document.getElementById("page1").style.display = "none";
    document.getElementById("page2").style.display = "none";
    document.getElementById("page3").style.display = "none";
    document.getElementById(pageId).style.display = "block";
  }

  function nextHandler() {
    showPage('page2');
  }

  function nextToPage3() {
    showPage('page3');
  }

  function previousHandler() {
    showPage('page1');
  }
</script>