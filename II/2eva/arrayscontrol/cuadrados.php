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
