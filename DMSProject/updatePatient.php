<?php
// include database connection file
require_once'connection.php';
if(isset($_POST['update']))
{
$rid=intval($_GET['P_ID']);
// Posted Values
    $name=$_POST['Name'];
	$address=$_POST['Address'];
	$age=$_POST['Age'];
	$sex=$_POST['Sex'];
	$bloodgroup=$_POST['Blood_Group'];
	$mobilenum=$_POST['Mobile_Num'];
	$category=$_POST['Category'];
	$emailid=$_POST['Email_ID'];
// Store Procedure for Updation
$sql=mysqli_query($con,"call patient_update('$name','$address','$age','$sex','$bloodgroup','$mobilenum','$category','$emailid','$rid')");

// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='indexPatient.php'</script>";
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
<h3>Update Patient Record</h3>
<hr />
</div>
</div>
<?php
// Get the userid
$userid=intval($_GET['P_ID']);
$sql =mysqli_query($con, "call patient_readrow('$userid')");
while ($result=mysqli_fetch_array($sql)) {
?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Name</b>
<input type="text" name="Name" value="<?php echo
htmlentities($result['Name']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Address</b>
<textarea type="text" name="Address" required><?php echo
htmlentities($result['Address']);?></textarea>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Age</b>
<input type="text" name="Age" value="<?php echo
htmlentities($result['Age']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Sex</b>
<input type="text" name="Sex" value="<?php echo
htmlentities($result['Sex']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-8"><b>Blood_Group</b>
<input type="text" name="Blood_Group" value="<?php echo
htmlentities($result['Blood_Group']);?>" class="form-control" required>
</div>
<div class="col-md-8"><b>Mobile_Num</b>
<input type="text" name="Mobile_Num" value="<?php echo
htmlentities($result['Mobile_Num']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-8"><b>Category</b>
<input type="text" name="Category" value="<?php echo
htmlentities($result['Category']);?>" class="form-control" required>
</div>
<div class="row">
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