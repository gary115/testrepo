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

<li><a href="signup.php" ><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

</ul>
</div>
</div>
</nav>
<form action="login.php">
<h1>SIGN UP </h1>
<div class="form-group">
<input type="text"  class="form-control" name="name" placeholder="Name">
</div>

<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Email">
</div>

<div class="form-group">
<input type="password" class="form-control" name="password" placeholder="Password">
</div>
<div class="form-group">
<input type="tel" class="form-control" name="contact" placeholder="Contact">
</div>
<div class="form-group">
<input type="text" class="form-control" name="city" placeholder="City">
</div>
<div class="form-group">
<input type="text" class="form-control" name="address" placeholder="Address">
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Submit" >
</div>

</form>


<div id="wrapper">

<footer>
	<div class="container" >
	
	<center>	Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
	
	</div>
</footer>
</div>


</body>

</html>