	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Veiculo', '<button class="btn btn-info pull-center"> Criar novo Veículo</button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Prefixo</th>
				<th class="span2">Placa</th>
				<th class="span2">Modelo</th>
				<th class="span2">Marca</th>
				<th class="span2">Unidade Serviço</th>
				<th class="span2">Chassis</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['veiculo'] as $veiculo) {

						echo "<tr>";
						echo "<td>$veiculo->id_veiculo</td>";
						echo "<td>$veiculo->prefixo</td>";
						echo "<td>$veiculo->placa</td>";
						echo "<td>$veiculo->modelo</td>";
						echo "<td>$veiculo->marca</td>";

						foreach($pack['unidadesaude'] as $unidadesaude){
							if($unidadesaude->id_unidadesaude == $veiculo->id_unidadeservicosaude){
								echo "<td>$unidadesaude->unidadesaude</td>";
								break;
							}
						}

						echo "<td>$veiculo->chassis</td>";						
						echo '<td>'.anchor('edicoes/editar_Veiculo/'.$veiculo->id_veiculo.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>