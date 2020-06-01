<?php 
include_once "database.php";
include_once "operation.php";
class lectures extends database implements operation {
	var $lecture_id;
	var $lecture_link;
	var $courses_name;
	var $staff_username;
	var $lecture_subject;
	
		
	public function getlecture_subject(){return $this->lecture_subject;}
	public function setlecture_subject($lecture_subject){return $this->lecture_subject = $lecture_subject;}

	public function getstaff_username(){return $this->staff_username;}
	public function setstaff_username($staff_username){return $this->staff_username = $staff_username;}
	
	public function getlecture_id(){return $this->lecture_id;}
	public function setlecture_id($lecture_id){return $this->lecture_id = $lecture_id;}
	
	public function getlecture_link(){return $this->lecture_link;}
	public function setlecture_link($lecture_link){return $this->lecture_link = $lecture_link;}

	public function getcourses_name(){return $this->courses_name;}
	public function setcourses_name($courses_name){return $this->courses_name = $courses_name;}

	function Add(){
		return parent::RUNDML(
		"
		INSERT INTO lectures (lecture_id,lecture_link,courses_name,lecture_subject,staff_username) 
values ('null','".$this->getlecture_link()."','".$this->getcourses_name()."',
'".$this->getlecture_subject()."','".$this->getstaff_username()."')","wait for our admin aprove and check your mail");
					}
	function Update(){}
	function Delete(){}
	function Search(){}
}