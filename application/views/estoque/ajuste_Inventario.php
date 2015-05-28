<script type="text/javascript" src="<?php echo base_url(); ?>style/js/calc.js"></script>
<table class="table table-striped table-hover table-condensed" id="tabela">
	<thead> 
		<tr>
		 	<td align="center" colspan="9"><strong>RELATÓRIO DE AJUSTE DE INVENTÁRIO</strong></td>
		</tr>

		<tr>
			<td colspan="5" align="left">
				<div><strong>Grupo: </strong>TUDO</div>
			</td>
			<td colspan="5" align="left">
				<div><strong>Data: </strong> <?php $data = date('d/m/Y'); echo $data; ?> </div>
			</td>
		</tr>
		
		<tr>
			<th class="span3">Código</th>
			<th class="span3">Código Montadora</th>
			<th class="span2">Descrição</th>
			<th class="span2">Unid</th>
			<th class="span2">Estoque</th>
			<th class="span2">Inventário</th>
			<th class="span2">Diferença</th>
			<th class="span3">E/S</th>
			<th class="span3">Salvar</th>
		</tr>
	</thead>

		<tbody>
				<?php

					foreach ($pack['itens'] as $itens) {
						
						echo '<tr>';

						    echo "<td align='center'>$itens->id_itens</td>";
						    echo "<td align='center'>$itens->codigomontadora</td>";
							echo "<td>$itens->descricao</td>";

							foreach($pack['unidademedida'] as $unidademedida){

						    	if($unidademedida->id_unidademedida == $itens->id_unidademedida){
							    	echo "<td align='center'>$unidademedida->unidademedida</td>";
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
							 			break;
							 	}
							
							}

							$existe2 = false; // Varíável para validação
						    foreach($pack['saidas'] as $saidas){
							 	if($itens->id_itens == $saidas->codigointerno) {
							 			$sai = $saidas->quantidade;
							 			$existe2 = true; //confirma que existe um valor
							 			break;
							 	} 
							}

							echo '<td>'.($ent - $sai).'</td>';

							echo "<td align='center'><input class=\"form-control real\" type='text' name='qtdapurada' class='form-control' style='max-width:80px' /></td>";

							echo '<input class="atual" type="hidden" value="'.($ent - $sai).'">';
							
							echo "<td align='center'><label class=\"diferenca\"></label></td>";

							echo "<td align='center'>Tipo da Diferença</td>";

							echo '<td align="center">'.anchor('estoque/ajuste_Inventario/'.$itens->id_itens.'','Salvar').'</td>';
							echo '</tr>';
					}
				?>
		</tbody>
	</table>