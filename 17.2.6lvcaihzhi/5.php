<?php
	//抽象化一个类
	class Car{
		//成员属性
		public $name = "奔驰";
		public $age = "30";
		//成员方法
		public function pao(){
			return "正在跑...";
		}
		public function fei(){
			return "正在飞...";
		}
	}
	//实例化一个对象
	$obj = new Car();
	var_dump($obj);
	//调用成员属性
	echo $obj -> name;
	echo "<br />";
	//调用成员方法
	echo $obj -> pao();