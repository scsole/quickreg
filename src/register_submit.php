<?php
	function throw_if_null($key, $value){
		if ($value == null){
			echo "<h2>$key is null!</h2>";
			echo "<br>";
			throw new Exception("$key is null!");
		}
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		print_r($_POST);

		$first_name = $_POST['first_name'];
		throw_if_null("first_name", $first_name);

		$last_name = $_POST['last_name'];
		throw_if_null("last_name", $last_name);

		$gender = $_POST['gender'];
		throw_if_null("gender", $gender);


		$dob = $_POST['dob'];
		throw_if_null("dob", $dob);

		echo '<br><h1>'.$dob.'</h1>';

		$club = $_POST['club'];

		$email_address = $_POST['email_address'];
		throw_if_null("email_address", $email_address);

		$medical_conditions = $_POST['medical_conditions'];

		$emergency_contact_name = $_POST['emergency_contact_name'];
		throw_if_null("emergency_contact_name", $emergency_contact_name);

		$emergency_contact_number = $_POST['emergency_contact_number'];
		throw_if_null("emergency_contact_number", $emergency_contact_number);

		$db_host   = 'mysql';
		$db_name   = 'quickreg';
		$db_user   = 'webuser';
		$db_passwd = 'insecure_pw';

		$registration_timestamp 	= date('Y-m-d H:i:s');
		echo $registration_timestamp;
		echo '<h1>';
		echo $first_name;
		echo '</h1>';

		$pdo_dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8";
		$conn   	= new PDO($pdo_dsn, $db_user, $db_passwd);
		echo "<h1>Successful connection</h1>";
		$sql 		= "INSERT INTO registrations (first_name, last_name, gender, dob, club, email_address, medical_conditions, emergency_contact_name, emergency_contact_number, registration_timestamp) VALUES (:first_name, :last_name, :gender, :dob, :club, :email_address, :medical_conditions, :emergency_contact_name, :emergency_contact_number, :registration_timestamp)";
		
		$stmt 		= $conn->prepare($sql);

		$stmt->bindParam(':first_name', 				$first_name);
		$stmt->bindParam(':last_name', 					$last_name);
		$stmt->bindParam(':gender', 					$gender);
		$stmt->bindParam(':dob', 						$dob);
		$stmt->bindParam(':club', 						$club);
		$stmt->bindParam(':email_address', 				$email_address);
		$stmt->bindParam(':medical_conditions', 		$medical_conditions);
		$stmt->bindParam(':emergency_contact_name', 	$emergency_contact_name);
		$stmt->bindParam(':emergency_contact_number', 	$emergency_contact_number);
		$stmt->bindParam(':registration_timestamp', 	$registration_timestamp);

		$stmt->execute();
		echo "<h1>Statement successful</h1>";

	}	
?>
