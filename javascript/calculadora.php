<!DOCTYPE <html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CALCULADORA</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>BIENVENIDO A LA CALCULADORA <a href="index.php">VOLVER</a></h1><br>
	<input type="number" name="numero1" id="numero1">
	<input type="number" name="numero2" id="numero2">
	<input type="button" name="sumar" value="+" onclick="calcular(this)">
	<input type="button" name="restar" value="-" onclick="calcular(this)">
	<input type="button" name="multiplicar" value="*" onclick="calcular(this)">
	<input type="button" name="dividir" value="/" onclick="calcular(this)">
<br>
	
	<b><span id="total" style="background-color: red"></span></b>
	<hr>
	
</body>
<script>
	function calcular(boton){
		//cosole.log(boton,value);
		var n1=document.getElementById('numero1').value;
		var n2=document.getElementById('numero2').value;
		var total=document.getElementById("total");

		if (n1=="" || n2=="") {
			total.innerHTML="CAMPOS VACIOS";

		}else{
			switch (boton.value) {
				case "+":
				var suma=parseInt(n1)+parseInt(n2);
						total.innerHTML="Total: "+suma;
			total.setAttribute("style", "background-color:blue" );
					break;
				case "-":
				var resta=parseInt(n1)-parseInt(n2);
						total.innerHTML="Total: "+resta;
			total.setAttribute("style", "background-color:blue" );

				break;

				case "*":
				var multiplicacion=parseInt(n1)*parseInt(n2);
						total.innerHTML="Total: "+multiplicacion;
			total.setAttribute("style", "background-color:blue" );

				break;

				case "/":
						if(n2=="0"){
				total4.innerHTML="EL SEGUNDO NUMERO NO PUEDE SER CERO"
				
			}else{
				var dividir=parseInt(n1)/parseInt(n2);
						total.innerHTML="Total: "+dividir;
						total.setAttribute("style", "background-color:blue" );
			}

				break;
			}
		}
	}


</script>
</html>
	

</html>