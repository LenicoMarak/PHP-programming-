<?php
 function fact($num){
   $result=1;
    while ($num>=1){
      $result=$result*$num;
      $num--;
    }
    return $result;
 }
 function isPrime($n){
    $check=0;
    for($i=2;$i<$n/2;$i++){
     if($i%2==0){
       $check++;
     }
   }
   if($check!=0){
     echo "$n is prime<br>";
   }
   else{
     echo "$n is not prime <br>";
   }
 }
 $num=11;
 $a=fact($num);
 $p=isPrime($num);
 echo $p;
 echo "The factorial of $num is: ".$a;
?>