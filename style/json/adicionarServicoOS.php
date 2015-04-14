<?php
//Usado pelo JSon.sj Para a tela de Nova Solicitação Ordem de Serviço e a Edição da Solicitação;
	header('Content-Type: application/json; charset=utf-8');
	header("access-control-allow-origin: *");
	$conn = @pg_connect("host=172.16.177.73 port=5432 dbname=db_smv user=postgres password=acessodttics");
	if(!$conn) {
		
		echo '[{"erro": "Não foi possível conectar ao banco"}]';
	
	} else {
		//SQL de BUSCA LISTAGEM
		if($_GET["servico_id_fornecedorprestador"] == 0) {

		
			$sql 	= "insert into tbl_ordemservico_x_servico (id_servico,id_ordemservico,quantidade,id_colaborador,id_unidademedida) values 
(".$_GET["servico_id_servico"].",".$_GET["servico_id_ordemservico"].",".$_GET["servico_quantidade"].",".$_GET["servico_id_colaborador"].",".$_GET["servico_id_unidademedida"].");"; 


		} else {


			$sql 	= "insert into tbl_ordemservico_x_servico (id_servico,id_ordemservico,quantidade,id_fornecedorprestador,id_unidademedida) values 
(".$_GET["servico_id_servico"].",".$_GET["servico_id_ordemservico"].",".$_GET["servico_quantidade"].",".$_GET["servico_id_fornecedorprestador"].",".$_GET["servico_id_unidademedida"].");"; 


		}
		
		$result = pg_query($sql); //Executar a SQL
	}
	pg_close($conn); //Encerrar Conexão
?>