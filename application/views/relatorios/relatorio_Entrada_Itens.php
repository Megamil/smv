	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead>
			<tr>
			 	<td align="center" colspan="9"><strong>RELATÓRIO DAS ENTRADAS DOS ITENS NO ESTOQUE</strong></td>
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
				<th class="span2">N.F.</th>
				<th class="span2">Fornecedor</th>
				
			</tr>
		</thead>
		<tfoot>
            <tr>
                <th colspan="4" style="text-align:right">Total:</th>
                <th colspan="" style="text-align:right; white-space: nowrap;" ></th>
                <th style="text-align:right">Total:</th>
                <th colspan="3" ></th>
            </tr>
        </tfoot>
		<tbody>
				<?php
					$qtdtotal = 0;
					$totalvalores = 0;
					foreach ($pack['entradaitens'] as $entradaitens) {
						
						echo '<tr>';

						    echo "<td align='center'>$entradaitens->codigointerno</td>";

						    foreach($pack['itens'] as $itens){
							 	if($itens->id_itens == $entradaitens->codigointerno) {
							 		echo "<td align='center'>$itens->codigomontadora</td>"; 
							 		break;
							 	}
						    }

						    foreach($pack['itens'] as $itens){
							 	if($itens->id_itens == $entradaitens->codigointerno) {
							 		echo "<td>$itens->descricao</td>"; 
							 		break;
							 	}
						    }
							//Formata a data para Dia-Mês-Ano, visto que de padrão a data vem em norte americano.
							$dataFormatada = date("d-m-Y", strtotime($entradaitens->dataentrada));
							echo '<td>'.$dataFormatada.'</td>';
							echo "<td align='center'>$entradaitens->quantidade</td>";
						    
						    foreach($pack['itens'] as $itens){

							 	if($itens->id_itens == $entradaitens->codigointerno) {
							 		$valor = $itens->precobruto;
							 		$desconto = $itens->desconto;
							 		$valorunitario = $valor - (($valor * $desconto)/100);
							 		echo "<td align='center'>$valorunitario</td>"; 

							 		echo "<td align='center'>".$entradaitens->quantidade * $valorunitario."</td>";
							 		break;
							 	}

						    }

							if(!empty($entradaitens->numnotafiscal)){
								echo "<td align='center'>$entradaitens->numnotafiscal</td>";
							}else{
								echo "<td align='center'></td>";
							}

							foreach($pack['fornecedorprestador'] as $fornecedorprestador){
							 	if($fornecedorprestador->id_fornecedorprestador == $entradaitens->id_fornecedor) {
							 		echo "<td>$fornecedorprestador->nome</td>"; 
							 		break;
							 	}else{
							 		echo "<td></td>"; 
							 		break;
							 	}
						    }

							echo "</tr>";

							$qtdtotal = $qtdtotal + $entradaitens->quantidade;
							$totalvalores = $totalvalores + ($entradaitens->quantidade * $valorunitario);
					}
				?>
		</tbody>
	</table>