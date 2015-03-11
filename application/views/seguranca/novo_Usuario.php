	<?php 
		$name = array('name' => 'novo'); /*Requerido para indicar de qual formulário é campo E-mail e Usuário no onblur*/
		echo form_open("seguranca/novoUsuario",$name) 
	?>
	
	<?php echo form_fieldset("Novo usuário") ?>

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

		<tr>
			<div id="msgemail"></div> <!--Aviso de e-mail incorreto-->
			<div id="msguser"></div> <!--Aviso de espaço no login-->

			<td><input type="text" name="nome" placeholder="Nome" MAXLENGTH="40" value="<?php echo $this->session->flashdata('nome'); ?>" autofocus/></td>

			<td><input type="email" name="email" id="email" placeholder="E-mail" onblur="validacaoEmail(novo.email)" MAXLENGTH="40" value="<?php echo $this->session->flashdata('email'); ?>"/></td>

			<td><input type="tel" name="telefone" id="telefone" placeholder="Telefone" MAXLENGTH="11" value="<?php echo $this->session->flashdata('telefone'); ?>"></td> 

			<td><input type="text" name="usuario" id="usuario" placeholder="Usuário" MAXLENGTH="15" value="<?php echo $this->session->flashdata('usuario'); ?>" /></td>

			<td><input type="password" name="senha" placeholder="Senha"/></td>
		</tr>

	</table>


		<?php echo form_submit(array('name'=>'cadastrarNovoUsuario'),'Criar usuário', 'class="btn btn-success" id="button"'); ?>

	<?php echo form_fieldset_close() ?>

<?php echo form_close() ?>

<script type="text/javascript">
	
	$(document).ready(function() {
    $("#telefone").mask('(99)99999-999?9');
});

</script>