<?php   
//建立一个类
class Computer{
    public $cpu = 'amd 5000';
	public $mainboard = '东涛9000x';
	private $hd=1024;
	public function game($gameName="")
	{
		if($this->getHdSize() <1024)
		{
			echo ("硬盘太小玩不了游戏");
			return false;
		}
		else 
		{
		    return true;
		}
	};
	public function job($work='写代码')
	{
		echo ($this->game());
	};
	//获取硬盘大小
	private function getHdSize()
	{
		return $this->hd;
	};
}
//以下为实例
$computer = new Computer();//定义一个对象computer

var_dump($computer->job());//输出类的内容
?>