<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="./?page=2" onsubmit="return false;">
    <div id="mainForm">

      <div id="page0" class="container card p-4">
        <h1>Introduction</h1>
        <br>
        <div class="row">
          <div class="col-lg-4">
            <h4>Nature of Case</h4>
            <div>
              <input type="radio" name="natureCase" id="divorce" value="Divorce" />
              <label for="divorce">Divorce</label>
            </div>
            <div>
              <input type="radio" name="natureCase" id="custodyNeverMarried" value="Custody (Never Married)" />
              <label for="custodyNeverMarried">Custody (Never Married)</label>
            </div>
            <div>
              <input type="radio" name="natureCase" id="other" value="Other" />
              <label for="other">Other</label>
            </div>
          </div>

          <div class="col-lg-4">
            <h4>Court</h4>
            <div>
              <input type="radio" name="court" id="1st" value="1st" />
              <label for="1st">1<sup>st</sup> Circuit (Oahu)</label>
            </div>
            <div>
              <input type="radio" name="court" id="circuit2" value="2nd" />
              <label for="2nd">2<sup>nd</sup> Circuit (Maui)</label>
            </div>
            <div>
              <input type="radio" name="court" id="3rd" value="3rd" />
              <label for="3rd">3<sup>rd</sup> Circuit (Hawaiʻi)</label>
            </div>
            <div>
              <input type="radio" name="court" id="5th" value="5th" />
              <label for="5th">5<sup>th</sup> Circuit (Kauaʻi)</label>
            </div>
          </div>

          <div class="col-lg-4">
            <div>
              <h4>Case No.</h4>
              <input type="text" id="caseNo" name="caseNo">
            </div>

            <div class="p-4">
              <h4>Date</h4>
              <input type="date" id="date1" name="date1">
            </div>
          </div>
        </div>

        <div class="row justify-content-center pt-4 pb-4">
          <button id="next1" onclick="nextHandler()">Next Page</button>
        </div>
      </div>

      <div id="page1" class="container card p-4">
        <h1>Parent A</h1>
        <div class="form-group row p-3">
          <div class="col-lg-6">
            <label class="" hide="true" data-dm->First Name</label>
            <input type="text" class="form-control" name="partyAFirst" placeholder="First Name" data-placeholder-original="Full Legal Name" required>
          </div>

          <div class="col-lg-6">
            <label class="" hide="true" data-dm->Last Name</label>
            <input type="text" class="form-control" name="partyALast" placeholder="Last Name" data-placeholder-original="Full Legal Name" required>
          </div>
        </div>

        <div class="form-group row p-3">
          <div class="col">
            <label style="width: 700px" data-dm->Street Address
              <textarea name="partyAResidence" class="form-control" placeholder="Street Address" data-placeholder-original="Street Address" required></textarea>
            </label>
          </div>
          <div class="col">
            <label hide="true" data-dm->Birthday
              <input type="date" class="form-control" name="partyABirthday" required>
            </label>
          </div>
        </div>

        <div class="form-group row p-3">
          <div class="col-lg-4">
            <label data-dm->City</label>
            <input type="text" name="partyACity" placeholder="City" class="form-control" data-placeholder-original="City" required>
          </div>

          <div class="col-lg-4">
            <label class="" hide="true" data-dm->State</label>
            <input type="text" name="partyAState" class="form-control" placeholder="State" data-placeholder-original="State" required>
          </div>

          <div class="col-lg-4">
            <label class="" hide="true" data-dm->Zipcode</label>
            <input type="text" name="partyAZip" placeholder="Zipcode" class="form-control" data-placeholder-original="Zipcode" required>
          </div>
        </div>

        <div class="form-group row p-3">
          <div class="col-lg-4">
            <label data-dm->Cell Phone</label>
            <input type="tel" name="partyACell" placeholder="808-888-8888" class="form-control" data-placeholder-original="808-888-8888" required>
          </div>

          <div class="col-lg-4">
            <label class="" hide="true" data-dm->Email</label>
            <input type="email" name="partyAEmail" class="form-control" placeholder="Email Address" data-placeholder-original="Your Email Address" required>
          </div>

          <div class="col-lg-4">
            <label class="" hide="true" data-dm->Last 4 Digits of Social Security Number</label>
            <input type="text" name="partyASocial" placeholder="Last 4 Digits of SSN" class="form-control" data-placeholder-original="Last 4 Digits of Social Security Number" required>
          </div>
        </div>
        <div class="row justify-content-center pt-4 pb-4">
          <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="next" onclick="validateParentAForm() ? nextHandler() : null">
            Next Page</button>
        </div>
        <script>
          function validateParentAForm() {
            const first = document.getElementsByName("partyAFirst")[0].value;
            const last = document.getElementsByName("partyALast")[0].value;
            const address = document.getElementsByName("partyAResidence")[0].value;
            const birthday = document.getElementsByName("partyABirthday")[0].value;
            const city = document.getElementsByName("partyACity")[0].value;
            const state = document.getElementsByName("partyAState")[0].value;
            const zip = document.getElementsByName("partyAZip")[0].value;
            const cell = document.getElementsByName("partyACell")[0].value;
            const email = document.getElementsByName("partyAEmail")[0].value;
            const ssn = document.getElementsByName("partyASocial")[0].value;
            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            return !(first === "" || last === "" || address === "" || birthday === undefined || city === "" || state === "" || zip === "" || cell === "" || email === "" || ssn === "") && emailRegex.test(email);
          }
        </script>
      </div>

      <div id="page2" class="container card p-4">
        <h1>Parent B</h1>

        <div class="form-group row p-3">
          <div class="col-lg-6">
            <label class="" hide="true" data-dm->First Name</label>
            <input type="text" name="partyBFirst" class="form-control" placeholder="First Name" data-placeholder-original="Spouse's Full Legal Name" required>
          </div>

          <div class="col-lg-6">
            <label class="" hide="true" data-dm->Last Name</label>
            <input type="text" name="partyBLast" class="form-control" placeholder="Last Name" data-placeholder-original="Spouse's Birth or Maiden Name" required>
          </div>
        </div>
        <div class="form-group row p-3">
          <div class="col">
            <label style="width: 700px" data-dm->Street Address
              <textarea name="partyBResidence" class="form-control" placeholder="Street Address" data-placeholder-original="Street Address" required></textarea>
            </label>
          </div>
          <div class="col">
            <label hide="true" data-dm->Birthday
              <input type="date" class="form-control" name="partyBBirthday" required>
            </label>
          </div>
        </div>
        <div class="form-group row p-3">
          <div class="col-lg-4">
            <label data-dm->City</label>
            <input type="text" name="partyBCity" placeholder="City" class="form-control" data-placeholder-original="City" required>
          </div>

          <div class="col-lg-4">
            <label class="" hide="true" data-dm->State</label>
            <input type="text" name="partyBState" class="form-control" placeholder="State" data-placeholder-original="State" required>
          </div>

          <div class="col-lg-4">
            <label class="" hide="true" data-dm->Zipcode</label>
            <input type="text" name="partyBZip" placeholder="Zipcode" class="form-control" data-placeholder-original="Zipcode" required>
          </div>
        </div>

        <div class="form-group row p-4">
          <div class="col-lg-4">
            <label data-dm->Cell Phone</label>
            <input type="tel" name="partyBCell" placeholder="808-888-8888" class="form-control" data-placeholder-original="808-888-8888" required>
          </div>

          <div class="col-lg-4">
            <label class="" hide="true" data-dm->Email</label>
            <input type="email" name="partyBEmail" placeholder="Email Address" class="form-control" data-placeholder-original="Spouse's Email Address" required>
          </div>

          <div class="col-lg-4">
            <label class="" hide="true" data-dm->Last 4 Digits of Social Security Number</label>
            <input type="text" name="partyBSocial" placeholder="Last 4 Digits of SSN" class="form-control" data-placeholder-original="Spouse's Last 4 Digits of Social Security Number" required>
          </div>
        </div>
        <div class="row justify-content-center pt-4 pb-4">
          <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="toChildren" onclick="validateParentBForm() ? submit() : null">Next Section</button>
        </div>


        <script>
          function validateParentBForm() {
            const first = document.getElementsByName("partyBFirst")[0].value;
            const last = document.getElementsByName("partyBLast")[0].value;
            const address = document.getElementsByName("partyBResidence")[0].value;
            const birthday = document.getElementsByName("partyBBirthday")[0].value;
            const city = document.getElementsByName("partyBCity")[0].value;
            const state = document.getElementsByName("partyBState")[0].value;
            const zip = document.getElementsByName("partyBZip")[0].value;
            const cell = document.getElementsByName("partyBCell")[0].value;
            const email = document.getElementsByName("partyBEmail")[0].value;
            const ssn = document.getElementsByName("partyBSocial")[0].value;
            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            return !(first === "" || last === "" || address === "" || birthday === undefined || city === "" || state === "" || zip === "" || cell === "" || email === "" || ssn === "") && emailRegex.test(email);
          }
        </script>
      </div>
    </div>
  </form>
</div>