<div class="text-center">
    <form method="post" class="" locale="ENGLISH" action="Co-Parenting Plan Template.php">
        <div id="mainForm">
            <div id="page0" class="card p-4">
                <label data-dm->Nature of Case (Select One)</label>
                <div class="">
                    <div class="">
                        <label class="">
                            <input type="radio" value="Divorce" name="isDivorce" class="">
                            <span>Divorce</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                    <div class="">
                        <label class="">
                            <input type="radio" value="Separation" name="isSeperation" class="">
                            <span>Separation</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                    <div class="">
                        <label class="">
                            <input type="radio" value="Annulment" name="isAnnulment" class="">
                            <span>Annulment</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                    <div class="">
                        <label class="">
                            <input type="radio" value="Other" name="isOther" class="">
                            <span>Other</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                </div>

            </div>

            <div id="page1" class="container card p-4">
                <H1> Information About You</H1>
                <h2>Please enter your full legal Name</h2>

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
                    <div class="col-lg-9">
                        <label data-dm->Your Address</label>
                        <textarea name="partyAStreet" class="form-control" placeholder="Street Address, Apt, City, State, Zip Code" data-placeholder-original="Street Address, Apt, City, State, Zip Code"></textarea>
                    </div>

                    <div class="col-lg-3">
                        <label class="" hide="true" data-dm->Last 4 Digits of Social Security Number</label>
                        <input type="text" name="paryASocial" placeholder="Last 4 Digits of SSN" class="form-control" data-placeholder-original="Last 4 Digits of Social Security Number">
                    </div>

                </div>

                <div class="form-group row p-3">
                    <div class="col-lg-4">
                        <label data-dm->Your Cell Phone No.</label>
                        <input type="tel" name="partyACell" placeholder="808-888-8888" class="form-control" data-placeholder-original="808-888-8888">
                    </div>

                    <div class="col-lg-4">
                        <label data-dm->Home Phone No.</label>
                        <input type="tel" name="partyAHome" placeholder="808-888-8888" class="form-control">
                    </div>

                    <div class="col-lg-4">
                        <label class="" hide="true" data-dm->Your Email</label>
                        <input type="email" name="partyAEmail" class="form-control" placeholder="Your Email Address" data-placeholder-original="Your Email Address">
                    </div>

                </div>


                <div class="form-group row p-3">
                    <div class="col-lg-4">
                        <label data-dm->Your Date of Birth</label>
                        <input type="date" class="form-control" lang="undefined" placeholder="" date_format="mmddyyyy" name="partyABirthday">
                    </div>

                    <div class="col-lg-4">
                        <label data-dm->Your Place of Birth</label>
                        <input type="text" name="partyABirthplace" class="form-control" placeholder="State or Country" data-placeholder-original="State or Country">
                    </div>

                    <div class="col-lg-4">
                        <label class="" hide="true" data-dm->Your Race</label>
                        <input type="text" name="partyARace" class="form-control" placeholder="Your Race" data-placeholder-original="Your Race">
                    </div>

                </div>

            </div>


            <div id="page2" class="container card p-4">

                <div class="form-group row p-3">

                    <div class="col-lg-6">
                        <label class="p-1" hide="true" data-dm->Your Highest Grade Completed</label>
                        <input type="text" name="partyAEducationLevel" class="form-control p-3" placeholder="Your Highest Grade Completed" data-placeholder-original="Your Highest Grade Completed">
                    </div>

                    <div class="col-lg-3">
                        <label data-dm->You have lived on Oahu since</label>
                        <input type="text" name="partyAYearsOnOahu" class="form-control" placeholder="Year" data-placeholder-original="Year">
                    </div>

                    <div class="col-lg-3">
                        <label data-dm->You have lived in the state of Hawaii since</label>
                        <input type="text" name="partyAYearsInState" class="form-control" placeholder="Year" data-placeholder-original="Year">
                    </div>

                </div>

                <div class="form-group">
                    <label data-dm->Your Primary Employer</label>
                    <textarea name="partyAEmployer" class="form-control" placeholder="Company Name &amp; Address" data-placeholder-original="Company Name &amp; Address"></textarea>
                </div>


                <div class="form-group row p-3">

                    <div class="col-lg-6">
                        <label class="" hide="true" data-dm->Your Job Title</label>
                        <input type="text" name="partyAJobTitle" class="form-control" placeholder="Your Job Title" data-placeholder-original="Your Job Title">
                    </div>

                    <div class="col-lg-6">
                        <label class="" hide="true" data-dm->Your Length of Service</label>
                        <input type="text" name="partyALengthOfService" class="form-control" placeholder="Your Length of Service" data-placeholder-original="Your Length of Service">
                    </div>


                </div>

                <div class="form-group">
                    <label class="" hide="true" data-dm->Your Work Schedule</label>
                    <input type="text" name="partyAWorkSchedule" class="form-control" placeholder="Your Work Schedule" data-placeholder-original="Your Work Schedule">
                </div>

                <div class="form-group row p-3">

                    <div class="col-lg-4">
                        <label class="" hide="true" data-dm->Your Gross Monthly Income (Primary)</label>
                        <input type="text" name="partyAPrimaryGrossIncome" class="form-control" placeholder="Gross Monthly Income (Primary)" data-placeholder-original="Your Gross Monthly Income (Primary)">
                    </div>

                    <div class="col-lg-4">
                        <label class="" hide="true" data-dm->Your Gross Monthly Income (Secondary)</label>
                        <input type="text" name="partyASecondaryGrossIncome" class="form-control" placeholder="Gross Monthly Income (Secondary)" data-placeholder-original="Your Gross Monthly Income (Secondary)">
                    </div>

                    <div class="col-lg-4">
                        <label class="" hide="true" data-dm->Your Gross Monthly Income (Welfare)</label>
                        <input type="text" name="partyAWelfareIncome" class="form-control" placeholder="Gross Monthly Income (Welfare)" data-placeholder-original="Your Gross Monthly Income (Welfare)">
                    </div>

                </div>

            </div>


            <div id="page3" class="card p-4">
                <div class="">
                    <label data-dm->Were You Previously Married?</label>
                    <div class="">
                        <div class="">
                            <label class="">
                                <input type="radio" value="Yes" name="partyAHasPreviousMarriage" class="">
                                <span>Yes</span>
                                <span class="">
                                    <img alt="" class="" onerror="handleImageLoadError(this)">
                                </span>
                            </label>
                        </div>
                        <div class="">
                            <label class="">
                                <input type="radio" value="No" name=" " class="">
                                <span>No</span>
                                <span class="">
                                    <img alt="" class="" onerror="handleImageLoadError(this)">
                                </span>
                            </label>
                        </div>
                    </div>

                </div>
                <label data-dm->Any Previous Civil Unions?</label>
                <div class="">
                    <div class="">
                        <label class="">
                            <input type="radio" value="Yes" name=" " class="">
                            <span>Yes</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                    <div class="">
                        <label class="">
                            <input type="radio" value="No" name=" " class="">
                            <span>No</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                </div>

                <label data-dm->Are You Pregnant?</label>
                <div class="">
                    <div class="">
                        <label class="">
                            <input type="radio" value="Yes" name=" " class="">
                            <span>Yes</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                    <div class="">
                        <label class="">
                            <input type="radio" value="No" name=" " class="">
                            <span>No</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                </div>
            </div>

            <div id="page4" class="card p-4">
                <H1> Information About Your spouse</H1>
                <h2>Please enter your spouse's full legal Name</h2>

                <div class="form-group row p-3">
                    <div class="col-lg-6">
                        <label class="" hide="true" data-dm->Spouse's First Name</label>
                        <input type="text" name="partyBFirst" class="form-control" placeholder="Spouse's Full Legal Name" data-placeholder-original="Spouse's Full Legal Name">
                    </div>

                    <div class="col-lg-6">
                        <label class="" hide="true" data-dm->Spouse's Birth or Maiden Name</label>
                        <input type="text" name="partyBLast" class="form-control" placeholder="Spouse's Birth or Maiden Name" data-placeholder-original="Spouse's Birth or Maiden Name">

                    </div>

                </div>

                <div class="form-group row p-3">
                    <div class="col-lg-9">
                        <label data-dm->Spouse's Address</label>
                        <textarea name=" " class="form-control" placeholder="Street Address, Apt, City, State, Zip Code" data-placeholder-original="Street Address, Apt, City, State, Zip Code"></textarea>
                    </div>

                    <div class="col-lg-3">
                        <label class="" hide="true" data-dm->Spouse's Last 4 Digits of Social Security Number</label>
                        <input type="text" name=" " placeholder="Spouse's SSN Last 4 Digits" class="form-control" data-placeholder-original="Spouse's Last 4 Digits of Social Security Number">
                    </div>

                </div>

                <div class="form-group row p-3">
                    <div class="col-lg-4">
                        <label data-dm->Spouse's Cell Phone No.</label>
                        <input type="tel" name=" " placeholder="808-888-8888" class="form-control" data-placeholder-original="808-888-8888">
                    </div>

                    <div class="col-lg-4">
                        <label data-dm->Spouse's Home Phone No.</label>
                        <input type="tel" name=" " placeholder="808-888-8888" class="form-control">
                    </div>

                    <div class="col-lg-4">
                        <label class="" hide="true" data-dm->Spouse's Email</label>
                        <input type="email" name=" " placeholder="Spouse's Email Address" class="form-control" data-placeholder-original="Spouse's Email Address">
                    </div>
                </div>

                <div class="form-group row p-3">
                    <div class="col-lg-4">
                        <label data-dm->Spouse's Date of Birth</label>
                        <input type="date" class="form-control" lang="undefined" placeholder="" date_format="mmddyyyy" name=" ">
                    </div>

                    <div class="col-lg-4">
                        <label data-dm->Spouse's Place of Birth</label>
                        <input type="text" name=" " class="form-control">
                    </div>

                    <div class="col-lg-4">
                        <label class="" hide="true" data-dm->Spouse's Race</label>
                        <input type="text" name=" " class="form-control" placeholder="Spouse's Race" data-placeholder-original="Spouse's Race">
                    </div>

                </div>

            </div>


            <div id="page5" class="card p-4">
                <div class="form-group row p-3">

                    <div class="col-lg-6">
                        <label class="p-1" hide="true" data-dm->Spouse's Highest Grade Completed</label>
                        <input type="text" name=" " class="form-control p-3" placeholder="Spouse's Highest Grade Completed" data-placeholder-original="Spouse's Highest Grade Completed">
                    </div>

                    <div class="col-lg-3">
                        <label data-dm->Spouse has lived on Oahu since</label>
                        <input type="text" name=" " class="form-control" placeholder="Year" data-placeholder-original="Year">
                    </div>

                    <div class="col-lg-3">
                        <label data-dm->Spouse has lived in the state of Hawaii since</label>
                        <input type="text" name=" " class="form-control" placeholder="Year" data-placeholder-original="Year">
                    </div>

                </div>

                <div class="form-group">
                    <label data-dm->Spouse's Primary Employer</label>
                    <textarea name=" " class="form-control" placeholder="Company Name &amp; Address" data-placeholder-original="Company Name &amp; Address"></textarea>
                </div>


                <div class="form-group row p-3">

                    <div class="col-lg-6">
                        <label class="" hide="true" data-dm->Spouse's Job Title</label>
                        <input type="text" name=" " class="form-control" placeholder="Spouse's Job Title" data-placeholder-original="Spouse's Job Title">
                    </div>

                    <div class="col-lg-6">
                        <label class="" hide="true" data-dm->Spouse's Length of Service</label>
                        <input type="text" name=" " class="form-control" placeholder="Spouse's Length of Service" data-placeholder-original="Spouse's Length of Service">
                    </div>

                </div>

                <div class="form-group">
                    <label class="" hide="true" data-dm->Spouse's Work Schedule</label>
                    <input type="text" name=" " class="form-control" placeholder="Spouse's Work Schedule" data-placeholder-original="Spouse's Work Schedule">
                </div>

                <div class="form-group row p-2 text-center">

                    <div class="col-lg-5 mx-auto">
                        <label class="" hide="true" data-dm->Spouse's Gross Monthly Income (Primary)</label>
                        <input type="text" name=" " class="form-control" placeholder="Spouse's Gross Monthly Income (Primary)" data-placeholder-original="Spouse's Gross Monthly Income (Primary)">
                    </div>

                </div>

                <div class="form-group row p-2 text-center">

                    <div class="col-lg-5 mx-auto">
                        <label class="" hide="true" data-dm->Spouse's Gross Monthly Income (Secondary)</label>
                        <input type="text" name=" " class="form-control" placeholder="Spouse's Gross Monthly Income (Secondary)" data-placeholder-original="Spouse's Gross Monthly Income (Secondary)">
                    </div>

                </div>

                <div class="form-group row p-2 text-center">
                    <div class="col-lg-5 mx-auto">
                        <label class="" hide="true" data-dm->Spouse's Gross Monthly Income (Welfare)</label>
                        <input type="text" name=" " class="form-control" placeholder="Spouse's Gross Monthly Income (Welfare)" data-placeholder-original="Spouse's Gross Monthly Income (Welfare)">
                    </div>

                </div>


            </div>

            <div id="page6" class="card p-4 ">
                <label data-dm->Was Your Spouse Previously Married?</label>
                <div class="">
                    <div class="">
                        <label class="">
                            <input type="radio" value="Yes" name=" " class="">
                            <span>Yes</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                </div>



                <div class="">

                    <div class="">
                        <label class="">
                            <input type="radio" value="No" name=" " class="">
                            <span>No</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                </div>

                <label data-dm->Does Your Spouse Have any Previous Civil Unions?</label>
                <div class="">
                    <div class="">
                        <label class="">
                            <input type="radio" value="Yes" name=" " class="">
                            <span>Yes</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                    <div class="">
                        <label class="">
                            <input type="radio" value="No" name=" " class="">
                            <span>No</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                </div>

                <label data-dm->Is Your Spouse Pregnant?</label>
                <div class="">
                    <div class="">
                        <label class="">
                            <input type="radio" value="Yes" name=" " class="">
                            <span>Yes</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                    <div class="">
                        <label class="">
                            <input type="radio" value="No" name=" " class="">
                            <span>No</span>
                            <span class="">
                                <img alt="" class="" onerror="handleImageLoadError(this)">
                            </span>
                        </label>
                    </div>
                </div>

            </div>

            <div id="page7" class="card p-4">
                <H1> Information About You Both </H1>

                <div class="form-group row p-3">

                    <div class="col-lg-6">
                        <label data-dm->Date of This Marriage</label>
                        <input type="date" class="form-control" lang="undefined" placeholder="Select Date" date_format="mmddyyyy" name=" " data-placeholder-original="Select Date">
                    </div>

                    <div class="col-lg-6">
                        <label data-dm->Location of This Marriage</label>
                        <input type="text" name=" " class="form-control" placeholder="County/State" data-placeholder-original="County/State">
                    </div>

                </div>

                <div class="">
                    <label data-dm->Are You Living Separately?</label>
                    <div class="">
                        <div class="">
                            <label class="">
                                <input type="radio" value="Yes" name=" " class="">
                                <span>Yes</span>
                                <span class="">
                                    <img alt="" class="" onerror="handleImageLoadError(this)">
                                </span>
                            </label>
                        </div>
                        <div class="">
                            <label class="">
                                <input type="radio" value="No" name=" " class="">
                                <span>No</span>
                                <span class="">
                                    <img alt="" class="" onerror="handleImageLoadError(this)">
                                </span>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="">
                    <label data-dm->Do either you or your spouse have any children?</label>
                    <div class="">
                        <div class="">
                            <label class="">
                                <input type="radio" value="Yes" name=" " class="">
                                <span>Yes</span>
                                <span class="">
                                    <img alt="" class="" onerror="handleImageLoadError(this)">
                                </span>
                            </label>
                        </div>
                        <div class="">
                            <label class="">
                                <input type="radio" value="No" name=" " class="">
                                <span>No</span>
                                <span class="">
                                    <img alt="" class="" onerror="handleImageLoadError(this)">
                                </span>
                            </label>
                        </div>
                    </div>

                </div>
            </div>

            <div id="page8" class="card p-4">
                <H1>Info about your Kids</H1>

                <div class="form-group">
                <label data-dm->Name, Age, Grade, School Name of Each Child</label>
                <textarea class="form-control" name=" "></textarea>
                </div>
                
                <div class="">
                    <br />
                    <input class="" name=" " type="submit" value="Send Message">
                </div>
            </div>
        </div>
    </form>
    <div class="row justify-content-center pt-4 pb-4">
        <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp; <button id="next" onclick="nextHandler()">Next Page</button>
    </div>
</div>