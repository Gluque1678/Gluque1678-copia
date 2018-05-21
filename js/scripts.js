var inicio=function () {
	//alert('');
	//eventos KeyCode buscarlos en internet en este caso es trece
	$(".cantidad").keyup(function(e)){
		if($(this).val()!=''){
			if(e.keyCode==13){
				//alert('');

				var id=$(this).attr('data-id');
				var precio=$(this).attr('data-precio');
				var cantidad=$(this).val('');
				//aqui le estoy diciendo que me busque el subtotal y me lo cambie por el nuevo
				$(this).parentsUntil('.producto').find('.subtotal').text('Subtotal: '+(precio*cantidad))
				$.post('./js/modificarDatos.php',{
													Id:id,
													Precio:precio,
													Cantidad:cantidad


						},function(e){

										$("#total").text('Total: '+e );

					});
				}
			}
		});
	}
	$(document).on('ready',inicio);