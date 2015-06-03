	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Solicitacao_Ordem_Servico', '<button class="btn btn-info pull-center"> Criar nova Solicitação de Ordem de Serviço </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3" align="center">Número da Solicitação</th>
				<th class="span2">Prefixo</th>
				<th class="span2">Modelo</th>
				<th class="span2">Unidade Solicitante</th>
				<th class="span2">Data Solicitação</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['solicitaordemservico'] as $solicitaordemservico) {
						echo "<tr>";
						    echo "<td align='center'>$solicitaordemservico->id_solicitaordemservico</td>";

							foreach ($pack['veiculo'] as $veiculo) {

								if($solicitaordemservico->id_veiculo == $veiculo->id_veiculo) {
									echo "<td>$veiculo->prefixo</td>";
									break;
								}
							}

							foreach ($pack['veiculo'] as $veiculo) {

								if($solicitaordemservico->id_veiculo == $veiculo->id_veiculo) {
									echo "<td>$veiculo->modelo</td>";
									break;
								}
							}

							if ($solicitaordemservico->id_unidadesolicitante>100000){

								foreach ($pack['unidadesaude'] as $unidadesaude) {

									if($solicitaordemservico->id_unidadesolicitante == $unidadesaude->cnes) {
										echo "<td>$unidadesaude->unidadesaude</td>";
										break;
									}
								}

							}else{

								foreach($pack['unidadeutilizadora'] as $unidadeutilizadora){
									if ($unidadeutilizadora->id_unidadeutilizadora == $solicitaordemservico->id_unidadesolicitante){
										$departamento = $unidadeutilizadora->id_depto;
									}
								}

								foreach($pack['depto'] as $depto){
									if($depto->id_depto == $departamento){
										echo "<td>$depto->depto</td>";
									}
								}
							
							}

							$dataFormatada = date("d-m-Y", strtotime($solicitaordemservico->datasolicitacao));
							echo '<td>'.$dataFormatada.'</td>';


						echo '<td>'.anchor('edicoes/editar_Solicitacao_Ordem_Servico/'.$solicitaordemservico->id_solicitaordemservico.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>