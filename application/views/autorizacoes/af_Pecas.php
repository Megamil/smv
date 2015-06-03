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

					foreach ($pack as $afpecas) {

						$contratoata = substr($afpecas->contratoata, 0,4);
						$contratoata = $contratoata.'/'.substr($afpecas->contratoata, 4,4);
						$contratoata = $contratoata.'-'.substr($afpecas->contratoata, 8);

						echo "<tr>";
							echo "<td align='center'>$afpecas->ordemservico</td>";
							echo "<td align='center'>$afpecas->id_afpecas</td>";
							echo "<td align='center'>$contratoata</td>";
							echo "<td align='center'>$afpecas->prazoentrega</td>";
							echo "<td align='center'>$afpecas->prefixo</td>";
							echo '<td align="center">'.anchor('edicoes/editar_Af_Pecas/'.$afpecas->id_afpecas.'','Editar').'</td>';
						echo "</tr>";

					}

				?>
		</tbody>
	</table>