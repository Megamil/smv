	<div>
		<?php echo anchor('main/redirecionar/seguranca-novo_Usuario', '<button class="btn btn-info pull-center"> Criar novo usuário </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed responsive" id="tabela">
		<thead> 
			<tr>
				<th class="span2">ID</th>
				<th class="span2">Usuário</th>
				<th class="span2">Nome</th>
				<th class="span2">E-mail</th>
				<th class="span2">Telefone</th>
				<th class="span2">CPF</th>
				<th class="span2">Status</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack as $user) {
					     $user_id = $user->id_usuario;
					     $user_usuario = $user->usuario;
						 $user_nome = $user->nome;
						 $user_email = $user->email;
						 $user_telefone = $user->telefone;
						 $user_status = $user->ativo;
						 $user_cpf = $user->cpf;

						 if($user_status == 't') {
						 	$user_status = 'Ativo';
						 } else {
						 	$user_status = 'Inativo';
						 }

						 echo "<tr>";
					     echo "<td>$user_id</td>";
					     echo "<td>$user_usuario</td>";
					     echo "<td>$user_nome</td>";
					     echo "<td>$user_email</td>";
					     echo "<td><input class=\"telefone\" value=\"$user_telefone\" disabled> </td>";
					     echo "<td>$user->cpf</td>";
					     echo "<td>$user_status</td>";
					     if($user_usuario != 'Administrador') { /*Usuário Administrador não pode ser editado*/
					     echo '<td>'.anchor('seguranca/editarUsuario/'.$user_usuario.'','Editar').'</td>';
					 		}else{
					 	 echo '<td>ESTE USUÁRIO NÃO ACEITA EDIÇÕES</td>';
					 		}
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>

<script type="text/javascript">
	
	$(document).ready(function() {
    $(".telefone").mask('(99)99999-999?9');
});

</script>