<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象化一个类
	class Women{
		//成员属性
		public $name = "YY";
		public $age = "23";
		//成员方法
		public function l($y){
			return $y."not";
		}
		
	}
	//实例化对象
	$obj = new Women();
	//调用成员属性
	echo $obj -> name;
	echo "<br />";
	//更改成员属性
	echo $obj -> name = "a";
	echo "<br />";
	//调用方法
	echo $obj -> l($obj->name);