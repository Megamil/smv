<?php
	$nomeFormulario = array('name' => 'novo'); /*Requerido para indicar de qual formulário é campo Nome do grupo no onblur*/
	echo form_open("seguranca/novoGrupo",$nomeFormulario); 
?>
	
	<?php echo form_fieldset("Novo grupo"); ?>

	<table>

		<tr>
			<thead>
				<td>Nome do grupo</td>
				<td>Descrição do grupo</td>
			</thead>
		</tr>

		<div id="msggru"></div> <!--Aviso de espaço no nome do grupo-->

		<tr>
			<td><input type="text" name="nome_grupo" id="nome_grupo" placeholder="Nome do grupo" MAXLENGTH="15" onblur="validacaoEspacoGrupo(novo.nome_grupo)"
			autofocus/></td>

			<td><input type="text" name="descricao_grupo"s placeholder="Descrição do grupo" size="75%"
			value="<?php echo $this->session->flashdata('descricao_grupo'); ?>"/></td>
		</tr>

	</table>


		<?php echo form_submit(array('name'=>'cadastrarNovoGrupo'),'Criar grupo', 'class="btn btn-success" id="button"'); ?>

	<?php echo form_fieldset_close() ?>

<?php echo form_close() ?>