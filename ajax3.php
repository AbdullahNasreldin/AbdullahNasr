<?php
include_once('db.php');
if(isset($_POST['usernames']))
{
 $sql=" SELECT student_username FROM student WHERE student_username= '".$_POST['usernames']."' ";

 $query=mysqli_query($db,$sql);
 $request = mysqli_num_rows($query);
 

 if($request > 0)
 {
  echo '<span style="color:red">Username Already Exist </span>';
 }
 else
 {
    echo '<span style="color:green">Username is accepted  </span>';
 }

}