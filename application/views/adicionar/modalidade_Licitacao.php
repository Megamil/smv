	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Modalidade_Licitacao', '<button class="btn btn-info pull-center"> Criar nova Modalidade de Licitacao </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Modalidade de licitação</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack as $modalidade) {
						 echo "<tr>";
						     echo "<td>$modalidade->id_modalidadedelicitacao</td>";
						     echo "<td>$modalidade->modalidadedelicitacao</td>";
						     echo '<td>'.anchor('edicoes/editar_Modalidade/'.$modalidade->id_modalidadedelicitacao.'','Editar').'</td>';
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>