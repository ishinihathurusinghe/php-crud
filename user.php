<?php

  include 'connection.php';

  if(isset($_POST['submit'])){

    $name     =$_POST['name'];
    $email    = $_POST['email'];
    $mobile   =$_POST['mobile'];
    $password =$_POST['password'];

    $sql = "insert into 'crud1' (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";

    $result = mysqli_query($con,$sql);

    if($result){
        echo "data inserted successfully";
    }
    else{
        die(mysqli_error($con));
    }
  }

?>
 



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" my-5>

     <form  method="post">
          <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your name" name="name" autocomplete="off">
          </div>

          <div class="mb-3">
    <label >Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email" name="email" autocomplete="off">
          </div>


          <div class="mb-3">
    <label >Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
          </div>

          <div class="mb-3">
    <label >Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter your password" name="password" autocomplete="off">
          </div>


   
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>
    
  </body>
</html>
