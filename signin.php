<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
			<?php include'register.php'?>
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-5">
			<form action="#" method="POST">
			   <br><center><div class="imgcontainer">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOALqcMjby_cOSIr-3GFWRO_zY_j0qcB4zRA&usqp=CAU" alt="Avatar" class="avatar">
                </div></center><br>
				<center><div class="container">
					<label><strong>USERNAME</strong></label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div></center><br>
				<center><div class="container">
					<label><strong>PASSWORD</strong></label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div></center><br>
 
				<center><button name="login" class="btn btn-primary" ><strong>Login</strong></button></center><br><br>
 
			</form>
			<br />
			<?php include 'login.php'?>
		</div>
	</div>
 
</body>	
</html>