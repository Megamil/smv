<?php echo form_fieldset("Editar Setor"); 
$form = array('name' => 'form');
echo form_open("edicoes/editando_Setor",$form); ?>

	<div class="erro_Campo_Vazio" ></div>

	<?php echo form_hidden('id_setor', $pack->row()->id_setor); ?>

	<div class="input-group">
  		<span class="input-group-addon" id="basic-addon1">ID <?php echo $pack->row()->id_setor;?> Nome: </span>
 		<input type="text" class="form-control input_Vazio" value="<?php echo $pack->row()->setor ?>" name="nome" aria-describedby="basic-addon1" maxlength="30">
	</div>

	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Editar Setor', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-setor', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>