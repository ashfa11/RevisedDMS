<?php

require_once'connection.php';

session_start();
if(!isset($_SESSION['name'])){
	header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1">
<title>Admin Page</title>

<!== custom css file link ==>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
<div class="content">
<h3>Hi, <span>admin</span></h3>
<h3>Welcome! <span><?php echo $_SESSION['name'] ?></span></h3>
<p> this is an admin page</p>
<a href="login_form.php" class="btn">login</a>
<a href="register_form.php" class="btn">register</a>
<a href="logout_form.php" class="btn">logout</a>
<a href="indexPatient.php" class="btn">see_patientList</a>
<a href="insertDoctor.php" class="btn">add_doctorList</a>
<a href="indexDoctor.php" class="btn">see_doctorList</a>
<a href="insertAdmin.php" class="btn">add_adminList</a>
<a href="indexAdmin.php" class="btn">see_adminList</a>
<a href="indexAppoinment.php" class="btn">see_appoinment</a>
<a href="insertBill.php" class="btn">add_billList</a>
<a href="indexBill.php" class="btn">see_billList</a>

</div>

</div>
</body>
</html>