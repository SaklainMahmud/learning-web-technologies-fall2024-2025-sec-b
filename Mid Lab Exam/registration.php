<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reistration Form</title>
</head>
<body>
   
    <form action="registration_check.php" method="post">
    <fieldset>
        <legend><h3>REGISTRATION</h3></legend>

        <label for="id">Id</label><br>
        <input type="text" id="id" name="id"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <label for="confirmPassword">Confirm Password:</label><br>
        <input type="password" id="confirmPassword" name="confirmPassword"><br>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
     
        <label for="userType">User Type</label><br><hr>
        <input type="radio" id="user" name="userType">User
        <input type="radio" id="admin" name="userType">Admin
        <br><hr>

        <input type="submit" value="Sign Up" name="submit">
        <a href='login.html'>Sign In</a><br>
    </fieldset> 
    </form>

</body>
</html>