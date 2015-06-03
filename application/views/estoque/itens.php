	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Item', '<button class="btn btn-info pull-center"> Criar novo Item </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span2">Código Interno</th>
				<th class="span2">Código Montadora</th>
				<th class="span2">Descrição</th>
				<th class="span2">Marca</th>
				<th class="span2">Grupo</th>
				<th class="span2">Unidade</th>
				<th class="span2">Estoque</th>
				<th class="span2">Preço Bruto</th>
				<th class="span2">Preço Liquido</th>
				<th class="span2">Localização</th>
				<th class="span2">Gaveta</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['itens'] as $itens) {
						echo "<tr>";
						    echo "<td align='center'>$itens->id_itens</td>";
						    echo "<td align='center'>$itens->codigomontadora</td>";
							echo "<td>$itens->descricao</td>";

							foreach($pack['marcaitens'] as $marcaitens){
								if($marcaitens->id_marcaitens == $itens->id_marcaitens){
									echo "<td>$marcaitens->marcaitens</td>";
									break;
								}
							}

							foreach($pack['grupoitens'] as $grupoitens){
								if($grupoitens->id_grupoitens == $itens->id_grupoitens){
									echo "<td>$grupoitens->grupoitens</td>";
									break;
								}
							}

							foreach ($pack['unidademedida'] as $unidademedida) {
							 	
							 	if($unidademedida->id_unidademedida == $itens->id_unidademedida) {
							 		echo "<td>$unidademedida->unidademedida</td>"; 
							 		break;
							 	}

							 }
							 echo "<td align='center'>$itens->estoquedisponivel</td>";
							 echo "<td align='center'>$itens->precobruto</td>";


							 $bruto = $itens->precobruto;
							 $desconto = $itens->desconto;
							 $liquido = $bruto - (($bruto * $desconto)/100);

							 echo "<td align='center'>$liquido</td>";


							 echo "<td align='center'>$itens->localizacao</td>";
							 echo "<td align='center'>$itens->gaveta</td>";
							
							echo '<td>'.anchor('edicoes/editar_Item/'.$itens->id_itens.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>