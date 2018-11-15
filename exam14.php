<?php
function FindNumbersWithSum($array, $num)
{
	
	$start=0;
	$end=count($array)-1;
	while ($start<$end) {
		$temp=$array[$start]+$array[$end];
		if($temp>$num)
		{
			$end--;
		}
		if($temp<$num)
		{
			$start++;
		}
		if($temp==$num)
		{
			echo "这两个元素是".$array[$start].$array[$end];
			break;
		}
	}
}  

$array=array("1","2","4","7","11","14");
$num=15;
FindNumbersWithSum($array,$num);
?>
