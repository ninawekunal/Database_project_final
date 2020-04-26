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
                                	<div class="col-md-6 text-center row">
                                		<!-- To add the vehicle -->
                                		<div class="card mb-4 col-md-6">
				                            <div class="card-header"><i class="fas fa-table mr-1"></i>Add new Vehicle</div>
				                            <div class="card-body">
				                                <form method="POST">
				                                	Create a form to input a vehicle and its attributes.
				                                </form>
				                            </div>
				                        </div>
				                        <div class="card mb-4 col-md-6">
				                            <div class="card-header"><i class="fas fa-table mr-1"></i>Add new Drivers</div>
				                            <div class="card-body">
				                                <form method="POST">
				                                	Vehicle names added from left side go here:
				                                	<br>
				                                	<select>
				                                		<option>Maruti 800</option>
				                                		<option>Toyota Supra</option>
				                                	</select>
				                                	<br>
 													Create a form below to input a driver and its attributes. with a submit
				                                </form>
				                            </div>
				                        </div>
                                	</div>
                                	<div class="col-md-6 row">
                                		<div class="col-md-6">
                                			<!-- To display data about vehicles. -->
                                			<div class="card-header"><i class="fas fa-table mr-1"></i>Vehicles</div>
				                            <div class="card-body">
				                                <table>
		                                			<p> Create a table to show vehicle name</p>
		                                		</table>
				                            </div>
	                                		
                                		</div>
                                		<div class="col-md-6">
                                			<!-- To display data about vehicles. -->
	                                		<div class="card-header"><i class="fas fa-table mr-1"></i>Drivers</div>
				                            <div class="card-body">
				                                <table>
		                                			<p> Create a table to show driver name and which vehicle they are driving</p>
		                                		</table>
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