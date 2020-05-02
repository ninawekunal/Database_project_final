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

	           
               <input type="hidden" name="emailField" id="userEmail" value="<?php echo $_SESSION['email']; ?>"> 

                <?php 

                    // $time = 0;
                    // $date = strtotime("+".$time."Month");
                    // $date = date("d-M-Y",$date);
                    // echo $date;

                    // $sql = "INSERT INTO cust_home_insurances (cust_id,ins_id, home_id, total_amount, ins_period, payment_type) VALUES('1','2','2',1279, 2, 'M')";
                    // $query = mysqli_query($conn, $sql);

                    // // $sql2 = "INSERT INTO home_ins_payments (due_date, payment_type,home_ins_id, status) VALUES('30-04-2020', 'Check',LAST_INSERT_ID(), 0);";

                    // // $query2 = mysqli_query($conn, $sql2);

                    

                    // if($query){
                    //     echo "home_ins_id: ".$home_ins_id;
                    // }
                    // else{
                    //     echo "false: ".mysqli_error($conn);
                    // }


                 ?>
                 <!-- Div class for error handling -->


                <div id="error" style="display:<?php echo isset($_SESSION['display'])?$_SESSION['display']:'none;'; unset($_SESSION['display']); ?> ">
                  <br><br>
                  <div class="<?php echo isset($_SESSION['alert_class'])?$_SESSION['alert_class']:'none;'; unset($_SESSION['alert_class']); ?>">
                    <?php echo isset($_SESSION['errorMsg'])?$_SESSION['errorMsg']:'none;'; unset($_SESSION['errorMsg']);  ?></div>
                </div>


				<div class="home_ins_content">
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i> Current Insurances</div>
                            <div class="card-body">
                                <table border="1" id="tableHouse">
                            		<thead>
                            			<tr>
                            				<th>Policy Number</th>
                                            <th>Home ID</th>
                                			<th>House Location</th>
                                			<th>Policy Start Date</th>
                                			<th>Policy End Date</th>
                                			<th>Premium Amount</th>
                                			<th>Policy Status</th>
                                            <th>Invoices Generated</th>
                                            <th>Payments made</th>
                            			</tr>
                            		</thead>
                            		<tbody>
                            			<tr>
                            				<td>1</td>
                                            <td>2</td>
                            				<td>New York</td>
                            				<td>24th Apr 2020</td>
                            				<td>23th Apr 2021</td>
                            				<td>1200</td>
                            				<td>C</td>
                                            <td>1,2,3</td>
                                            <td>1,2,3</td>
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