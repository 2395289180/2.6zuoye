<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象化一个类
	class Car{
		//成员属性
		public $name = "asd";
		public $age = "10";
		//成员方法
		public function fly(){
			$this -> name = "宝马";
			return $this -> name."正在飞";
		}
	}
	//实例化对象
	$obj = new Car();
	echo $obj -> fly();