<?php
session_start();
if(is_null($_SESSION['student'])){
	        echo '<script type="text/javascript">alert("you are not login");</script>';
			echo '<script type="text/javascript">window.location = "../web/home.php"</script>';
			// header('location:../web/home.php');
								 }

?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mastering an Education Category Flat Bootstrap Responsive Website Template | Mail :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mastering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {setInterval(function(){$('#chat').load('ajaxchat.php')}, 500);});
</script>
<!-- //js -->
<link rel="stylesheet" href="css/colorbox.css" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
<div class="main_section_agile">
		<div class="w3_agile_banner_top">
			<div class="agile_phone_mail">
				<ul class="agile_forms">
					<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i>log out</a></li>
					<li><a href="logout" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><?php echo "welcome". $_SESSION['student']; ?></a> </li>
				</ul>
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+(000) 123 456 232</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:education@w3layouts.com">Education@w3layouts.com</a></li>
				</ul>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="agileits_w3layouts_banner_nav">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html"><i>M</i><span>astering</span></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="gallery.php" class="menu__link">My Exam</a></li>
							<li class="dropdown menu__item">
				<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">courses & lecture<b class="caret"></b></a>
							<ul class="dropdown-menu agile_short_dropdown">
							<li><a href="Lectures.php">My Lectures</a></li>
							<li><a href="Course.php">My Courses</a></li>
							</ul>
							</li>
							<li class="menu__item"><a href="chatindex.php" class="menu__link">Chat</a></li>
							<li class="menu__item"><a href="mail.php" class="menu__link">Mail Us</a></li>
							</ul>
                            <div class="w3_agileits_search">
							<form action="#" method="post">
								<input type="search" name="Search" placeholder="Search here..." required>
								<input type="submit" value=" ">
							</form>
						</div>
					</nav>
				</div>
			</nav>
		</div>
</div>
	<div class="banner1">
		<div class="w3_agileits_service_banner_info">
			<h2>Mail Us</h2>
		</div>
	</div>

<!-- //banner -->
	<!-- Modal1 -->
													<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">log out</h3>	
																			<div class="login-form">
																				<form action="#" method="post">
																					<div class="tp">
																	<input type="submit" value="logout" name="logout">
																					</div>
                                                                                    <div class="tp">
																	<input type="submit" value="cancel">
																					</div>
                                                                                      <?php 
								if(isset($_POST['logout'])){
									echo '<script type="text/javascript">window.location = "../web/logout.php"</script>';
								//	header('location:../web/logout.php');
								}
																			  ?>
																				</form>
																			</div>
																			<div class="login-social-grids">
																				<ul>
																					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
																					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
																					<li><a href="#"><i class="fa fa-rss"></i></a></li>
																				</ul>
																			</div>
																			<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal1 -->	
													<!-- Modal2 -->
													<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign Up</h3>	
																			<div class="login-form">
																				<form action="#" method="post">
																				   <input type="text" name="name" placeholder="Username" required>
																					<input type="email" name="email" placeholder="Email" required>
																					<input type="password" name="password" placeholder="Password" required>
																					<input type="password" name="password" placeholder="Confirm Password" required>
																					<input type="submit" value="Sign Up">
																				</form>
																			</div>
																			<p><a href="#"> By clicking register, I agree to your terms</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal2 -->	

<!-- mail -->
	<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Get in <span>Touch</span></h3>
			<div class="w3layouts_mail_grid">
				<div class="col-md-4 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Mail Us</h3>
						<a href="mailto:info@example.com">info@example.com</a>
					</div>
				</div>
				<div class="col-md-4 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Address</h3>
						<p>PO Box 97845 Baker , Australia</p>
					</div>
				</div>
				<div class="col-md-4 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Phone</h3>
						<p>+(0121) 121 121</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="w3_agile_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d50416.99204102258!2d144.93732617279937!3d-37.83543431360044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1saustralia+real+estate!5e0!3m2!1sen!2sin!4v1470915593791" style="border:0"></iframe>
	</div>
	<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Contact <span>Info</span></h3>
			<div class="w3layouts_mail_grid">
					<div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<form id="chat" method="post">
							</form>
                           
                            ===============================================================================
							<br><br>
                            <form id="chatsend" method="post">
							<span>
								<i>your name</i>
			<input type="text" name="Email" value="<?php echo $_SESSION['student']; echo $_SESSION['stf'];?>">
							</span>
							<span>
								<i>Message</i>
								<textarea name="Message" placeholder="type your massage" required></textarea>
							</span>
                            <input type="submit" value="SUBMIT" name="sms">
                            <?php 
							if(isset($_POST['sms'])){
								include "chat.php";
								if ($_SESSION['student'] != $_POST['Email']){
					echo '<script type="text/javascript">alert("your username at sms is deffrent your username");</script>';
									} 
								$student = new chat();
								$student->setstudent_username($_POST['Email']);
								$student->settxt($_POST['Message']);
								$msg =$student->addstudent();
								
								}
							?>
						</form>
					</div>
				</div>
				<div class="col-md-6 agileits_mail_grid_left agileinfo_mail_grid_left">
					<div class="agileits_mail_grid_lft_grid wthree_mail_grid_lft_grid">
						<h4>Integer venenatis massa lobortis porta</h4>
						<ul>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Nulla nec facilisis turpis ac</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Eget ornare ex nisl nec lacus</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Ut tortor augue, placerat massa</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Quisque consectetur sagittis</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Curabitur mollis dignissim erat</li>
						</ul>
					</div>
					
				</div>
				<div class="col-md-6 agileits_mail_grid_lft_grid1 w3_agileits_mail_grid_lft_grid1">
							
									<h4><span>Twitter</span> Posts</h4>
									<ul>
										<li><a href="mailto:info@example.com">@Mark Lii</a> consequat dui id turpis
											<a href="#">http://example.com</a> auctor tellus eu nisi vehicula consequat.</li>
										<li><a href="mailto:info@example.com">@Henry Paul</a> sit amet dolor
											<a href="#">http://example1.com</a> porttitor suscipit orci semper, bibendum.</li>
										<li><a href="mailto:info@example.com">@John Carl</a> augue diam consequat mi
											<a href="#">http://example2.com</a> facilisis vitae, euismod vitae orci consequat.</li>
									</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //mail -->
<!-- footer -->
	<div class="footer">
	<div class="f-bg-w3l">
		<div class="container">
			<div class="col-md-4 w3layouts_footer_grid">
				<h2>Follow <span>Us</span></h2>
				<ul class="social_agileinfo">
					<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
			<div class="col-md-8 w3layouts_footer_grid">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email..." required>
					<input type="submit" value="">
				</form>
				<ul class="w3l_footer_nav">
					<li><a href="index.html">Home</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="icons.html">Web Icons</a></li>
					<li><a class="active" href="mail.html">Mail Us</a></li>
				</ul>
				<p>© 2017 Mastering. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>