<?php 
$num=array("4","7","2","9","6");
for ($i=0; $i<=count($num) ; $i++) { 
	   for ($j=count($num)-1; $j>$i;$j--) { 
	        if($num[$j]<$num[$j-1])
	        {
	        	$temp=$num[$j];
	        	$num[$j]=$num[$j-1];
	        	$num[$j-1]=$temp;
	        }
	   }
}

echo "这是冒泡排序之后的结果：".implode(",",$num);
?>