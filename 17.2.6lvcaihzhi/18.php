<?php
	header("Content-Type:text/html;charset=utf-8");
	class thankyou{
		public $name = "sz";
		public $age = "16";
		public function __construct(){
			echo "晚安";
		}
		public function xxx(){
			return $this -> name = "fz";
		}
		public function __destruct(){
			echo "hfl";
		}
	}
	$obj = new thankyou();
	echo "<br />";
	echo $obj -> xxx();
	echo "<br />";