<?php
include_once('exam.php');
session_start();
$_SESSION['exam'];
if(is_null($_SESSION['student']) || is_null($_SESSION['exam'])){
	$_SESSION['year'];
	        echo '<script type="text/javascript">alert("you are not login");</script>';
			echo '<script type="text/javascript">window.location = "../web/home.php"</script>';
								 }
								 
?>
<html>
<head>

</head>
<body>
<p>welcome : <?php echo $_SESSION['student']; ?> </p>
<p>it is  <?php echo $_SESSION['exam']; ?> exam  </p>
<span> your questions :</span>


														
            
            <form method="post">
            <div id="goga5">
           <?php
		   $ses = new exam;
	  $ff = $ses ->RUNSearch("select  * from exam where exam_name = '".$_SESSION['exam']."'  ORDER BY RAND() ");
	 							   
								   if($rows = mysqli_fetch_assoc($ff)){
									   
		    ?>
          <table style="width:100%" border="5">
  <tr>
    <th colspan="1" >question</th>
    <th colspan="2">answer</th>
  </tr>
  <tr></tr>
  <tr>
    <td><input type="text" size="100" name="q5"  value="<?php echo $rows['exam_questions'];?>"/> </td>
  </tr>
   <tr>
   <div style="display:none">
   <td><input type="radio"  name="t5" checked  value="<?php echo $rows['true_answer']; ?>" ></td>
  </div>
<td><input type="radio"  name="an5" value="<?php echo $rows['answerf'];?>"/> <?php echo " :" .$rows['answerf'];?></td>
<td><input type="radio"  name="an5" value="<?php echo $rows['answers'];?>"/><?php echo " :" .$rows['answers'];?></td>
<td><input type="radio"  name="an5" value="<?php echo $rows['answert'];?>"/><?php echo $rows['answert'];?></td>
<td><input type="radio"  name="an5" value="<?php echo $rows['answerd'];?>"/><?php echo $rows['answerd'];?></td>
  </tr>
  </table>
<?php } ?>
</div>
<br><br>
           <div id="goga4">
           <?php
		   $ses = new exam;
	  $ff = $ses ->RUNSearch("select  * from exam where exam_name = '".$_SESSION['exam']."'  ORDER BY RAND() ");
	 							   
								   if($rows = mysqli_fetch_assoc($ff)){
									   
		    ?>
          <table style="width:100%" border="5">
  <tr>
    <th colspan="1" >question</th>
    <th colspan="2">answer</th>
  </tr>
  <tr></tr>
  <tr>
    <td><input type="text" size="100" name="q4" value="<?php echo $rows['exam_questions'];?>"/> </td>
  </tr>
   <tr>
   <td><input type="radio"  name="t4" checked value="<?php echo $rows['true_answer']; ?>" ></td>
<td><input type="radio"  name="an4" value="<?php echo $rows['answerf'];?>"/> <?php echo " :" .$rows['answerf'];?></td>
<td><input type="radio"  name="an4" value="<?php echo $rows['answers'];?>"/><?php echo " :" .$rows['answers'];?></td>
<td><input type="radio"  name="an4" value="<?php echo $rows['answert'];?>"/><?php echo $rows['answert'];?></td>
<td><input type="radio"  name="an4" value="<?php echo $rows['answerd'];?>"/><?php echo $rows['answerd'];?></td>
  </tr>
  </table>
<?php } ?>
</div>
<br><br> 
<div id="goga2">
           <?php
		   $ses = new exam;
	  $ff = $ses ->RUNSearch("select  * from exam where exam_name = '".$_SESSION['exam']."'  ORDER BY RAND() ");
	 							   
								   if($rows = mysqli_fetch_assoc($ff)){
									   
		    ?>
          <table style="width:100%" border="5">
  <tr>
    <th colspan="1" >question</th>
    <th colspan="2">answer</th>
  </tr>
  <tr></tr>
  <tr>
    <td><input type="text" size="100" name="q3" value="<?php echo $rows['exam_questions'];?>"/> </td>
  </tr>
   <tr>
   <td><input type="radio"  name="t3" checked value="<?php echo $rows['true_answer']; ?>" ></td>
<td><input type="radio"  name="an3" value="<?php echo $rows['answerf'];?>"/> <?php echo " :" .$rows['answerf'];?></td>
<td><input type="radio"  name="an3" value="<?php echo $rows['answers'];?>"/><?php echo " :" .$rows['answers'];?></td>
<td><input type="radio"  name="an3" value="<?php echo $rows['answert'];?>"/><?php echo $rows['answert'];?></td>
<td><input type="radio"  name="an3" value="<?php echo $rows['answerd'];?>"/><?php echo $rows['answerd'];?></td>
  </tr>
  </table>
<?php } ?>
</div>
<br><br>
<div id="goga2">
           <?php
		   $ses = new exam;
	  $ff = $ses ->RUNSearch("select  * from exam where exam_name = '".$_SESSION['exam']."'  ORDER BY RAND() ");
	 							   
								   if($rows = mysqli_fetch_assoc($ff)){
									   
		    ?>
          <table style="width:100%" border="5">
  <tr>
    <th colspan="1" >question</th>
    <th colspan="2">answer</th>
  </tr>
  <tr></tr>
  <tr>
    <td><input type="text" size="100" name="q2" value="<?php echo $rows['exam_questions'];?>"/> </td>
  </tr>
   <tr>
   <td><input type="radio"  name="t2" checked value="<?php echo $rows['true_answer']; ?>" ></td>
<td><input type="radio"  name="an2" value="<?php echo $rows['answerf'];?>"/> <?php echo " :" .$rows['answerf'];?></td>
<td><input type="radio"  name="an2" value="<?php echo $rows['answers'];?>"/><?php echo " :" .$rows['answers'];?></td>
<td><input type="radio"  name="an2" value="<?php echo $rows['answert'];?>"/><?php echo $rows['answert'];?></td>
<td><input type="radio"  name="an2" value="<?php echo $rows['answerd'];?>"/><?php echo $rows['answerd'];?></td>
  </tr>
  </table>
<?php } ?>
</div>
<br><br>
<div id="goga1">
           <?php
		   $ses = new exam;
	  $ff = $ses ->RUNSearch("select  * from exam where exam_name = '".$_SESSION['exam']."'  ORDER BY RAND() ");
	 							   
								   if($rows = mysqli_fetch_assoc($ff)){
									   
		    ?>
          <table style="width:100%" border="5">
  <tr>
    <th colspan="1" >question</th>
    <th colspan="2">answer</th>
  </tr>
  <tr></tr>
  <tr>
    <td><input type="text" size="100" name="q1" value="<?php echo $rows['exam_questions'];?>"/> </td>
  </tr>
   <tr>
   <td><input type="radio"  name="t1" checked value="<?php echo  $rows['true_answer']; ?>" ></td>
<td><input type="radio"  name="an1" value="<?php echo $rows['answerf'];?>"/> <?php echo " :" .$rows['answerf'];?></td>
<td><input type="radio"  name="an1" value="<?php echo $rows['answers'];?>"/><?php echo " :" .$rows['answers'];?></td>
<td><input type="radio"  name="an1" value="<?php echo $rows['answert'];?>"/><?php echo $rows['answert'];?></td>
<td><input type="radio"  name="an1" value="<?php echo $rows['answerd'];?>"/><?php echo $rows['answerd'];?></td>
  </tr>
  </table>
<?php } ?>
</div>
<br><br>

    <input type="submit" name="finish" value="finish">
    <?php
	
	if(isset($_POST['finish'])){
		 echo '<script type="text/javascript">alert("you end your exam");</script>';
			echo '<script type="text/javascript">window.location = "../web/result.php"</script>';
	 $_SESSION['q1'] = $_POST['q1'];
	 $_SESSION['q2'] = $_POST['q2'];
	 $_SESSION['q3'] = $_POST['q3'];
	 $_SESSION['q4'] = $_POST['q4'];
	 $_SESSION['q5'] = $_POST['q5'];
	 $_SESSION['an1'] = $_POST['an1'];
	 $_SESSION['an2'] = $_POST['an2'];
	 $_SESSION['an3'] = $_POST['an3'];
	 $_SESSION['an4'] = $_POST['an4'];
	 $_SESSION['an5'] = $_POST['an5'];
	 $_SESSION['t5'] = $_POST['t5'];
	 $_SESSION['t4'] = $_POST['t4'];
	 $_SESSION['t3'] = $_POST['t3'];
	 $_SESSION['t2'] = $_POST['t2'];
	 $_SESSION['t1'] = $_POST['t1'];
	
	} ?>
	</form>
   
</body>
</html>
