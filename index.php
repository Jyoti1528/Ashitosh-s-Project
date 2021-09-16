<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

		<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

.container {
  padding: 16px;
  background-color: white;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}

.container{
   background-image: url("https://www.gannett-cdn.com/-mm-/401620f2bd7be545c00e9428c318c97c81ef6b40/c=0-21-1970-1502&r=x404&c=534x401/local/-/media/2014/12/19/Nashville/Nashville/635545885529320267-158164567.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}

</style>
	</head>
<body>
	<div class="alert alert-info"><h1>Register</h1>
    <p>Please fill in this form to create an account.</p><hr></div>
			<form action="#" method="POST">
				<div class="container">
				<div class="form-group">
					<label>username</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>email</label>
					<input type="text" name="email" class="form-control" required="required"/>
				</div>
                <div class="form-group">
					<label>phoneNmber</label>
					<input type="text" name="phoneNumber" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>password</label>
					<input type="password" maxlength="12" name="password" class="form-control" required="required"/>
				</div>
				<hr><p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
   
	<button name="register" class="registerbtn">Register</button>
	
</div>
    
	<div class="container signin">
    <p>Already have an account? <a href="http://localhost/signin.php">Sign in</a>.</p>
    </div>
</div>
</form>
			<!-- <br />
			<?php include'register.php'?>
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-5">
			<form action="" method="POST">
				<div class="form-group">
					<label>username</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>password</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
 
				<center><button name="login" class="btn btn-primary">Login</button></center>
 
			</form>
			<br />
			<?php include 'login.php'?>
		</div>
	</div> -->
 
</body>	
</html>