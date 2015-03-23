<?php echo form_fieldset("Novo Servço"); 
echo form_open("criar/novo_Servico"); ?>

	<div class="erro_Campo_Vazio" ></div>
	
		<?php echo form_hidden('id_servicos', $pack['servico']->row()->id_servicos); ?>

	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Serviço</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<input type="text" class="input_Vazio" name="nomeservico" aria-describedby="basic-addon1" size="52" placeholder="Nome do Serviço" maxlength="100" />
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Unidade</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<select class="form-control" name="unidade">

						<option>Selecione...</option>

						<?php 

							foreach ($pack as $unidade) {
								
								if($this->session->flashdata('unidade') == $unidade->id_unidademedida){

									echo '<option selected value="'.$unidade->id_unidademedida.'">'.$unidade->id_unidademedida.'</option>';
								
								} else {
								
									echo '<option value="'.$unidade->id_unidademedida.'">'.$unidade->id_unidademedida.'</option>';
								}
							
							}

						?>

					</select>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Valor</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="input_Vazio" name="valorservico" aria-describedby="basic-addon1" size="52" placeholder="Valor do Serviço" maxlength="100" />
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Fornecedor/Prestador</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<select class="form-control" name="forcedorprestador">

						<option>Selecione...</option>

						<?php 

							foreach ($pack as $forcedorprestador) {
								
								if($this->session->flashdata('forcedorprestador') == $forcedorprestador->id_forcedorprestador){

									echo '<option selected value="'.$forcedorprestador->id_forcedorprestador.'">'.$forcedorprestador->id_forcedorprestador.'</option>';
								
								} else {
								
									echo '<option value="'.$forcedorprestador->id_forcedorprestador.'">'.$forcedorprestador->id_forcedorprestador.'</option>';
								}
							
							}

						?>

					</select>
					</div>
				</div>
			</td>
		</tr>
		</tbody>
	</table>


	

	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Criar Serviço', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-servicos', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>