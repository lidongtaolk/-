<?php
class Computer{
	public function game()
	{
		echo "--一起玩游戏--";
	}
	public function__destruct()
	{
		echo "关闭电源。。。";
	}//析构方法，当前方PHP脚本被销毁时自动运行(延迟运行）(析构函数会在到某个对象的所有引用都被删除或者当对象被显式销毁时执行)。
}

$computer = new Computer;
var_dump($computer->game());
unset($computer);//手动释放PHP脚本
echo "good job";