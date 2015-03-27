<?php echo form_fieldset("Editar Objeto"); 
$form = array('name' => 'form');
echo form_open("edicoes/editando_Objeto",$form); ?>

	<?php echo form_hidden('id_objeto', $pack->row()->id_objeto); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="input-group">
					<span class="input-group-addon">Título</span>
					<input type="text" name="nomeobjetotitulo" aria-describedby="basic-addon1" size="52" value="<?php echo $pack->row()->objetotitulo; ?>" maxlength="100"/>
				</div>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<div class="input-group">
					<span class="input-group-addon">Texto</span>
					<textarea name="nomeobjetotexto" type="text" class="textarea_Vazio" cols="50" rows="10" placeholder="Texto do Objeto" maxlength="700"><?php echo $pack->row()->objetotexto; ?></textarea>
				</div>
			</td>
		</tr>
		</tbody>
	</table>

	<?php echo form_submit(array('name'=>'editarObjeto'),'Editar Objeto', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-objeto', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>