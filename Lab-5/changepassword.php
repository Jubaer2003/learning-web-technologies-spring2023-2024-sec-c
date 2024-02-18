<html>
    <head>
        <title>Lab 5.2 Change Password</title>
    </head>
    <body>
        <form style ="width: 75%;" action="">
            <fieldset><legend>CHANGE PASSWORD</legend>
                <lebel>Current Password:</label>        <input type="current password" name="current password" value="" placeholder="type password" pattern="(?=.*\d).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more charactersMust contain atleast eight (8) characters and one of the special characters (@, #, $, %)"/> <br>
                <lebel style = "color: Green">New Password:</label>            <input type="new password" name="new password" value="" placeholder="type password" pattern="(?=.*\d).{8,}" title="Must contain atleast eight (8) characters and one of the special characters (@, #, $, %)"/> <br>
                <lebel style = "color: Red">Retype New Password:</label>     <input type="retype new password" name="retype new password" value="" placeholder="type password" pattern="(?=.*\d).{8,}" title="Must contain atleast eight (8) characters and one of the special characters (@, #, $, %)"/> <br>
                <hr width="100%">
                
                <input type="submit" name="button" value="Submit"/>
            </fieldset>
        </form>
    </body>
</html>