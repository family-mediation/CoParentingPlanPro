<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="./?page=7" onsubmit="return false;">
    <div id="mainForm">
      <div id="page0" class="container card p-4">
        <h1>Child Support</h1>
        <br>
        <div class="card-header">
          <h4>Child Support Guidelines Amount under the Law</h4>
        </div><br>
        <div>Each State has Child Support Guidelines used to calculate monthly
          child support. Each parent shall be bound by and follow the Uniform Interstate Family
          Support Act.</div>

        <br>
        <h4>Pick only one</h4>
        <div>
          <input type="radio" name="childSupport" id="sameState" value="sameState" onclick="sameStateMoreInfo()" />
          <label for="sameState">Child Support Guidelines Amount when Parents Reside in the Same State</label>
        </div>


        <div class="container card p-4" id="sameStateInfo" style="display: none;">
          Child support shall be paid by <select id="parentAB1" name="parentAB1">
            <option value="Parent A">Parent A</option>
            <option value="Parent B">Parent B</option>
          </select> to <select id="parentAB2" name="parentAB2">
            <option value="Parent A">Parent A</option>
            <option value="Parent B" selected>Parent B</option>
          </select> and calculated pursuant to the State child support guidelines
          worksheet.
        </div>

        <div>
          <input type="radio" name="childSupport" id="mutuAgreed" value="mutuAgreed" onclick="mutuAgreedMoreInfo()" />
          <label for="mutuAgreed">Mutually Agreed Upon Amount Alternative</label>
        </div>
        <div class="container card p-4" id="mutuAgreedInfo" style="display: none;">
          Child Support shall be paid by <select id="parentAB3" name="parentAB3">
            <option value="Parent A">Parent A</option>
            <option value="Parent B">Parent B</option>
          </select> to
          <select id="parentAB4" name="parentAB4">
            <option value="Parent A">Parent A</option>
            <option value="Parent B" selected>Parent B</option>
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
        <div class="card-header">
          <h4>Payment</h4>
        </div><br>
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
        <div class="card-header">
          <h4>Health Insurance Premiums</h4>
        </div><br>
        <p><select id="parentAB5" name="parentAB5">
            <option value="Parent A">Parent A</option>
            <option value="Parent B">Parent B</option>
          </select> shall cover the Child(ren)'s health insurance premiums in the amount of
          $<input type="number" name="insurancePremium" style="width: 100px;" step="0.01" />
          per month.</p>
        <br>
        <div class="card-header">
          <h4>Uninsured Co-Pays for Health-Related Expenses</h4>
        </div><br>
        <div>
          <input type="radio" name="insurance" id="soleResp" value="soleResp" onclick="soleMore()" />
          <label for="soleResp">Sole Responsibility</label>
        </div>

        <div class="container card p-4" id="soleInfo" style="display: none;">
          <select id="parentAB6" name="parentAB6">
            <option value="Parent A">Parent A</option>
            <option value="Parent B">Parent B</option>
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
          <button id="next1" onclick="showPage('page2')">Next Page</button>
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
          <select id="parentAB_EC" name="parentAB_EC">
            <option value="Parent A">Parent A</option>
            <option value="Parent B">Parent B</option>
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
          Definition of Private School Expenses
          <i class="bi bi-caret-down-square-fill" onclick="privSchoolDefMore()"></i>
        </div>

        <div class="container card p-4" id="defPrivSchoolInfo" style="display: none;">
          Private school expenses shall be defined to include all expenses related to a Child's attendance at a
          private school including, without limitation, application fees/costs, tuition, books,
          uniforms, school lunches, and before and/or after school care expenses.
        </div>

        <div>
          <input type="radio" name="privateSchool" id="privateSoleResp" value="privateSoleResp" onclick="privateSoleMore()" />
          <label for="privateSoleResp">Sole Responsibility</label>
        </div>

        <div class="container card p-4" id="solePrivateInfo" style="display: none;">
          <select id="parentAB_Priv" name="parentAB_Priv">
            <option value="Parent A">Parent A</option>
            <option value="Parent B">Parent B</option>
          </select> shall cover 100% of the Child(ren)'s private school expenses.
        </div>

        <div>
          <input type="radio" name="privateSchool" id="privateSplitResp" value="privateSplitResp" onclick="privSplitMore()" />
          <label for="privateSplitResp">Split Responsibility</label>
        </div>

        <div class="container card p-4" id="splitPrivInfo" style="display: none;">
          Parent A shall cover <input type="number" name="splitPriv-1" id="splitPriv-1" style="width: 100px;" step="0.01" oninput="updateSplitPriv2()" />% and Parent B shall
          cover <input type="number" name="splitPriv-2" id="splitPriv-2" style="width: 100px;" step="0.01" oninput="updateSplitPriv1()" />% of the Child(ren)'s private school expenses.
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
          Definition of Post-High School Education Expenses
          <i class="bi bi-caret-down-square-fill" onclick="postCapDefMore()"></i>
        </div>

        <div class="container card p-4" id="postCapDefInfo" style="display: none;">
          Private school expenses shall be defined to include all expenses related to a Child’s
          attendance at any post-high school educational institution (including vocational and
          trade schools), without limitation, application fees/costs, tuition, books, uniforms, school
          lunches, and before and/or after school care expenses.
        </div>

        <div>
          <input type="radio" name="postHigh" id="postSoleResp" value="postSoleResp" onclick="postSoleRespMore()" />
          <label for="postSoleResp">Sole Responsibility</label>
        </div>

        <div class="container card p-4" id="soleHighInfo" style="display: none;">
          <select id="parentAB_High" name="parentAB_High">
            <option value="Parent A">Parent A</option>
            <option value="Parent B">Parent B</option>
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
          high school education expenses are expended, then <select id="parentAB_Sole529" name="parentAB_Sole529">
            <option value="Parent A">Parent A</option>
            <option value="Parent B">Parent B</option>
          </select> shall cover 100% of
          the Child(ren)’s remaining post-high school education expenses.
        </div>

        <div>
          <input type="radio" name="postHigh" id="postSplit529" value="postSplit529" onclick="postSplit529More()" />
          <label for="postSplit529">Split Responsibility After Funds from Any 529 Accounts</label>
        </div>

        <div class="container card p-4" id="postSplit529Info" style="display: none;">
          <u>SPLIT RESPONSIBILITY AFTER FUNDS FROM ANY 529 ACCOUNTS
            HELD ON BEHALF OF A CHILD OR CHILD(REN), COVERDELL ACCOUNTS OR
            OTHER FUNDS EAR-MARKED TO PAY FOR A CHILD’S POST-HIGH SCHOOL
            EDUCATION EXPENSES</u>. After funds from any 529 accounts held on behalf of a Child
          or Child(ren), Coverdell accounts or other funds ear-marked to pay for a Child’s post-
          high school education expenses are expended, then Parent A shall cover
          <input type="number" name="split529-1" id="split529-1" style="width: 100px;" step="0.01" oninput="update529Split2()" />% and
          Parent B shall cover <input type="number" name="split529-2" id="split529-2" style="width: 100px;" step="0.01" oninput="update529Split1()" />%
          of the Child(ren)’s remaining post-high school education expenses.
        </div>

        <div>
          <input type="radio" name="postHigh" id="postCap" value="postCap" onclick="postCapMore()" />
          <label for="postCap">Cap on Payment by Each Parent per Academic School Year</label>
        </div>

        <div class="container card p-4" id="postCapInfo" style="display: none;">
          The Child(ren)’s post-high school education expenses shall be paid such that
          Parent A shall cover <input type="number" name="postCap-1" id="postCap-1" style="width: 100px;" step="0.01" oninput="updatePostCap2()" />%
          up to a cap of $<input type="number" name="postCapA" style="width: 100px;" step="0.01" /> amount per academic school year
          and Parent B shall cover <input type="number" name="postCap-2" id="postCap-2" style="width: 100px;" step="0.01" oninput="updatePostCap1()" />%
          up to a cap of $<input type="number" name="postCapB" style="width: 100px;" step="0.01" /> amount per academic school
          year.
        </div>

        <div>
          <input type="radio" name="postHigh" id="postMutual" value="postMutual" onclick="postMutualMore()" />
          <label for="postMutual">Mutual Agreement of Parents</label>
        </div>

        <div class="container card p-4" id="postMutualInfo" style="display: none;">
          Either Parent may apply for a Child to attend a post-high school education institution (includes trade and vocational
          schools), but in order for the other Parent to be financially responsible, both Parents
          must approve the enrollment of any Child or Adult Child in a post-high school
          educational institution.
        </div>

        <div>
          <input type="radio" name="postHigh" id="postReserve" value="postReserve" onclick="postReserveMore()" />
          <label for="postReserve">Reserve</label>
        </div>

        <div class="container card p-4" id="postReserveInfo" style="display: none;">
          Parents shall reserve the issue of post-high school educational school expenses.
        </div>

        <div class="row justify-content-center pt-4 pb-4">
          <button id="previous2" onclick="showPage('page1')">Previous Page</button> &nbsp;&nbsp;
          <button id="next2" onclick="showPage('page3')">Next Page</button>
          <!-- <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="next" onclick="nextHandler()">Next Page</button> -->
        </div>
      </div>

      <div id="page3" class="container card p-4" style="display: none;">
        <h1>Child Support</h1>
        <br>
        <div class="card-header">
          <h4>Claiming the Child(ren) as a Dependent for Tax Purposes</h4>
        </div><br>
        <div>
          <input type="radio" name="taxPurpose" id="taxSole" value="taxSole" onclick="taxSoleMore()" />
          <label for="taxSole">Sole Authority to Claim the Child(ren)</label>
        </div>

        <div class="container card p-4" id="taxSoleInfo" style="display: none;">
          <select id="parentAB_taxSole" name="parentAB_taxSole">
            <option value="Parent A">Parent A</option>
            <option value="Parent B">Parent B</option>
          </select> shall be entitled to claim any Child(ren) as a dependent for tax purposes every year.
        </div>

        <div>
          <input type="radio" name="taxPurpose" id="taxSplit" value="taxSplit" onclick="taxSplitMore()" />
          <label for="taxSplit">Split Authority to Claim the Child(ren)</label>
        </div>

        <div class="container card p-4" id="taxSplitInfo" style="display: none;">
          Parent A shall be entitled to claim <input type="text" name="partyATax" placeholder="Child's Initials" style="width: 300px;" required>
          as a dependent for tax purposes every year.
          <br><br>Parent B shall be entitled to claim <input type="text" name="partyBTax" placeholder="Child's Initials" style="width: 300px;" required>
          as a dependent for tax purposes every year.
        </div>

        <div>
          <input type="radio" name="taxPurpose" id="taxAlt" value="taxAlt" onclick="taxAltMore()" />
          <label for="taxAlt">Split Authority to Claim the Child(ren) then Alternate</label>
        </div>

        <div class="container card p-4" id="taxAltInfo" style="display: none;">
          Parent A shall be entitled to claim <input type="text" name="partyATaxAlt" placeholder="Child's Initials" style="width: 300px;" required>
          as a dependent for tax purposes every year.
          <br><br>Parent B shall be entitled to claim <input type="text" name="partyBTaxAlt" placeholder="Child's Initials" style="width: 300px;" required>
          as a dependent for tax purposes every year. <br><br>Once the older Child is no longer eligible to be
          claimed for tax purposes, then the Parents shall alternate claiming the younger Child.
        </div>

        <div>
          <input type="radio" name="taxPurpose" id="taxAltAut" value="taxAltAut" onclick="taxAltAutMore()" />
          <label for="taxAltAut">Alternate Authority to Claim the Child(ren)</label>
        </div>

        <div class="container card p-4" id="taxAltAutInfo" style="display: none;">
          Parent A shall be entitled to claim the Child(ren) as dependent(s) for tax purposes in even years.<br>
          Parent B shall be entitled to claim the Child(ren) as dependent(s) for tax purposes in odd years.
        </div>

        <br>
        <div class="card-header">
          <h4>Protocols for Reimbursement of Child-Related Expenses</h4>
        </div><br>
        <div>
          <input type="radio" name="protocols" id="timeframe" value="timeframe" onclick="timeframeMore()" />
          <label for="timeframe">Timeframe for Reimbursement of Child-Related Expenses and Reimbursement</label>
        </div>

        <div class="container card p-4" id="timeframeInfo" style="display: none;">
          Upon a request in writing (text or email is ok) from a Parent for
          reimbursement, the other Parent shall reimburse the requesting Parent within <input type="number" name="timeVal" id="timeVal" style="width: 100px;" step="1" />
          days.
        </div>

        <div>
          <input type="radio" name="protocols" id="monthlyCal" value="monthlyCal" onclick="monthlyCalMore()" />
          <label for="monthlyCal">Monthly Calculation of Child-Related Expenses and Reimbursement</label>
        </div>

        <div class="container card p-4" id="monthlyCalInfo" style="display: none;">
          Parents shall calculate child-related expenses and reimburse each other on a monthly basis.
        </div>

        <div>
          <input type="radio" name="protocols" id="quarterCal" value="quarterCal" onclick="quarterCalMore()" />
          <label for="quarterCal">Quarterly Calculation of Child-Related Expenses and Reimbursement</label>
        </div>

        <div class="container card p-4" id="quarterCalInfo" style="display: none;">
          Parents shall calculate child-related expenses and reimburse each other on a quarterly basis.
        </div>

        <div>
          <input type="radio" name="protocols" id="annualCal" value="annualCal" onclick="annualCalMore()" />
          <label for="annualCal">Annual Calculation of Child-Related Expenses and Reimbursement</label>
        </div>

        <div class="container card p-4" id="annualCalInfo" style="display: none;">
          Parents shall calculate child-related expenses and reimburse each other on an annual basis.
        </div>

        <br>
        <h5>Optional</h5>
        <div>
          <input type="checkbox" id="8.14e" name="childSupportRei" value="8.14e" onclick="supportReiMore()" />
          <label for="8.14e">Documentation Required for Reimbursement of Child-Related Expenses</label>
        </div>

        <div class="container card p-4" id="supportReiInfo" style="display: none;">
          A requesting Parent shall include written documentation proving the child-related expense in order to receive
          reimbursement from the other Parent.
        </div>

        <br>
        <h5>Reimbursement Method</h5>
        <p>Parents shall use the following method to
          reimburse each other for child-related expenses: Check, Bank Account Transfer,
          Venmo, Our Family Wizard or other mutually agreed upon parenting expense tool or
          application, or <input type="text" name="reimburseMethod" />
        </p>

        <div class="row justify-content-center pt-4 pb-4">
          <button id="previous3" onClick="showPage('page2')">Previous Page</button> &nbsp;&nbsp;
          <button id="next3" onclick="submit()">Next Section</button>
          <!-- <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="next" onclick="nextHandler()">Next Page</button> -->
        </div>
      </div>

    </div>
  </form>
