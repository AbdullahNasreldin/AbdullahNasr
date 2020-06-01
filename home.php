 <?php 
session_start();
include_once ("student.php");
include_once ("staff.php");
require_once "src/PHPMailer.php";
require_once "src/Exception.php";
require_once "src/SMTP.php";
require_once "vendor/autoload.php";
if(isset($_GET['forget'])){
	 $pin = rand(11111,99999) ;
	$student = new student;
	 $student ->setstudent_username($_GET['reset']);
	 $student ->setstudent_phone($_GET['reset']);
	 $student ->setstudent_email($_GET['reset']);
	 $student ->setpin_code($pin);
	 $msg = $student ->subrecovery();
	 $stu = new student;
	 $stus = $stu->RUNSearch("select * from student where (student_username = '".$_GET['reset']."' OR
	 student_email = '".$_GET['reset']."'
	 OR
	 student_phone = '".$_GET['reset']."'
	 ) ");
	 if($rows = mysqli_fetch_assoc($stus))
   { $to = $rows['student_email'];
  	 $us = $rows['student_username'];
    }
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true ;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465 ; //or 587
	$mail->smtpConnect();
	$mail->isHTML(true);
	$mail->Username = "thebestlawyer54@gmail.com";
	$mail->Password = "Body@1515";
	$mail->setFrom('thebestlawyer54@gmail.com','the university');
	$mail->addAddress($to,$us);
	$mail->Subject = 'reset password';
	$mail->Body = "
	your pin code is'".$pin."'enter it within 5 min <br/> 
   through this link <a href='http://localhost/online/web/test.php?student_username=".$us."'>click to this link</a>'	
	";
	if(!$mail->send()){
		
		echo '<script type="text/javascript">alert("opps there are a technical issue try again""'.$mail->ErrorInfo.'");</script>';
		echo "mailer error : ".$mail->ErrorInfo;
		
		}
		else {
	echo '<script type="text/javascript">alert("pin code sent to your mail check");</script>'; 
	 }
	 }
  

													  if(isset($_POST['log'])){
														
																			  $_SESSION['welcome']= $_POST['emailstu'];

																			
																			  $stustatus =$_POST['statuses'];
																		    $student = new student ;
																			$student ->setstudent_username($_POST['emailstu']);
																			$student ->setstudent_phone($_POST['emailstu']);
																		    $student ->setstudent_email ($_POST['emailstu']);
																			$student->setstudent_password($_POST['passwordstu']);
																			$rows = $student-> Login();

if(is_null($_POST['passwordstu'])){echo '<script type="text/javascript">alert("enter your password");</script>';}

			 switch ($stustatus) {
    case "pennding":
        echo '<script type="text/javascript">alert("this account still pennding");</script>';
        break;
	case "rejected":
        echo '<script type="text/javascript">alert("this account may be rejected refer back to admin");</script>';
        break; 	 
		case "approved":
		if( $aa = mysqli_num_rows($rows))
     	 {
			 header('location:../web/index.php');
	}
else echo '<script type="text/javascript">alert("invalide username or password");</script>';
//	header('location:../web/home.php');
		
		 }
		 }									
		 
		 										if(isset($_POST['logstf'])){
												$_SESSION['stf']= $_POST['emailstf'];
												$sttusstf =$_POST['sttusstf'];
												$logstf = new staff ;
												$logstf ->setstaff_username($_POST['emailstf']);
												$logstf ->setstaff_phone($_POST['emailstf']);
												$logstf ->setstaff_email ($_POST['emailstf']);
												$logstf->setstaff_password($_POST['passwordstf']);
												$rows = $logstf-> Login();

if(is_null($_POST['passwordstf'])){echo '<script type="text/javascript">alert("enter your password");</script>';}
 
		 switch ($sttusstf) {
         case "pennding":
         echo '<script type="text/javascript">alert("this account still pennding");</script>';
         break;
	     case "rejected":
         echo '<script type="text/javascript">alert("this account may be rejected refer back to admin");</script>';
         break; 	 
		 case "approved":
		 if( $aa = mysqli_num_rows($rows))
     	 {
				echo '<script type="text/javascript">window.location = "../web/pnel/index.php"</script>';
		 }
		else echo '<script type="text/javascript">alert("invalide username or password");</script>';
		 }
		 }
		 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mastering an Education Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mastering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script src="jquery.js"></script>
