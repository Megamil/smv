	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Empenho', '<button class="btn btn-info pull-center"> Criar novo Empenho </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">Número Empenho</th>
				<th class="span2">Valor Empenho</th>
				<th class="span2">Fornecedor</th>
				<th class="span2">Segmento</th>
				<th class="span2">Objeto - Título</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['empenho'] as $empenho) {
						echo "<tr>";
						    echo "<td align='center'>$empenho->numeroempenho</td>";
   							echo "<td>R$ ".round($empenho->valorempenho,2)."</td>";
   							echo "<td>$empenho->nome</td>";
   							echo "<td>$empenho->segmento</td>";
   							echo "<td>$empenho->objetotitulo</td>";

							echo '<td align="center">'.anchor('edicoes/editar_Empenho/'.$empenho->id_empenho.'','Editar').'</td>';
							echo "</tr>";
					}
				?>
		</tbody>
	</table>