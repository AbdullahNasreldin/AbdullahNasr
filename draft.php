<?php
session_start();
$_SESSION['exam'] ;
$_SESSION['student'];
?>
<html>
<head>
</head>
<body>
<form method="post">
<div id="hager">
<?php
if(is_null($_SESSION['student']) || is_null($_SESSION['exam'])){
	        echo '<script type="text/javascript">alert("you are not login");</script>';
			echo '<script type="text/javascript">window.location = "../web/home.php"</script>';
								 }

require_once 'exam.php' ;
include 'answer.php' ;
include 'examination.php' ;
include 'examname.php' ;
 $ses = new exam ;
	  $ff = $ses ->RUNSearch("select  * from exam where exam_name = '".$_SESSION['exam']."'  ORDER BY RAND() ");
if($rows = mysqli_fetch_assoc($ff))
 {								 	   
$que = array (
array ( $rows["exam_questions"] , $rows["answerf"] , $rows["answers"]
 , $rows["answert"] , $rows["answerd"] , $rows["true_answer"] ),
array ($rows["exam_questions"] , $rows["answerf"] , $rows["answers"]
 , $rows["answert"] , $rows["answerd"] , $rows["true_answer"] ),
array ($rows["exam_questions"] , $rows["answerf"] , $rows["answers"]
 , $rows["answert"] , $rows["answerd"] , $rows["true_answer"] ),
array ($rows["exam_questions"] , $rows["answerf"] , $rows["answers"]
 , $rows["answert"] , $rows["answerd"] , $rows["true_answer"] ),
array ($rows["exam_questions"] , $rows["answerf"] , $rows["answers"]
 , $rows["answert"] , $rows["answerd"] , $rows["true_answer"] ),
array ($rows["exam_questions"] , $rows["answerf"] , $rows["answers"]
 , $rows["answert"] , $rows["answerd"] , $rows["true_answer"] ),
array ($rows["exam_questions"] , $rows["answerf"] , $rows["answers"]
 , $rows["answert"] , $rows["answerd"] , $rows["true_answer"] ),
array ($rows["exam_questions"] , $rows["answerf"] , $rows["answers"]
 , $rows["answert"] , $rows["answerd"] , $rows["true_answer"] ),
array ($rows["exam_questions"] , $rows["answerf"] , $rows["answers"]
 , $rows["answert"] , $rows["answerd"] , $rows["true_answer"] ),
array ($rows["exam_questions"] , $rows["answerf"] , $rows["answers"]
 , $rows["answert"] , $rows["answerd"] , $rows["true_answer"] ),
array ($rows["exam_questions"] , $rows["answerf"] , $rows["answers"]
 , $rows["answert"] , $rows["answerd"] , $rows["true_answer"] ),
);
 } 
 		   $qno = 0;
						?>			
             			<?php
						if(isset($_POST['save'])){
							$true;
							if($_POST['answer'] == $_POST['trueanswer']){
								$true = 1;
								}
								else $true = 0;
							 $sx = new answer ;
							$sx->settrueasnwer($_POST['trueanswer']);
						$sx->setquestion($_POST['question']);
						$sx->setanswer($_POST['answer']);
						$sx->setexam_name($_SESSION['exam']);
						$sx->setstudent_username($_SESSION['student']);
						$sx->setmark($true);
						$msg =$sx->Add();
							}
						
						if(isset($_POST['next'])){
						if(isset($_SESSION['aa'])){
						$qno = $_SESSION['aa'] ;
						$qno++;
						$_SESSION['aa'] =$qno ;
						}
						else { $_SESSION['aa'] =$qno ;}
						if($qno < 10){?>
							<input type="text" id="hager1" size="50" name="question" value="<?php echo $que[$qno][0];  ?>" />
                            <br />
						<?php
						for ($i = 1 ; $i <= 4; $i++){
						$a = $que [$qno][$i]
						?>
						<input type="radio" name="answer" id="hager2"  value="<?php echo $a; ?>" /><?php echo $a; ?>
                        <br />
        		  <input type="radio" name="trueanswer" id="hager3" hidden checked  value="<?php echo $que [$qno][5]; ?>" />
                       <?php
						}
						}
						if($qno == 10){
						echo '<script type="text/javascript">alert("last question");</script>';
						//session_destroy();
						}
						}
						
							if(isset($_POST['finish'])){
								 $s = new answer ;
$ee = $s ->RUNSearch("select  * from answer where exam_name = '".$_SESSION['exam']."' and
 student_username = '".$_SESSION['student']."'  ");
	 							   
 while($row = mysqli_fetch_assoc($ee)){?>
	 <table border="3">
     <tr>
     <th>question</th>
    <th>answer</th>
    <th>result</th>
    </tr>
     <tr>
    <td> <input type="text" size="50" value="<?php echo $row['question']; ?>" ></td>
    <td><input type="text" size="50" value="<?php echo $row['answer']; ?>"></td>
    <input type="text" size="50" hidden value="<?php  $row['trueasnwer']; ?>">
    <td><?php 
	$mrk;
	$count;
	if($row['answer'] == $row['trueasnwer']){
		$mrk = 1;
		}
		else $mrk = 0 ;
	echo $mrk; ?></td>
  </tr>
  </table>
	 <?php
	 }
	 ?>
	    <table border="3" bordercolor="#0033FF" bgcolor="#00FFFF">
     <tr>
     <th>sub:
     <?php
	 							 $sub = new answer ;
$subs = $sub ->RUNSearch("SELECT COUNT(mark) FROM answer where exam_name = '".$_SESSION['exam']."' and
 student_username = '".$_SESSION['student']."'  ");
if($subsrow = mysqli_fetch_assoc($subs)){
	 ?>
     <?php echo $subsrow['COUNT(mark)']; }?>
     </th>
    <th>percentage:
     	    <?php
	 							 $sub = new answer ;
$subs = $sub ->RUNSearch("SELECT sum(mark) FROM answer where exam_name = '".$_SESSION['exam']."' and
 student_username = '".$_SESSION['student']."'  ");
	if($subsrow = mysqli_fetch_assoc($subs)){
	 ?>
     <?php
	 $percentage = $subsrow['sum(mark)'];
	  echo $percentage; }?>
     </th>
    
    <th>passed or filed:<input type="text" name="grade" value="
    <?php
	$subfinal;
	$st;
    $final =$percentage /  $subsrow['sum(mark)']  ;
	if($final <60){$subfinal = "failed";}
	elseif($final <70){$subfinal = "passed";}
	elseif($final <80){$subfinal = "good";}
	elseif($final <90){$subfinal = "v.good";}
	else {$subfinal = "exclent";}
	echo $subfinal;
	?>
    "> 
    </th>
<th><input type="text" name="status"  value="<?php if($final < 60){$st = "not done";}else {$st = "done";} echo $st; ?>" /></th>
    <th><input type="submit" name="confirm" <?php if($qno < 10)echo "disabled"; ?> value="confirm" /></th>
     </table>
	 <?php	
		}
		if(isset($_POST['confirm'])){
								 $add = new examination ;
								 $add->setexamination_status($_POST['status']);
								 $add->setstudent_username($_SESSION['student']);
								 $add->setgrade($_POST['grade']);
								 $add->setexam_name($_SESSION['exam']);
								 $msg =$add->Add();
								 $msg =$add->Update();
								 echo '<script type="text/javascript">window.location = "../web/logout.php"</script>';
								 echo '<script type="text/javascript">window.location = "../web/logout.php"</script>';
									}										
									?>
           </div>
           <input type="submit" name="save" <?php  if($qno ==10)echo "disabled"; ?> value="save" /> 
           <br> 
           <input type="submit" <?php  if($qno ==10)echo "disabled"; ?> name="next" value="next questtion" />
           <input type="submit" name="finish" <?php // if($qno <  10)echo "disabled"; ?> value="finish" />
            </form>
</body>
</html>