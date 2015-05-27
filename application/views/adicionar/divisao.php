	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Divisao', '<button class="btn btn-info pull-center"> Criar nova Divisão </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Código Divisão</th>
				<th class="span2">Divisão</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['divisao'] as $divisao) {
						 echo "<tr>";
						     echo "<td>$divisao->id_divisao</td>";
						     echo "<td>$divisao->coddivisao</td>";
						     echo "<td>$divisao->divisao</td>";
						     echo '<td>'.anchor('edicoes/editar_Divisao/'.$divisao->id_divisao.'','Editar').'</td>';
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>