	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Saida_Itens', '<button class="btn btn-info pull-center"> Criar nova Saída de Itens </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">Código Interno</th>
				<th class="span2">Descrição</th>
				<th class="span2">Ordem de Serviço</th>
				<th class="span2">Data da Saída</th>
				<th class="span2">Quantidade</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['saidaitens'] as $saidaitens) {
						echo "<tr>";
						    echo "<td>$saidaitens->codigointerno</td>";
						    
						    foreach($pack['itens'] as $itens){

							 	if($itens->id_itens == $saidaitens->codigointerno) {
							 		echo "<td>$itens->descricao</td>"; 
							 		break;

							 	}

						    }
							echo "<td>$saidaitens->ordemservico</td>";

							//Formata a data para Dia-Mês-Ano, visto que de padrão a data vem em norte americano.
							$dataFormatada = date("d-m-Y", strtotime($saidaitens->datasaida));
							echo '<td>'.$dataFormatada.'</td>';
							
							echo "<td>$saidaitens->quantidade</td>";
							echo '<td>'.anchor('edicoes/editar_Saida_Itens/'.$saidaitens->id_saidaitens.'','Editar').'</td>';
							echo "</tr>";
					}
				?>
		</tbody>
	</table>