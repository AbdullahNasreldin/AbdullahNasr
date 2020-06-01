<?php 
include_once ('database.php');
include_once ('operation.php');
class year extends database implements operation {

	var $year_name;
	
	

	public function getyear_name(){return $this->year_name;}
	public function setyear_name($year_name){return $this->year_name = $year_name;}
	
	function Add(){}
	function Update(){}
	function Delete(){}
	function Search(){}
	
}