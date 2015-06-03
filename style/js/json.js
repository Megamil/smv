//Usado para trazer dados dos itens
$(document).ready(function(){
      
      //Confirma que o usuário só digitará um valor no campo de saída quando selecionar um item.
      $('#saida').attr("disabled","disabled");

         $.ajax({
              url : "/smv/style/json/saidaItens.php?id="+$('#codigointerno').val(), /* URL que será chamada */ 
              dataType: 'json', /* Tipo de transmissão */
              success: function(json){
                 $('.valores').remove();
                 $('#preco').val(json.precobruto);
                 $('#desconto').val(json.desconto);
                 $('#maximo').val(json.estoquedisponivel);
                 
                 if($('#preco').val() != '') {

                    $('#resultado').val($('#preco').val() - (($('#desconto').val() * $('#preco').val())/100));

                  } else {

                    $('#resultado').val('');

                  }
                }

           });   

   $('#codigointerno').change(function(){

      //Confirma que o usuário só digitará um valor no campo de saída quando selecionar um item.
      if($('#codigointerno').val() == 'Selecione...') {
        $('#saida').attr("disabled","disabled");
      } else {
        $('#saida').removeAttr("disabled");
      }

   });

   $('#codigointerno').change(function(){

    $('#saida').val(''); //Apaga o valor do campo para impedir que um valor anterior seja usado por outro item.

     /* Configura a requisição AJAX */
       $.ajax({
            url : "/smv/style/json/saidaItens.php?id="+$('#codigointerno').val(), /* URL que será chamada */ 
            dataType: 'json', /* Tipo de transmissão */
            success: function(json){
              $('.valores').remove();
               $('#preco').val(json.precobruto);
               $('#desconto').val(json.desconto);
               $('#maximo').val(json.estoquedisponivel);

               if($('#preco').val() != '') {

                  $('#resultado').val($('#preco').val() - (($('#desconto').val() * $('#preco').val())/100));

                } else {

                  $('#resultado').val('');

                }
              }

         });   

    });

});

//Usado para trazer dados do objeto
$(document).ready(function(){

       $.ajax({
            url : "/smv/style/json/objetos.php?id="+$('#objeto').val(), /* URL que será chamada */ 
            dataType: 'json', /* Tipo de transmissão */
            success: function(json){
               $('#objetoTexto').val(json.objetotexto);
              }

         });  


   /* Executa a requisição quando o campo DT perder o foco */
   $('#objeto').change(function(){
       /* Configura a requisição AJAX */

       $.ajax({
            url : "/smv/style/json/objetos.php?id="+$('#objeto').val(), /* URL que será chamada */ 
            dataType: 'json', /* Tipo de transmissão */
            success: function(json){
              $('#objetoTexto').val(json.objetotexto);
              }

         });   

   return false;    
   
   })

});

//Usado para trazer dados do objeto atravez do Contrato/Ata
$(document).ready(function(){



       $.ajax({
            url : "/smv/style/json/objetosDoContrato.php?id="+$('#contrato').val(), /* URL que será chamada */ 
            dataType: 'json', /* Tipo de transmissão */
            success: function(json){
               $('#objetoTexto').val(json.objetotexto);
              }

         });  


   /* Executa a requisição quando o campo DT perder o foco */
   $('#contrato').change(function(){
       /* Configura a requisição AJAX */

       $.ajax({
            url : "/smv/style/json/objetosDoContrato.php?id="+$('#contrato').val(), /* URL que será chamada */ 
            dataType: 'json', /* Tipo de transmissão */
            success: function(json){
              $('#objetoTexto').val(json.objetotexto);
              }

         });   

   return false;    
   
   })

});

