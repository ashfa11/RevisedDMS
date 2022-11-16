<?php
// include database connection file
require_once'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Appoinment Details </title>
<meta name="viewport" content="width=device-width, initialscale=1">
<link
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.
css" rel="stylesheet">
<style type="text/css">
</style>
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
<h3>Appoinment Details</h3> <hr />
<a href="insertAppoinment.php"><button class="btn btn-primary"> Insert
Record</button></a>
<div class="table-responsive">
<table P_ID="mytable" class="table table-bordred table-striped">
<thead>
<th>#</th>
<th>P_ID</th>
<th>DATE</th>
<th>D_ID</th>
<th>Consultant_Fee</th>
<th>Delete</th>
</thead>
<tbody>
<?php
$sql =mysqli_query($con, "SELECT*FROM APPOINMENT");
$cnt=1;
$row=mysqli_num_rows($sql);
if($row>0){
while ($result=mysqli_fetch_array($sql)) {
?>
<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($result['P_ID']);?></td>
<td><?php echo htmlentities($result['DATE']);?></td>
<td><?php echo htmlentities($result['D_ID']);?></td>
<td><?php echo htmlentities($result['Consultant_Fee']);?></td>
<td><button class="btn btn-danger"><a href="deleteAppoinment.php?P_ID=<?php echo htmlentities($result['P_ID']);?>" class="text-light">Delete</a></button></td>
</tr>
<?php
$cnt++;
} } else { ?>
<tr>
<td colspan="9" style="color:red; font-weight:bold;textalign:center;"> No Record found</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</body>
</html>