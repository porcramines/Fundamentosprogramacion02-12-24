<?php
$a=[["1","2","3"],
   ["4","5","6"],
   ["7","8","9"]];
//$sumafila=0;
//$sumacolumna=0;
$s=0;

//sumatorio filas
for ($i=0; $i <=2 ; $i++)
{ 
	for ($j=0; $j <=2 ; $j++)
	{ 
		$s=$s+$a[$i][$j];
		
	}
	$sumafila[$i]=$s;
	$s=0;
}
//sumatorio columna
for ($i=0; $i <=2 ; $i++)
{ 
	for ($j=0; $j <=2 ; $j++)
	{ 
		$s=$s+$a[$j][$i];
		
	}
	$sumacolumna[$i]=$s;
	$s=0;
}

//for para ver la suma de filas
print "suma de filas \n";
for ($i=0; $i <=2 ; $i++)
{ 
		print $sumafila[$i];
		print "-";
}
print "\n";

//for para ver la suma de columnas
print "suma de columnas \n";
for ($i=0; $i <=2 ; $i++)
{ 
		print $sumacolumna[$i];
		print "-";
		
}

?>