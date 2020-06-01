<?php
include_once('db.php');
if(isset($_POST['stfusers']))
{
 $sql=" SELECT staff_username FROM staff WHERE staff_username= '".$_POST['stfusers']."' ";

 $query=mysqli_query($db,$sql);
 $reply = mysqli_num_rows($query);
 

 if($reply > 0)
 {
  echo '<span style="color:red">username Already Exist </span>';
 }
 else
 {
    echo '<span style="color:green">username is accepted  </span>';
 }

}

if(isset($_POST['stffon']))
{
 $sql=" SELECT staff_phone FROM staff WHERE staff_phone= '".$_POST['stffon']."' ";

 $query=mysqli_query($db,$sql);
 $reply = mysqli_num_rows($query);
 

 if($reply > 0)
 {
  echo '<span style="color:red">staff_phone Already Exist </span>';
 }
 else
 {
    echo '<span style="color:green">staff_phone is accepted  </span>';
 }
}


if(isset($_POST['stfmail']))
{
 $sql=" SELECT staff_email FROM staff WHERE staff_email= '".$_POST['stfmail']."' ";

 $query=mysqli_query($db,$sql);
 $reply = mysqli_num_rows($query);
 

 if($reply > 0)
 {
  echo '<span style="color:red">staff_mail Already Exist </span>';
 }
 else
 {
    echo '<span style="color:green">staff_mail is accepted  </span>';
 }
}

if(isset($_POST['stfstus']))
{
 $sql=" SELECT *  FROM staff WHERE (staff_username= '".$_POST['stfstus']."'
 or staff_phone = '".$_POST['stfstus']."'
 or staff_email = '".$_POST['stfstus']."'
 )
  ";

 $query=mysqli_query($db,$sql);
 if($reply = mysqli_fetch_assoc($query))
 {
  echo "<option>" . echo  $reply['staff_status']; ."</option>";
 }
}

?>


