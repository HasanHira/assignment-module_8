<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Html Code blocks are navigation purpose only. -->

        <div class="container">
            <h2 class="sucess-text">
                <?php echo "Loged in successful. Welcome! {$_GET["fname"]}"; ?>
            </h2>
        </div>
        


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
