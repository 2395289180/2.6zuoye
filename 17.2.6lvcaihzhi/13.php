<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象化一个类
	class Car{
		//成员属性
		public $name = "qwe";
		public $age = "320";
		//成员方法
		public function pao(){
			$this -> name = "奔驰";
			return $this -> name."正在跑。。";
		}
	}
	//实例化对象
	$obj = new Car();
	echo $obj -> pao();