<?php 
function NumberOf1($n)
{
	$count=0;
     while($n)
     {
     	$count++;
     	$n=$n&($n-1);
     }
     return $count;
}

echo NumberOf1(10);

?>