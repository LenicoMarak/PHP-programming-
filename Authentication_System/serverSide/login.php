<?php 
require ("Query.php");
 if(isset($_POST["login"])){
    $number=$_POST['number'];
    $password=$_POST['password'];
 }
 $query=new Query();
 if($query->isExist($number,$password)){
   echo "Yor have successfully login<br>";
 }
 else{
   echo "Looks like you don't have an account!!<br>";
 }
?>