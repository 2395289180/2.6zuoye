<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象一个类
	class Car{
		//成员属性
		public $name = "粪叉";
		public $age = "30";
		//成员方法
		public function pao(){
			return "正在跑。。";
		}
		public function tiao(){
			return "正在跳。。";
		}
	}
	$obj = new car();
	var_dump($obj);