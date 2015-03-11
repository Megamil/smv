	<?php 
		$nomeFormulario = array('name' => 'edicao'); /*Requerido para indicar de qual formulário é campo Nome do grupo no onblur*/
		echo form_open("seguranca/salvarAlteracoesGrupos",$nomeFormulario) 
	?>

	<?php echo form_fieldset("Editar grupo") ?>

	<table>

		<tr>
			<thead>
				<td>Nome do grupo</td>
				<td>Descrição do grupo</td>
			</thead>
		</tr>

		<div id="msggru"></div> <!--Aviso de espaço no nome do grupo-->

		<!--Trazer todos os dados do usuário-->
		<?php 

				$id_grupo = $pack['grupo']->id_grupo;
				$nome = $pack['grupo']->nome_grupo;
				$descricao = $pack['grupo']->descricao_grupo;
			
		 ?>

		<tr>

			<?php echo form_hidden('id_grupo',$id_grupo); /*Para enviar com o formulário*/ ?>

			<?php echo form_hidden('grupoAnterior',$nome); /*Usado para quando houver uma tentativa de alteração no nome do grupo e não seja bem-sucedida*/ ?>

			<td><input type="text" name="nome_grupo" id="nome_grupo" placeholder="Nome do grupo" value="<?php echo $nome; ?>" MAXLENGTH="15" onblur="validacaoEspacoGrupo(edicao.nome_grupo)" autofocus/></td>

			<td><input type="text" name="descricao_grupo" placeholder="Descrição do grupo" value="<?php echo $descricao; ?>" size="75%"/></td>

		</tr>

	</table>


		<?php echo anchor('main/redirecionar/seguranca-novo_Grupo', '<div class="btn btn-info pull-center"> Criar novo grupo </div>')?>
		<div class="btn btn-danger pull-center"  data-toggle="modal" data-target="#modelDeletar"> Deletar grupo </div>
		<?php echo form_submit(array('name'=>'cadastrarGrupo'),'Salvar alterações', 'class="btn btn-success" id="button"'); ?>

	<?php echo form_fieldset_close() ?>

<?php echo form_close() ?>



	<table class="table table-striped table-hover table-condensed">
		<thead> 
			<tr>
				<h3>APLICAÇÕES EXISTENTES</h1>
			</tr>
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Nome da aplicação</th>
				<th class="span2">Descrição</th>
				<th class="span2">Atualmente</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['pack'] as $aplicacao) { /* TRAZER TODAS AS APLICAÇÕES */
					    $aplicacao_id = $aplicacao->id_aplicacao;
						$aplicacao_nome = $aplicacao->nome_aplicacao;
						$aplicacao_descricao = $aplicacao->descricao_aplicacao;
						$pertence = $aplicacao->pertence;

						$upperCase = ucfirst($aplicacao_nome); /*Primeira letra em maiúsculo.*/
						$renomeado = str_replace("_", " ", $upperCase); /*Tirar os _ dos nomes e insere espaço*/

						 echo "<tr>";
						     echo "<td>$aplicacao_id</td>";
						     echo "<td>$renomeado</td>";
						     echo "<td>$aplicacao_descricao</td>";
						    if($pertence != 't'){ /*Se não pertencer ao grupo cria link para adicionar*/

						     echo "<td class=\"warning\">Não Pertence</td>";
							 echo "<td>".anchor('seguranca/adicionarAppAoGrupo/'.$aplicacao_id.'/'.$id_grupo.'/'.$nome.'/'.$aplicacao_nome, '<div class="btn btn-info">Adicionar ao grupo</div>')."</td>";

						 	} else { /*Caso pertença ao grupo cria um link para remover*/

						     echo "<td class=\"info\">Pertence</td>";
							 echo "<td>".anchor('seguranca/removerAppDoGrupo/'.$aplicacao_id.'/'.$id_grupo.'/'.$nome.'/'.$aplicacao_nome, '<div class="btn btn-danger">Remover do grupo</div>')."</td>";

						 	}
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>


<!-- Modal para deletar grupo -->
<div class="modal fade" id="modelDeletar" tabindex="-1" role="dialog" aria-labelledby="modelDeletar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar">Deseja realmente deletar o grupo: <?php echo $nome ?>?</h4>
      </div>

      <div class="modal-body">
      	<p>Deletando o grupo <?php echo $nome ?> você também irá apagar os vínculos dele com todas as aplicações e todo vínculo de algum usuário com o grupo.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <?php echo anchor('seguranca/deletarGrupo/'.$id_grupo.'/'.$nome.'', '<div class="btn btn-danger pull-center"> Deletar grupo </div>')?>
       	<!--Argumento 3 da URL é o ID do grupo, o 4 é o nome do grupo que só é usado para avisar qual grupo foi excluído-->
       </div>
    </div>
  </div>
</div>