<div class="text-center">
    <form method="post" class="" locale="ENGLISH" action="Co-Parenting Plan Template.php">
        <div id="mainForm">

            <div id="page0" class="container card p-4">
                <H1>Parent A</H1>

                <div class="form-group row p-3">
                    <div class="col-lg-6">
                        <label class="" hide="true" data-dm->First Name</label>
                        <input type="text" class="form-control" name="partyAFirst" placeholder="First Name" data-placeholder-original="Full Legal Name">
                    </div>

                    <div class="col-lg-6">
                        <label class="" hide="true" data-dm->Last Name</label>
                        <input type="text" class="form-control" name="partyALast" placeholder="Last Name" data-placeholder-original="Full Legal Name">
                    </div>
                </div>

                <div class="form-group row p-3">
                    <label data-dm->Residence</label>
                    <textarea name="partyAStreet" class="form-control" placeholder="Street Address, Apt, City, State, Zip Code" data-placeholder-original="Street Address, Apt, City, State, Zip Code"></textarea>
                </div>

                <div class="form-group row p-3">
                    <div class="col-lg-4">
                        <label data-dm->Cell Phone</label>
                        <input type="tel" name="partyACell" placeholder="808-888-8888" class="form-control" data-placeholder-original="808-888-8888">
                    </div>

                    <div class="col-lg-4">
                        <label class="" hide="true" data-dm->Email</label>
                        <input type="email" name="partyAEmail" class="form-control" placeholder="Email Address" data-placeholder-original="Your Email Address">
                    </div>

                    <div class="col-lg-4">
                        <label class="" hide="true" data-dm->Last 4 Digits of Social Security Number</label>
                        <input type="text" name="paryASocial" placeholder="Last 4 Digits of SSN" class="form-control" data-placeholder-original="Last 4 Digits of Social Security Number">
                    </div>
                </div>
                <div class="row justify-content-center pt-4 pb-4">
                    <button id="next" onclick="nextHandler()">Next Page</button>
                </div>
            </div>


            <div id="page1" class="card p-4">
                <H1>Parent B</H1>

                <div class="form-group row p-3">
                    <div class="col-lg-6">
                        <label class="" hide="true" data-dm->First Name</label>
                        <input type="text" name="partyBFirst" class="form-control" placeholder="First Name" data-placeholder-original="Spouse's Full Legal Name">
                    </div>

                    <div class="col-lg-6">
                        <label class="" hide="true" data-dm->Last Name</label>
                        <input type="text" name="partyBLast" class="form-control" placeholder="Last Name" data-placeholder-original="Spouse's Birth or Maiden Name">
                    </div>
                </div>

                <div class="form-group row p-3">
                    <label data-dm->Residence</label>
                    <textarea name=" " class="form-control" placeholder="Street Address, Apt, City, State, Zip Code" data-placeholder-original="Street Address, Apt, City, State, Zip Code"></textarea>
                </div>

                <div class="form-group row p-4">
                    <div class="col-lg-4">
                        <label data-dm->Cell Phone</label>
                        <input type="tel" name=" " placeholder="808-888-8888" class="form-control" data-placeholder-original="808-888-8888">
                    </div>

                    <div class="col-lg-4">
                        <label class="" hide="true" data-dm->Email</label>
                        <input type="email" name=" " placeholder="Email Address" class="form-control" data-placeholder-original="Spouse's Email Address">
                    </div>

                    <div class="col-lg-4">
                        <label class="" hide="true" data-dm->Last 4 Digits of Social Security Number</label>
                        <input type="text" name=" " placeholder="Last 4 Digits of SSN" class="form-control" data-placeholder-original="Spouse's Last 4 Digits of Social Security Number">
                    </div>
                </div>
                <div class="row justify-content-center pt-4 pb-4">
                    <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
                    <button id="next" onclick="nextHandler()">Next Page</button>
                </div>
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
                            <td><input class="form-control" type="text" name="txtInitials[]" required=""></td>
                            <td><input class="form-control" type="text" name="txtBirthYear[]" required=""></td>
                            <!-- <td><input class="btn btn-warning" type="button" name="add" id="add" value="Add"></td> -->
                            <td><input class="btn btn-warning" type="button" name="add" id="add" value="Add"></td>
                        </tr>
                    </table>
                  <div class="row justify-content-center pt-4 pb-4">
                    <button id="previous" onClick="previousHandler()">Previous Page</button>&nbsp;&nbsp;
                    <button id="generate" class="" name="generatePlan" type="submit" value="Generate Plan">Generate Plan</button>
                  </div>

                  <script>
                        $(document).ready(function() {
                            var html = '<tr><td><input class="form-control" type="text" name="txtInitials[]" required=""></td><td><input class="form-control" type="text" name="txtBirthYear[]" required=""></td><td><input class="btn btn-danger" type="button" name="remove" id="remove" value="Remove"></td></tr>';

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

                        });
                    </script>
                </div>
            </div>
        </div>
    </form>
</div>