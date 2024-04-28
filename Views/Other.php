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
              <span class="otherTool" data-bs-placement="top" title="Neither Parent shall post any pictures of the other Parent on social media nor make any derogatory
              comment about the other Parent on social media.">
              <i class="bi bi-info-circle"></i>
              </span>
              </div>
          
              <div>
              <input type="checkbox" name="other[]" id="9.03" value="9.03"/>
              <label for="9.03">Social Media For Child(ren)</label>
              <span class="otherTool" data-bs-placement="top" title="Parents agree that none
              of their Child(ren) shall have access to any social media platform until they reach
              thirteen (13) years of age, and thereafter both Parents shall monitor any Child’s social
              media usage to ensure that it is safe and does not cause embarrassment to either
              Parent or the Child.">
              <i class="bi bi-info-circle"></i>
              </span>
              </div>

            <div>
              <input type="checkbox" name="other[]" id="9.04" value="9.04"/>
              <label for="9.04">Joint Parent-Teacher Meetings</label>
              <span class="otherTool" data-bs-placement="top" title="Parents agree that it
              is in their Child(ren)’s best interests that they both attend parent-teacher meetings
              together.">
              <i class="bi bi-info-circle"></i>
              </span>
            </div>

              <div>
              <input type="checkbox" name="other[]" id="9.05" value="9.05"/>
              <label for="9.05">Separate Parent-Teacher Meetings</label>
              <span class="otherTool" data-bs-placement="top" title="Parents agree
              that they will each arrange our own separate parent-teacher meetings.">
              <i class="bi bi-info-circle"></i>
              </span>
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
              <span class="otherTool" data-bs-placement="top" title="Both Parents will
              be provided with separate report cards for the Child(ren). Parents shall notify the school
              authorities to provide separate report cards.">
              <i class="bi bi-info-circle"></i>
              </span>
              </div>

              <div>
              <input type="checkbox" name="other[]" id="9.08" value="9.08"/>
              <label for="9.08">Joint Attendance at School and Extracurricular Events</label>
              <span class="otherTool" data-bs-placement="top" title="Both Parents may attend school events and extra-
              curricular activities.">
              <i class="bi bi-info-circle"></i>
              </span>
              </div>

              <div>
              <input type="checkbox" name="other[]" id="9.09" value="9.09"/>
              <label for="9.09">Custodial Parent to Attend School and Extracurricular Events</label>
              <span class="otherTool" data-bs-placement="top" title="The Parent with whom the Child(ren) is/are residing
              at the time of the school event and extracurricular activity will be the sole Parent to
              attend these events.">
              <i class="bi bi-info-circle"></i>
              </span>
              </div>

              <div>
              <input type="checkbox" name="other[]" id="9.10" value="9.10"/>
              <label for="9.10">Alternate Attendance at School and Extracurricular Events</label>
              <span class="otherTool" data-bs-placement="top" title="Parent shall alternate attending the Child(ren)’s
              school events and extracurricular activities.">
              <i class="bi bi-info-circle"></i>
              </span>
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
              and <input type="text" class="form-control" name="otherDocuments" id="otherDocuments" placeholder="Input any other relevant documents" style="margin: 10px;" /> at their home, and these documents will be made available to 
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
              <span class="otherTool" data-bs-placement="top" title="Parent A and Parent B must both consent for the purposes of a passport application for any Child.">
              <i class="bi bi-info-circle"></i>
              </span>
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
              <span class="otherTool" data-bs-placement="top" title="Both parents agree that they shall not introduce any of their minor children to a new
              significant other or intimate partner until (a) they have been in an intimate dating
              relationship for six (6) months or longer and (b) the other parent has been given an
              opportunity to meet that significant other/intimate partner first.">
              <i class="bi bi-info-circle"></i>
              </span>
              </div>

              <div>
              <input type="checkbox" id="9.15" value="9.15" name="other[]"/>
              <label for="9.15">New Intimate Partner Protocols (More Detailed)</label>
              <span class="otherTool" data-bs-placement="top" title="If there is any
              disagreement related to this Agreement or any Child-related issues, both Parents agree
              that they shall engage a mutually selected mediator to help them resolve the issue(s)
              prior to filing a motion for relief with the Family Court.">
              <i class="bi bi-info-circle"></i>
              </span>
              </div>

              <div>
              <input type="checkbox" id="9.16" value="9.16" name="other[]"/>
              <label for="9.16">Alternative Dispute Resolution</label>
              <span class="otherTool" data-bs-placement="top" title="Given that both parents will likely engage in new intimate partner
              relationships in the future, it is their intent that the children’s well-being, comfort and
              stability remain the highest priority.">
              <i class="bi bi-info-circle"></i>
              </span>
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

  const tooltips = document.querySelectorAll('.otherTool')
  tooltips.forEach(t => {
    new bootstrap.Tooltip(t)
  })

</script>

