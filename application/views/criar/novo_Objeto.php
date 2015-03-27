<?php echo form_fieldset("Novo Objeto"); 
$form = array('name' => 'form'); 
echo form_open("criar/novo_Objeto",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="input-group">
					<span class="input-group-addon">Título</span>
					<input type="text" class="form-control input_Vazio" name="nomeobjetotitulo" aria-describedby="basic-addon1" size="52" placeholder="Título do Objeto" maxlength="100" />
				</div>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<div class="input-group">
					<span class="input-group-addon">Texto</span>
					<textarea name="nomeobjetotexto" type="text" class="textarea_Vazio" cols="53" rows="10" placeholder="Texto do Objeto" maxlength="700"></textarea>
				</div>
			</td>
		</tr>
		</tbody>
	</table>

	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Criar Objeto', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-objeto', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>