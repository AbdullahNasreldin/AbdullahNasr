<?php 
class department extends database implements operation {

	var $department_name;
		
	public function getdepartment_name(){return $this->department_name;}
    public function setdepartment_name($department_name){return $this->department_name = $department_name;}
    
    function Add(){}
	function Update(){}
	function Delete(){}
	function Search(){}
}
