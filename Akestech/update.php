<?php
if (isset($_GET['updateid'])) {
	$id=$_GET['updateid'];
	require_once 'db-connect.php';
$sql1="select * from `Todo` where id=$id";
$res1=mysqli_query($conn,$sql1);





if (isset($_POST['submit'])){
require_once 'db-connect.php';
$title=$_POST['Title'];
$Description=$_POST['Description'];
$query="update `Todo` set title='$title',Description='$Description' where id='$id'";
$res=mysqli_query($conn,$query);
if ($res>0) {
	echo"<script>
	alert('Data update successfully');location.href='select.php';
</script>";


}

	
}

}
else{
	echo"<script>
	alert('occerd error');location.href='select.php';
</script>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <form method="post" action="#">
      <?php

          while($data=$res1->fetch_assoc())
          {
          ?>
    <div class="mb-3">
      <label for="taskTitle" class="form-label">Title</label>
      <input type="text" class="form-control" value="<?php  echo $data['title'];?>" id="taskTitle" name="Title">
    </div>
    <div class="mb-3">
      <label for="taskDescription" class="form-label">Description</label>
      <textarea class="form-control" value="<?php  echo $data['description']; ?>" id="taskDescription" name="Description"><?php  echo $data['description']; ?></textarea>
    </div>
   
    <button type="submit" name="submit" class="form-control btn btn-primary">Submit</button>

 <?php
        }
        ?>

  </form>
</div>

<!-- Bootstrap JS -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
