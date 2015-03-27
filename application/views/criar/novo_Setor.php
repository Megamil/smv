<?php echo form_fieldset("Novo Setor");
$form = array('name' => 'form');
echo form_open("criar/novo_Setor",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead></thead>
		<tbody>
		<tr>
			<td>
				<div class="input-group">
						<span class="input-group-addon">Código:</span>
						<input type="text" class="form-control input_Vazio" placeholder="Digite um código." name="codsetor"  size="15" aria-describedby="basic-addon1" maxlength="15" />
				</div>
			</td>
			<td width="30"></td>
			<td>	
				<div class="input-group">
						<span class="input-group-addon">Nome:</span>
						<input type="text" class="form-control input_Vazio" placeholder="Digite um nome." name="nome"  size="35" aria-describedby="basic-addon1" maxlength="30" />
				</div>
			</td>
		</tr>
		</tbody>
	</table>


	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Criar Setor', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-setor', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>