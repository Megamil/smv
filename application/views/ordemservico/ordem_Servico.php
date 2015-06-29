	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">Nº O.S.</th>
				<th class="span3">Prefixo</th>
				<th class="span3">Modelo</th>
				<th class="span2">Unidade</th>
				<th class="span2">Prestador</th>
				<th class="span2">Data de Entrada</th>
				<th class="span2">Data de Saída</th>
				<th class="span2">Valor Peças</th>
				<th class="span2">Valor Serviços</th>
				<th class="span2">Valor Total</th>
				<th class="span2">Defeito</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php
					foreach ($pack['ordemservico'] as $ordemservico) {
						echo "<tr>";
						    echo "<td align='center'>$ordemservico->id_ordemservico</td>";
							
							foreach ($pack['solicitaordemservico'] as $solicitacao) {
								if($solicitacao->id_solicitaordemservico == $ordemservico->id_solicitacao){
									$modelocarro = $solicitacao->id_veiculo;
								}
							}
						    
							foreach($pack['veiculo'] as $veiculo){
								if ($veiculo->id_veiculo == $modelocarro){
									echo "<td>$veiculo->prefixo</td>";
									echo "<td>$veiculo->modelo</td>";		
								}

							}

						    	foreach ($pack['unidadesaude'] as $unidadesaude) {
						    		if($ordemservico->id_unidadecliente == $unidadesaude->cnes){
						    			echo "<td>$unidadesaude->unidadesaude</td>";
						    			break;
						    		} 
						    	}

				    			foreach ($pack['unidadeutilizadora'] as $unidadeutilizadora) {
						    		if($ordemservico->id_unidadecliente == $unidadeutilizadora->id_unidadeutilizadora){

									if(count($unidadeutilizadora->depto) > 0) {$departamento = 'Depto: '.$unidadeutilizadora->depto.' / ';} else {$departamento = '';}
									if(count($unidadeutilizadora->divisao) > 0) {$divisao = 'Divisão: '.$unidadeutilizadora->divisao.' / ';} else {$divisao = '';}
									if(count($unidadeutilizadora->secao) > 0) {$secao = 'Seção: '.$unidadeutilizadora->secao.' / ';} else {$secao = '';}
									if(count($unidadeutilizadora->setor) > 0) {$setor = 'Setor: '.$unidadeutilizadora->setor;} else {$setor = '';}


									$detalhes = "<td title=\"".$departamento." ".$divisao." ".$secao." ".$setor."\">";

									if($setor != '') {
										echo $detalhes.' '.$departamento.' '.$setor.'</td>';
									} else if ($secao != '') {
										echo $detalhes.''.$departamento.' '.$secao.'</td>';
									} else if ($divisao != '') {
										echo $detalhes.''.$departamento.' '.$divisao.'</td>';
									} else {
										echo $detalhes.''.$departamento.'</td>';
									}

				    				break;
						    		}
						    	}
							
							foreach($pack['fornecedorprestador'] as $prestador){
								if($prestador->id_fornecedorprestador == $ordemservico->id_fornecedorprestador){
									echo "<td>$prestador->nome</td>";
									break;
								}
							}

							//Formata a data para Dia-Mês-Ano, visto que de padrão a data vem em norte americano.
							$dataFormatada = date("d-m-Y", strtotime($ordemservico->dataentrada));
							echo '<td>'.$dataFormatada.'</td>';

							$dataFormatada = date("d-m-Y", strtotime($ordemservico->datasaida));
							echo '<td>'.$dataFormatada.'</td>';

							echo "<td>".round($ordemservico->valortotalitem,2)."</td>";
							echo "<td>".round($ordemservico->valortotalservico,2)."</td>";
							echo "<td>".round($ordemservico->total,2)."</td>";

							foreach($pack['solicitaordemservico'] as $solicitaordemservico){
								if($solicitaordemservico->id_solicitaordemservico == $ordemservico->id_solicitacao){
									echo "<td>$solicitaordemservico->defeitoapresentado</td>";
									break;
								}
							}


							echo '<td>'.anchor('edicoes/editar_Ordem_Servico/'.$ordemservico->id_ordemservico.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>