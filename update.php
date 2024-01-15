<?php
include 'connection.php';
$id =$_GET['updateid'];

$sql = "Select * from user where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile =$_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `user` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo 'Updated';
        header('location:view.php');
    }
    else{
        echo "fail";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <h1>Update Record</h1>
        <button type="submit" class="btn btn-primary" name="create"><a href="view.php" class="text-light">View</a></button>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="name" class="form-control" name="name" autocomplete="off" value=<?php echo $name ?>>

            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" autocomplete="off" value=<?php echo $email ?>>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="mobile" autocomplete="off" placeholder="Enter your Mobile number" value=<?php echo $mobile ?>>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" autocomplete="off" value=<?php echo $password ?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>