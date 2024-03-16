<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>

<a href="index.php" class="text-dark">Click to Login</a><p>

<a href="reg.php" class="text-dark"> Click to Register</a><p>

<h1 class="title text-center text-dark"> REGISTRATION PAGE<h1>


<div class="centerko">

<form action="process.php" method="POST">

<div class="container-fluid p-20 bg-light" id="centerkoni"> <!--ID di call mo sa babaw sa style para ma adjust mo sa depende sa SAKOP sang muni nga division-->


    
    <label> Email</label></br>
    <input type="email" name="email" required> </br>

    <label> Password</label></br>
    <input type="password" name="pass" required> </br>

    <label> Name</label></br>
    <input type="text" name="nm" required> </br>

    <input type="submit" name="reg" value="REGISTER">

</form>


    
</body>
</html>