<?php echo form_fieldset("Novo Colaborador"); 
$name = array('name' => 'novo'); /*Requerido para indicar de qual formulário é campo E-mail e Usuário no onblur*/
echo form_open("criar/novo_Colaborador",$name); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0" width="70%">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Código</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="codigocolaborador" value="<?php echo $this->session->flashdata('codigocolaborador'); ?>" aria-describedby="basic-addon1" size="52" placeholder="Codigo" maxlength="40" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Nome</span>
					</div>
				</div>
			</td>
			<td colspan="3">
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="nomecolaborador" value="<?php echo $this->session->flashdata('nomecolaborador'); ?>" aria-describedby="basic-addon1" size="85" placeholder="Nome do Colaborador" maxlength="100" />
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">CPF</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="cpfcolaborador" onkeypress='return numero(event)' value="<?php echo $this->session->flashdata('cpfcolaborador'); ?>" aria-describedby="basic-addon1" size="52" placeholder="CPF" maxlength="8" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Email</span>
					</div>
				</div>
			</td>
			<td  colspan="3">
				<div class="control-group">
					<div class="controls">
					<input type="email" class="form-control input_Vazio" name="emailcolaborador" value="<?php echo $this->session->flashdata('emailcolaborador'); ?>" aria-describedby="basic-addon1" size="100" placeholder="E-mail" maxlength="100" />
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Telefone</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="telefonecolaborador" onkeypress='return numero(event)' value="<?php echo $this->session->flashdata('telefonecolaborador'); ?>" aria-describedby="basic-addon1" size="52" placeholder="Telefone" maxlength="6" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Celular</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="celularcolaborador" value="<?php echo $this->session->flashdata('celularcolaborador'); ?>" aria-describedby="basic-addon1" size="52" placeholder="Celular" maxlength="30" />
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Função</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="funcaocolaborador" value="<?php echo $this->session->flashdata('funcaocolaborador'); ?>" aria-describedby="basic-addon1" size="52" placeholder="Cidade" maxlength="30" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Setor</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">


					<select class="form-control" name="setor" value="<?php echo $this->session->flashdata('setor'); ?>">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['setor'] as $setor) {
								
								if($this->session->flashdata('setor') == $setor->id_setor){

									echo '<option selected value="'.$setor->id_setor.'">'.$setor->setor.'</option>';
								
								} else {
								
									echo '<option value="'.$setor->id_setor.'">'.$setor->setor.'</option>';
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


	

	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Criar Colaborador', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-colaborador', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>