<?php 
require ("Query.php");
$number="";
$password="";
 if(isset($_POST["login"])){
    $number=$_POST['number'];
    $password=$_POST['password'];
 }
 $query=new Query();
 if(!empty($number) && !empty($password)){
   if($query->isExist($number,$password)){
     echo "Yor have successfully login<br>";
   }
   else{
     echo "<script>alert('Wrong password or number');</script>";
   }
 }
?>