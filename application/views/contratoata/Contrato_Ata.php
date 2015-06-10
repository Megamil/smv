	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Contrato_Ata', '<button class="btn btn-info pull-center"> Criar novo Contrato/Ata </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">Número/Ano</th>
				<th class="span2">Fornecedor</th>
				<th class="span2">Início da Vigência</th>
				<th class="span2">Término da Vigência</th>
				<th class="span2">Prorrogado</th>
				<th class="span2">Objeto - Título</th>
				<th class="span2">Editar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['contratoata'] as $contratoata) {
						echo "<tr>";
						    echo "<td align='center'>$contratoata->numerocontratoata</td>";
						    echo "<td align='center'>$contratoata->nome</td>";

						    //Formata a data para Dia-Mês-Ano, visto que de padrão a data vem em norte americano.
							$dataFormatada = date("d-m-Y", strtotime($contratoata->dtinivigencia));
							echo '<td align="center">'.$dataFormatada.'</td>';

							$dataFormatada2 = date("d-m-Y", strtotime($contratoata->dtfimvigencia));
							echo '<td align="center">'.$dataFormatada2.'</td>';

							if (!empty($contratoata->numanoemissorprorrogacao)){
								echo "<td align='center'><input type='checkbox' name='prorrogado' checked disabled></td>";
							}else{
								echo "<td align='center'><input type='checkbox' name='prorrogado' disabled></td>";
							}


							echo "<td>$contratoata->objetotitulo</td>";

							echo '<td align="center">'.anchor('edicoes/editar_Contrato_Ata/'.$contratoata->id_contratoata.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>