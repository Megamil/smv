	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Af_Pecas', '<button class="btn btn-info pull-center"> Criar nova Autorização de Peças </button>')?>
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

					foreach ($pack['afpecas'] as $afpecas) {
						echo "<tr>";
						    foreach($pack['ordemservico'] as $ordemservico){

							 	if($ordemservico->id_ordemservico == $afpecas->id_ordemservico) {
							 		echo "<td>$ordemservico->id_ordemservico</td>"; 
							 		break;

							 	}
							}

   							echo "<td>$afpecas->id_afpecas</td>";

							foreach($pack['contratoata'] as $contratoata){

							 	if($contratoata->id_contratoata == $afpecas->id_contratoata) {
							 		echo "<td>$contratoata->numerocontratoata</td>"; 
							 		break;

							 	}
							}

							foreach($pack['veiculoprefixo'] as $veiculoprefixo){

							 	if($veiculoprefixo->id_veiculo == $afpecas->id_veiculoprefixo) {
							 		echo "<td>$veiculoprefixo->prefixo</td>"; 
							 		break;

							 	}
							}

						    foreach($pack['contratoata'] as $contratoata){

							 	if($contratoata->id_contratoata == $afpecas->id_contratoata) {
							 		echo "<td>$contratoata->prazoentrega</td>"; 
							 		break;

							 	}
							}

							echo '<td>'.anchor('edicoes/editar_Af_Pecas/'.$afpecas->id_afpecas.'','Editar').'</td>';
							echo "</tr>";
					}
				?>
		</tbody>
	</table>