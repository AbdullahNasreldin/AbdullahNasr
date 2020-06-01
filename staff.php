<?php

class staff extends database implements operation {

 var $staff_id;
 var $staff_name;
 var $staff_username;
 var $staff_password;
 var $city_name;
 var $staff_adress;
 var $staff_age;
 var $department_name;
 var $staff_status;
 var $staff_phone;
 var $staff_email;
 var $staff_rank;
 
	public function getstaff_id(){return $this->staff_id;}
	public function setstaff_id($staff_id){return $this->staff_id = $staff_id;}
	
	public function getstaff_name(){return $this->staff_name;}
	public function setstaff_name($staff_name){return $this->staff_name = $staff_name;}
	
	public function getstaff_username(){return $this->staff_username;}
	public function setstaff_username($staff_username){return $this->staff_username = $staff_username;}
	
	public function getstaff_password(){return $this->staff_password;}
	public function setstaff_password($staff_password){return $this->staff_password = $staff_password;}
	
	public function getcity_name(){return $this->city_name;}
	public function setcity_name($city_name){return $this->city_name = $city_name;}
	
	public function getstaff_adress(){return $this->staff_adress;}
	public function setstaff_adress($staff_adress){return $this->staff_adress = $staff_adress;}	
	
	public function getstaff_age(){return $this->staff_age;}
	public function setstaff_age($staff_age){return $this->staff_age = $staff_age;}	
	
	public function getdepartment_name(){return $this->department_name;}
	public function setdepartment_name($department_name){return $this->department_name = $department_name;}	
	
	public function getstaff_status(){return $this->staff_status;}
	public function setstaff_status($staff_status){return $this->staff_status = $staff_status;}	
	
	public function getstaff_phone(){return $this->staff_phone;}
	public function setstaff_phone($staff_phone){return $this->staff_phone = $staff_phone;}	
	
	public function getstaff_email(){return $this->staff_email;}
	public function setstaff_email($staff_email){return $this->staff_email = $staff_email;}	
	
	public function getstaff_rank(){return $this->staff_rank;}
	public function setstaff_rank($staff_rank){return $this->staff_rank = $staff_rank;}	
	
		function Add(){
		return parent::RUNDML("insert into staff(staff_id,staff_name,staff_username,staff_password,city_name,staff_adress,staff_age,department_name,
			staff_status,staff_phone,staff_email,staff_rank)
		 values ( '".$this->getstaff_id()."','".$this->getstaff_name()."',
		'".$this->getstaff_username()."','".$this->getstaff_password()."',
		'".$this->getcity_name()."','".$this->getstaff_adress()."',
		'".$this->getstaff_age()."','".$this->getdepartment_name()."',
		'".$this->getstaff_status()."','".$this->getstaff_phone()."',
		'".$this->getstaff_email()."',
		'".$this->getstaff_rank()."')","wait for our admin aprove and check your mail");
	}
	function Update(){}
	function Delete(){}
	function Search(){}
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
	 $log = parent::RUNSearch("select * from staff where (staff_username = '".$this->getstaff_username()."' OR
	 staff_phone = '".$this->getstaff_phone()."'
	 OR
	 staff_email = '".$this->getstaff_email()."'
	 )
	and staff_password ='".$this->getstaff_password()."'
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