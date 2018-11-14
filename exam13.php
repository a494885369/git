<?php

function Add($num1, $num2)
 {
      $data[]=$num1;
      $data[]=$num2;
      return array_sum($data);
 }
 echo Add(5,6); 
?>