<?php
/*1. Se dispone de una tabla T de cincuenta números reales distintos de cero. Crear una nueva tabla en la que todos sus elementos resulten de dividir los elementos de la tabla T por el elemento T[K], siendo K un valor dado.
*/
echo "ingrese el valor k:";
$k=trim(fgets(STDIN));

$a[]=0;
$b[]=0;
for ($i=0; $i <=49 ; $i++) { 
	$a[$i]=rand(1,100);
}
for ($i=0; $i <=49 ; $i++) { 
	echo $a[$i]."-";
}
echo "\n";
for ($i=0; $i <=49 ; $i++) { 
	$b[$i]=$a[$i]/$k;
}

for ($i=0; $i <=49 ; $i++) { 
	echo $b[$i]."-";
}
?>
