<?php echo form_fieldset("Editar Seção");
$form = array('name' => 'form'); 
echo form_open("edicoes/editando_Secao",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
	<div class="input-group">
  		<span class="input-group-addon" id="basic-addon1">ID <?php echo $pack->row()->id_secao;?> Nome: </span>
  		<?php echo form_hidden('id_secao',$pack->row()->id_secao); ?>
 		<input type="text" class="form-control input_Vazio" value="<?php echo $pack->row()->secao ?>" name="nome" aria-describedby="basic-addon1" maxlength="30">
	</div>

	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Editar Seção', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-secao', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>