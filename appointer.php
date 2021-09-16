<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<style>
			body {
  font-family: Arial, Helvetica, sans-serif;
  
}

.box {
        width: 350px;
        height: 30px;
        border: 1px solid #999;
        font-size: 18px;
        color: #1c87c9;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px #ccc;
      }

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
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

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.regbtn {
  background-color: #04AA6D;
  color: white;
  padding: 25px 20px;
  padding-bottom:30px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  opacity: 0.9;
  width:100%;
  font-size:17px;
  
}
.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}


.container{
   background-image: url("https://wallpaperaccess.com/full/960592.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}

		</style>
	</head>
<body>
			<form method="POST" action="#">
				<div class="container">
				<h1>Patients Personal Details</h1>
                <p>Fill the form below and we will get back soon to you for more updates.</p>
                <hr>
				<div class="form-group">
					<label>Fullname</label>
					<input type="text" class="form-control" name="Fullname" required="required"/>
				</div>
				<div class="form-group">
					<label>Gender</label>
					<input type="text" class="form-control" name="Gender" required="required"/>
				</div>
				<div class="form-group">
					<label>PhoneNumber</label>
					<input type="text" class="form-control" name="PhoneNumber" required="required"/>
				</div>
				<div class="form-group">
					<label>DOB</label><br>
					<input type="date" class="form-control" name="DOB" required="required"/>
				</div><br>
				<div class="form-group">
					<label>Email</label><br>
					<input type="text" class="form-control" name="Email" required="required"/>
				</div>
				<div class="form-group">
					<label>Doctors</label><br>
					
    <select name="Doctors" class="box">
      <option>Dr Santosh jain (Rs.1500)</option>
      <option>Dr Riya singh (Rs.3500)</option>
      <option>Dr Rohit kumar (Rs.2000)</option>
      <option>Dr Ananya singh (Rs.2500)</option>
      <option>Dr Vicky Grovar (Rs.3500)</option>
      <option>Dr Rajendra Gupta (Rs.1600)</option>
      <option>Dr khushi Shah (Rs.4500)</option>
      <option>Dr laxman Tiwari (Rs.3000)</option>
      <option>Dr Priya hoda (Rs.4500)</option>
      <option selected>Select a doctor</option>
    </select><br><br>
</div>
<div class="form-group"><br>
					<label>Date</label><br>
					<input type="date" class="form-control" name="Date" required="required"/>
				</div><br>
				<div class="form-group">
					<label>Time</label><br>
					<input type="time" class="form-control" name="Time" required="required"/>
				</div>
				<p><input type="checkbox" id="toggle"/> I agree with the terms and conditions.</p>
				<button class="regbtn" id="appointment" name="appointment">Book an appointment</button>
        
        </div>
</form>
		</div>
		<div class="col-md-6">
		<?php include 'appointment.php'?>
		</div>
	</div>
<script>

var checkbox = document.getElementById("toggle");
var appointment = document.getElementById("appointment");
appointment.disabled = true;
checkbox.onchange = function(){
	appointment.disabled = !this.checked;
}
</script>	
</body>
</html>