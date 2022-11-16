<?php

require_once'connection.php';
session_start();
if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($con,$_GET['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$pass=md5($_POST['password']);
	$cpass=md5($_POST['cpassword']);
	$user_type=$_GET['user_type'];
	
	$select = " SELECT * FROM USER_FORM WHERE email='$email' && password='$pass' ";
	
	$result=mysqli_query($con,$select);
	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_array($result);
		
		if($row['user_type']=='admin'){
			$_SESSION['name']=$row['name'];
			header('location:admin_page.php');
			}elseif($row['user_type']=='patient'){
			$_SESSION['user_name']=$row['name'];
			header('location:user_page.php');
		}elseif($row['user_type']=='doctor'){
			$_SESSION['doctor_name']=$row['name'];
			header('location:doctor_page.php');
		
		}
	}else{
		$error[]='incorrect email or password!';
	}
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1">
<title>Login Form</title>

<!-- custom css file link -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container">
<form action="" method="post">
<h3>Login now</h3>
<?php
if(isset($error)){
	foreach($error as $error){
		echo '<span class="error-msg">'.$error.'</span>';
	};
};

?>

<input type="email" name="email" required placeholder="enter your email">
<input type="password" name="password" required placeholder="enter your password">
  <input type="submit" name="submit" value="login now" class="form-btn">
<p>don't have an account? <a href="register_form.php">register now</a></p>
</form>

</div>
</body>
</html>