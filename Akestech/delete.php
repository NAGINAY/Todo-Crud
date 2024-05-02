<?php


if (isset($_GET['Deleteid'])) {
$id=$_GET['Deleteid'];
require_once 'db-connect.php';
	$sql="delete  from `Todo` where id=$id";
	$res=mysqli_query($conn,$sql);

	if ($res>0) {

echo"<script>
	alert('Data delete successfully');location.href='select.php';
</script>";
		
	}
	else{
		echo"<script>
	alert('Occerd error');location.href='select.php';
</script>";


	}
}
else{
		echo"<script>
	alert('Occerd error');location.href='select.php';
</script>";


	}

?>