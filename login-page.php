<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container page-head">
            <h2 class="page-title">Please Login</h2>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="login.php" method="post">
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="eamil" placeholder="Enter your email!" required>
                <label for="user-pass">Password:</label>
                <input type="password" name="password" id="user-pass" placeholder="Type your password" required>
                <button type="submit" value="Login">Submit</button>
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
