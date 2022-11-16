<?php
require_once'connection.php';
if(isset($_POST['insert']))
{
	$pid=$_POST['P_ID'];
	$date=$_POST['Date'];
	$did=$_POST['D_ID'];
	$cfee=$_POST['Consultant_Fee'];
	
	$sql=mysqli_query($con,"INSERT INTO APPOINMENT(P_ID,Date,D_ID,Consultant_Fee) values('$pid','$date','$did','$cfee') ");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='indexAppointment.php'</script>";
}

else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='indexAppoinment.php'</script>";
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
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><
/script>
<script
src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Insert Appoinment Record</h3>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>P_ID</b>
<input type="text" name="P_ID" class="form-control" required>
</div>
<div class="col-md-4"><b>Date</b>
<input type="text" name="Date" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>D_ID</b>
<input name="D_ID" class="form-control" required>
</div>
<div class="col-md-4"><b>Consultant_Fee</b>
<input type="text" name="Consultant_Fee" class="form-control" required>
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
<th>D_ID</th>
<th>D_Name</th>
<th>Specialisation</th>
</thead>
<tbody>
<?php
$sql =mysqli_query($con, "SELECT D_ID,D_Name,Specialisation FROM DOCTOR");
$row=mysqli_num_rows($sql);
if($row>0){
while ($result=mysqli_fetch_array($sql)) {
?>
<tr>
<td><?php echo htmlentities($result['D_ID']);?></td>
<td><?php echo htmlentities($result['D_Name']);?></td>
<td><?php echo htmlentities($result['Specialisation']);?></td>
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