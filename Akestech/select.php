<?php

  require_once 'db-connect.php';

$sql="select * from `Todo`";
$res=mysqli_query($conn,$sql);

if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $sql="update  `Todo` set completed='1' where id='$id'";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    echo"<script>alert('Tasks Submitted');location.href='select.php';</script>";
  }
  else
  {
    echo"<script>
  alert('Network issues');location.href='select.php';
</script>";
  }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>

  <style>
    
body {
  font-family: Arial, sans-serif;
}

.table-container {
  margin: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

.completed-true {
  color: green;
}

.completed-false {
  color: red;
}


  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>
  <div class="table-container">
    <td><a href="insert.php"><button type="submit" name="submit" class="form-control btn btn-primary">ADD DATA</button>   </a></td>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Description</th>
          <th>Task</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>


        <thead>
          <?php

          while($data=$res->fetch_assoc())
          {
          ?>
        <tr>
          <td><?php echo $data['id']?></td>
          <td><?php echo $data['title']?></td>
          <td><?php echo $data['description']?></td>
          <td>
            <?php
            if( $data['completed']==0)
            {
              ?>
             <a href="select.php?id=<?php echo $data['id'];?>"><button>Submit Task</button></a>
            <?php
          }
            else
            {
              echo "<input type='checkbox' checked/>";
            }
            ?>
          </td>
          <td><a href="Update.php?updateid=<?php  echo $data['id'] ?>"><button>Edit</button>   </a></td>
          <td><a href="delete.php?Deleteid=<?php  echo $data['id'] ?>"><button>Delete</button>   </a></td>
        </tr>
        <?php
        }
        ?>
      </thead>
      </tbody>
    </table>
  </div>
</body>
</html>






