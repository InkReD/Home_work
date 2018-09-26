<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
class product{
	public $name;
	public $price;
	function _construct($name, $price){
		$this->name = $name;
		$this->price = $price;
		$this->storefront();
	}
	function storefront ($name,$price){
	echo "Продукт ".$this->name." стоит ".this->price;
	}
	function info(){
		echo "Продукт " .$this->name. " работает на OS IOS";
	}
}
new product("Телефон 1", 4000);
new product("Телефон 2", 2000);

?>
</body>
</html>

