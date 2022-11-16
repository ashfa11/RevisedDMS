<?php
// include database connection file
require_once'connection.php';
if(isset($_POST['update']))
{
// Get the row id
$rid=intval($_GET['D_ID']);
// Posted Values
	$dname=$_POST['D_Name'];
	$experience=$_POST['Experience'];
	$spcl=$_POST['Specialisation'];
	$gender=$_POST['Gender'];
	$schedule=$_POST['Schedule'];
	$language=$_POST['Language'];
	$emailid=$_POST['Email_ID'];
// Store Procedure for Updation
$sql=mysqli_query($con,"call doctor_update('$dname','$experience','$spcl','$gender','$schedule','$language','$emailid','$rid')");

// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='indexDoctor.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP CURD Operation using Stored Procedure </title>
<meta name="viewport" content="width=device-width, initialscale=1">
<link
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.
css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js "></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Update Doctor Record</h3>
<hr />
</div>
</div>
<?php
// Get the userid
$userid=intval($_GET['D_ID']);
$sql =mysqli_query($con, "call doctor_readrow('$userid')");
while ($result=mysqli_fetch_array($sql)) {
?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>D_Name</b>
<input type="text" name="D_Name" value="<?php echo
htmlentities($result['D_Name']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Experience</b>
<textarea type="text" name="Experience" required><?php echo
htmlentities($result['Experience']);?></textarea>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Specialisation</b>
<input type="text" name="Specialisation" value="<?php echo
htmlentities($result['Specialisation']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Gender</b>
<input type="text" name="Gender" value="<?php echo
htmlentities($result['Gender']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-8"><b>Schedule</b>
<input type="text" name="Schedule" value="<?php echo
htmlentities($result['Schedule']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-8"><b>Language</b>
<input type="text" name="Language" value="<?php echo
htmlentities($result['Language']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Email_ID</b>
<input type="email" name="Email_ID" value="<?php echo
htmlentities($result['Email_ID']);?>" class="form-control" required>
</div>
</div>
<?php } ?>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div>
</form>
</div>
</div>
</body>
</html>