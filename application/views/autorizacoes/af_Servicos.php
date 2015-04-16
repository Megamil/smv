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

					foreach ($pack as $id_afservicos) {

						$contratoata = substr($id_afservicos->contratoata, 0,4);
						$contratoata = $contratoata.'/'.substr($id_afservicos->contratoata, 4,4);
						$contratoata = $contratoata.'-'.substr($id_afservicos->contratoata, 8);

						echo "<tr>";
							echo "<td>$id_afservicos->ordemservico</td>";
							echo "<td>$id_afservicos->id_afservicos</td>";
							echo "<td>$contratoata</td>";
							echo "<td>$id_afservicos->prazoentrega</td>";
							echo "<td>$id_afservicos->prefixo</td>";
							echo '<td>'.anchor('edicoes/editar_Af_Servicos/'.$id_afservicos->id_afservicos.'','Editar').'</td>';
						echo "</tr>";

					}
				?>
		</tbody>
	</table>