<?php
//Usado pelo JSon.sj Para a tela de editar_af_pecas e adicionar empenho;
	header('Content-Type: application/json; charset=utf-8');
	header("access-control-allow-origin: *");
	$conn = @pg_connect("host=172.16.177.73 port=5432 dbname=db_smv user=postgres password=acessodttics");
	if(!$conn) {
		
		echo '[{"erro": "Não foi possível conectar ao banco"}]';
	
	} else {
		//SQL de BUSCA LISTAGEM
		$sql 	= "insert into tbl_afservicos_x_empenho (id_afservicos,id_empenho) values (".$_GET["id_afservicos"].",".$_GET["id_empenho"].");";  
		$result = pg_query($sql); //Executar a SQL
	}
	pg_close($conn); //Encerrar Conexão
?>