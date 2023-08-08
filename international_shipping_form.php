<?php
	$fullname = $_POST['fullname'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$country = $_POST['country'];
	$addresstype = $_POST['addresstype'];
	$shippingpropose = $_POST['shippingpropose'];
	$producttype = $_POST['producttype'];
	$weight = $_POST['weight'];
	$quantity = $_POST['quantity'];

	//Database connection

	$con = new mysqli('localhost','root','','international_shipping');
	if($con->connect_error){
		die('Connection Failed : '.$con->connect_error);
	}
	else{
		$stmt = $con->prepare("insert into shipping_detail(fullname, phonenumber, email, address, country, addresstype, shippingpropose, producttype, weight, quantity) values(?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sisssssssi", $fullname, $phonenumber, $email, $address, $country, $addresstype, $shippingpropose, $producttype, $weight, $quantity);
		$stmt->execute();
		session_start();
    	$_SESSION['success_message'] = "Contact form saved successfully.";
		header('location: display_success.html');
		$stmt->close();
		$con->close();
	}
?>