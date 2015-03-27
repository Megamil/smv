	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Colaborador', '<button class="btn btn-info pull-center"> Criar novo Colaborador</button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Código Funcional</th>
				<th class="span2">Nome</th>
				<th class="span2">Telefone</th>
				<th class="span2">Função/Cargo</th>
				<th class="span2">Setor</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['colaborador'] as $colaborador) {

						echo "<tr>";
						echo "<td>$colaborador->id_colaborador</td>";
						echo "<td>$colaborador->codigofuncional</td>";
						echo "<td>$colaborador->nome</td>";
						echo '<td><input class="telefoneValidar" value="'.$colaborador->telefone.'" disabled></td>';
						echo "<td>$colaborador->funcaocargo</td>";
						
						foreach ($pack['setor'] as $setor) {

							if($colaborador->id_setor == $setor->id_setor) {
								echo "<td>$setor->setor</td>";
								break;
							}
						}
						echo '<td>'.anchor('edicoes/editar_colaborador/'.$colaborador->id_colaborador.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>