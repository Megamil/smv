	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Marca_Itens', '<button class="btn btn-info pull-center"> Criar nova Marca de Itens </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Marca dos Itens</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack as $marcaitens) {
						 echo "<tr>";
						     echo "<td>$marcaitens->id_marcaitens</td>";
						     echo "<td>$marcaitens->marcaitens</td>";
						     echo '<td>'.anchor('edicoes/editar_Marca_Itens/'.$marcaitens->id_marcaitens.'','Editar').'</td>';
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>