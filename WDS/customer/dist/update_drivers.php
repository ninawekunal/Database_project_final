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
                                		<!-- Add new driver -->
				                        <div class="card mb-12 col-md-12">
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