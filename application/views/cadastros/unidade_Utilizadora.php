	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Unidade_Utilizadora', '<button class="btn btn-info pull-center"> Criar nova Unidade Utilizadora </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">CNPJ</th>
				<th class="span2">Departamento</th>
				<th class="span2">Divisão</th>
				<th class="span2">Seção</th>
				<th class="span2">Setor</th>
				<th class="span2">Telefone</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['unidadeutilizadora'] as $unidadeutilizadora) {

						echo "<tr>";
						echo "<td>$unidadeutilizadora->id_unidadeutilizadora</td>";
						echo "<td>$unidadeutilizadora->cnpj</td>";

						foreach ($pack['depto'] as $depto) {

							if($unidadeutilizadora->id_depto == $depto->id_depto) {
								echo "<td>$depto->depto</td>";
								break;
							}
						}

						foreach ($pack['divisao'] as $divisao) {

							if($unidadeutilizadora->id_divisao == $divisao->id_divisao) {
								echo "<td>$divisao->divisao</td>";
								break;
							}
						}

						foreach ($pack['secao'] as $secao) {

							if($unidadeutilizadora->id_secao == $secao->id_secao) {
								echo "<td>$secao->secao</td>";
								break;
							}
						}

						foreach ($pack['setor'] as $setor) {

							if($unidadeutilizadora->id_setor == $setor->id_setor) {
								echo "<td>$setor->setor</td>";
								break;
							}
						}
						echo "<td>$unidadeutilizadora->telefone</td>";
						echo '<td>'.anchor('edicoes/editar_Unidade_Utilizadora/'.$unidadeutilizadora->id_unidadeutilizadora.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>