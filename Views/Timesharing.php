<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="">
    <div id="mainForm">
      <div id="page0" class="container card p-4">
        <h1>Physical Custody and Time Sharing</h1>
        <h3>Timesharing During the School Year</h3>
          <div>
            <p>Please select one:</p>
            <div class="row justify-content-center">
              <div class="column p-3">
                <p>Equal Timesharing Schedules:</p>
                <div>
                  <input id="2-2-3" type="radio" name="schoolYearSchedule" value="2-2-3"/>
                  <label for="2-2-3">2-2-3 Schedule</label>
                </div>
                <div>
                  <input id="2-2-5-5" type="radio" name="schoolYearSchedule" value="2-2-5-5"/>
                  <label for="2-2-5-5">2-2-5-5 Schedule</label>
                </div>
                <div>
                  <input id="3-4-4-3" type="radio" name="schoolYearSchedule" value="3-4-4-3"/>
                  <label for="3-4-4-3">3-4-4-3 Schedule</label>
                </div>
                <div>
                  <input id="7-7" type="radio" name="schoolYearSchedule" value="7-7"/>
                  <label for="7-7">7-7 Schedule</label>
                </div>
              </div>
              <div class="column p-3">
                <p>Other Timesharing Schedules:</p>
                <div>
                  <input id="8-6" type="radio" name="schoolYearSchedule" value="8-6"/>
                  <label for="8-6">8-6 Schedule</label>
                </div>
                <div>
                  <input id="10-4" type="radio" name="schoolYearSchedule" value="10-4"/>
                  <label for="10-4">10-4 Schedule</label>
                </div>
                <div>
                  <input id="ownSchedule" type="radio" name="schoolYearSchedule" value="ownSchedule"/>
                  <label for="ownSchedule">Design Your Own Schedule</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center pt-4 pb-4">
            <button id="next" onclick="nextHandler()">Next Page</button>
          </div>
      </div>
      <div id="page1" class="container card p-4">
        <h1>Physical Custody and Time Sharing</h1>
        <h3>Timesharing During the School Breaks</h3>
        <div>
          <div>
            <p>Please select one:</p>
            <div class="row justify-content-center">
              <div class="column p-3">
                <p>Fall Break:</p>
                <div>
                  <input id="fall-split-break" type="radio" name="schoolFallBreakSchedule" value="fall-split-break"/>
                  <label for="fall-split-break">Split Break Schedule</label>
                </div>
                <div>
                  <input id="fall-alternate-break" type="radio" name="schoolFallBreakSchedule" value="fall-alternate-break"/>
                  <label for="fall-alternate-break">Alternate Break Schedule</label>
                </div>
                <div>
                  <input id="fall-continue-schedule" type="radio" name="schoolFallBreakSchedule" value="fall-continue-schedule"/>
                  <label for="fall-continue-schedule">Continued Schedule</label>
                </div>
              </div>
              <div class="column p-3">
                <p>Thanksgiving Break:</p>
                <div>
                  <input id="thanksgiving-split-break" type="radio" name="schoolThanksgivingBreakSchedule" value="thanksgiving-split-break"/>
                  <label for="thanksgiving-split-break">Split Break Schedule</label>
                </div>
                <div>
                  <input id="thanksgiving-alternate-break" type="radio" name="schoolThanksgivingBreakSchedule" value="thanksgiving-alternate-break"/>
                  <label for="thanksgiving-alternate-break">Alternate Break Schedule</label>
                </div>
                <div>
                  <input id="thanksgiving-continue-schedule" type="radio" name="schoolThanksgivingBreakSchedule" value="thanksgiving-continue-schedule"/>
                  <label for="thanksgiving-continue-schedule">Continued Schedule</label>
                </div>
              </div>
              <div class="column p-3">
                <p>Winter Break:</p>
                <div>
                  <input id="winter-split-break" type="radio" name="schoolWinterBreakSchedule" value="winter-split-break"/>
                  <label for="winter-split-break">Split Break Schedule</label>
                </div>
                <div>
                  <input id="winter-alternate-break" type="radio" name="schoolWinterBreakSchedule" value="winter-alternate-break"/>
                  <label for="winter-alternate-break">Alternate Break Schedule</label>
                </div>
                <div>
                  <input id="winter-continue-schedule" type="radio" name="schoolWinterBreakSchedule" value="winter-continue-schedule"/>
                  <label for="winter-continue-schedule">Continued Schedule</label>
                </div>
              </div>
              <div class="column p-3">
                <p>Spring Break:</p>
                <div>
                  <input id="spring-split-break" type="radio" name="schoolSpringBreakSchedule" value="spring-split-break"/>
                  <label for="spring-split-break">Split Break Schedule</label>
                </div>
                <div>
                  <input id="spring-alternate-break" type="radio" name="schoolSpringBreakSchedule" value="spring-alternate-break"/>
                  <label for="spring-alternate-break">Alternate Break Schedule</label>
                </div>
                <div>
                  <input id="spring-continue-schedule" type="radio" name="schoolSpringBreakSchedule" value="spring-continue-schedule"/>
                  <label for="spring-continue-schedule">Continued Schedule</label>
                </div>
              </div>
              <div class="column p-3">
                <p>Summer Break:</p>
                <div>
                  <input id="summer-split-break" type="radio" name="schoolSummerBreakSchedule" value="summer-split-break"/>
                  <label for="summer-split-break">Split Break Schedule</label>
                </div>
                <div>
                  <input id="summer-alternate-break" type="radio" name="schoolSummerBreakSchedule" value="summer-alternate-break"/>
                  <label for="summer-alternate-break">Alternate Break Schedule</label>
                </div>
                <div>
                  <input id="summer-continue-schedule" type="radio" name="schoolSummerBreakSchedule" value="summer-continue-schedule"/>
                  <label for="summer-continue-schedule">Continued Schedule</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center pt-4 pb-4">
            <button id="another" onclick="nextHandler()">Next Page</button>
          </div>
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
                  <input id="travel-with-children" type="checkbox" name="travel-with-children" value="travel-with-children"/>
                  <label for="travel-with-children">Travel with the Children</label>
                </div>
                <div>
                  <input id="reschedule-make-up-time" type="checkbox" name="reschedule-make-up-time" value="reschedule-make-up-time"/>
                  <label for="reschedule-make-up-time">Reschedule and Make-Up Time</label>
                </div>
                <div>
                  <input id="first-refusal" type="checkbox" name="first-refusal" value="first-refusal"/>
                  <label for="first-refusal">Right of First Refusal</label>
                </div>
                <div>
                  <input id="drop-off" type="checkbox" name="drop-off" value="drop-off"/>
                  <label for="drop-off">Drop Off for Non-School Exchange</label>
                </div>
                <div>
                  <input id="exchanges-neutral-location" type="checkbox" name="exchanges-neutral-location" value="exchanges-neutral-location"/>
                  <label for="exchanges-neutral-location">Exchanges at a Neutral Location</label>
                </div>
              </div>
              <div class="column">
                <div>
                  <input id="delegate-pick-up" type="checkbox" name="delegate-pick-up" value="delegate-pick-up"/>
                  <label for="delegate-pick-up">Parental Authority to Delegate Pick-Up and Drop Off</label>
                </div>
                <div>
                  <input id="persons-authorized" type="checkbox" name="persons-authorized" value="persons-authorized"/>
                  <label for="persons-authorized">Persons Authorized to Pick Up and Drop Off</label>
                </div>
                <div>
                  <input id="children-belongings" type="checkbox" name="children-belongings" value="children-belongings"/>
                  <label for="children-belongings">Children's Personal Belongings</label>
                </div>
                <div>
                  <input id="relocation" type="checkbox" name="relocation" value="relocation"/>
                  <label for="relocation">Relocation</label>
                </div>
                <div>
                  <input id="modify-schedule" type="checkbox" name="modify-schedule" value="modify-schedule"/>
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