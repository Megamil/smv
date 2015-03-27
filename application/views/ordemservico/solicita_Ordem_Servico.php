	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Solicitacao_Ordem_Servico', '<button class="btn btn-info pull-center"> Criar nova Solicitação de Ordem de Serviço </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">Número da Solicitação</th>
				<th class="span2">Unidade Solicitante</th>
				<th class="span2">Veículo</th>
				<th class="span2">Status Solicitação</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['solicitaordemservico'] as $solicitaordemservico) {
						echo "<tr>";
						    echo "<td>$solicitaordemservico->id_solicitaordemservico</td>";

						    foreach ($pack['unidadesaude'] as $unidadesaude) {

								if($solicitaordemservico->id_unidadesolicitante == $unidadesaude->cnes) {
									echo "<td>$unidadesaude->unidadesaude</td>";
									break;
								}
							}

							foreach ($pack['veiculo'] as $veiculo) {

								if($solicitaordemservico->id_veiculo == $veiculo->id_veiculo) {
									echo "<td>$veiculo->prefixo</td>";
									break;
								}
							}

							foreach ($pack['estadoordemservico'] as $estadoordemservico) {

								if($solicitaordemservico->id_estadosolicitacao == $estadoordemservico->id_estadoordemservico) {
									echo "<td>$estadoordemservico->estadoordemservico</td>";
									break;
								}
							}
						echo '<td>'.anchor('edicoes/editar_Solicitacao_Ordem_Servico/'.$solicitaordemservico->id_solicitaordemservico.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>