<?php
include 'connection.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<div class="container my-4">
<h1>User List</h1>
<button type="submit" class="btn btn-primary" name="create"><a href="index.php" class="text-light">Create</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">operations</th>


    </tr>
  </thead>
  <tbody>

  <?php 
  
  $sql = "select * from user";
  $result = mysqli_query($con,$sql);

  if($result){
   
   while ($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['mobile'];
    $password = $row['password'];

    echo '<tr>
    <th scope="row">'. $id .'</th>
    <td>' . $name .'</td>
    <td>'.$email.'</td>
    <td>'.$phone.'</td>
    <td>'.$password.'</td>
    <td><button class="btn btn-success"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button></td>

  </tr>';
   }
  }
  
  ?>
    

  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>