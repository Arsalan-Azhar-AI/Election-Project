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
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST['name'];
$roll_no=$_POST['roll_no'];
$sql="SELECT * FROM `electiont`";
$result=mysqli_query($conn,$sql);
$check1="yes";
if($result){
  while($r=mysqli_fetch_array($result)){
    if ($r['Name']==$name && $r['Roll_no']==1) {
      header("location:result.php");
      return;
    }
else if($r['Name']==$name && $r['Roll_no']==$roll_no && $r['check']==$check1)
{
  $sql1="UPDATE `electiont` SET `check`='no' WHERE `Roll_no`='$roll_no'";
  $result1=mysqli_query($conn,$sql1);
  if($result1){
   session_start();
   $_SESSION['Name']=$name;
   $_SESSION['Roll_no']=$roll_no;
  header("location:welcome.php");
  }
}
}
}
}
// if(isset($_POST['fb'])){
//   header("location:result.php");
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <style>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>IT Computing Society Elections 2022_23</h1>
    <h2>Welcome Online Election Form</h2>
    <h4>We take election 2022 in UOH.Only an IT Department student Sign Up and caste vote,
        otherwise you can not Enroll.
    </h4>
    
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
        <button name="fb" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      <div class="m-5">
      <h6>If you are a student of UOH,and also belong to IT Department,Please click Sign in if your accont is not exists already.<a id="sin"href="signin.php">Sign in</a></h6>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
