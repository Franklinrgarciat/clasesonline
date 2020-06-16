<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CLASE JAVASCRIPT</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="calculadora.php">CALCULADORA</a>
	<a href="sumar.php" >Sumar</a>
	<h1>TRABAJANDO CON JAVASCRIPT</h1>
	<br>
	<input type="number" name="numero1" id="numero1">
	<input type="number" name="numero2" id="numero2">
	<input type="button" name="sumar" value="sumar" id="sumar" onclick="sumar()">
	<br>
	<b><span id="total"></span></b>
	<hr>
	<br>
	<input type="number" name="numero3" id="numero3">
	<input type="number" name="numero4" id="numero4">
	<input type="button" name="restar" value="restar" id="restar" onclick="restar()">
	<br>
	<b>
		<span id="totall"></span></b>
		<hr>
		<br>
	<input type="number" name="numero5" id="numero5">
	<input type="number" name="numero6" id="numero6">
	<input type="button" name="multiplicar" value="multiplicar" id="multiplicar" onclick="multiplicar()">
	<br>
	<b>
		<span id="total2"></span></b>
		<hr>
		<br>
	<input type="number" name="numero7" id="numero7">
	<input type="number" name="numero8" id="numero8">
	<input type="button" name="dividir" value="dividir" id="dividir" onclick="dividir()">
	<br>
	<b>
		<span id="total3" style="background-color: red"></span></b>
		<hr>
	<h2>SEGUNDA PRUEBA JAVASCRIPT</h2><br>
	<input type="number" name="numero9" id="numero9">
	<input type="number" name="numero10" id="numero10">
	<input type="button" name="sumar" value="sumar" id="sumar" onclick="sumar2()">
	<input type="button" name="restar" value="restar" id="restar" onclick="restar2()">
	<input type="button" name="multiplicar" value="multiplicar" id="multiplicar" onclick="multiplicar2()">
	<input type="button" name="dividir" value="dividir" id="dividir" onclick="dividir2()">
	<br>
		<b><span id="total4" style="background-color: red"></span></b>
		

</body>

<script type="text/javascript">
	
	//console.log("HOLA MUNDO JAVASCRIPT");

	function sumar () {
	//console.log("entro a la funcion");
	//console.log('numero1: '+ document.getElementById('numero1').value);
	//console.log('numero2: '+ document.getElementById('numero2').value);
	var n1=document.getElementById('numero1').value;
	var n2=document.getElementById('numero2').value;
	var total=document.getElementById("total");
	if(n1!=="" && n2!==""){
		var suma=parseInt(n1)+parseInt(n2);
		total.innerHTML="TOTAL SUMA:"+suma;+resta;+multiplicacion;+division;

	}else{
		total.innerHTML="CAMPOS VACIOS";
	}
	}
		function restar () {
	//console.log("entro a la funcion");
	//console.log('numero3: '+ document.getElementById('numero3').value);
	//console.log('numero4: '+ document.getElementById('numero4').value);
	var n3=document.getElementById('numero3').value;
	var n4=document.getElementById('numero4').value;
	var totall=document.getElementById("totall");
	if(n3!=="" && n4!==""){
		var resta=parseInt(n3)-parseInt(n4);
		totall.innerHTML="TOTAL RESTA:"+resta;

	}else{
		totall.innerHTML="CAMPOS VACIOS";
	}
	}
			function multiplicar () {
	//console.log("entro a la funcion");
	//console.log('numero5: '+ document.getElementById('numero5').value);
	//console.log('numero6: '+ document.getElementById('numero6').value);
	var n5=document.getElementById('numero5').value;
	var n6=document.getElementById('numero6').value;
	var totall=document.getElementById("totall");
	if(n5!=="" && n6!==""){
		var multiplicar=parseInt(n5)*parseInt(n6);
		total2.innerHTML="TOTAL MULTIPLICACION:"+multiplicar;

	}else{
		totall.innerHTML="CAMPOS VACIOS";
	}
	}
		function dividir () {
	//console.log("entro a la funcion");
	//console.log('numero7: '+ document.getElementById('numero7').value);
	//console.log('numero8: '+ document.getElementById('numero8').value);
	var n7=document.getElementById('numero7').value;
	var n8=document.getElementById('numero8').value;
	var total3=document.getElementById("total3");
	if(n7!=="" && n8!==""){
		var dividir=parseInt(n7)/parseInt(n8);
		total3.innerHTML="TOTAL DIVISION:"+dividir
		total3.setAttribute("style", "background-color: blue");
	}else{
		total3.innerHTML="CAMPOS VACIOS";
		
	}


	//SEGUNDA PRUEBA DE BOTONES
	

	}
		function sumar2() {
	//console.log("entro a la funcion");
	//console.log('numero9: '+ document.getElementById('numero9').value);
	//console.log('numero10: '+ document.getElementById('numero10').value);
	var n9=document.getElementById('numero9').value;
	var n10=document.getElementById('numero10').value;
	var total4=document.getElementById("total4");
	if(n9!=="" && n10!==""){
		var sumar=parseInt(n9)+parseInt(n10);
		total4.innerHTML="TOTAL SUMA:"+sumar;
		total4.setAttribute("style", "background-color: purple");

	}else{
		total4.innerHTML="CAMPOS VACIOS";
	}
	}
	function restar2() {
	//console.log("entro a la funcion");
	//console.log('numero9: '+ document.getElementById('numero9').value);
	//console.log('numero10: '+ document.getElementById('numero10').value);
	var n9=document.getElementById('numero9').value;
	var n10=document.getElementById('numero10').value;
	var total4=document.getElementById("total4");
	if(n9!=="" && n10!==""){
		var restar=parseInt(n9)-parseInt(n10);
		total4.innerHTML="TOTAL RESTA:"+restar;
		total4.setAttribute("style", "background-color: yellow");

	}else{
		total4.innerHTML="CAMPOS VACIOS";
	}
	}
	function multiplicar2() {
	//console.log("entro a la funcion");
	//console.log('numero9: '+ document.getElementById('numero9').value);
	//console.log('numero10: '+ document.getElementById('numero10').value);
	var n9=document.getElementById('numero9').value;
	var n10=document.getElementById('numero10').value;
	var total4=document.getElementById("total4");
	if(n9!=="" && n10!==""){
		var multiplicar=parseInt(n9)*parseInt(n10);
		total4.innerHTML="TOTAL MULTIPLICACION:"+multiplicar;
		total4.setAttribute("style", "background-color: orange");

	}else{
		total4.innerHTML="CAMPOS VACIOS";
	}
	}
	function dividir2() {
	//console.log("entro a la funcion");
	//console.log('numero9: '+ document.getElementById('numero9').value);
	//console.log('numero10: '+ document.getElementById('numero10').value);
	var n9=document.getElementById('numero9').value;
	var n10=document.getElementById('numero10').value;
	var total4=document.getElementById("total4");
	if(n9!=="" && n10!==""){
		if(n10=="0"){
			total4.innerHTML="EL SEGUNDO NUMERO NO PUEDE SER CERO"
		}else{


		var dividir=parseInt(n9)/parseInt(n10);
		total4.innerHTML="TOTAL DIVISION:"+dividir;
		total4.setAttribute("style", "background-color: blue");
		}
	}else{
		total4.innerHTML="CAMPOS VACIOS";
	}
	}

</script>
</html>
