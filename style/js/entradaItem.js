//Usado na tela de Nova Saída Item / Editar Saída Item para calcular preço liquido do item Preço bruto - % de desconto e limitar a quantidade de saída..
$(document).ready(function(){

	var d = new Date();

	$('#dataentrada').val(("0" + d.getDate()).slice(-2)+ "/" + ("0" + (d.getMonth() + 1)).slice(-2) + "/" + d.getFullYear());

	//Garante que o calcúlo só será feito quando o campo necessário for carregado.
    if($('#preco').val() != '') {

        $('#resultado').val($('#preco').val() - (($('#desconto').val() * $('#preco').val())/100));

      } else {

        $('#resultado').val('');

      }

});
