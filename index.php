<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registartion Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container page-head">
            <h2 class="page-title">Registration Form</h2>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="registration.php" method="post">
                <label for="f-name">First Name: <span>*</span></label>
                <input type="text" name="fname" id="f-name" placeholder="Your first name" required>
                <label for="l-name">Last Name: <span>*</span></label>
                <input type="text" name="lname" id="l-name" placeholder="Your last name" required>
                <label for="eamil">Email Address: <span>*</span></label>
                <input type="email" name="email" id="eamil" placeholder="Enter your email" required>
                <label for="user-pass">Password: <span>*</span></label>
                <input type="password" name="password" id="user-pass" placeholder="Type your password" required>
                <label for="confirm-pass">Confirm Password: <span>*</span></label>
                <input type="password" name="confirm_password" id="confirm-pass" placeholder="Confirm your password" required>
                <button type="submit" value="submit">Submit</button>
            </form>
        </div>
    </main>
    <footer>
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