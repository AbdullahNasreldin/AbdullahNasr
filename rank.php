
<?php 
class rank extends database implements operation {

	var $staff_rank;
	
	public function getstaff_rank(){return $this->staff_rank;}
    public function setstaff_rank($staff_rank){return $this->staff_rank = $staff_rank;}
    
    function Add(){}
	function Update(){}
	function Delete(){}
	function Search(){}
}
