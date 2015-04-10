	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead>
		<tr>
		 	<td align="center" colspan="5"><strong>RELATÓRIO DAS ENTRADAS DOS ITENS NO ESTOQUE</strong></td>
		</tr> 
			<tr>
				<th class="span3">Código Interno</th>
				<th class="span2">Descrição</th>
				<th class="span2">Nota Fiscal</th>
				<th class="span2">Data da Entrada</th>
				<th class="span2">Quantidade</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['entradaitens'] as $entradaitens) {
						
						echo '<tr>';

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