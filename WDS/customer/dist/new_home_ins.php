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
                            <div class="card-header"><i class="fas fa-table mr-1"></i> New Home Insurance</div>
                            <div class="card-body">
                            	<center>Select a package to proceed.</center>
                            	<br>
                              	<div class="row">
                              		<div class="card mb-4 col-md-3">
			                            <div class="card-header"><i class="fas fa-archive mr-1"></i> Bronze package</div>
			                            <div class="card-body">
			                                Our bronze package is a affordable financial safeguard against natural disasters like earthquake, tornado, rains, lightning, hailstorm etc. It only covers the immovable structure (like walls, roof etc.) of the house.
			                            </div>
			                            <div class="card-footer">
			                            	<center><input type="radio" name="Package" id="Bronze"></center>
			                            </div>
			                        </div>  
			                        <div class="card mb-4 col-md-3">
			                            <div class="card-header"><i class="fas fa-archive mr-1"></i> Silver package</div>
			                            <div class="card-body">
			                                Our silver package is a financial safeguard against both natural disasters and man made disasters like riots, fire, civil commotion etc. It only covers the immovable structure of the house
			                            </div>
                                  <div class="card-footer">
                                    <center><input type="radio" name="Package" id="Silver"></center>
                                  </div>
			                        </div>  
			                        <div class="card mb-4 col-md-3">
			                            <div class="card-header"><i class="fas fa-archive mr-1"></i> Gold package</div>
			                            <div class="card-body">
			                                Our gold package is a financial safeguard against both natural disasters and man made disasters. It covers both movable (like furniture, electronics etc.) and immovable structure of the house
			                            </div>
                                  <div class="card-footer">
                                    <center><input type="radio" name="Package" id="Gold"></center>
                                  </div>
			                        </div>  
			                        <div class="card mb-4 col-md-3">
			                            <div class="card-header"><i class="fas fa-archive mr-1"></i> Platinum package</div>
			                            <div class="card-body">
			                                Our platinum package is a comprehensive safeguard against any disaster along with taking care of your accomoadation when while your home is undergoing repair
			                            </div>
                                  <div class="card-footer">
                                    <center><input type="radio" name="Package" id="Platinum"></center>
                                  </div>
			                        </div>
			                        <div class="col-md-5"></div><button type="button" class="btn btn-primary col-md-2">NEXT (Do we really need this?) </button></center><div class="col-md-5"></div>
                              </div>  

                              	<br><br>
                              	 <!-- NEXT SECTION HERE -->
                              	 <div class="col-xl-12">
                                    <div class="card mb-12">
                                        <div class="card-header"><i class="fas fa-plus mr-1"></i>Select details</div>
                                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas>
                                          <form method="POST" action="" accept-charset="UTF-8" style="color:black;margin-top: -50px;">
                                                <div class="row">
                                                  <div class="btn-group">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="start_home">
                                                    Select home the you would like to purchase insurance for
                                                    </button>
                                                    <div class="dropdown-menu">
                                                      <a class="dropdown-item">1. New York</a>
                                                      <a class="dropdown-item">2. New J</a>
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
                                                    <input id="sdate" class="form-control" type="date" placeholder="Start Date:" name="sdate">
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div>
                                                      <label for="edate">
                                                         End Date:
                                                      </label>
                                                      <br>
                                                    </div>
                                                      <input id="edate" class="form-control" type="date" placeholder="End Date:" name="edate">
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
                                                      <input id="amount" class="form-control" type="text" placeholder="Calculate the amount from the above inputs" name="amount" disabled="">
                                                    </div>
                                                </br>
                                                <!-- Submit button -->
                                                <br>
                                                <div class="row text-center">
                                                          <input class="btn btn-primary col-md-12" id="newHouse" class="form-control" type="submit" name="newHouse">
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