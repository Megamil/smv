<?php echo form_fieldset("Editar Seção");
$form = array('name' => 'form'); 
echo form_open("edicoes/editando_Secao",$form); ?>

<!-- Previne que o usuário altere o nome ou o código para um já existente -->
<?php echo form_hidden('codOriginal',$pack['secao']->row()->codsecao); ?>
<?php echo form_hidden('nomeOriginal',$pack['secao']->row()->secao); ?>

	<div class="erro_Campo_Vazio" ></div>

	<table border="0">
		<thead></thead>
		<tbody>
		<tr>
			<td>
				<div class="input-group">
  				<span class="input-group-addon" id="basic-addon1">Departamento: </span>
	  				<select class="form-control input_Vazio" name="coddepto" placeholder="Departamento">
						<option>Selecione...</option>
							<?php 
								foreach ($pack['depto'] as $depto) {
									if($pack['secao']->row()->coddepto == $depto->coddepto){
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
  				<span class="input-group-addon" id="basic-addon1">Divisão: </span>
	  				<select class="form-control input_Vazio" name="coddivisao" placeholder="Departamento">
						<option>Selecione...</option>
							<?php 
								foreach ($pack['divisao'] as $divisao) {
									if($pack['secao']->row()->coddivisao == $divisao->coddivisao){
										echo '<option selected value="'.$divisao->coddivisao.'">'.$divisao->coddivisao.'</option>';
									} else {
										echo '<option value="'.$divisao->coddivisao.'">'.$divisao->coddivisao.'</option>';
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
						<input type="text" class="form-control input_Vazio" value="<?php echo $pack['secao']->row()->codsecao ?>" name="codsecao" size="15" aria-describedby="basic-addon1" maxlength="15" />
				</div>
			</td>
			<td width="30"></td>	
			<td>
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">ID <?php echo $pack['secao']->row()->id_secao;?> Nome: </span>
  					<?php echo form_hidden('id_secao', $pack['secao']->row()->id_secao); ?>
  			 		<input type="text" class="form-control input_Vazio" value="<?php echo $pack['secao']->row()->secao ?>" name="nome" aria-describedby="basic-addon1" maxlength="30">
				</div>
			</td>
		</tr>
		</tbody>
	</table>
	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Salvar Edição', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/adicionar-secao', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>
