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
                <td>
                  <label for="newYearsA">
                    <select id="newYearsA" name="newYearsA" required>
                      <option value="newYearsBlankA"></option>
                      <option value="newYearsEveryA">Every Year</option>
                      <option value="newYearsEvenA">Even Years</option>
                      <option value="newYearsOddA">Odd Years</option>
                      <option value="newYearsAttachA">Attach to Weekend</option>
                      <option value="newYearsSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="newYearsB">
                    <select id="newYearsB" name="newYearsB" required>
                      <option value="newYearsBlankB"></option>
                      <option value="newYearsEveryB">Every Year</option>
                      <option value="newYearsEvenB">Even Years</option>
                      <option value="newYearsOddB">Odd Years</option>
                      <option value="newYearsAttachB">Attach to Weekend</option>
                      <option value="newYearsSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Martin Luther King Day (Monday)</td>
                <td>
                  <label for="mlkA">
                    <select id="mlkA" name="mlkA" required>
                      <option value="mlkBlankA"></option>
                      <option value="mlkEveryA">Every Year</option>
                      <option value="mlkEvenA">Even Years</option>
                      <option value="mlkOddA">Odd Years</option>
                      <option value="mlkAttachA">Attach to Weekend</option>
                      <option value="mlkSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="mlkB">
                    <select id="mlkB" name="mlkB" required>
                      <option value="mlkBlankB"></option>
                      <option value="mlkEveryB">Every Year</option>
                      <option value="mlkEvenB">Even Years</option>
                      <option value="mlkOddB">Odd Years</option>
                      <option value="mlkAttachB">Attach to Weekend</option>
                      <option value="mlkSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>President's Day (Monday)</td>
                <td>
                  <label for="presidentsA">
                    <select id="presidentsA" name="presidentsA" required>
                      <option value="presidentsBlankA"></option>
                      <option value="presidentsEveryA">Every Year</option>
                      <option value="presidentsEvenA">Even Years</option>
                      <option value="presidentsOddA">Odd Years</option>
                      <option value="presidentsAttachA">Attach to Weekend</option>
                      <option value="presidentsSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="presidentsB">
                    <select id="presidentsB" name="presidentsB" required>
                      <option value="presidentsBlankB"></option>
                      <option value="presidentsEveryB">Every Year</option>
                      <option value="presidentsEvenB">Even Years</option>
                      <option value="presidentsOddB">Odd Years</option>
                      <option value="presidentsAttachB">Attach to Weekend</option>
                      <option value="presidentsSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Kuhio Day (Friday)</td>
                <td>
                  <label for="kuhioA">
                    <select id="kuhioA" name="kuhioA" required>
                      <option value="kuhioBlankA"></option>
                      <option value="kuhioEveryA">Every Year</option>
                      <option value="kuhioEvenA">Even Years</option>
                      <option value="kuhioOddA">Odd Years</option>
                      <option value="kuhioAttachA">Attach to Weekend</option>
                      <option value="kuhioSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="kuhioB">
                    <select id="kuhioB" name="kuhioB" required>
                      <option value="kuhioBlankB"></option>
                      <option value="kuhioEveryB">Every Year</option>
                      <option value="kuhioEvenB">Even Years</option>
                      <option value="kuhioOddB">Odd Years</option>
                      <option value="kuhioAttachB">Attach to Weekend</option>
                      <option value="kuhioSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Good Friday (Friday)</td>
                <td>
                  <label for="goodFridayA">
                    <select id="goodFridayA" name="goodFridayA" required>
                      <option value="goodFridayBlankA"></option>
                      <option value="goodFridayEveryA">Every Year</option>
                      <option value="goodFridayEvenA">Even Years</option>
                      <option value="goodFridayOddA">Odd Years</option>
                      <option value="goodFridayAttachA">Attach to Weekend</option>
                      <option value="goodFridaySplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="goodFridayB">
                    <select id="goodFridayB" name="goodFridayB" required>
                      <option value="goodFridayBlankB"></option>
                      <option value="goodFridayEveryB">Every Year</option>
                      <option value="goodFridayEvenB">Even Years</option>
                      <option value="goodFridayOddB">Odd Years</option>
                      <option value="goodFridayAttachB">Attach to Weekend</option>
                      <option value="goodFridaySplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Easter (Sunday)</td>
                <td>
                  <label for="easterA">
                    <select id="easterA" name="easterA" required>
                      <option value="easterBlankA"></option>
                      <option value="easterEveryA">Every Year</option>
                      <option value="easterEvenA">Even Years</option>
                      <option value="easterOddA">Odd Years</option>
                      <option value="easterAttachA">Attach to Weekend</option>
                      <option value="easterSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="easterB">
                    <select id="easterB" name="easterB" required>
                      <option value="easterBlankB"></option>
                      <option value="easterEveryB">Every Year</option>
                      <option value="easterEvenB">Even Years</option>
                      <option value="easterOddB">Odd Years</option>
                      <option value="easterAttachB">Attach to Weekend</option>
                      <option value="easterSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Mother's Day (Sunday)</td>
                <td>
                  <label for="mothersA">
                    <select id="mothersA" name="mothersA" required>
                      <option value="mothersBlankA"></option>
                      <option value="mothersEveryA">Every Year</option>
                      <option value="mothersEvenA">Even Years</option>
                      <option value="mothersOddA">Odd Years</option>
                      <option value="mothersAttachA">Attach to Weekend</option>
                      <option value="mothersSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="mothersB">
                    <select id="mothersB" name="mothersB" required>
                      <option value="mothersBlankB"></option>
                      <option value="mothersEveryB">Every Year</option>
                      <option value="mothersEvenB">Even Years</option>
                      <option value="mothersOddB">Odd Years</option>
                      <option value="mothersAttachB">Attach to Weekend</option>
                      <option value="mothersSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Memorial Day (Monday)</td>
                <td>
                  <label for="memorialA">
                    <select id="memorialA" name="memorialA" required>
                      <option value="memorialBlankA"></option>
                      <option value="memorialEveryA">Every Year</option>
                      <option value="memorialEvenA">Even Years</option>
                      <option value="memorialOddA">Odd Years</option>
                      <option value="memorialAttachA">Attach to Weekend</option>
                      <option value="memorialSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="memorialB">
                    <select id="memorialB" name="memorialB" required>
                      <option value="memorialBlankB"></option>
                      <option value="memorialEveryB">Every Year</option>
                      <option value="memorialEvenB">Even Years</option>
                      <option value="memorialOddB">Odd Years</option>
                      <option value="memorialAttachB">Attach to Weekend</option>
                      <option value="memorialSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Father's Day (Sunday)</td>
                <td>
                  <label for="fathersA">
                    <select id="fathersA" name="fathersA" required>
                      <option value="fathersBlankA"></option>
                      <option value="fathersEveryA">Every Year</option>
                      <option value="fathersEvenA">Even Years</option>
                      <option value="fathersOddA">Odd Years</option>
                      <option value="fathersAttachA">Attach to Weekend</option>
                      <option value="fathersSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="fathersB">
                    <select id="fathersB" name="fathersB" required>
                      <option value="fathersBlankB"></option>
                      <option value="fathersEveryB">Every Year</option>
                      <option value="fathersEvenB">Even Years</option>
                      <option value="fathersOddB">Odd Years</option>
                      <option value="fathersAttachB">Attach to Weekend</option>
                      <option value="fathersSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Fourth of July (July 4)</td>
                <td>
                  <label for="julyFourthA">
                    <select id="julyFourthA" name="julyFourthA" required>
                      <option value="julyFourthA"></option>
                      <option value="julyFourthA">Every Year</option>
                      <option value="julyFourthEvenA">Even Years</option>
                      <option value="julyFourthOddA">Odd Years</option>
                      <option value="julyFourthAttachA">Attach to Weekend</option>
                      <option value="julyFourthSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="julyFourthB">
                    <select id="julyFourthB" name="julyFourthB" required>
                      <option value="julyFourthBlankB"></option>
                      <option value="julyFourthEveryB">Every Year</option>
                      <option value="julyFourthEvenB">Even Years</option>
                      <option value="julyFourthOddB">Odd Years</option>
                      <option value="julyFourthAttachB">Attach to Weekend</option>
                      <option value="julyFourthSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Statehood Day (Friday)</td>
                <td>
                  <label for="statehoodA">
                    <select id="statehoodA" name="statehoodA" required>
                      <option value="statehoodA"></option>
                      <option value="statehoodA">Every Year</option>
                      <option value="statehoodEvenA">Even Years</option>
                      <option value="statehoodOddA">Odd Years</option>
                      <option value="statehoodAttachA">Attach to Weekend</option>
                      <option value="statehoodSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="statehoodB">
                    <select id="statehoodB" name="statehoodB" required>
                      <option value="statehoodBlankB"></option>
                      <option value="statehoodEveryB">Every Year</option>
                      <option value="statehoodEvenB">Even Years</option>
                      <option value="statehoodOddB">Odd Years</option>
                      <option value="statehoodAttachB">Attach to Weekend</option>
                      <option value="statehoodSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Labor Day (Monday)</td>
                <td>
                  <label for="laborA">
                    <select id="laborA" name="laborA" required>
                      <option value="laborA"></option>
                      <option value="laborA">Every Year</option>
                      <option value="laborEvenA">Even Years</option>
                      <option value="laborOddA">Odd Years</option>
                      <option value="laborAttachA">Attach to Weekend</option>
                      <option value="laborSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="laborB">
                    <select id="laborB" name="laborB" required>
                      <option value="laborBlankB"></option>
                      <option value="laborEveryB">Every Year</option>
                      <option value="laborEvenB">Even Years</option>
                      <option value="laborOddB">Odd Years</option>
                      <option value="laborAttachB">Attach to Weekend</option>
                      <option value="laborSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Election Day (Tuesday)</td>
                <td>
                  <label for="electionA">
                    <select id="electionA" name="electionA" required>
                      <option value="electionA"></option>
                      <option value="electionA">Every Year</option>
                      <option value="electionEvenA">Even Years</option>
                      <option value="electionOddA">Odd Years</option>
                      <option value="electionAttachA">Attach to Weekend</option>
                      <option value="electionSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="electionB">
                    <select id="electionB" name="electionB" required>
                      <option value="electionBlankB"></option>
                      <option value="electionEveryB">Every Year</option>
                      <option value="electionEvenB">Even Years</option>
                      <option value="electionOddB">Odd Years</option>
                      <option value="electionAttachB">Attach to Weekend</option>
                      <option value="electionSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Veteran's Day (November 11)</td>
                <td>
                  <label for="veteransA">
                    <select id="veteransA" name="veteransA" required>
                      <option value="veteransA"></option>
                      <option value="veteransA">Every Year</option>
                      <option value="veteransEvenA">Even Years</option>
                      <option value="veteransOddA">Odd Years</option>
                      <option value="veteransAttachA">Attach to Weekend</option>
                      <option value="veteransSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="veteransB">
                    <select id="veteransB" name="veteransB" required>
                      <option value="veteransBlankB"></option>
                      <option value="veteransEveryB">Every Year</option>
                      <option value="veteransEvenB">Even Years</option>
                      <option value="veteransOddB">Odd Years</option>
                      <option value="veteransAttachB">Attach to Weekend</option>
                      <option value="veteransSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Thanksgiving (Thursday)</td>
                <td>
                  <label for="thanksgivingA">
                    <select id="thanksgivingA" name="thanksgivingA" required>
                      <option value="thanksgivingA"></option>
                      <option value="thanksgivingA">Every Year</option>
                      <option value="thanksgivingEvenA">Even Years</option>
                      <option value="thanksgivingOddA">Odd Years</option>
                      <option value="thanksgivingAttachA">Attach to Weekend</option>
                      <option value="thanksgivingSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="thanksgivingB">
                    <select id="thanksgivingB" name="thanksgivingB" required>
                      <option value="thanksgivingBlankB"></option>
                      <option value="thanksgivingEveryB">Every Year</option>
                      <option value="thanksgivingEvenB">Even Years</option>
                      <option value="thanksgivingOddB">Odd Years</option>
                      <option value="thanksgivingAttachB">Attach to Weekend</option>
                      <option value="thanksgivingSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Christmas Eve (December 24)</td>
                <td>
                  <label for="christmasEveA">
                    <select id="christmasEveA" name="christmasEveA" required>
                      <option value="christmasEveA"></option>
                      <option value="christmasEveA">Every Year</option>
                      <option value="christmasEveEvenA">Even Years</option>
                      <option value="christmasEveOddA">Odd Years</option>
                      <option value="christmasEveAttachA">Attach to Weekend</option>
                      <option value="christmasEveSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="christmasEveB">
                    <select id="christmasEveB" name="christmasEveB" required>
                      <option value="christmasEveBlankB"></option>
                      <option value="christmasEveEveryB">Every Year</option>
                      <option value="christmasEveEvenB">Even Years</option>
                      <option value="christmasEveOddB">Odd Years</option>
                      <option value="christmasEveAttachB">Attach to Weekend</option>
                      <option value="christmasEveSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Christmas Day (December 25)</td>
                <td>
                  <label for="christmasA">
                    <select id="christmasA" name="christmasA" required>
                      <option value="christmasA"></option>
                      <option value="christmasA">Every Year</option>
                      <option value="christmasEvenA">Even Years</option>
                      <option value="christmasOddA">Odd Years</option>
                      <option value="christmasAttachA">Attach to Weekend</option>
                      <option value="christmasSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="christmasB">
                    <select id="christmasB" name="christmasB" required>
                      <option value="christmasBlankB"></option>
                      <option value="christmasEveryB">Every Year</option>
                      <option value="christmasEvenB">Even Years</option>
                      <option value="christmasOddB">Odd Years</option>
                      <option value="christmasAttachB">Attach to Weekend</option>
                      <option value="christmasSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td>New Year's Eve (December 31)</td>
                <td>
                  <label for="nyeA">
                    <select id="nyeA" name="nyeA" required>
                      <option value="nyeA"></option>
                      <option value="nyeA">Every Year</option>
                      <option value="nyeEvenA">Even Years</option>
                      <option value="nyeOddA">Odd Years</option>
                      <option value="nyeAttachA">Attach to Weekend</option>
                      <option value="nyeSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="nyeB">
                    <select id="nyeB" name="nyeB" required>
                      <option value="nyeBlankB"></option>
                      <option value="nyeEveryB">Every Year</option>
                      <option value="nyeEvenB">Even Years</option>
                      <option value="nyeOddB">Odd Years</option>
                      <option value="nyeAttachB">Attach to Weekend</option>
                      <option value="nyeSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['responses']['partyAFirst']?>'s Birthday (<?php echo $_SESSION['responses']['partyABirthday']?>)</td>
                <td>
                  <label for="partyAA">
                    <select id="partyAA" name="partyAA" required>
                      <option value="partyAA"></option>
                      <option value="partyAA">Every Year</option>
                      <option value="partyAEvenA">Even Years</option>
                      <option value="partyAOddA">Odd Years</option>
                      <option value="partyAAttachA">Attach to Weekend</option>
                      <option value="partyASplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="partyAB">
                    <select id="partyAB" name="partyAB" required>
                      <option value="partyABlankB"></option>
                      <option value="partyAEveryB">Every Year</option>
                      <option value="partyAEvenB">Even Years</option>
                      <option value="partyAOddB">Odd Years</option>
                      <option value="partyAAttachB">Attach to Weekend</option>
                      <option value="partyASplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['responses']['partyBFirst']?>'s Birthday (<?php echo $_SESSION['responses']['partyBBirthday']?>)</td>
                <td>
                  <label for="partyBA">
                    <select id="partyBA" name="partyBA" required>
                      <option value="partyBA"></option>
                      <option value="partyBA">Every Year</option>
                      <option value="partyBEvenA">Even Years</option>
                      <option value="partyBOddA">Odd Years</option>
                      <option value="partyBAttachA">Attach to Weekend</option>
                      <option value="partyBSplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="partyBB">
                    <select id="partyBB" name="partyBB" required>
                      <option value="partyBBlankB"></option>
                      <option value="partyBEveryB">Every Year</option>
                      <option value="partyBEvenB">Even Years</option>
                      <option value="partyBOddB">Odd Years</option>
                      <option value="partyBAttachB">Attach to Weekend</option>
                      <option value="partyBSplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['responses']['child1Initials']?>'s Birthday(s) (<?php echo $_SESSION['responses']['child1Birthday']?>)</td>
                <td>
                  <label for="child1A">
                    <select id="child1A" name="child1A" required>
                      <option value="child1BlankA"></option>
                      <option value="child1EveryA">Every Year</option>
                      <option value="child1EvenA">Even Years</option>
                      <option value="child1OddA">Odd Years</option>
                      <option value="child1AttachA">Attach to Weekend</option>
                      <option value="child1SplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="child1B">
                    <select id="child1B" name="child1B" required>
                      <option value="child1BlankB"></option>
                      <option value="child1EveryB">Every Year</option>
                      <option value="child1EvenB">Even Years</option>
                      <option value="child1OddB">Odd Years</option>
                      <option value="child1AttachB">Attach to Weekend</option>
                      <option value="child1SplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr id="child2" hidden>
                <td><?php echo $_SESSION['responses']['child2Initials']?>'s Birthday(s) (<?php echo $_SESSION['responses']['child2Birthday']?>)</td>
                <td>
                  <label for="child2A">
                    <select id="child2A" name="child2A" required>
                      <option value="child2BlankA"></option>
                      <option value="child2EveryA">Every Year</option>
                      <option value="child2EvenA">Even Years</option>
                      <option value="child2OddA">Odd Years</option>
                      <option value="child2AttachA">Attach to Weekend</option>
                      <option value="child2SplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="child2B">
                    <select id="child2B" name="child2B" required>
                      <option value="child2BlankB"></option>
                      <option value="child2EveryB">Every Year</option>
                      <option value="child2EvenB">Even Years</option>
                      <option value="child2OddB">Odd Years</option>
                      <option value="child2AttachB">Attach to Weekend</option>
                      <option value="child2SplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr id="child3" hidden>
                <td><?php echo $_SESSION['responses']['child3Initials']?>'s Birthday(s) (<?php echo $_SESSION['responses']['child3Birthday']?>)</td>
                <td>
                  <label for="child3A">
                    <select id="child3A" name="child3A" required>
                      <option value="child3BlankA"></option>
                      <option value="child3EveryA">Every Year</option>
                      <option value="child3EvenA">Even Years</option>
                      <option value="child3OddA">Odd Years</option>
                      <option value="child3AttachA">Attach to Weekend</option>
                      <option value="child3SplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="child3B">
                    <select id="child3B" name="child3B" required>
                      <option value="child3BlankB"></option>
                      <option value="child3EveryB">Every Year</option>
                      <option value="child3EvenB">Even Years</option>
                      <option value="child3OddB">Odd Years</option>
                      <option value="child3AttachB">Attach to Weekend</option>
                      <option value="child3SplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr id="child4" hidden>
                <td><?php echo $_SESSION['responses']['child4Initials']?>'s Birthday(s) (<?php echo $_SESSION['responses']['child4Birthday']?>)</td>
                <td>
                  <label for="child4A">
                    <select id="child4A" name="child4A" required>
                      <option value="child4BlankA"></option>
                      <option value="child4EveryA">Every Year</option>
                      <option value="child4EvenA">Even Years</option>
                      <option value="child4OddA">Odd Years</option>
                      <option value="child4AttachA">Attach to Weekend</option>
                      <option value="child4SplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="child4B">
                    <select id="child4B" name="child4B" required>
                      <option value="child4BlankB"></option>
                      <option value="child4EveryB">Every Year</option>
                      <option value="child4EvenB">Even Years</option>
                      <option value="child4OddB">Odd Years</option>
                      <option value="child4AttachB">Attach to Weekend</option>
                      <option value="child4SplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr id="child5" hidden>
                <td><?php echo $_SESSION['responses']['child5Initials']?>'s Birthday(s) (<?php echo $_SESSION['responses']['child5Birthday']?>)</td>
                <td>
                  <label for="child5A">
                    <select id="child5A" name="child5A" required>
                      <option value="child5BlankA"></option>
                      <option value="child5EveryA">Every Year</option>
                      <option value="child5EvenA">Even Years</option>
                      <option value="child5OddA">Odd Years</option>
                      <option value="child5AttachA">Attach to Weekend</option>
                      <option value="child5SplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="child5B">
                    <select id="child5B" name="child5B" required>
                      <option value="child5BlankB"></option>
                      <option value="child5EveryB">Every Year</option>
                      <option value="child5EvenB">Even Years</option>
                      <option value="child5OddB">Odd Years</option>
                      <option value="child5AttachB">Attach to Weekend</option>
                      <option value="child5SplitB">Split</option>
                    </select>
                  </label>
                </td>
              </tr>
              <tr id="child6" hidden>
                <td><?php echo $_SESSION['responses']['child6Initials']?>'s Birthday(s) (<?php echo $_SESSION['responses']['child6Birthday']?>)</td>
                <td>
                  <label for="child6A">
                    <select id="child6A" name="child6A" required>
                      <option value="child6BlankA"></option>
                      <option value="child6EveryA">Every Year</option>
                      <option value="child6EvenA">Even Years</option>
                      <option value="child6OddA">Odd Years</option>
                      <option value="child6AttachA">Attach to Weekend</option>
                      <option value="child6SplitA">Split</option>
                    </select>
                  </label>
                </td>
                <td>
                  <label for="child6B">
                    <select id="child6B" name="child6B" required>
                      <option value="child6BlankB"></option>
                      <option value="child6EveryB">Every Year</option>
                      <option value="child6EvenB">Even Years</option>
                      <option value="child6OddB">Odd Years</option>
                      <option value="child6AttachB">Attach to Weekend</option>
                      <option value="child6SplitB">Split</option>
                    </select>
                  </label>
                </td>
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