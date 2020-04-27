<!DOCTYPE html>
 <html>
 <head>
  <title>My Details</title>
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
                  require_once 'my_details.php';
                 ?>
                <div class="home_ins_content">
                        <div class="container-fluid">
                        <h1 class="mt-4">My Personal details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Details provided by user</li>
                        </ol>
                    
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i> MY DETAILS</div>
                            <div class="card-body">
                                <div class="row">
                                <div class="col-xl-12">
                                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
                                          <table border="1" id="tableHouse" name="userDetails">
                                            <thead>
                                              <tr>
                                                <th>Customer ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Gender</th>
                                                <th>Marital Status</th>
                                                <th>Primary Address</th>
                                                <th>Customer type</th>
                                              </tr>
                                            </thead>
                                           <tbody>
                                              <tr>
                                                <td>1</td>
                                                <td>Kunal</td>
                                                <td>Ninawe</td>
                                                <td>M</td>
                                                <td>S</td>
                                                <td>New York</td>
                                                <td>B</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <br>
                                          <br>
                                          Note - <br>
                                          Gender - M for Male, F for Female and NP for Choose not to provide<br>
                                          Marital Status - M for Married, S for Single and W for Widow/Widower<br>
                                          Customer type - A for Auto, H for Home, B for both
                                        </div>
                                        <br>
                                        <div class="row text-center">
                                          <a href="update_my_details.php">
                                            <button class="btn btn-primary col-xl-12" type="button" name="updateDetails">Update Details</button>
                                          </a>
                                          &nbsp
                                          <a href="index.php">
                                            <button class="btn btn-primary col-x1-12" type="button" name="Dashboard">Home</button>
                                          </a>
                                        </div>
                           
                                </div>

                                <!--Add new houses-->
                                
                                                
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