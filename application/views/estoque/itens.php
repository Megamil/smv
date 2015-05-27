	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Item', '<button class="btn btn-info pull-center"> Criar novo Item </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span2">Código Interno</th>
				<th class="span2">Código Montadora</th>
				<th class="span2">Descrição</th>
				<th class="span2">Unidade de Medida</th>
				<th class="span2">Status</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['itens'] as $itens) {
						echo "<tr>";
						    echo "<td align='center'>$itens->id_itens</td>";
						    echo "<td align='center'>$itens->codigomontadora</td>";
							echo "<td>$itens->descricao</td>";

							foreach ($pack['unidademedida'] as $unidademedida) {
							 	
							 	if($unidademedida->id_unidademedida == $itens->id_unidademedida) {
							 		echo "<td>$unidademedida->unidademedida</td>"; 
							 		break;
							 	}

							 }

							foreach ($pack['estadoitem'] as $estadoitem) {

								if($itens->id_estadoitem == '') {

									echo "<td>-----</td>"; 
									break;

								} else if($estadoitem->id_estadoitem == $itens->id_estadoitem) {
							 		echo "<td>$estadoitem->estadoitem</td>"; 
							 		break;
							 	}


							 }
							
							echo '<td>'.anchor('edicoes/editar_Item/'.$itens->id_itens.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>