//Usado para trazer dados de veículos
$(document).ready(function(){

       $.ajax({
            url : "/smv/style/json/veiculosPeloDt.php?dt="+$('#dt').val(), /* URL que será chamada */ 
            dataType: 'json', /* Tipo de transmissão */
            success: function(json){
                    $('#modelo').val(json.modelo);
                    $('#marca').val(json.marca);
                    $('#tipo').val(json.tipo);
                    $('#placa').val(json.placa);
                    $('#km').focus();
            }

         });  


	 /* Executa a requisição quando o campo DT perder o foco */
   $('#dt').change(function(){
       /* Configura a requisição AJAX */

       $.ajax({
            url : "/smv/style/json/veiculosPeloDt.php?dt="+$('#dt').val(), /* URL que será chamada */ 
            dataType: 'json', /* Tipo de transmissão */
            success: function(json){
                    $('#modelo').val(json.modelo);
                    $('#marca').val(json.marca);
                    $('#tipo').val(json.tipo);
                    $('#placa').val(json.placa);
                    $('#km').focus();
            }

         });   

   return false;    
   
   })

    //Usado na tela de af peças quando o contrato ata é carregado ou alterado.
      $.ajax({
        url : "/smv/style/json/dadosAf.php?id="+$('#id_contratoata').val(), /* URL que será chamada */ 
        dataType: 'json', /* Tipo de transmissão */
        success: function(json){
           $('#iniciovigencia').val(json.dtinivigencia);
           $('#fimvigencia').val(json.dtfimvigencia);
           $('#prazoentrega').val(json.prazoentrega);
           $('#prazopagto').val(json.prazopagto);
           $('#paempenho').val(json.numprocadmempenho);
           $('#paregprecos').val(json.numprocregpreco);
           $('#objeto').val(json.objeto);
          }

     });

     $('#id_contratoata').change(function(){

        //Usado na tela de af peças quando o contrato ata é carregado ou alterado.
        $.ajax({
          url : "/smv/style/json/dadosAf.php?id="+$('#id_contratoata').val(), /* URL que será chamada */ 
          dataType: 'json', /* Tipo de transmissão */
          success: function(json){
             $('#iniciovigencia').val(json.dtinivigencia);
             $('#fimvigencia').val(json.dtfimvigencia);
             $('#prazoentrega').val(json.prazoentrega);
             $('#prazopagto').val(json.prazopagto);
             $('#paempenho').val(json.numprocadmempenho);
             $('#paregprecos').val(json.numprocregpreco);
             $('#objeto').val(json.objeto);
            }

       });

     }) ;

    //Usado na tela de af peças quando ordem de serviço é carregado ou alterado.
      $.ajax({
        url : "/smv/style/json/os.php?id="+$('#id_ordemservico').val(), /* URL que será chamada */ 
        dataType: 'json', /* Tipo de transmissão */
        success: function(json){
           $('#id_veiculoprefixo').val(json.prefixo);
          }

     });

     $('#id_ordemservico').change(function(){

      //Usado na tela de af peças quando ordem de serviço é carregado ou alterado.
        $.ajax({
          url : "/smv/style/json/os.php?id="+$('#id_ordemservico').val(), /* URL que será chamada */ 
          dataType: 'json', /* Tipo de transmissão */
          success: function(json){
             $('#id_veiculoprefixo').val(json.prefixo);
            }

       });

     }) ;

     $("#validar_Enviar_Empenho").click(function(){

        if($("#empenho_id_empenho").val() != 'Selecione...') {

         var json = 'http://172.16.177.73/smv/style/json/adicionarEmpenhoAf.php?id_empenho='+$("#empenho_id_empenho").val()+'&id_afpecas='+$("#id_afpecas").val();

          $.ajax({        

            type: "POST",
            dataType: "json",
            url: json,

          });

          $("#empenho_id_empenho").css('border','1px solid green');
          $("#empenho_id_empenho").css('background','rgba(0,100,0,0.1)');
          $('.errorModalEmpenho').removeClass('alert alert-danger');
          $('#error').remove();

          location.reload(true);

        } else {

           $('#error').remove();
            $("#empenho_id_empenho").css('border','1px solid red');
            $("#empenho_id_empenho").css('background','rgba(100,0,0,0.1)');
            var ph = $("#empenho_id_empenho").attr('placeholder');  

            $('.errorModalEmpenho').addClass("alert alert-danger")
            .append('<p id="error">Você deixou o campo: '+ ph +' em branco.</p>');

        }

     });
// Usado em af_pecas
     $("#validar_Enviar_Item").click(function(){

      var erro = false;

        $(".vazio").each(function(){

          if($(this).val() != 'Selecione...' && $(this).val() != '') {

            $(this).css('border','1px solid green');
            $(this).css('background','rgba(0,100,0,0.1)');
            $('.errorModalItem').removeClass('alert alert-danger');
            $('#error').remove();

          } else {

            erro = true;

             $('#error').remove();
              $(this).css('border','1px solid red');
              $(this).css('background','rgba(100,0,0,0.1)');
              var ph = $(this).attr('placeholder');  

              $('.errorModalItem').addClass("alert alert-danger")
              .append('<p id="error">Você deixou o campo: '+ ph +' em branco.</p>');

          }

        });

        if(erro == false) {

          var json = 'http://172.16.177.73/smv/style/json/adicionarItemAf.php?id_afpecas='+$("#id_afpecas").val()+'&id_itens='+$("#item_id_servico").val()+'&quantidade='+$("#modal_quantidade").val();

          $.ajax({        

            type: "POST",
            dataType: "json",
            url: json,

          });

          location.reload(true);
          
        }

     });

// Usado em af_servicos

     $("#validar_Enviar_Empenhoas").click(function(){

        if($("#empenho_id_empenho").val() != 'Selecione...') {

         var json = 'http://172.16.177.73/smv/style/json/adicionarEmpenhoAfs.php?id_empenho='+$("#empenho_id_empenho").val()+'&id_afservicos='+$("#id_afservicos").val();

          $.ajax({        

            type: "POST",
            dataType: "json",
            url: json,

          });

          $("#empenho_id_empenho").css('border','1px solid green');
          $("#empenho_id_empenho").css('background','rgba(0,100,0,0.1)');
          $('.errorModalEmpenho').removeClass('alert alert-danger');
          $('#error').remove();

          location.reload(true);

        } else {

           $('#error').remove();
            $("#empenho_id_empenho").css('border','1px solid red');
            $("#empenho_id_empenho").css('background','rgba(100,0,0,0.1)');
            var ph = $("#empenho_id_empenho").attr('placeholder');  

            $('.errorModalEmpenho').addClass("alert alert-danger")
            .append('<p id="error">Você deixou o campo: '+ ph +' em branco.</p>');

        }

     });

     $("#validar_Enviar_Itemas").click(function(){

      var erro = false;

        $(".vazio").each(function(){

          if($(this).val() != 'Selecione...' && $(this).val() != '') {

            $(this).css('border','1px solid green');
            $(this).css('background','rgba(0,100,0,0.1)');
            $('.errorModalItem').removeClass('alert alert-danger');
            $('#error').remove();

          } else {

            erro = true;

             $('#error').remove();
              $(this).css('border','1px solid red');
              $(this).css('background','rgba(100,0,0,0.1)');
              var ph = $(this).attr('placeholder');  

              $('.errorModalItem').addClass("alert alert-danger")
              .append('<p id="error">Você deixou o campo: '+ ph +' em branco.</p>');

          }

        });

        if(erro == false) {

          var json = 'http://172.16.177.73/smv/style/json/adicionarItemAfs.php?id_afservicos='+$("#id_afservicos").val()+'&id_itens='+$("#item_id_servico").val()+'&quantidade='+$("#modal_quantidade").val();
          $.ajax({        

            type: "POST",
            dataType: "json",
            url: json,

          });

          location.reload(true);
          
        }

     });

$("#validar_Enviar_Servicoas").click(function(){

      var erro = false;

        $(".vazios").each(function(){

          if($(this).val() != 'Selecione...' && $(this).val() != '') {

            $(this).css('border','1px solid green');
            $(this).css('background','rgba(0,100,0,0.1)');
            $('.errorModalItem').removeClass('alert alert-danger');
            $('#error').remove();

          } else {

            erro = true;

             $('#error').remove();
              $(this).css('border','1px solid red');
              $(this).css('background','rgba(100,0,0,0.1)');
              var ph = $(this).attr('placeholder');  

              $('.errorModalItem').addClass("alert alert-danger")
              .append('<p id="error">Você deixou o campo: '+ ph +' em branco.</p>');

          }

        });

        if(erro == false) {

          var json = 'http://172.16.177.73/smv/style/json/adicionarServicoAfs.php?id_servicos='+$("#id_servicos").val()+'&quantidade='+$("#quantidade").val()+'&id_afservicos='+$("#id_afservicos").val();
          alert(json);
          $.ajax({        

            type: "POST",
            dataType: "json",
            url: json,

          });

          location.reload(true);
          
        }

     });
  
    //Adicionar novo Objeto, usado na tela (novo_Contrato_Ata).
    $("#novoObjeto").click(function(){

        if($("#nomeobjetotitulo").val() != '' && $("#nomeobjetotexto").val() != '') {

         var json = 'http://172.16.177.73/smv/style/json/adicionarObjeto.php?objetotitulo='+$("#nomeobjetotitulo").val()+'&objetotexto='+$("#nomeobjetotexto").val();

          $.ajax({        

            type: "POST",
            dataType: "json",
            url: json,

          });

          $('.errorModalObj').removeClass('alert alert-danger');
          $('#errorObj').remove();

          location.reload(true);

        } else {
          $('.errorModalObj').removeClass('alert alert-danger');
            $('#errorObj').remove();

            $('.errorModalObj').addClass("alert alert-danger")
            .append('<p id="errorObj">Preencha ambos os campos antes de enviar.</p>');

        }

     });
  
      $("#novoGrupo").click(function(){

        if($("#nomegrupoitens").val() != '') {

         var json = 'http://172.16.177.73/smv/style/json/adicionarGrupoItens.php?nomegrupoitens='+$("#nomegrupoitens").val();

          $.ajax({        

            type: "POST",
            dataType: "json",
            url: json,

          });

          $('.errorModalGrupo').removeClass('alert alert-danger');
          $('#errorGrupo').remove();

          location.reload(true);

        } else {
          $('.errorModalGrupo').removeClass('alert alert-danger');
            $('#errorGrupo').remove();

            $('.errorModalGrupo').addClass("alert alert-danger")
            .append('<p id="errorGrupo">Preencha o campo antes de enviar.</p>');

        }

     });

       $("#AdicionarDotacao").click(function(){

        if($("#nomedotacao").val() != '' && $("#segmento").val() != 'Selecione...') {

         var json = 'http://172.16.177.73/smv/style/json/adicionarDotacao.php?codigonumero='+$("#nomedotacao").val()+'&id_segmento='+$("#segmento").val()+'&idtipodotacao='+$("input[name='tipodotacao']:checked").val()+'&statusdotacao='+$("input[name='estadodotacao']:checked").val();
          $.ajax({        

            type: "POST",
            dataType: "json",
            url: json,

          });

          $('.errorModalDotacao').removeClass('alert alert-danger');
          $('#errorDotacao').remove();

          location.reload(true);

        } else {
          $('.errorModalDotacao').removeClass('alert alert-danger');
            $('#errorDotacao').remove();

            $('.errorModalDotacao').addClass("alert alert-danger")
            .append('<p id="errorDotacao">Preencha todos os campos antes de enviar.</p>');

        }

     });

      $(".salvar").click(function(){

        var referencia = $(this).attr('salvar');
        var diferenca = parseInt($("#diferenca"+referencia).val());

        var json = '';

        if(diferenca > 0) {

           json = 'http://172.16.177.73/smv/style/json/adicionarAjuste.php?tipo=1&codigointerno='+referencia+'&quantidade='+diferenca;
            $.ajax({        

              type: "POST",
              dataType: "json",
              url: json,

            });


            location.reload(true);

        } else {

            diferenca = (diferenca*(-1))
          
            json = 'http://172.16.177.73/smv/style/json/adicionarAjuste.php?tipo=2&codigointerno='+referencia+'&quantidade='+diferenca;
            $.ajax({        

              type: "POST",
              dataType: "json",
              url: json,

            });

            location.reload(true);

        }

     });


});