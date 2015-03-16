<?php echo form_fieldset("Nova Montadora"); 
echo form_open("criar/nova_Montadora"); ?>

	<div class="erro_Campo_Vazio" ></div>
	<div class="input-group">
  		<span class="input-group-addon" id="basic-addon1">Nome: </span>
 		<input type="text" class="form-control input_Vazio" placeholder="Digite um nome." name="nome" aria-describedby="basic-addon1" maxlength="30">
	</div>

	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Criar Montadora', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-montadora', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>