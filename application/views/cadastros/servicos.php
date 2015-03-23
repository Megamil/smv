	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Servico', '<button class="btn btn-info pull-center"> Criar novo Serviço </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Serviço</th>
				<th class="span2">Unid.</th>
				<th class="span2">Fornecedor/Prestador</th>
				<th class="span2">Valor</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack as $servico) {
						 echo "<tr>";
						     echo "<td>$servico->id_servicos</td>";
						     echo "<td>$servico->servico</td>";
							 echo "<td>$servico->id_unidademedida</td>"; //substituir id pelo texto referente
							 echo "<td>$servico->id_fornecedorprestador</td>"; //substituir id pelo texto referente
							 echo "<td>$servico->valor</td>";
						     echo '<td>'.anchor('edicoes/editar_Servico/'.$servico->id_servico.'','Editar').'</td>';
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>