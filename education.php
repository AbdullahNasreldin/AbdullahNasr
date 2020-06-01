<?php 
class education extends database implements operation {

    var $student_username;
    var $courses_name;
	var $education_id;
    
    public function geteducation_id(){return $this->education_id;}
    public function seteducation_id($education_id){return $this->education_id = $education_id;}
	
	public function getstudent_username(){return $this->student_username;}
    public function setstudent_username($student_username){return $this->student_username = $student_username;}
    
	public function getcourses_name(){return $this->courses_name;}
    public function setcourses_name($courses_name){return $this->courses_name = $courses_name;}
    
    function Add(){
		return parent::RUNDML(
		"
		insert into education (student_username,courses_name,education_id) 
values ('".$this->getstudent_username()."','".$this->getcourses_name()."','null')",
"wait for our admin aprove and check your mail");
		}
	function Update(){}
	function Delete(){}
	function Search(){}
}
