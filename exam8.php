<?php
function LastRemaining_Solution($n, $m)
{
	if($n==0)
	{
		return -1;
	}
	if($n==1)
	{
		return 0;
	}
	return (LastRemaining_Solution($n-1,$m)+$m)%$n;
}

echo LastRemaining_Solution(5,2);
?>