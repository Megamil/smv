	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Af_Servicos', '<button class="btn btn-info pull-center"> Criar nova Autorização de Serviços </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span2">Ordem de Serviço</th>
				<th class="span3">Número Autorização</th>
				<th class="span2">Contrato / Ata</th>
				<th class="span2">Veículo Prefixo</th>
				<th class="span2">Prazo de Entrega</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['afservicos'] as $afservicos) {
						echo "<tr>";
						    foreach($pack['ordemservico'] as $ordemservico){

							 	if($ordemservico->id_ordemservico == $afservicos->id_ordemservico) {
							 		echo "<td>$ordemservico->id_ordemservico</td>"; 
							 		break;

							 	}
							}

   							echo "<td>$afservicos->id_afservicos</td>";

							foreach($pack['contratoata'] as $contratoata){

							 	if($contratoata->id_contratoata == $afservicos->id_contratoata) {
							 		echo "<td>$contratoata->numerocontratoata</td>"; 
							 		break;

							 	}
							}

							foreach($pack['veiculoprefixo'] as $veiculoprefixo){

							 	if($veiculoprefixo->id_veiculo == $afservicos->id_veiculoprefixo) {
							 		echo "<td>$veiculoprefixo->prefixo</td>"; 
							 		break;

							 	}
							}

						    foreach($pack['contratoata'] as $contratoata){

							 	if($contratoata->id_contratoata == $afservicos->id_contratoata) {
							 		echo "<td>$contratoata->prazoentrega</td>"; 
							 		break;

							 	}
							}

							echo '<td>'.anchor('edicoes/editar_Af_Servicos/'.$afservicos->id_afservicos.'','Editar').'</td>';
							echo "</tr>";
					}
				?>
		</tbody>
	</table>