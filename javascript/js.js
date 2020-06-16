//$('#agregar').on('click',function (event){
	//console.log('hizo click');
	//var nFilas=$('#mitabla tr').length;//cuantas filas tiene mi tabla
	//var mifila=parseInt(nFilas)+1;//suma 1 a la cantidad de filas q tiene la tabla
	//$('#mitabla').append("<tr id='"+mifila+"'>"+//agregar 
		//"<td colspan='2'>"+
		//	"<input type='number' name='numero[]' id=''>"+
		//	"<input onclick='quitar("+mifila+")' type='button' name='quitar' id='quitar' value='-'>"+
		//"</td>"+
		//"</tr>");


	//});

	//function quitar(fila){
	//console.log(fila);
	//$('#'+fila).remove();


	//}

		$('#agr').on('click',function(event){
		var agrega=$('#uno li').length;
		var unamas=parseInt(agrega)+1;
		$('#uno').append("<li id='uno_"+unamas+"'>"+unamas+""+
			"<input onclick='quitaruno("+unamas+")' type='button' name='quitar' id='quitar' value='-'>"+
			"</li>");
	});
	function quitaruno(li) {
		$('#uno_'+li).remove();
	}
	



		
