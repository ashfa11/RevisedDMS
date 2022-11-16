<?php
require_once'connection.php';
if(isset($_POST['insert']))
{
	$did=$_POST['D_ID'];
	$dname=$_POST['D_Name'];
	$experience=$_POST['Experience'];
	$spcl=$_POST['Specialisation'];
	$gender=$_POST['Gender'];
	$schedule=$_POST['Schedule'];
	$language=$_POST['Language'];
	$emailid=$_POST['Email_ID'];
	
	$sql=mysqli_query($con,"insert into doctor (D_ID,D_Name,Experience,Specialisation,Gender,Schedule,Language,Email_ID)values('$did','$dname','$experience','$spcl','$gender','$schedule','$language')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='indexDoctor.php'</script>";
}

else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='indexDoctor.php'</script>";
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
<h3>Insert Doctor Record</h3>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>D_ID</b>
<input type="text" name="D_ID" class="form-control" required>
</div>
<div class="col-md-4"><b>D_Name</b>
<input type="text" name="D_Name" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Experience</b>
<input type="text" name="Experience" class="form-control" required>
</div>
<div class="col-md-4"><b>Specialisation</b>
<input type="text" name="Specialisation" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Gender</b>
<input type="text" name="Gender" class="form-control" required>
</div>
<div class="col-md-4"><b>Schedule</b>
<input type="text" name="Schedule" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Language</b>
<input type="text" name="Language" class="form-control" required>
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