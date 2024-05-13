<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/profile_style.css">
</head>
<body>
    <div class="container">
        <div class="form-box profile">
            <h1>Edit Profile</h1>
            <form action="update_profile.php" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" value=""><br>
                
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value=""><br>
                
                <label for="phone">Phone Number:</label><br>
                <input type="tel" id="phone" name="phone" value=""><br>
                
                <label for="age">Age:</label><br>
                <input type="number" id="age" name="age" value=""><br>
                
                <label for="gender">Gender:</label><br>
                <input type="text" id="gender" name="gender" value=""><br>
                
                <label for="religion">Religion:</label><br>
                <input type="text" id="religion" name="religion" value=""><br>
                
                
                <button type="submit">Save Changes</button>
            </form>
        </div>
    </div>
</body>
</html>
