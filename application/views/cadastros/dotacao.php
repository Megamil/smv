	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Dotacao', '<button class="btn btn-info pull-center"> Criar nova Dotação </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Dotação</th>
				<th class="span2">Segmento</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['dotacao'] as $dotacao) {

						echo "<tr>";
						echo "<td>$dotacao->id_dotacao</td>";
						echo "<td>$dotacao->codigonumero</td>";

						foreach ($pack['segmento'] as $segmento) {

							if($dotacao->id_segmento == $segmento->id_segmento) {
								echo "<td>$segmento->segmento</td>";
								break;
							}
						}
						echo '<td>'.anchor('edicoes/editar_Dotacao/'.$dotacao->id_dotacao.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>