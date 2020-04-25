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
                	require_once 'home_ins_header.php';
                 ?>

                 
                 <div class="home_ins_content">
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i> Current Insurances</div>
                            <div class="card-body">
                                <table border="1" id="tableHouse">
		                                    		<p>This table will have all details of the user's current insurances.
		                                    			<br> Change the fields to reflect appropriate fields in the insurance table.
		                                    			<br> tag th tag indicates table heading. See more about tables in html for more details.
		                                    		</p>
		                                    		<thead>
		                                    			<tr>
		                                    				<!-- 1. --> <th>H. No</th>
			                                    			<!-- 2. --> <th>Location</th>
			                                    			<!-- 3. --> <th>Purchase Date</th>
			                                    			<!-- 4. --> <th>Area(sqFt)</th>
			                                    			<!-- 5. --> <th>Type</th>
			                                    			<!-- 6. --> <th>Rented?</th>
		                                    			</tr>
		                                    		</thead>
		                                    		<tbody>
		                                    			<tr>
		                                    				<td>1</td>
		                                    				<td>New York</td>
		                                    				<td>24th Apr 2020</td>
		                                    				<td>1000</td>
		                                    				<td>Apartment</td>
		                                    				<td>Yes</td>
		                                    			</tr>
		                                    			<tr>
		                                    				<td>2</td>
		                                    				<td>New J</td>
		                                    				<td>24th Apr 2020</td>
		                                    				<td>2000</td>
		                                    				<td>Apartment</td>
		                                    				<td>No</td>
		                                    			</tr>
		                                    		</tbody>
		                                    	</table>
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