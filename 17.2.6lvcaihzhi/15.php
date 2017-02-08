<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象化一个类
	class Car{
		//成员属性
		public $name = "zxc";
		public $age = "5";
		//成员方法
		public function didi(){
			$this -> name = "哈哈";
			return $this -> name."大笑";
		}
	}
	//实例化对象
	$obj = new Car();
	echo $obj -> didi();