</div>

<script>
  // for the page buttons 
  function showPage(pageId) {
    document.getElementById("page0").style.display = "none";
    document.getElementById("page1").style.display = "none";
    document.getElementById("page2").style.display = "none";
    document.getElementById("page3").style.display = "none";
    document.getElementById(pageId).style.display = "block";
  }
  // radio buttons: page 0 
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

  // radio buttons: page 1
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

  // radio buttons: page 2
  // Extracurricular expenses 
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

  // private school expenses 
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
    if (b.style.display === 'none') {
      b.style.display = 'block';
    } else {
      b.style.display = 'none';
    }
  }

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

  // post-high school expenses 
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

  function postSplit529More() {
    var b = document.getElementById('postSplit529Info');
    b.style.display = document.getElementById('postSplit529').checked ? 'block' : 'none';
  }

  var radioButtonsR = document.querySelectorAll('input[type="radio"][name="postHigh"]');
  radioButtonsR.forEach(function(radioButton19) {
    radioButton19.addEventListener('change', function() {
      postSplit529More();
    });
  });

  function postCapMore() {
    var b = document.getElementById('postCapInfo');
    b.style.display = document.getElementById('postCap').checked ? 'block' : 'none';
  }

  var radioButtonsS = document.querySelectorAll('input[type="radio"][name="postHigh"]');
  radioButtonsS.forEach(function(radioButton20) {
    radioButton20.addEventListener('change', function() {
      postCapMore();
    });
  });

  function postCapDefMore() {
    var b = document.getElementById('postCapDefInfo');
    if (b.style.display === 'none') {
      b.style.display = 'block';
    } else {
      b.style.display = 'none';
    }
  }

  function postMutualMore() {
    var b = document.getElementById('postMutualInfo');
    b.style.display = document.getElementById('postMutual').checked ? 'block' : 'none';
  }

  var radioButtonsU = document.querySelectorAll('input[type="radio"][name="postHigh"]');
  radioButtonsU.forEach(function(radioButton22) {
    radioButton22.addEventListener('change', function() {
      postMutualMore();
    });
  });

  function postReserveMore() {
    var b = document.getElementById('postReserveInfo');
    b.style.display = document.getElementById('postReserve').checked ? 'block' : 'none';
  }

  var radioButtonsV = document.querySelectorAll('input[type="radio"][name="postHigh"]');
  radioButtonsV.forEach(function(radioButton23) {
    radioButton23.addEventListener('change', function() {
      postReserveMore();
    });
  });

  // radio buttons: page 3
  function taxSoleMore() {
    var b = document.getElementById('taxSoleInfo');
    b.style.display = document.getElementById('taxSole').checked ? 'block' : 'none';
  }

  var radioButtonsW = document.querySelectorAll('input[type="radio"][name="taxPurpose"]');
  radioButtonsW.forEach(function(radioButton24) {
    radioButton24.addEventListener('change', function() {
      taxSoleMore();
    });
  });

  function taxSplitMore() {
    var b = document.getElementById('taxSplitInfo');
    b.style.display = document.getElementById('taxSplit').checked ? 'block' : 'none';
  }

  var radioButtonsX = document.querySelectorAll('input[type="radio"][name="taxPurpose"]');
  radioButtonsX.forEach(function(radioButton25) {
    radioButton25.addEventListener('change', function() {
      taxSplitMore();
    });
  });

  function taxAltMore() {
    var b = document.getElementById('taxAltInfo');
    b.style.display = document.getElementById('taxAlt').checked ? 'block' : 'none';
  }

  var radioButtonsY = document.querySelectorAll('input[type="radio"][name="taxPurpose"]');
  radioButtonsY.forEach(function(radioButton26) {
    radioButton26.addEventListener('change', function() {
      taxAltMore();
    });
  });

  function taxAltAutMore() {
    var b = document.getElementById('taxAltAutInfo');
    b.style.display = document.getElementById('taxAltAut').checked ? 'block' : 'none';
  }

  var radioButtonsZ = document.querySelectorAll('input[type="radio"][name="taxPurpose"]');
  radioButtonsZ.forEach(function(radioButton27) {
    radioButton27.addEventListener('change', function() {
      taxAltAutMore();
    });
  });

  function timeframeMore() {
    var b = document.getElementById('timeframeInfo');
    b.style.display = document.getElementById('timeframe').checked ? 'block' : 'none';
  }

  var radioButtonsAA = document.querySelectorAll('input[type="radio"][name="protocols"]');
  radioButtonsAA.forEach(function(radioButton28) {
    radioButton28.addEventListener('change', function() {
      timeframeMore();
    });
  });

  function monthlyCalMore() {
    var b = document.getElementById('monthlyCalInfo');
    b.style.display = document.getElementById('monthlyCal').checked ? 'block' : 'none';
  }

  var radioButtonsAB = document.querySelectorAll('input[type="radio"][name="protocols"]');
  radioButtonsAB.forEach(function(radioButton29) {
    radioButton29.addEventListener('change', function() {
      monthlyCalMore();
    });
  });

  function quarterCalMore() {
    var b = document.getElementById('quarterCalInfo');
    b.style.display = document.getElementById('quarterCal').checked ? 'block' : 'none';
  }

  var radioButtonsAC = document.querySelectorAll('input[type="radio"][name="protocols"]');
  radioButtonsAC.forEach(function(radioButton30) {
    radioButton30.addEventListener('change', function() {
      quarterCalMore();
    });
  });

  function annualCalMore() {
    var b = document.getElementById('annualCalInfo');
    b.style.display = document.getElementById('annualCal').checked ? 'block' : 'none';
  }

  var radioButtonsAD = document.querySelectorAll('input[type="radio"][name="protocols"]');
  radioButtonsAD.forEach(function(radioButton31) {
    radioButton31.addEventListener('change', function() {
      annualCalMore();
    });
  });


  function supportReiMore() {
    var b = document.getElementById('supportReiInfo');
    b.style.display = document.getElementById('8.14e').checked ? 'block' : 'none';
  }

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

  // for updating Uninsured Co-pays for Health-Related Expenses -> Responsibility for Threshold Amount 
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

  // for updating Extracurricular Expenses -> Spilt Responsibility
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

  // for updating Private School Expenses -> Spilt Responsibility
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

  // for updating Post-High School Expenses -> Spilt Responsibility
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

  // for updating Post-High School Expenses -> Spilt Responsibility after funds from 529 accounts
  function update529Split2() {
    const split1Input = document.getElementById("split529-1");
    const split2Input = document.getElementById("split529-2");

    const split1Value = parseFloat(split1Input.value);
    const split2Value = 100 - split1Value;

    split2Input.value = split2Value
  }

  function update529Split1() {
    const split1Input = document.getElementById("split529-1");
    const split2Input = document.getElementById("split529-2");

    const split2Value = parseFloat(split2Input.value);
    const split1Value = 100 - split2Value;

    split1Input.value = split1Value
  }

  // for updating Post-High School Expenses -> Cap on payment by each parent per academic school year
  function updatePostCap2() {
    const split1Input = document.getElementById("postCap-1");
    const split2Input = document.getElementById("postCap-2");

    const split1Value = parseFloat(split1Input.value);
    const split2Value = 100 - split1Value;

    split2Input.value = split2Value
  }

  function updatePostCap1() {
    const split1Input = document.getElementById("postCap-1");
    const split2Input = document.getElementById("postCap-2");

    const split2Value = parseFloat(split2Input.value);
    const split1Value = 100 - split2Value;

    split1Input.value = split1Value
  }
</script>