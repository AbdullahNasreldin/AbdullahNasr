<?php 
include_once "database.php";
include_once "operation.php";
class exam extends database implements operation {
	var $exam_name;
	var $exam_questions;
	var $answerf;
	var $answers;
	var $answert;
    var $answerd;
    var $staff_username;
    var $courses_name;
	var $true_answer;
	var $exam_id;
	
	public function getexam_id(){return $this->exam_id;}
	public function setexam_id($exam_id){return $this->exam_id = $exam_id;}
	
	public function getexam_name(){return $this->exam_name;}
	public function setexam_name($exam_name){return $this->exam_name = $exam_name;}
	
	public function getexam_questions(){return $this->exam_questions;}
    public function setexam_questions($exam_questions){return $this->exam_questions = $exam_questions;}
    
    public function getanswerf(){return $this->answerf;}
    public function setanswerf($answerf){return $this->answerf = $answerf;}

    public function getanswers(){return $this->answers;}
    public function setanswers($answers){return $this->answers = $answers;}

    public function getanswert(){return $this->answert;}
    public function setanswert($answert){return $this->answert = $answert;}

    public function getanswerd(){return $this->answerd;}
    public function setanswerd($answerd){return $this->answerd = $answerd;}

    public function getstaff_username(){return $this->staff_username;}
    public function setstaff_username($staff_username){return $this->staff_username = $staff_username;}

    public function getcourses_name(){return $this->courses_name;}
    public function setcourses_name($courses_name){return $this->courses_name = $courses_name;}
	
	public function gettrue_answer(){return $this->true_answer;}
	public function settrue_answer($true_answer){return $this->true_answer = $true_answer;}
	
    function Add(){
		return parent::RUNDML(
		"
		INSERT INTO exam (exam_name,exam_questions,answerf,answers,answert,answerd,staff_username,courses_name,exam_id,true_answer) 
values ('".$this->getexam_name()."','".$this->getexam_questions()."',
'".$this->getanswerf()."','".$this->getanswers()."','".$this->getanswert()."','".$this->getanswerd()."',
'".$this->getstaff_username()."','".$this->getcourses_name()."','null','".$this->gettrue_answer()."'
)","wait for our admin aprove and check your mail");

		}
	function Update(){}
	function Delete(){}
	function Search(){}
}