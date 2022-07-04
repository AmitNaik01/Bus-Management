<?php
 
if (isset($_POST['re_password']))
	{
	$old_pass = $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$re_pass = $_POST['re_pass'];
	$password_query = mysql_query("select * from users where id='1'");
	$password_row = mysql_fetch_array($password_query);
	$database_password = $password_row['password'];
	if ($database_password == $old_pass)
		{
		if ($new_pass == $re_pass)
			{
			$update_pwd = mysql_query("update users set password='$new_pass' where id='1'");
			echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
			}
		  else
			{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
			}
		}
	  else
		{
		echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
		}
	}
 
?>