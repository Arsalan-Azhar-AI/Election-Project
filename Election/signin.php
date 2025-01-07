<?php
$server="localhost";
$username="root";
$password="";
$database="election";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die('Error'.mysqli_connect_error());
}
$sql="SELECT * FROM `electiont`";
$result=mysqli_query($conn,$sql);
$exist='no';
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name=$_POST['name'];
  $roll_no=$_POST['roll_no'];
  $uni=$_POST['uni'];
$dep=$_POST['dep'];
if($result){
  while($r=mysqli_fetch_array($result)){
    if($r['Name']==$name && $r['Roll_no']==$roll_no){
      echo"<script>alert('Your account has been not created because user alreday exist')</script>";
      $exist='yes';
    }
  }
  if($exist=='no'){
 if($uni=="Univeristy of Haripur" && $dep=="IT") {
  $inse="INSERT INTO `electiont`(`Name`, `Roll_no`, `check`, `check1`, `check3`) VALUES ('$name','$roll_no','yes','yes','yes')";
  $inse1=mysqli_query($conn,$inse);
  if($inse1){
    echo"<script>alert('Your account has been created successfully')</script>";
  }
  else{
    echo"<script>alert('Your account has been not created please check your entered data')</script>";
  }
}
}
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Sign in</title>
</head>
<body>
    <h1>Welcome to IT Election Sign in page</h1>
    <h2>Please enter your valid information and enroll IT Election 2022_23</h2>
    <form  method="post">
    <div style="margin-left:20%; margin-right:20%;margin-bottom:10px;margin-top:5%;">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="roll_no" class="form-label">Roll No</label>
          <input type="text" class="form-control" id="roll_no" name="roll_no">
        </div>
        <div class="mb-3">
          <label for="ui" class="form-label">Univeristy Name</label>
          <input type="text" class="form-control" id="uni" name="uni">
        </div>
        <div class="mb-3">
          <label for="dep" class="form-label">Department</label>
          <input type="text" class="form-control" id="dep" name="dep">
        </div>
        <button name="fb" type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>