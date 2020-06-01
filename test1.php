<?php
 session_start();
 $us = $_SESSION['resetpass'] ;
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0;padding:0;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
.underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
/*--login start here--*/
 body{
   font-size: 100%;
   background:#0086E5; 
   font-family: 'Roboto', sans-serif;
}
a {
  text-decoration: none;
}
a:hover {
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
}
/*--elemt style strat here--*/
.elelment h2 {
    font-size: 2.5em;
    color: #fff;
    text-align: center;
    margin-top:2em;
    font-weight: 700;
}
.element-main {
    width:27%;
    background: #fff;
    margin:4em auto 0em;
    border-radius: 5px;
    padding:3em 2em;
}
.element-main h1 {
    text-align: center;
    font-size: 2.3em;
    color:#0086E5;
    font-weight: 700;
}
.element-main p {
    font-size: 1em;
    color: #696969;
    line-height: 1.5em;
    margin: 1.5em 0em;
    text-align:center;
}
.element-main input[type="text"] {
    font-size: 1em;
    color: #A29E9E;
    padding: 1em 0.5em;
    display: block;
    width: 95%;
    outline: none;
    margin-bottom: 1em;
    text-align:center;
    border: 1px solid #B9B9B9;
}
.element-main input[type="submit"] {
    font-size: 1em;
    color: #fff;
    background:#0086E5;
    width: 50%;
    padding: 0.8em 0em;
    outline: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    border-bottom: 3px solid #045B99;
    display: block;
    margin: 1.5em auto 0;
}
.element-main input[type="submit"]:hover{
    background:#1D1C1C;
    border-bottom: 3px solid #2F2F2F;  
    transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
}
/*---copyrights--*/
.copy-right {
    margin: 9em 0em 2em 0em;
}
.copy-right p {
    text-align: center;
    font-size:1em;
    color:#fff;
    line-height: 1.5em;

}
.copy-right p a{
  color:#fff;
}
.copy-right p a:hover{
	 color:#000;
	 transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
}
/*--element end here--*/
/*--media quiries start here--*/
@media(max-width:1440px){
	
}
@media(max-width:1366px){
	
}
@media(max-width:1280px){
.elelment h2 {
    margin-top: 1em;	
}
.copy-right {
    margin: 6em 0em 2em 0em;
}
.element-main {
    width: 30%;
}
}
@media(max-width:1024px){
.element-main {
    width: 37%;	
}
}
@media(max-width:768px){
.element-main {
    width: 49%;
}	
.elelment h2 {
    font-size: 2em;
}
.element-main {
    width: 60%;
}
.element-main h1 {
    font-size: 2em;
}
}
@media(max-width:640px){
	
}
@media(max-width:480px){
.element-main {
    width: 80%;
    padding: 3em 1.5em;
}	
.copy-right {
    margin: 5em 0em 2em 0em;
}
.copy-right p {
    font-size: 0.9em;
}
}
@media(max-width:320px){
.elelment h2 {
    font-size: 1.5em;
}
.element-main h1 {
    font-size: 1.5em;
}
.element-main {
    width: 80%;
    margin: 2em auto 0em;
    padding: 1.5em 1.5em;
}
.element-main p {
    font-size: 0.9em;	
}
.element-main input[type="submit"] {
    font-size:0.9em;
    width: 75%;
}
.element-main input[type="text"] {
    font-size: 0.9em;
    padding: 0.8em 0.5em;
}
.copy-right {
    margin: 3em 0em 2em 0em;
}
.copy-right p {
    font-size: 0.85em;
	padding:0 4px;
}
}
/*--media quiries end here--*/
</style>
</head>
<body>
<div class="elelment">
	<h2>Reset Password Form</h2>
	<div class="element-main">
		<h1>enter your pin </h1>
		<form method="post">
			<input type="text" name="user" value="<?php echo $us; ?>" hidden readonly="readonly"/>
            <input type="text" value="" name="pass" placeholder="enter your pin"/>
			<input type="submit" value="Reset my Password" name="reset"/>
            <?php 
			if(isset($_POST['reset'])){

include_once ("student.php");
require_once "src/PHPMailer.php";
require_once "src/Exception.php";
require_once "src/SMTP.php";
require_once "vendor/autoload.php";
	$student = new student;
	 $student ->setstudent_username($_POST['user']);
	 $student ->setstudent_password($_POST['pass']);
	 $msg = $student ->Updatepasswordforget();
	 
	 $stus = $student->RUNSearch("select * from student where (student_username = '".$_POST['user']."' OR
	 student_email = '".$_POST['user']."'
	 OR
	 student_phone = '".$_POST['user']."'
	 ) ");
	 if($rows = mysqli_fetch_assoc($stus))
   { $to = $rows['student_email'];
  	 $us = $rows['student_username'];
    }
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true ;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465 ; //or 587
	$mail->smtpConnect();
	$mail->isHTML(true);
	$mail->Username = "thebestlawyer54@gmail.com";
	$mail->Password = "Body@1515";
	$mail->setFrom('thebestlawyer54@gmail.com','the university');
	$mail->addAddress($to,$us);
	$mail->Subject = 'update password';
	$mail->Body = "
	dear ".$us."
	your password `s been updated succesfully";
	if(!$mail->send()){
		echo '<script type="text/javascript">alert("opps there are a technical issue try again""'.$mail->ErrorInfo.'");</script>';
		echo "mailer error : ".$mail->ErrorInfo;
		}
		else {
	echo '<script type="text/javascript">alert("your password `s been updated");</script>'; 
	echo '<script type="text/javascript">window.location = "../web/home.php"</script>';
		 
		}
}
?>		</form>
	</div>
</div>
</body>
</html>	