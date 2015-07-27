//Usado para trazer dados dos itens
$(document).ready(function(){

	if(parseInt($('#margemsuperior').val()) > 1){
		alert('s');
	}

  $('#config').click(function(){

  	var validar = false;

	//Percorre todos inputs com essa classe
	$(".imprimircb").each(function(){

		if($(this).val() != 0){

			validar = true;

		}
		
	}); //Fecha o percorre input

	if(!validar){
		$('#error').remove();
		$('.erro_Campo_Vazio').addClass("alert alert-danger")
			.append('<p id="error">Você não selecionou nenhuma etiqueta.</p>');
		$('#validar_Enviar').hide();
		
		var $intervalo = setTimeout(function() {
		        $('#fecharmodal').click();
		      }, 1000);
			
	} else {

		$('#error').remove();
		$('.erro_Campo_Vazio').removeClass('alert alert-danger');
		$('#validar_Enviar').show();
	}


  });

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