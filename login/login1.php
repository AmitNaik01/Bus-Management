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
		<form action="#" method = "POST" autocomplete="off" onsubmit = "return validation()" >
		<div class="center">
			<h1>Login</h1> 
				<div class="form">
					<input type="text" id="username" names="username" class="textfield" placeholder="Username">
					<input type="password" id="password" names="password" class="textfield" placeholder="Password">

					<div class="forgetpass"><a href="#" class="link" onclick="message()" >Forgot Password?</a></div>

					<input type="submit" name="login " value="Login" class="btn" >
				</div>
			
		</div>
		</form>
	</div>
	<script>
		function message(){
			alert("Try to remember password")
		}

		function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.passname.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
	</script>

</body>
</html>

<?php
	  include("../includes/connect.php");
	  session_start();
	  if(isset($_POST['login']))
	  {
		$username = $_POST['username'];
		$pwd = $_POST['password'];
		echo "sd";
		
		$query = "SELECT * FROM login_details WHERE username = '$username' && password = '$pwd' ";
		$data = mysqli_query($conn,$query);
		
		$total = mysqli_num_rows($data);
		
		// echo $total;
		if($total == 1)
		{
				echo "Login Ok";
		}
		else
		{
			echo "Login Faild";
		}
	}

   ?>
	 

