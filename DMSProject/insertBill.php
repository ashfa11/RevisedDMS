<?php
require_once'connection.php';
if(isset($_POST['insert']))
{
	$bno=$_POST['Bill_No'];
	$pid=$_POST['P_ID'];
	$date=$_POST['Date'];
	$amount=$_POST['Amount'];
	
	$sql=mysqli_query($con,"insert into bill values('$bno','$pid','$date','$amount')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='indexBill.php'</script>";
}

else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='indexBill.php'</script>";
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
<h3>Insert Bill Record</h3>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Bill_No</b>
<input type="text" name="Bill_No" class="form-control" required>
</div>
<div class="col-md-4"><b>P_ID</b>
<input type="text" name="P_ID" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Date</b>
<input type="text" name="Date" class="form-control" required>
</div>
<div class="col-md-4"><b>Amount</b>
<input type="text" name="Amount" class="form-control" required>
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