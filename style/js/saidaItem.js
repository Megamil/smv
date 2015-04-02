//Usado na tela de Nova Saída Item / Editar Saída Item para calcular preço liquido do item Preço bruto - % de desconto e limitar a quantidade de saída..
$(document).ready(function(){

	var d = new Date();

	$('#datasaida').val(("0" + d.getDate()).slice(-2)+ "/" + ("0" + (d.getMonth() + 1)).slice(-2) + "/" + d.getFullYear());

	$('#saida').focusout(function(){

		if(parseInt($('#saida').val()) > parseInt($('#maximo').val())) {

			$('#error').remove();
			$('.erro_Campo_Vazio').addClass("alert alert-danger")
			.append('<p id="error" >Valor acima do estoque atual. A saída máxima é: '+$('#maximo').val()+'<p>');
			$('#saida').val('');
			$('#saida').css('border','1px solid red');
			$('#saida').css('background','rgba(100,0,0,0.4)');

		} 

	});

	//Garante que o calcúlo só será feito quando o campo necessário for carregado.
    if($('#preco').val() != '') {

        $('#resultado').val($('#preco').val() - (($('#desconto').val() * $('#preco').val())/100));

      } else {

        $('#resultado').val('');

      }

});
