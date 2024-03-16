<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    

</head>
<body>
    
<a href="index.php" class="text-white">Click to Login</a>
<a href="reg.php" class="text-white"> Click to Register</a>

<h1 class="title text-center text-dark "> LOGIN PAGE<h1>


<div class="centerko">

<form action="process.php" method="POST">

<div class="container-fluid p-20 bg-light" id="centerkoni"> <!--ID di call mo sa babaw sa style para ma adjust mo sa depende sa SAKOP sang muni nga division-->

<label>Email</label></br>
<input type="email" name="email" required > </p>

<label>Password</label></br>
<input type="password" name="pass" required > </p>

<input type="submit" name="login" value="LOGIN">

</form>
  </div> 
</body>
</html>