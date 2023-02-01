<?php
require_once "Products.php"

class Medicine extends Products {
    private $dose;
    private $type;
    private $expirationDate;

    function setDose(){
        $this ->dose = $dose;
    }
    function setType() {
        $this ->type = $type;
    }
    function setExpirationDate() {
        $this ->expirationdate = $expirationdate;
    }
	
	function getDose() {
        echo $this ->dose;
    }
	function getType() {
        echo $this ->type;
    }
	function getExpirationDate() {
        echo $this ->expirationdate;
    }
	
	function computeSRP() {
		echo (this ->price * 2;)
    }
}
?>