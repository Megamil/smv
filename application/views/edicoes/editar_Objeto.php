<?php echo form_fieldset("Editar Objeto"); 
echo form_open("edicoes/editando_Objeto"); ?>

	<?php echo form_hidden('id_objeto', $pack->row()->id_objeto); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Título</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<input type="text" name="nomeobjetotitulo" aria-describedby="basic-addon1" size="52" value="<?php echo $pack->row()->objetotitulo; ?>" maxlength="100"/>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Texto</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<textarea type="text" name="nomeobjetotexto" cols="50" rows="10" maxlength="700"><?php echo $pack->row()->objetotexto; ?></textarea>
					</div>
				</div>
			</td>
		</tr>
		</tbody>
	</table>


	

	<?php echo form_submit(array('name'=>'editarObjeto'),'Editar Objeto', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-objeto', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>