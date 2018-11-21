<?php
$arr=array("1","2","3","4","5","6","7","8");
$val=4;
 function digui($arr,$select,$min,$max){
		$half = floor(($min+$max)/2);
		if($select>$arr[$half]){
		return digui($arr,$select,$half+1,$max);
		}else if($select < $arr[$half]){
		return digui($arr,$select,$min,$half-1);
		}else{
		return $half;
		}
}
echo digui($arr,$val,0,count($arr));
echo "<br>";


function feidigui($arr,$select,$min,$max)
{
	while($min<=$max)
	{
		$half=ceil(($max+$min)/2);
		if($select>$arr[$half])
		{
			$min=$half+1;
		}
		elseif($select<$arr[$half])
		{
			$max=$half-1;
		}
		else{
			return $half;
		}
	}
}
echo feidigui($arr,$val,0,count($arr));
?>