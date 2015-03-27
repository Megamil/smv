	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Fornecedor_Prestador', '<button class="btn btn-info pull-center"> Criar novo Fornecedor/Prestador </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Código</th>
				<th class="span2">CNPJ</th>
				<th class="span2">Nome</th>
				<th class="span2">Telefone</th>
				<th class="span2">Contato</th>
				<th class="span2">E-mail</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack as $fornecedorprestador) {

						echo "<tr>";
						echo "<td>$fornecedorprestador->id_fornecedorprestador</td>";
						echo "<td>$fornecedorprestador->codigo</td>";
						echo '<td><input class="cnpjValidar" value="'.$fornecedorprestador->cnpj.'" disabled></td>';
						echo "<td>$fornecedorprestador->nome</td>";
						echo '<td><input class="telefoneValidar" value="'.$fornecedorprestador->tel1.'" disabled></td>';
						echo "<td>$fornecedorprestador->contato</td>";
						echo "<td>$fornecedorprestador->email</td>";
						echo '<td>'.anchor('edicoes/editar_fornecedor_Prestador/'.$fornecedorprestador->id_fornecedorprestador.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>