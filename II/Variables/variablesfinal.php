<h1> Ejercicio 1 <h1/>
<h2> Halla la apotema de un hexágono regular de 20 cm de lado </h2>
<form>
Lado<input id="l" name="l" placeholder="lado" value="20" onkeyup="calcular()" />
Nº Lados<input id="n" name="n" placeholder="numero lados" value="6" onkeyup="calcular()"/>
<button onclick="calcular()"> Calcular </button>
</form>
<div id="aptm" style="
padding:20px;
background-color:yellow;
">
Resultado
</div>
<image heigth=20% src= "hexagono.jpg">
<script>
function calcular(){
	l=document.getElementById("l").value;
	n=document.getElementById("n").value;
	aptm=l/(2*Math.tan(Math.PI/n));
	document.getElementById('aptm').innerHTML= aptm+' cm';
	}calcular();
</script>
<?php
if(isset($_GET['l'])){
			$l=$_GET['l'];
			$n=$_GET['n'];
	echo 'resultado:' . ($l/(2*tan(M_PI/$n)));
		}
?>
<h1> Ejercicio 2 <h1/>
<h2> Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. ¿Qué superficie ocupa la fuente? </h2>
<form>
Diametro<input id="d" name="d" placeholder="diametro fuente" value="4" onkeyup="calcular2()" />
Ancho<input id="a" name="a" placeholder="ancho alrededor" value="1" onkeyup="calcular2()"/>
<button onclick="calcular2()"> Calcular </button>
</form>
<div id="perimetro" style="
padding:20px;
background-color:green;
">
Resultado 
</div>
<image heigth=20% src= "fuente.jpg">
<script>
function calcular(){
	d=document.getElementById("d").value;
	a=document.getElementById("a").value;
	perimetro=Math_PI*((d/2)**2);
	document.getElementById('perimetro').innerHTML= perimetro+' m';
	}calcular();
</script>
<?php
if(isset($_GET['d'])){
			$d=$_GET['d'];
			$a=$_GET['a'];
	echo 'resultado2:' . (M_PI(pow($d/2),2));
		}
?>
<h1> Ejercicio 3 <h1/>
<h2> En un corral hay conejos y gallinas. Si contamos las cabezas hay 30, si contamos las patas hay 84. ¿Cuántos conejos y cuántas gallinas hay? </h2>
<form>
Diametro<input id="c" name="c" placeholder="cabezas" value="30" onkeyup="calcular3()" />
Ancho<input id="p" name="p" placeholder="patas" value="84" onkeyup="calcular3()"/>
<button onclick="calcular3()"> Calcular </button>
</form>
<div id="g" style="
padding:20px;
background-color:blue;
">
Resultado 
</div>
<div id="r" style="
padding:20px;
background-color:blue;
">
Resultado 
</div>
<script>
//alert('hola mundo')
//console.log('hola otra vez')
function calcular(){
	c=document.getElementById("c").value;
	p=document.getElementById("p").value;
	r=(p-(2*c))/2;
	g=c-r;
	document.getElementById('r').innerHTML= r +' conejos';
	document.getElementById('g').innerHTML= g +' gallinas';
	}calcular();
</script>
<?php
if(isset($_GET['c'])){
			$c=$_GET['c'];
			$p=$_GET['p'];
			$r=$_GET['r'];
	echo 'conejos:' . ($p-(2*c))/2;
	echo 'gallinas:' . ($c-$r);
		}
?>
<h1> Ejercicio 4 <h1/>
<h2> Se dispone de un cartón cuadrado de 50 cm de lado para construir una caja sin tapa a partir de ese cartón. Para ello, se corta un cuadrado de x cm de lado en cada una de las esquinas. Halla el valor de x para que el volumen de la caja sea máximo y calcula dicho volumen </h2>
<form>
lado<input id="l" name="l" placeholder="lado" value="50" onkeyup="calcular4()" />
<button onclick="calcular4()"> Calcular </button>
</form>
<div id="x" style="
padding:20px;
background-color:pink;
">
Resultado 
</div>
<div id="vmax" style="
padding:20px;
background-color:pink;
">
</div>
<image heigth=20% src= "caja.jpg">
<script>

function calcular(){
	l=document.getElementById("l").value;
	x= 1/(12*l);
	vmax= x*(l-2*x)**2;
	document.getElementById('x').innerHTML= x+' cm';
	document.getElementById('vmax').innerHTML= vmax+' cm^3';
	}calcular();
</script>
<?php
								if(isset (
						$_GET['l'])) {$l=$_GET['l'];
						$x=12/(24*$l);
						$vmax=$x*pow(($l-(2*$x)),2);
						$vmax=round($vmax,2);
						echo 'Resultado: x= '.$x.' cm, y volumen= '.$vmax.' cm³.';
						}
					?>