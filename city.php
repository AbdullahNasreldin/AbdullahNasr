<?php


class city extends database implements operation {
	var $gov_name;
	var $city_name;
	
	public function getgov_name(){return $this->gov_name;}
	public function setgov_name($gov_name){return $this->gov_name = $gov_name;}
	
	public function getcity_name(){return $this->city_name;}
	public function setcity_name($city_name){return $this->city_name = $city_name;}

	function Add(){}
	function Update(){}
	function Delete(){}
	function Search(){}

	}