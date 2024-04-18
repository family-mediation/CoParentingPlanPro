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
                    <input id="thanksgiving-time-break" type="checkbox" name="schoolThanksgivingBreakScheduleOptional" value=true/>
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
                      <input id="winter-split-holiday-break" type="radio" name="schoolWinterBreakSchedule" value="winter-split-holiday-break" data-toggle="collapse" data-target="#split-break"/>
                      Split Break with Holiday Time Schedule
                    </label>
                  </div>
                  <label class="collapse" id="split-break">
                    (click again to close window)
                    <label hide="true" data-dm->Start time Christmas
                      <input type="time" class="form-control" name="christmasStart" required>
                    </label>
                    <label hide="true" data-dm->End time Christmas
                      <input type="time" class="form-control" name="christmasEnd" required>
                    </label>
                    <label hide="true" data-dm->Start time New Years Day
                      <input type="time" class="form-control" name="newYearsStart" required>
                    </label>
                    <label hide="true" data-dm->End time New Years Day
                      <input type="time" class="form-control" name="newYearsEnd" required>
                    </label>
                  </label>
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
                      <input id="summer-continue-uninterrupted-schedule" type="radio" name="schoolSummerBreakSchedule" value="summer-continue-uninterrupted-schedule" data-toggle="collapse" data-target="#uninterrupted"/>
                        Continued Schedule with Option for Uninterrupted Time
                    </label>
                    <label class="collapse" id="uninterrupted">
                      <label>
                        <input id="no-later-than" type="date" name="no-later-than" value="no-later-than"/>
                        Exchange date
                      </label>
                      <label>
                        <label hide="true" data-dm->Number of days
                          <input type="number" class="form-control" name="summerDaysUninterrupted" value="numDaysUninterrupted" required>
                        </label>
                      </label>
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
                <td><?php echo $_SESSION['responses']['partyAFirst']?>'s Birthday (<?php echo $_SESSION['responses']['partyABirthday']?>)</td>
                <td><input class="form-control" type="radio" name="partyA" ></td>
                <td><input class="form-control" type="radio" name="partyA" ></td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['responses']['partyBFirst']?>'s Birthday (<?php echo $_SESSION['responses']['partyBBirthday']?>)</td>
                <td><input class="form-control" type="radio" name="partyB" ></td>
                <td><input class="form-control" type="radio" name="partyB" ></td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['responses']['child1Initials']?>'s Birthday(s) (<?php echo $_SESSION['responses']['child1Birthday']?>)</td>
                <td><input class="form-control" type="radio" name="child1" ></td>
                <td><input class="form-control" type="radio" name="child1" ></td>
              </tr>
              <tr id="child2" hidden>
                <td><?php echo $_SESSION['responses']['child2Initials']?>'s Birthday(s) (<?php echo $_SESSION['responses']['child2Birthday']?>)</td>
                <td><input class="form-control" type="radio" name="child2" ></td>
                <td><input class="form-control" type="radio" name="child2" ></td>
              </tr>
              <tr id="child3" hidden>
                <td><?php echo $_SESSION['responses']['child3Initials']?>'s Birthday(s) (<?php echo $_SESSION['responses']['child3Birthday']?>)</td>
                <td><input class="form-control" type="radio" name="child3" ></td>
                <td><input class="form-control" type="radio" name="child3" ></td>
              </tr>
              <tr id="child4" hidden>
                <td><?php echo $_SESSION['responses']['child4Initials']?>'s Birthday(s) (<?php echo $_SESSION['responses']['child4Birthday']?>)</td>
                <td><input class="form-control" type="radio" name="child4" ></td>
                <td><input class="form-control" type="radio" name="child4" ></td>
              </tr>
              <tr id="child5" hidden>
                <td><?php echo $_SESSION['responses']['child5Initials']?>'s Birthday(s) (<?php echo $_SESSION['responses']['child5Birthday']?>)</td>
                <td><input class="form-control" type="radio" name="child5" ></td>
                <td><input class="form-control" type="radio" name="child5" ></td>
              </tr>
              <tr id="child6" hidden>
                <td><?php echo $_SESSION['responses']['child6Initials']?>'s Birthday(s) (<?php echo $_SESSION['responses']['child6Birthday']?>)</td>
                <td><input class="form-control" type="radio" name="child6" ></td>
                <td><input class="form-control" type="radio" name="child6" ></td>
              </tr>
            </table>

            <?php
            if ($_SESSION['responses']['child2Initials'] != "") {
                $existence2 = "true";
            } else {
                $existence2 = "false";
            }?>
            <script>
              const child2Existence = <?php echo $existence2 ?>;
              if (child2Existence === true) {
                let child2 = document.getElementById("child2");
                child2.removeAttribute("hidden");
              }
            </script>

            <?php
            if ($_SESSION['responses']['child3Initials'] !== "") {
                $existence3 = "true";
            } else {
                $existence3 = "false";
            }?>
            <script>
              const child3Existence = <?php echo $existence3 ?>;
              if (child3Existence === true) {
                let child3 = document.getElementById("child3");
                child3.removeAttribute("hidden");
              }
            </script>

              <?php
              if ($_SESSION['responses']['child4Initials'] != "") {
                  $existence4 = "true";
              } else {
                  $existence4 = "false";
              }?>
            <script>
              const child4Existence = <?php echo $existence4 ?>;
              if (child4Existence === true) {
                let child4 = document.getElementById("child4");
                child4.removeAttribute("hidden");
              }
            </script>

            <?php
            if ($_SESSION['responses']['child5Initials'] !== "") {
                $existence5 = "true";
            } else {
                $existence5 = "false";
            }?>
            <script>
              const child5Existence = <?php echo $existence5 ?>;
              if (child5Existence === true) {
                let child5 = document.getElementById("child5");
                child5.removeAttribute("hidden");
              }
            </script>

            <?php
            if ($_SESSION['responses']['child6Initials'] !== "") {
                $existence6 = "true";
            } else {
                $existence6 = "false";
            }?>
            <script>
              const child6Existence = <?php echo $existence6 ?>;
              if (child6Existence === true) {
                let child6 = document.getElementById("child6");
                child6.removeAttribute("hidden");
              }
            </script>


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
                  <input id="travel-with-children" type="checkbox" name="travel-with-children" value="travel-with-children" data-toggle="collapse" data-target="#travelChildren"/>
                  <label for="travel-with-children">Travel with the Children</label>
                  <label class="collapse" id="travelChildren">
                    <label>
                      <label hide="true" data-dm->Number of days
                        <input type="number" class="form-control" name="daysOff" value="daysOff">
                      </label>
                    </label>
                    <label>
                      <label hide="true" data-dm->Days to notify
                        <input type="number" class="form-control" name="daysNotify" value="daysNotify">
                      </label>
                    </label>
                    <label>
                      <label hide="true" data-dm->Days to notify (if traveling in Hawaii)
                        <input type="number" class="form-control" name="daysNotifyHawaii" value="daysNotifyHawaii">
                      </label>
                    </label>
                    <label>
                      <label hide="true" data-dm->Days to notify (out-of-state)
                        <input type="number" class="form-control" name="daysNotifyOutside" value="daysNotifyOutside">
                      </label>
                    </label>
                    <label>
                      <input id="dateANotify" type="date" name="dateANotify" value="dateANotify" /> Date to notify for dates of travel (Parent A)
                    </label>
                    <label>
                      <input id="dateBNotify" type="date" name="dateBNotify" value="dateBNotify" /> Date to notify for dates of travel (Parent B)
                    </label>
                  </label>
                </div>
                <div>
                  <input id="reschedule-make-up-time" type="checkbox" name="reschedule-make-up-time" value="reschedule-make-up-time"/>
                  <label for="reschedule-make-up-time">Reschedule and Make-Up Time</label>
                </div>
                <div>
                  <input id="first-refusal" type="checkbox" name="first-refusal" value="first-refusal" data-toggle="collapse" data-target="#firstRefusal"/>
                  <label for="first-refusal">Right of First Refusal</label>
                  <label class="collapse" id="firstRefusal">
                    <label>
                      <label hide="true" data-dm->Number of hours before able to execute right
                        <input type="number" class="form-control" name="refusalHours" value="refusalHours">
                      </label>
                    </label>
                  </label>
                </div>
                <div>
                  <input id="pick-up" type="checkbox" name="pick-up" value="pick-up"/>
                  <label for="pick-up">Pick Up for Non-School Exchange</label>
                </div>
                <div>
                  <input id="drop-off" type="checkbox" name="drop-off" value="drop-off"/>
                  <label for="drop-off">Drop Off for Non-School Exchange</label>
                </div>
                <div>
                  <input id="exchanges-neutral-location" type="checkbox" name="exchanges-neutral-location" value="exchanges-neutral-location" data-toggle="collapse" data-target="#exchangesNeutral"/>
                  <label for="exchanges-neutral-location">Exchanges at a Neutral Location</label>
                  <label class="collapse" id="exchangesNeutral">
                    <label hide="true" data-dm->Address
                      <input type="text" class="form-control" name="exchangeAddress">
                    </label>
                  </label>
                </div>
                <div>
                  <input id="relocation" type="checkbox" name="relocation" value="relocation" data-toggle="collapse" data-target="#relocationDays"/>
                  <label for="relocation">Relocation</label>
                  <label class="collapse" id="relocationDays">
                    <label hide="true" data-dm->Days of notice
                      <input type="number" class="form-control" name="relocationDays">
                    </label>
                  </label>
                </div>
              </div>
              <div class="column p-3" style="border-style: double; width: 350px">
                <div>
                  <label for="delegate-pick-up">
                    <input id="delegate-pick-up" type="checkbox" name="delegate-pick-up" value="delegate-pick-up"/>
                    Parental Authority to Delegate Pick-Up and Drop Off
                  </label>
                </div>
                <div>
                  <label for="persons-authorized">
                    <input id="persons-authorized" type="checkbox" name="persons-authorized" value="persons-authorized" data-toggle="collapse" data-target="#persons" />
                    Persons Authorized to Pick Up and Drop Off
                    <label class="collapse" id="persons">
                      <label hide="true" data-dm->Person Authorized
                        <input type="text" class="form-control" name="personsAuthorized">
                      </label>
                    </label>
                  </label>
                </div>
                <div>
                  <input id="children-belongings" type="checkbox" name="children-belongings" value="children-belongings"/>
                  <label for="children-belongings">Children's Personal Belongings</label>
                </div>
                <div>
                  <label for="modify-schedule">
                    <input id="modify-schedule" type="checkbox" name="modify-schedule" value="modify-schedule"/>
                    Modification of Schedule by Agreement of Both Parties
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center pt-4 pb-4">
            <button id="toCommunication" onclick="submit()">Next Section</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>