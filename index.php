<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="test.jpg">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  	<!-- poppins font-->
  	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<!-- ubuntu font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Rubik:wght@600&family=Ubuntu&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<!-- OLD LINK-->
	<!-- 	<link rel="https://fonts.google.com/icons?selected=Material+Icons" rel="stylesheet"> -->
	<!-- NEW LINK-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
     rel="stylesheet">
    <!-- JAVASCRIPT JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  	<link rel="stylesheet" href="style.css">


	<title>Home | Logistics Association</title>
</head>
<style>
	/*preloader*/

	#preloader{
		background: #000000 url('images/loader.gif') no-repeat center center;
		background-size: 15%;
		height: 100vh;
		width: 100%;
		position: fixed;
		display: block;
		z-index: 100;
		overflow-y: hidden /* Hide vertical scrollbar */
	}

	/* SCROLL button */
	#btnScrollToTop{
		position: fixed;
		right: 35px;
		bottom: 35px;
		width: 60px;
		height: 60px;
		border-radius: 50%;
		background: #3393FF;
		box-shadow: 0 0 10px rgba(0,0,0,0.25);
		color: #FFFFFF;
		border: none;
		outline: none;
		cursor: pointer;
	}

	#btnScrollToTop:active {
		background: #0C7FFF;
	}

	#btnScrollToTop:hover {
		background: #0C7FFF;
	}

</style>
<body>
	<!-- Preloader -->
	<div id="preloader">

	</div>

	<!--Button Scroll Up-->
	<button id="btnScrollToTop">
		<i class="material-icons">arrow_upward</i>
	</button>

	<!-- Navigation Bar-->
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-4">
		<div class="container">
			<a href="index.php" class="navbar-brand">Logistics Association</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
				
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navmenu">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a href="tracking.php" class="nav-link">Tracking</a>
					</li>
					<li class="nav-item">
						<a href="shipping.html" class="nav-link">Shipping</a>
					</li>
					<li class="nav-item">
						<a href="contact.php" class="nav-link" target="_blank">Contact Us</a>
					</li>
					<li class="nav-item">
						<a href="login.php" class="nav-link">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<section class="space1 bg-light bg-gradient">
		<div>
		</div>
	</section>

	<!-- Content -->
	<!-- Introduction -->
	<section class="bg-dark text-light p-5 text-center text-sm-start p-lg-5 pt-lg-6 bg1">
		<br>
		<br>
		<div class="container">
			<div class="d-sm-flex align-items-center justify-content-between">
				<div>
					<h2>Hello.</h2>
					<h1><b>Welcome To The <span class="text-warning">Official Homepage</span> Of <em><span class="text-info">Logistics Association</span></em></b><h1>
					<!-- p class="lead my-4"-->
					<p class="pstyle1">
						Our main target of logistics association is to get the best and effective ways to transfer the resources and products from first place to destiny and the customer. The main steering aspect of these activities is to satisfy customer demand and offer the suitable deal possible to hold the customers and reach new ones.
					</p>
					<!--btn btn-primary btn-lg p-3 m-1-->
					<button class="button  button2 button4" onclick="location.href='tracking.php'">Find Tracking Order</a></button>
					&nbsp;
					<!--btn btn-primary btn-lg p-3 m-1-->
					<button class="button  button2 button4" onclick="location.href='shipping.html'">Shipping Now</button>
				</div>
				<div class="full-img img-shake2" id="fullImgBox">
					<img src="images/package2.svg" id="fullImg">
					<!--close X button-->
					<span onclick="closeFullImg()">X</span>
				</div>
				<img class="img-fluid col-7 w-50 d-none d-xl-block" src="images/package2.svg" alt="Package" srcset=""  onclick="openFullImg(this.src)"/>
			</div>
			<br>
			<br>
			<br>
		</div>
	</section>
	<!-- -->

	<!-- Types of Service Couriers-->

	<section class="bg-dark text-light p-5 text-center text-sm-start bg2">
		<div class="container">
			<hr>
