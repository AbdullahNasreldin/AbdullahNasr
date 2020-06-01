<?php
include_once('db.php');
if(isset($_POST['sfon']))
{
 $sql=" SELECT student_phone FROM student WHERE student_phone= '".$_POST['sfon']."' ";

 $query=mysqli_query($db,$sql);
 $reply = mysqli_num_rows($query);
 

 if($reply > 0)
 {
  echo '<span style="color:red">phone Already Exist </span>';
 }
 else
 {
    echo '<span style="color:green">phone is accepted  </span>';
 }

}