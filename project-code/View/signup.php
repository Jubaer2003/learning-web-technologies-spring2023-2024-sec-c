<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Marketplace - Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-box {
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            background-color: #f9f9f9;
        }
        .form-box input,
        .form-box select,
        .form-box button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            box-sizing: border-box;
        }
        .checkbox-group {
            display: flex;
        }
        .checkbox-group label {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Sign Up</h2>
            <form name="signupForm" action="signup.php" method="post" onsubmit="return validateForm()">
                <!-- Form fields -->
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" placeholder="Enter your username" required><br>
                
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your email" required><br>
                
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
                
                <label for="confirm_password">Confirm Password:</label><br>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required><br>
                
                <label for="age">Age:</label><br>
                <input type="number" id="age" name="age" placeholder="Enter your age" required><br>
                
                <div class="checkbox-group">
                    <label>Gender:</label>
                    <label><input type="checkbox" name="gender" value="male"> Male</label>
                    <label><input type="checkbox" name="gender" value="female"> Female</label>
                    <label><input type="checkbox" name="gender" value="other"> Other</label>
                </div>
                
                <div class="checkbox-group">
                    <label>User Type:</label>
                    <label><input type="checkbox" name="user_type" value="user"> User</label>
                    <label><input type="checkbox" name="user_type" value="admin"> Admin</label>
                </div>
                
                <label for="dob">Date of Birth:</label><br>
                <input type="date" id="dob" name="dob" placeholder="Enter your date of birth" required><br>
                
                <label for="phone">Phone Number:</label><br>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required><br>
                
                <label for="profile_pic">Profile Picture:</label><br>
                <input type="file" id="profile_pic" name="profile_pic" accept="image/*"><br>
                
                <button type="submit">Sign Up</button>
            </form>
            <div class="links">
                <a href="login.php">Login</a>
                <a href="forgotpassword.php">Forgot Password?</a>
            </div>
        </div>
    </div>

    <script>
    function validateForm() {
        var username = document.forms["signupForm"]["username"].value;
        var email = document.forms["signupForm"]["email"].value;
        var password = document.forms["signupForm"]["password"].value;
        var confirm_password = document.forms["signupForm"]["confirm_password"].value;
        var age = document.forms["signupForm"]["age"].value;
        var gender = document.forms["signupForm"]["gender"].value;
        var user_type = document.forms["signupForm"]["user_type"].value;
        var dob = document.forms["signupForm"]["dob"].value;
        var phone = document.forms["signupForm"]["phone"].value;
        var profile_pic = document.forms["signupForm"]["profile_pic"].value;
        var existingEmail = "user@example.com";
        if (existingEmail == email) {
            alert("An account with this email already exists");
            return false;
        }

        if (username == "" || email == "" || password == "" || confirm_password == "" || age == "" || gender == "" || user_type == "" || dob == "" || phone == "" || profile_pic == "") {
            alert("All fields must be filled out");
            return false;
        }

        if (password != confirm_password) {
            alert("Passwords do not match");
            return false;
        }

        return true;
    }
</script>

</body>
</html>

<?php
?>
