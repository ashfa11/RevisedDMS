<?php
// include database connection file
require_once'connection.php';
if(isset($_POST['update']))
{
// Get the row id
$rid=intval($_GET['P_ID']);
// Posted Values
	//$pid=$_POST['P_ID'];
	$did=$_POST['D_ID'];
	$remark=$_POST['Remark'];
	$medicine=$_POST['Medicine'];
	$advice=$_POST['Advice'];
// Store Procedure for Updation
$sql=mysqli_query($con,"call prescription_update('$did','$remark','$medicine','$advice','$rid')");

// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='indexPrescription.php'</script>";
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
<h3>Update Prescription Record</h3>
<hr />
</div>
</div>
<?php
// Get the userid
$userid=intval($_GET['P_ID']);
$sql =mysqli_query($con, "call prescription_readrow('$userid')");
while ($result=mysqli_fetch_array($sql)) {
?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>D_ID</b>
<input type="text" name="D_ID" value="<?php echo
htmlentities($result['D_ID']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>P_ID</b>
<input type="text" name="P_ID" value="<?php echo
htmlentities($result['P_ID']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Remark</b>
<textarea type="text" name="Remark" required><?php echo
htmlentities($result['Remark']);?></textarea>
</div>
<div class="col-md-4"><b>Medicine</b>
<textarea type="text" name="Medicine" required><?php echo
htmlentities($result['Medicine']);?></textarea>
</div>
</div>
<div class="row">
<div class="col-md-8"><b>Advice</b>
<textarea type="text" name="Advice" required><?php echo
htmlentities($result['Advice']);?></textarea>
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