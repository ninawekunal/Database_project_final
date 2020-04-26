<!DOCTYPE html>
 <html>
 <head>
  <title>Home Insurance</title>
  <style type="text/css">
    #tableHouse tr td,th{
      text-align: center;
      padding:10px;
    }
  </style>

 </head>
 <body class="sb-nav-fixed">
  <?php 
    require_once 'header.php';
   ?>
  <div id="layoutSidenav_content">
                <?php 
                  require_once 'home_ins_header.php';
                 ?>

                 
                <div class="home_ins_content">
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i> MY HOUSES</div>
                            <div class="card-body">
                                <div class="row">
                                <div class="col-xl-12">
                                    <div class="card mb-4">
                                        <div class="card-header"><i class="fas fa-home mr-1"></i>Current Houses</div>
                                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
                                          <table border="1" id="tableHouse">
                                            <thead>
                                              <tr>
                                                <th>H. No</th>
                                                <th>Location</th>
                                                <th>Purchase Date</th>
                                                <th>Purchase Value($)</th>
                                                <th>Area(sqFt)</th>
                                                <th>Home Type</th>
                                                <th>Auto Fire Notification</th>
                                                <th>Home Security System</th>
                                                <th>Swimming Pool</th>
                                                <th>Basement</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>1</td>
                                                <td>New York</td>
                                                <td>24th Apr 2020</td>
                                                <td>100000</td>
                                                <td>1000</td>
                                                <td>Single Family</td>
                                                <td>Yes</td>
                                                <td>No</td>
                                                <td>Underground</td>
                                                <td>Yes</td>
                                              </tr>
                                              <tr>
                                                <td>2</td>
                                                <td>New J</td>
                                                <td>22th Apr 2020</td>
                                                <td>145000</td>
                                                <td>24000</td>
                                                <td>Multi Family</td>
                                                <td>No</td>
                                                <td>Yes</td>
                                                <td>Multiple</td>
                                                <td>Yes</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                    </div>
                                </div>

                                <!--Add new houses-->
                                <div class="col-xl-8">
                                    <div class="card mb-4">
                                        <div class="card-header"><i class="fas fa-plus mr-1"></i>Add a new house</div>
                                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas>
                                          <form method="POST" action="" accept-charset="UTF-8" style="color:black;margin-top: -50px;">
                                              <div class="row">
                                                  <div>
                                                      <label for="email">
                                                         Location:
                                                      </label>
                                                      <br>
                                                  </div>
                                                  <input id="Location" class="form-control" type="text" placeholder="Location" name="Location">
                                              </div>
                                              <br>
                                                <div class="row">
                                                    <div>
                                                      <label for="pdate">
                                                         Purchase Date:
                                                      </label>
                                                      <br>
                                                    </div>
                                                    <input id="pdate" class="form-control" type="date" placeholder="Purchase Date:" name="pdate">
                                                </div>
                                              <br>
                                                <div class="row">
                                                    <div>
                                                        <label for="pvalue">
                                                           Purchase Value:
                                                        </label>
                                                        <br>
                                                    </div>
                                                    <input id="pvalue" class="form-control" type="number" placeholder="Purchase Value: (in $)" name="pvalue">
                                                </div>
                                                <br>
                                                <div class="row text-center">
                                                    <div>
                                                        <label for="Area">
                                                           Area:
                                                        </label>
                                                        <br>
                                                    </div>
                                                    <input id="Area" class="form-control" type="number" placeholder="Area in square feet" name="Area">
                                                </div>
                                                <br>
                                                
                                                <div class="row">
                                                <legend class="col-form-label">Home Type:</legend>
                                                <div class="col-sm-10">
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="hometype" id="single_family" value="S" checked>
                                                    <label class="form-check-label" for="single_family">
                                                      Single Family
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="hometype" id="multi_family" value="M">
                                                    <label class="form-check-label" for="multi_family">
                                                      Multi Family
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="hometype" id="condo" value="C">
                                                    <label class="form-check-label" for="condo">
                                                      Condominium
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="hometype" id="town_house" value="T">
                                                    <label class="form-check-label" for="town_house">
                                                      Town House
                                                    </label>
                                                  </div>
                                                </div>
                                                </div>
                                                <!-- Auto Fire Notification -->
                                                <div class="row">
                                                  <legend class="col-form-label">Auto Fire Notification:</legend>
                                                  <div class="col-sm-10">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="fire_noti" id="fire_noti_yes" value="1" checked>
                                                      <label class="form-check-label" for="fire_noti_yes">
                                                        Yes
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="fire_noti" id="fire_noti_no" value="0">
                                                      <label class="form-check-label" for="fire_noti_no">
                                                        No
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <!-- Home Security System -->
                                                <div class="row">
                                                  <legend class="col-form-label">Home Security System:</legend>
                                                  <div class="col-sm-10">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="home_sec" id="home_sec_yes" value=1 checked>
                                                      <label class="form-check-label" for="home_sec_yes">
                                                        Yes
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="home_sec" id="home_sec_no" value=0>
                                                      <label class="form-check-label" for="home_sec_no">
                                                        No
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <!-- Swimming -->
                                                <div class="row">
                                                  <legend class="col-form-label">Swimming Pool:</legend>
                                                  <div class="col-sm-10">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="swim" id="swim_under" value="U" checked>
                                                      <label class="form-check-label" for="swim_under">
                                                        Underground
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="swim" id="swim_over" value="O">
                                                      <label class="form-check-label" for="swim_over">
                                                        Overground
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="swim" id="swim_indoor" value="I">
                                                      <label class="form-check-label" for="swim_indoor">
                                                        Indoor
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="swim" id="swim_multi" value="M">
                                                      <label class="form-check-label" for="swim_multi">
                                                        Multiple
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="swim" id="swim_none" value=null>
                                                      <label class="form-check-label" for="swim_none">
                                                        Null
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <!-- Basement -->
                                                <div class="row">
                                                  <legend class="col-form-label">Basement:</legend>
                                                  <div class="col-sm-10">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="basement" id="basement_yes" value=1 checked>
                                                      <label class="form-check-label" for="basement_yes">
                                                        Yes
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="basement" id="basement_no" value=0>
                                                      <label class="form-check-label" for="basement_no">
                                                        No
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <!-- Submit button -->
                                                <br>
                                                <div class="row text-center">
                                                          <input class="btn btn-primary col-md-12" id="newHouse" class="form-control" type="submit" name="newHouse">
                                                </div>
                                          </form>
                                        </div>
                                    </div>
                                </div>

                                <!--Delete houses-->
                                <div class="col-xl-4">
                                    <div class="card mb-4">
                                        <div class="card-header"><i class="fas fa-minus mr-1"></i>Remove a house</div>
                                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas>
                                          <form method="POST" id="removeHouse" name="removeHouse" action="" accept-charset="UTF-8" style="color:black;margin-top: -50px;">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Remove house
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item">1. New York</a>
                                                <a class="dropdown-item">2. New J</a>
                                              </div>
                                              &nbsp
                                              <div>
                                                          <input class="btn btn-primary col-md-12" id="removeHouse" class="form-control" type="submit" name="removeHouse">
                                              </div> 
                                            </div>                                               
                                          </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </div>
                        </div>
                </div>
                </div>
                </main>

                <!-- After main footer should come. -->
                <?php 
                  require_once 'footer.php';
                 ?>
            </div>
         </div>      <!-- This is the ending of the header -->
 </body>
 </html>