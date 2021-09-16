<?php
	require_once'con2.php';
	if(ISSET($_POST['register'])){
		header('location: appointer.php');
		$username=$_POST['username'];
		$email=$_POST['email'];
        $phoneNumber=$_POST['phoneNumber'];
		$password=$_POST['password'];
 
 
		mysqli_query($conn, "INSERT INTO `registration` VALUES('', '$username','$email','$phoneNumber','$password')") or die(mysqli_error());
 
 
		echo "<center><h4 class='text-success'>Successfully registered!</h4></center>";
	}
?>