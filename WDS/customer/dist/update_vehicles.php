<?php 
  session_start();
  require_once 'functions.php';
 ?>

<!-- This page shows current home insurances -->
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

 	<script>

 	</script>

 </head>
 <body class="sb-nav-fixed">
 	<?php 
		require_once 'header.php';
	 ?>
 	<div id="layoutSidenav_content">
                <?php 
                	require_once 'auto_ins_header.php';
                 ?>

                  <!-- Error message display -->
                    <div id="error" style="display:<?php echo isset($_SESSION['display'])?$_SESSION['display']:'none;'; unset($_SESSION['display']); ?> ">
                      <br><br>
                      <div class="<?php echo isset($_SESSION['alert_class'])?$_SESSION['alert_class']:'none;'; unset($_SESSION['alert_class']); ?>">
                        <?php echo isset($_SESSION['errorMsg'])?$_SESSION['errorMsg']:'none;'; unset($_SESSION['errorMsg']);  ?></div>
                    </div>

                 
                 <div class="home_ins_content">
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i> Vehicles and Drivers</div>
                            <div class="card-body">
                                <div class="row">
                                	

                                	<!-- Add vehicle and driver-->
                                	<div class="col-md-12 text-center row">
                                		<!-- To add the vehicle -->
                                		<div class="card mb-12 col-md-12">
				                            <div class="card-header"><i class="fas fa-table mr-1"></i>Add new Vehicle</div>
				                            <div class="card-body">
				                                <form method="POST" name="add_type" id="add_type">
				                                	<!--Enter vehicle type-->
                                              		<div class="row text-left">
		                                                <legend class="col-form-label">Vehicle Type:</legend>
		                                                <div class="col-sm-10">
		                                                  <div class="form-check">
		                                                    <input class="form-check-input" type="radio" name="vtype" id="car" value="Car" required="">
		                                                    <label class="form-check-label" for="c">
		                                                      Car
		                                                    </label>
		                                                  </div>
		                                                  <div class="form-check">
		                                                    <input class="form-check-input" type="radio" name="vtype" id="truck" value="Truck">
		                                                    <label class="form-check-label" for="t">
		                                                      Truck
		                                                    </label>
		                                                  </div>
		                                                  <div class="form-check">
		                                                    <input class="form-check-input" type="radio" name="vtype" id="bike" value="Bike">
		                                                    <label class="form-check-label" for="b">
		                                                      Bike
		                                                    </label>
		                                                  </div>
		                                                  
		                                                </div>
		                                            </div>
		                                            <br>




				                                	<!--Vehicle identification number-->
				                                	<div class="row">
                                                  	<div>
                                                      <label for="vin">
                                                         Vehicle VIN:
                                                      </label>
                                                      <br>
                                                  	</div>
                                                  	<input id="vin" class="form-control" type="number" placeholder="Enter VIN" name="vin" required=""></div>
	   	  	                                        <br>

	   	  	                                        <!--Vehicle make-->
	   	  	                                        <div class="row">
                                                  	<div>
                                                      <label for="vmake">
                                                         Vehicle make:
                                                      </label>
                                                      <br>
                                                  	</div>
                                                  	<input id="vdetails" class="form-control" type="text" placeholder="Enter vehicle make" name="vmake" required="">
                                              		</div>

                                              		<!--Vehicle Model-->
	   	  	                                        <div class="row">
                                                  	<div>
                                                      <label for="vm">
                                                         Vehicle model:
                                                      </label>
                                                      <br>
                                                  	</div>
                                                  	<input id="vdetails" class="form-control" type="text" placeholder="Enter vehicle model" name="vmodel" required="">
                                              		</div>

                                              		<!--Vehicle Year-->
	   	  	                                        <div class="row">
                                                  	<div>
                                                      <label for="vy">
                                                         Vehicle year:
                                                      </label>
                                                      <br>
                                                  	</div>
                                                  	<input id="vdetails" class="form-control" type="number" placeholder="Enter vehicle make" min="2000" max="2021" name="vyear" required>
                                              		</div>
                                              		<br>

                                              		<!--Enter car type-->
                                              		<div class="row text-left">
		                                                <legend class="col-form-label">Vehicle Status:</legend>
		                                                <div class="col-sm-10">
		                                                  <div class="form-check">
		                                                    <input class="form-check-input" type="radio" name="vstatus" id="leased" value="L" required>
		                                                    <label class="form-check-label" for="leased">
		                                                      Leased
		                                                    </label>
		                                                  </div>
		                                                  <div class="form-check">
		                                                    <input class="form-check-input" type="radio" name="vstatus" id="financed" value="F" required>
		                                                    <label class="form-check-label" for="financed">
		                                                      Financed
		                                                    </label>
		                                                  </div>
		                                                  <div class="form-check">
		                                                    <input class="form-check-input" type="radio" name="vstatus" id="owned" value="O" required>
		                                                    <label class="form-check-label" for="owned">
		                                                      Owned
		                                                    </label>
		                                                  </div>
		                                                  
		                                                </div>
		                                            </div>
		                                            <div>
                                                          <a href="vehi_and_drivers.php">
                                                          	<input class="btn btn-primary col-md-12" id="addVehicle" class="form-control" type="submit" name="addVehicle";>
                                                          </a>
                                              		</div>
				                                </form>
				                            </div>
				                        </div>

				                        <?php
											if(isset($_POST['addVehicle']))
											{	 
												 $v_type = $_POST['vtype'];
												 $vin = $_POST['vin'];
												 $make = $_POST['vmake'];
												 $model = $_POST['vmodel'];
												 $year = $_POST['vyear'];
												 $status = $_POST['vstatus'];
												 $result = insertVehicleData($v_type,$vin,$make,$model,$year,$status);
													echo "result: ".$result;
													print($result);
												if($result==1 || $result=='1'){
													$_SESSION['display'] = "inline";
												    $_SESSION['errorMsg'] = "Successfully added the vehicle";
												    $_SESSION['alert_class'] = "alert alert-success";
													echo "<script>window.location.replace('vehi_and_drivers.php');</script>";
												}
												else{
													$_SESSION['display'] = "inline";
												    $_SESSION['errorMsg'] = "Error in adding the vehicle";
												    $_SESSION['alert_class'] = "alert alert-danger";
													echo "<script>window.location.replace('vehi_and_drivers.php');</script>";
												}
												
											}
										?>

				                        
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