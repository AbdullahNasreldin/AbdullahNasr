<?php
session_start();
if(is_null($_SESSION['student'])){
	
	        echo '<script type="text/javascript">alert("you are not login");</script>';
			echo '<script type="text/javascript">window.location = "../web/home.php"</script>';
			// header('location:../web/home.php');
								 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mastering an Education Category Flat Bootstrap Responsive Website Template | Gallery :: w3layouts</title>
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
					<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> log out</a> </li>
<li><a href="#" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
 <?php echo "welcome ". $_SESSION['student']; ?></a> </li>
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
					<h1><a class="navbar-brand" href="#"><i>M</i><span>astering</span></a></h1>
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
			<h2>Gallery</h2>
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
																	<h3 class="agileinfo_sign">logout</h3>	
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
																	
																	  </div>
															</div>
														</div>
													</div>
													<!-- //Modal2 -->	

<div class="contact">
  <div class="container">
	<h3 class="w3l_header w3_agileits_header">your<span>Exams</span></h3>
    <form method="post">
    <select name="select" >
    <?php
include_once('examination.php');
									$ses = new examination;
	  $ff = $ses ->RUNSearch("select * from examination where student_username = '".$_SESSION['student']."' and examination_status
	   ='not done' ");
	 							    while($rows = mysqli_fetch_assoc($ff)){
									//$_SESSION['exam']= $rows['exam_name'] ;
									   ?>
    <option><?php echo $rows['exam_name']; ?></option>
     <?php } ?>
   </select>
   <input type="submit" value="enter the exam" name="exam">
   <?php
   if(isset($_POST['exam'])){
	  
	   $_SESSION['exam']= $_POST['select'] ;
	   echo '<script type="text/javascript">alert("be informed that the time `ll start from now and good luck");</script>';
			echo '<script type="text/javascript">window.location = "../web/draft.php"</script>'; 
			
	   }
   ?>
   </form>
    <h3 class="w3l_header w3_agileits_header">Our <span>Gallery</span></h3>
			<div class="inner_w3l_agile_grids-gal">
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/1.jpg" class="swipebox"><img src="images/1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Mastering</h4>
						<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
							
						</div>
				</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/2.jpg" class="swipebox"><img src="images/2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Mastering</h4>
						<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
						
						</div>
				</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/3.jpg" class="swipebox"><img src="images/3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Mastering</h4>
							<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
							
						</div>
				</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/4.jpg" class="swipebox"><img src="images/4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Mastering</h4>
							<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
							
						</div>
				</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/5.jpg" class="swipebox"><img src="images/5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Mastering</h4>
							<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
							
						</div>
					</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/6.jpg" class="swipebox"><img src="images/6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Mastering</h4>
							<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/7.jpg" class="swipebox"><img src="images/7.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Mastering</h4>
							<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/8.jpg" class="swipebox"><img src="images/8.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Mastering</h4>
							<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
					<div class="col-md-4 gallery-grid gallery1">
					<a href="images/2.jpg" class="swipebox"><img src="images/2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Mastering</h4>
							<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
							
						</div>
				</a>
				</div>
			
				<div class="clearfix"> </div>
			</div>
		</div>	
	</div>	
	<!--//gallery-->


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
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
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
<!-- start-smooth-scrolling -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>


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