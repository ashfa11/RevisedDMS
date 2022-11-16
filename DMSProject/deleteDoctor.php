<?php
require_once'connection.php';
if(isset($_GET['D_ID']))
{
	$rid=intval($_GET['D_ID']);
	$sql=mysqli_query($con,"DELETE FROM ADMIN WHERE A_ID=$id");
	
	if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='indexDoctor.php'</script>";
}

else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='indexDoctor.php'</script>";
}
}
?>