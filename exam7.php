<?php
function chou($shu)
{
	while($shu%2==0)
	{
		$shu/=2;
	}
	while($shu%3==0)
	{
		$shu/=3;
	}
	while($shu%5==0)
	{
		$shu/=5;
	}
	if($shu==1)
	{
		return true;
	}
	else{
		return false;
	}
}


function GetUglyNumber_Solution($n)
{
	$num=0;
	$i=0;
   while($i<$n)
   {
        $num++;
   	   if(chou($num))
   	   {
   	   	    $i++;
   	   }
   }
   return $num;
}

echo GetUglyNumber_Solution(7);
?>