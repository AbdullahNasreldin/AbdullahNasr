<?php
include "database.php";
include "operation.php";

class chat extends database implements operation {
	var $chat_id;
	var $student_username;
	var $staff_username;
	var $txt;
	var $chat_time;

	public function getchat_id(){return $this->chat_id;}
	public function setchat_id($chat_id){return $this->chat_id = $chat_id;}

	public function getstudent_username(){return $this->student_username;}
	public function setstudent_username($student_username){return $this->student_username = $student_username;}
	
	public function getstaff_username(){return $this->staff_username;}
	public function setstaff_username($staff_username){return $this->staff_username = $staff_username;}
	
	public function gettxt(){return $this->txt;}
	public function settxt($txt){return $this->txt = $txt;}

	public function getchat_time(){return $this->chat_time;}
	public function setchat_time($chat_time){return $this->chat_time = $chat_time;}

	function addstudent(){
		return parent::RUNDML("insert into chat(student_username,txt)
 		values ( '".$this->getstudent_username()."','".$this->gettxt()."')","wait for our admin aprove and check your mail");	 
 		}
		
	function addstaff(){
		return parent::RUNDML("insert into chat(staff_username,txt)values
 		values ( '".$this->getstaff_username()."','".$this->gettxt()."')","wait for our admin aprove and check your mail");	 
 		}
		
	function Add(){}
	function Update(){}
	function Delete(){}
	function Search(){}
	
	}