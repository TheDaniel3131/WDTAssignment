<?php
	$fullname = $_POST['fullname'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$addresstype = $_POST['addresstype'];
	$shippingtype = $_POST['shippingtype'];
	$producttype = $_POST['producttype'];
	$weight = $_POST['weight'];
	$quantity = $_POST['quantity'];

	//Database connection

	$con = new mysqli('localhost','root','','domestic_shipping');
	if($con->connect_error){
		die('Connection Failed : '.$con->connect_error);
	}
	else{
		$stmt = $con->prepare("insert into shipping_detail(fullname, phonenumber, email, address, addresstype, shippingtype, producttype, weight, quantity) values(?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sissssssi", $fullname, $phonenumber, $email, $address, $addresstype, $shippingtype, $producttype, $weight, $quantity);
		$stmt->execute();
		header('location: display_success.html');
		$stmt->close();
		$con->close();
	}
?>