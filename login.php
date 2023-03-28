<?php	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST["email"];
		$password = $_POST["password"];


		$sv_data = fopen("users.csv", "r");
		while (($data = fgetcsv($sv_data)) !== FALSE) {
			$fname_data = $data[0];
			$email_data = $data[2];
			$password_data = $data[3];
		}
		
		fclose($sv_data);
		
		// You can add code here to check the user's information against a database, etc.
		
		if(empty($email) || empty($password)) {
			echo "Both fields are required and must not be empty.";
		} elseif($email==$email_data && $password == $password_data) {/* Check if the user's information is valid */
			echo $fname = $fname_data;/* Retrieve the user's first name from the database */
			header("Location: welcome.php?fname=$fname");
			exit;
		} else {
			echo "Invalid email or password.";
		}
	}
?>
