<?php
session_start();
include_once("examname.php");
?>
<html>
<head></head>
<body>
<form method="post">
<input type="submit" name="add" value="save">
<?php
$up = new examname;
								$up->setstudent_username($_SESSION['student']);
								$up->setexam_name($_SESSION['x1']);
								$msg = $up->Add();
								echo '<script type="text/javascript">window.location = "../web/course.php"</script>';

?>
</form>
</body>
</html>
