<?php 
 function isPalindrome($str){
   $len=strlen($str);
   for($i=0;$i<=$len/2;$i++){
     if($str[$i]!=$str[$len-1-$i]){
       return false;
     }
   }
   return true;
 }
 $str="malayalam";
 if(isPalindrome($str))
   echo $str." is a palindrome";
 else
   echo $str." is not palindrome";
?>