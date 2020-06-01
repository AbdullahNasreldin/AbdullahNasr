<?php
class database {
 var $conn;

  function __construct() {
    $this->conn = mysqli_connect("localhost","root","","onlines");
  }

	function RUNDML($statment,$msg){
	if(!mysqli_query($this->conn,$statment))
	{return mysqli_error($this->conn);}
	else{return $msg;}
	}	 	
 
 function RUNSearch($statment){
 $result=mysqli_query($this->conn,$statment);
 return $result;}
 }
 

