<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST["email"];
		$password = $_POST["password"];

		// You can add code here to check the user's information against a database, etc.

		if(empty($email) || empty($password)) {
			echo "Both fields are required and must not be empty.";
		} elseif(/* Check if the user's information is valid */) {
			$fname = /* Retrieve the user's first name from the database */;
			header("Location: welcome.php?fname=$fname");
			exit;
		} else {
			echo "Invalid email or password.";
		}
	}
?>
