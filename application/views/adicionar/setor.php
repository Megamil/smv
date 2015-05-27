	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Setor', '<button class="btn btn-info pull-center"> Criar novo Setor </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Código Setor</th>
				<th class="span2">Setor</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['setor'] as $setor) {
						 echo "<tr>";
						     echo "<td>$setor->id_setor</td>";
						     echo "<td>$setor->codsetor</td>";
						     echo "<td>$setor->setor</td>";
						     echo '<td>'.anchor('edicoes/editar_Setor/'.$setor->id_setor.'','Editar').'</td>';
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>