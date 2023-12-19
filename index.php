<?php

include 'connections.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My PHP App</title>
</head>
<body>

    <form method="post" action="login.php">

        <input type="text" name="name" placeholder="Name">
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <input type="text" name="password" placeholder="Password">
        <br>
        <input type="text" name="confirmpassword" placeholder="Confirm Password">
        <br><br>
        <input type="submit" value="Register">

    </form>

    
</body>
</html>