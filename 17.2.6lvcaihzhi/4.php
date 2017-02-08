<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象化一个类
	class person{
		//成员属性
		public $yanjing = "眼睛";
		public $bizi = "鼻子";
		public $toufa = "头发";
		public $erduo = "耳朵";
		//成员方法
		public function eat(){
			return "正在吃";
		}
		public function sleeping(){
			return "正在睡觉";
		}
		public function play(){
			return "正在玩";
		}
	}
	//实例化一个对象
	$obj = new person();
	var_dump($obj);
	echo $obj -> yanjing;
	echo "<br />";
	//调用方法
	echo $obj -> eat();
	