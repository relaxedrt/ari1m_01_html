<?php

// arrays

$a = 'naranja';

$colores = [
	'preferido'=>'azul',
	'aceptable'=>'verde',
	'rechazado'=>'rojo',
	'pasable'=>'amarillo',
];

echo $colores['aceptable'];

?>

<div id="r"></div>

<script>

colores = {
	'preferido':'azul'
	'aceptable':'verde'
	'rechazado':'rojo'
	'pasable':'amarillo'
};

document.getElementById('r').innerHTML=colores['rechazado'];

</script>