<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象化一个类
	class Dog{
		//成员属性
		public $name = "doge";
		public $age = "3";
		//成员方法
		public function eat(){
			return "正在吃..";
		}
		public function shuijiao(){
			return "正在睡觉";
		}
	}
	//实例化一个对象
	$obj = new Dog();
	var_dump($obj);
	//调用成员属性
	echo $obj -> name;
	echo "<br />";
	echo $obj -> age;
	echo "<br />";
	//调用成员方法
	echo $obj -> eat();
	echo "<br />";
	echo $obj -> shuijiao();