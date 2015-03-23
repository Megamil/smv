	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Dotacao', '<button class="btn btn-info pull-center"> Criar nova Dotação </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Dotacao</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack as $dotacao) {
						 echo "<tr>";
						     echo "<td>$dotacao->id_dotacao</td>";
						     echo "<td>$dotacao->codigonumero</td>";
						     echo '<td>'.anchor('edicoes/editar_Dotacao/'.$dotacao->id_dotacao.'','Editar').'</td>';
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>