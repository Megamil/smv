<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead>
		<tr>
		 	<td align="center" colspan="5"><strong>RELATÓRIO DAS ORDENS DE SERVIÇO</strong></td>
		</tr>  
			<tr>
				<th class="span3">Número da Solicitação</th>
				<th class="span3">Número da Ordem</th>
				<th class="span2">Unidade Cliente</th>
				<th class="span2">Prefixo</th>
				<th class="span2">Data de Entrada</th>
			</tr>
		</thead>

		<tbody>
				<?php
					foreach ($pack['ordemservico'] as $ordemservico) {
						echo "<tr>";
							echo "<td>$ordemservico->id_solicitacao</td>";
						    echo "<td>$ordemservico->id_ordemservico</td>";
						    
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
						    	
					    		foreach ($pack['prefixo'] as $prefixo) {
					    			if($prefixo->id_solicitaordemservico == $ordemservico->id_solicitacao){
					    				echo "<td>$prefixo->prefixo</td>";
					    				break;
					    			}
					    		}
						    
							//Formata a data para Dia-Mês-Ano, visto que de padrão a data vem em norte americano.
							$dataFormatada = date("d-m-Y", strtotime($ordemservico->dataentrada));
							echo '<td>'.$dataFormatada.'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>