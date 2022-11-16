<?php
require_once'connection.php';
if(isset($_POST['insert']))
{
	$pid=$_POST['P_ID'];
	$did=$_POST['D_ID'];
	$remark=$_POST['Remark'];
	$medicine=$_POST['Medicine'];
	$advice=$_POST['Advice'];
	
	$sql=mysqli_query($con,"insert into prescription values('$pid','$did','$remark','$medicine','$advice')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='indexPrescription.php'</script>";
}

else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='indexPrescription.php'</script>";
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
<h3>Insert Prescription Record</h3>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>P_ID</b>
<input type="text" name="P_ID" class="form-control" required>
</div>
<div class="col-md-4"><b>D_ID</b>
<input type="text" name="D_ID" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Remark</b>
<textarea class="form-control" name="Remark" required></textarea>
</div>
<div class="col-md-4"><b>Medicine</b>
<textarea class="form-control"  name="Medicine"  required></textarea>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Advice</b>
<textarea class="form-control" name="Advice"  required></textarea>
</div>
</div>

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>P_ID</th>
<th>Name</th>
</thead>
<tbody>
<?php
$sql =mysqli_query($con, "SELECT P_ID,Name FROM PATIENT");
$row=mysqli_num_rows($sql);
if($row>0){
while ($result=mysqli_fetch_array($sql)) {
?>
<tr>
<td><?php echo htmlentities($result['P_ID']);?></td>
<td><?php echo htmlentities($result['Name']);?></td>
</tr>
<?php
} } else { ?>
<tr>
<td colspan="9" style="color:red; font-weight:bold;textalign:center;"> No Record found</td>
</tr>
<?php } ?>
</tbody>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>