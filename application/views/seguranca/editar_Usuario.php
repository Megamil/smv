	<?php 
		$nomeFormulario = array('name' => 'edicao'); /*Requerido para indicar de qual formulário é campo E-mail e Usuário  no onblur*/
		echo form_open("seguranca/salvarAlteracoesUsuarios",$nomeFormulario) 
	?>

	<?php echo form_fieldset("Editar usuário") ?>

	<table>

		<tr>
			<thead>
				<td>Nome</td>
				<td>E-mail</td>
				<td>Telefone</td>
				<td>Usuário</td>
				<td>Senha</td>
			</thead>
		</tr>

		<!--Trazer todos os dados do usuário-->
		<?php 

			$id_usuario = $pack['usuario']->id_usuario;
			$usuario = $pack['usuario']->usuario;
			$email = $pack['usuario']->email;
			$telefone = $pack['usuario']->telefone;
			$nome = $pack['usuario']->nome;
			$ativo = $pack['usuario']->ativo;
			
			?>

		<tr>
			<div id="msgemail"></div> <!--Aviso de e-mail incorreto-->
			<div id="msguser"></div> <!--Aviso de espaço no login-->

			<?php echo form_hidden('id_usuario',$id_usuario); /*Para enviar com o formulário*/ ?>

			<?php echo form_hidden('usuarioAnterior',$usuario); /*Usado para quando houver uma tentativa de alteração no nome do usuário*/ ?>

			<?php echo form_hidden('emailAnterior',$email); /*Usado para quando houver uma tentativa de alteração no email do usuário*/ ?>

			<td><input type="text" name="nome" placeholder="Nome" value="<?php echo $nome; ?>" MAXLENGTH="40" autofocus/></td>

			<td><input type="email" name="email" id="email" placeholder="E-mail" onblur="validacaoEmail(edicao.email)" MAXLENGTH="40" value="<?php echo $email; ?>"/></td>

			<td><input type="tel" name="telefone" placeholder="Telefone" id="telefone" value="<?php echo $telefone; ?>" MAXLENGTH="15"/></td> <!--Colocar mascara e limitar a números-->

			<td><input type="text" name="usuario" id="usuario" placeholder="Usuário" onblur="validacaoEspaco(edicao.usuario)" value="<?php echo $usuario; ?>" MAXLENGTH="15"/></td>

			<td><input type="password" name="senha" placeholder="Senha"/></td>
		</tr>

	</table>


		<?php echo anchor('main/redirecionar/seguranca-novo_Usuario', '<div class="btn btn-info pull-center"> Criar novo usuário </div>');?>
		<?php 
		if($ativo != 'f'){ /*Cria link para Inativar usuário*/
			echo '<div class="btn btn-danger pull-center"  data-toggle="modal" data-target="#modelInativar"> Inativar usuário </div> ';
		} else { /*Cria link para Ativar usuário*/
			echo '<div class="btn btn-info pull-center"  data-toggle="modal" data-target="#modelAtivar"> Ativar usuário </div> ';
		}
		?>

		<?php echo form_submit(array('name'=>'cadastrarUsuario'),'Salvar alterações', 'class="btn btn-success" id="button"'); ?>

	<?php echo form_fieldset_close() ?>

<?php echo form_close() ?>



	<table class="table table-striped table-hover table-condensed">
		<thead> 
			<tr>
				<h3>GRUPOS EXISTENTES</h1>
			</tr>
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Nome do grupo</th>
				<th class="span2">Descrição</th>
				<th class="span2">Atualmente</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['pack'] as $group) { /* TRAZER TODOS OS GRUPOS */
					     $group_id = $group->id_grupo;
						 $group_nome = $group->nome_grupo;
						 $group_descricao = $group->descricao_grupo;
						 $pertence = $group->pertence;

						 echo "<tr>";
						     echo "<td>$group_id</td>";
						     echo "<td>$group_nome</td>";
						     echo "<td>$group_descricao</td>";

						    if($pertence != 't'){ /*Se não pertencer ao grupo cria link para adicionar*/

						     echo "<td class=\"warning\">Não Pertence</td>";
							 echo "<td>".anchor('seguranca/adicionarAoGrupo/'.$id_usuario.'/'.$group_id.'/'.$group_nome.'/'.$usuario, '<div class="btn btn-info">Adicionar ao grupo</div>')."</td>";

						 	} else { /*Caso pertença ao grupo cria um link para remover*/

						     echo "<td class=\"info\">Pertence</td>";
							 echo "<td>".anchor('seguranca/removerDoGrupo/'.$id_usuario.'/'.$group_id.'/'.$group_nome.'/'.$usuario, '<div class="btn btn-danger">Remover do grupo</div>')."</td>";

						 	}

						 echo "</tr>";
					}
				?>
		</tbody>
	</table>


<!-- Modal para inativar usuário -->
<div class="modal fade" id="modelInativar" tabindex="-1" role="dialog" aria-labelledby="modelInativar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelInativar">Deseja realmente inativar o usuário: <?php echo $usuario ?>?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <?php echo anchor('seguranca/ativarInativarUsuario/'.$id_usuario.'/'.$usuario.'/'.$ativo, '<div class="btn btn-danger pull-center"> Inativar usuário </div>')?>
       	<!--Argumento 3 da URL é o ID do usuário, o 4 é o usuario que só é usado para avisar qual usuário foi excluído-->
       </div>
    </div>
  </div>
</div>

<!-- Modal para ativar usuário -->
<div class="modal fade" id="modelAtivar" tabindex="-1" role="dialog" aria-labelledby="modelAtivar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelAtivar">Deseja realmente ativar o usuário: <?php echo $usuario ?>?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <?php echo anchor('seguranca/ativarInativarUsuario/'.$id_usuario.'/'.$usuario.'/'.$ativo, '<div class="btn btn-danger pull-center"> Ativar usuário </div>')?>
       	<!--Argumento 3 da URL é o ID do usuário, o 4 é o usuario que só é usado para avisar qual usuário foi excluído-->
       </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	
	$(document).ready(function() {
    $("#telefone").mask('(99)99999-999?9');
});

</script>