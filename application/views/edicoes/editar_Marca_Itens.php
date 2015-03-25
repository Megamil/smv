<?php echo form_fieldset("Editar Marca de Itens"); 
$form = array('name' => 'form');
echo form_open("edicoes/editando_Marca_Itens",$form); ?>

	<div class="erro_Campo_Vazio" ></div>

	<?php echo form_hidden('id_marcaitens', $pack->row()->id_marcaitens); ?>

	<div class="input-group">
  		<span class="input-group-addon" id="basic-addon1">ID <?php echo $pack->row()->id_marcaitens;?> Nome: </span>
 		<input type="text" class="form-control input_Vazio" value="<?php echo $pack->row()->marcaitens ?>" name="nome" aria-describedby="basic-addon1" maxlength="20" placeholder="Marca Item">
	</div>

	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Editar Marca de Itens', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-marca_Itens', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>