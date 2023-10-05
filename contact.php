<!DOCTYPE html>


<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<title>jamiston</title>
<meta name ="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.7.1.js">
  </script>
  <script>
  	$(document).ready(function(){
  		$('#icon').click(function(){
  			$('ul').toggleClass('show');
  		});
  	});
  </script>
</head>
<body>
	<nav>
		
		<label class="logo">JAMITSON</label>
		
		<ul>
			<li><a class="action" href="index.php">HOME</a></li>
			<li><a href="About.php">ABOUT</a></li>
			<li><a href="services.php">SERVICES</a></li>
			<li><a href="Career.php">CARRERS</a></li>
			<li><a href="contact.php">CONTACT</a></li>
			
		</ul>
		<label id="icon">
			<i class="fas fa-bars"></i>
		</label>
	</nav>

	<!-- banner section -->
	<section><div class="banner">
		<img style="width: 100% ; height: 280px;" src="images/contu.jpg">

		
		<h1 style="text-align: center; padding-top: 25px;">Get in Touch With Us</h1>
		<p style="text-align: center;">We're here to answer any questions you may have.</p>
	</div>
	</section>

	<!-- Contact form -->
	<section class="contact-form">
		<div class="form-container">
			<h2>Your Details</h2>
			<form action="cont.php" method="POST">

				<label for="name">Name: </label>
				<input type="text" id="name" name="x" required>

				<label for="email">Email: </label>
				<input type="email" id="email" name="y" required>

				<label for="phone">Phone: </label>
				<input type="tel" id="phone" name="z">

				<label for="message">Message: </label>
				<textarea id="message" name="p" rows="4" required></textarea>
	<input type ="submit" name="submit"value="submit" style="width: 100px; height: 35px;">
			</form>
		</div>
	</section>

	<!-- Company contact info -->
	<section class="contact-info">
		<h2>Contact Information</h2>
		<address>
			Jamitson<br>
			R-cat Tonk Rd, Panch Batti, Sangram Colony,<br> Ashok Nagar, Jaipur, Rajasthan 302007<br>
			
			Phone: <a href="tel:7822882712">7822882712</a><br>
			Email: <a href="Jamitson@gmail.com">Jamitson7@gmail.com</a>
		</address>
	</section>

	<!-- Footer section -->
	<footer>
		<p>© 2023 Your Company. All rights reserved.</p>
	</footer>
	<script src="script.js"></script>
	
</body>

</html>

