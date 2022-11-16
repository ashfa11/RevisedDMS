<?php

require_once'connection.php';
if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$pass=md5($_POST['password']);
	$cpass=md5($_POST['cpassword']);
	$user_type=$_POST['user_type'];
	
	$select = " SELECT * FROM USER_FORM WHERE email='$email' && password='$pass' ";
	
	$result=mysqli_query($con,$select);
	if(mysqli_num_rows($result)>0){
		$error[]='user already exist!';
		
	}else{
		if($pass != $cpass){
			$error[]='password incorrect!';
		}else{
			$insert="INSERT INTO USER_FORM(name,email,password,user_type) VALUES('$name','$email','$pass','$user_type')";
			mysqli_query($con,$insert);
			header('location:login_form.php');
		}
	}
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1">
<title>Register Form</title>

<!-- custom css file link -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container">
<form action="" method="post">
<h3>Register now</h3>
<?php
if(isset($error)){
	foreach($error as $error){
		echo '<span class="error-msg">'.$error.'</span>';
	};
};

?>
<input type="text" name="name" required placeholder="enter your name">
<input type="email" name="email" required placeholder="enter your email">
<input type="password" name="password" required placeholder="enter your password">
<input type="password" name="cpassword" required placeholder="confirm your password">
<select name="user_type">
<option value="patient">patient</option>
<option value="admin">admin</option>
<option value="doctor">doctor</option>
</select>
<input type="submit" name="submit" value="register now" class="form-btn">
<p>already have an account? <a href="login_form.php">login now</a></p>
</form>

</div>
</body>
</html>