<!-- 			<center><h1>test</h1></center> -->
				<center><h1 class="d-sm-flex justify-content-center" style="text-align; color:#90EE90;"><u>Types of Shipping Services</u></h1></center>
			<hr>
			<br>
			<br>
			<br>
			<div class="row text-center g-5">
				<div class="col-md">
					<div class="card bg-danger text-light">
						<div class="card-boy text-center">
							&nbsp;
							<div class="h1 mb-3">
								<i class=""></i>
									<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
									  <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
									</svg>
							</div>
							<h3 class="card-title mb-3">
								Parcels
							</h3>
							<p class="card-text">
								<span style="white-space: pre-line">
									Dosmetic and International
								</span>
							</p>
							<br>
							<a href="#" class="btn btn-primary buttonfont">Read More</a>			
						</div>
						<br><br>
					</div>
				</div>

				<div class="col-md">
					<div class="card bg-warning text-light">
						<div class="card-boy text-center">
							&nbsp;
							<div class="h1 mb-3">
								<i class="">
									<svg class="svg-icon" viewBox="0 0 20 20" width="60" height="60" fill="currentColor">
										<path d="M17.218,2.268L2.477,8.388C2.13,8.535,2.164,9.05,2.542,9.134L9.33,10.67l1.535,6.787c0.083,0.377,0.602,0.415,0.745,0.065l6.123-14.74C17.866,2.46,17.539,2.134,17.218,2.268 M3.92,8.641l11.772-4.89L9.535,9.909L3.92,8.641z M11.358,16.078l-1.268-5.613l6.157-6.157L11.358,16.078z">
										</path>
									</svg>
								</i>
							</div>
							<h3 class="card-title mb-3">
								Air Freight
							</h3>
							<p class="card-text">
								<span style="white-space: pre-line">
									Dosmetic and International
								</span>
							</p>
							<br>
							<a href="#" class="btn btn-primary buttonfont">Read More</a>
						</div>
						<br><br>
					</div>
				</div>

				<div class="col-md">
					<div class="card bg-info text-light">
						<div class="card-boy text-center">
							&nbsp;
							<div class="h1 mb-3">
								<i class="bi bi-water">
									<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-water" viewBox="0 0 16 16">
									  <path d="M.036 3.314a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 3.964a.5.5 0 0 1-.278-.65zm0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 6.964a.5.5 0 0 1-.278-.65zm0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 9.964a.5.5 0 0 1-.278-.65zm0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.757-.703a.5.5 0 0 1-.278-.65z"/>
									</svg>
								</i>
							</div>
							<h3 class="card-title mb-3">
								Ocean Freight
							</h3>
								<p class="card-text">
									<span style="white-space: pre-line">
									Dosmetic and International
									</span>
								</p>
							<br>
							<a href="#" class="btn btn-primary buttonfont">Read More</a>
						</div>
						<br><br>
					</div>
				</div>

				<div class="col-md">
					<div class="card bg-success text-light">
						<div class="card-boy text-center">
							&nbsp;
							<div class="h1 mb-3">
								<h1><i class="bi bi-truck"></i>
									<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
  									<path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
									</svg>
								</h1>
							</div>
							<h3 class="card-title mb-3">
								Road Freight
							</h3>
							<p class="card-text">
								<span style="white-space: pre-line">
									Dosmetic and International
								</span>
							</p>							
							<br>
							<a href="#" class="btn btn-primary buttonfont">Read More</a>
						</div>
						<br><br>
					</div>
				</div>

				<div class="col-md">
					<div class="card bg-secondary text-light">
						<div class="card-boy text-center">
							&nbsp;
							<div class="h1 mb-3">
								<i class="">
									<!-- 									<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAAFH0lEQVR4nO2dTWgeRRjHfzVqbJq2Kn7U1Jz04AdiaFpNRSmiSEGsFW8qasHqSbyIEfQgevFaiweP3sRzsSD4CSLai7VVaj2I8tZP2lprTV7jm3iYDU333Tfd2Xlm5pnN/OC55F2e/c/zz87uzuzugC6uAl4DDgJ/F/EV8CpwpcK8rWYncBJYGBAngR2K8raaHcAcg4u2GHPA/QrytprLgT84f9EW4zfg0oh5W8805xamC7wAjBUxXfxt6TbPR8zbej7l3KJMV2xTLu4nEfN6ZVWAfQwBtwMPAHcAG4CNwJoB228Efi79bQw45qjDNu+Z4rdfgc+AfcAXQM9RRzQuBHYDP1G/H1/AFKnMmGUOX3l/BJ4q2pYUk8BRmhWuqmt5sWEuX3mPAJusqxKJJ4AZmheuiynecidfDXn/AR4Xqpk3duFeuNTiGZHKeeAe4F/iFyh0dIG7BeonymrsT95tig6DrxqtGJJIArzMyh4PWoc5UpzvYyTuQ0Ywww6jArlS5jRwNeaCpjEXCAjZTjYDYC1wn2sSCUN2CuRoCw+5JpAw5GaBHG3hJtcEEoZUDUmsVK51TSBxUv8Puau11OnhOM4lcYRIm/EeMI75Z/EZ48B+Ye0q/jGlb7KcD3sLxj3od0Kiy3IWUSLEHM1SVOmX6LIygmRDlJENUYbGqUjpPj0p8hGijGyIMrIhLcTmpukI5vmsFIbrRzGTbt8R8MZQgrpCD2Ems1JjBDhMCw25K5ZAAbbRwqGTYcxTKSkyDMzW3NappiENCT1GJU2QduarLGVkQ5SRDVFGNkQZ2RBlZEOUkQ1RRjZEGdkQZWRDlJENUUY2RBnZEGWENOTigPuSZjjUjkIaMhVwX9JsjS3AhjyFm+gU7gLmgYEHMe/jaWct5nU920+EOKHx6ffUyTOGbSIbooxsiDKyIcrIhigjG6KMbIgysiHKyIYoIxuijGyIMrIhysiGKCOGIV3gDcyE1WgRU8De4reVrscZm7mCDnDrMrkmim1scrqEDz3RqSt0luUbv8hEsa1vM3zpiU5doXsscu61yNs0fOmJTl2ht1nknLLI2zR86YlOXaE2HwsYtcjbNHzpcULrZa82XcH0hGy4zTdtnb9/K7yPEHqAsIY8ZrHto95UnEWbHjHq9q2zmEvI8zGBzIo6sfREp0d9sR2WL0KMG0NJPSpWcDuBXRG6mOv6pUMVWzk7VBHKDB96jjvWUoRvCV9ErXHYsZYiJ/UDAjnawpeuCSQM+UAgR1v40DWBxMPWa4BfSOOJdp/8BVyDWd+wMRJHyBngTYE8qbMHRzMkWY9Z+Df2STVWHMOs1KaKbZjFXWIXJ3T0gHsF6ueFp4F54hcpVMxjVo9WzS7CzPjFjhngSaGaeWcLdi9KphaHgM1i1QrEJcDXxC+edBwk4HvrUqzHLLhVbkwPc8/ist56qJgptFYNnu4v2pgE1wHf0N+I05hXolNjO3CK/vYcBW6IqKsWdwK/0y++A2yKqMuVW4Af6G/Xccw68irZTfUC958DGyLqkuIKzPLc5fbNAc9G1NXHEPA61f3wO8DqeNLEGQbeprqtbwEXxZNmWAfso1/cPPAK6X/vfRDPUX2yfx+4LJao66menJoBHoklKiAPYwZWy+3/HrgxtJgtVE/ddoDJ0GIiMkn1nPsJTI2CUXVyO8DKXMp7DNP2cj0+Dinio9LO3yXNb2FJMYKpwdKaOM8e2rAZ01f+CbxEe0/eNqzC1OIU5qaxUdf9P0FtVOxTUKppAAAAAElFTkSuQmCC"/>	 -->
									<img src="https://img.icons8.com/ios-filled/100/000000/train.png" id="invert1" width="60px" height="60px"/>
								</i>
							</div>
							<h3 class="card-title mb-3">
								Rail Freight
							</h3>
							<p class="card-text">
								<span style="white-space: pre-line">
								Between Europe and Asia
								</span>
							</p>
							<div class="aadjust">
								<br>
								<a href="#" class="btn btn-primary buttonfont">Read More</a>
							</div>
						</div>
						<br><br>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
	</section>

	<!--Insights and Innovation-->
	<section id="learn" class="p-5">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="full-img" id="fullImgBox">
					<img src="images/heavy1.svg" id="fullImg">
					<!--close X button-->
					<span onclick="closeFullImg()">X</span>
				</div>
				<div class="col-md img-shake2">
					<img src="images/heavy1.svg" onclick="openFullImg(this.src)" class="img-fluid" alt="heavy package">
				</div>
				<div class="col-md p-5">
					<h3 class="ini1">Insights and Innovation</h3>
					<p class="lead">
						To enable collaboration, the company brings together customers, research and academic institutions, industry partners, and logistics experts within the Logistics Association business divisions. As a thought leader in the logistics industry, Logistics Association structurally invests in trend research and solution development.
					</p>
					<p>The purpose of insights is to connect head and heart knowledge—information plus inspiration. Too often, information just describes phenomena with no clear path of what to do with it. But the best insights reveal behaviors or phenomena and point to solutions or ideas.
					</p>
					<a href="#" class="btn btn-light mt-3">
						<i class="bi bi-chevron-right"></i>&nbsp;Find Out More</a>
				</div>
			</div>
		</div>
	</section>

	<!--YouTube Video-->
	<section class="bg-dark text-light p-5">
		<center>
		<hr><br>
		<h1 style="color:#ADD8E6"><u>What is Logistics Association?</u></h1>
		<br><br>
		<iframe width="852" height="480" src="https://www.youtube.com/embed/4-QU7WiVxh8?start=13&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<br><br><br><br><br><br><hr>
		</center>
	</section>

	<!-- Newsletter -->
	<section class="bg-dark text-light p-4">
			<form action="index.php" method="POST">
			<?php
			    use PHPMailer\PHPMailer\PHPMailer;
			    function sendmail(){
			        $name = "Logistics Association";  // Name of your website or yours
			        // $to = "hockpoh5491@gmail.com";  // mail of reciever
			        $to = trim($_POST['email']);
			        $subject = "Thank you for subscribing to our newsletter!";
			        $body = "Good day client! Thank you so much for subscribing to our newsletter. We will bring more latest updates and news to you in the future!";
			        $from = "danielpoh2000@gmail.com";  // you mail
			        $password = "dantyerson3131";  // your mail password

			        // Ignore from here

			        require_once "PHPMailer/PHPMailer.php";
			        require_once "PHPMailer/SMTP.php";
			        require_once "PHPMailer/Exception.php";
			        $mail = new PHPMailer();

			        // To Here

			        //SMTP Settings
			        $mail->isSMTP();
			        // $mail->SMTPDebug = 3;  //Keep It commented this is used for debugging                          
			        $mail->Host = "smtp.gmail.com"; // smtp address of your email
			        $mail->SMTPAuth = true;
			        $mail->Username = $from;
			        $mail->Password = $password;
			        $mail->Port = 587;  // port
			        $mail->SMTPSecure = "tls";  // tls or ssl
			        $mail->smtpConnect([
			        'ssl' => [
			            'verify_peer' => false,
			            'verify_peer_name' => false,
			            'allow_self_signed' => true
			            ]
			        ]);

			        //Email Settings
			        $mail->isHTML(true);
			        $mail->setFrom($from, $name);
			        $mail->addAddress($to); // enter email address whom you want to send
			        $mail->Subject = ("$subject");
			        $mail->Body = $body;
			        if ($mail->send()) {
			            echo "<br><h1><center>Email is sent!</center></h1><br><br>";
			            $mail = "";
			        } else {
			            echo "<h1><center>Something is wrong:</center></h1><br><br>" . $mail->ErrorInfo;
			        }
			    }

			        // sendmail();  // call this function when you want to

			        if (isset($_POST['sendmail'])) {
			            sendmail();
			        }
			?>
			<div class="container">
				<br>
				<div class="d-md-flex justify-content-between align-items-center">
					<h3 class="mb-3 mb-md-0">
						Sign Up For Our Newsletter Here:
					</h3>
						<div class="input-group news-input">
							<input type="text" name="email" class="form-control" placeholder="Enter Your Email" aria-label="Recipient's username" aria-describedby="button-addon2" required >
							<button type="submit" name="sendmail" value="Submit" class="btn btn-dark btn-lg">&nbsp;&nbsp;Submit</button>
						</div>
				<br>
			</div>
		<br>
	</section>

	<!-- Footer-->
	<section class="bg-dark text-light p-4 bodyftr ftr1">
	<footer class="footer">
	  	 <div class="container">
	  	 	<div class="row">
	  	 		<div class="footer-col">
	  	 			<h4>Our company</h4>
	  	 			<ul>
	  	 				<li><a href="#">About Us</a></li>
	  	 				<li><a href="tracking.php">Find Your Tracking</a></li>
	  	 				<li><a href="shipping.php">Purchase Shipping Order</a></li>
	  	 				<li><a href="login.php">Login</a></li>
	  	 			</ul>
	  	 		</div>
	  	 		<div class="footer-col">
	  	 			<h4>Search for Helps</h4>
	  	 			<ul>
	  	 				<li><a href="#">FAQ</a></li>
	  	 				<li><a href="https://fluffyofficialmy.com/pages/shipping-policy" target="_blank">Shipping</a></li>
	  	 				<li><a href="https://www.auguststoreofficial.com/pages/returns" target="_blank">Return</a></li>
	  	 				<li><a href="https://www.pmo.gov.my/2019/10/security-and-public-order-policy/" target="_blank">Status of Orders</a></li>
	  	 				<li><a href="http://treonlinehelp.elite.com/robohelp/robo/server/3E/projects/Elite%203E%20Accounts%20Payable%20User%20Guide/About_Payment_Selection_Generation.htm" target="_blank">Payment Selections</a></li>
	  	 			</ul>
	  	 		</div>
	  	 		<div class="footer-col">
	  	 			<h4>Learn More About Logistics</h4>
	  	 			<ul>
	  	 				<li><a href="https://www.dhl.com/my-en/home/logistics-solutions/green-logistics.html">Green Logistics</a></li>
	  	 				<li><a href="https://www.dhl.com/my-en/home/our-divisions.html">Our Divisions</a></li>
	  	 				<li><a href="https://www.dhl.com/my-en/home/about-us/sustainability.html">Sustainability</a></li>
	  	 				<li><a href="https://www.dhl.com/my-en/home/about-us/partnerships.html">Official Logistics Parterns</a></li>
	  	 			</ul>
	  	 		</div>
	  	 		<div class="footer-col">
	  	 			<h4>Check out our social medias</h4>
	  	 			<div class="social-links">
	  	 				<a href="https://www.facebook.com/ah.hui.7777/" target="_blank"><i class="bi bi-facebook"></i></a>
	  	 				<a href="https://www.twitter.com"><i class="bi bi-twitter"></i></a>
	  	 				<a href="https://www.instagram.com/jackin_fu0511/"><i class="bi bi-instagram"></i></a>
	  	 				<a href="https://www.youtube.com"><i class="bi bi-youtube"></i></a>
						<!-- <a href="https://www.twitch.tv"><i class="bi bi-twitch"></i></a> -->
	  	 			</div>
	  	 		</div>
	  	 	</div>
	  	 </div>
	</footer>
	
	<!--preloader time duration adjustment-->
	<iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<!-- 	<iframe width="560" height="315" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

	</section>

	<script>
		//preloader javascript
		var loader = document.getElementById("preloader");

		window.addEventListener("load",function(){
			loader.style.display="none";

		})


		//scroll button javascript
		const btnScrollToTop = document.querySelector("#btnScrollToTop");

		btnScrollToTop.addEventListener("click", function() {
			// window.scrollTo(0, 0);

			window.scrollTo({
				top: 0,
				left: 0,
				behavior: "smooth"
			})

			// $("html, body").animate({scrollTop: 0}, "slow");
		});

		//open and close image
		var fullImgBox = document.getElementById("fullImgBox");
		var fullImg = document.getElementById("fullImg");

		function openFullImg(pic){
			fullImgBox.style.display = "flex";
			fullImg.src = pic;
		}
		
		function closeFullImg(pic){
			fullImgBox.style.display = "none";
		}
		
	</script>
</body>
</html>
