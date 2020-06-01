<?php 


include_once "database.php";
include_once "operation.php";
class examname extends database implements operation {
	var $exam_name;
	var $student_username;
	var $exam_status;
	var $examname_id;
	
	public function getexamname_id(){return $this->examname_id;}
	public function setexamname_id($examname_id){return $this->examname_id = $examname_id;}
	
	public function getexam_name(){return $this->exam_name;}
	public function setexam_name($exam_name){return $this->exam_name = $exam_name;}
	
	public function getstudent_username(){return $this->student_username;}
	public function setstudent_username($student_username){return $this->student_username = $student_username;}

	public function getexam_status(){return $this->exam_status;}
	public function setexam_status($exam_status){return $this->student_username = $exam_status;}

	function Add(){
		return parent::RUNDML("insert into examname(exam_name,student_username,examname_id,exam_status)
		 values ('".$this->getexam_name()."',
		'".$this->getstudent_username()."','null','not done')",
		"wait for our admin aprove and check your mail");
	
		}
	
	
	function Update(){
			}
	function Delete(){}
	function Search(){}
	
	

	}