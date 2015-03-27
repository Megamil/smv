<?php echo form_fieldset("Nova Marca de Itens"); 
$form = array('name' => 'form');
echo form_open("criar/nova_Marca_Itens",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="input-group">
					<span class="input-group-addon">Nome:</span>
					<input type="text" class="form-control input_Vazio" placeholder="Nome Marca de Itens." name="nome"  size="35" aria-describedby="basic-addon1" maxlength="20" />
				</div>
			</td>
		</tr>
		</tbody>
	</table>


	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Criar Marca de Itens', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-marca_Itens', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>