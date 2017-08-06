<?php

class Singleton{
	private static $uniqueInstance;

	private function __construct(){
		echo "first Instance";
	}

	public static function getInstance(){
		if(!isset(static::$uniqueInstance)){
			static::$uniqueInstance = new Singleton();
		}
		return static::$uniqueInstance;
	}

	public function describe(){
		echo "object_id:" . spl_object_hash($this).'<br>'; 
	}
}

$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();
$obj3 = Singleton::getInstance();

$obj1->describe();
$obj2->describe();
$obj3->describe();