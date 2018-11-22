<?php
function wangge($x,$y)
{
   if($x==0&&$y==0)
	{
		return 0;
	} 

	if($x==0||$y==0)
	{
		return 1;
	}
	else{
		return wangge($x-1,$y)+wangge($x,$y-1);
	}
}
echo wangge(1,1);
?>