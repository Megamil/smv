	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
		<tr>
		 	<td align="center" colspan="5"><strong>RELATÓRIO DAS SAÍDAS DOS ITENS NO ESTOQUE</strong></td>
		</tr> 
			<tr>
				<th class="span3">Código Interno</th>
				<th class="span2">Descrição</th>
				<th class="span2">Ordem de Serviço</th>
				<th class="span2">Data da Saída</th>
				<th class="span2">Quantidade</th>
   			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['saidaitens'] as $saidaitens) {

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
							echo "</tr>";
					}
				?>
		</tbody>
	</table>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	MODIFICAR A ESTRUTURA DA DELA DESSE RELATÓRIO, O MESMO ESTÁ COMO A TELA BASE PARA A EDIÇÃO DAS SAIDAS DE ITENS
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->