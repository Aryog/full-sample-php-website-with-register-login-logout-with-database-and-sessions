<?php
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$subject=$_POST['subject'];
	$emailfrom=$_POST['email'];
	$message = $_POST['message'];
    $emailto="yogesh000aryal@gmail.com";
    $headers= "From:".$emailfrom;
    $txt="you have received an email from your website by".$name.".\n\n".$message;
    
    

	if(mail($emailto,$subject,$txt,$headers))
	{
	    echo "<h1>mail sent</h1>";
	}

	header('Location: index.html');
}
?>