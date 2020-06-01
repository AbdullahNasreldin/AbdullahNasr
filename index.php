<?php
session_start();
if(is_null($_SESSION['welcome'])){
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
<title>Mastering an Education Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mastering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/JiSlider.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script>

var check = function() {
  if (document.getElementById('ehab').value ==
    document.getElementById('sara').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'password and confirm are matched';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'password and confirm are not matched';
  }
}

</script>
<script>
function checkmailupdate() {
jQuery.ajax({
url: "ajax4.php",
data:'smail='+$("#student_mail").val(),
type: "POST",
success:function(data){
$("#msg1").html(data);

},

});
}
function checkphoneupdate()
 {
jQuery.ajax({
url: "ajax.php",
data:'sfon='+$("#student_phone").val(),
type: "POST",
success:function(data){
$("#msg2").html(data);

},

});
}
function checkuserupdate()
 {
jQuery.ajax({
url: "ajax3.php",
data:'usernames='+$("#student_username").val(),
type: "POST",
success:function(data){
$("#msg").html(data);

},

});
}

</script>
</head>
	
<body>
<!-- banner -->
<div class="main_section_agile">
		<div class="w3_agile_banner_top">
			<div class="agile_phone_mail">
				<ul class="agile_forms">
<li><a class="active" href="" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true">
</i> log out</a> </li>
<li><a href="" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> your profile</li>
<li><a href="" data-toggle="modal" data-target="#myModal4"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> update your profile</li>
<li><?php
include_once('student.php');
														$ses = new student;
	  $ff = $ses ->RUNSearch("select  * from student where (student_username = '".$_SESSION['welcome']."' OR
	 student_email = '".$_SESSION['welcome']."'
	 OR
	 student_phone = '".$_SESSION['welcome']."'
	 )
	 ");
								   
								   if($rows = mysqli_fetch_assoc($ff)){
   
	  $_SESSION['student'] = $rows['student_username'];
	  $_SESSION['year'] = $rows['year_name'];
	   ?>
<i aria-hidden="true" id="session"><?php echo "welcome : ".$_SESSION['student']." " ; ?> </i>
<?php  } ?>

</li>

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
<!-- banner -->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								 <span>Education</span>
									<h3>For the Creatives</h3>
									 <p>You can learn anything</p>
									
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
								<div class="agileits-banner-info">
								 <span>Free</span>
									<h3>Premium Courses</h3>
									 <p>You only have to know one thing</p>
									
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								 <span>Education</span>
									<h3>For the Creatives</h3>
									 <p>You can learn anything.</p>
									
								</div>	
								
							</div>
						</div>
					</li>

			</ul>
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
																	<h3 class="agileinfo_sign">are you sure that you want to log out?</h3>	
																			<div class="login-form">
																				<form method="post">
												
																					<div class="tp">
															<input type="submit" value="log out" name="logout">
																					</div>
                                                                                   <div class="tp">
															<input type="submit" value="cancle">
																					</div> 
                                                                              <?php 
								if(isset($_POST['logout'])){
									echo '<script type="text/javascript">window.location = "../web/logout.php"</script>';
								//	header('location:../web/logout.php');
								}
																			  ?>      
																				</form>
																			</div>
																			
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
																	<h3 class="agileinfo_sign">your profile</h3>	
																			<div class="login-form">
																				<form method="post">
				<p><?php echo " your ID: ".$rows['student_id']." " ; ?></p>
                <br>
                <p><?php echo " your name: ".$rows['student_name']." " ; ?></p>
                <br>
                <p><?php echo " your username: ".$rows['student_username']." " ; ?></p>
				<br>
                <p><?php echo " your password: ".$rows['student_password']." " ; ?></p>
                <br>
                <p><?php echo " your city: ".$rows['city_name']." " ; ?></p>
                <br>
                <p><?php echo " your birthdate: ".$rows['student_age']." " ; ?></p>
                <br>
                <p><?php echo " your mail: ".$rows['student_email']." " ; ?></p>
                <br>
                <p><?php echo " your phone: ".$rows['student_phone']." " ; ?></p>
                <br>
                <p><?php echo " your department: ".$rows['department_name']." " ; ?></p>
               								</form>
									</div>
											</div>
									</div>
															</div>
														</div>
													</div>
                            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">your profile</h3>	
																			<div class="login-form">
																				<form method="post">
                     
                     <h5> avaiable fields to be updated </h5>
 			   <input type="text" name="studentid" hidden value=" <?php echo " ".$rows['student_id']." " ; ?>" > 
               <input type="password" name="studentpassword" placeholder="Password" id="ehab" onkeyup="check()" >
			   <input type="password" name="confirm_password" onkeyup="check()" id="sara" />
 			   <span id="message"></span>
               <input type="submit" name="updatepass" value="update password" />
                   <?php
										if(isset($_POST['updatepass'])){
										$up = new student(); 
										$up->setstudent_password($_POST['studentpassword']);
										$up->setstudent_id($_POST['studentid']);
										$msg =$up->Updatepassword();
	echo '<script type="text/javascript">alert("your password `s been updated");</script>';
	echo '<script type="text/javascript">window.location = "../web/home.php"</script>';
																					}		
																					?>
                                    
               <input type="text" name="address" placeholder="your address"/>
               <input type="submit" name="updatepassaddress" value="update address"/>
               <?php
										if(isset($_POST['updatepassaddress'])){
										$up = new student(); 
										$up->setstudent_adress($_POST['address']);
										$up->setstudent_id($_POST['studentid']);
										$msg =$up->Updateaddress();
	echo '<script type="text/javascript">alert("your address `s been updated");</script>';
																					}		
																					?>
               
               <select name="city" >
                                               	<?php
														include_once('city.php');
														$city = new city;
								  $cityss = $city->RUNSearch("select  * from city ");
								   
								   while($arows = mysqli_fetch_assoc($cityss))
   {	?>
                                                             
                 <option value="<?php  echo($arows['city_name']);?>" ><?php  echo($arows['city_name']);?></option>
																			<?php } ?>
																					</select>
                            <input type="submit" value="update city" name="updatecity">                                                        
                                                                                    
                                       <?php
										if(isset($_POST['updatecity'])){
										$up = new student(); 
										$up->setcity_name($_POST['city']);
										$up->setstudent_id($_POST['studentid']);
										$msg =$up->Updatecity();
	echo '<script type="text/javascript">alert("your city `s been updated");</script>';
																					}		
																					?>                                              
                <input type="text" name="studentemail" id="student_mail" onBlur="checkmailupdate()" placeholder="your mail">
                <span id="msg1"> </span>
                    <input type="submit" value="update mail" name="updatemail">                                                                               
                                       <?php
										if(isset($_POST['updatemail'])){
										$up = new student(); 
										$up->setstudent_email($_POST['studentemail']);
										$up->setstudent_id($_POST['studentid']);
										$msg =$up->Updatemail();
	echo '<script type="text/javascript">alert("your email `s been updated");</script>';
																					}		
																					?>                        
                <input type="text" name="studentphone" id="student_phone" onBlur="checkphoneupdate()" placeholder="your phone">
                	<span id="msg2"> </span>
                     <input type="submit" value="update phone" name="updatefon">                                       <?php
										if(isset($_POST['updatefon'])){
										$up = new student(); 
										$up->setstudent_phone($_POST['studentphone']);
										$up->setstudent_id($_POST['studentid']);
										$msg =$up->Updatephone();
	echo '<script type="text/javascript">alert("your phone `s been updated");</script>';
																					}		
																					?>
                 			                                       </form>                 
																			</div>
																			<p><a href="#"> By clicking register, I agree to your terms</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>                        
													<!-- //Modal2 -->	

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<h5>Mastering</h5>
						<img src="images/2.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							e.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<h3>Join <span class="fixed_w3"> Mastering</span> today to start discovering thousand of content with minimum <span class="fixed_w3"> effort and cost! </span></h3>
			<div class="agileits_banner_bottom_grids">
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Mastering</h4>
						   <p>Education</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/2.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Mastering</h4>
						     <p>Education</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/3.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Mastering</h4>
						    <p>Education</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Mastering</h4>
						    <p>Education</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="team-w3ls-row">
				   <h3 class="w3l_header w3_agileits_header">Our <span>Insrtuctors</span></h3>
				   <div class="agileits_banner_bottom_grids">
				<div class="col-md-3 col-sm-6 team-grids">
					<img src="images/t1.jpg" alt=""/>
					<div class="img-caption w3-agileits">
						<div class="img-agileinfo-text">
							<h4>Alan Ipsum</h4>
							<p>English Instructor</p> 
							<div class="w3social-icons"> 
								<ul>
									<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
									<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
									<li><a href="#"><i class="fa fa-twitter"></i> </a></li> 
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids">
					<img src="images/t2.jpg" alt=""/>
					<div class="img-caption">
						<div class="img-agileinfo-text">
							<h4>Lana del Rey</h4>
							<p>PHP Instructor </p>
							<div class="w3social-icons"> 
								<ul>
									<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
									<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
									<li><a href="#"><i class="fa fa-twitter"></i> </a></li> 
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids">
					<img src="images/t3.jpg" alt=""/>
					<div class="img-caption">
						<div class="img-agileinfo-text">
							<h4>Mark John</h4>
							<p>English Instructor</p> 
							<div class="w3social-icons"> 
								<ul>
									<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
									<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
									<li><a href="#"><i class="fa fa-twitter"></i> </a></li> 
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids">
					<img src="images/t4.jpg" alt=""/>
					<div class="img-caption">
						<div class="img-agileinfo-text">
							<h4>Peter Parker</h4>
							<p>PHP Instructor</p>
							<div class="w3social-icons"> 
								<ul>
									<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
									<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
									<li><a href="#"><i class="fa fa-twitter"></i> </a></li> 
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div> 
			</div>
			</div>

		</div>
	</div>
<!-- //banner-bottom -->

	<!-- services -->
	<div class="services" id="services">
		<div class="container">
		<h3 class="w3l_header w3_agileits_header two">Our <span>Benefits</span></h3>
			<div class="agile_inner_w3ls-grids two">
				<div class="col-md-3 service-box">
					<figure class="icon">
					    <span>1</span>
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</figure>
					<h5>Experienced Faculty</h5>
					<p>Lorem ipsum dolor sit amet.doloremque laudantium elerisque.</p>
				</div>
				<div class="col-md-3 service-box">
				
					<figure class="icon">
					 <span>2</span>
					<i class="fa fa-laptop" aria-hidden="true"></i>
					</figure>
					<h5>Online Courses</h5>
					<p>Lorem ipsum dolor sit amet.doloremque laudantium elerisque.</p>
				</div>
				<div class="col-md-3 service-box">
					<figure class="icon">
					 <span>3</span>
						<i class="fa fa-book" aria-hidden="true"></i>
					</figure>
					<h5>Central Library</h5>
				<p>Lorem ipsum dolor sit amet.doloremque laudantium elerisque.</p>
				</div>
				<div class="col-md-3 service-box">
					<figure class="icon">
					 <span>4</span>
						<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
					</figure>
					<h5>Creative Thinking</h5>
					<p>Lorem ipsum dolor sit amet.doloremque laudantium elerisque.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- blog -->
	<div class="blog" id="blog">
		<div class="container">
		
		<h3 class="w3l_header w3_agileits_header"> Latest <span>  News</span></h3>
			<div class="agile_inner_w3ls-grids">
	
				<div class="col-sm-6 w3-agile-post-grids">
					<div class="w3-agile-post-img w3-agile-post-img1">
						<a href="#" data-toggle="modal" data-target="#myModal"> 
							<ul>
								<li><i class="fa fa-comments" aria-hidden="true"></i> 05</li>
								<li><i class="fa fa-heart" aria-hidden="true"></i> 874</li>
								<li><i class="fa fa-share" aria-hidden="true"></i> Share</li>
							</ul>
						</a>
					</div>
					<div class="w3-agile-post-info">
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Quisque a rhoncus</a></h4>
						<ul>
							<li>By <a href="#">Admin</a></li>
							<li>Jan 28th,2017</li>
						</ul>
						<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus.</p>
					</div>
				</div>
				<div class="col-sm-6 w3-agile-post-grids">
					<div class="w3-agile-post-img w3-agile-post-img2">
						<a href="#" data-toggle="modal" data-target="#myModal"> 
							<ul>
								<li><i class="fa fa-comments" aria-hidden="true"></i> 21</li>
								<li><i class="fa fa-heart" aria-hidden="true"></i> 287</li>
								<li><i class="fa fa-share" aria-hidden="true"></i> Share</li>
							</ul>
						</a>
					</div>
					<div class="w3-agile-post-info">
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Quisque a rhoncus</a></h4>
						<ul>
							<li>By <a href="#">Admin</a></li>
							<li>Feb 24th,2017</li>
						</ul>
						<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //blog -->
<!-- stats -->
	<div class="stats" id="stats">
	    <div class="container"> 
			<div class="inner_w3l_agile_grids">
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
		   <i class="fa fa-laptop" aria-hidden="true"></i>
			<p class="counter">45</p>
			<h3>Courses</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
		    <i class="fa fa-smile-o" aria-hidden="true"></i>
			<p class="counter">165</p>
			<h3>Members</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
		<i class="fa fa-trophy" aria-hidden="true"></i>
			<p class="counter">563</p>
			<h3>Awards</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
		<i class="fa fa-user" aria-hidden="true"></i>
			<p class="counter">245</p>
			<h3>Instructors</h3>
		</div>
		<div class="clearfix"> </div>
	</div>
   </div>	
</div>
<!-- //stats -->

<!-- testimonials -->		
	<div class="testimonials">
		<div class="col-md-6 w3layouts_event_left">
			<img src="images/test.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 w3layouts_event_right">
			<h3>what people says</h3>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3_event_right_grid">
								<div class="w3layouts_event_right_para">
									<p>Nam tempus lobortis sem non ornare. Curabitur dignissim interdum sem, et mollis lorem. 
										Mauris hendrerit, mi in aliquet egestas, nisi mi vestibulum turpis.</p>
									<div class="w3layouts_event_right_para_pos">
										<i class="fa fa-quote-left" aria-hidden="true"></i>
									</div>
								</div>
								<div class="w3_agile_event_right_grids">
									<div class="col-xs-4 w3_agile_event_right_grid_left">
										<img src="images/test1.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-xs-8 w3_agile_event_right_grid_right">
										<h4>Williams Stall</h4>
										<p>Graphic & web designer</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<li>
							<div class="w3_event_right_grid">
								<div class="w3layouts_event_right_para">
									<p>Nam tempus lobortis sem non ornare. Curabitur dignissim interdum sem, et mollis lorem. 
										Mauris hendrerit, mi in aliquet egestas, nisi mi vestibulum turpis.</p>
									<div class="w3layouts_event_right_para_pos">
										<i class="fa fa-quote-left" aria-hidden="true"></i>
									</div>
								</div>
								<div class="w3_agile_event_right_grids">
									<div class="col-xs-4 w3_agile_event_right_grid_left">
											<img src="images/test2.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-xs-8 w3_agile_event_right_grid_right">
										<h4>Catherine Mark</h4>
										<p>PHP & web developer</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //testimonials -->	

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
					<li><a href="index.html" class="active">Home</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="icons.html">Web Icons</a></li>
					<li><a href="mail.html">Mail Us</a></li>
				</ul>
				<p>© 2017 Mastering. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/JiSlider.js"></script>
<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- //footer -->
<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
  </script>
<!-- //flexSlider -->


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