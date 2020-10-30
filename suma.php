<?php
	// Este codigo ha sido generado por el modulo psexport 20180802-l64 de PSeInt.
	// Es posible que el codigo generado no sea completamente correcto. Si encuentra
	// errores por favor reportelos en el foro (http://pseint.sourceforge.net).

	$stdin = fopen('php://stdin','r');
	settype($a,'integer');
	settype($b,'integer');
	settype($r,'integer');
	echo 'Introduzca un numero',PHP_EOL;
	fscanf($stdin,"%d",$a);
	echo 'Introduzca otro numero',PHP_EOL;
	fscanf($stdin,"%d",$b);
	$r = $a+$b;
	echo $a,' + ',$b,' = ',$r,PHP_EOL;
?>
