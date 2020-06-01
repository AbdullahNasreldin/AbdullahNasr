<?php
include_once "database.php";
include_once "operation.php";

class examination extends database implements operation {

var $examination_id;	
var $student_username;
var $exam_name;
var $grade;
var $examination_status;
	
	public function getexamination_status(){return $this->examination_status;}
	public function setexamination_status($examination_status){return $this->examination_status = $examination_status;}

	
	public function getexamination_id(){return $this->examination_id;}
	public function setexamination_id($examination_id){return $this->examination_id = $examination_id;}

	public function getstudent_username(){return $this->student_username;}
	public function setstudent_username($student_username){return $this->student_username = $student_username;}

	public function getexam_name(){return $this->exam_name;}
	public function setexam_name($exam_name){return $this->exam_name = $exam_name;}
	
	public function getgrade(){return $this->grade;}
	public function setgrade($grade){return $this->grade = $grade;}
	
	function Add(){
		return parent::RUNDML("insert into examination(examination_id	,student_username,grade,exam_name,examination_status)
		 values ('".$this->getexamination_id()."',
		'".$this->getstudent_username()."',''".$this->getgrade()."'',
		'".$this->getexam_name()."','".$this->getexamination_status()."')",
		"wait for our admin aprove and check your mail");
	}
	function Update(){
		return parent::RUNDML("
		UPDATE examination SET examination_status = '".$this->getexamination_status()."'
		 WHERE student_username ='".$this->getstudent_username()."'
		 ","wait for our admin aprove and check your mail");
	
		}
	function Delete(){}
	function Search(){}
	}