
<?php
 function findLargest($num1, $num2, $num3) {
    $largest = $num1;
    if($num2 > $largest){
       $largest = $num2;
    }
    if ($num3 > $largest) {
        $largest = $num3;
    }
    return $largest;
 }
  if(isset($_POST['submit'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $num3=$_POST['num3'];
    $largest = findLargest($num1, $num2, $num3);
    echo "The largest number is: ".$largest;
  }
?>
