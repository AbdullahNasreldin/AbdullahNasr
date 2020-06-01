<?php
include_once "database.php";
include_once "operation.php";
class student extends database implements operation 
{
	var $student_id;
	var $student_name;
	var $student_username;
	var $student_password;
	var $student_adress;
	var $city_name;
	var $student_age;
	var $student_email;
	var $student_phone;
	var $year_name;
	var $student_status;
	var $student_payment;
	var $department_name;
	var $pin_code;
		
	public function getpin_code(){return $this->pin_code;}
	public function setpin_code($pin_code){return $this->pin_code = $pin_code;}
	
	public function getstudent_id(){return $this->student_id;}
	public function setstudent_id($student_id){return $this->student_id = $student_id;}
	
	public function getstudent_name(){return $this->student_name;}
	public function setstudent_name($student_name){return $this->student_name = $student_name;}
	
	public function getstudent_username(){return $this->student_username;}
	public function setstudent_username($student_username){return $this->student_username = $student_username;}
	
	public function getstudent_password(){return $this->student_password;}
	public function setstudent_password($student_password){return $this->student_password = $student_password;}

	public function getstudent_adress(){return $this->student_adress;}
	public function setstudent_adress($student_adress){return $this->student_adress = $student_adress;}
	
	public function getcity_name(){return $this->city_name;}
	public function setcity_name($city_name){return $this->city_name = $city_name;}
	
	public function getstudent_age(){return $this->student_age;}
	public function setstudent_age($student_age){return $this->student_age = $student_age;}
	
	public function getstudent_email(){return $this->student_email;}
	public function setstudent_email($student_email){return $this->student_email = $student_email;}
	
	public function getstudent_phone(){return $this->student_phone;}
	public function setstudent_phone($student_phone){return $this->student_phone = $student_phone;}
	
	public function getyear_name(){return $this->year_name;}
	public function setyear_name($year_name){return $this->year_name = $year_name;}
	
	public function getstudent_status(){return $this->student_status;}
	public function setstudent_status($student_status){return $this->student_status = $student_status;}
	
	public function getstudent_payment(){return $this->student_payment;}
	public function setstudent_payment($student_payment){return $this->student_payment = $student_payment;}
	
	public function getdepartment_name(){return $this->department_name;}
	public function setdepartment_name($department_name){return $this->department_name = $department_name;}
	
	function Add(){
		return parent::RUNDML("insert into student(student_id,student_name,student_username,student_password,student_adress,city_name,student_age,
		student_email,student_phone,year_name,student_status,student_payment,department_name)
		 values ( '".$this->getstudent_id()."','".$this->getstudent_name()."',
		'".$this->getstudent_username()."','".$this->getstudent_password()."',
		'".$this->getstudent_adress()."',
		'".$this->getcity_name()."','".$this->getstudent_age()."',
		'".$this->getstudent_email()."',
		'".$this->getstudent_phone()."',
		'".$this->getyear_name()."','".$this->getstudent_status()."','".$this->getstudent_payment()."',
		'".$this->getdepartment_name()."')","wait for our admin aprove and check your mail");
	}
	function Update(){}
	function Delete(){}
	function Search(){}
	function recovery(){
		return parent::RUNDML("insert into student(pin_code) values ('".$this->getpin_code()."') 
		where (student_username = '".$this->getstudent_username()."' OR
	 student_email = '".$this->getstudent_email()."'
	 OR
	 student_phone = '".$this->getstudent_phone()."'
	 )" , "wait for our admin aprove and check your mail");
		}
function subrecovery(){
	return parent::RUNDML("
	UPDATE student 
SET 
    pin_code = '".$this->getpin_code()."'
WHERE (student_username = '".$this->getstudent_username()."' OR
	 student_email = '".$this->getstudent_email()."'
	 OR
	 student_phone = '".$this->getstudent_phone()."'
	 )" , "wait for our admin aprove and check your mail");
	
	}
 public function Login(){
	 $log = parent::RUNSearch("select * from student where (student_username = '".$this->getstudent_username()."' OR
	 student_email = '".$this->getstudent_email()."'
	 OR
	 student_phone = '".$this->getstudent_phone()."'
	 )
	and student_password ='".$this->getstudent_password()."'
	 ");
	 return $log ;
}
public function LoginRecovery(){
	 $logs = parent::RUNSearch("select * from student where student_username = '".$this->getstudent_username()."'
	and pin_code ='".$this->getpin_code()."'
	 ");
	 return $logs ;
}

function Updatepassword(){
		return parent::RUNDML(
		"
		UPDATE student set 
		student_password ='".$this->getstudent_password()."' 
		where student_id ='".$this->getstudent_id()."'
		",
		"wait for our admin aprove and check your mail");
		}

function Updatepasswordforget(){
		return parent::RUNDML(	
		"
		UPDATE student set 
		student_password ='".$this->getstudent_password()."' 
		where student_username ='".$this->getstudent_username()."'
		",
		"wait for our admin aprove and check your mail");
		}

function Updateaddress(){
		return parent::RUNDML(
		"
		UPDATE student set 
		student_adress ='".$this->getstudent_adress()."' 
		where student_id ='".$this->getstudent_id()."'
		",
		"wait for our admin aprove and check your mail");
		}
function Updatecity(){
		return parent::RUNDML(
		"
		UPDATE student set 
		city_name ='".$this->getcity_name()."' 
		where student_id ='".$this->getstudent_id()."'
		",
		"wait for our admin aprove and check your mail");
		}
	
function Updatemail(){
		return parent::RUNDML(
		"
		UPDATE student set 
		student_email ='".$this->getstudent_email()."' 
		where student_id ='".$this->getstudent_id()."'
		",
		"wait for our admin aprove and check your mail");
		}
		
function Updatephone(){
		return parent::RUNDML(
		"
		UPDATE student set 
		student_phone ='".$this->getstudent_phone()."' 
		where student_id ='".$this->getstudent_id()."'
		",
		"wait for our admin aprove and check your mail");
		}	

}
