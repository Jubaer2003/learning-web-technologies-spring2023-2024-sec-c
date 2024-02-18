<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab 5.4 Registration</title>
    </head>
    <body>
        <form style ="width: 75%;" action="">
            <fieldset>
                <legend>REGISTRATION</legend>
                <label>Name:</label>                <input type="text" name="name" value="" placeholder="type name"/> <br>
                <hr width="100%">
                <label>Email:</label>               <input type="text" name="email" value="" placeholder="type email"/> <br>
                <hr width="100%">
                <label>User Name:</label>           <input type="text" name="username" value="" placeholder="type name"/> <br>
                <hr width="100%">
                <label>Password:</label>            <input type="password" name="password" value="" placeholder="type password"/> <br>
                <hr width="100%">
                <label>Confirm Password:</label>    <input type="password" name="password" value="" placeholder="type password"/> <br>
                <hr width="100%">
                
                <fieldset>
                <legend>Gender</legend>
                        <input type="radio" name="gender" value=""/> Male 
                        <input type="radio" name="gender" value=""/> Female 
                        <input type="radio" name="gender" value=""/> Other <br>
                </fieldset>
                <hr width="100%">

                <fieldset>        
                <legend>Date of Birth</legend>        
                        <input type="text" size="2" value=""/>/
                        <input type="text" size="2" value=""/>/
                        <input type="text" size="4" value=""/>
                        <lebel>(dd/mm/yyyy)</lebel>
                </fieldset>
                <hr width="100%">

                <input type="submit" name="button" value="Submit"/>
                <input type="reset" name="button" value="Reset"/>
            </fieldset>
        </form>
    </body>
</html>