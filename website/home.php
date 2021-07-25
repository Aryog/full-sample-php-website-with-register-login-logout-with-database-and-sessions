<?php
session_start();
if(!isset($_SESSION['email']))
{
	header('location:log.php');}
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div classs="container">
<h2 class="text-center text-success"> Welcome <?php echo $_SESSION["email"]; ?></h2>
<a href="logout.php" style="text-decoration:none;">Log Out</a>
</div>
</body>
</html>