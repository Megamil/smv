	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Grupo_Itens', '<button class="btn btn-info pull-center"> Criar novo Grupo de Itens </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Grupo dos Itens</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack as $grupo_Itens) {
						 echo "<tr>";
						     echo "<td>$grupo_Itens->id_grupoitens</td>";
						     echo "<td>$grupo_Itens->grupoitens</td>";
						     echo '<td>'.anchor('edicoes/editar_Grupo_Itens/'.$grupo_Itens->id_grupoitens.'','Editar').'</td>';
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>