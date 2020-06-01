
<?php

if(isset($_POST["gov_name"]) ){
include('db.php');

//Get all state data
//$out = '';
$sql = "select * from city where gov_name = '".$_POST["gov_name"]."'";
$result = mysqli_query($db,$sql);

while( $row = mysqli_fetch_assoc($result))
{
 echo '
 <option value="'.$row["city_name"].'"> '.$row["city_name"].'</option>
 ';
 // $out;	
}
}
?>