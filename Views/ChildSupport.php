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
          <input type="radio" name="childSupport" id="sameState" value="sameState" onclick="sameStateMoreInfo()" />
          <label for="sameState">Child Support Guidelines Amount when Parents Reside in the Same State</label>
        </div>


        <div class="container card p-4" id="sameStateInfo" style="display: none;">
          Child support shall be paid by <select id="parentAB1">
            <option value="parentA1">Parent A</option>
            <option value="parentB1">Parent B</option>
          </select> to <select id="parentAB2">
            <option value="parentA2">Parent A</option>
            <option value="parentB2" selected>Parent B</option>
          </select> and calculated pursuant to the State child support guidelines
          worksheet.
        </div>

        <div>
          <input type="radio" name="childSupport" id="mutuAgreed" value="mutuAgreed" onclick="mutuAgreedMoreInfo()" />
          <label for="mutuAgreed">Mutually Agreed Upon Amount Alternative</label>
        </div>
        <div class="container card p-4" id="mutuAgreedInfo" style="display: none;">
          Child Support shall be paid by <select id="parentAB2">
            <option value="parentA2">Parent A</option>
            <option value="parentB2">Parent B</option>
          </select> to
          <select id="parentAB3">
            <option value="parentA3">Parent A</option>
            <option value="parentB3" selected>Parent B</option>
          </select> by agreement of the Parents in the amount of $<input type="number" name="mutual-1" style="width: 100px;" step="0.01" />/per Child per month
          for a total monthly child support amount of $<input type="number" name="mutual-2" style="width: 100px;" step="0.01" />. Both Parents understand that
          child support is modifiable going forward and at any time either Parent may request that
          child support be calculated pursuant to their State guidelines and ordered to be paid
          pursuant to and Order for Income Withholding (or similar order) via the State Child
          Support Enforcement Agency.
        </div>

        <div>
          <input type="radio" name="childSupport" id="noAgree" value="noAgree" onclick="noAgreeMore()" />
          <label for="noAgree">No Agreement of the Parents Re Monthly Child Support Amount and/or Jurisdiction</label>
        </div>

        <div class="container card p-4" id="noAgreeInfo" style="display: none;">
          Parents do not agree on the amount of Child Support to be paid and/or on which State should have
          jurisdiction to calculate child support under the Uniform Interstate Family Support Act.
          Parents agree to litigate the issue of child support through the Family Court and/or the
          State Child Support Enforcement Agency. <b>Note: In many states, physical custody
            and timesharing with the Child(ren) impacts the calculation of child support. If
            the child support amount if going to be litigated through the Family Court or
            administratively through the State Child Support Enforcement Agency, Parents
            are hereby advised to seek independent legal counsel before making any
            agreements regarding physical custody and timesharing.</b>
        </div>


        <div>
          <input type="radio" name="childSupport" id="alternative" value="alternative" />
          <label for="alternative">Child Support Account Alternative</label>
        </div>

        <br>
        <h4>Payment</h4>
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
          <input type="radio" name="insurance" id="soleResp" value="soleResp" onclick="soleMore()" />
          <label for="soleResp">Sole Responsibility</label>
        </div>

        <div class="container card p-4" id="soleInfo" style="display: none;">
          <select id="parentAB4">
            <option value="parentA4">Parent A</option>
            <option value="parentB4">Parent B</option>
          </select> shall cover 100% of the Child(ren)’s
          uninsured co-pays for health-related expenses premiums in the amount of <br>$<input type="number" name="sole-1" style="width: 100px;" step="0.01" />/per month.
        </div>

        <div>
          <input type="radio" name="insurance" id="splitResp" value="splitResp" onclick="splitMore()" />
          <label for="splitResp">Split Responsibility</label>
        </div>

        <div class="container card p-4" id="splitInfo" style="display: none;">
          Parent A shall cover <input type="number" name="split-1" id="split-1" style="width: 100px;" step="0.01" oninput="updateSplit2()" />% and Parent B shall
          cover <input type="number" name="split-2" id="split-2" style="width: 100px;" step="0.01" oninput="updateSplit1()" />% of the Child(ren)'s uninsured co-pays for health-related expenses
          premiums in the amount of $<input type="number" name="split-3" style="width: 100px;" step="0.01" /> per month.
        </div>

        <div>
          <input type="radio" name="insurance" id="threshold" value="threshold" onclick="thresholdMore()" />
          <label for="thresold">Responsibility for Threshold Amount</label>
        </div>

        <div class="container card p-4" id="thresholdInfo" style="display: none;">
          Each Parent shall cover
          up to $<input type="number" name="threshold1" style="width: 100px;" step="0.01" /> per Child per calendar year in uninsured co-pays for health-related
          expenses. In the event that any Child's uninsured co-pays for health-related expenses
          paid by either parent exceeds $<input type="number" name="threshold2" style="width: 100px;" step="0.01" />per calendar year, then Parent A shall cover
          <input type="number" name="threshold3" id="threshold3" style="width: 100px;" step="0.01" oninput="updateThreshold4()" />% and
          Parent B shall cover <input type="number" name="threshold4" id="threshold4" style="width: 100px;" step="0.01" oninput="updateThreshold3()" />% of
          the Child(ren)'s uninsured co-pays for health-related expenses premiums exceeding the threshold amount.
        </div>

        <div class="row justify-content-center pt-4 pb-4">
          <button id="previous1" onClick="showPage('page0')">Previous Page</button> &nbsp;&nbsp;
          <button id="next1" onclick="nextHandler()">Next Page</button>
          <!-- <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="another" onclick="nextHandler()">Next Page</button> -->
        </div>

      </div>

      <div id="page2" class="container card pt-4" style="display: none;">
        <h1>Child Support</h1>
        <br>
        <div class="card-header">
          <h4>Extracurricular Expenses</h4>
        </div><br>
        <!-- <hr><h4>Extracurricular Expenses</h4><hr> -->
        <div>
          <input type="radio" name="extraCurr" id="extraSoleResp" value="extraSoleResp" onclick="soleECMore()" />
          <label for="extraSoleResp">Sole Responsibility</label>
        </div>

        <div class="container card p-4" id="soleECInfo" style="display: none;">
          <select id="parentAB_EC">
            <option value="parentA_EC">Parent A</option>
            <option value="parentB_EC">Parent B</option>
          </select> shall cover 100% of the Child(ren)'s extracurricular expenses.
        </div>

        <div>
          <input type="radio" name="extraCurr" id="extraSplitResp" value="extraSplitResp" onclick="splitECMore()" />
          <label for="extraSplitResp">Split Responsibility</label>
        </div>

        <div class="container card p-4" id="splitECInfo" style="display: none;">
          Parent A shall cover <input type="number" name="splitEC-1" id="splitEC-1" style="width: 100px;" step="0.01" oninput="updateSplitEC2()" />% and Parent B shall
          cover <input type="number" name="splitEC-2" id="splitEC-2" style="width: 100px;" step="0.01" oninput="updateSplitEC1()" />% of the Child(ren)'s extracurricular expenses.
        </div>

        <div>
          <input type="radio" name="extraCurr" id="pursuant" value="pursuant" onclick="pursuantECMore()" />
          <label for="pursuant">Selecting Extracurricular Activities for the Child(ren) Pursuant to 7.10 Hereinabove</label>
        </div>

        <div class="container card p-4" id="pursuantECInfo" style="display: none;">
          If the Parents have elected to separately select
          and pay for one extra-curricular activity that occurs no more than once a week for each
          Child, then the other Parent shall be expected to take each Child to that activity and
          support the Child's participation during the time that the Child is in their care, pursuant
          to Paragraph 7.10 hereinabove. Each Parent shall pay for 100% of their selected
          extracurricular activity, which shall include supplies, uniforms, travel out-of-state, and
          other expenses required for the Child to participate.
        </div>

        <div>
          <input type="radio" name="extraCurr" id="mutuallyExtra" value="mutuallyExtra" onclick="mutuallyExtraMore()" />
          <label for="mutuallyExtra">Extracurricular Activities Must Be Mutually Agreed Upon</label>
        </div>

        <div class="container card p-4" id="mutuallyExtraInfo" style="display: none;">
          Parents shall only be responsible for paying for extracurricular activities that
          are mutually agreed upon by both Parents. Parents agree to consult and be guided by
          the Child's preferences in selecting mutually agreed upon extracurricular activities.
        </div>

        <br>
        <div class="card-header">
          <h4>Private School Expenses</h4>
        </div><br>
        <!-- <hr><h4>Private School Expenses</h4><hr> -->
        <div>
          <input type="radio" name="privateSchool" id="privateSoleResp" value="privateSoleResp" onclick="privateSoleMore()" />
          <label for="extraSoleResp">Sole Responsibility</label>
        </div>

        <div class="container card p-4" id="solePrivateInfo" style="display: none;">
          <select id="parentAB_Priv">
            <option value="parentA_Priv">Parent A</option>
            <option value="parentB_Priv">Parent B</option>
          </select> shall cover 100% of the Child(ren)'s private school expenses.
        </div>

        <div class="container card p-4" id="soleECInfo" style="display: none;">
          <select id="parentAB_EC">
            <option value="parentA_EC">Parent A</option>
            <option value="parentB_EC">Parent B</option>
          </select> shall cover 100% of the Child(ren)'s extracurricular expenses.
        </div>

        <div>
          <input type="radio" name="privateSchool" id="privateSplitResp" value="privateSplitResp" onclick="privSplitMore()" />
          <label for="extraSplitResp">Split Responsibility</label>
        </div>

        <div class="container card p-4" id="splitPrivInfo" style="display: none;">
          Parent A shall cover <input type="number" name="splitPriv-1" id="splitPriv-1" style="width: 100px;" step="0.01" oninput="updateSplitPriv2()" />% and Parent B shall
          cover <input type="number" name="splitPriv-2" id="splitPriv-2" style="width: 100px;" step="0.01" oninput="updateSplitPriv1()" />% of the Child(ren)'s private school expenses.
        </div>

        <div>
          <input type="radio" name="privateSchool" id="defPrivateSchool" value="defPrivateSchool" onclick="privSchoolDefMore()" />
          <label for="defPrivateSchool">Definition of Private School Expenses</label>
        </div>

        <div class="container card p-4" id="defPrivSchoolInfo" style="display: none;">
          Private school expenses shall be defined to include all expenses related to a Child's attendance at a
          private school including, without limitation, application fees/costs, tuition, books,
          uniforms, school lunches, and before and/or after school care expenses.
        </div>

        <div>
          <input type="radio" name="privateSchool" id="privateSchoolMutual" value="privateSchoolMutual" onclick="privSchoolMutMore()" />
          <label for="privateSchoolMutual">Mutual Agreement of Parents</label>
        </div>

        <div class="container card p-4" id="mutPrivSchoolInfo" style="display: none;">
          Either Parent may apply for a Child to attend private school but unless one parent has sole legal custody, both
          Parents must approve the enrollment of any Child in a private school.
        </div>

        <div>
          <input type="radio" name="privateSchool" id="privateReserve" value="privateReserve" onclick="privReserveMore()" />
          <label for="privateReserve">Reserve</label>
        </div>

        <div class="container card p-4" id="privReserveInfo" style="display: none;">
          Parents shall reserve the issue of private school expenses.
        </div>

        <br>
        <div class="card-header">
          <h4>Post-High School Expenses</h4>
        </div><br>
        <!-- <hr><h4>Post-High School Expenses</h4><hr> -->
        <div>
          <input type="radio" name="postHigh" id="postSoleResp" value="postSoleResp" onclick="postSoleRespMore()" />
          <label for="postSoleResp">Sole Responsibility</label>
        </div>

        <div class="container card p-4" id="soleHighInfo" style="display: none;">
          <select id="parentAB_High">
            <option value="parentA_High">Parent A</option>
            <option value="parentB_High">Parent B</option>
          </select> shall cover 100% of the Child(ren)'s post-high school education expenses.
        </div>

        <div>
          <input type="radio" name="postHigh" id="postSplitResp" value="postSplitResp" onclick="postSplitRespMore()" />
          <label for="postSplitResp">Split Responsibility</label>
        </div>

        <div class="container card p-4" id="splitHighInfo" style="display: none;">
          Parent A shall cover <input type="number" name="splitHigh-1" id="splitHigh-1" style="width: 100px;" step="0.01" oninput="updateSplitHigh2()" />% and Parent B shall
          cover <input type="number" name="splitHigh-2" id="splitHigh-2" style="width: 100px;" step="0.01" oninput="updateSplitHigh1()" />% of the Child(ren)'s post-high school education expenses.
        </div>

        <div>
          <input type="radio" name="postHigh" id="postSole529" value="postSole529" onclick="postSole529More()" />
          <label for="postSole529">Sole Responsibility After Funds from Any 529 Accounts</label>
        </div>

        <div class="container card p-4" id="postSole529Info" style="display: none;">
          <u>SOLE RESPONSIBILITY AFTER FUNDS FROM ANY 529 ACCOUNTS
            HELD ON BEHALF OF A CHILD OR CHILD(REN), COVERDELL ACCOUNTS OR
            OTHER FUNDS EAR-MARKED TO PAY FOR A CHILD’S POST-HIGH SCHOOL
            EDUCATION EXPENSES</u>. After funds from any 529 accounts held on behalf of a Child
          or Child(ren), Coverdell accounts or other funds ear-marked to pay for a Child’s post-
          high school education expenses are expended, then <select id="parentAB_Sole529">
            <option value="parentA_Sole529">Parent A</option>
            <option value="parentB_Sole529">Parent B</option>
          </select> shall cover 100% of
          the Child(ren)’s remaining post-high school education expenses.
        </div>

        <div>
          <input type="radio" name="postHigh" id="postSplit529" value="postSplit529" />
          <label for="postSplit529">Split Responsibility After Funds from Any 529 Accounts</label>
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
          <button id="next3" onclick="submit()">Next Page</button>
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


  function mutuAgreedMoreInfo() {
    var b = document.getElementById('mutuAgreedInfo');
    b.style.display = document.getElementById('mutuAgreed').checked ? 'block' : 'none';
  }

  var radioButtonsY = document.querySelectorAll('input[type="radio"][name="childSupport"]');
  radioButtonsY.forEach(function(radioButton1) {
    radioButton1.addEventListener('change', function() {
      mutuAgreedMoreInfo();
    });
  });

  function sameStateMoreInfo() {
    var b = document.getElementById('sameStateInfo');
    b.style.display = document.getElementById('sameState').checked ? 'block' : 'none';
  }

  var radioButtonsA = document.querySelectorAll('input[type="radio"][name="childSupport"]');
  radioButtonsA.forEach(function(radioButton2) {
    radioButton2.addEventListener('change', function() {
      sameStateMoreInfo();
    });
  });

  function noAgreeMore() {
    var b = document.getElementById('noAgreeInfo');
    b.style.display = document.getElementById('noAgree').checked ? 'block' : 'none';
  }

  var radioButtonsB = document.querySelectorAll('input[type="radio"][name="childSupport"]');
  radioButtonsB.forEach(function(radioButton3) {
    radioButton3.addEventListener('change', function() {
      noAgreeMore();
    });
  });

  function soleMore() {
    var b = document.getElementById('soleInfo');
    b.style.display = document.getElementById('soleResp').checked ? 'block' : 'none';
  }

  var radioButtonsC = document.querySelectorAll('input[type="radio"][name="insurance"]');
  radioButtonsC.forEach(function(radioButton4) {
    radioButton4.addEventListener('change', function() {
      soleMore();
    });
  });

  function splitMore() {
    var b = document.getElementById('splitInfo');
    b.style.display = document.getElementById('splitResp').checked ? 'block' : 'none';
  }

  var radioButtonsD = document.querySelectorAll('input[type="radio"][name="insurance"]');
  radioButtonsD.forEach(function(radioButton5) {
    radioButton5.addEventListener('change', function() {
      splitMore();
    });
  });

  function thresholdMore() {
    var b = document.getElementById('thresholdInfo');
    b.style.display = document.getElementById('threshold').checked ? 'block' : 'none';
  }

  var radioButtonsE = document.querySelectorAll('input[type="radio"][name="insurance"]');
  radioButtonsE.forEach(function(radioButton6) {
    radioButton6.addEventListener('change', function() {
      thresholdMore();
    });
  });

  function soleECMore() {
    var b = document.getElementById('soleECInfo');
    b.style.display = document.getElementById('extraSoleResp').checked ? 'block' : 'none';
  }

  var radioButtonsF = document.querySelectorAll('input[type="radio"][name="extraCurr"]');
  radioButtonsF.forEach(function(radioButton7) {
    radioButton7.addEventListener('change', function() {
      soleECMore();
    });
  });

  function splitECMore() {
    var b = document.getElementById('splitECInfo');
    b.style.display = document.getElementById('extraSplitResp').checked ? 'block' : 'none';
  }

  var radioButtonsG = document.querySelectorAll('input[type="radio"][name="extraCurr"]');
  radioButtonsG.forEach(function(radioButton8) {
    radioButton8.addEventListener('change', function() {
      splitECMore();
    });
  });

  function pursuantECMore() {
    var b = document.getElementById('pursuantECInfo');
    b.style.display = document.getElementById('pursuant').checked ? 'block' : 'none';
  }

  var radioButtonsH = document.querySelectorAll('input[type="radio"][name="extraCurr"]');
  radioButtonsH.forEach(function(radioButton9) {
    radioButton9.addEventListener('change', function() {
      pursuantECMore();
    });
  });

  function mutuallyExtraMore() {
    var b = document.getElementById('mutuallyExtraInfo');
    b.style.display = document.getElementById('mutuallyExtra').checked ? 'block' : 'none';
  }

  var radioButtonsI = document.querySelectorAll('input[type="radio"][name="extraCurr"]');
  radioButtonsI.forEach(function(radioButton10) {
    radioButton10.addEventListener('change', function() {
      mutuallyExtraMore();
    });
  });

  function privateSoleMore() {
    var b = document.getElementById('solePrivateInfo');
    b.style.display = document.getElementById('privateSoleResp').checked ? 'block' : 'none';
  }

  var radioButtonsJ = document.querySelectorAll('input[type="radio"][name="privateSchool"]');
  radioButtonsJ.forEach(function(radioButton11) {
    radioButton11.addEventListener('change', function() {
      privateSoleMore();
    });
  });

  function privSplitMore() {
    var b = document.getElementById('splitPrivInfo');
    b.style.display = document.getElementById('privateSplitResp').checked ? 'block' : 'none';
  }

  var radioButtonsK = document.querySelectorAll('input[type="radio"][name="privateSchool"]');
  radioButtonsK.forEach(function(radioButton12) {
    radioButton12.addEventListener('change', function() {
      privSplitMore();
    });
  });

  function privSchoolDefMore() {
    var b = document.getElementById('defPrivSchoolInfo');
    b.style.display = document.getElementById('defPrivateSchool').checked ? 'block' : 'none';
  }

  var radioButtonsL = document.querySelectorAll('input[type="radio"][name="privateSchool"]');
  radioButtonsL.forEach(function(radioButton13) {
    radioButton13.addEventListener('change', function() {
      privSchoolDefMore();
    });
  });


  function privSchoolMutMore() {
    var b = document.getElementById('mutPrivSchoolInfo');
    b.style.display = document.getElementById('privateSchoolMutual').checked ? 'block' : 'none';
  }

  var radioButtonsM = document.querySelectorAll('input[type="radio"][name="privateSchool"]');
  radioButtonsM.forEach(function(radioButton14) {
    radioButton14.addEventListener('change', function() {
      privSchoolMutMore();
    });
  });

  function privReserveMore() {
    var b = document.getElementById('privReserveInfo');
    b.style.display = document.getElementById('privateReserve').checked ? 'block' : 'none';
  }

  var radioButtonsN = document.querySelectorAll('input[type="radio"][name="privateSchool"]');
  radioButtonsN.forEach(function(radioButton15) {
    radioButton15.addEventListener('change', function() {
      privReserveMore();
    });
  });

  function postSoleRespMore() {
    var b = document.getElementById('soleHighInfo');
    b.style.display = document.getElementById('postSoleResp').checked ? 'block' : 'none';
  }

  var radioButtonsO = document.querySelectorAll('input[type="radio"][name="postHigh"]');
  radioButtonsO.forEach(function(radioButton16) {
    radioButton16.addEventListener('change', function() {
      postSoleRespMore();
    });
  });

  function postSplitRespMore() {
    var b = document.getElementById('splitHighInfo');
    b.style.display = document.getElementById('postSplitResp').checked ? 'block' : 'none';
  }

  var radioButtonsP = document.querySelectorAll('input[type="radio"][name="postHigh"]');
  radioButtonsP.forEach(function(radioButton17) {
    radioButton17.addEventListener('change', function() {
      postSplitRespMore();
    });
  });

  function postSole529More() {
    var b = document.getElementById('postSole529Info');
    b.style.display = document.getElementById('postSole529').checked ? 'block' : 'none';
  }

  var radioButtonsQ = document.querySelectorAll('input[type="radio"][name="postHigh"]');
  radioButtonsQ.forEach(function(radioButton18) {
    radioButton18.addEventListener('change', function() {
      postSole529More();
    });
  });

  // for updating Uninsured Co-Pays for Health-Related Expenses -> Spilt Responsibility
  function updateSplit2() {
    const split1Input = document.getElementById("split-1");
    const split2Input = document.getElementById("split-2");

    const split1Value = parseFloat(split1Input.value);
    const split2Value = 100 - split1Value;

    split2Input.value = split2Value //.toFixed(2);
  }

  function updateSplit1() {
    const split1Input = document.getElementById("split-1");
    const split2Input = document.getElementById("split-2");

    const split2Value = parseFloat(split2Input.value);
    const split1Value = 100 - split2Value;

    split1Input.value = split1Value
  }

  function updateThreshold4() {
    const x = document.getElementById("threshold3");
    const y = document.getElementById("threshold4");

    const a = parseFloat(x.value);
    const b = 100 - a;

    y.value = b
  }

  function updateThreshold3() {
    const x = document.getElementById("threshold3");
    const y = document.getElementById("threshold4");

    const a = parseFloat(y.value);
    const b = 100 - a;

    x.value = b
  }

  function updateSplitEC2() {
    const split1Input = document.getElementById("splitEC-1");
    const split2Input = document.getElementById("splitEC-2");

    const split1Value = parseFloat(split1Input.value);
    const split2Value = 100 - split1Value;

    split2Input.value = split2Value
  }

  function updateSplitEC1() {
    const split1Input = document.getElementById("splitEC-1");
    const split2Input = document.getElementById("splitEC-2");

    const split2Value = parseFloat(split2Input.value);
    const split1Value = 100 - split2Value;

    split1Input.value = split1Value
  }

  function updateSplitPriv2() {
    const split1Input = document.getElementById("splitPriv-1");
    const split2Input = document.getElementById("splitPriv-2");

    const split1Value = parseFloat(split1Input.value);
    const split2Value = 100 - split1Value;

    split2Input.value = split2Value
  }

  function updateSplitPriv1() {
    const split1Input = document.getElementById("splitPriv-1");
    const split2Input = document.getElementById("splitPriv-2");

    const split2Value = parseFloat(split2Input.value);
    const split1Value = 100 - split2Value;

    split1Input.value = split1Value
  }

  function updateSplitHigh2() {
    const split1Input = document.getElementById("splitHigh-1");
    const split2Input = document.getElementById("splitHigh-2");

    const split1Value = parseFloat(split1Input.value);
    const split2Value = 100 - split1Value;

    split2Input.value = split2Value
  }

  function updateSplitHigh1() {
    const split1Input = document.getElementById("splitHigh-1");
    const split2Input = document.getElementById("splitHigh-2");

    const split2Value = parseFloat(split2Input.value);
    const split1Value = 100 - split2Value;

    split1Input.value = split1Value
  }
</script>