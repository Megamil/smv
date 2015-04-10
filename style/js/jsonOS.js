//jSon ordem de serviço

//Usado para trazer dados de veículos
$(document).ready(function(){

    $('#item_quantidade').attr("disabled","disabled");
    $('#item_id_fornecedorprestador').attr("disabled","disabled");
    $("#AdicionarItem").attr("disabled","disabled");

     $('#item_id_servico').change(function(){

      //Confirma que o usuário só digitará um valor no campo de quantidade quando selecionar um item.
      if($('#item_id_servico').val() == 'Selecione...') {
        $('#item_quantidade').attr("disabled","disabled");
      } else {
        $('#item_quantidade').removeAttr("disabled");

        $.ajax({
        url : "/smv/style/json/valorunitarioItem.php?id="+$('#item_id_servico').val(), /* URL que será chamada */ 
        dataType: 'json', /* Tipo de transmissão */
        success: function(json){
            $("#item_valorunitario").val(json.liquido);
        }

        });

        }

   });

     $('#item_quantidade').change(function(){

      //Confirma que o usuário só digitará um valor no campo de quantidade quando selecionar um item.
      if($('#item_id_servico').val() == 'Selecione...') {
        $('#item_id_fornecedorprestador').attr("disabled","disabled");
      } else {
        $('#item_id_fornecedorprestador').removeAttr("disabled");
        }

   });



   $.ajax({
        url : "/smv/style/json/ordemdeservico.php?id="+$('#id_solicitacao').val(), /* URL que será chamada */ 
        dataType: 'json', /* Tipo de transmissão */
        success: function(json){
        		$("#dt").val(json.prefixo);
        		$("#placa").val(json.placa);
        		$("#modelo").val(json.modelo);
        		$("#marca").val(json.marca);
        		$("#tipo").val(json.tipo);
        		$("#numeromotor").val(json.numeromotor);
        		$("#km").val(json.km);
        		$("#detalhemotor").val(json.detalhemotor);
        		$("#defeitoapresentado").val(json.defeitoapresentado);
        		$("#unidadesolicitante option[value="+json.id_unidadesolicitante+"]").prop('selected', true);
                
        }

    });  

   $("#item_quantidade").change(function(){

        $("#item_valortotal").val($("#item_valorunitario").val()*$("#item_quantidade").val())

   });

    $("#item_id_fornecedorprestador").change(function(){

        $(".input_Item_Vazio").each(function(){

            if($(this).val() == "" || $(this).val() == "Selecione...") {

                $("#AdicionarItem").attr("disabled","disabled");
                $("#item_sub_form").remove();

            } else {
                
                $("#AdicionarItem").removeAttr("disabled"); 

            }
         });


    });

    $("#AdicionarItem").click(function(){

      var json = 'http://172.16.177.73/smv/style/json/adicionarItemOS.php?id_item='+$("#item_id_servico").val()+'&id_ordemservico='+$("#id_ordemservico").val()+'&quantidade='+$("#item_quantidade").val()+'&id_fornecedorprestador='+$("#item_id_fornecedorprestador").val()+'';

      $.ajax({        

        type: "POST",
        dataType: "json",
        url: json,
     });

      location.reload(true);

    });



    $('.input_Item_Vazio').focusout(function(){

        if($(this).val() == '') {

            $('#error').remove();
            $(this).css('border','1px solid red');
            $(this).css('background','rgba(100,0,0,0.1)');
            var ph = $(this).attr('placeholder');  

            $('.errorModalItem').addClass("alert alert-danger")
            .append('<p id="error">Você deixou o campo: '+ ph +' em branco.</p>');

        } else {

            $(this).css('border','1px solid green');
            $(this).css('background','rgba(0,100,0,0.1)');
            $('.errorModalItem').removeClass('alert alert-danger');
            $('#error').remove();

        }

    });

});