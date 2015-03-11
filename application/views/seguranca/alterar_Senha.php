<?php echo form_open("Seguranca/senha"); ?>

	<?php echo form_fieldset("Alteração de senha") ?>

		<input type="text" id="formulariosimples" name="nome" disabled value="Usuário: <?php echo ucfirst($this->session->userdata('usuario')); ?>"/> <br>

		<input type="password" id="formulariosimples" name="senhaAtual" placeholder="Senha Atual" autofocus/> <br>

		<input type="password" id="formulariosimples" name="senha" placeholder="Nova Senha" autofocus/>
		<?php echo form_error('senha'); ?> <br>

		<input type="password" id="formulariosimples" name="senha2" placeholder="Confirme a nova Senha"/> <br>

		<?php echo form_submit(array('name'=>'cadastrarSenha'),'Confirmar', 'class="btn btn-primary" id="button"'); ?></td>

	<?php echo form_fieldset_close() ?>

<?php echo form_close() ?>