<?php echo form_fieldset("Editar Modalidade Licitatória"); 
$form = array('name' => 'form');
echo form_open("edicoes/editando_Modalidade",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
	<div class="input-group">
  		<span class="input-group-addon" id="basic-addon1">ID <?php echo $pack->row()->id_modalidadedelicitacao;?> Nome: </span>
  		<?php echo form_hidden('id_modalidade',$pack->row()->id_modalidadedelicitacao); ?>
 		<input type="text" class="form-control input_Vazio" value="<?php echo $pack->row()->modalidadedelicitacao ?>" name="nome" aria-describedby="basic-addon1" maxlength="30">
	</div>

	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Editar Modalidade Licitatória', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-modalidade_Licitacao', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>