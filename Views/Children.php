<div class="text-center">
    <form method="post" class="" locale="ENGLISH" action=".\?page=3">
         <div id="mainForm">
            <div id="page0" class="container card p-4">
              <H1>Children</H1>
              <div class="row justify-content-center">
                <div class="input-field">
                    <table class="table table-bordered" id="table_field" style="width: 500px">
                        <tr>
                            <th>Initials</th>
                            <th>Birthday</th>
                        </tr>
                        <tr>
                            <td><input class="form-control" type="text" name="child1Initials" required></td>
                            <td><input type="date" class="form-control" name="child1Birthday" required></td>
                        </tr>
                        <tr>
                          <td><input class="form-control" type="text" name="child2Initials"></td>
                          <td><input type="date" class="form-control" name="child2Birthday"></td>
                        </tr>
                        <tr>
                          <td><input class="form-control" type="text" name="child3Initials"></td>
                          <td><input type="date" class="form-control" name="child3Birthday"></td>
                        </tr>
                        <tr>
                          <td><input class="form-control" type="text" name="child4Initials"></td>
                          <td><input type="date" class="form-control" name="child4Birthday"></td>
                        </tr>
                        <tr>
                          <td><input class="form-control" type="text" name="child5Initials"></td>
                          <td><input type="date" class="form-control" name="child5Birthday"></td>
                        </tr>
                        <tr>
                          <td><input class="form-control" type="text" name="child6Initials"></td>
                          <td><input type="date" class="form-control" name="child6Birthday"></td>
                        </tr>
                    </table>
                    <div class="row justify-content-center pt-4 pb-4">
                        <button id="generate" onClick="validateChildForm() ? submitForm() : null" class="" name="generatePlan" type="button" value="Generate Plan">Next Section</button>
                    </div>

                    <script>
                      function submitForm() {
                        //change the type attribute which will then send the form data over
                        document.getElementsByName("generatePlan")[0].attributes[4].value = "submit";
                      }

                      function validateChildForm() {
                        const initials = document.getElementsByName("child1Initials");
                        const birthdays = document.getElementsByName("child1Birthday");
                        const initialRegex = /^[a-zA-Z]+\.[a-zA-Z]$/;

                        for (let i = 0; i < initials.length; i++) {
                          if (initials[i].value === "" || birthdays[i].value === "") {
                            return false;
                          }
                          if (!initialRegex.test(initials[i].value)) {
                            alert("Please check format of initials (example: First.Last)");
                            return false;
                          }
                        }
                        return true;
                      }
                    </script>
                </div>
              </div>
            </div>
        </div>
    </form>
</div>
