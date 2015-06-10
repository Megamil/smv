	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Af_Servicos', '<button class="btn btn-info pull-center"> Criar nova Autorização de Serviços </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span2">Número Autorização</th>
				<th class="span3">Fornecedor</th>
				<th class="span2">Prefixo</th>
				<th class="span2">Data</th>
				<th class="span2">Valor Peças</th>
				<th class="span2">Valor Serviços</th>
				<th class="span2">Valor Empenhos</th>
				<th class="span2">Valor Total</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack as $id_afservicos) {

						echo "<tr>";
							echo "<td align='center'>$id_afservicos->id_afservicos</td>";
							echo "<td align='center'>$id_afservicos->nome</td>";
							echo "<td align='center'>$id_afservicos->prefixo</td>";

							$dataFormatada = date("d-m-Y", strtotime($id_afservicos->dataafservicos));
							echo '<td align="center">'.$dataFormatada.'</td>';
	
							echo "<td align='center'>$id_afservicos->valoritens</td>";
							echo "<td align='center'>$id_afservicos->valorservicos</td>";
							echo "<td align='center'>$id_afservicos->valorempenho</td>";

							$vtotal = $id_afservicos->valoritens + $id_afservicos->valorservicos;
							echo "<td align='center'>".$vtotal."</td>";

							echo '<td align="center">'.anchor('edicoes/editar_Af_Servicos/'.$id_afservicos->id_afservicos.'','Editar').'</td>';
						echo "</tr>";

					}
				?>
		</tbody>
	</table>