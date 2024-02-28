<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="./?page=4" onsubmit="return false;">
    <div id="mainForm">
      <div id="page0" class="container card p-4">
        <h1>Legal Custody</h1>
        <br>
        <h4>Definition</h4>
        <p>Legal custody is the authority to make major
          decisions involving the Child(ren).</p>
        <p>Such major decisions would include, among others,
          the decision to allow the Child(ren) to enter the armed forces, the decision to marry
          before the legal age, the decision to file a lawsuit, or accept a settlement of claims
          involving the Child(ren), the decision to allow the Child(ren) to use birth control, including pregnancy termination, the decision to allow the children to obtain a driver’s
          license or passport, the decision to allow the Child(ren) to obtain substantial
          employment, the decision to authorize non-emergency medical or other treatment for
          the Child(ren), the decision to involve the Child(ren) in counseling, religious decisions
          affecting the Child(ren), major decisions involving the Child(ren)'s education, such as
          choice of school, change in school, advancement or retention, choice of curriculum,
          participation in extracurricular activities, and special education needs like tutoring,
          decisions as to the management of any substantial monies received by the Child(ren),
          decisions regarding major expenditures by or for the Child(ren), decisions involving
          serious discipline problems of the Child(ren), decisions involving the receipt,
          management and sale of real or personal property while a child is under eighteen (18)
          years of age, and decisions involving a child's travel to any distance beyond the
          jurisdiction of the United States for any period of time.</p>

        <div class="row justify-content-center pt-4 pb-4">
          <button id="next0" onclick="showPage('page1')">Next Page</button>
          <!-- <button id="next" onclick="nextHandler()">Next Page</button> -->
        </div>
      </div>

      <div id="page1" class="container card p-4" style="display: none;">
        <h1>Legal Custody</h1>
        <br>
        <h4>Pick only one</h4>
        <div>
          <input type="radio" name="jointCustody" id="joint" value="joint" />
          <label for="joint">Joint to both parents</label>
        </div>
        <div>
          <input type="radio" name="soleCustody" id="sole" value="sole" />
          <label for="sole">Sole to one parent</label>
        </div>
        <div>
          <input type="radio" name="consultTie" id="tieBreaking" value="tieBreaking" />
          <label for="tieBreaking">Parents must consult but one parent has tie-breaking authority</label>
        </div>
        <div>
          <input type="radio" name="consultDivision" id="divisionAuth" value="divisionAuth" />
          <label for="divisionAuth">Parents must consult but there is a division of authority</label>
        </div>

        <div class="row justify-content-center pt-4 pb-4">
          <button id="previous1" onClick="showPage('page0')">Previous Page</button> &nbsp;&nbsp;
          <button id="next1" onclick="nextHandler()">Next Page</button>
          <!-- <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="another" onclick="nextHandler()">Next Page</button> -->
        </div>

      </div>

      <div id="page2" class="container card p-4" style="display: none;">
        <h1>Legal Custody</h1>
        <h4>Optional</h4>
        <div>

          <div>
            <input type="checkbox" id="5.05" name="legalcustody" />
            <label for="7.09">Access to Information for Parent without Legal Custody</label>
          </div>

          <div>
            <input type="checkbox" id="5.06" name="legalcustody" />
            <label for="5.06">Emergency Contacts for the Child(ren)</label>
          </div>

          <div>
            <input type="checkbox" id="5.07" name="legalcustody" />
            <label for="5.07">Expert Advice when making Legal Custody Decisions</label>
          </div>

          <div>
            <input type="checkbox" id="5.08" name="legalcustody" />
            <label for="5.08">Day-to-Day Decisions</label>
          </div>

          <div>
            <input type="checkbox" id="5.09" name="legalcustody" />
            <label for="5.09">Emergency Decisions</label>
          </div>

          <div>
            <input type="checkbox" id="5.10" name="legalcustody" />
            <label for="5.10">Health Emergency or Death of Other Parent</label>
          </div>

          <div>
            <input type="checkbox" id="5.11" name="legalcustody" />
            <label for="5.11">Parallel Parenting</label>
          </div>

        </div>
        <div class="row justify-content-center pt-4 pb-4">
          <button id="previous2" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="next2" onclick="nextHandler()">Next Page</button>
          <!-- <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
          <button id="next" onclick="nextHandler()">Next Page</button> -->
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