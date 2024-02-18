<html>
    <head>
        <title>Lab 5.1 Login</title>
    </head>
    <body>
        <form style ="width: 60%;" action="">
            <fieldset><legend>LOGIN</legend>
                Name:       <input type="text" name="username" value="" placeholder="type username" minlength="2"/> <br>
                Password:   <input type="password" name="password" value="" placeholder="type password" pattern="(?=.*\d).{8,}" title="Must contain atleast eight (8) characters and one of the special characters (@, #, $, %)"/> <br>
                <hr width="100%">

                <input type="checkbox" name="anything" value=""/> Remember me <br>
                <input type="submit" name="button" value="Submit"/>
                <a href = ""><u>Forgot Password?</u></a>
            </fieldset>
        </form>
    </body>
</html>