<?php echo form_fieldset("Nova Dotação"); 
echo form_open("criar/nova_Dotacao"); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table>
		<thead><span class="input-group-addon" id="basic-addon1">Marque as opções</span></thead>
		<tbody>
		<tr>
			<td>
				<div class="input-group">
  				<input type="radio" class="form-control input_Vazio" name="tipodotacao" aria-describedby="basic-addon1">
				<span class="input-group-addon" id="basic-addon1">Serviços</span><br>
 				<input type="radio" class="form-control input_Vazio" name="tipodotacao" aria-describedby="basic-addon1">
				<span class="input-group-addon" id="basic-addon1">Peças</span>
				</div>
			</td>
			<td>
				<div class="input-group">
  				<input type="radio" class="form-control input_Vazio" name="estadodotacao" aria-describedby="basic-addon1">
				<span class="input-group-addon" id="basic-addon1">Ativo</span><br>
 				<input type="radio" class="form-control input_Vazio" name="estadodotacao" aria-describedby="basic-addon1">
				<span class="input-group-addon" id="basic-addon1">Inativo</span>
				</div>
			</td>
		</tr>
		</tbody>
	</table>


	

	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Criar Dotação', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-divisao', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>