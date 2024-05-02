<?php
if (isset($_POST['submit'])){
require_once 'db-connect.php';
$name=$_POST['Title'];
$Description=$_POST['Description'];
$query="insert `Todo`(title,Description)values('$name','$Description')";
$res=mysqli_query($conn,$query);
if ($res>0) {
	echo"<script>
	alert('Data add successfully');location.href='select.php';
</script>";


}

	
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
    
    <div class="mb-3">
      <label for="taskTitle" class="form-label">Title</label>
      <input type="text" class="form-control" id="taskTitle" name="Title">
    </div>
    <div class="mb-3">
      <label for="taskDescription" class="form-label">Description</label>
      <textarea class="form-control" id="taskDescription" name="Description"></textarea>
    </div>
   
    <button type="submit" name="submit" class="form-control btn btn-primary">Submit</button>
  </form>
</div>

<!-- Bootstrap JS -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
