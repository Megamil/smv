	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Objeto', '<button class="btn btn-info pull-center"> Criar novo Objeto </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Objeto Título</th>
				<th class="span2">Objeto Texto</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['objeto'] as $objeto) {
						 echo "<tr>";
						     echo "<td>$objeto->id_objeto</td>";
						     echo "<td>$objeto->objetotitulo</td>";
						     echo "<td>$objeto->objetotexto</td>";
						     echo '<td>'.anchor('edicoes/editar_Objeto/'.$objeto->id_objeto.'','Editar').'</td>';
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>