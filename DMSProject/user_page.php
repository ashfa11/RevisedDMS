<?php

require_once'connection.php';

session_start();
if(!isset($_SESSION['user_name'])){
	header('location:login_form.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1">
<title>User Page</title>

<!-- custom css file link -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
<div class="content">
<h3>Hi, <span>patient</span></h3>
<h1>Welcome! <span><?php echo $_SESSION['user_name'] ?></span></h1>
<p> this is an user page</p>

<a href="login_form.php" class="btn">login</a>
<a href="register_form.php" class="btn">register</a>
<a href="logout_form.php" class="btn">logout</a>
<a href="insertpatient.php" class="btn">add_details</a>
<a href="indexPatient.php" class="btn">editDetails</a>
<a href="insertAppoinment.php" class="btn">add_appoinment</a>
<a href="indexAppoinment.php" class="btn">see_appoinment</a>
<a href="viewBill.php" class="btn">see_billList</a>
<a href="viewPrescription.php" class="btn">seePrescription</a>


</div>

</div>
</body>
</html>