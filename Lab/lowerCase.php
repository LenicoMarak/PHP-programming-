<?php
 function isLowerCase($str){
   $lower=0;
    for($ch=0;$ch<strlen($str);$ch++){
      if($str[$ch]>='A' && $str[$ch]<='Z'){
          $lower++;
      }
    }
    return $lower==0;
 }
 $str="Guwahati";
 if(isLowerCase($str))
    echo "Characters are in lower case";
 else
    echo "Characters are not in lower case";
 ?>