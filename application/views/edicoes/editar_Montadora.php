<?php echo form_fieldset("Editar Montadora"); 
echo form_open("edicoes/editando_Montadora"); ?>

	<div class="erro_Campo_Vazio" ></div>
	<div class="input-group">
  		<span class="input-group-addon" id="basic-addon1">ID <?php echo $pack->row()->id_montadora; ?> Nome: </span>
  		<?php echo form_hidden('id_montadora',$pack->row()->id_montadora); ?>
 		<input type="text" class="form-control input_Vazio" value="<?php echo $pack->row()->montadora ?>" name="nome" aria-describedby="basic-addon1" maxlength="30">
	</div>

	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Editar Montadora', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-montadora', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>