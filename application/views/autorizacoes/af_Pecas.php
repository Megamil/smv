	<div>
		<?php echo anchor('main/redirecionar/criar-nova_Af_Pecas', '<button class="btn btn-info pull-center"> Criar nova Autorização de Peças </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span1">Número Autorização</th>
				<th class="span5">Fornecedor</th>
				<th class="span2">Prefixo</th>
				<th class="span2">Data</th>
				<th class="span2">Valor Peças</th>
				<th class="span2">Valor Empenhos</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack as $afpecas) {

						echo "<tr>";
							echo "<td align='center'>$afpecas->id_afpecas</td>";
							echo "<td>$afpecas->nome</td>";
							echo "<td align='center'>$afpecas->prefixo</td>";

							//Formata a data para Dia-Mês-Ano, visto que de padrão a data vem em norte americano.
							$dataFormatada = date("d-m-Y", strtotime($afpecas->dataafpecas));
							echo '<td align="center">'.$dataFormatada.'</td>';

							echo "<td align='center'>$afpecas->valoritens</td>";
							echo "<td align='center'>$afpecas->valorempenho</td>";							
							echo '<td align="center">'.anchor('edicoes/editar_Af_Pecas/'.$afpecas->id_afpecas.'','Editar').'</td>';
						echo "</tr>";

					}

				?>
		</tbody>
	</table>