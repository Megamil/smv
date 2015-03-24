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
	}
	else{

		document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido</font>";
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
function numero(e){

    var tecla=(window.event)?event.keyCode:e.which;   

    if((tecla>47 && tecla<58)) return true;

    else {
	 return false;

    }
}


$(document).ready(function(){

	$('.input_Vazio').focusout(function(){

		if($('.input_Vazio').val() == '') {

			$('#error').remove();

			var ph = $('.input_Vazio').attr('placeholder');  

			$('.erro_Campo_Vazio').addClass("alert alert-danger")
			.append('<p id="error">Você deixou o campo: '+ ph +' em branco.</p>');

		} else {

			$('.erro_Campo_Vazio').removeClass('alert alert-danger');
			$('#error').remove();

		}

	});

	$('.textarea_Vazio').focusout(function(){

		if($('.textarea_Vazio').val() == '') {

			$('#error').remove();

			var ph = $('.textarea_Vazio').attr('placeholder');  

			$('.erro_Campo_Vazio').addClass("alert alert-danger")
			.append('<p id="error">Você deixou o campo: '+ ph +' em branco.</p>');

		} else {

			$('.erro_Campo_Vazio').removeClass('alert alert-danger');
			$('#error').remove();

		}

	});

$('#validar_Enviar').click(function(){

	if($('.input_Vazio').val() == '') {

			$('#error').remove();

			var ph = $('.input_Vazio').attr('placeholder');  
			$('.erro_Campo_Vazio').addClass("alert alert-danger")
			.append('<p id="error">Você deixou o campo: '+ ph +' em branco.</p>');
			return false;

		} else {
			
			$('.telefoneValidar').mask("?999999999999");
			$('#cnpjValidar').mask("?99999999999999");
			$('#cepValidar').mask("?99999999");
			$('.erro_Campo_Vazio').removeClass('alert alert-danger');
			$('#error').remove();

		}

		if($('.textarea_Vazio').val().length == 0) {

			$('#error').remove();

			var ph = $('.textarea_Vazio').attr('placeholder');
			$('.erro_Campo_Vazio').addClass("alert alert-danger")
			.append('<p id="error">Você deixou o campo: '+ ph +' em branco.</p>');
			return false;

		} else {

			$('.telefoneValidar').mask("99999999999?9");
			$('#cnpjValidar').mask("99999999999999");
			$('#cepValidar').mask("99999999");
			$('.erro_Campo_Vazio').removeClass('alert alert-danger');
			$('#error').remove();

		}

	});

	$('.telefoneValidar').mask("(?99)9999-99999");
	$('#cnpjValidar').mask("?99.999.999/9999-99");
	$('#cepValidar').mask("?99999-999");

});