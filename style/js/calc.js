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

		var referencia = $(this).attr('referencia');

		var diferenca = (parseInt($(this).val()) - parseInt($('#atual'+referencia).val()));

		$('#diferenca'+referencia).val(diferenca);

		if(diferenca > 0) {

			$('#dif'+referencia).remove();
			$('#salvar'+referencia).removeAttr('disabled');
			$('#es'+referencia).append('<div id="dif'+referencia+'">Adicionar<div>');

		} else if(diferenca == 0) {

			$('#dif'+referencia).remove();
			$('#salvar'+referencia).attr('disabled', 'disabled');
			$('#es'+referencia).append('<div id="dif'+referencia+'">OK<div>');

		} else {
			
			$('#dif'+referencia).remove();
			$('#salvar'+referencia).removeAttr('disabled');
			$('#es'+referencia).append('<div id="dif'+referencia+'">Remover<div>');


		}


	});

});