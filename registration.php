<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Html Code blocks are navigation purpose only. -->

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = trim($_POST["fname"]);
        $lname = trim($_POST["lname"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $confirm_password = trim($_POST["confirm_password"]);

        if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirm_password)) {
            echo "All fields are required and must not be empty.";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
        } elseif($password != $confirm_password) {
            echo "Passwords do not match.";
        } else {; ?>

        <div class="container">
            <h2 class="sucess-text">
                <?php echo "Registration successful. Welcome, $fname!"; ?>
            </h2>
        </div>
            
        <?php
        }
        $user_data = [$fname, $lname, $email, $password];
        $fp = fopen('users.csv', 'a');
        fputcsv($fp, $user_data);
        fclose($fp);
    }
?>


<!-- footer area start -->
<footer class="reg-foot">
        <div class="container">
            <div class="footer-nav">
                <ul>
                    <li><a href="login-page.php">Log in</a></li>
                    <li><a href="index.php">Sign up</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
