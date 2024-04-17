<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="./?page=8">
     <div id="mainForm">
      <div id="page0" class="container card p-4">
        <h1>Other Issues:</h1>
        <br>
              <div>
              <input type="checkbox" id="9.00" name="counseling" onclick="checkBox('therapist')"/>
              <label for="9.00">Co-Parent Counseling</label>
              </div>

              <div class="container card p-4" id="cotherapist" style="display: none;">
              Parents agree to engage <input type="text" name="counseling" id="therapistInput9.00" /> (insert name for therapist), or other mutually selected licensed mental health professional,
               as a Co-Parent Counselor to assist them in collaboratively parenting the Child(ren).
              </div>

              <div>
              <input type="checkbox" id="9.01" name="childfocused" onclick="clickMe('childTherapist')" />
              <label for="9.01">Child-Focused Therapist</label>
              </div>

              <div class="container card p-4" id="childTherapistSection" style="display: none;">
              Parents agree to engage <input type="text" name="childfocused" id="therapistInput9.01" /> (insert name for therapist), 
              or other mutually selected licensed mental health professional, as a Child-Focused Therapist for Child(ren).              
              </div>

              <div>
              <input type="checkbox" name="other" id="9.02"/>
              <lable for="9.02">Social Media Between Parents</lable>
              </div>
          
              <div>
              <input type="checkbox" name="other" id="9.03"/>
              <label for="9.03">Social Media For Child(ren)</label>
              </div>

            <div>
              <input type="checkbox" name="other" id="9.04"/>
              <label for="9.04">Joint Parent-Teacher Meetings</label>
            </div>

              <div>
              <input type="checkbox" name="other" id="9.05"/>
              <label for="9.05">Separate Parent-Teacher Meetings</label>
              </div>

              <div>
              <input type="checkbox" name="other" id="9.06"  onclick="showParentOptions()"/>
              <label for="9.06">One Parent to Attend Parent-Teacher Meetings</label>
              </div>

              <div class="container card p-4" id="parentOptions" style="display: none;">
              <select name="other" id="parentAB_Other">
              <option value="parentAB_Other">Parent A</option>
              <option value="parentAB_Other">Parent B</option>
              </select> will attend all parent-teacher meetings and will advise Parent B/A of the Child(ren)'s progress.
              </div>

              <div>
              <input type="checkbox" name="other" id="9.07"/>
              <label for="9.07">Report Cards for the Child(ren)</label>
              </div>

              <div>
              <input type="checkbox" name="other" id="9.08"/>
              <label for="9.08">Joint Attendance at School and Extracurricular Events</label>
              </div>

              <div>
              <input type="checkbox" name="other" id="9.09"/>
              <label for="9.09">Custodial Parent to Attend School and Extracurricular Events</label>
              </div>

              <div>
              <input type="checkbox" name="other" id="9.10"/>
              <label for="9.10">Alternate Attendance at School and Extracurricular Events</label>
              </div>

              <div>
              <input type="checkbox" name="other" id="9.11"  onclick="clickDoc()"/>
              <label for="9.11">Documents</label>
              </div>

              <div class="container card p-4" id="parentDoc" style="display:none;">
              <select name="other" id="parentABdoc_Other">
              <option value="parentABdoc_Other">Parent A</option>
              <option value="parentABdoc_Other">Parent B</option>
              </select> will keep the original passport issued in the Child(ren)'s name, their social security card, birth certificate, 
              and (insert any other relevant documents below) at their home, and these documents will be made available to 
              <select name="other" id="parentABdoc_Other2">
              <option value="parentABdoc_Other2">Parent A</option>
              <option value="parentABdoc_Other2" selected>Parent B</option></select> as needed. 
              Both Parents shall have copies of all of the important documents.

              <br>
              <input type="file"  multiple />
              </div>
 
              <div>
              <input type="checkbox" id="9.12"/>
              <label for="9.12">Joint Authority to Consent for Passport</label>
              </div>

              <div>
              <input type="checkbox" id="9.13"  onclick="clickPassport()"/>
              <label for="9.13">Sole Authority to Consent for Passport</label>
              </div>

              <div class="container card p-4" id="passport" style="display: none;">
              <select name="other "id="parentAB_Other3">
              <option value="parentAB_Other3">Parent A</option>
              <option value="parentAB_Other3">Parent B</option>
              </select> can apply for the passport for a Child without the consent of 
              <select name="other" id="parentAB_Other4">
              <option value="parentAB_Other4">Parent A</option>
              <option value="parentAB_Other4" selected>Parent B</option></select>.
              </div>

              <div>
              <input type="checkbox" id="9.14"/>
              <label for="9.14">New Intimate Partner Protocols (Less Detailed)</label>
              </div>

              <div>
              <input type="checkbox" id="9.15"/>
              <label for="9.15">New Intimate Partner Protocols (More Detailed)</label>
              </div>

              <div>
              <input type="checkbox" id="9.16"/>
              <label for="9.16">Alternative Dispute Resolution</label>
              </div>
          <div class="row justify-content-center pt-4 pb-4">
          <button id="next0" onclick="submit()">Next Section</button>
        </div>
      </div>
    </div>
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

