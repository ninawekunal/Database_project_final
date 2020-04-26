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
                            <div class="card-header"><i class="fas fa-table mr-1"></i> Current Insurances</div>
                            <div class="card-body">
                                <table border="1" id="tableHouse">
                            		<thead>
                            			<tr>
                            				<th>Policy Number</th>
                                			<th>House Location</th>
                                			<th>Policy Start Date</th>
                                			<th>Policy End Date</th>
                                			<th>Premium Amount</th>
                                			<th>Policy Status</th>
                            			</tr>
                            		</thead>
                            		<tbody>
                            			<tr>
                            				<td>1</td>
                            				<td>New York</td>
                            				<td>24th Apr 2020</td>
                            				<td>23th Apr 2021</td>
                            				<td>1200</td>
                            				<td>C</td>
                            			</tr>
                            		</tbody>          				
		                        </table>
		                        Note - <br>
		                        Policy Status - C means current and P means expired 
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