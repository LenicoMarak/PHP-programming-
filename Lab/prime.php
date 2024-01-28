<?php
  function isPrime($num){
    for($i=2;$i<$num/2;$i++){
      if($num%$i==0){
        return false;
      }
    }
    return true;
  }
  $n=11;
  if(isPrime($n))
    echo $n." is prime";
  else 
    echo $n." is not prime";
 
 ?>
  