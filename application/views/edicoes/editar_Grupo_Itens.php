<?php echo form_fieldset("Editar Grupo de Itens"); 
$form = array('name' => 'form');
echo form_open("edicoes/editando_Grupo_Itens",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
	<?php echo form_hidden('id_grupoitens', $pack->row()->id_grupoitens); ?>
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
			<tr>
			<td colspan="2">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">Grupo de Itens</span>
					<input type="text" class="form-control input_Vazio" name="nomegrupoitens" aria-describedby="basic-addon1" size="42" maxlength="40" value="<?php echo $pack->row()->grupoitens; ?>" placeholder="Grupo Itens">
				</div>
			</td>
		</tr>

		</tbody>
	</table>

	<?php echo form_submit(array('name'=>'editarGrupoitens'),'Salvar Edição', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-grupo_Itens', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>