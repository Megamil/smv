<?php echo form_fieldset("Novo Departamento");
$form = array('name' => 'form'); 
echo form_open("criar/novo_Departamento"); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead></thead>
		<tbody>
		<tr>
			<td>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">Código: </span>
 					<input type="text" class="form-control input_Vazio" placeholder="Digite um código." name="coddepto" aria-describedby="basic-addon1" maxlength="15">
  				</td>
			<td width="30"></td>
			<td>	
				<div class="input-group">	
  					<span class="input-group-addon" id="basic-addon1">Nome: </span>
 					<input type="text" class="form-control input_Vazio" placeholder="Digite um nome." name="nome" aria-describedby="basic-addon1" maxlength="30">
				</div>
			</td>
		</tr>
		</tbody>
	</table>

	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Criar Departamento', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-departamento', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>