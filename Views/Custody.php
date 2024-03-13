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
          <input type="radio" name="custody" id="joint" value="joint" onclick="jointMoreInfo()" />
          <label for="joint">Joint to both parents</label>
        </div>

        <div class="container card p-4" id="jointCustody" style="display: none;">
          <input type="radio" name="tieBreakingAuthority" id="tieBreakA" />
          <label for="tiebreakA">Tie-Breaking Authority to Parent A</label>

          <br><input type="radio" name="tieBreakingAuthority" id="tieBreakB" />
          <label for="tieBreakB">Tie-Breaking Authority to Parent A</label>
        </div>

        <div>
          <input type="radio" name="custody" id="soleA" value="soleA" onclick="soleMoreInfoA()" />
          <label for="soleA">Sole to Parent A</label>
        </div>

        <div class="container card p-4" id="soleMoreA" style="display: none;">
          Although Parent A is awarded sole legal custody, Parent B
          shall have free and unrestricted access to all information pertaining to the Child(ren).
          The Parent who does not have legal custody may independently contact any provider
          serving the Child(ren) including education, health-related, extracurricular, etc. and
          access any and all records or information. The Parent with legal custody shall have an
          affirmative duty to inform the other Parent of any new providers working with the
          Child(ren).
        </div>

        <div>
          <input type="radio" name="custody" id="soleB" value="soleB" onclick="soleMoreInfoB()" />
          <label for="soleB">Sole to Parent B</label>
        </div>

        <div class="container card p-4" id="soleMoreB" style="display: none;">
          Although Parent B is awarded sole legal custody, Parent A
          shall have free and unrestricted access to all information pertaining to the Child(ren).
          The Parent who does not have legal custody may independently contact any provider
          serving the Child(ren) including education, health-related, extracurricular, etc. and
          access any and all records or information. The Parent with legal custody shall have an
          affirmative duty to inform the other Parent of any new providers working with the
          Child(ren).
        </div>

        <div>
          <input type="radio" name="custody" id="divisionAuth" value="divisionAuth" onclick="divAutInfo()" />
          <label for="divisionAuth">Parents must consult but there is a division of authority</label>
        </div>

        <div class="container card p-4" id="AutMoreInfo" style="display: none;">
          Parents shall share joint legal custody of the Child(ren), provided
          however, that if Parents cannot mutually agree on a legal custody decision for the
          Child(ren), then <select id="parentAB">
            <option value="parentA">Parent A</option>
            <option value="parentB">Parent B</option>
          </select> shall have tie-breaking authority to make major decisions
          about the Child(ren)'s education and extracurricular activities, after consulting with
          <select id="parentAB">
            <option value="parentA">Parent A</option>
            <option value="parentB">Parent B</option>
          </select> and the Child(ren) and <select id="parentAB">
            <option value="parentA">Parent A</option>
            <option value="parentB">Parent B</option>
          </select> shall have tie-breaking authority to make
          major decisions about the Child(ren)'s health care, language, and spirituality, after
          consulting with <select id="parentAB">
            <option value="parentA">Parent A</option>
            <option value="parentB">Parent B</option>
          </select> and the child.
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
        <br>
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
          <button id="next2" onclick="submit()">Next Page</button>
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


  function jointMoreInfo() {
    var a = document.getElementById('jointCustody');
    a.style.display = document.getElementById('joint').checked ? 'block' : 'none';
  }

  var radioButtonsW = document.querySelectorAll('input[type="radio"][name="custody"]');
  radioButtonsW.forEach(function(radioButton1) {
    radioButton1.addEventListener('change', function() {
      jointMoreInfo();
    });
  });

  function soleMoreInfoA() {
    var b = document.getElementById('soleMoreA');
    b.style.display = document.getElementById('soleA').checked ? 'block' : 'none';
  }

  var radioButtonsX = document.querySelectorAll('input[type="radio"][name="custody"]');
  radioButtonsX.forEach(function(radioButton2) {
    radioButton2.addEventListener('change', function() {
      soleMoreInfoA();
    });
  });

  function soleMoreInfoB() {
    var c = document.getElementById('soleMoreB');
    c.style.display = document.getElementById('soleB').checked ? 'block' : 'none';
  }

  var radioButtonsY = document.querySelectorAll('input[type="radio"][name="custody"]');
  radioButtonsY.forEach(function(radioButton3) {
    radioButton3.addEventListener('change', function() {
      soleMoreInfoB();
    });
  });

  function divAutInfo() {
    var d = document.getElementById('AutMoreInfo');
    d.style.display = document.getElementById('divisionAuth').checked ? 'block' : 'none';
  }

  var radioButtonsZ = document.querySelectorAll('input[type="radio"][name="custody"]');
  radioButtonsZ.forEach(function(radioButton4) {
    radioButton4.addEventListener('change', function() {
      divAutInfo();
    });
  });
</script>