<?php 
include_once "database.php";
include_once "operation.php";
class courses extends database implements operation {

	var $courses_name;
	var $staff_username;
	var $year_name;
	var $courses_index;
	
	
	public function getcourses_index(){return $this->courses_index;}
	public function setcourses_index($courses_index){return $this->courses_index = $courses_index;}
	
	public function getcourses_name(){return $this->courses_name;}
	public function setcourses_name($courses_name){return $this->courses_name = $courses_name;}
	
	public function getstaff_username(){return $this->staff_username;}
	public function setstaff_username($staff_username){return $this->staff_username = $staff_username;}

	public function getyear_name(){return $this->year_name;}
	public function setyear_name($year_name){return $this->year_name = $year_name;}

	function Add(){
		return parent::RUNDML(
		"
		insert into courses (courses_name,staff_username,year_name,courses_index) 
values ('".$this->getcourses_name()."','".$this->getstaff_username()."',
'".$this->getyear_name()."','".$this->getcourses_index()."')","wait for our admin aprove and check your mail");
		}
	function Update(){}
	function Delete(){}
	function Deletes($x){
		return parent::RUNDML(
		"
		 DELETE FROM courses
		 where courses.courses_name ='".$x."'",		
		"wait for our admin aprove and check your mail");
		
		}
	function Search(){}
}