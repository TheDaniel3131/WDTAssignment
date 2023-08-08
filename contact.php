<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv="X-UA Compatible" content="width=device-width, initial-scale=1.0">
	<title>Contact Form | Logistics Association</title>
	<link rel="stylesheet" href="contactstyle.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@700&family=Poppins:wght@600&family=Rubik:wght@600&family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
	<br>
	<br>
	<div class="container">
		<br>
		<h1><b><center><u>Contact Us</u></center></b></h1>
	<!-- 	<form action="https://formsubmit.co/1d699c4a9af1b353064292455f3cacfd" method="POST"> -->
		<form action="https://formspree.io/f/xdobwdpe" method="POST" target="_blank">
				<input type="text" name="Name" placeholder="Full Name" required>
				<input type="email" name="Email" placeholder="Email" required>
				<select name="Continent">
					<option selected="true" disabled="disabled">Please Select Your Country</option>
					<option>Malaysia</option>
					<option>Singapore</option>
					<option>USA</option>
					<option>UK</option>
					<option>Japan</option>
					<option>Other</option>
				</select>
				<textarea name="Message" placeholder="Message" required></textarea>
				<br>
				<button type="submit">Submit</button>
		</form>
	</div>
	<br>
</body>
</html>