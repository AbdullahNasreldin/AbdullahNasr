<?php
session_start();
$a;
$s;
$d;
$f;
$g;
$total;
$count;
$_SESSION['student'];
$_SESSION['exam'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<table border="5">
  <tr>
    <th>question</th>
    <th>true answer</th>
    <th>your answer</th>
    <th>mark</th>
  </tr>
  <tr>
    <td><?php echo $_SESSION['q5']; ?></td>
    <td><?php   $_SESSION['t5'] ; ?></td>
 	<td><?php echo $_SESSION['an5']; ?></td>
    <td><?php
	if($_SESSION['t5'] == $_SESSION['an5']){
		$a = 1 ;
		}
		else $a = 0 ;
		echo $a;
	 ?></td>
    
  </tr>
  
  <tr>
    <td><?php echo $_SESSION['q4']; ?></td>
    <td><?php  $_SESSION['t4']; ?></td>
 	<td><?php echo $_SESSION['an4']; ?></td>
     <td><?php
	if($_SESSION['t4'] == $_SESSION['an4'] ){
		$s = 1 ;
		}
		else $s = 0 ;
		echo $s;
	 ?></td>
 
  </tr>
  
   <tr>
    <td><?php echo $_SESSION['q3']; ?></td>
    <td><?php  $_SESSION['t3']; ?></td>
 	<td><?php echo $_SESSION['an3']; ?></td>
     <td><?php
	if($_SESSION['t3'] == $_SESSION['an3'] ){
		$d = 1 ;
		}
		else $d = 0 ;
		echo $d;
	 ?></td>
 </tr>
  
   <tr>
    <td><?php echo $_SESSION['q2']; ?></td>
    <td><?php  $_SESSION['t2']; ?></td>
 	<td><?php echo $_SESSION['an2']; ?></td>
     <td><?php
	if($_SESSION['t2'] == $_SESSION['an2'] ){
		$f = 1 ;
		}
		else $f = 0 ;
		echo $f;
	 ?></td>
 
  </tr>
  
   <tr>
    <td><?php echo $_SESSION['q1']; ?></td>
    <td><?php  $_SESSION['t1']; ?></td>
 	<td><?php echo $_SESSION['an1']; ?></td>
     <td><?php
	if($_SESSION['t1'] == $_SESSION['an1'] ){
		$g = 1 ;
		}
		else $g = 0 ;
		echo $g;
	 ?></td>
 
  </tr>
</table>
<form method="post">

you could get :
<input type="text" value="<?php 
$total = $a + $s + $d + $f + $g ;
echo $total ?>  / <?php 
$count =array ($a ,$s , $d , $f , $g ) ;
$counts = count ($count);
echo $counts;
$perc = $total/$counts ;
$dgree ;
 ?>"  />
 
<br/>
<span>your percentage is :</span>
<input type="text" value="
<?php
echo $perc ;
if ($perc < 0.6 ) {
	$dgree = "failed";
	} 
	else if ($perc < 0.7 ) {
	$dgree = "passed";
	}
	else if ($perc < 0.8 ) {
	$dgree = "good";
	} 
	else if ($perc < 0.9 ) {
	$dgree = "v.good";
	} 
	else {
	$dgree = "exclent";
	}  
 ?>" />
 <br />
 <span>your degree:</span>
 <input type="text" name="grade" value="
 <?php 
 echo $dgree ;
 ?>" />
 <br/>
 <input type="submit" name="studentbtn" value="submit your result"  />
 <?php 
 															include_once"examination.php";
															include_once"examname.php";
															require_once('classes.php');
																					if(isset($_POST['studentbtn'])){
																					
											$student = new examination();
											$rere = new examname(); 
										$student->setgrade($_POST['grade']);
										$student->setstudent_username($_SESSION['student']);
										$student->setexam_name($_SESSION['exam']);
										$rere->setstudent_username($_SESSION['student']);
										$rere->Update();
										$msg =$student->Add();
	
	echo '<script type="text/javascript">alert("your accout `s been created check your mail for approving  ");</script>';
	echo '<script type="text/javascript">window.location = "../web/home.php"</script>';																				}
 ?>
 </form>
 </body>
</html>