<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象化一个类
	class Men{
		//成员属性
		public $name = "aa";
		public $age = "23";
		//成员方法
		public function a($name){
			return $name."wgbmxhgt";
		}
		public function c(){
			return "whhhfl";
		}
	}
	//实例化一个对象
	$obj = new Men();
	//调用成员属性
	echo $obj -> name;
	echo "<br />";
	//修改成员属性
	echo $obj -> name = "zz";
	echo "<br />";
	//调用方法
	echo $obj -> a($obj->name);