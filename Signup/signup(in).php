<?php
	include '../dbcon.php';

    if(!$con)
	{
		die("Connection to this database failed due to ".mysqli_connect_error());
	}

	$name = $_POST['first_name'];
	$surname = $_POST['last_name'];
    $email = $_POST['email'];
	$password = $_POST['password'];
    $mobile = $_POST['mobile'];
	$pcode = $_POST['postal_code'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `signin` (`name`, `surname` , `email` , `password`, `mobile` , `postal_code` , `address`) VALUES ('$name', '$surname', '$email' , '$password' , '$mobile', '$pcode' , '$address');";

    if($con->query($sql)==true)
	{
		header("location: ../Signin/signin(in).php");
		//echo "Succesfully Registered";
	}
	else {
		header("location : signup(in)1.php");
		//echo "ERROR : $sql <br> $con->error";
    }

	//$con->close();
?>