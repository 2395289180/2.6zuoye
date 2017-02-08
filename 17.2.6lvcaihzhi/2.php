<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象一个类
	class Car{
		//成员属性
		public $name = "布加迪";
		public $age = "25";
		//成员方法
		public function drive(){
			return "The car is driving......";
		}
		public function papa(){
			return "The man is papaping on the car with a women!";
		}
	}
	
	//抽象一个类
	class Person{
		//成员属性
		public $head = "头";
		public $body = "身体";
		public $foot = "脚";
		//成员方法
		public function la(){
			return "正在拉......";
		}
		public function sa(){
			return "正在撒......";
		}
	}
	//实例化一个对象
	$obj = new Car();
	var_dump($obj);
	$obj2 = new Person();
	var_dump($obj2);