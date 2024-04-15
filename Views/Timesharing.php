<div class="text-center">
  <form method="post" class="" locale="ENGLISH" action="./?page=5">
    <div id="mainForm">
      <div id="page0" class="container card p-4">
        <h1>Physical Custody and Time Sharing</h1>
        <h3>Timesharing During the School Year</h3>
        <div>
          <p>Please select one:</p>
          <div class="row justify-content-center" style="text-align: left;">
            <div class="column p-3" style="border-style: double; width: 300px">
              <p>Equal Timesharing Schedules:</p>
              <div>
                <input id="2-2-3" type="radio" name="schoolYearSchedule" value="2-2-3" required />
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
            <div class="column p-3" style="border-style: double; width: 300px">
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
            <p>Please select one for each break:</p>
            <div class="row justify-content-center">
              <div class="row p-3" style="text-align: left;">
                <div class="column p-3" style="border-style: double; width: 275px">
                  <p>Fall Break:</p>
                  <div>
                    <input id="fall-split-break" type="radio" name="schoolFallBreakSchedule" value="fall-split-break" required/>
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
                <div class="column p-3" style="border-style: double; width: 275px">
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
                  <div>
                    <input id="thanksgiving-time-break" type="checkbox" name="schoolThanksgivingBreakSchedule" value="thanksgiving-time-break"/>
                    <label for="thanksgiving-time-break">Time on Thanksgiving Day</label>
                  </div>
                </div>
                <div class="column p-3" style="border-style: double; width: 275px">
                  <p>Winter Break:</p>
                  <div>
                    <input id="winter-split-break" type="radio" name="schoolWinterBreakSchedule" value="winter-split-break"/>
                    <label for="winter-split-break">Split Break Schedule</label>
                  </div>
                  <div>
                    <label class="flex-label" for="winter-alternate-break">
                      <input id="winter-alternate-break" type="radio" name="schoolWinterBreakSchedule" value="winter-alternate-break"/>
                      Alternate Break Schedule
                    </label>

                  </div>
                  <div>
                    <label class="flex-label" for="winter-split-holiday-break">
                      <input id="winter-split-holiday-break" type="radio" name="schoolWinterBreakSchedule" value="winter-split-holiday-break"/>
                      Split Break with Holiday Time Schedule
                    </label>
                  </div>
                  <div>
                    <input id="winter-continue-schedule" type="radio" name="schoolWinterBreakSchedule" value="winter-continue-schedule"/>
                    <label for="winter-continue-schedule">Continued Schedule</label>
                  </div>
                </div>
              </div>
              <div class="row p-3" style="text-align: left;">
                <div class="column p-3" style="border-style: double; width: 275px">
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
                <div class="column p-3" style="border-style: double; width: 275px">
                  <p>Summer Break:</p>
                  <div>
                    <input id="summer-split-break" type="radio" name="schoolSummerBreakSchedule" value="summer-split-break"/>
                    <label for="summer-split-break">Split Break Schedule</label>
                  </div>
                  <div>
                    <input id="summer-continue-schedule" type="radio" name="schoolSummerBreakSchedule" value="summer-continue-schedule"/>
                    <label for="summer-continue-schedule">Continued Schedule</label>
                  </div>
                  <div>
                    <label class="flex-label" for="summer-continue-uninterrupted-schedule">
                      <input id="summer-continue-uninterrupted-schedule" type="radio" name="schoolSummerBreakSchedule" value="summer-continue-uninterrupted-schedule"/>
                        Continued Schedule with Option for Uninterrupted Time
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center pt-4 pb-4">
            <button id="another" onclick="nextHandler()">Next Page</button>
          </div>
        </div>
      </div>
      <div id="page2" class="container card p-4">
        <h1>Physical Custody and Time Sharing</h1>
        <h3>Holiday Table</h3>
        <div>
          <p>Please select one per row:</p>
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
                <td><input class="form-control" type="radio" name="mlk"></td>
                <td><input class="form-control" type="radio" name="mlk"></td>
              </tr>
              <tr>
                <td>President's Day (Monday)</td>
                <td><input class="form-control" type="radio" name="presidents"></td>
                <td><input class="form-control" type="radio" name="presidents"></td>
              </tr>
              <tr>
                <td>Kuhio Day (Friday)</td>
                <td><input class="form-control" type="radio" name="kuhio"></td>
                <td><input class="form-control" type="radio" name="kuhio"></td>
              </tr>
              <tr>
                <td>Good Friday (Friday)</td>
                <td><input class="form-control" type="radio" name="goodFriday"></td>
                <td><input class="form-control" type="radio" name="goodFriday"></td>
              </tr>
              <tr>
                <td>Easter (Sunday)</td>
                <td><input class="form-control" type="radio" name="easter"></td>
                <td><input class="form-control" type="radio" name="easter"></td>
              </tr>
              <tr>
                <td>Mother's Day (Sunday)</td>
                <td><input class="form-control" type="radio" name="mothers"></td>
                <td><input class="form-control" type="radio" name="mothers"></td>
              </tr>
              <tr>
                <td>Memorial Day (Monday)</td>
                <td><input class="form-control" type="radio" name="memorial"></td>
                <td><input class="form-control" type="radio" name="memorial"></td>
              </tr>
              <tr>
                <td>Father's Day (Sunday)</td>
                <td><input class="form-control" type="radio" name="fathers"></td>
                <td><input class="form-control" type="radio" name="fathers"></td>
              </tr>
              <tr>
                <td>Fourth of July (July 4)</td>
                <td><input class="form-control" type="radio" name="julyFourth" ></td>
                <td><input class="form-control" type="radio" name="julyFourth" ></td>
              </tr>
              <tr>
                <td>Statehood Day (Friday)</td>
                <td><input class="form-control" type="radio" name="statehood" ></td>
                <td><input class="form-control" type="radio" name="statehood" ></td>
              </tr>
              <tr>
                <td>Labor Day (Monday)</td>
                <td><input class="form-control" type="radio" name="labor" ></td>
                <td><input class="form-control" type="radio" name="labor" ></td>
              </tr>
              <tr>
                <td>Election Day (Tuesday)</td>
                <td><input class="form-control" type="radio" name="election" ></td>
                <td><input class="form-control" type="radio" name="election" ></td>
              </tr>
              <tr>
                <td>Veteran's Day (November 11)</td>
                <td><input class="form-control" type="radio" name="veterans" ></td>
                <td><input class="form-control" type="radio" name="veterans" ></td>
              </tr>
              <tr>
                <td>Thanksgiving (Thursday)</td>
                <td><input class="form-control" type="radio" name="thanksgiving" ></td>
                <td><input class="form-control" type="radio" name="thanksgiving" ></td>
              </tr>
              <tr>
                <td>Christmas Eve (December 24)</td>
                <td><input class="form-control" type="radio" name="christmasEve" ></td>
                <td><input class="form-control" type="radio" name="christmasEve" ></td>
              </tr>
              <tr>
                <td>Christmas Day (December 25)</td>
                <td><input class="form-control" type="radio" name="christmas" ></td>
                <td><input class="form-control" type="radio" name="christmas" ></td>
              </tr>
              <tr>
                <td>New Year's Eve (December 31)</td>
                <td><input class="form-control" type="radio" name="nye" ></td>
                <td><input class="form-control" type="radio" name="nye" ></td>
              </tr>
              <tr>
                <td>Parent A's Birthday (<?php echo $_SESSION['responses']['partyABirthday']?>)</td>
                <td><input class="form-control" type="radio" name="partyA" ></td>
                <td><input class="form-control" type="radio" name="partyA" ></td>
              </tr>
              <tr>
                <td>Parent B's Birthday (<?php echo $_SESSION['responses']['partyBBirthday']?>)</td>
                <td><input class="form-control" type="radio" name="partyB" ></td>
                <td><input class="form-control" type="radio" name="partyB" ></td>
              </tr>
              <tr>
                <td>Children's Birthday(s) (<?php echo $_SESSION['responses']['childBirthYears']?>)</td>
                <td><input class="form-control" type="radio" name="child1" ></td>
                <td><input class="form-control" type="radio" name="child1" ></td>
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
            <div class="row justify-content-center" style="text-align: left">
              <div class="column p-3" style="border-style: double; width: 350px">
                <div>
                  <input id="travel-with-children" type="checkbox" name="travel-with-children" value="travel-with-children" />
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
                <div>
                  <input id="relocation" type="checkbox" name="relocation" value="relocation"/>
                  <label for="relocation">Relocation</label>
                </div>
              </div>
              <div class="column p-3" style="border-style: double; width: 350px">
                <div>
                  <label class="flex-label" for="delegate-pick-up">
                    <input id="delegate-pick-up" type="checkbox" name="delegate-pick-up" value="delegate-pick-up"/>
                    Parental Authority to Delegate Pick-Up and Drop Off
                  </label>
                </div>
                <div>
                  <label class="flex-label" for="persons-authorized">
                    <input id="persons-authorized" type="checkbox" name="persons-authorized" value="persons-authorized"/>
                    Persons Authorized to Pick Up and Drop Off
                  </label>
                </div>
                <div>
                  <input id="children-belongings" type="checkbox" name="children-belongings" value="children-belongings"/>
                  <label for="children-belongings">Children's Personal Belongings</label>
                </div>
                <div>
                  <label class="flex-label" for="modify-schedule">
                    <input id="modify-schedule" type="checkbox" name="modify-schedule" value="modify-schedule"/>
                    Modification of Schedule by Agreement of Both Parties
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center pt-4 pb-4">
            <button id="toCommunication" onclick="submit()">Communication</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>