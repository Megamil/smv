	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Empenho', '<button class="btn btn-info pull-center"> Criar novo Empenho </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">Número Empenho</th>
				<th class="span2">Valor Empenho</th>
				<th class="span2">Término Vigência</th>
				<th class="span2">P.A. Empenho</th>
				<th class="span2">Dotação</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['empenho'] as $empenho) {
						echo "<tr>";
						    echo "<td>$empenho->numeroempenho</td>";
   							echo "<td>R$ $empenho->valorempenho</td>";

							//Formata a data para Dia-Mês-Ano, visto que de padrão a data vem em norte americano.
							$dataFormatada = date("d-m-Y", strtotime($empenho->dtfimvigencia));
							echo '<td>'.$dataFormatada.'</td>';
							
							echo '<td><input class="processo" value="'.$empenho->numprocadmempenho.'" disabled></td>';

						    foreach($pack['dotacao'] as $dotacao){

							 	if($dotacao->id_dotacao == $empenho->id_dotacao) {
							 		echo "<td>$dotacao->codigonumero</td>"; 
							 		break;

							 	}

						    }

							echo '<td>'.anchor('edicoes/editar_Empenho/'.$empenho->id_empenho.'','Editar').'</td>';
							echo "</tr>";
					}
				?>
		</tbody>
	</table>