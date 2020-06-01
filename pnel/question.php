<?php
session_start();
$stf= $_SESSION['stf'];
if(is_null($stf)){
		    echo '<script type="text/javascript">alert("you are not login");</script>';
			echo '<script type="text/javascript">window.location = "../home.php"</script>';
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
                <a class="navbar-brand" href="index.html">Modern</a>
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
								<th>name of exam</th>
								<th>question</th>
								<th>your answers</th>
								<th>course</th>
								<th>true answer</th>
                                </tr>
						</thead>
						<tbody>
                        <?php 
						
						include_once('exam.php');
														$ses = new exam;
	  $ff = $ses ->RUNSearch("select  * from exam where staff_username = '".$_SESSION['stf']."' ");
								   
								   while($rows = mysqli_fetch_assoc($ff)){
	   					?>
							<tr>
                            <form method="post">
		<td><input type="text" readonly  name="user" value="<?php echo $rows['exam_name']; ?>"/></td>
        <td><input type="text" size="50" readonly  name="user" value="<?php echo $rows['exam_questions']; ?>"/></td> 
        
		<td>
        <select>
        <option><?php echo $rows['answerf']; ?></option> 
		<option><?php echo $rows['answers']; ?></option> 
		<option><?php echo $rows['answert']; ?></option>
        <option><?php echo $rows['answerd']; ?></option>
        </select>
        </td>
        <td><input type="text" readonly  name="user" value="<?php echo $rows['courses_name']; ?>"/></td>
        <td><input type="text" readonly  name="user" value="<?php echo $rows['true_answer']; ?>"/></td> 
		<td><input type="submit" name="crs<?php // echo $rows['courses_name']; ?>" value="delete course"/></td>
      
							<?php
							$crs = "crs";
							$nm = $rows['courses_name'];
							$cors = "cors";
							if(isset($_POST[$crs.$nm])){
								$dltcrs = new courses();
								$x = $_POST[$cors.$nm];
								 $dltcrs->setcourses_name($x);
								$msg = $dltcrs->Deletes($x);
								echo '<script type="text/javascript">alert("course deleted");</script>';
								}
							?>
                            </form>
                            </tr>
						<?php  } ?>	
                        
						</tbody>
                        
					</table>
                  
                   
                    <table border="2">
                     <form method="post" >
                        <input type="submit" name="addnew" value="add"/>
                        <br><br>
						<?php	
						if(isset($_POST['addnew'])){
						?>
                                <tr>
                                <input type="text" name="newqus" value="" placeholder="your question">
                                </tr>
								<tr>
                                <input type="text" name="newstf"  readonly value="<?php echo $_SESSION['stf']; ?>" />
                                </tr>
                                <tr>
                                <input type="text" name="fans" value="" placeholder="1st answer" />
                               
                                </tr>
                                 <tr>
                                <input type="text" name="sans" value="" placeholder="2nd answer" />
        					    </tr>
                                 <tr>
                                <input type="text" name="tans" value="" placeholder="3rd answer" />
                                </tr>
                                <tr>
                                <input type="text" name="foans" value="" placeholder="4th answer" />
                                </tr>
                                <tr> <input type="text" name="trueanswer" value=""/>
                               </tr>
                                
<th><select name="newcrs" >
<option>select your cource</option>
<?php
include_once('courses.php');
														$se = new courses;
	  $ff = $se ->RUNSearch("select  * from courses where staff_username = '".$_SESSION['stf']."' ");
								   
								   while($row = mysqli_fetch_assoc($ff)){
	   					?>
<option><?php echo $row['courses_name']; ?></option>
<?php } ?>
</select></th>
								
								<th><input type="submit" name="addcrs" value="add course"></th>
                             <?php } ?>   
                               
								<?php
								if(isset($_POST['addcrs'])){
									$addcrs = new exam();
								//	$addcrs->setlecture_id(rand(1,999999999999999));
									$addcrs->setexam_name($_POST['newcrs']);
									$addcrs->setexam_questions($_POST['newqus']);
									$addcrs->setanswerf($_POST['fans']);
									$addcrs->setanswers($_POST['sans']);
									$addcrs->setanswert($_POST['tans']);
									$addcrs->setanswerd($_POST['foans']);
									
									$addcrs->setstaff_username($_POST['newstf']);
									$addcrs->setcourses_name($_POST['newcrs']);
									$addcrs->settrue_answer($_POST['trueanswer']);
									$msg =  $addcrs->Add();	
									echo '<script type="text/javascript">alert("question added");</script>';								}
								?>
						 </form>
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
