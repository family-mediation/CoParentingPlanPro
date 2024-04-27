<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="./?page=8">
     <div id="mainForm">
      <div id="page0" class="container card p-4">
        <h1>Other Issues:</h1>
        <br>
              <div>
              <input type="checkbox" id="9.00" name="other[]" value="9.00" onclick="checkBox('therapist')"/>
              <label for="9.00">Co-Parent Counseling</label>
              </div>

              <div class="container card p-4" id="cotherapist" style="display: none;">
              Parents agree to engage <input type="text" name="therapistInput1"/> (insert name for therapist), or other mutually selected licensed mental health professional,
               as a Co-Parent Counselor to assist them in collaboratively parenting the Child(ren).
              </div>

              <div>
              <input type="checkbox" id="9.01" name="other[]" value="9.01" onclick="clickMe('childTherapist')" />
              <label for="9.01">Child-Focused Therapist</label>
              </div>

              <div class="container card p-4" id="childTherapistSection" style="display: none;">
              Parents agree to engage <input type="text" name="therapistInput2"/> (insert name for therapist), 
              or other mutually selected licensed mental health professional, as a Child-Focused Therapist for Child(ren).              
              </div>

              <div>
              <input type="checkbox" name="other[]" id="9.02" value="9.02"/>
              <label for="9.02">Social Media Between Parents</label>
              </div>
          
              <div>
              <input type="checkbox" name="other[]" id="9.03" value="9.03"/>
              <label for="9.03">Social Media For Child(ren)</label>
              </div>

            <div>
              <input type="checkbox" name="other[]" id="9.04" value="9.04"/>
              <label for="9.04">Joint Parent-Teacher Meetings</label>
            </div>

              <div>
              <input type="checkbox" name="other[]" id="9.05" value="9.05"/>
              <label for="9.05">Separate Parent-Teacher Meetings</label>
              </div>

              <div>
              <input type="checkbox" name="other[]" id="9.06" value="9.06" onclick="showParentOptions()"/>
              <label for="9.06">One Parent to Attend Parent-Teacher Meetings</label>
              </div>

              <div class="container card p-4" id="parentOptions" style="display: none;">
              <select name="parentAB_Other" id="parentAB_Other">
              <option value="<?php echo $_SESSION['responses']['partyAFirst'] . ' ' . $_SESSION['responses']['partyALast']; ?>">Parent A</option>
              <option value="<?php echo $_SESSION['responses']['partyBFirst'] . ' ' . $_SESSION['responses']['partyBLast']; ?>">Parent B</option>
              </select> will attend all parent-teacher meetings and will advise <select name="parentAB_Other1" id="parentAB_Other1">
              <option value="<?php echo $_SESSION['responses']['partyAFirst'] . ' ' . $_SESSION['responses']['partyALast']; ?>">Parent A</option>
              <option value="<?php echo $_SESSION['responses']['partyBFirst'] . ' ' . $_SESSION['responses']['partyBLast']; ?>">Parent B</option>
              </select> of the Child(ren)'s progress.
              </div>

              <div>
              <input type="checkbox" name="other[]" id="9.07" value="9.07"/>
              <label for="9.07">Report Cards for the Child(ren)</label>
              </div>

              <div>
              <input type="checkbox" name="other[]" id="9.08" value="9.08"/>
              <label for="9.08">Joint Attendance at School and Extracurricular Events</label>
              </div>

              <div>
              <input type="checkbox" name="other[]" id="9.09" value="9.09"/>
              <label for="9.09">Custodial Parent to Attend School and Extracurricular Events</label>
              </div>

              <div>
              <input type="checkbox" name="other[]" id="9.10" value="9.10"/>
              <label for="9.10">Alternate Attendance at School and Extracurricular Events</label>
              </div>

              <div>
              <input type="checkbox" name="other[]" id="9.11" value="9.11" onclick="clickDoc()"/>
              <label for="9.11">Documents</label>
              </div>

              <div class="container card p-4" id="parentDoc" style="display:none;">
              <select name="parentABdoc_Other" id="parentABdoc_Other">
              <option value="<?php echo $_SESSION['responses']['partyAFirst'] . ' ' . $_SESSION['responses']['partyALast']; ?>">Parent A</option>
              <option value="<?php echo $_SESSION['responses']['partyBFirst'] . ' ' . $_SESSION['responses']['partyBLast']; ?>">Parent B</option>
              </select> will keep the original passport issued in the Child(ren)'s name, their social security card, birth certificate, 
              and <input type="text" class="form-control" name="otherDocuments" id="otherDocuments" placeholder="Input any other relevant documents, leave blank if N/A" style="margin: 10px;" /> at their home, and these documents will be made available to 
              <select name="parentABdoc_Other2" id="parentABdoc_Other2">
              <option value="<?php echo $_SESSION['responses']['partyAFirst'] . ' ' . $_SESSION['responses']['partyALast']; ?>">Parent A</option>
              <option value="<?php echo $_SESSION['responses']['partyBFirst'] . ' ' . $_SESSION['responses']['partyBLast']; ?>" selected>Parent B</option></select> as needed. 
              Both Parents shall have copies of all of the important documents.

              <!-- <br>
              <input type="file"  multiple /> -->
              </div>
 
              <div>
              <input type="checkbox" name="other[]" id="9.12" value="9.12"/>
              <label for="9.12">Joint Authority to Consent for Passport</label>
              </div>

              <div>
              <input type="checkbox" id="9.13" value ="9.13" name="other[]" onclick="clickPassport()"/>
              <label for="9.13">Sole Authority to Consent for Passport</label>
              </div>

              <div class="container card p-4" id="passport" style="display: none;">
              <select name="parentABOther3" id="parentABOther3">
              <option value="<?php echo $_SESSION['responses']['partyAFirst'] . ' ' . $_SESSION['responses']['partyALast']; ?>">Parent A</option>
              <option value="<?php echo $_SESSION['responses']['partyBFirst'] . ' ' . $_SESSION['responses']['partyBLast']; ?>">Parent B</option>
              </select> can apply for the passport for a Child without the consent of 
              <select name="parentAB_Other4" id="parentAB_Other4">
              <option value="<?php echo $_SESSION['responses']['partyAFirst'] . ' ' . $_SESSION['responses']['partyALast']; ?>">Parent A</option>
              <option value="<?php echo $_SESSION['responses']['partyBFirst'] . ' ' . $_SESSION['responses']['partyBLast']; ?>" selected>Parent B</option></select>.
              </div>

              <div>
              <input type="checkbox" id="9.14" value="9.14" name="other[]"/>
              <label for="9.14">New Intimate Partner Protocols (Less Detailed)</label>
              </div>

              <div>
              <input type="checkbox" id="9.15" value="9.15" name="other[]"/>
              <label for="9.15">New Intimate Partner Protocols (More Detailed)</label>
              </div>

              <div>
              <input type="checkbox" id="9.16" value="9.16" name="other[]"/>
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

