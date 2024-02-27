<div class="text-center">
    <form method="post" class="" locale="ENGLISH" action="Submit.php">
         <div id="mainForm">
            <div id="page0" class="container p-4">
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
                            alert("Please check format of initials (example: First.Last)");
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
