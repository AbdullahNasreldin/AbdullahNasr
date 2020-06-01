<?php 
include_once "database.php";
include_once "operation.php";
class answer extends database implements operation {
	var $student_username;
	var $exam_name;
	var $question;
	var $answer;
	var $trueasnwer;
	var $answer_id;
	var $mark;
	public function getmark(){return $this->mark;}
    public function setmark($mark){return $this->mark = $mark;}
	
	public function getanswer_id(){return $this->answer_id;}
    public function setanswer_id($answer_id){return $this->answer_id = $answer_id;}
	
	public function getstudent_username(){return $this->student_username;}
    public function setstudent_username($student_username){return $this->student_username = $student_username;}
	
	public function getexam_name(){return $this->exam_name;}
    public function setexam_name($exam_name){return $this->exam_name = $exam_name;}
    
    public function getquestion(){return $this->question;}
    public function setquestion($question){return $this->question = $question;}

    public function getanswer(){return $this->answer;}
    public function setanswer($answer){return $this->answer = $answer;}

    public function gettrueasnwer(){return $this->trueasnwer;}
    public function settrueasnwer($trueasnwer){return $this->trueasnwer = $trueasnwer;}

    function Add(){
		return parent::RUNDML("insert into answer(answer_id,student_username,exam_name,question,answer,trueasnwer,mark)
		 values ('".$this->getanswer_id()."','".$this->getstudent_username()."','".$this->getexam_name()."',
		'".$this->getquestion()."','".$this->getanswer()."',
		'".$this->gettrueasnwer()."','".$this->getmark()."')","wait for our admin aprove and check your mail");
	}
	function Update(){}
	function Delete(){}
	function Search(){}
}