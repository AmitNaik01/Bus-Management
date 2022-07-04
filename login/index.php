<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="../css/login_style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body> 
	<div class="con">
	<img class="busimg" src="../img/bus.jpg">
	<nav class="navbar">
            <img src="../img/logo.png"  class="logo">
            <label class="logotxt">JSS BUS MANAGEMENT</label>
        </nav> 
		<form action="login.php" method="post" autocomplete="off">
		<div class="center">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name" class="textfield"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" class="textfield"><br>

     	<button type="submit" class="btn">Login</button>
		</div>
     </form>

</body>
</html>
	 

