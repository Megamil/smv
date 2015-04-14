	
	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
		<tr>
		 	<td align="center" colspan="6"><strong>RELATÓRIO DO SALDO DO ESTOQUE</strong></td>
		</tr>
			<tr>
				<th class="span2">Código Interno</th>
				<th class="span3">Descrição</th>
				<th class="span2">Unid</th>
				<th class="span2">Entradas</th>
				<th class="span2">Saídas</th>
				<th class="span2">Saldo</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['itens'] as $itens) {
						
						echo '<tr>';

						    echo "<td>$itens->id_itens</td>";
					 		echo "<td>$itens->descricao</td>"; 

						    foreach($pack['unidademedida'] as $unidademedida){
							 	if($itens->id_unidademedida == $unidademedida->id_unidademedida) {
							 		echo "<td>$unidademedida->unidademedida</td>"; 
							 		break;
							 	}
						    }

						    $ent = 0;
						    $sai = 0;

						    $existe = false; // Varíável para validação
						    foreach($pack['entradas'] as $entradas){
							 	if($itens->id_itens == $entradas->codigointerno) {
							 			$ent = $entradas->quantidade;
							 			$existe = true; //confirma que existe um valor
							 			echo '<td>'.$entradas->quantidade.'</td>';
							 			break;
							 			
							 	} else {
						 		
							 	}
							 	
							}

							if($existe == false) { // valida existencia de valor
								echo "<td></td>";
							}
						    

							$existe2 = false; // Varíável para validação
						    foreach($pack['saidas'] as $saidas){
							 	if($itens->id_itens == $saidas->codigointerno) {
							 			$sai = $saidas->quantidade;
							 			$existe2 = true; //confirma que existe um valor
							 			echo '<td>'.$saidas->quantidade.'</td>'; 
							 			break;
							 	} else {
							 		
							 	}
							}

							if($existe2 == false) { // valida existencia de valor
								echo "<td></td>";
							}
							
							echo '<td>'.($ent - $sai).'</td>';
							echo "</tr>";
					}
				?>
		</tbody>
	</table>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	MODIFICAR A ESTRUTURA DA DELA DESSE RELATÓRIO, O MESMO ESTÁ COMO A TELA BASE PARA A EDIÇÃO DAS ENTRADAS DE ITENS
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->