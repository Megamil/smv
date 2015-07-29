<?php echo form_fieldset("Editar Divisão"); 
$form = array('name' => 'form');
echo form_open("edicoes/editando_Divisao",$form); ?>

<!-- Previne que o usuário altere o nome ou o código para um já existente -->
<?php echo form_hidden('codOriginal',$pack['divisao']->row()->coddivisao); ?>
<?php echo form_hidden('nomeOriginal',$pack['divisao']->row()->divisao); ?>

	<div class="erro_Campo_Vazio" ></div>
		<table border="0">
		<thead></thead>
		<tbody>
		<tr>
			<td>
				<div class="input-group">
  				<span class="input-group-addon" id="basic-addon1">Departamento: </span>
	  				<select class="form-control input_Vazio" name="depto" placeholder="Departamento">
						<option>Selecione...</option>
							<?php 
								foreach ($pack['depto'] as $depto) {
									if($pack['divisao']->row()->coddepto == $depto->coddepto){
										echo '<option selected value="'.$depto->coddepto.'">'.$depto->coddepto.'</option>';
									} else {
										echo '<option value="'.$depto->coddepto.'">'.$depto->coddepto.'</option>';
									}
								}
							?>
					</select>
 				</div>
  			</td>
  			<td width="30"></td>
			<td>	
				<div class="input-group">
					<span class="input-group-addon">Código:</span>
					<input type="text" class="form-control input_Vazio" value="<?php echo $pack['divisao']->row()->coddivisao ?>" name="coddivisao" size="15" aria-describedby="basic-addon1" maxlength="15" />
				</div>
			</td>
			<td width="30"></td>	
			<td>
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">ID <?php echo $pack['divisao']->row()->id_divisao;?> Nome: </span>
  					<?php echo form_hidden('id_divisao',$pack['divisao']->row()->id_divisao); ?>
 					<input type="text" class="form-control input_Vazio" value="<?php echo $pack['divisao']->row()->divisao ?>" name="nome" aria-describedby="basic-addon1" maxlength="30">
				</div>
			</td>
		</tr>
		</tbody>
	</table>

	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Salvar Edição', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-divisao', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>