<?php
//累加第一种
$num=0;
for ($i=1; $i<=100;$i++) { 
	$num+=$i;
}
echo $num;
echo "<br>";

//累加第二种
function jia($n)
{
	if($n==1)
	{
		return 1;
	}
	else{
		return $shu=$n+jia($n-1);
	}
}
echo jia(100);
echo "<br>";

//累加第三种
echo array_sum(range(1,100));
echo "<br>";

//N的阶乘非递归
$n=5;
$jie=1;
for ($i=1; $i<=$n;$i++) { 
	$jie=$jie*$i;
}
echo $jie;
echo "<br>";

//N的阶乘递归
function jie($n)
{
	if($n==1)
	{
		return 1;
	}
	else{
     return $n*jie($n-1);
	}
}
echo jie(5);
echo "<br>";

//判断是否为回文字符串
$str="abba";
function hui($str)
{
    $str1=strrev($str);
    if($str1==$str)
    {
    	echo "OK，是回文字符串";
    }
    else{
    	echo "No,不是回文字符串";
    }
}
 hui($str);
echo "<br>";

//定义person类
class Person
{
    public $name="我是姓名",$age="我是年龄";
}
//定义walk接口类
interface Walk
{
   public function walk();
}
//定义student类
class Student extends Person implements Walk
{
	public function walk(){

	}
}
//实例化8个student类
$xue1=new Student;
$xue1->name="张三";
$xue1->age=18;

$xue2=new Student;
$xue2->name="李四";
$xue2->age=111;

$xue3=new Student;
$xue3->name="王五";
$xue3->age=16;

$xue4=new Student;
$xue4->name="赵六";
$xue4->age=22;

$xue5=new Student;
$xue5->name="周强";
$xue5->age=55;

$xue6=new Student;
$xue6->name="钱八";
$xue6->age=10;

$xue7=new Student;
$xue7->name="孙一";
$xue7->age=32;

$xue8=new Student;
$xue8->name="吴天";
$xue8->age=10;

$data[$xue1->age]=$xue1->name;
$data[$xue2->age]=$xue2->name;
$data[$xue3->age]=$xue3->name;
$data[$xue4->age]=$xue4->name;
$data[$xue5->age]=$xue5->name;
$data[$xue6->age]=$xue6->name;
$data[$xue7->age]=$xue7->name;
$data[$xue8->age]=$xue8->name;
ksort($data);
echo "年龄最大的是:".array_pop($data);
?>