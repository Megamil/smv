<?php
//Usado pelo JSon.sj Para a tela de editar_af_pecas e adicionar empenho;
	header('Content-Type: application/json; charset=utf-8');
	header("access-control-allow-origin: *");
	$conn = @pg_connect("host=172.16.177.73 port=5432 dbname=db_smv user=postgres password=acessodttics");
	if(!$conn) {
		
		echo '[{"erro": "Não foi possível conectar ao banco"}]';
	
	} else {
		$hoje = date('Y/m/d');
		//SQL de BUSCA LISTAGEM
		if($_GET["tipo"] == 1){ //caso seja para somar

		$sql 	= "insert into tbl_entradaitens (codigointerno,quantidade,dataentrada) values (".$_GET["codigointerno"].",".$_GET["quantidade"].",'".$hoje."');"; 
		$update = 'update tbl_itens set estoquedisponivel = (estoquedisponivel +'.$_GET["quantidade"].') where id_itens = '.$_GET["codigointerno"].';';
		
		} else { //caso seja para subtrair

		$sql 	= "insert into tbl_saidaitens (codigointerno,quantidade,datasaida) values (".$_GET["codigointerno"].",".$_GET["quantidade"].",'".$hoje."');";
		$update = 'update tbl_itens set estoquedisponivel = (estoquedisponivel -'.$_GET["quantidade"].') where id_itens = '.$_GET["codigointerno"].';';    
		
		}

		pg_query($sql); //Executar a SQL
		pg_query($update); //Executar a SQL

	}
	pg_close($conn); //Encerrar Conexão
?>