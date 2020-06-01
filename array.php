<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="draft.php">
            <div id="goga5">
           <?php
		  
		   $_SESSION['exam'] = "finance";
		    include "exam.php";
		   $ses = new exam;
	  $ff = $ses ->RUNSearch("select  * from exam where exam_name = '".$_SESSION['exam']."'  ORDER BY RAND() ");
	 							   
								   if($rows = mysqli_fetch_assoc($ff)){
									   
		    ?>
       <input type="text" size="100" name="q5" hidden  value="<?php echo $rows['exam_questions'];?>"/>
 <input type="radio"  name="t5" checked hidden value="<?php echo $rows['true_answer']; ?>" >
<input type="text"  name="an54" hidden value="<?php echo $rows['answerf'];?>"/> 
<input type="text"  name="an53" hidden value="<?php echo $rows['answers'];?>"/>
<input type="text"  name="an52" hidden value="<?php echo $rows['answert'];?>"/>
<input type="text"  name="an51" hidden value="<?php echo $rows['answerd'];?>"/>
<?php } ?>
</div>
<br><br>
            <div id="goga4">
           <?php
		   
		   $_SESSION['exam'] = "finance";
		  
		   $ses = new exam;
	  $ff = $ses ->RUNSearch("select  * from exam where exam_name = '".$_SESSION['exam']."'  ORDER BY RAND() ");
	 							   
								   if($rows = mysqli_fetch_assoc($ff)){
									   
		    ?>
       <input type="text" size="100" name="q4" hidden  value="<?php echo $rows['exam_questions'];?>"/>
 <input type="radio"  name="t4" checked hidden value="<?php echo $rows['true_answer']; ?>" >
<input type="text"  name="an44" hidden value="<?php echo $rows['answerf'];?>"/> 
<input type="text"  name="an43" hidden value="<?php echo $rows['answers'];?>"/>
<input type="text"  name="an42" hidden value="<?php echo $rows['answert'];?>"/>
<input type="text"  name="an41" hidden value="<?php echo $rows['answerd'];?>"/>
<?php } ?>
</div>
<br><br>
            <div id="goga5">
           <?php
		   
		   $_SESSION['exam'] = "finance";
		   
		   $ses = new exam;
	  $ff = $ses ->RUNSearch("select  * from exam where exam_name = '".$_SESSION['exam']."'  ORDER BY RAND() ");
	 							   
								   if($rows = mysqli_fetch_assoc($ff)){
									   
		    ?>
       <input type="text" size="100" name="q3" hidden  value="<?php echo $rows['exam_questions'];?>"/>
 <input type="radio"  name="t3" checked hidden value="<?php echo $rows['true_answer']; ?>" >
<input type="text"  name="an34" hidden value="<?php echo $rows['answerf'];?>"/> 
<input type="text"  name="an33" hidden value="<?php echo $rows['answers'];?>"/>
<input type="text"  name="an32" hidden value="<?php echo $rows['answert'];?>"/>
<input type="text"  name="an31" hidden value="<?php echo $rows['answerd'];?>"/>
<?php } ?>
</div>
<br><br>
    <input type="submit" name="finish" value="finish">
    <?php
   if(isset($_POST['finish'])){
	  
	   echo '<script type="text/javascript">window.location = "../web/draft.php"</script>';
	   }
	
	?>
  </form>
</body>
</html>