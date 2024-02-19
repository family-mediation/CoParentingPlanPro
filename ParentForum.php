<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="Co-Parenting Plan Template.php">
    <div id="mainForm">

      <div id="page0" class="container card p-4">
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
          <label data-dm->Street Address</label>
          <textarea name="partyAResidence" class="form-control" placeholder="Street Address" data-placeholder-original="Street Address" required></textarea>
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
          <button id="next" onclick="validateParentAForm() ? nextHandler() : null">
            Next Page</button>
        </div>
        <script>
          function validateParentAForm() {
            const first = document.getElementsByName("partyAFirst")[0].value;
            const last = document.getElementsByName("partyALast")[0].value;
            const address = document.getElementsByName("partyAResidence")[0].value;
            const city = document.getElementsByName("partyACity")[0].value;
            const state = document.getElementsByName("partyAState")[0].value;
            const zip = document.getElementsByName("partyAZip")[0].value;
            const cell = document.getElementsByName("partyACell")[0].value;
            const email = document.getElementsByName("partyAEmail")[0].value;
            const ssn = document.getElementsByName("partyASocial")[0].value;
            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            return !(first === "" || last === "" || address === "" || city === "" || state === "" || zip === "" || cell === "" || email === "" || ssn === "") && emailRegex.test(email);
          }
        </script>
      </div>


      <div id="page1" class="card p-4">
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
          <label data-dm->Street Address</label>
          <textarea name="partyBResidence" class="form-control" placeholder="Street Address" data-placeholder-original="Street Address" required></textarea>
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
          <button id="next" onclick="validateParentBForm() ? nextHandler() : null">Next Page</button>
        </div>


        <script>
          function validateParentBForm() {
            const first = document.getElementsByName("partyBFirst")[0].value;
            const last = document.getElementsByName("partyBLast")[0].value;
            const address = document.getElementsByName("partyBResidence")[0].value;
            const city = document.getElementsByName("partyBCity")[0].value;
            const state = document.getElementsByName("partyBState")[0].value;
            const zip = document.getElementsByName("partyBZip")[0].value;
            const cell = document.getElementsByName("partyBCell")[0].value;
            const email = document.getElementsByName("partyBEmail")[0].value;
            const ssn = document.getElementsByName("partyBSocial")[0].value;
            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            return !(first === "" || last === "" || address === "" || city === "" || state === "" || zip === "" || cell === "" || email === "" || ssn === "") && emailRegex.test(email);
          }
        </script>
      </div>


      <div id="page2" class="container p-4">
        <H1>Children</H1>

        <div class="input-field">
          <table class="table table-bordered" id="table_field">
            <tr>
              <th>Initials</th>
              <th>Birth Year</th>
              <th>Add or Remove</th>
            </tr>


            <tr>
              <td><input class="form-control" type="text" name="childInitials" required></td>
              <td><input class="form-control" type="text" name="childBirthYears" required></td>
              <td><input class="btn btn-warning" type="button" name="add" id="add" value="Add"></td>
            </tr>
          </table>
          <div class="row justify-content-center pt-4 pb-4">
            <button id="previous" onClick="previousHandler()">Previous Page</button>&nbsp;&nbsp;
            <button id="generate" onClick="validateChildForm() ? submitForm() : null" class="" name="generatePlan" type="button" value="Generate Plan">Generate Plan</button>
          </div>

          <script>
            function submitForm() {
              //change the type attribute which will then send the form data over
              document.getElementsByName("generatePlan")[0].attributes[4].value = "submit";
            }

            function validateChildForm() {
              const initials = document.getElementsByName("childInitials");
              const birthYears = document.getElementsByName("childBirthYears");
              const initialRegex = /^[a-zA-Z]+\.[a-zA-Z]$/;
              const birthYearRegex = /^[0-9]{4}$/;

              for (let i = 0; i < initials.length; i++) {
                if (initials[i].value === "" || birthYears[i].value === "") {
                  return false;
                }
                if (!initialRegex.test(initials[i].value)) {
                  alert("Please check format of initials");
                  return false;
                }
                if (!birthYearRegex.test(birthYears[i].value)) {
                  alert("Please check format of birth years");
                  return false;
                }
              }
              return true;
            }
          </script>

          <script>
            var html = '<tr><td><input class="form-control" type="text" name="childInitials" required></td><td><input class="form-control" type="text" name="childBirthYears" required></td><td><input class="btn btn-danger" type="button" name="remove" id="remove" value="Remove"></td></tr>';

            // remove max if don't want to have a cap on number of kids to add
            var max = 5;

            var x = 1;
            $("#add").click(function() {
              if (x <= max) {
                $("#table_field").append(html);
                x++;
              }
            });
            $("#table_field").on('click', '#remove', function() {
              $(this).closest('tr').remove();
              x--;
            });
          </script>
        </div>
      </div>
    </div>
  </form>
</div>