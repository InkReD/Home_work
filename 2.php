<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
include "php1.php";
class smart extends product{
	var $touch;
	function _construct($name,$price,$touch){
	parent:: _construct{($name,$price){
		$this->touch = $touch;
		parent::storefront()
		$this->info();
	};
	function storefront(){
		echo "Продукт ".$this->name." имеет сенсорный дисплей";
	}


	}
}
new smart("Телефон 3", "4500", 1);//где 1 - сенсорный, а 0 - нет	

?>
</body>
</html>
