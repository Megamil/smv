<?php echo form_fieldset("Novo Setor");
$form = array('name' => 'form');
echo form_open("criar/novo_Setor",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Nome:</span>
						<input type="text" class="input_Vazio" placeholder="Nome Setor." name="nome"  size="35" aria-describedby="basic-addon1" maxlength="30" />
					</div>
				</div>
			</td>
		</tr>
		</tbody>
	</table>


	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Criar Setor', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-setor', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>