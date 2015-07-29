<script type="text/javascript" src="<?php echo base_url(); ?>style/js/calc.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/json.js"></script>
<table class="table table-striped table-hover table-condensed" id="tabela">
	<thead> 
		<tr>
		 	<td align="center" colspan="9"><strong>RELATÓRIO DE AJUSTE DE INVENTÁRIO</strong></td>
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

						$id = $itens->id_itens;
						
						echo '<tr>';

						    echo "<td align='center'>$id</td>";
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
							 	if($id == $entradas->codigointerno) {
							 			$ent = $entradas->quantidade;
							 			$existe = true; //confirma que existe um valor
							 			break;
							 	}
							
							}

							$existe2 = false; // Varíável para validação
						    foreach($pack['saidas'] as $saidas){
							 	if($id == $saidas->codigointerno) {
							 			$sai = $saidas->quantidade;
							 			$existe2 = true; //confirma que existe um valor
							 			break;
							 	} 
							}

							echo '<td><input type="text" value="'.($ent - $sai).'" class=\'form-control\' id=\'atual'.$id.'\' style=\'max-width:80px\' disabled></td>';

							echo "<td align='center'><input class=\"form-control real\" type='text' referencia=\"".$id."\" class='form-control' style='max-width:80px'/></td>";

							echo "<td align='center'><input class='form-control' style='max-width:80px' id=\"diferenca".$id."\" disabled></td>";

							echo "<td align='center'><div id='es".$id."'></div></td>";

							echo '<td align="center"><button salvar="'.$id.'" class="btn btn-success salvar">Salvar</button></td>';

							echo '</tr>';
					}
				?>
		</tbody>
	</table>