<?php
require_once("views/header.php");
?>
<div class="text-center">
    <form method="post" class="" locale="ENGLISH" action="Co-Parenting Plan Template.php">
        <div id="mainForm">
        <div id="page0" class="container card p-4">
                <H1> Information on Parent A</H1>
                <h2>Please enter your full legal name and residence address</h2>
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

                <div class="form-group">
                        <label data-dm->Your Address</label>
                        <textarea name="partyAStreet" class="form-control" placeholder="Street Address, Apt, City, State, Zip Code" data-placeholder-original="Street Address, Apt, City, State, Zip Code"></textarea>
                </div>

            </div>

            <div id="page1" class="container card p-4">
                <H1> Information on Parent B</H1>
                <h2>Please enter your full legal name and residence address</h2>
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

                <div class="form-group">
                        <label data-dm->Your Address</label>
                        <textarea name="partyAStreet" class="form-control" placeholder="Street Address, Apt, City, State, Zip Code" data-placeholder-original="Street Address, Apt, City, State, Zip Code"></textarea>
                </div>
                
            </div>


        </div>
    </form>
    <div class="row justify-content-center pt-4 pb-4">
        <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp; <button id="next" onclick="nextHandler()">Next Page</button>
    </div>
</div>
<?php
require_once("views/footer.php");
?>
