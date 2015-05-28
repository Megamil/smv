//Usado para trazer dados dos itens
$(document).ready(function(){

  $('#nomeEtiqueta').change(function(){

  	if($(this).val() != '') {
  		$('#validar_Enviar').text('Salvar e Imprimir').css('background','green');
  	} else {
  		$('#validar_Enviar').text('Imprimir').css('background','#31b0d5');
  	}

  });

  $('#etiqueta').change(function(){

	   $.ajax({
	      url : "/smv/style/json/etiquetas.php?id="+$('#etiqueta').val(), /* URL que será chamada */ 
	      dataType: 'json', /* Tipo de transmissão */
	      success: function(json){
	         $('#nomeEtiqueta').val(json.nomeetiqueta);
	         $('#margemsuperior').val(json.margemsuperior);
	         $('#margemdireita').val(json.margemdireita);
	         $('#margemesquerda').val(json.margemesquerda);
	         $('#largura').val(json.larguraetiqueta);
	         $('#altura').val(json.alturaetiqueta);
	         $('#espacoetiqueta').val(json.espacoetiquetas);
	         $('#fonte').val(json.fonte);
	         $('#tamanhofonte').val(json.tamanhofonte);
	         $('#papel').val(json.tamanhopapel);
	       }

	   });  

  });


});