<script src="jquery-2.2.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="dropdown-ajax.js" type="text/javascript"></script>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
        	function showstudent() {
  var x = document.getElementById("v");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
        	function logstudent() {
  var x = document.getElementById("ww");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
        	function logstaff() {
  var x = document.getElementById("qq");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function showstaff() {
  var a = document.getElementById("c");
  if (a.style.display === "none") {
    a.style.display = "block";
  } else {
    a.style.display = "none";
  }
}
$('#input2').on('change', function () {
  var input1 = $('#ehab1').val();
var input2 = $('#ehab2').val();
if(input1 === input2) {
 $('#label').removeClass ('matchclass');
}
else {
 $('#label').addClass('matchclass');
}
});
$('#ehab, #sara').on('keyup', function () {
  if ($('#ehab').val() == $('#sara').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});


</script>
</script>
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



var checks = function() {
  if (document.getElementById('ehabs').value ==
    document.getElementById('saras').value) {
    document.getElementById('messages').style.color = 'green';
    document.getElementById('messages').innerHTML = 'password and confirm are matched';
  } else {
    document.getElementById('messages').style.color = 'red';
    document.getElementById('messages').innerHTML = 'password and confirm are not matched';
  }
}
</script>
<script>
$(document).ready(function(){
	$('#cars').change(function(){
		var gov_names = $(this).val();
	if(gov_names)
{		$.ajax({
			url : "ajax2.php",
			method : "POST",
			data :'gov_name='+gov_names,
			datatype :"text",
			success:function(html){

$('#citys').html(html);
}
})
}
});
});

$(document).ready(function(){
	$('#carses').change(function(){
		var gov_names = $(this).val();
	if(gov_names)
{		$.ajax({
			url : "ajax2.php",
			method : "POST",
			data :'gov_name='+gov_names,
			datatype :"text",
			success:function(html){

$('#cityses').html(html);
}
})
}
});
});
</script>

<script>
function checkusersAvailability() {
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

<script>
function checkmailsAvailability() {
jQuery.ajax({
url: "ajax4.php",
data:'smail='+$("#student_mail").val(),
type: "POST",
success:function(data){
$("#mssg").html(data);

},

});
}

function stfsttus() {
jQuery.ajax({
url: "ajaxstfusers.php",
data:'stfstus='+$("#stfstus").val(),
type: "POST",
success:function(data){
$("#msgstfstus").html(data);

},

});
}


function checkfonsAvailability
() {
jQuery.ajax({
url: "ajax.php",
data:'sfon='+$("#student_phone").val(),
type: "POST",
success:function(data){
$("#mssag").html(data);

},

});
}

function checkstfusersAvailability
() {
jQuery.ajax({
url: "ajaxstfusers.php",
data:'stfusers='+$("#staff_username").val(),
type: "POST",
success:function(data){
$("#msgstfusers").html(data);

},

});
}

function checkstffonAvailability
() {
jQuery.ajax({
url: "ajaxstfusers.php",
data:'stffon='+$("#staff_phone").val(),
type: "POST",
success:function(data){
$("#msgstfphone").html(data);

},

});
}

function checkstfmailAvailability
() {
jQuery.ajax({
url: "ajaxstfusers.php",
data:'stfmail='+$("#staff_mail").val(),
type: "POST",
success:function(data){
$("#msgstfmail").html(data);

},

});
}


</script>
<script>
function sstatus
() {
jQuery.ajax({
url: "ajaxss.php",
data:'sstus='+$("#student_status").val(),
type: "POST",
success:function(data){
$("#st").html(data);

},

});
}

function stfsttuscheck
() {
jQuery.ajax({
url: "ajaxss.php",
data:'stfstus='+$("#stfstuss").val(),
type: "POST",
success:function(data){
$("#msgstfstuss").html(data);

},

});
}
</script>

	<style>
	#v{
		display: none;
	}
	#c{
		display: none;
	}
	#qq{
		display: none;
	}
	#ww{
		display: none;
	}
</style>

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
</head>
	
<body>
<!-- banner -->
<div class="main_section_agile">
		<div class="w3_agile_banner_top">
			<div class="agile_phone_mail">
				<ul class="agile_forms">
					<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a> </li>
					<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up</a> </li>
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
                                                                    <button  onclick="logstaff()">login as staff </button>
																	<button  onclick="logstudent()">login as student </button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign In</h3>	
																			<div class="login-form" id="ww">
																				<form method="post">
		<input type="text" name="emailstu" placeholder="Enter your email , phone or  username" onBlur="sstatus()" id="student_status" required>
                         <select name="statuses" hidden id="st">
                           </select>                         
                       <input type="password" name="passwordstu" placeholder="Password" >
                    <input type="checkbox" name="check" >
        		         <span>remember me ? </span>
                         
                     		
                            														<div class="tp">
												<input type="submit" name="log" value="Sign In">
																					</div>
                         	</form>
                                                    
													 <form method="get">
   <input type="text" name="reset" placeholder="Enter your email , phone or  username" required>
                            <input type="submit" name="forget" value="forget password" >
                      		</form> 
										
                              
																			</div>
                                                                            <div class="login-form" id="qq">
																				<form method="post" >
			<input type="text" name="emailstf" placeholder="E-mail" id="stfstuss" onBlur="stfsttuscheck()" required>
            
            <select id="msgstfstuss" name="sttusstf" hidden>
            
            </select>
			<input type="password" name="passwordstf" placeholder="Password" required>
						<div class="tp">
				<input type="submit" name="logstf" value="Sign In">
			</div>
			</form>
            <form method="get">
            <input type="password" name="forgetstf" placeholder="enter your username email or phone" required>
						<div class="tp">
				<input type="submit" name="resetstf" value="forget password">
			</div>
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
															<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
														
																		<button onclick="showstaff()">apply as staff </button>
																	<button onclick="showstudent()">apply as student </button>
														
																		
																	<div class="signin-form profile">
				
																	<h3 class="agileinfo_sign">Registrate</h3>	
																			<div class="login-form" id="v" >
																			
                                      	<form  method="post">	
								 <input type="text" name="studentname" id = "name" placeholder="your full name" required>	
																				  
	
                  <input type="text" name="studentusername" placeholder="username"  id="student_username" onBlur="checkusersAvailability()" />
    <span id="msg"></span>   

							<input type="password" name="studentpassword" placeholder="Password" id="ehab" onkeyup="check()" required>
																					
  <input type="password" name="confirm_password" onkeyup="check()" id="sara" />
  <span id="message"></span>
                                                                                   
																					<input type="text" name="studentadress" placeholder="your address" required>
                                                                                   
                                                                                    <P>YOUR GOVERNRATE</P>
																					<select id="cars" name="gov" >
                                                                                   	<?php
														include_once('gov.php');
														$aa = new gov;
								  $ff = $aa->RUNSearch("select  * from gov ");
								   
								   while($rows = mysqli_fetch_assoc($ff))
   {	?>
                                                            <option ><?php  echo($rows['gov_name']);?></option>
																			<?php } ?>
																					</select>

																					
																				
																					<P>YOUR CITY</P>
																					<select id="citys" name="city" >
                                                                                   
																					</select>
																					<P>YOUR birthdate</P>
																					<input type="date" name="studentdate"  required>
																					<P>YOUR email</P>
																					<input type="email" name="studentemail" placeholder="your Email" onBlur="checkmailsAvailability()" id="student_mail" required>
                                                                                    <span id="mssg"></span>
																					<P>YOUR phone number</P>
																					<input type="number" name="studentphone" placeholder="your Phone Number" onBlur="checkfonsAvailability()" maxlength="11" id="student_phone" required>
                                                                                    <br/>
                                         <span id="mssag"></span>                                           
																                  <P>YOUR year</P>
																					<select  name="year" >
                                                                                    					<?php
																			include_once('year.php');
																				   $jj = new year;
								  $rr = $jj->RUNSearch("select  * from year ");
								   
								   while($rows = mysqli_fetch_assoc($rr))
   {	?>
                                                                  
                                                                  <option ><?php  echo($rows['year_name']);?></option>
																  <?php } ?>
                                                                                    </select>
                                                                                  <P>YOUR payment</P>
																					<select name="status" >
                                                                                   <option value="pennding">pennding</option>
																					</select>  
																					<P>YOUR payment</P>
																					<select name="payment" >
                                                                                    <option value="paid">paid</option>
                                                                                    <option value="not paid">not paid</option>
                                                                                    <option value="installing">installing</option>
																					</select>
																					<P>YOUR department</P>
																					<select  name="department" >
                                                          	<?php
														include_once('department.php');
														$aa = new department;
								  $ff = $aa->RUNSearch("select  * from department ");
								   
								   while($rows = mysqli_fetch_assoc($ff))
   {	?>
                                                            <option ><?php  echo($rows['department_name']);?></option>
																			<?php } ?>
																					</select>
																					<input type="submit" value="apply" name = "studentbtn" onClick="studentconf">
                                                                                    </form>
																					<?php
																					include_once"student.php";
																					if(isset($_POST['studentbtn'])){
										$student = new student(); 
										$student->setstudent_name($_POST['studentname']);
										$student->setstudent_username($_POST['studentusername']);
										$student->setstudent_password($_POST['studentpassword']);
										$student->setstudent_adress($_POST['studentadress']);																						
										$student->setcity_name($_POST['city']);
										$student->setstudent_age($_POST['studentdate']);
										$student->setstudent_email($_POST['studentemail']);
										$student->setstudent_phone($_POST['studentphone']);
										$student->setyear_name($_POST['year']);
										$student->setstudent_status($_POST['status']);
										$student->setstudent_payment($_POST['payment']);
										$student->setdepartment_name($_POST['department']);
										$msg =$student->Add();
	echo '<script type="text/javascript">alert("your accout `s been created check your mail for approving  ");</script>';
																				}		
																					?>
																				
																	 </div>
																				
																	
                                                                    		<div class="login-forms" id="c">
																				<form action="#" method="post">	
			        <input type="text" name="stfname" placeholder="Name" required>
                    <input type="text" name="stfusername" placeholder="Username" id="staff_username" onBlur="checkstfusersAvailability()" required>
					<span id="msgstfusers"></span>
				    <input type="password" name="stfpassword" placeholder="Password" id="ehabs" onkeyup="checks()" required>																					
  					<input type="password" name="confirm_password" onkeyup="checks()" id="saras" placeholder="confirm_password" />
  					<span id="messages"></span>
                    <P>YOUR GOVERNRATE</P>
																					<select id="carses" name="gov" >
                             <option >select a governrate</option>
                                                                                   	<?php
														
														$gov = new gov;
								  $govss = $gov->RUNSearch("select  * from gov ");
								   
								   while($rowsss = mysqli_fetch_assoc($govss))
   {	?>
                                                            <option ><?php  echo($rowsss['gov_name']);?></option>
																			<?php } ?>
																					</select>
											<P>YOUR CITY</P>
										<select id="cityses" name="stfcity" >
                                              	</select>
                   <input type="text" name="stfaddress" placeholder="Address" required>
                   <input type="date" name="stfage" placeholder="your birth date" required>
                   <br/>
                   <br/>
                   <select  name="stfdepartment" >
                                                          	<?php
														include_once('department.php');
														$aa = new department;
								  $ff = $aa->RUNSearch("select  * from department ");
								   
								   while($rows = mysqli_fetch_assoc($ff))
   {	?>
                                                            <option ><?php  echo($rows['department_name']);?></option>
																			<?php } ?>
																					</select>
                                                 <br>
                                                 <br>
                                                 <select name="stfsttus">
                                                 <option>pennding</option>
                                                 </select>
                                                 <br>
                                                 <br>
           
 <input type="number" name="stfphone" id="staff_phone" onBlur="checkstffonAvailability()" placeholder="your phone" required>
 <br>
 <span id="msgstfphone"></span> 
 <br>
    <input type="email" name="stfemail" placeholder="Email" id="staff_mail" onBlur="checkstfmailAvailability()" required>
    <br>
    <span id="msgstfmail"></span>
    <br>
                   <select name="rank">
                   <option>assistant</option>
                   <option>doctor</option>
                   <option>prof.doctor</option>
                   <option>demenstrator</option>
                   </select>
                   <input type="submit" value="Sign Up" name="stfreg">
                   <?php
				   if(isset($_POST['stfreg'])){
					   $ins = new staff;
					   
					   $ins->setstaff_name($_POST['stfname']); 
					   $ins->setstaff_username($_POST['stfusername']);
					   $ins->setstaff_password($_POST['stfpassword']);
					   $ins->setcity_name($_POST['stfcity']);
					   $ins->setstaff_adress($_POST['stfaddress']);
					   $ins->setstaff_age($_POST['stfage']);
					   $ins->setdepartment_name($_POST['stfdepartment']);
					   $ins->setstaff_status($_POST['stfsttus']);
					   $ins->setstaff_phone($_POST['stfphone']);
					   $ins->setstaff_email($_POST['stfemail']);
					   $ins->setstaff_rank($_POST['rank']);					   
					  $msg =$ins->Add(); 
	 echo '<script language="javascript">alert("your accout `s been created check your mail for approving");</script>';
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</body>
</html>