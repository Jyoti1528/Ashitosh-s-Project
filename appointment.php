<?php
	require 'conn.php';
 
	if(ISSET($_POST['appointment'])){
		$Fullname = $_POST['Fullname'];
		$Gender = $_POST['Gender'];
		$PhoneNumber = $_POST['PhoneNumber'];
		$DOB = date('Y-m-d',strtotime($_POST['DOB']));
		$Email = $_POST['Email'];
		$Doctors = $_POST['Doctors'];
		$Date = date('Y-m-d',strtotime($_POST['Date']));
		$Time = $_POST['Time'];
 
		mysqli_query($conn, "INSERT INTO `appoint` VALUES('', '$Fullname','$Gender', '$PhoneNumber', '$DOB','$Email','$Doctors','$Date','$Time')") or die(mysqli_error());
		echo "<h3 class='text-success'>User appointment has been booked!</h3> <h3>After Booking an appointment Kindly <a  href='https://forms.gle/U3vdVfsuB4BbNGsx5'>CLICK HERE</a> to confirm your booking! </h3>";
	}
?>