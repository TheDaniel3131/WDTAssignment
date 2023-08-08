<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="test.jpg">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  	<!-- poppins -->
  	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<!-- ubuntu -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Rubik:wght@600&family=Ubuntu&display=swap" rel="stylesheet">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  	<link rel="stylesheet" href="style.css">

	<title>User Database | Logistics Association</title>
</head>
<body>
	<!-- Navigation Bar-->
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-4">
		<div class="container">
			<a href="adminloginhome.php" class="navbar-brand">Logistics Association</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
				
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navmenu">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a href="admindatabase.php" class="nav-link" target="_blank">User Database</a>
					</li>
					<li class="nav-item">
						<a href="trackingadmin.php" class="nav-link">Tracking</a>
					</li>
					<li class="nav-item">
						<a href="shipping_two_admin.html" class="nav-link">Shipping</a>
					</li>
					<li class="nav-item">
						<a href="contact.php" class="nav-link" target="_blank">Contact Us</a>
					</li>
					<li class="nav-item">
						<a href="index.php" class="nav-link">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<section class="space1 bg-light bg-gradient">
		<div>
		</div>
	</section>

	<!-- update and delete registration database-->
	<section class="bg-dark p-4">
	<br>
    <div class="container">
        <div class="row justify-content-center">
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div>
                	<br><br>
                    <h4 style="color:white;"><center>User Database</center><a href="insertdatabase.php" class="btn btn-success" style="margin-left: 85%; font-family:Poppins;"> Insert New User</a>    
	              	</h4>
	                <div class="col-md-6">
	             
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'registration');

                $query = "SELECT * FROM users";
                $query_run = mysqli_query($connection, $query);
            ?>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered" style="background-color: white;">
                        <thead class="table-dark">
                            <tr>
                                <th> ID </th>
                                <th> Username </th>
                                <th> Email</th>
                                <th> Password </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                                        
                        <?php
                        if($query_run)
                        {
                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?> &nbsp;
                                    <tr>
                                        <th> <?php echo $row['id']; ?> </th>
                                        <th> <?php echo $row['username']; ?> </th>
                                        <th> <?php echo $row['email']; ?> </th>
                                        <th> <?php echo $row['password']; ?> </th>
                                        <th> 
                                            <form action="updatedatabase.php" method="post" target="_blank">
                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                <input style="font-family: Poppins;" type="submit" name="edit" class="btn btn-success" value="Edit">
                                            </form>
                                        </th>
                                        <th> 
                                            <form action="delete.php" method="post" onclick="myConfirm()">
                                                <input style="font-family: Poppins;" type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                <input style="font-family: Poppins;" type="submit" name="delete" class="btn btn-danger" value="Delete"> 
                                            </form>
                                        </th>
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>    
                                        <th colspan="6"> No Record Found </th>
                                    </th>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <br><br><br><br><br><br>


    <!-- CONFIRMATION MESSAGE()-->

    <script>
        function myConfirm() {
        let confirmAction = confirm("Are you sure to execute this action?");
        // console.log(confirmAction); // OK = true, Cancel = false

        if (confirmAction == true) {
          confirm("Action successfully executed");
        } else if (confirmAction == false) {
          alert("Your Action is Cancelled");
          event.preventDefault();

        }

  //       if (confirm('Are you sure you want to save this thing into the database?')) {
		//   // Save it!
		//   console.log('Thing was saved to the database.');
		// } else {
		//   // Do nothing!
		//   console.log('Thing was not saved to the database.');
		// }
      }
    </script>

	<!-- Footer-->
	<section class="bg-dark text-light p-4 bodyftr ftr1">
	<footer class="footer">
	  	 <div class="container">
	  	 	<div class="row">
	  	 		<div class="footer-col">
	  	 			<h4>Our company</h4>
	  	 			<ul>
	  	 				<li><a href="adminloginhome.php#">About Us</a></li>
	  	 				<li><a href="trackingadmin.php">Find Your Tracking</a></li>
	  	 				<li><a href="shipping_two_admin.php">Purchase Shipping Order</a></li>
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
<!-- 	  	 				<a href="https://www.twitch.tv"><i class="bi bi-twitch"></i></a> -->
	  	 			</div>
	  	 		</div>
	  	 	</div>
	  	 </div>
	  </footer>
	  </section>


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>