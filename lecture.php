<?php 
include_once "database.php";
include_once "operation.php";
class lectures extends database implements operation {
	var $lecture_id;
	var $lecture_link;
	var $courses_name;
	
	
	
	
	public function getlecture_id(){return $this->lecture_id;}
	public function setlecture_id($lecture_id){return $this->lecture_id = $lecture_id;}
	
	public function getlecture_link(){return $this->lecture_link;}
	public function setlecture_link($lecture_link){return $this->lecture_link = $lecture_link;}

	public function getcourses_name(){return $this->courses_name;}
	public function setcourses_name($courses_name){return $this->courses_name = $courses_name;}

	function Add(){}
	function Update(){}
	function Delete(){}
	function Search(){}
}