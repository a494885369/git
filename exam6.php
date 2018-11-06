<?php

function calFn($n,$m)
{$num=0;
   for ($i=$n; $i<=$m ; $i++) { 
   	  for ($j=0;$j<=$i; $j++) { 
   	  	  if(1==substr($i,$j,1))
   	  	   {
   	  	   	$num++;
        
            continue;
   	  	  }
   	  }
   }
   return $num;
}

echo calFn(1,13);
?>