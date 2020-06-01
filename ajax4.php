<?php
include_once('db.php');
if(isset($_POST['smail']))
{
 $sql=" SELECT student_email FROM student WHERE student_email= '".$_POST['smail']."' ";

 $query=mysqli_query($db,$sql);
 $reply = mysqli_num_rows($query);
 

 if($reply > 0)
 {
  echo '<span style="color:red">mail Already Exist </span>';
 }
 else
 {
    echo '<span style="color:green">mail is accepted  </span>';
 }

}