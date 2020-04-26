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
                            <div class="card-header"><i class="fas fa-table mr-1"></i> New Insurance</div>
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
			                        <div class="col-md-5"></div><button type="button" class="btn btn-primary col-md-2">NEXT</button></center><div class="col-md-5"></div>
                              	</div>  

                              	<br><br>
                              	 <!-- NEXT SECTION HERE -->
                              	 <div class="row text-center card mb-4">
                              	 	<div class="card-header"><i class="fas fa-table mr-1"></i>Fill in your details</div>
                              	 	<p>
                              				Make a form with all the validations which will input all the necessary data for creating a home insurance.
                              				Please embellish whatever you can.  <br>
                              				Also, change all the ids, names, and for attributes of each component to reflect the corresponding field.
                              				<br> <b>P.S.</b>You can use the below fields to reproduce other fields.
                              				and Use our ERD to reference which fields to put. 
                              				<br><i>and remove this text once done.</i>
                              				<br>Eg: 

                              			</p>
                              			<br>
                              		<form method="POST" class="card-body">
                              			
                              			<div class="row">
                              				<div class="col-md-6 row">
                              					<!-- Left section of the form -->
                              					<label for="policyName" class="col-md-5 text-right">
                              		<!-- NOTE: the for attribute of Label and name and id attributes of input below be same -->
		                              				Policy Name:
		                              			</label>
		                              			<input type="text" name="policyName" id="policyName" placeholder="Enter some policy Name:" class="col-md-6 text-left">

                              				</div>
                              				<div class="col-md-6 row">
                              					<!-- Left section of the form -->
                              					<label for="packageName" class="col-md-5 text-right">
                              		<!-- NOTE: the for attribute of Label and name and id attributes of input below be same -->
		                              				Package Name:
		                              			</label>
		                              			<input type="text" name="policyName" id="policyName" placeholder="Enter some policy Name:" class="col-md-6 text-left">

                              				</div>

                              			</div>
                              			<br><br>
                              			<center><button class="btn btn-primary" type="submit">Submit</button></center>

                              		</form>
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