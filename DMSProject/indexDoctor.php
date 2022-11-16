<?php
// include database connection file
require_once'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Doctor Details </title>
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
<h3>Doctor Details</h3> <hr />
<a href="insertDoctor.php"><button class="btn btn-primary"> Insert
Record</button></a>
<div class="table-responsive">
<table D_ID="mytable" class="table table-bordred table-striped">
<thead>
<th>#</th>
<th>D_ID</th>
<th>D_Name</th>
<th>Experience</th>
<th>Specialisation</th>
<th>Gender</th>
<th>Schedule</th>
<th>Language</th>
<th>Email_ID</th>
<th>Update</th>
<th>Delete</th>
</thead>
<tbody>
<?php
$sql =mysqli_query($con, "SELECT * FROM DOCTOR");
$cnt=1;
$row=mysqli_num_rows($sql);
if($row>0){
while ($result=mysqli_fetch_array($sql)) {
?>
<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($result['D_ID']);?></td>
<td><?php echo htmlentities($result['D_Name']);?></td>
<td><?php echo htmlentities($result['Experience']);?></td>
<td><?php echo htmlentities($result['Specialisation']);?></td>
<td><?php echo htmlentities($result['Gender']);?></td>
<td><?php echo htmlentities($result['Schedule']);?></td>
<td><?php echo htmlentities($result['Language']);?></td>
<td><?php echo htmlentities($result['Email_ID']);?></td>
<td><a href="updateDoctor.php?D_ID=<?php echo
htmlentities($result['D_ID']);?>"><button class="btn btn-primary btnxs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
<td><button class="btn btn-danger"><a href="deleteDoctor.php?D_ID=<?php echo htmlentities($result['D_ID']);?>" class="text-light">Delete</a></button></td>
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