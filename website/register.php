<html>
<head>
<title>
     User Registration </title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylelogreg.css">
</head>
<body>
<div class="container">
<div class="login-box">
    <div class="row">
	<div class="col-md-6 register">
	   <h2> Register here</h2>
	<form action="registration.php" method="post">
	  
	  <div class="form-group">
	  <label>Username</label>
	  <input type="text" name="username" class="form-control" placeholder="Username"  required>
	  </div>
	  <div class="form-group">
	  <label>Email</label>
	  <input type="email" name="email" class="form-control" placeholder="Email"  required>
	  </div>
	  <div class="form-group">
	  <label>Password</label>
	  <input type="password" name="password" class="form-control" placeholder="Password"  required>
	  </div>
	  <div class="form-group">
	  <label>Confirm Password</label>
	  <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password"  required>
	  </div>
	  <button type="submit" name="submit" class="btn btn-primary">Register</button>
	  </form>
	  </div>
	  </div>
	</div>
	</div>

</body>
</html>