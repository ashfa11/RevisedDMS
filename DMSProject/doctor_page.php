<?php

require_once'connection.php';

session_start();
if(!isset($_SESSION['doctor_name'])){
	header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1">
<title>Doctor Page</title>

<!-- custom css file link -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
<div class="content">
<h3>Hi, <span>doctor</span></h3>
<h3>Welcome! <span><?php echo $_SESSION['doctor_name'] ?></span></h3>
<p> this is an doctor page</p>
<a href="login_form.php" class="btn">login</a>
<a href="register_form.php" class="btn">register</a>
<a href="logout_form.php" class="btn">logout</a>
<a href="indexPatient.php" class="btn">add_details</a>
<a href="indexAppoinment.php" class="btn">see_appoinment</a>
<a href="insertPrescription.php" class="btn">addPrescription</a>
<a href="indexPrescription.php" class="btn">seePrescription</a>
<a href="updatePrescription.php" class="btn">editPrescription</a>

</div>

</div>
</body>
</html>