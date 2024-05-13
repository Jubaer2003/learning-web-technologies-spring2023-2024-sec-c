<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Marketplace - Login</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Login</h2>
            <form name="loginForm" action="login.php" method="post" onsubmit="return validateForm()">
                <input type="text" name="username" placeholder="Username or Email" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <button type="submit">Login</button>
            </form>
            <div class="links">
                <a href="signup.php">Sign Up</a>
                <a href="forgotpassword.php">Forgot Password?</a>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var username = document.forms["loginForm"]["username"].value;
            var password = document.forms["loginForm"]["password"].value;
            
            if (username == "" || password == "") {
                alert("Both username and password are required");
                return false;
            }
            
            return true;
        }
    </script>
</body>
</html>

<?php
?>
