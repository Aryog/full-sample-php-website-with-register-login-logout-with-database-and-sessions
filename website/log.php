<html>
<head>
<title>
     User Log In </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="stylelogreg.css">
</head>
<body>
<div class="container">
<div class="login-box">
    <div class="row">
	<div class="col-md-6 login">
	   <h2> Login here</h2>
	<form action="login.php" method="post">
	  <div class="form-group">
	  <label>Email</label>
	  <input type="email" name="email" class="form-control" placeholder="Your Email"/>
	  </div>
	  <div class="form-group">
	  <label>Password</label>
	  <input type="password" name="password" class="form-control" placeholder="Your Password"  required>
	  </div>
	  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="remember" />
  <label class="form-check-label" for="remember">
    Remember Password
  </label>
</div>
	  <button type="submit" name="submit" class="btn btn-primary">Login</button>
	  </form>
	  </div>
	  </div>
	</div>
	</div>
</body>
</html>
	  
	
	