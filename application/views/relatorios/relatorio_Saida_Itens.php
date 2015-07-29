	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
			 	<td align="center" colspan="10"><strong>RELATÓRIO DAS SAÍDAS DOS ITENS NO ESTOQUE</strong></td>
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
				<td colspan="5" align="left">
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
                <th colspan="4" ></th>
            </tr>
        </tfoot>
		<tbody>
				<?php

					foreach ($pack['saidaitens'] as $saidaitens) {
						echo "<td align='center'>$saidaitens->codigointerno</td>";
						echo "<td align='center'>$saidaitens->codigomontadora</td>";
						echo "<td align='center'>$saidaitens->descricao</td>";

						//Formata a data para Dia-Mês-Ano, visto que de padrão a data vem em norte americano.
						$dataFormatada = date("d/m/Y", strtotime($saidaitens->datasaida));
						echo '<td>'.$dataFormatada.'</td>';	

						echo "<td align='center'>$saidaitens->quantidade</td>";
						echo "<td align='center'>".round($saidaitens->valorunit,2)."</td>";
						echo "<td align='center'>".round($saidaitens->vtotal,2)."</td>";
						echo "<td align='center'>$saidaitens->ordemservico</td>";
						echo "<td align='center'>$saidaitens->nome</td>";
						echo "<td align='center'>$saidaitens->prefixo</td>";



					echo "</tr>";
					}
				?>
		</tbody>
	</table>