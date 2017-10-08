<?php
class Computer{
	public function__construct()
	{
		echo "cpu就绪..";
		echo "主板就绪..";
		echo "内存就绪..";
	}//构造方法，自动执行(具有构造函数的类会在每次创建新对象时先调用此方法，所以非常适合在使用对象之前做一些初始化工作)。 
	public function game()
	{
		echo "--一起玩游戏--";
	}
}

$computer = new Computer;

var_dump($computer->game());