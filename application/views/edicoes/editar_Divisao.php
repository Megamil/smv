<?php echo form_fieldset("Editar Divisão"); 
$form = array('name' => 'form');
echo form_open("edicoes/editando_Divisao",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
	<div class="input-group">
  		<span class="input-group-addon" id="basic-addon1">ID <?php echo $pack->row()->id_divisao;?> Nome: </span>
  		<?php echo form_hidden('id_divisao',$pack->row()->id_divisao); ?>
 		<input type="text" class="form-control input_Vazio" value="<?php echo $pack->row()->divisao ?>" name="nome" aria-describedby="basic-addon1" maxlength="30">
	</div>

	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Editar Divisão', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-divisao', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>