	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Secao', '<button class="btn btn-info pull-center"> Criar nova Seção </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Departamento</th>
				<th class="span2">Divisão</th>
				<th class="span2">Código Seção</th>
				<th class="span2">Seção</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['secao'] as $secao) {
						 echo "<tr>";
						 	echo "<td>$secao->id_secao</td>";
							echo "<td>$secao->coddepto</td>";
							echo "<td>$secao->coddivisao</td>";
						    echo "<td>$secao->codsecao</td>";
						    echo "<td>$secao->secao</td>";
						    echo '<td>'.anchor('edicoes/editar_Secao/'.$secao->id_secao.'','Editar').'</td>';
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>