<?php
$servername="localhost";
$username="root";
$password="";
$database="phptut";
 //creating database connection
 $coonect=mysqli_connect($servername,$username,$password,$database);
 if(!coonect){
 	die("Failed to connect!!" . mysqli_connect_error());
 }
 else{
 	echo "connection sucessfull";

 }
$sql="INSERT INTO `USERS` (`sno`,`name`,`age`,`salary`) VALUES('2','rAKESH','33','4000')";
 if(mysqli_query($coonect, $sql)){
 	echo "]sucess";
 }
 else{
 	echo "error" . mysqli_error($coonect);	
 }
 mysqli_close($coonect);
?>
