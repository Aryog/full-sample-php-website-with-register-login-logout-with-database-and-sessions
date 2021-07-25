<html>
<?php
 if (isset($_POST['submit']))
 {
 session_start();
 
 $conn = mysqli_connect("localhost","root","","login");
 if(!$conn)
 {
 echo"not connected";
 }
 $name=$_POST['username'];
 $email=$_POST['email'];
 $pass=$_POST['password'];
 $cpass=$_POST['cpassword'];
 if ($pass!=$cpass)
 {
	 echo "password is not matching";
 }
 else{
$result = mysqli_query($conn,"Select * from signin where email='$email' && password='$pass'");
$rows = mysqli_num_rows($result);
if($rows>0)
{
echo "Email or password already exists<h3> PLEASE LOGIN </h3>";
}
else
{
    $input = "INSERT INTO signin (username,email,password) VALUES('$name','$email','$pass')";
         if(mysqli_query($conn, $input))
            { 
              header('location:log.php');
            }
else
{
	echo "not inserted";
}
}
}
}

?>
</html>