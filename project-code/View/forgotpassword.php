<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Marketplace - Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Forgot Password</h2>
            <form name="forgotPasswordForm" action="forgotpassword.php" method="post" onsubmit="return validateForm()">
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="tel" name="phone" placeholder="Phone Number" required><br>
                <input type="date" name="dob" placeholder="Date of Birth" required><br>
                <button type="submit">Submit</button>
            </form>
            <div class="links">
                <a href="login.php">Login</a>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var email = document.forms["forgotPasswordForm"]["email"].value;
            var phone = document.forms["forgotPasswordForm"]["phone"].value;
            var dob = document.forms["forgotPasswordForm"]["dob"].value;
            
            if (email == "" || phone == "" || dob == "") {
                alert("All fields must be filled out");
                return false;
            }
            
            return true;
        }
    </script>
</body>
</html>

<?php
?>
