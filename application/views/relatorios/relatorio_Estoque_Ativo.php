	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead>
			<tr>
			 	<td align="center" colspan="8"><strong>RELATÓRIO DO ESTOQUE ATIVO</strong></td>
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
				<th class="span3">Unidade</th>
				<th class="span3">Quantidade</th>
				<th class="span3">Valor Unit</th>
				<th class="span3">Valor Total Item</th>
			</tr>
		</thead>
		<tfoot>
            <tr>
                <th colspan="3" style="text-align:right">Total:</th>
                <th colspan="" style="text-align:right; white-space: nowrap;" ></th>
                <th style="text-align:right">Total:</th>
                <th colspan="2" ></th>
            </tr>
        </tfoot>
		<tbody>
				<?php

					foreach ($pack['itens'] as $itens) {
						
						echo '<tr>';

						    echo "<td align='center'>$itens->id_itens</td>";
							
							echo "<td align='center'>$itens->codigomontadora</td>"; 

					 		echo "<td>$itens->descricao</td>"; 

							echo "<td>$itens->unidademedida</td>"; 

							echo "<td>$itens->estoque</td>"; 

							echo "<td>$itens->valorunitario</td>"; 

							echo "<td>$itens->valortotal</td>"; 

						echo "</tr>";
					}
				?>
		</tbody>
	</table>