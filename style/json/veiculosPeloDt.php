<?php
//Usado pelo JSon.sj Para a tela de Nova Solicitação Ordem de Serviço e a Edição da Solicitação;
	header('Content-Type: application/json; charset=utf-8');
	header("access-control-allow-origin: *");
	$conn = @pg_connect("host=172.16.177.73 port=5432 dbname=db_smv user=postgres password=acessodttics");
	if(!$conn) {
		
		echo '[{"erro": "Não foi possível conectar ao banco"}]';
	
	} else {
		//SQL de BUSCA LISTAGEM
		$sql 	= "select * from tbl_veiculo where id_veiculo ='".$_GET["dt"]."';"; 
		$result = pg_query($sql); //Executar a SQL
		$quantidade = pg_num_rows($result);
		if($quantidade == 0) {
			echo '{"numResultados":0,"resultados":[{"Informação": "Zero Registros"}]}';
		} else {
			while ($row = pg_fetch_assoc($result)) {
				
				//Converte e formata para um arquivo JSon COM UTF-8.
				echo json_encode($row, JSON_UNESCAPED_UNICODE); 
			}
		}
	}
	pg_close($conn); //Encerrar Conexão
?>