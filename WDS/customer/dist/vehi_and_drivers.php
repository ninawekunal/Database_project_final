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
                            <div class="card-header"><i class="fas fa-table mr-1"></i> Vehicles and Drivers</div>
                            <div class="card-body">
                                <div class="row">
                                	<!-- Details of vehicles and driver -->
                                	<div class="col-md-12 row">
                                		<div class="card mb-12 col-md-12">
                                			<!-- To display data about vehicles. -->
                                			<div class="card-header"><i class="fas fa-table mr-1"></i>Vehicles</div>
				                            <div class="card-body">
				                                <table width="100%" border="1" id="vehicle">
		                                			<thead align="center">
		                                				<th>Vehicle VIN</th>
		                                				<th>Vehicle Details (like Make, Model, Year)</th>
		                                				<th>Vehicle Status</th>
		                                			</thead>
		                                			<tbody align="center">
		                                				<td>123421</td>
		                                				<td>Honda City, 2011</td>
		                                				<td>L</td>
		                                			</tbody>
		                                		</table>
		                                		Note - Vehicle Status - “L”, “F”, or “O” represent “Leased”, Financed”, “and Owned’.
				                            </div>
	                                		
                                		</div>
                                	</div>

                               

                                	<div class="col-md-12 row">
                                		<div class="card mb-12 col-md-12">
                                			<!-- To display data about vehicles. -->
                                			<div class="card-header"><i class="fas fa-table mr-1"></i>Drivers</div>
				                            <div class="card-body">
				                                <table width="100%" border="1" id="driver">
		                                			<thead align="center">
		                                				<th>Name</th>
		                                				<th>Birthday(xx/xx/YYYY)</th>
		                                				<th>License</th>
		                                				<th>Vehicle VIN</th>
		                                			</thead>
		                                			<tbody align="center">
		                                				<td>Bill Gates</td>
		                                				<td>12/12/1990</td>
		                                				<td>12412342</td>
		                                				<td>123421</td>
		                                			</tbody>
		                                		</table>
				                            </div>
	                                		
                                		</div>
                                	</div>

                                	<!-- Add vehicle and driver-->
                                	<div class="col-md-12 text-center row">
                                		<!-- To add the vehicle -->
                                		<div class="card mb-6 col-md-6">
				                            <div class="card-header"><i class="fas fa-table mr-1"></i>Add new Vehicle</div>
				                            <div class="card-body">
				                                <form method="POST" name="add_vehicle" id="add_vehicle">
				                                	<!--Vehicle identification number-->
				                                	<div class="row">
                                                  	<div>
                                                      <label for="vin">
                                                         Vehicle VIN:
                                                      </label>
                                                      <br>
                                                  	</div>
                                                  	<input id="vin" class="form-control" type="number" placeholder="Enter VIN" name="vin"></div>
	   	  	                                        <br>
	   	  	                                        <!--Vehicle details-->
	   	  	                                        <div class="row">
                                                  	<div>
                                                      <label for="vin">
                                                         Vehicle Details:
                                                      </label>
                                                      <br>
                                                  	</div>
                                                  	
                                                  	<input id="vdetails" class="form-control" type="text" placeholder="Enter details like make, model, year" name="vdetails">
                                              		</div>
                                              		<!--Enter car type-->
                                              		<div class="row text-left">
		                                                <legend class="col-form-label">Vehicle Status:</legend>
		                                                <div class="col-sm-10">
		                                                  <div class="form-check">
		                                                    <input class="form-check-input" type="radio" name="vstatus" id="leased" value="L">
		                                                    <label class="form-check-label" for="leased">
		                                                      Leased
		                                                    </label>
		                                                  </div>
		                                                  <div class="form-check">
		                                                    <input class="form-check-input" type="radio" name="vstatus" id="financed" value="F">
		                                                    <label class="form-check-label" for="financed">
		                                                      Financed
		                                                    </label>
		                                                  </div>
		                                                  <div class="form-check">
		                                                    <input class="form-check-input" type="radio" name="vstatus" id="owned" value="O">
		                                                    <label class="form-check-label" for="owned">
		                                                      Owned
		                                                    </label>
		                                                  </div>
		                                                  
		                                                </div>
		                                            </div>
		                                            <div>
                                                          <input class="btn btn-primary col-md-12" id="addVehicle" class="form-control" type="submit" name="addVehicle">
                                              		</div>
				                                </form>
				                            </div>
				                        </div>

				                        <!--Add new driver-->
				                        <div class="card mb-6 col-md-6">
				                            <div class="card-header"><i class="fas fa-table mr-1"></i>Add new Drivers</div>
				                            <div class="card-body">
				                                <form method="POST" name="addDriver" id="addDriver" align="left">
				                                	<div class="btn-group">
				                                		<br>
				                                		<br>
                                              			<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                		Select car
                                              			</button>
	                                            	<div class="dropdown-menu" name="client_vehicles">
	                                                    <a class="dropdown-item">Maruti 800</a>
	                                                	<a class="dropdown-item">Toyoto</a>
	                                              	</div>
	                                                </div>
	                                                <br>
	                                                <br>
	                                                <!--Driver Name-->
				                                	<div class="row">
                                                  	<div>
                                                      <label for="dname">
                                                         Driver Name:
                                                      </label>
                                                      <br>
                                                  	</div>
                                                  	<input id="dname" class="form-control" type="text" placeholder="Enter the Full Name" name="dname"></div>
	   	  	                                        <br>
	   	  	                                        <!--Driver date of birth-->
				                                	<div class="row">
                                                  	<div>
                                                      <label for="dob">
                                                         Driver Date of Birth:
                                                      </label>
                                                      <br>
                                                  	</div>
                                                  	<input id="dob" class="form-control" type="date" placeholder="Enter the date of birth" name="dob"></div>
	   	  	                                        <br>
	                                                <!--Driver License-->
				                                	<div class="row">
                                                  	<div>
                                                      <label for="dl">
                                                         Driver License:
                                                      </label>
                                                      <br>
                                                  	</div>
                                                  	<input id="dl" class="form-control" type="number" placeholder="Enter the license number" name="dl"></div>
	   	  	                                        <br>
	   	  	                                        <div>
                                                          <input class="btn btn-primary col-md-12" id="addDriver" class="form-control" type="submit" name="addDriver">
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