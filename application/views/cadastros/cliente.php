	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Cliente', '<button class="btn btn-info pull-center"> Criar novo Cliente </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Código</th>
				<th class="span2">Nome</th>
				<th class="span2">Telefone</th>
				<th class="span2">Contato</th>
				<th class="span2">E-mail</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack as $cliente) {

						echo "<tr>";
						echo "<td>$cliente->id_cliente</td>";
						echo "<td>$cliente->codigo</td>";
						echo "<td>$cliente->nome</td>";
						echo "<td>$cliente->tel1</td>";
						echo "<td>$cliente->contato</td>";
						echo "<td>$cliente->email</td>";
						echo '<td>'.anchor('edicoes/editar_cliente/'.$cliente->id_cliente.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>