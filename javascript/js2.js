function cargar_numeros(numero) {
	console.log(numero.value);
	var numero= numero.value;
	var pantallas=$('#pantallas').val();
	var pantallas=pantallas+numero;
	$('#pantallas').val(pantallas);

		
}

	$('#limpiar').on('click',function(event){
		$('#pantallas').val('');
	});
	
	$('#Anterior').on('click',function(event){
		var pantallas=$('#pantallas').val();
		pantallas=pantallas.substring(0, pantallas.length - 1);
		$('#pantallas').val(pantallas);
			
			});
