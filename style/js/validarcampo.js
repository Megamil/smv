function validacaoEmail(field) {

	usuario = field.value.substring(0, field.value.indexOf("@"));
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

	if ((usuario.length >=1) &&
	    (dominio.length >=3) && 
	    (usuario.search("@")==-1) && 
	    (dominio.search("@")==-1) &&
	    (usuario.search(" ")==-1) && 
	    (dominio.search(" ")==-1) &&
	    (dominio.search(".")!=-1) &&      
	    (dominio.indexOf(".") >=1)&& 
	    (dominio.lastIndexOf(".") < dominio.length - 1)) {
		document.getElementById("msgemail").innerHTML=""
		$(field).css('border','1px solid green');
		$(this).css('background','rgba(0,100,0,0.1)');
	}
	else{

		document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido</font>";
		$(field).css('border','1px solid red');
		$(this).css('background','rgba(100,0,0,0.1)');
	}

}
/*Aceita decimais*/
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0 || tecla==44 || tecla ==46) return true;
	else  return false;
    }
}

/*Somente números sem virgulas ou pontos*/
function Numero(e){

    var tecla=(window.event)?event.keyCode:e.which;   

    if((tecla>47 && tecla<58)) return true;

    else {
	 return false;

    }
}


$(document).ready(function(){

	//Cria as mascaras para os campos logo de inicio
	$('.telefoneValidar').mask("(?99)?99999-9999");
	$('#cnpjValidar').mask("?99.999.999/9999-99");
	$('#cpfValidar').mask("?999.999.999-99");
	$('#cepValidar').mask("?99999-999");
	$('.cepValidar').mask("?99999-999");
	$('#placaValidar').mask("?aaa-9999");


	//Verifica um campo input assim que perde o foco
	$('.input_Vazio').focusout(function(){

			//Antes de validar retira as mascaras dos campos
			$('.telefoneValidar').mask("?999999999999");
			$('#cnpjValidar').mask("?99999999999999");
			$('#cepValidar').mask("?99999999");
			$('.cepValidar').mask("?99999999");
			$('#cpfValidar').mask("?99999999999");
			$('#placaValidar').mask("?aaa9999");

		if($(this).val() == '' || $(this).val() == "Selecione...") {

			$('#error').remove();
			$(this).css('border','1px solid red');
			$(this).css('background','rgba(100,0,0,0.1)');

			var ph = $(this).attr('placeholder');  

			$('.erro_Campo_Vazio').addClass("alert alert-danger")
			.append('<p id="error">Você deixou o campo: '+ ph +' em branco.</p>');

			//Retorna as mascaras.
			$('.telefoneValidar').mask("(?99)?99999-9999");
			$('#cnpjValidar').mask("?99.999.999/9999-99");
			$('#cpfValidar').mask("?999.999.999-99");
			$('#cepValidar').mask("?99999-999");
			$('.cepValidar').mask("?99999-999");
			$('#placaValidar').mask("?aaa-9999");


		} else {

			$('.erro_Campo_Vazio').removeClass('alert alert-danger');
			$(this).css('border','1px solid green');
			$(this).css('background','rgba(0,100,0,0.1)');
			$('#error').remove();

			//Retorna as mascaras.
			$('.telefoneValidar').mask("(?99)?99999-9999");
			$('#cnpjValidar').mask("?99.999.999/9999-99");
			$('#cpfValidar').mask("?999.999.999-99");
			$('#cepValidar').mask("?99999-999");
			$('.cepValidar').mask("?99999-999");
			$('#placaValidar').mask("?aaa-9999");

		}

	});
	
	//Verifica um campo text area assim que perde o foco
	$('.textarea_Vazio').focusout(function(){

		if($(this).val() == '') {

			$('#error').remove();
			$(this).css('border','1px solid red');
			$(this).css('background','rgba(100,0,0,0.1)');
			var ph = $(this).attr('placeholder');  

			$('.erro_Campo_Vazio').addClass("alert alert-danger")
			.append('<p id="error">Você deixou o campo: '+ ph +' em branco.</p>');

		} else {

			$(this).css('border','1px solid green');
			$(this).css('background','rgba(0,100,0,0.1)');
			$('.erro_Campo_Vazio').removeClass('alert alert-danger');
			$('#error').remove();

		}

	});

		$('#validar_Enviar').click(function(e){
			
			e.preventDefault();
			var erros = 0;
			
			//Antes de validar retira as mascaras dos campos
			$('.telefoneValidar').mask("?999999999999");
			$('#cnpjValidar').mask("?99999999999999");
			$('#cepValidar').mask("?99999999");
			$('.cepValidar').mask("?99999999");
			$('#cpfValidar').mask("?99999999999");
			$('#placaValidar').mask("?aaa9999");
			
			//Percorre todos inputs com essa classe
			$(".input_Vazio").each(function(){

				if($(this).val() == "" || $(this).val() == "Selecione...") {

					erros++;

					$('#error').remove();
					var ph = $(this).attr('placeholder'); 
					$('.erro_Campo_Vazio').addClass("alert alert-danger")
					.append('<p id="error">Você deixou o campo: '+ph+' em branco.</p>');

					$(this).css('border','1px solid red');
					$(this).css('background','rgba(100,0,0,0.1)');

					//Volta as mascaras aos campo
					$('.telefoneValidar').mask("(?99)?99999-9999");
					$('#cnpjValidar').mask("?99.999.999/9999-99");
					$('#cpfValidar').mask("?999.999.999-99");
					$('#cepValidar').mask("?99999-999");
					$('.cepValidar').mask("?99999-999");
					$('#placaValidar').mask("?aaa-9999");

					return false;

				}
				
			}); //Fecha o percorre input

				if(erros == 0) {

					$('.erro_Campo_Vazio').removeClass('alert alert-danger');
					$('#error').remove();
					$("form").submit();

			}


	}); //Fecha o validar enviar

}); //Fecha o document ready