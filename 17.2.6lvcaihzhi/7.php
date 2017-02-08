<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象化一个类
	class Person{
		//成员属性
		public $name = "小明";
		public $age = "10";
		//成员方法 
		public function pao($a){
			return $a."正在跑..";
		}
		public function jump(){
			return "正在跳..";
		}
	}
	//实例化一个对象
	$obj = new Person();
	var_dump($obj);
	//调用成员属性
	echo $obj -> name;
	echo "<br />";
	//更改成员属性
	echo $obj -> name = "小红";
	echo "<br />";
	echo $obj -> pao($obj->name);