<!DOCTYPE html>
<html lang="en">
<head>
<title>School Registration</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sportify template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>


<?php  
include("includes/header.php")
?>
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/classes.jpg" data-speed="0.8"></div>
		<div class="home_overlay"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>SCHOOL REGISTRATION</h1></div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact custom_container_wrap">
		<div class="container">
			<div class="row">
				
				<!-- Contact Content -->
				<div class="col-xl-6">
					<div class="contact_content">
						<div>
							
							<div class="contact_title">School Information</div>
							<div class="row contact_row">
								<div class="col-xl-6">
									<div class="contact_text">
										<p></p>
									</div>
								</div>
								<!-- <div class="col-xl-6">
									<div class="contact_info_list">
										<ul>
											<li>Main Str, no 23, New York</li>
											<li>+546 990221 123</li>
											<li>gymsportify@contact.com</li>
										</ul>
									</div>
								</div> -->
							</div>
							<div class="contact_form_container">
								<form action="#" class="contact_form">
									<div class="row contact_form_row">
										<div class="col-md-6"><input type="text" class="contact_input" placeholder="School Name" required="required" name="school_name"></div>
										<div class="col-md-6"><input type="text" class="contact_input" placeholder="Coach Name" required="required" name="school_coach"> </div>
										<div class="col-md-6"><input type="text" class="contact_input" placeholder="Coach Email" required="required" name="coach_email"></div>
										<div class="col-md-6"><input type="text" class="contact_input" placeholder="Coach Phone Number" required="required" name="coach_phone"></div>
										

										<div class="col-md-6"><input type="text" class="contact_input" placeholder="Student 1 Name" required="required" name="student_name1"></div>
										<div class="col-md-6">
											
											<select class="contact_input">
												<option value=" "> ---Student 1 Sex--- </option>

						                            <option lass="contact_input" value="male"> Male </option>
						                            <option  lass="contact_input" 	value="female">Female</option>
											</select>
										</div>
										<div class="col-md-6">
											
											<select class="contact_input">
												<option value=" "> --Student 1 Class-- </option>

						                            <option lass="contact_input" value="JSS1"> JSS1 </option>
						                            <option  lass="contact_input" 	value="JSS2">JSS2</option>
						                            <option lass="contact_input" value="JSS3"> JSS3 </option>
						                            <option  lass="contact_input" 	value="SSS1">SSS1</option>
						                            <option lass="contact_input" value="SSS2"> SSS2 </option>
						                            <option  lass="contact_input" 	value="SSS3">SSS3</option>
											</select>
										</div>
										<div class="col-md-6"><input type="text" class="contact_input" placeholder="Student 1 Age" required="required" name="student_age1"></div>



										<div class="col-md-6"><input type="text" class="contact_input" placeholder="Student 2 Name" required="required" name="student_name1"></div>
										<div class="col-md-6">
											
											<select class="contact_input">
												<option value=" "> ---Student 2 Sex--- </option>

						                            <option lass="contact_input" value="male"> Male </option>
						                            <option  lass="contact_input" 	value="female">Female</option>
											</select>
										</div>
										<div class="col-md-6">
											
											<select class="contact_input">
												<option value=" "> --Student 2 Class-- </option>

						                             <option lass="contact_input" value="JSS1"> JSS1 </option>
						                            <option  lass="contact_input" 	value="JSS2">JSS2</option>
						                            <option lass="contact_input" value="JSS3"> JSS3 </option>
						                            <option  lass="contact_input" 	value="SSS1">SSS1</option>
						                            <option lass="contact_input" value="SSS2"> SSS2 </option>
						                            <option  lass="contact_input" 	value="SSS3">SSS3</option>
											</select>
										</div>

										<div class="col-md-6"><input type="text" class="contact_input" placeholder="Student 2 Age" required="required" name="student_age1"></div>




										<div class="col-md-6"><input type="text" class="contact_input" placeholder="Student 3 Name" required="required" name="student_name1"></div>
										<div class="col-md-6">
											
											<select class="contact_input">
												<option value=" "> ---Student 3 Sex--- </option>

						                            <option lass="contact_input" value="male"> Male </option>
						                            <option  lass="contact_input" 	value="female">Female</option>
											</select>
										</div>
										<div class="col-md-6">
											
											<select class="contact_input">
												<option value=" "> --Student 3 Class-- </option>

						                             <option lass="contact_input" value="JSS1"> JSS1 </option>
						                            <option  lass="contact_input" 	value="JSS2">JSS2</option>
						                            <option lass="contact_input" value="JSS3"> JSS3 </option>
						                            <option  lass="contact_input" 	value="SSS1">SSS1</option>
						                            <option lass="contact_input" value="SSS2"> SSS2 </option>
						                            <option  lass="contact_input" 	value="SSS3">SSS3</option>
											</select>
										</div>
										<div class="col-md-6"><input type="text" class="contact_input" placeholder="Student 3 Age" required="required" name="student_age1"></div>

										
						
										
									</div>
									<button class="contact_button">REGISTER</button>
								</form>
							</div>
						</div>
					</div>
				</div>


				<!-- Contact Map -->
				<div class="col-xl-6">
					<div class="contact_map_container">
						<br>		<br>		<br>
						<br>		<br>		<br>	
						<br>		<br>		<br>						<div class="Map">
								<img src="images/contact.jpg" height="600px">
							</div>
						
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_logo text-center"><a href="#"><img src="images/logo_3.png" alt=""></a></div>
					</div>
				</div>
				<div class="row footer_row">
					<div class="col-lg-4 footer_col">
						<div class="footer_item text-center">
							<div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div><img src="images/phone.png" alt=""></div>
							</div>
							<div class="footer_title">talk to us</div>
							<div class="footer_list">
								<ul>
									<li>+34 5667 4332 244</li>
									<li>+224 667 889</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 footer_col">
						<div class="footer_item text-center">
							<div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div><img src="images/mail.png" alt=""></div>
							</div>
							<div class="footer_title">e-mail</div>
							<div class="footer_list">
								<ul>
									<li>Contact@sportify25.com</li>
									<li>office@sportify25.com</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 footer_col">
						<div class="footer_item text-center">
							<div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div><img src="images/contact.png" alt=""></div>
							</div>
							<div class="footer_title">location</div>
							<div class="footer_list">
								<ul>
									<li>MAin str. 25</li>
									<li>458811 CA</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar d-flex flex-row align-items-center justify-content-center">
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>