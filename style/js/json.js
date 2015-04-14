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

});