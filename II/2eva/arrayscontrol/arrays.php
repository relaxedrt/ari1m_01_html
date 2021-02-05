<h2>Controls y arrays</h2>
<h3>Crea un array con los meses del año y muestra uno de los meses seleccionándolo al azar:</h3> <br/>
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
<h3>Muestra el listado ordenado de días de la semana que contengan la letra R:</h3> <br/>
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
	echo "DIAS DE LA SEMANA CON LA R:<br>";
	foreach ($semana as $c){
	if(strpos($c,"r")){
		echo "$c <br>";
	}
}
?>
DIAS DE LA SEMANA CON LA R <br/>
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
<h3>Almacena en un array la tabla de cuadrados perfectos y muestra el contenido del array:</h3> <br/>
<?php
for ($i=1; $i <100 ; $i++) { 
    $cuadrados[]=$i*$i;
} 
print_r($cuadrados)
?>
<div id="num"></div>
<script>
tabla=[];
for(i = 0;i<=100;i++){
	tabla[i]=i*i;
} console.log(tabla);
for(i in tabla)
document.getElementById('num').innerHTML =tabla;
</script>