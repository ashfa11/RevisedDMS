<?php
// include database connection file
require_once'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Patient Details </title>
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
<h3>Patient Details</h3> <hr />
<a href="insertpatient.php"><button class="btn btn-primary"> Insert
Record</button></a>
<div class="table-responsive">
<table P_ID="mytable" class="table table-bordred table-striped">
<thead>
<th>#</th>
<th>Name</th>
<th>Address</th>
<th>Age</th>
<th>Sex</th>
<th>Blood_Group</th>
<th>Mobile_Num</th>
<th>Category</th>
<th>Email_ID</th>
<th>Update</th>
<th>Delete</th>
</thead>
<tbody>
<?php
$sql =mysqli_query($con, "SELECT*FROM PATIENT");
$cnt=1;
$row=mysqli_num_rows($sql);
if($row>0){
while ($result=mysqli_fetch_array($sql)) {	
?>
<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($result['Name']);?></td>
<td><?php echo htmlentities($result['Address']);?></td>
<td><?php echo htmlentities($result['Age']);?></td>
<td><?php echo htmlentities($result['Sex']);?></td>
<td><?php echo htmlentities($result['Blood_Group']);?></td>
<td><?php echo htmlentities($result['Mobile_Num']);?></td>
<td><?php echo htmlentities($result['Category']);?></td>
<td><?php echo htmlentities($result['Email_ID']);?></td>
<td><a href="updatePatient.php?P_ID=<?php echo
htmlentities($result['P_ID']);?>"><button class="btn btn-primary btnxs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
<td><button class="btn btn-danger"><a href="deletePatient.php?P_ID=<?php echo htmlentities($result['P_ID']);?>" class="text-light">Delete</a></button></td>
</tr>
<?php
// for serial number increment
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