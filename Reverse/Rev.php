
	<?php
		if(isset($_POST['submit'])) {
		  $inputString = $_POST['inputString'];
	    $s=strrev($inputString);
			echo "The reversed string is: ".$s;
		}
		function rev($str){
		  $len=strlen($str);
		  for($i=$len-1;$i>=0;$i--){
		     $rev=$syr[$i].$rev;
		  }
		}
	?>