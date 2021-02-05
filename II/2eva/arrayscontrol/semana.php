<?php
$semana = [
	'lunes',
	'martes',
	'miercoles',
	'jueves',
	'viernes',
	'sabado',
	'domingo',
];
//dias de la semana con la R
	echo "Dias de la semana con la R:<br>";
	foreach ($semana as $c){
	if(strpos($c,"r")){
		echo "$c <br>";
	}
}
?>
Días de la semana R: <br/>
<div id="di"></div>
<script>
	dias = [
			'lunes',
			'martes',
			'miercoles',
			'jueves',
			'viernes',
			'sabado',
			'domingo',
			];
	for(i = 0; i < dias.length ; i++) {
		n = dias[i].indexOf("r");
		if (n > 0){
			document.getElementById('di').innerHTML += dias[i]+ "<br>";
	}}
</script>