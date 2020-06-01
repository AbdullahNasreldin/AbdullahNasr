<?php
session_start();
include_once "staff.php";
$_SESSION['stfs'];
if(is_null( $_SESSION['stfs'])){
		    echo '<script type="text/javascript">alert("you are not login");</script>';
			echo '<script type="text/javascript">window.location = "../web/home.php"</script>';
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Basic_tables :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Modern</a>
                <?php echo "welcome: ". $_SESSION['stfs']; ?>
            </div>
            <!-- /.navbar-header -->
           <form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                   <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                         <li>
                            <a href="statics.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>My Statics</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="question.php">add Question</a>
                                </li>
                                 <li>
                                    <a href="course.php">add Course</a>
                                </li>
                                 <li>
                                    <a href="lecture.php">add Lecture</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
 <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>log out & my profil<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="profil.php">My Profile</a>
                                </li>
                                <li>
                                    <a href="logout.php">LogOut</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>Basic Tables</h3>
  	
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
				<div class="panel-body no-padding">
					<table class="table table-striped">
						<thead>
                        
							<tr class="warning">
								<th>#</th>
								<th>current Data</th>
								<th>New Data</th>
								<th>action</th>
							</tr>
						</thead>
						<tbody>
                        <form method="post">
							
                            <?php
							$ses = new staff;
	  $ff = $ses ->RUNSearch("select  * from staff where staff_username = '".$_SESSION['stf']."' ");
								   
								   if($rows = mysqli_fetch_assoc($ff)){
   								
							?>
                       
                            	<tr>
                         <td> <input type="text" name="id" readonly hidden value="<?php echo $rows['staff_id']; ?>"/></td>       
					<td><input type="text" readonly value="<?php echo $rows['staff_password']; ?>"/> </td>
					<td><input type="text" name="password" value=""/></td>
					<td><input type="submit" name="updatepassword" value="update password"/></td>
							</tr> 
                            <tr>
                         <td> <input type="text" readonly hidden value="<?php echo $rows['staff_id']; ?>"/></td>       
					<td><input type="text" readonly value="<?php echo $rows['staff_adress']; ?>"/> </td>
					<td><input type="text" name="address" value=""/></td>
					<td><input type="submit" name="updateadress" value="update address"/></td>
							</tr> 
                            <tr>
                         <td> <input type="text" name="id" readonly hidden value="<?php echo $rows['staff_id']; ?>"/></td>       
					<td><input type="text" readonly value="<?php echo $rows['staff_phone']; ?>"/> </td>
					<td><input type="number" maxlength="11" name="phone" value=""/> </td>
					<td><input type="submit" name="updatephone" value="update phone"/></td>
							</tr> 
                            <tr>
                         <td> <input type="text" name="id" readonly hidden value="<?php echo $rows['staff_id']; ?>"/></td>       
					<td><input type="text" readonly value="<?php echo $rows['staff_email']; ?>"/> </td>
					<td><input type="email" name="mail" value=""/></td>
					<td><input type="submit" name="updatemail" value="update mail"/></td>
							</tr> 
                            <?php
							if(isset($_POST['updatepassword'])){
								$uppas = new staff();
								$uppas->setstaff_id($_POST['id']);
								$uppas->setstaff_password($_POST['password']);
								$msg = $uppas->Updatepassword();
					 echo '<script type="text/javascript">alert("your password `s been updated");</script>';
					 echo '<script type="text/javascript">window.location = "../home.php"</script>';
								}
								
								if(isset($_POST['updateadress'])){
									$upadd = new staff();
								$upadd->setstaff_id($_POST['id']);
								$upadd->setstaff_adress($_POST['address']);
								$msg = $upadd->Updateaddress();
					 echo '<script type="text/javascript">alert("your address `s been updated");</script>';
										}
										
										if(isset($_POST['updatephone'])){
									$upfon = new staff();
								$upfon->setstaff_id($_POST['id']);
								$upfon->setstaff_phone($_POST['phone']);
								$msg = $upfon->Updatephone();
					 echo '<script type="text/javascript">alert("your phone `s been updated");</script>';
										}
										
										if(isset($_POST['updatemail'])){
								$upmail = new staff();
								$upmail->setstaff_id($_POST['id']);
								$upmail->setstaff_email($_POST['mail']);
								$msg = $upmail->Updatemail();
					 echo '<script type="text/javascript">alert("your mail `s been updated");</script>';
										}
							?>
                            <?php } ?>
                            
                             <tr>
                             
                         <td> <input type="text" name="id" readonly hidden value="<?php echo($rows['staff_id']);?>"/></td>       
					<td><input type="text" readonly value="<?php echo($rows['city_name']);?>"/> </td>
					<td>
                    <select name="city">
                    <?php
									
									include_once "city.php";					
														$city = new city;
								  $city = $city->RUNSearch("select  * from city ");
								   while($rowsss = mysqli_fetch_assoc($city))
 											  {	?>
                                                            <option ><?php  echo($rowsss['city_name']);?></option>
																			<?php } ?>
                    </select>
                    </td>
					<td><input type="submit" name="updatecity" value="update city"/></td>
                    <?php
					if(isset($_POST['updatecity'])){
						$upcity = new staff();
								$upcity->setstaff_id($_POST['id']);
								$upcity->setcity_name($_POST['city']);
								$msg = $upcity->Updatecity();
					 echo '<script type="text/javascript">alert("your city `s been updated");</script>';
								
						
						}
					?>
							</tr>
                            </form>
							</tbody>
					</table>
				</div>
	</div>
	 </div>
      </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
