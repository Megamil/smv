<?php
//Usado pelo JSon.sj Para a tela de Nova Solicitação Ordem de Serviço e a Edição da Solicitação;
	header('Content-Type: application/json; charset=utf-8');
	header("access-control-allow-origin: *");
	$conn = @pg_connect("host=172.16.177.73 port=5432 dbname=db_smv user=postgres password=acessodttics");
	if(!$conn) {
		
		echo '[{"erro": "Não foi possível conectar ao banco"}]';
	
	} else {
		//SQL de BUSCA LISTAGEM
		$sql 	= "insert into tbl_objeto (objetotitulo,objetotexto) values ('".$_GET["objetotitulo"]."','".$_GET["objetotexto"]."');"; 
		$result = pg_query($sql); //Executar a SQL
	}
	pg_close($conn); //Encerrar Conexão
?>