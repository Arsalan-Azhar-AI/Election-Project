<?php
$server="localhost";
$user="root";
$password1="";
$dbase="store";
$conn1=mysqli_connect($server,$user,$password1,$dbase);
$sql2="SELECT * FROM `storet`";
$result1=mysqli_query($conn1,$sql2); 

$can1=mysqli_fetch_assoc($result1);
echo "The   vote   of     ".$can1['Name']."   is   ".$can1['vote'];
echo"<br>";echo"<br>";echo"<br>";
$can2=mysqli_fetch_assoc($result1);
echo "The    vote   of     ".$can2['Name']."   is  ".$can2['vote'];echo"<br>";echo"<br>";echo"<br>";
$can3=mysqli_fetch_assoc($result1);
echo "The    vote   of     ".$can3['Name']."   is  ".$can3['vote'];echo"<br>";echo"<br>";echo"<br>";
$can4=mysqli_fetch_assoc($result1);
echo "The    vote   of     ".$can4['Name']."   is  ".$can4['vote'];echo"<br>";echo"<br>";echo"<br>";
?>