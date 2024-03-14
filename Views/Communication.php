<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="./?page=6" onsubmit="return false;">
    <div id="mainForm">
      <div id="page0" class="container card p-5">
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
        <div class="row justify-content-center pt-4 pb-4" name="communication">
          <button id="next0" onclick="showPage('page1')">Next Page</button>
        </div>
      </div>
      <div id="page1" class="container card p-4" style="display: none;">
          <fieldset><br>
          <h1>Pick One:</h1>
            <div>
              <input type="radio" name="communication" id="emailonly"/>
              <label for="emailonly">E-mail Only</label>
            </div>
            <div>
              <input type="radio" name="communication" id="emailtext"/>
              <label for="emailtext">E-mail and Text</label>
            </div>
            <div>
              <input type="radio" name="communication" id="wizardmutually"/>
              <label for="wizardmutually">Our Family Wizard or Other Mutually Agreed Upon Parenting Communication Application</label>
            </div>
          </fieldset>       
        <div class="row justify-content-center pt-4 pb-4">
          <button id="previous1" onClick="showPage('page0')">Previous Page</button> &nbsp;&nbsp;
          <button id="next1" onclick="nextHandler()">Next Page</button>
        </div>  
      </div>

      <div id="page2" class="container card p-4" style="display: none;">
          <fieldset>
            <h1>Optional:</h1>
              <br>
              <h4>Communication Between Co-Parents:</h4>
              <div>
              <input type="checkbox" id="7.04" name="communication" />
              <label for="7.04">Monthly Conference</label>
              </div>

              <div>
              <input type="checkbox" id="7.05" name="communication" />
              <lable for="7.05">Semi Annual Conference</lable>
              </div>

              <div>
              <input type="checkbox" id="7.06" name="communication" />
              <lable for="7.06">Annual Conference</lable>
              </div>
              </br>&nbsp;
              
              <h4>Communication Between Child(ren) and Non-Custodial Parent:</h4>
              <div>
              <input type="checkbox" id="7.07" name="communication" />
              <label for="7.07">Unlimited</label>
              </div>

            <div>
              <input type="checkbox" id="7.08" name="communication" />
              <label for="7.08">Specific</label>
            </div>

              <br>
              <h4>Communication:</h4>
              <div>
              <input type="checkbox" id="7.09" name="communication" />
              <label for="7.09">Exchange of Contact Information</label>
              </div>

              <div>
              <input type="checkbox" id="7.10" name="communication" />
              <label for="7.10">Scheduling Extracurricular Activities for the Child(ren)</label>
              </div>

              <div>
              <input type="checkbox" id="7.11" name="communication" />
              <label for="7.11">Selecting Extracurricular Activities for the Child(ren)</label>
              </div>
              </br>
          </fieldset>
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

</script>
