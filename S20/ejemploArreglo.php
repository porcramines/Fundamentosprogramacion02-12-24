<?php
$a=[["abc",12,"tacna"],
	[13,14,15],
	[16,17,18]];

//fila 0->2
//columna 0->2
for ($i=0; $i <=2 ; $i++) { 
		for ($j=0; $j <=2 ; $j++) { 
			echo $a[$i][$j];
			echo "-";
		}
		echo "<br>";
	}	
?>
