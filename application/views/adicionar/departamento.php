	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Departamento', '<button class="btn btn-info pull-center"> Criar novo Departamento </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span3">Código Depto.</th>
				<th class="span2">Departamento</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack as $departamento) {
						 echo "<tr>";
						     echo "<td>$departamento->id_depto</td>";
						     echo "<td>$departamento->coddepto</td>";
						     echo "<td>$departamento->depto</td>";
						     echo '<td>'.anchor('edicoes/editar_Departamento/'.$departamento->id_depto.'','Editar').'</td>';
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>