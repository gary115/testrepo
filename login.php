<!DOCTYPE html>
<html>
<head>
title>Lifestyle Store</title>
<link rel="stylesheet" type="text/css" href="style2.css">
 <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>

</button>

<a href="index.html" class="navbar-brand">Lifestyle Store</a>
</div>
<div  class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">

<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
<li><a href="login.php" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

</ul>

</nav>
<div class="panel panel-primary">
<div class="panel-heading"><h2>LOGIN</h2>
</div>
<div class="panel-body">
<p class="text-warning">Login to make a purchase</p>
</div>
<form action="product.php">
<div class="form-group">
<input type="email"  class="form-control" name="email" placeholder="Email">
</div>

<div class="form-group">
<input type="password" class="form-control" name="password" placeholder="Pasword">
</div>
<div class="form-group">
<a href="product.php">
<input type="submit" class="btn btn-primary" value="Login"></a>
</div>
</form>
<div class="panel-footer">Don't have an account?<a href="signup.php">Register</a>


</div>

</div>
<footer>
	<div class="container" >
	
	<center>	Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
	
	</div>
</footer>


</body>
</html>