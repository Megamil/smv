	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead>
			<tr>
			 	<td align="center" colspan="8"><strong>RELATÓRIO DO ESTOQUE ATIVO</strong></td>
			</tr> 

			<tr>
				<td colspan="4" align="left">
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
				<th class="span3">Unidade</th>
				<th class="span3">Quantidade</th>
				<th class="span3">Valor Unit</th>
				<th class="span3">Valor Total Item</th>
				<th class="span2">Fornecedor</th>
			</tr>
		</thead>
		<tfoot>
            <tr>
                <th colspan="4" style="text-align:right">Total:</th>
                <th colspan="" style="text-align:right; white-space: nowrap;" ></th>
                <th style="text-align:right">Total:</th>
                <th colspan="2" ></th>
            </tr>
        </tfoot>
		<tbody>
				<?php
					$qtdtotal = 0;
					$totalvalores = 0;
					foreach ($pack['itens'] as $itens) {
						
						echo '<tr>';

						    echo "<td align='center'>$itens->id_itens</td>";
							
							echo "<td align='center'>$itens->codigomontadora</td>"; 

					 		echo "<td>$itens->descricao</td>"; 

							foreach($pack['unidademedida'] as $unidademedida){
							 	if($unidademedida->id_unidademedida == $itens->id_itens) {
							 		echo "<td align='center'>$unidademedida->unidademedida</td>"; 
							 		break;
							 	}
						    }

							echo "<td align='center'>$itens->estoquedisponivel</td>";

							 $valor = $itens->precobruto;
							 $desconto = $itens->desconto;
							 $valorunitario = $valor - (($valor * $desconto)/100);
							 echo "<td align='center'>$valorunitario</td>"; 


							 echo "<td align='center'>".$itens->estoquedisponivel * $valorunitario."</td>";


							foreach($pack['fornecedorprestador'] as $fornecedorprestador){
							 	if($fornecedorprestador->id_fornecedorprestador == $itens->id_itens) {
							 		echo "<td>$fornecedorprestador->nome</td>"; 
							 		break;
							 	}
						    }

							echo "</tr>";

							$qtdtotal = $qtdtotal + $itens->estoquedisponivel;
							$totalvalores = $totalvalores + ($itens->estoquedisponivel * $valorunitario);
					}
				?>
		</tbody>
	</table>