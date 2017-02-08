<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象一个类
	class Car{
		//成员属性
		public $name = "迈巴赫";
		public $age = 20;
		//成员方法
		public function pao(){
			return "正在跑......";
		}
		public function biao(){
			return "正在飙......";
		}
	}
	  //抽象一个类
	class Person{
		//成员属性
		public $eyes = "眼睛";
		public $nose = "鼻子";
		public $mouth = "嘴巴";
		public $touth = "牙齿";
		//成员方法
		public function Eat(){
			return "正在吃";
		}
		public function Sleeping(){
			return "正在睡觉";
		}
		public function drink(){
			return "正在喝......";
		}
	}
	//实例化一个对象 new+类名
	$obj = new Person();
	var_dump($obj);
	$obj2 = new Car();
	var_dump($obj2);
	$obj2 = $obj;
	var_dump($obj2);