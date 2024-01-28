<?php 
function sumOdd($n){
  $sum=0;
  for($i=0;$i<=$n;$i++){
    if($i%2!=0)
      $sum+=$i;
  }
  return $sum;
}
$limit=10;
echo sumOdd($limit);//Output: 25