<?php
 if (isset($_POST['submit']))
 {
 session_start();
 
 $conn = mysqli_connect("localhost","root","","login");
 if(!$conn)
 {
 echo"not connected";
 }
 
 $email=$_POST['email'];
 $pass=$_POST['password'];
 
 
$result = mysqli_query($conn,"Select * from signin where email='$email' && password='$pass'");
$rows = mysqli_num_rows($result);
if($rows>0)
{
	$_SESSION['email']=$email;
header('location:home.php');
}
else{
 header('location:log.php');
}
 }
?>