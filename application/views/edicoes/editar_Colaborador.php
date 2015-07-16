<?php echo form_fieldset("Editar Colaborador"); 
$form = array('name' => 'form');
echo form_open("edicoes/editando_Colaborador",$form); ?>

	<div class="erro_Campo_Vazio" ></div>

	<?php echo form_hidden('id_colaborador',$pack['colaborador']->row()->id_colaborador); ?>

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
						<input type="text" class="form-control input_Vazio" name="codigocolaborador" onkeypress='return numero(event)' value="<?php echo $pack['colaborador']->row()->codigofuncional; ?>" aria-describedby="basic-addon1" size="52" placeholder="Codigo" maxlength="40" />
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
						<input type="text" class="form-control input_Vazio" name="nomecolaborador" value="<?php echo $pack['colaborador']->row()->nome; ?>" aria-describedby="basic-addon1" size="85" placeholder="Nome do Colaborador" maxlength="100" />
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
					<input type="text" class="form-control input_Vazio" name="cpfcolaborador" id="cpfValidar" onkeypress='return numero(event)' value="<?php echo $pack['colaborador']->row()->cpf; ?>" aria-describedby="basic-addon1" size="52" placeholder="CPF" maxlength="11" />
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
					<input type="text" class="form-control input_Vazio" name="emailcolaborador" onblur="validacaoEmail(form.emailcolaborador)" value="<?php echo $pack['colaborador']->row()->email; ?>" aria-describedby="basic-addon1" size="100" placeholder="E-mail" maxlength="100" />
					<div id="msgemail"></div> <!--Aviso de e-mail incorreto-->
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
					<input type="text" class="form-control input_Vazio telefoneValidar" name="telefonecolaborador" onkeypress='return numero(event)' value="<?php echo $pack['colaborador']->row()->telefone; ?>" aria-describedby="basic-addon1" size="52" placeholder="Telefone" maxlength="6" />
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
					<input type="text" class="form-control input_Vazio telefoneValidar" name="celularcolaborador" value="<?php echo $pack['colaborador']->row()->celular; ?>" aria-describedby="basic-addon1" size="52" placeholder="Celular" maxlength="30" />
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
					<input type="text" class="form-control input_Vazio" name="funcaocolaborador" value="<?php echo $pack['colaborador']->row()->funcaocargo; ?>" aria-describedby="basic-addon1" size="52" placeholder="Função" maxlength="30" />
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


					<select class="form-control input_Vazio" name="setor" value="<?php echo $pack['colaborador']->row()->id_setor; ?>" placeholder="Setor">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['setor'] as $setor) {
								
								if($pack['colaborador']->row()->id_setor == $setor->id_setor){

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


	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Salvar Edição', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-colaborador', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>