<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="./?page=4">
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
          <button id="next" onclick="nextHandler()">Next Page</button>
        </div>
      </div>

      <div id="page1" class="container card p-4">
        <h1>Legal Custody</h1>
        <br>
        <h4>Pick only one</h4>
        <div>
          <input type="radio" name="communication" id="emailonly" />
          <label for="emailonly">Joint to both parents</label>
        </div>
        <div>
          <input type="radio" name="communication" id="emailtext" />
          <label for="emailtext">Sole to one parent</label>
        </div>
        <div>
          <input type="radio" name="communication" id="wizardmutually" />
          <label for="wizardmutually">Parents must consult but one parent has tie-breaking authority</label>
        </div>

        <div>
          <input id="fall-alternate-break" type="radio" name="schoolFallBreakSchedule" value="fall-alternate-break" />
          <label for="fall-alternate-break">Parents must consult but there is a division of authority</label>
        </div>


        <div>

          <div class="row justify-content-center pt-4 pb-4">
            <button id="previous" onClick="previousHandler()">Previous Page</button> &nbsp;&nbsp;
            <button id="another" onclick="nextHandler()">Next Page</button>
          </div>
        </div>
      </div>

      <div id="page2" class="container card p-4">
        <h1>Physical Custody and Time Sharing</h1>
        <h3>Holiday Table</h3>
        <div>
          <p>Please select one:</p>
          <div class="row justify-content-center">
            <table class="table table-bordered" id="table_field">
              <tr>
                <th>Holiday</th>
                <th>Parent A</th>
                <th>Parent B</th>
              </tr>
              <tr>
                <td>New Year's Day (January 1)</td>
                <td><input class="form-control" type="radio" name="newYears" required></td>
                <td><input class="form-control" type="radio" name="newYears" required></td>
              </tr>
              <tr>
                <td>Martin Luther King Day (Monday)</td>
                <td><input class="form-control" type="radio" name="mlk" required></td>
                <td><input class="form-control" type="radio" name="mlk" required></td>
              </tr>
              <tr>
                <td>President's Day (Monday)</td>
                <td><input class="form-control" type="radio" name="presidents" required></td>
                <td><input class="form-control" type="radio" name="presidents" required></td>
              </tr>
              <tr>
                <td>Kuhio Day (Friday)</td>
                <td><input class="form-control" type="radio" name="kuhio" required></td>
                <td><input class="form-control" type="radio" name="kuhio" required></td>
              </tr>
              <tr>
                <td>Good Friday (Friday)</td>
                <td><input class="form-control" type="radio" name="goodFriday" required></td>
                <td><input class="form-control" type="radio" name="goodFriday" required></td>
              </tr>
              <tr>
                <td>Easter (Sunday)</td>
                <td><input class="form-control" type="radio" name="easter" required></td>
                <td><input class="form-control" type="radio" name="easter" required></td>
              </tr>
              <tr>
                <td>Mother's Day (Sunday)</td>
                <td><input class="form-control" type="radio" name="mothers" required></td>
                <td><input class="form-control" type="radio" name="mothers" required></td>
              </tr>
              <tr>
                <td>Memorial Day (Monday)</td>
                <td><input class="form-control" type="radio" name="memorial" required></td>
                <td><input class="form-control" type="radio" name="memorial" required></td>
              </tr>
              <tr>
                <td>Father's Day (Sunday)</td>
                <td><input class="form-control" type="radio" name="fathers" required></td>
                <td><input class="form-control" type="radio" name="fathers" required></td>
              </tr>
              <tr>
                <td>Fourth of July (July 4)</td>
                <td><input class="form-control" type="radio" name="julyFourth" required></td>
                <td><input class="form-control" type="radio" name="julyFourth" required></td>
              </tr>
              <tr>
                <td>Statehood Day (Friday)</td>
                <td><input class="form-control" type="radio" name="statehood" required></td>
                <td><input class="form-control" type="radio" name="statehood" required></td>
              </tr>
              <tr>
                <td>Labor Day (Monday)</td>
                <td><input class="form-control" type="radio" name="labor" required></td>
                <td><input class="form-control" type="radio" name="labor" required></td>
              </tr>
              <tr>
                <td>Election Day (Tuesday)</td>
                <td><input class="form-control" type="radio" name="election" required></td>
                <td><input class="form-control" type="radio" name="election" required></td>
              </tr>
              <tr>
                <td>Veteran's Day (November 11)</td>
                <td><input class="form-control" type="radio" name="veterans" required></td>
                <td><input class="form-control" type="radio" name="veterans" required></td>
              </tr>
              <tr>
                <td>Thanksgiving (Thursday)</td>
                <td><input class="form-control" type="radio" name="thanksgiving" required></td>
                <td><input class="form-control" type="radio" name="thanksgiving" required></td>
              </tr>
              <tr>
                <td>Christmas Eve (December 24)</td>
                <td><input class="form-control" type="radio" name="christmasEve" required></td>
                <td><input class="form-control" type="radio" name="christmasEve" required></td>
              </tr>
              <tr>
                <td>Christmas Day (December 25)</td>
                <td><input class="form-control" type="radio" name="christmas" required></td>
                <td><input class="form-control" type="radio" name="christmas" required></td>
              </tr>
              <tr>
                <td>New Year's Eve (December 31)</td>
                <td><input class="form-control" type="radio" name="nye" required></td>
                <td><input class="form-control" type="radio" name="nye" required></td>
              </tr>
              <tr>
                <td>Parent A's Birthday (Insert date)</td>
                <td><input class="form-control" type="radio" name="partyA" required></td>
                <td><input class="form-control" type="radio" name="partyA" required></td>
              </tr>
              <tr>
                <td>Parent B's Birthday (Insert date)</td>
                <td><input class="form-control" type="radio" name="partyB" required></td>
                <td><input class="form-control" type="radio" name="partyB" required></td>
              </tr>
              <tr>
                <td>Children's Birthday(s) (Insert date)</td>
                <td><input class="form-control" type="radio" name="child1" required></td>
                <td><input class="form-control" type="radio" name="child1" required></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row justify-content-center pt-4 pb-4">
          <button id="next" onclick="nextHandler()">Next Page</button>
        </div>
      </div>
      <div id="page3" class="container card p-4">
        <h1>Physical Custody and Time Sharing</h1>
        <h3>Optional</h3>
        <div>
          <div>
            <p>Please check all that apply:</p>
            <div class="row justify-content-center">
              <div class="column">
                <div>
                  <input id="travel-with-children" type="checkbox" name="travel-with-children" value="travel-with-children" />
                  <label for="travel-with-children">Travel with the Children</label>
                </div>
                <div>
                  <input id="reschedule-make-up-time" type="checkbox" name="reschedule-make-up-time" value="reschedule-make-up-time" />
                  <label for="reschedule-make-up-time">Reschedule and Make-Up Time</label>
                </div>
                <div>
                  <input id="first-refusal" type="checkbox" name="first-refusal" value="first-refusal" />
                  <label for="first-refusal">Right of First Refusal</label>
                </div>
                <div>
                  <input id="drop-off" type="checkbox" name="drop-off" value="drop-off" />
                  <label for="drop-off">Drop Off for Non-School Exchange</label>
                </div>
                <div>
                  <input id="exchanges-neutral-location" type="checkbox" name="exchanges-neutral-location" value="exchanges-neutral-location" />
                  <label for="exchanges-neutral-location">Exchanges at a Neutral Location</label>
                </div>
              </div>
              <div class="column">
                <div>
                  <input id="delegate-pick-up" type="checkbox" name="delegate-pick-up" value="delegate-pick-up" />
                  <label for="delegate-pick-up">Parental Authority to Delegate Pick-Up and Drop Off</label>
                </div>
                <div>
                  <input id="persons-authorized" type="checkbox" name="persons-authorized" value="persons-authorized" />
                  <label for="persons-authorized">Persons Authorized to Pick Up and Drop Off</label>
                </div>
                <div>
                  <input id="children-belongings" type="checkbox" name="children-belongings" value="children-belongings" />
                  <label for="children-belongings">Children's Personal Belongings</label>
                </div>
                <div>
                  <input id="relocation" type="checkbox" name="relocation" value="relocation" />
                  <label for="relocation">Relocation</label>
                </div>
                <div>
                  <input id="modify-schedule" type="checkbox" name="modify-schedule" value="modify-schedule" />
                  <label for="modify-schedule">Modification of Schedule by Agreement of Both Parties</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center pt-4 pb-4">
            <button id="toCommunication" onclick="">Communication</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>