<?php
$meses=[
		'enero',
		'febrero',
		'marzo',
		'abril',
		'mayo',
		'junio',
		'julio',
		'agosto',
		'septiembre',
		'octubre',
		'noviembre',
		'diciembre',
	];
//mes random
echo "MES RANDOM: <br>";
echo $meses[round(rand(0,11))];
echo "<br>";
?>
MES RANDOM2: <br/>
<div id="m"></div>
<script>
	mes = [ 
		'enero',
		'febrero',
		'marzo',
		'abril',
		'mayo',
		'junio',
		'julio',
		'agosto',
		'septiembre',
		'octubre',
		'noviembre',
		'diciembre',
		];
i=Math.random()*(mes.length -1);
i=Math.round(i);
console.log(i);
document.getElementById('m').innerHTML =mes[i];
</script>