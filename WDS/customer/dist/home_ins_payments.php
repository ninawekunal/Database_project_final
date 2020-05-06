 <!DOCTYPE html>
 <html>

 <head>
 	<title>Home Insurance</title>
 	<style type="text/css">
 		#tableHouse tr td,
 		th {
 			text-align: center;
 			padding: 10px;
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

<!-- Div class for error handling -->


<div id="error" style="display:<?php echo isset($_SESSION['display']) ? $_SESSION['display'] : 'none;';
								unset($_SESSION['display']); ?> ">
	<div class="<?php echo isset($_SESSION['alert_class']) ? $_SESSION['alert_class'] : 'none;';
				unset($_SESSION['alert_class']); ?>">
		<?php echo isset($_SESSION['errorMsg']) ? $_SESSION['errorMsg'] : 'none;';
		unset($_SESSION['errorMsg']);  ?></div>
</div>


		<?php

        $result1 = showHomeInsDetails($_SESSION['email']);
        if($result1!=false){
            while ($row1 = mysqli_fetch_array($result1)) {

                $res1 = createHomeModal($row1['hinsid']);
				addAssetModal($row1['hinsid']);
				$date = date("Y-m-d",strtotime("today"));
				$res45 = showCurrentMonthPayment($row1['hinsid'], $date, '0');
				$rows_result = 0;
				if ($res45 == false) {
				} else {
					while ($row45 = mysqli_fetch_array($res45)) {
						createPaymentsModal($row45);
						$rows_result +=1;
					}
				}
            }
		}
		

		?>
		
		<?php
			$date = date("Y-m-d",strtotime("today"));
			$result = showHomeInsDetails($_SESSION['email']);
			$paymentsThisMonth = 0;
		?>
		
 		<div class="home_ins_content">
 			<div class="card mb-4">
 				<div class="card-header"><i class="fas fa-table mr-1"></i> Payments</div>
 				<div class="card-body">
 					<div class="row">
 						<!--Invoice generated-->
 						<div class="col-xl-12 col-md-12">
 							<div class="row">
 								<div class="card mb-4 col-md-12">
 									<div class="card-header row">
		 								<div class="col-md-5">
										 <i class="fas fa-list mr-1"></i> <b>Payments Due:</b><b style="color:red">(<?php echo $rows_result; ?>)</b>
										 </div>
									</div>
 									<div class="card-body">
 										<div class="table-responsive">
										 <table id="invoice_details" class="table table-bordered table-hover text-center">
										 	<thead class="thead-light">
											<tr>
												<th>Policy No.</th>
												<th>House Details</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Amount</th>
												<th>Due Date</th>
												<th>Status</th>
												<th>Pay Now</th>
											</tr>
										</thead>
										<tbody>
                                

								<?php

								
								if ($result == false) {
									
								} else {
									while ($row = mysqli_fetch_array($result)) {
	
										
										$row['start_date'] = getFormattedDate(strtotime($row['start_date']));
										$row['end_date'] = getFormattedDate(strtotime($row['end_date']));

										$res1 = showCurrentMonthPayment($row['hinsid'], $date, '0');
										if($res1==false){
											
										}
										else{
											while($row1 = mysqli_fetch_array($res1)){
												$row1['due_date'] = getFormattedDate(strtotime($row1['due_date']));
												$paymentsThisMonth +=1;

												

												echo "
													
													<tr>
														<td>".$row['hinsid']."</td>
														<td><a href='#' data-toggle='modal' data-target='#homeDetailsModall".$row['hinsid']."'>Click Here</a></td>
														<td>" . $row['start_date'] . "</td>
														<td>" . $row['end_date'] . "</td>
														<td>" . $row['total_amount'] . "</td>
														<td> ".$row1['due_date']."</td>
														<td> Not Payed</td>
														<td><a href='#' data-toggle='modal' data-target='#payNowModal".$row1['payment_id']."'>Pay Now</a></td>
													</tr>
												";
											}
										}
	 
										
									}
								}
								if($paymentsThisMonth==0){
									echo "<tr>
											<td colspan='8'>No payments for this month.</td>
										  </tr>";
								}
	
								?>
	
									
								</tbody>
 										</table>
										 </div>
 									</div>
 								</div>
 							</div>
 						</div>

 						<!--Payment history-->
 						<div class="col-xl-12">
 							<div class="card mb-4">
 								<div class="card-header"><i class="fas fa-home mr-1"></i><b>Payment history</b> </div>
 								<div class="card-body">
 									<div class="table-responsive">
									 <table id="Payment" class="table table-bordered table-hover text-center">
 										<thead class="thead-light">
 											<tr>
 												<th>Payment Id</th>
 												<th>Policy No.</th>
 												<th>Payment date</th>
 												<th>Payment type</th>
 												<th>Amount</th>
 											</tr>
 										</thead>
 										<tbody>
											<?php
												
												$res2 = showPaymentHistory($_SESSION['email']);

												if($res2 == false){
													echo "
														<tr>
															<td colspan='5'>No Payments made yet!</td>
														</tr>
													";
												}
												else{
													while($row2 = mysqli_fetch_array($res2)){
														echo "
														<tr>
															<td>".$row2['payment_id']."</td>
															<td>".$row2['hinsid']."</td>
															<td>".$row2['payment_date']."</td>
															<td>".$row2['payment_type']."</td>
															<td>".$row2['amount']."</td>
														</tr>
														";
													}
												}
												


											?>

 											
 										</tbody>
 									</table>
									</div>
 								</div>
 							</div>
 						</div>

						 <!-- End of payment History -->
 					</div>
 				</div>
 			</div>
 		<!-- </div> -->
 	</div>
 	</main>

 	<!-- After main footer should come. -->
 	<?php
		require_once 'footer.php';
		?>
 	</div>
 	</div> <!-- This is the ending of the header -->
 </body>

 </html>

 <?php

	if(isset($_POST['paynow'])){
		$payment_type = $_POST['payment_type'];
		$payment_id = $_POST['payment_id'];
		$result = makePayment($payment_id, $payment_type);
		if($result==1){
			$_SESSION['display'] = "inline";
			$_SESSION['errorMsg'] = "Successfully recorded the payment! <br> Thank you!";
			$_SESSION['alert_class'] = "alert alert-success";
			echo "<script>window.location.replace('home_ins_payments.php');</script>";
		}
		else{
			$_SESSION['display'] = "inline";
			$_SESSION['errorMsg'] = "Error in recording payment! <br> Please try again after some time.";
			$_SESSION['alert_class'] = "alert alert-danger";
			echo "<script>window.location.replace('home_ins_payments.php');</script>";
		}
	}

?>