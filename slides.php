<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>ASIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Diamond Pricing Tables template Responsive, Login form web template,Flat Pricing w3tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //Default-JavaScript-File -->

<!-- default-css-files -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<!-- default-css-files -->

<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" /><!-- popup css -->  

<!-- style.css-file -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- //style.css-file -->

<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

</head>
<!-- Head -->
<body>

<!-- /plans -->
<div class="plans-section">
	<div class="plans-main">
		<h1 class="w3l-inner-h-title">Presentaciones</h1>

			<?php
			$dir    = './presentaciones/';
			$archivos1 = scandir($dir);


			foreach ($archivos1 as $i => $archivo) {
				if (stripos($archivo, 'jpg') == false) {

					if ($archivo != '.' && $archivo != '..' ){
						$ruta_archivo = $dir.$archivo;
						$pos = strpos($archivo, '.');
						$nombre = substr($archivo, 0, $pos);
						echo '<div class="price-grid"><div class="price-block agile"><div class="price-gd-top pric-clr1"><img src="./presentaciones/'.$nombre.'.JPG" style="max-width: 100%;height: 150px;"><h4>PPT</h4><p>'.$nombre.'</p>';
						echo "<div class='price-selet pric-sclr1'><a href='".$ruta_archivo."' target='_blank' class='w3_agileits_sign_up2'>Ver</a></div>"; 
						echo '</div></div></div>';
					}
				}
			}

			?>
			<div class="clear"></div>	
	</div>
</div>
<!-- //plans -->
<!-- copyright -->
<div class="copyright-agile">
	<p>&copy; 2019 Gestor de Presentaciones. All rights reserved | Design by <a href="#">DT</a></p>
</div>
<!-- //copyright -->
	
<!-- popup signup form -->
	<div class="wthree_pop_up"> 
		<div id="small-dialog" class="mfp-hide agile_signup_form">
			<h2>Signup For Your Selected Choice</h2>
			<form action="#" method="post">
			
				<div class="form-control"> 
					<label class="header">First Name <span>:</span></label>
					<input type="text" id="firstname" name="firstname" placeholder="First Name" title="Please enter your First Name" required="">
				</div>
				
				<div class="form-control">
					<label class="header">Last Name <span>:</span></label>
					<input type="text" id="lastname" name="firstname" placeholder="Last Name" title="Please enter your Last Name" required="">
				</div>

				<div class="form-control">	
					<label class="header">Email Address <span>:</span></label>
					<input type="email" id="email" name="email" placeholder="mail@example.com" title="Please enter a valid email" required="">
				</div>

				<div class="form-control">	
					<label class="header">Phone Number <span>:</span></label>
					<input type="tel" id="tel" name="tel" placeholder="Phone number" title="Please enter a valid Phone number" required="">
				</div>

				<div class="form-control">	
					<label class="header">Password <span>:</span></label>
					<input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
				</div>

				<div class="form-control">	
					<label class="header">Confirm Password <span>:</span></label>	
					<input type="password" class="lock" name="confirm-password" placeholder="Confirmpassword" id="password2" required="">
				</div>	
				
				<div class="w3_submit">
					<input type="submit" class="register" value="Submit">
				</div>
				
			</form>
		</div>
	</div>
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');	 
				//empty string means no validation error
		}
	</script>

<!-- //popup signup form -->
	

<!-- pop-up-box -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});														
			});
		</script>
	<!--//pop-up-box -->
	
</body>
</html>