	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Ordem_Servico', '<button class="btn btn-info pull-center"> Criar nova Ordem de Serviço </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">Número da Ordem</th>
				<th class="span2">Unidade Cliente</th>
				<th class="span2">Prefixo</th>
				<th class="span2">Data de Entrada</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php
					foreach ($pack['ordemservico'] as $ordemservico) {
						echo "<tr>";
						    echo "<td>$ordemservico->id_ordemservico</td>";
						    echo "<td>$ordemservico->id_unidadecliente</td>";
						    echo "<td>$ordemservico->prefixo</td>";
							echo "<td>$ordemservico->dataentrada</td>";
							echo '<td>'.anchor('edicoes/editar_Ordem_Servico/'.$ordemservico->id_ordemservico.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>