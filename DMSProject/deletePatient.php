<?php
require_once'connection.php';
if(isset($_GET['P_ID']))
{
	$id=intval($_GET['P_ID']);
	$sql=mysqli_query($con,"DELETE FROM PATIENT WHERE P_ID=$id");
	
	if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='indexPatient.php'</script>";
}

else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='indexPatient.php'</script>";
}
}
?>