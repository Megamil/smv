	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Montadora', '<button class="btn btn-info pull-center"> Criar nova Montadora </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Montadora</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['montadora'] as $montadora) {
						 echo "<tr>";
						     echo "<td>$montadora->id_montadora</td>";
						     echo "<td>$montadora->montadora</td>";
						     echo '<td>'.anchor('edicoes/editar_Montadora/'.$montadora->id_montadora.'','Editar').'</td>';
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>