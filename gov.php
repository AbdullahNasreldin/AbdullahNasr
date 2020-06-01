<?php 
include_once('database.php');
include_once('operation.php');
class gov extends database implements operation {

	var $gov_name;
	
	public function getgov_name(){return $this->gov_name;}
    public function setgov_name($gov_name){return $this->gov_name = $gov_name;}
    
    function Add(){}
	function Update(){}
	function Delete(){}
	function Search(){
		$govs = parent::RUNSearch ("Select * from gov");
		return $govs;
		}
}
