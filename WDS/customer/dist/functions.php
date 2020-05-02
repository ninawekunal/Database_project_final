<?php 
	require_once 'db.php';

	
	
	//START OF CUSTOMER DETAILS

	function showCustDetails($email){

		global $conn;

		$sql = "SELECT * FROM cust_details WHERE email='$email'";
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_array($result);

	    if(isset($array)){
	    	return $array;
	    }
	    else{
	    	return 0;
	    }
	}

	function updateCustDetails($email, $first_name,$middle_name, $last_name, $address, $gender, $marital_status){
		global $conn;
		

		// prepare and bind
		$stmt = $conn->prepare("UPDATE cust_details set first_name=?,middle_name=?, last_name=?, address=?, gender=?, marital_status=? where email=?");
		$stmt->bind_param("sssssss", $first_name,$middle_name, $last_name, $address, $gender, $marital_status, $email);			// sss indicate format is in string.

		$res = $stmt->execute();

		if($res){
			$_SESSION['display'] = "inline";
          	$_SESSION['errorMsg'] = "Successfully removed the house";
          	$_SESSION['alert_class'] = "alert alert-success";
          	echo "<script>window.location.replace('my_details.php');</script>";
		}
		else{
			$_SESSION['display'] = "inline";
          	$_SESSION['errorMsg'] = "Error in removing house! <br> Please try again after some time.";
          	$_SESSION['alert_class'] = "alert alert-danger";
          	echo "<script>window.location.replace('my_details.php');</script>";
		}

		$stmt->close();

	}

	// END OF CUSTOMER DETAILS







	//HOUSE DETAILS 	home_ins_houses.php

	function insertHome($cust_id, $location, $purchase_date, $purchase_value, $area_sq_feet, $home_type, $auto_fire_noti, $home_security, $swimming_pool, $basement){

		global $conn;

		// prepare and bind
		$stmt = $conn->prepare("INSERT INTO home_details (cust_id, location, purchase_date, purchase_value, area_sq_feet, home_type, auto_fire_noti, home_security, swimming_pool, basement) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssssss", $cust_id, $location, $purchase_date, $purchase_value, $area_sq_feet, $home_type, $auto_fire_noti, $home_security, $swimming_pool, $basement);			// sss indicate format is in string.

		
		if($stmt->execute()){
			$stmt->close();
			return 1;
		}
		else{
			$stmt->close();
			return 0;
		}
	}

	function showHomeDetails($email){

		global $conn;

		$sql = "SELECT * from home_details where cust_id=(select cust_id from cust_details where email='$email')";
		$res = mysqli_query($conn,$sql);
        
	    if($res){
	    	return $res;
	    }
	    else{
	    	return false;
	    }
	}

	function showUnInsuredHomes($email){
		global $conn;

		$sql = "SELECT * from home_details where hinsid='0' AND cust_id=(select cust_id from cust_details where email='$email')";
		$res = mysqli_query($conn,$sql);
        
	    if($res){
	    	return $res;
	    }
	    else{
	    	return false;
	    }
	}

	function showHomeDetailsFromId($home_id){

		global $conn;

		$sql = "SELECT * from home_details where home_id='$home_id'";
		$res = mysqli_query($conn,$sql);
        
	    if($res){
	    	return $res;
	    }
	    else{
	    	return false;
	    }
	}

	function removeHouse($home_id){
		global $conn;
		//remove the house
		//prepare and bind
		$stmt = $conn->prepare("DELETE FROM home_details WHERE home_id=?");
		$stmt->bind_param("s", $home_id);				// sss indicate format is in string.
		$res = $stmt->execute();
		echo mysqli_error($conn);
		if($res){
			$stmt->close();
			return 1;
		}
		else{
			$stmt->close();
			return 0;
		}
	}

	function createHomeDetailsModal($result){



		echo "
			<!-- Modal -->
			<div class='modal fade' id='homeModal".$result['home_id']."' tabindex='-1' role='dialog' aria-labelledby='homeModal".$result['home_id']."' aria-hidden='true'>
			<div class='modal-dialog' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title' id='homeModal".$result['home_id']."'>More Details</h5>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
				</div>
				<div class='modal-body text-center'>
					<h5>Auto Fire Notification: <b style='color:green;'>".$result['auto_fire_noti']."</b></h5>
					<h5>Home Type: <b style='color:orange;'>".$result['home_type']."</b></h5>
					<h5>Home Security System: <b style='color:red;'>".$result['home_security']."</b></h5>
					<h5>Swimming Pool: <b style='color:blue;'>".$result['swimming_pool']."</b></h5>
					<h5>Basement: <b style='color:brown;'>".$result['basement']."</b></h5>
				</div>
				</div>
			</div>
			</div>
		";
	}

	function createInsDetailsModal($hinsid){

		global $conn;

		$sql = "SELECT * FROM home_ins WHERE hinsid = '$hinsid'";
		$query = mysqli_query($conn,$sql);
		$result = "";

		if($query){
			$result = mysqli_fetch_array($query);


			echo "
			<!-- Modal -->
			<div class='modal fade' id='insModal".$result['hinsid']."' tabindex='-1' role='dialog' aria-labelledby='insModal".$result['hinsid']."' aria-hidden='true'>
			<div class='modal-dialog' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title' id='insModal".$result['hinsid']."label'>More Details</h5>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
				</div>
				<div class='modal-body text-center'>
					<h5> Insurance Id: <b style='color:brown;'>".$result['hinsid']."</b></h5>
					<h5> Start Date: <b style='color:darkgray;'>".$result['start_date']."</b></h5>
					<h5>End Date: <b style='color:grey;'>".$result['end_date']."</b></h5>
					<h5>Total Amount: <b style='color:blue;'>".$result['total_amount']."</b></h5>";

					if($result['status']=='C'){
						$result['status'] = 'Current';
					}
					else{
						$result['status'] = 'Expired';
					}

				echo "<h5>Status: <b style='color:green;'>".$result['status']."</b></h5>
				</div>
				</div>
			</div>
			</div>
		";
		}
		
	}

	function createDeleteModal($result){
		echo "
			<!-- Modal -->
			<div class='modal fade' id='showDeleteModal".$result['home_id']."' tabindex='-1' role='dialog' aria-labelledby='showDeleteModal".$result['home_id']."' aria-hidden='true'>
			<div class='modal-dialog' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title' id='showDeleteModal".$result['home_id']."label'>Delete House: <b>".$result['home_id']."</b>--location: <b>".$result['location']."</b></h5>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
				</div>
				<div class='modal-body text-center'>
					<form method='POST'>
						<input type='hidden' name='home_id' value='".$result['home_id']."'>
						<button type='submit' class='btn btn-danger' name='deleteHome'><b>DELETE ASSET</b></button>
						<button type='button' class='btn btn-secondary' name='dismiss' class='close' data-dismiss='modal' aria-label='Close'><b>CANCEL</b></button> 
					</form>
				</div>
			 </div>
			</div>
			</div>
		";
	}


	function convertHomeProperFormat($result){

		//Displaying date in proper format.
		$time = strtotime($result["purchase_date"]);
        $day = date("d", $time);
        $month = date("M", $time);
		$year = date("Y", $time);
		$result["purchase_date"] = $day."th ".$month." ".$year;

		$result['purchase_value'] = "$".number_format($result['purchase_value']);
		$result['area_sq_feet'] = number_format($result['area_sq_feet'])." ft<sup>2";
		
		 if($result['hinsid']=='0' || $result['hinsid']==0){
			$result['hinsid'] = 'No';
		 }	
		// Displaying data in correct format.
		 if($result['home_type']=="S"){
		 	$result['home_type']='Single Family';
		 }
		 else if($result['home_type']=="M"){
		 	$result['home_type']='Multi Family';
		 }
		 else if($result['home_type']=="C"){
		 	$result['home_type']='Condominium';
		 }
		 else{
		 	$result['home_type']='Condominium'; 
		 }

		 // Display appropriate response for binary input for auto fire notifications
		 if($result['auto_fire_noti']=="1"){
		 	$result['auto_fire_noti']='Yes';
		 }
		 else{
		 	$result['auto_fire_noti']='No'; 
		 }

		 // Display appropriate response for binary input for home security 
		 if($result['home_security']=="1"){
		 	$result['home_security']='Yes';
		 }
		 else{
		 	$result['home_security']='No'; 
		 }

		 // Display appropriate response for binary input for swimming pool
		 if($result['swimming_pool']=="U"){
		 	$result['swimming_pool']='Underground';
		 }
		 else if($result['swimming_pool']=="O"){
		 	$result['swimming_pool']='Overground';
		 }
		 else if($result['swimming_pool']=="I"){
		 	$result['swimming_pool']='Indoor';
		 }
		 else if($result['swimming_pool']=="M"){
		 	$result['swimming_pool']='Multiple';
		 }
		 else{
		 	$result['swimming_pool']='No swimming_pool'; 
		 }

		 // Display appropriate response for binary input for basement 
		 if($result['basement']=="1"){
		 	$result['basement']='Yes';
		 }
		 else{
		 	$result['basement']='No'; 
		 }

		 return $result;
	}

	


	function getHouseCount($email){
		$res = showHomeDetails($_SESSION['email']);
        return mysqli_num_rows($res);
	}


	// END OF HOUSE DETAILS







	//start of NEW INSURANCE

	function getInsuranceCount(){

	}


	function createQuoteModal($getAmountDetails, $duration, $homeIds){


		$row = $getAmountDetails;

		echo "
		<div class='modal fade' id='quoteModal' tabindex='-1' role='dialog' aria-labelledby='quoteModal' aria-hidden='true'>
			<div class='modal-dialog' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title' id=''>Your Quote is calculated as:</h5>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
				</div>
				<div class='modal-body text-center'>
			<div class='table-responsive'>
				<table class='table table-bordered' id='quoteTable'>
					<tr>
					<th>Purchase Value cost: </th>
					<td>$".$row['purchase_value']."</td>
					</tr>
					<tr>
					<th>Area Percent cost: </th>
					<td>$".$row['area']."</td>
					</tr>
					<tr>
					<th>Auto Fire Notification Discount: </th>
					<td>$".$row['autoFireDiscount']."</td>
					</tr>
					<tr>
					<th>Home Security System Discount: </th>
					<td>$".$row['homeSecurityDiscount']."</td>
					</tr>
					<tr>
					<th>Swimming Pool Charges: </th>
					<td>$".$row['swimmingCharges']."</td>
					</tr>
					<tr>
					<th>Basement Discount: </th>
					<td>$".$row['basementDiscount']."</td>
					</tr>
					<tr>
					<th><b>TOTAL AMOUNT:</b> </th>
					<td><b>$".$row['totalAmount']."</b></td>
					</tr>
				</table>
			</div>
		</div>
		<div class='modal-footer'>
		<form method='POST'>
			<input type='hidden' name='total_amount' value='".$row['totalAmount']."'>
			<input type='hidden' name='insDuration' value='".$duration."'>";

		foreach($homeIds as $i){
			echo "<input type='hidden' name='homeIds[]' value='".$i."'>";
		}


		echo "<button type='submit' name='getInsurance' class='btn btn-primary'>Get My insurance</button>
			<button type='submit' name='dismissIns' class='btn btn-danger'>Not interested</button>
		</form>
		</div>
			</div>
		</div>
		</div>
		";
	}

	function calculateHomeInsAmount($home_id){
		$row = showHomeDetailsFromId($home_id);
		$result = mysqli_fetch_array($row);
		
		$amount = 0;

		/*Formula: 
		1% of purchase value
				+
		10% of area value
				+
		5% discount : Home Security enabled
				+
		5% discount :AUTO FIRE NOTI
				+
		5% discount : NO BASEMENT
				+
		(
		5% discount : NO SWIMMING POOL
				OR
		6% increment : Underground Swimming pool
				OR
		5% increment : Overground Swimming Pool
				OR
		8% increment : Indoor Swimming Pool
				OR
		10% increment : Multiple Swimming Pools
		)
		
		*/

		// Based on formula above, we will calculate the amount below:
		
		$purchase_value = $result['purchase_value'];
		$purchase_value = ($purchase_value*0.01);
		$amount += $purchase_value;

		$area = $result['area_sq_feet'];
		$area = $area*0.1;
		$amount += $area;

		if($result['auto_fire_noti']=="1"){
			$autoFireDiscount = ($amount*0.095)/10;
			$amount += $autoFireDiscount;
		}
		else{
			$autoFireDiscount = 0;
		}
		
		if($result['home_security']=="1"){
			$homeSecurityDiscount = $amount*0.095;
			$amount += $homeSecurityDiscount;
		}
		else{
			$homeSecurityDiscount = 0;
		}

		if($result['swimming_pool']=="U"){
			$swimmingCharges = ($amount*1.06)/100;
			$amount += $swimmingCharges;
		}
		else if($result['swimming_pool']=="O"){
			$swimmingCharges = ($amount*1.05)/100;
			$amount += $swimmingCharges;
		}
		else if($result['swimming_pool']=="I"){
			$swimmingCharges = ($amount*1.08)/100;
			$amount += $swimmingCharges;
		}
		else if($result['swimming_pool']=="M"){
			$swimmingCharges = ($amount*1.10)/100;
			$amount += $swimmingCharges;
		}
		else{
			$swimmingCharges = ($amount*0.095)/100;
			$amount += $swimmingCharges;
		}

		if($result['basement']=="0"){
			$basementDiscount = ($amount*0.095)/10;
			$amount += $basementDiscount;
		}
		else{
			$basementDiscount = 0;
		}

		$toSend=array("purchase_value"=>$purchase_value,"area"=>$area,"autoFireDiscount"=>$autoFireDiscount,"homeSecurityDiscount"=>$homeSecurityDiscount,"swimmingCharges"=>$swimmingCharges,"basementDiscount"=>$basementDiscount, "totalAmount"=>round($amount));

		return $toSend;

	}


	function newHomeIns($cust_id, $start_date, $end_date, $total_amount, $status){

		global $conn;

		$start_date = date('Y-m-d', $start_date);
		$end_date = date('Y-m-d', $end_date);


		if(!isset($cust_id) || !isset($start_date) || !isset($end_date) || !isset($total_amount) || !isset($status)){
			// Validate first before entering data
			return 0;
		}
		else{
			$stmt = $conn->prepare("INSERT INTO home_ins (cust_id, start_date, end_date, total_amount, status) VALUES (?, ?, ?, ?, ?)");
			$stmt->bind_param("sssss", $cust_id, $start_date, $end_date, $total_amount, $status);			

			$query = $stmt->execute();
				
			if($query){
				$hinsid = mysqli_insert_id($conn);
				return $hinsid;
			}
			else{
				return -1;
			}
		}
	}

	function insureHouse($home_id, $hinsid){

		global $conn;

		$stmt = $conn->prepare("UPDATE home_details SET hinsid=? WHERE home_id=?");
		$stmt->bind_param("ss", $hinsid, $home_id);			

		$query = $stmt->execute();

		if($query){
			return true;
		}
		else{
			return false;
		}
		
	}

	function createPayments($hinsid, $total_amount, $duration, $start_date){
		
		global $conn;

		//Duration will be in years. Convert it in months.
		$duration = $duration*12;
		$due_date = "";

		$i = 1;
		while($i<=$duration){

			$due_date =  strtotime("+".$i."Month", $start_date);
			$due_date = date('Y-m-d', $due_date);
			$stmt = $conn->prepare("INSERT INTO home_ins_payments (due_date, amount, hinsid) VALUES (?, ?, ?)");
			$stmt->bind_param("sss", $due_date, $total_amount, $hinsid);			

			$query = $stmt->execute();
			if($query){
				$success = true;
			}
			else{
				return false;
			}


			$i++;
		}
		if($success == true){
			return true;
		}
		
	}

	function getFormattedDate($time){
        $day=date("d",$time);
        $month=date("M",$time);
        $year=date("Y",$time);

        return ($day."th"." ".$month." ".$year);

	}


	



	// START OF SAMPLE FUNCTIONS
	// function closeConnection(){
	// 	if(isset($conn)){
	// 		$conn.close();
	// 	}
	// }

	// function selectData(){
	// 	$stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
	//     $stmt->execute();

	//     // set the resulting array to associative
	//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	//     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
	//         echo $v;
	//     }
	// }

	// function insertData(){
	// 	// prepare and bind
	// 	$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
	// 	$stmt->bind_param("sss", $firstname, $lastname, $email);			// sss indicate format is in string.

	// 	// set parameters and execute
	// 	$firstname = "John";
	// 	$lastname = "Doe";
	// 	$email = "john@example.com";
	// 	$stmt->execute();

	// 	$firstname = "Mary";
	// 	$lastname = "Moe";
	// 	$email = "mary@example.com";
	// 	$stmt->execute();

	// 	$firstname = "Julie";
	// 	$lastname = "Dooley";
	// 	$email = "julie@example.com";
	// 	$stmt->execute();

	// 	echo "New records created successfully";

	// 	$stmt->close();
	// }

	// END OF SAMPLE FUNCTIONS





	
