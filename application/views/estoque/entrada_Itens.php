	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Entrada_Itens', '<button class="btn btn-info pull-center"> Criar nova Entrada de Itens </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">Código Interno</th>
				<th class="span2">Descrição</th>
				<th class="span2">Nota Fiscal</th>
				<th class="span2">Data da Entrada</th>
				<th class="span2">Quantidade</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['entradaitens'] as $entradaitens) {
						if($entradaitens->estorno == 't') {
							echo '<tr class="success">';
							$texto = '<td>'.anchor('edicoes/editar_Entrada_Itens/'.$entradaitens->id_entradaitens.'','Ver Estorno').'</td>';
						} else {
							echo '<tr class="warning">';
							$texto = '<td>'.anchor('edicoes/editar_Entrada_Itens/'.$entradaitens->id_entradaitens.'','Editar').'</td>';
						}

						    echo "<td>$entradaitens->codigointerno</td>";
						    
						    foreach($pack['itens'] as $itens){

							 	if($itens->id_itens == $entradaitens->codigointerno) {
							 		echo "<td>$itens->descricao</td>"; 
							 		break;

							 	}

						    }
							echo "<td>$entradaitens->numnotafiscal</td>";
							//Formata a data para Dia-Mês-Ano, visto que de padrão a data vem em norte americano.
							$dataFormatada = date("d-m-Y", strtotime($entradaitens->dataentrada));
							echo '<td>'.$dataFormatada.'</td>';
							echo "<td>$entradaitens->quantidade</td>";
							echo $texto;
							echo "</tr>";
					}
				?>
		</tbody>
	</table>