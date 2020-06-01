
<?php
include('db.php');
if(isset($_POST["sstus"]) ){
$sql = "select * from student where (student_username = '".$_POST["sstus"]."' OR
	 student_email = '".$_POST["sstus"]."'
	 OR
	 student_phone = '".$_POST["sstus"]."'
	 )
	";
$result = mysqli_query($db,$sql);
if( $row = mysqli_fetch_assoc($result))
{
 echo '
 <option value="'.$row["student_status"].'"> '.$row["student_status"].'</option>
 ';
}
else 
 echo '
 <option value="you are not regestrated"> "you are not regestrated"</option>
 ';
}

if(isset($_POST["stfstus"]) ){
$sql = "select * from staff where (staff_username = '".$_POST["stfstus"]."' OR
	 staff_email = '".$_POST["stfstus"]."'
	 OR
	 staff_phone = '".$_POST["stfstus"]."'
	 )
	";
$result = mysqli_query($db,$sql);
if( $rows = mysqli_fetch_assoc($result))
{
 echo '
 <option value="'.$rows["staff_status"].'"> '.$rows["staff_status"].'</option>
 ';
}
else 
 echo '
 <option value="you are not regestrated"> "you are not regestrated"</option>
 ';
}

?>