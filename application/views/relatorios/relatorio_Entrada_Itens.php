	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead>
			<tr>
			 	<td align="center" colspan="9"><strong>RELATÓRIO DAS ENTRADAS DOS ITENS NO ESTOQUE</strong></td>
			</tr> 

			<tr>
				<td colspan="5" align="left">
					<div><strong>Grupo: </strong> <?php 

					if($this->session->userdata('grupoFiltro') == "") {
					
						echo "TODOS"; 

					} else {

						echo $pack['grupoitens']->row()->grupoitens; 

					}
						?> </div>
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
					foreach ($pack['entradaitens'] as $entradaitens) {
						
						echo '<tr>';
							echo "<td>$entradaitens->codigointerno</td>";
							echo "<td>$entradaitens->codigomontadora</td>";
							echo "<td>$entradaitens->descricao</td>";

							//Formata a data para Dia-Mês-Ano, visto que de padrão a data vem em norte americano.
							$dataFormatada = date("d/m/Y", strtotime($entradaitens->dataentrada));
							echo '<td>'.$dataFormatada.'</td>';	
							
							echo "<td>$entradaitens->quantidade</td>";
							echo "<td>".round($entradaitens->valorunit,2)."</td>";
							echo "<td>".round($entradaitens->vtotal,2)."</td>";
							echo "<td>$entradaitens->numnotafiscal</td>";
						    echo "<td>$entradaitens->nome</td>";
						echo "</tr>";
					}
				?>
		</tbody>
	</table>
