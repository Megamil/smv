<?php
	require_once("/../../fpdf/fpdf.php");

	// Variaveis de Tamanho
	$margemesquerda = $me;// Margem Esquerda (mm)
	$margemdireita = $md; // Margem Direita (mm)
	$margemsuperior = $ms; // Margem Superior (mm)
	$larguraetiqueta = $le; // Largura da Etiqueta (mm)
	$alturaetiqueta = $ae; // Altura da Etiqueta (mm)
	$espacohorizontaletiqueta = $ee; // Espaço horizontal entre as Etiquetas (mm)

	$pdf=new FPDF('P','mm',$papel); // Cria um arquivo novo tipo carta, na vertical.
	$pdf->Open(); // inicia documento
	$pdf->AddPage(); // adiciona a primeira pagina
	$pdf->SetMargins($margemesquerda,$margemsuperior,$margemdireita); // Define as margens do documento
	$pdf->SetAuthor("SMV"); // Define o autor
	$pdf->SetFont($fonte,"",$tamanhofonte); // Define a fonte
	$pdf->SetDisplayMode('fullpage');//Adicinei uma fullpage

	$coluna = 0;
	$linha = 0;

	switch($papel){

		case 'A4': $largurapapel = 210;
				   $alturapapel = 297;
				   break;

		case 'A5': $largurapapel = 148;
				   $alturapapel = 210;
				   break;

		case 'Letter': $largurapapel = 216;
				   	   $alturapapel = 279;
				       break;
				       
		default: $largurapapel = 210;
		         $alturapapel = 297;
		         break;

	}

	$qtdcolunas = $largurapapel / ($larguraetiqueta + $espacohorizontaletiqueta);
	$qtdlinhas = $alturapapel / $alturaetiqueta;


	//MONTA A ARRAY PARA ETIQUETAS
	foreach($sql['itens'] as $dados) {

		foreach ($selecionados as $i) {

			if($i != '' && $dados->id_itens == $i) {

				for ($i=0; $i < $qtdcolunas; $i++) { 
						
					$codigo = $dados->id_itens;
					$descricao = utf8_decode($dados->descricao);
					$codigomontadora = $dados->codigomontadora;

					if($linha == $qtdlinhas) {
						$pdf->AddPage();
						$linha = 0;
					}

					if($coluna == $qtdcolunas) { // Se for a terceira coluna
						$coluna = 0; // $coluna volta para o valor inicial
						$linha = $linha +1; // $linha é igual ela mesma +1
					}

					if($linha == $qtdlinhas) { // Se for a última linha da página
						$pdf->AddPage(); // Adiciona uma nova página
						$linha = 0; // $linha volta ao seu valor inicial
					}

					$posicaoV = $linha*$alturaetiqueta;
					$posicaoH = $coluna*$larguraetiqueta;

					if($coluna == "0") { // Se a coluna for 0
						$somaH = $margemesquerda; // Soma Horizontal é apenas a margem da esquerda inicial
					} else { // Senão
						$somaH = $margemesquerda+$posicaoH; // Soma Horizontal é a margem inicial mais a posiçãoH
					}

					if($linha =="0") { // Se a linha for 0
						$somaV = $margemsuperior; // Soma Vertical é apenas a margem superior inicial
					} else { // Senão
						$somaV = $margemsuperior+$posicaoV; // Soma Vertical é a margem superior inicial mais a posiçãoV
					}

					$pdf->Text($somaH,$somaV,$codigo); // Imprime o codigo interno do item de acordo com as coordenadas
					$pdf->Text($somaH,$somaV+4,$descricao); // Imprime a descricao do item de acordo com as coordenadas
					$pdf->Text($somaH,$somaV+8,$codigomontadora); // Imprime o codigo da montadora de acordo com as coordenadas


					$coluna = $coluna+1;

				}

			}

		}

	}

	$pdf->Output();

?>