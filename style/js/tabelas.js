/*tabelas.js, criado com a finalidade de tornar padrão as formas como as tabelas são formatadas e as opções
disponíveis*/

     $(document).ready(function()

        {

          $('#tabela').dataTable(

          { /*Todas tabelas com esse ID receberá a formatação e os botões de impressão, exportação etc.*/
          "responsive": true,
          "dom": 'T<"clear">lfrtip',
        	"tableTools": { /*importar SWF para criação dos PDF / XLS*/
            	"sSwfPath": "/prototipoBeta/style/tabelas/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
            	"aButtons": [
            	{/*Botão de imprimir*/
                "sExtends": "print",
                "sButtonText": "Imprimir",
       		     "sInfo": "<h3>Pré-Visualização de impressão</h3><p>Para imprimir pressione CTRL + P, para volta a tela anterior pressione ESC.</p>",
           		 "sToolTip": "Pré-Visualização de impressão"
            	},
                {/*Botão de exportar*/
                    "sExtends":    "collection",
                    "sButtonText": "Exportar todos",
                    "aButtons":    [ "xls", "pdf" ],
                }
            ]
      		},
          	
          	"oLanguage": { /*Traduzindo os menus existentes*/
          		"sLengthMenu": "Exibindo _MENU_ registros por página.",
          		"sZeroRecords": "Nenhum registro encontrado.",
          		"sInfo": "Exibindo _START_ de _END_ do total de _TOTAL_ registro(s).",
          		"sInfoEmpty": "Não existem registros.",
          		"sInfoFiltered": "(Filtrado de um total de _MAX_ registros.)",
          		"sSearch": "Filtro:",
          		"oPaginate": {
          			"sFirst": "Primeiro",
          			"sPrevious": "Anterior",
          			"sNext": "Seguinte",
          			"sLast": "Último"
          		}
          	}
          }

          	);}

    );
