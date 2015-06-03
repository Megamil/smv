	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
			 	<td align="center" colspan="9"><strong>RELATÓRIO DAS SAÍDAS DOS ITENS NO ESTOQUE</strong></td>
			</tr>

			<tr>
				<td colspan="5" align="left">
					<div><strong>Grupo: </strong>TUDO</div>
				</td>
				<td colspan="4" align="left">
					<div><strong>Data: </strong> <?php $data = date('d/m/Y'); echo $data; ?> </div>
				</td>
			</tr> 
			
			<tr>
				<th class="span3">Código</th>
				<th class="span3">Código Montadora</th>
				<th class="span2">Descrição</th>
				<th class="span3">Data</th>
				<th class="span3">Quantidade</th>
				<th class="span3">Valor Unit</th>
				<th class="span3">Valor Total</th>
				<th class="span2">O.S.</th>
				<th class="span2">Cliente</th>
				<th class="span2">Prefixo</th>
   			</tr>
		</thead>
		<tfoot>
            <tr>
                <th colspan="4" style="text-align:right">Total:</th>
                <th style="text-align:right; white-space: nowrap;" ></th>
                <th style="text-align:right">Total:</th>
                <th colspan="3" ></th>
            </tr>
        </tfoot>
		<tbody>
				<?php

					foreach ($pack['saidaitens'] as $saidaitens) {

						    echo "<td align='center'>$saidaitens->codigointerno</td>";
						    
						    foreach($pack['itens'] as $itens){
							 	if($itens->id_itens == $saidaitens->codigointerno) {
							 		echo "<td align='center'>$itens->codigomontadora</td>"; 
							 		break;
							 	}
						    }
					    
						    foreach($pack['itens'] as $itens){

							 	if($itens->id_itens == $saidaitens->codigointerno) {
							 		echo "<td>$itens->descricao</td>"; 
							 		break;

							 	}

						    }

							//Formata a data para Dia-Mês-Ano, visto que de padrão a data vem em norte americano.
							$dataFormatada = date("d-m-Y", strtotime($saidaitens->datasaida));
							echo '<td>'.$dataFormatada.'</td>';	

							echo "<td align='center'>$saidaitens->quantidade</td>";
							
							foreach($pack['itens'] as $itens){

							 	if($itens->id_itens == $saidaitens->codigointerno) {
							 		$valor = $itens->precobruto;
							 		$desconto = $itens->desconto;
							 		$valorunitario = $valor - (($valor * $desconto)/100);
							 		echo "<td align='center'>$valorunitario</td>"; 

							 		echo "<td align='center'>".$saidaitens->quantidade * $valorunitario."</td>";
							 		break;
							 	}

						    }

							echo "<td>$saidaitens->ordemservico</td>";
														
							if(!empty($saidaitens->id_cliente)){
								foreach($pack['cliente'] as $cliente){
									if($cliente->id_cliente == $saidaitens->id_cliente){
									 	echo "<td>$cliente->nome</td>";
									 	break;
									}
								}
							}else{
								echo "<td></td>";
							}
								

							foreach($pack['prefixo'] as $prefixo){

							 	if($prefixo->id_saidaitens == $saidaitens->id_saidaitens){

							 		echo "<td>$prefixo->prefixo</td>"; 
							 		break;

							 	} 
							 	
						    }


							echo "</tr>";
					}
				?>
		</tbody>
	</table>