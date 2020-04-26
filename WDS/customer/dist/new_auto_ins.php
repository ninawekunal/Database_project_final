<!-- This page is used to add new auto insurances -->
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
                	require_once 'auto_ins_header.php';
                 ?>

                 <div class="home_ins_content">
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i> New Auto Insurance</div>
                            <div class="card-body">
                                <center>Select a package to proceed.</center>
                                <br>
                                <div class="row">
                                    <div class="card mb-4 col-md-3">
                                        <div class="card-header"><i class="fas fa-archive mr-1"></i> Bronze package</div>
                                        <div class="card-body">
                                            Our bronze package is a affordable auto insurance covering liabilities to other people arrising due to an accident
                                        </div>
                                        <div class="card-footer">
                                            <center><input type="radio" name="aPackage" id="aBronze"></center>
                                        </div>
                                    </div>  
                                    <div class="card mb-4 col-md-3">
                                        <div class="card-header"><i class="fas fa-archive mr-1"></i> Silver package</div>
                                        <div class="card-body">
                                            Our silver package is an insurance solution covering accident liabilities of the driver, co-passenger and other drivers/vehicles that may be involved in the accident. 
                                        </div>
                                  <div class="card-footer">
                                    <center><input type="radio" name="aPackage" id="aSilver"></center>
                                  </div>
                                    </div>  
                                    <div class="card mb-4 col-md-3">
                                        <div class="card-header"><i class="fas fa-archive mr-1"></i> Gold package</div>
                                        <div class="card-body">
                                            Our gold package is a progressive insurnace which covers any issue in the car due to man-made or natural reasons. However, it doesn't cover medical cost in case of accidents. 
                                        </div>
                                  <div class="card-footer">
                                    <center><input type="radio" name="aPackage" id="aGold"></center>
                                  </div>
                                    </div>  
                                    <div class="card mb-4 col-md-3">
                                        <div class="card-header"><i class="fas fa-archive mr-1"></i> Platinum package</div>
                                        <div class="card-body">
                                            Our platinum package is a comprehensive safeguard against any issue in the car due to man-made or natural reasons along with medical cost in case of accidents.
                                        </div>
                                  <div class="card-footer">
                                    <center><input type="radio" name="aPackage" id="aPlatinum"></center>
                                  </div>
                                    </div>
                                    <div class="col-md-5"></div><button type="button" class="btn btn-primary col-md-2">NEXT (Do we really need this?) </button></center><div class="col-md-5"></div>
                              </div>  

                                <br><br>
                                 <!-- NEXT SECTION HERE -->
                                 <div class="col-xl-12">
                                    <div class="card mb-12">
                                        <div class="card-header"><i class="fas fa-plus mr-1"></i>Select Auto Details</div>
                                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas>
                                          <form method="POST" action="" accept-charset="UTF-8" style="color:black;margin-top: -50px;">
                                                <div class="row">
                                                  <div class="btn-group">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="start_auto">
                                                    Select car the you would like to purchase insurance for
                                                    </button>
                                                    <div class="dropdown-menu">
                                                      <a class="dropdown-item">1. Maruti 800</a>
                                                      <a class="dropdown-item">2. Toyota</a>
                                                    </div>
                                                  </div>
                                                </div> 
                                                <br>
                                                <div class="row">
                                                    <div>
                                                      <label for="pdate">
                                                         Start Date:
                                                      </label>
                                                      <br>
                                                    </div>
                                                    <input id="sdateauto" class="form-control" type="date" placeholder="Start Date:" name="sdateauto">
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div>
                                                      <label for="edateauto">
                                                         End Date:
                                                      </label>
                                                      <br>
                                                    </div>
                                                      <input id="edateauto" class="form-control" type="date" placeholder="End Date:" name="edateauto">
                                                    </div>
                                                </br>
                                                <!--Calculate the amount-->
                                                <div class="row">
                                                    <div>
                                                      <label for="amount">
                                                         Amount Payable:
                                                      </label>
                                                      <br>
                                                    </div>
                                                      <input id="amountauto" class="form-control" type="text" placeholder="Calculate the amount from the above inputs" name="amountauto" disabled="">
                                                    </div>
                                                </br>
                                                <!-- Submit button -->
                                                <br>
                                                <div class="row text-center">
                                                          <input class="btn btn-primary col-md-12" id="newAuto" class="form-control" type="submit" name="newAuto">
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