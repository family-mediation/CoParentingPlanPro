<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="./?page=6" onsubmit="return false;">
    <div id="mainForm">
      <div id="page0" class="container card p-4">
        <h1>COMMUNICATION</h1>
        <div class="form-group row p-3" name="communication">
          <p>Parents agree and understand that communication between Co-Parents is critical to their Child(ren)’s well-being.  
            Parents shall work together to agree on what information needs to be communicated to the other Parent in a timely manner and, 
            at a minimum agree, that the following shall be communicated:</p>
          <ol type="a" style="display: block; text-align: left;">
            <li>A child is sick.</li>
            <li>A child is missing school.</li>
            <li>A child will be spending the night somewhere other than the custodial parent’s home.</li>
            <li>A pet belonging to a child is missing, dying, or new.</li>
            <li>An individual, other than the parent or subject child(ren), 
              is moving into the custodial parent’s home or property (includes long-term tenants).</li>
            <li>An individual other than a parent is transporting a child 
              (those authorized to transport the Child(ren) shall be agreed upon in advance in writing).</li>
            <li>An individual other than a parent is caring for a child when the custodial parent is not present 
              (those authorized to care for the children shall be agreed upon in advance in writing).</li>
            <li>Discipline of a child during one parent’s timesharing day which may affect the other parent’s timesharing.</li>  
          </ol>     
        </div>
        
        <div class="row justify-content-center pt-4 pb-4">
          <button id="next0" onclick="showPage('page1')">Next Page</button>
        </div>
      </div>

      <div id="page1" class="container card p-4" style="display: none;">
          <h1>Pick One:</h1>

            <div>
              <input type="radio" name="commMethod" id="email" value="email" />
              <label for="email">E-mail Only</label>
            </div>

            <div>
              <input type="radio" name="commMethod" id="bothemailtext" value="bothemailtext" />
              <label for="bothemailtext">E-mail and Text</label>
            </div>

            <div>
              <input type="radio" name="commMethod" id="wizardmutual" value="wizardmutual"/>
              <label for="wizardmutual">Our Family Wizard or Other Mutually Agreed Upon Parenting Communication Application</label>
            </div>

        <div class="row justify-content-center pt-4 pb-4">
          <button id="previous1" onClick="showPage('page0')">Previous Page</button> &nbsp;&nbsp;
          <button id="next1" onclick="nextHandler()">Next Page</button>
        </div>  
      </div>

      <div id="page2" class="container card p-4" style="display: none;">
            <h1>Optional:</h1>
              <br>
              <h4>Communication Between Co-Parents:</h4>

              <div>
              <input type="checkbox" name="commbetweenCP" id="7.04" value="7.04" onclick="showParentOptions()" />
              <label for="7.04">Monthly Conference</label>
              </div>

              <div class="container card p-4" id="monthly" value="monthCon" style="display: none;">
               Conference shall be on the first (insert day of the week of each month)
              <input type="week" name="commbetweenCP" id="insertmonthly"/> unless mutually agreed to otherwise.
              </div>

              <div>
              <input type="checkbox" name="commbetweenCP" id="7.05" value="7.05" onclick="showParentOptions2()" />
              <lable for="7.05">Semi Annual Conference</lable>
              </div>

              <div class="container card p-4" id="semi" style="display: none;">
              Parents shall meet and confer twice annually by no later than
              <input type="text" name="commbetweenCP" id="semidate1" />(insert date) and <input type="text" name="commbetweenCP" id="semidate2" />(insert date) every year.
              </div>
              
              <div>
              <input type="checkbox" name="commbetweenCP" id="7.06" value="7.06" onclick="showParentOptions3()" />
              <lable for="7.06">Annual Conference</lable>
              </div>

              <div class="container card p-4" id="annual" style="display: none;">
              Parents shall meet and confer annually by no later than
              <input type="text" name="commbetweenCP" id="annualdate" /> every year.
              </div>
              <br>&nbsp;
                    
              <h4>Communication Between Child(ren) and Non-Custodial Parent:</h4>
              <div>
              <input type="checkbox" name="betweenchildparent" id="7.07" value="7.07"/>
              <label for="7.07">Unlimited</label>
              </div>

              <div>
              <input type="checkbox" id="7.08" name="betweenchildparent" onclick="commSpecific()" />
              <label for="7.08">Specific</label>
              </div>
              
              <div class="container card p-4" id="schedule" style="display: none;">
              During the regular parenting time schedule, Parent A may call the child between 
              <input type="time" name="betweenchildparent" id="A9:00" value="09:00" /> and <input type="time" name="betweenchildparent" id="A17:00" value="17:00" /> when they are with Parent B
              and Parent B may call the childe between <input type="time" name="betweenchildparent" id="B09:00" value="09:00" /> and <input type="time" name="betweenchildparent" id="B17:00" value="17:00" />
              when they are with Parent A.
              </div>
              

              <br>
              <h4>Communication:</h4>
              <div>
              <input type="checkbox" name="otherComm" id="7.09" value="7.09" />
              <label for="7.09">Exchange of Contact Information</label>
              </div>

              <div>
              <input type="checkbox" name="otherComm" id="7.10" value="7.10" />
              <label for="7.10">Scheduling Extracurricular Activities for the Child(ren)</label>
              </div>

              <div>
              <input type="checkbox" name="otherComm" id="7.11" value="7.11" />
              <label for="7.11">Selecting Extracurricular Activities for the Child(ren)</label>
              </div>
            
          <div class="row justify-content-center pt-4 pb-4">
          <button id="previous2" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="next2" onclick="submit()">Next Page</button>
          </div> 
      </div>  
    </div>
  </form>
</div>

<script>
  function showPage(pageId) {
    document.getElementById("page0").style.display = "none";
    document.getElementById("page1").style.display = "none";
    document.getElementById("page2").style.display = "none";
    document.getElementById(pageId).style.display = "block";
  }

  function nextHandler() {
    showPage('page2');
  }

  function previousHandler() {
    showPage('page1');
  }

  function showParentOptions() {
    var monthlyRef = document.getElementById("monthly");
    var checkbox = document.getElementById("7.04");

    if (checkbox.checked) {
      monthlyRef.style.display = "block";
    } else {
      monthlyRef.style.display = "none";
    }
  }

  function showParentOptions2() {
    var semiRef = document.getElementById("semi");
    var checkbox = document.getElementById("7.05");

    if (checkbox.checked) {
      semiRef.style.display = "block";
    } else {
      semiRef.style.display = "none";
    }
  }

  function showParentOptions3() {
    var annualRef = document.getElementById("annual");
    var checkbox = document.getElementById("7.06");

    if (checkbox.checked) {
      annualRef.style.display = "block";
    } else {
      annualRef.style.display = "none";
    }
  }

  function commSpecific() {
    var scheduleRef = document.getElementById("schedule");
    var checkbox = document.getElementById("7.08");

    if (checkbox.checked) {
      scheduleRef.style.display = "block";
    } else {
      scheduleRef.style.display = "none";
    }
  }

</script>
