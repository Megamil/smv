<?php echo form_fieldset("Novo Grupo de Itens"); 
echo form_open("criar/novo_Grupo_Itens"); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Grupo de Itens</span>
						<input class="input_Vazio" type="text" name="nomegrupoitens" aria-describedby="basic-addon1" size="80" maxlength="30" placeholder="Nome do Grupo dos Itens"/>
					</div>
				</div>
			</td>
		</tr>
		</tbody>
	</table>


	

	<?php echo form_submit(array('name'=>'cadastrarNovoGrupoitens'),'Criar Grupo Itens', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-grupo_Itens', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>