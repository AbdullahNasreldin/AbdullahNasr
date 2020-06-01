
<?php


include('db.php');

//Get all state data
//$out = '';
$sql = "select * from chat ";
$result = mysqli_query($db,$sql);

while( $row = mysqli_fetch_assoc($result))
{ 
?>
							<span>
								<i>sender</i>
			<input type="text" value="<?php echo $row['student_username']; echo $row['staff_username'];?>" disabled>
							</span>
							<span>
								<i>Message</i>
								<textarea disabled><?php echo $row['txt'];?></textarea>
							</span>
							<span>
								<i>time</i>
								<input type="text" disabled name="Email" value="<?php echo $row['chat_time'];?>">
							</span>
                            <br><br><br>
<?php
}
?>	 