<?php
	header("Content-Type:text/html;charset=utf-8");
	class Car{
		//成员属性
		public $name = "lll";
		public $age = "23";
		//构造方法 初始化__construct
		public function __construct(){
			echo "我不爱你";
		}
		//成员方法
		public function not(){
			return $this -> name = "510";
		}
		//析构方法
		public function __destruct(){
			echo "521";
		}
	}
	$obj = new Car();
	echo "<br />";
	echo $obj -> not();
	echo "<br />";