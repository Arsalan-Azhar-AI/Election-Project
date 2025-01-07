<?php
$servername="localhost";
$username="root";
$password="";
$database="election";
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="SELECT * FROM `electiont`";
$result=mysqli_query($conn,$sql);
$server="localhost";
$user="root";
$password1="";
$dbase="store";
$conn1=mysqli_connect($server,$user,$password1,$dbase);
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>welcome</title>
   <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <h1>Welcome to Election online Plateform</h1>
    <h2>Please Caste Vote</h2>
    <form action="welcome.php" method="post">
    <h1 class="ps">President Seats</h1>
<img class="img1"src="vote.jpg" alt="">
<img class="img2"src="vote.jpg" alt="">
    <h1 class='can1'>Canidate1</h1> 
    <h1 class='can2'>Canidate2</h1>
  <button id="b1" class="btn btn-primary btn1" name="button1" type="submit">Vote</button>
  <button id="b2" class="btn btn-primary btn2" name="button2" type="submit">Vote</button>
  <h1 style="text-align:center;"class="vps">Vice President Seats</h1>
  <h1 class='can3'>Canidate1</h1> 
  <h1 class='can4'>Canidate2</h1>
  <img class="img3"src="vote.jpg" alt="">
<img class="img4"src="vote.jpg" alt="">
  <button id="b3"  class="btn btn-primary btn3 " name="button3" type="submit">Vote</button>
  <button id="b4" class="btn btn-primary  btn4" name="button4" type="submit">Vote</button>
  <div style="position:absolute; left:47%; top:140%; width: 200px;">
  <button id="b5" class="btn btn-primary  btn5" name="button5" type="submit">Done</button>
  </div>
</form>
     <?php
     if(isset($_POST['button5'])){
      header("location:index.php");
     }
     if(isset($_POST['button1'])){
       while($r=mysqli_fetch_array($result)){
       if($r['Name']==$_SESSION['Name'] && $r['Roll_no']==$_SESSION['Roll_no'] && $r['check1']!='no')
       {
         $rn=$_SESSION['Roll_no'];
         $sql1="UPDATE `electiont` SET `check1`='no' WHERE `Roll_no`='$rn'";
         $result1=mysqli_query($conn,$sql1);  
         $sql2="SELECT * FROM `storet`";
$result1=mysqli_query($conn1,$sql2);    
         $row=mysqli_fetch_assoc($result1);
       $num1= $row['vote'];
       $num2=1;
       $num3=$num1+$num2;
       $sql3="UPDATE `storet` SET `vote`='$num3' WHERE `sr`='1' AND `Name`='canidate1'";
      mysqli_query($conn1,$sql3);
      echo "<script>b1.style.background='red';</script>";
        }
  }
}
if(isset($_POST['button2'])){
  while($r=mysqli_fetch_array($result)){
  if($r['Name']==$_SESSION['Name'] && $r['Roll_no']==$_SESSION['Roll_no'] && $r['check1']!='no')
  {
    $rn=$_SESSION['Roll_no'];
    $sql1="UPDATE `electiont` SET `check1`='no' WHERE `Roll_no`='$rn'";
    $result1=mysqli_query($conn,$sql1);  
    $sql2="SELECT * FROM `storet`";
$result1=mysqli_query($conn1,$sql2);    
mysqli_fetch_assoc($result1);
    $row=mysqli_fetch_assoc($result1);
  $num1= $row['vote'];
  $num2=1;
  $num3=$num1+$num2;
  $sql3="UPDATE `storet` SET `vote`='$num3' WHERE `sr`='2' AND `Name`='canidate2'";
 mysqli_query($conn1,$sql3);
 echo "<script>b2.style.background='red';</script>";
   }
}
}
if(isset($_POST['button3'])){
  while($r=mysqli_fetch_array($result)){
  if($r['Name']==$_SESSION['Name'] && $r['Roll_no']==$_SESSION['Roll_no'] && $r['check3']!='no')
  {
    $rn=$_SESSION['Roll_no'];
    $sql1="UPDATE `electiont` SET `check3`='no' WHERE `Roll_no`='$rn'";
    $result1=mysqli_query($conn,$sql1);  
    $sql2="SELECT * FROM `storet`";
$result1=mysqli_query($conn1,$sql2);    
mysqli_fetch_assoc($result1);
mysqli_fetch_assoc($result1);
    $row=mysqli_fetch_assoc($result1);
  $num1= $row['vote'];
  $num2=1;
  $num3=$num1+$num2;
  $sql3="UPDATE `storet` SET `vote`='$num3' WHERE `sr`='3' AND `Name`='canidate3'";
 mysqli_query($conn1,$sql3);
 echo "<script>b3.style.background='red';</script>";
   }
}
}
if(isset($_POST['button4'])){
  while($r=mysqli_fetch_array($result)){
  if($r['Name']==$_SESSION['Name'] && $r['Roll_no']==$_SESSION['Roll_no'] && $r['check3']!='no')
  {
    $rn=$_SESSION['Roll_no'];
    $sql1="UPDATE `electiont` SET `check3`='no' WHERE `Roll_no`='$rn'";
    $result1=mysqli_query($conn,$sql1);  
    $sql2="SELECT * FROM `storet`";
$result1=mysqli_query($conn1,$sql2);    
mysqli_fetch_assoc($result1);
mysqli_fetch_assoc($result1);
mysqli_fetch_assoc($result1);
    $row=mysqli_fetch_assoc($result1);
  $num1= $row['vote'];
  $num2=1;
  $num3=$num1+$num2;
  $sql3="UPDATE `storet` SET `vote`='$num3' WHERE `sr`='4' AND `Name`='canidate4'";
 mysqli_query($conn1,$sql3);
 echo "<script>b4.style.background='red';</script>";
   }
}
}
     ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>