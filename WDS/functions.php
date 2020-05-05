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

	function login($email, $password){
		global $conn;

		$password = md5($password);

		$query = "SELECT * FROM cust_details WHERE EMAIL='$email' AND password='$password'";
		$result = mysqli_query($conn,$query);
		$rows = mysqli_num_rows($result);
		if($rows > 0){
			return 1;
		}
		else{
			return 0;
		}
	}

	function register($email,$password, $fname, $lname){

		global $conn;


		$password = md5($password); 	//encrypting.

		$query = "SELECT * FROM cust_details WHERE EMAIL='$email'";
		$result = mysqli_query($conn,$query);
		$rows = mysqli_num_rows($result);
		if($rows > 0){
			// user already present with the email address, don't allow
			return -1;
		}
		else{
			$stmt = $conn->prepare("INSERT INTO cust_details (email, first_name, last_name, password) VALUES (?, ?, ?, ?)");
			$stmt->bind_param("ssss",$email, $fname, $lname, $password);			

				
			$res = $stmt->execute();
			if($res){
				return 1;
			}
			else{
				return 0;
			}
		}


		

	}

 ?>