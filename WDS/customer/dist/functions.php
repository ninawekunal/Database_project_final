<?php 
	require_once 'db.php';

	function closeConnection(){
		if(isset($conn)){
			$conn.close();
		}
	}

	function selectData(){
		$stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
	    $stmt->execute();

	    // set the resulting array to associative
	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
	        echo $v;
	    }
	}

	function insertData(){
		// prepare and bind
		$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $firstname, $lastname, $email);			// sss indicate format is in string.

		// set parameters and execute
		$firstname = "John";
		$lastname = "Doe";
		$email = "john@example.com";
		$stmt->execute();

		$firstname = "Mary";
		$lastname = "Moe";
		$email = "mary@example.com";
		$stmt->execute();

		$firstname = "Julie";
		$lastname = "Dooley";
		$email = "julie@example.com";
		$stmt->execute();

		echo "New records created successfully";

		$stmt->close();
	}

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

	function updateDetails($email, $first_name,$middle_name, $last_name, $address, $gender, $marital_status){
		global $conn;
		

		// prepare and bind
		$stmt = $conn->prepare("UPDATE cust_details set first_name=?,middle_name=?, last_name=?, address=?, gender=?, marital_status=? where email=?");
		$stmt->bind_param("sssssss", $first_name,$middle_name, $last_name, $address, $gender, $marital_status, $email);			// sss indicate format is in string.

		$res = $stmt->execute();

		if($res){
			echo "
	          <script> 
	            window.location.replace('my_details.php');
	          </script>
	          ";
		}
		else{
			$uDdisplay = "inline;";
            $uDerrorMsg = "Error in updating! <br> Please try again after some time.";
            $uDalert_class = "alert alert-danger";
		}

		$stmt->close();

	}


 ?>