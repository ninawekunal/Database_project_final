<!DOCTYPE html>
 <html>
 <head>
  <title>Update Details</title>
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
                  require_once 'update_my_details.php';
                 ?>
                 <div class="home_ins_content">
                        <div class="container-fluid  col-xl-12">
                        <h1 class="mt-12">Update Personal details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Details provided by user</li>
                        </ol>
                    
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>UPDATE MY DETAILS</div>
                            <div class="card-body">
                                <div class="row">
                                <div class="col-xl-12">
                                    <form method="POST" action="" accept-charset="UTF-8" style="color:black;margin-top: -50px;">
                                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
                                          <!--Customer ID-->
                                          <div class="row">
                                              <div>
                                                <label for="Customer ID">
                                                  Customer ID:
                                                </label>
                                                <br>
                                              </div>
                                            <input id="Cust_id" class="form-control" type="text" placeholder="Populate from backend. Can't be changed" name="Cust_id" disabled="">
                                          </div>

                                          <!--First Name-->
                                          <div class="row">
                                              <div>
                                                <label for="First_name">
                                                  First Name:
                                                </label>
                                                <br>
                                              </div>
                                            <input id="First_name" class="form-control" type="text" placeholder="Populate from backend" name="First_name">
                                          </div>

                                          <!--Last Name-->
                                          <div class="row">
                                              <div>
                                                <label for="Last_name">
                                                  Last Name:
                                                </label>
                                                <br>
                                              </div>
                                            <input id="Last_name" class="form-control" type="text" placeholder="Populate from backend" name="Last_name">
                                          </div>

                                          
                                          <!-- Gender -->
                                                <div class="row">
                                                  <legend class="col-form-label">Gender:</legend>
                                                  <div class="col-sm-10">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="gender" id="male" value="M">
                                                      <label class="form-check-label" for="male">
                                                        Male
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="gender" id="female" value="F">
                                                      <label class="form-check-label" for="female">
                                                        Female
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="gender" id="no_provide" value="NP">
                                                      <label class="form-check-label" for="no_provide">
                                                        Choose not to provide
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <!-- Marital Status -->
                                                <div class="row">
                                                  <legend class="col-form-label">Marital Status:</legend>
                                                  <div class="col-sm-10">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="marital_status" id="married" value="M">
                                                      <label class="form-check-label" for="married">
                                                        Married
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="marital_status" id="single" value="S">
                                                      <label class="form-check-label" for="home_sec_no">
                                                        Single
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="marital_status" id="widow" value="W">
                                                      <label class="form-check-label" for="widow">
                                                        Widow/Widower
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                          <!-- Cutomer type-->      
                                          <div class="row">
                                              <div>
                                                <label for="Customer type">
                                                  Customer type:
                                                </label>
                                                <br>
                                              </div>
                                            <input id="Cust_id" class="form-control" type="text" placeholder="Populate from backend. Can't be changed" name="cust_type" disabled="">
                                          </div>

                                        <br>
                                        <div class="row text-center">
                                                <a href="my_details.php">
                                            <button class="btn btn-primary col-xl-12" type="button" name="updateDetails">Update Details</button>
                                          </a>
                                          &nbsp
                                        </div>
                                    </form>
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