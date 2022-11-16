<?php
require_once'connection.php';
if(isset($_POST['insert']))
{
	$name=$_POST['Name'];
	$address=$_POST['Address'];
	$age=$_POST['Age'];
	$sex=$_POST['Sex'];
	$bloodgroup=$_POST['Blood_Group'];
	$mobilenum=$_POST['Mobile_Num'];
	$category=$_POST['Category'];
	$emailid=$_POST['Email_ID'];
	
	$sql=mysqli_query($con,"INSERT INTO PATIENT(Name,Address,Age,Sex,Blood_Group,Mobile_Num,Category,Email_ID) values('$name','$address','$age','$sex','$bloodgroup','$mobilenum','$category','$emailid') ");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='indexPatient.php'</script>";
}

else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='indexPatient.php'</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP with Stored Procedure </title>
<meta name="viewport" content="width=device-width, initialscale=1">
<link
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.
css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js
"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Insert Patient Record</h3>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Name</b>
<input type="text" name="Name" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Address</b>
<input type="text" name="Address" class="form-control" required>
</div>
<div class="col-md-4"><b>Age</b>
<input type="text" name="Age" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Sex</b>
<input type="text" name="Sex" class="form-control" required>
</div>
<div class="col-md-4"><b>Blood_Group</b>
<input type="text" name="Blood_Group" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Mobile_Num</b>
<input type="text" name="Mobile_Num" class="form-control" required>
</div>
<div class="col-md-4"><b>Category</b>
<input type="text" name="Category" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Email_ID</b>
<input type="email" name="Email_ID" class="form-control" required>
</div>
</div>


<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div>
</form>
</div>
</div>
</body>
</html>