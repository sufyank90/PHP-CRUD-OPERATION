<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile =$_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into user (name,email,mobile,password) values ('$name','$email','$mobile','$password')";
    $result = mysqli_query($con,$sql);
    if($result){
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
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <h1>Create User</h1>
        <button type="submit" class="btn btn-primary" name="create"><a href="view.php" class="text-light">View User</a></button>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="name" class="form-control" name="name" autocomplete="off" placeholder="Enter your Name" required>

            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Enter your Mobile number" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="mobile" autocomplete="off" placeholder="Enter your Phnoe Numer" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Create</button>
        </form>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>