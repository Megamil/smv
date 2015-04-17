<?php
//Usado pelo JSon.sj Para a tela de editar_af_Servicos e adicionar item;
	header('Content-Type: application/json; charset=utf-8');
	header("access-control-allow-origin: *");
	$conn = @pg_connect("host=172.16.177.73 port=5432 dbname=db_smv user=postgres password=acessodttics");
	if(!$conn) {
		
		echo '[{"erro": "Não foi possível conectar ao banco"}]';
	
	} else {
		//SQL de BUSCA insert
		$sql 	= "insert into tbl_afservicos_x_servicos (id_servicos, quantidade,id_afservicos) values (".$_GET["id_servicos"].",".$_GET["quantidade"].",
			".$_GET["id_afservicos"].");"; 
		$result = pg_query($sql); //Executar a SQL
	}
	pg_close($conn); //Encerrar Conexão adicionarServicoAfs.php
?>