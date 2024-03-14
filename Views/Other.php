<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="./?page=8">
     <div id="mainForm">
      <div id="page0" class="container card p-4">
        <h1>Other Issues:</h1>
        <fieldset>
              <div>
              <input type="checkbox" id="9.00" name="others" onclick="checkBox('therapist')"/>
              <label for="9.00">Co-Parent Counseling</label>
              </div>
              <div class="container card p-3" id="cotherapist" style="display: none;">
              Name <input type="text" id="therapistInput" /> for Therapist.
              </div>

              <div>
              <input type="checkbox" id="9.01" name="others" onclick="clickMe('childTherapist')" />
              <label for="9.01">Child-Focused Therapist</label>
             </div>
              <div class="container card p-3" id="childTherapistSection" style="display: none;">
              Name <input type="text" id="childTherapistInput" /> for Therapist.
              </div>

              <div>
              <input type="checkbox" id="9.02" name="others" />
              <lable for="9.02">Social Media Between Parents</lable>
              </div>
          
              <div>
              <input type="checkbox" id="9.03" name="others" />
              <label for="9.03">Social Media For Child(ren)</label>
              </div>

            <div>
              <input type="checkbox" id="9.04" name="others" />
              <label for="9.04">Joint Parent-Teacher Meetings</label>
            </div>

              <div>
              <input type="checkbox" id="9.05" name="others" />
              <label for="9.05">Separate Parent-Teacher Meetings</label>
              </div>

              <div>
              <input type="checkbox" id="9.06" name="others" onclick="showParentOptions()"/>
              <label for="9.06">One Parent to Attend Parent-Teacher Meetings</label>
              </div>

              <div id="parentOptions" style="display:none;">
              <input type="radio" id="parentA" name="parentAttendance" value="parentA" />
              <label for="parentA">Parent A</label>

              <input type="radio" id="parentB" name="parentAttendance" value="parentB" />
              <label for="parentB">Parent B</label>
              </div>

              <div>
              <input type="checkbox" id="9.07" name="others" />
              <label for="9.07">Report Cards for the Child(ren)</label>
              </div>

              <div>
              <input type="checkbox" id="9.08" name="others" />
              <label for="9.08">Joint Attendance at School and Extracurricular Events</label>
              </div>

              <div>
              <input type="checkbox" id="9.09" name="others" />
              <label for="9.09">Custodial Parent to Attend School and Extracurricular Events</label>
              </div>

              <div>
              <input type="checkbox" id="9.10" name="others" />
              <label for="9.10">Alternate Attendance at School and Extracurricular Events</label>
              </div>

              <div>
              <input type="checkbox" id="9.11" name="others" onclick="clickDoc()"/>
              <label for="9.11">Documents</label>
              </div>

              <div id="parentDoc" style="display:none;">
              <input type="radio" id="parentA" name="parentDocuments" value="parentA" />
              <label for="parentA">Parent A</label>

              <input type="radio" id="parentB" name="parentDocuments" value="parentB" />
              <label for="parentB">Parent B</label>
              </div>

              <div>
              <input type="checkbox" id="9.12" name="others" />
              <label for="9.12">Joint Authority to Consent for Passport</label>
              </div>

              <div>
              <input type="checkbox" id="9.13" name="others" onclick="clickPassport()"/>
              <label for="9.13">Sole Authority to Consent for Passport</label>
              </div>

              <div id="passport" style="display:none;">
              <input type="radio" id="parentA" name="parentDocuments" value="parentA" />
              <label for="parentA">Parent A</label>

              <input type="radio" id="parentB" name="parentDocuments" value="parentB" />
              <label for="parentB">Parent B</label>
              </div>

              <div>
              <input type="checkbox" id="9.14" name="others" />
              <label for="9.14">New Intimate Partner Protocols (Less Detailed)</label>
              </div>

              <div>
              <input type="checkbox" id="9.15" name="others" />
              <label for="9.15">New Intimate Partner Protocols (More Detailed)</label>
              </div>

              <div>
              <input type="checkbox" id="9.16" name="others" />
              <label for="9.16">Alternative Dispute Resolution</label>
              </div>
          </fieldset>
          <div class="row justify-content-center pt-4 pb-4" name="others">
          <button id="next0" onclick="submit()">Next Page</button>
        </div>
      </div>
    </div>
  </form>
</div>

<script>
  console.log($("#next0"));

  function checkBox(inputId) {
    var cb = document.getElementById('cotherapist');
    var checked = document.getElementById('9.00').checked;
    cb.style.display = checked ? 'block' : 'none';
    if (!checked) {
      document.getElementById(inputId).value = ''; 
    }
  }

  function clickMe(inputId) {
    var cb = document.getElementById('childTherapistSection');
    var checked = document.getElementById('9.01').checked;
    cb.style.display = checked ? 'block' : 'none';
    if (!checked) {
      document.getElementById(inputId).value = ''; 
    }
  }

  function showParentOptions() {
    var parentOptions = document.getElementById("parentOptions");
    var checkbox = document.getElementById("9.06");

    if (checkbox.checked) {
      parentOptions.style.display = "block";
    } else {
      parentOptions.style.display = "none";
    }
  }

  function clickDoc() {
    var parentOptions = document.getElementById("parentDoc");
    var checkbox = document.getElementById("9.11");

    if (checkbox.checked) {
      parentOptions.style.display = "block";
    } else {
      parentOptions.style.display = "none";
    }
  }

  function clickPassport() {
    var parentOptions = document.getElementById("passport");
    var checkbox = document.getElementById("9.13");

    if (checkbox.checked) {
      parentOptions.style.display = "block";
    } else {
      parentOptions.style.display = "none";
    }
  }

</script>

