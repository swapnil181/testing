<?php

echo "reverse pyramid";
echo "</br>";
for($i=5; $i>=1; $i--){
	
	for($j=5; $j>=$i-1; $j--){
		
		echo "&nbsp";
	}
	
	for($k=1; $k<=$i; $k++){
		
		if($i!=4 && $i!=2){
			echo "*";
		}
		
	}
	echo "</br>";
}
?>