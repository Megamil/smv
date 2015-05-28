//Usado na tela de Novo Item / Editar Item para calcular preço liquido do item Preço bruto - % de desconto.
$(document).ready(function(){

	if($('#preco').val() != ''){

		$('#resultado').val($('#preco').val() - (($('#desconto').val() * $('#preco').val())/100));

	} 

	$('#preco').change(function(){

		if($('#preco').val() != ''){

			$('#resultado').val($('#preco').val() - (($('#desconto').val() * $('#preco').val())/100));

		} else {

			$('#resultado').val('');
		}

	});

	$('#desconto').change(function(){

		if($('#preco').val() != ''){

			$('#resultado').val($('#preco').val() - (($('#desconto').val() * $('#preco').val())/100));

		} 

	});

	/*Usado na tela de ajustes de estoque*/
	$('.real').change(function(){

		$('.diferenca').remove();

		var resultado = parseInt($(this).val()); 

		$('.diferenca').append(resultado);

	});

});