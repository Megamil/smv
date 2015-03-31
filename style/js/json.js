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

});