<?php 
class teaching extends database implements operation {
	var $staff_username;
	var $courses_name;
	
	
	
	
	public function getstaff_username(){return $this->staff_username;}
	public function setstaff_username($staff_username){return $this->staff_username = $staff_username;}
	
	public function getcourses_name(){return $this->courses_name;}
	public function setcourses_name($courses_name){return $this->courses_name = $courses_name;}

	function Add(){}
	function Update(){}
	function Delete(){}
	function Search(){}
}