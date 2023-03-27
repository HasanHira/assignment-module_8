<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirm_password)) {
            echo "All fields are required and must not be empty.";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
        } elseif($password != $confirm_password) {
            echo "Passwords do not match.";
        } else {
            echo "Registration successful. Welcome, $fname!";
            // You can add code here to store the user's information in a database, etc.
        }
    }
?>
