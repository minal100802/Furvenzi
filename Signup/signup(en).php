<?php
	include '../dbcon.php';

    if(!$con)
	{
		die("Connection to this database failed due to ".mysqli_connect_error());
	}

	$name = $_POST['enterprisename'];
	$surname = 'enterprise';
    $email = $_POST['email'];
	$password = $_POST['password'];
    $mobile = $_POST['mobile'];
	$pcode = $_POST['postal_code'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `login` (`name`, `surname` , `email` , `password`, `mobile` , `postal_code` , `address`) VALUES ('$name', '$surname', '$email' , '$password' , '$mobile', '$pcode' , '$address');";

    if($con->query($sql)==true)
	{
		header("location: ../Signin/signin(en).php");
		//echo "Succesfully Registered";
	}
	else {
		header("location : signup(en)1.php");
		//echo "ERROR : $sql <br> $con->error";
    }

	//$con->close();
?>