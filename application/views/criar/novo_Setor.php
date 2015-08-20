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
  				<span class="input-group-addon" id="basic-addon1">Departamento: </span>
	  				<select class="form-control input_Vazio" name="coddepto" placeholder="Departamento">
						<option>Selecione...</option>
							<?php 
								foreach ($pack['depto'] as $depto) {
									if($this->session->flashdata('depto') == $depto->coddepto){
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
	  				<select class="form-control input_Vazio" name="coddivisao" placeholder="Divisao">
						<option>Selecione...</option>
							<?php 
								foreach ($pack['divisao'] as $divisao) {
									if($this->session->flashdata('divisao') == $divisao->coddivisao){
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
  				<span class="input-group-addon" id="basic-addon1">Seção: </span>
	  				<select class="form-control input_Vazio" name="codsecao" placeholder="Seção">
						<option>Selecione...</option>
							<?php 
								foreach ($pack['secao'] as $secao) {
									if($this->session->flashdata('secao') == $secao->codsecao){
										echo '<option selected value="'.$secao->codsecao.'">'.$secao->codsecao.'</option>';
									} else {
										echo '<option value="'.$secao->codsecao.'">'.$secao->codsecao.'</option>';
									}
								}
							?>
					</select>
 				</div>
  			</td>
  		</tr>
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