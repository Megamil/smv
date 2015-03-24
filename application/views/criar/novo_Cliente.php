<?php echo form_fieldset("Novo Cliente"); 
echo form_open("criar/novo_Cliente"); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
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
						<input type="text" class="form-control input_Vazio disabled" name="codigocliente" aria-describedby="basic-addon1" size="52" placeholder="Código" maxlength="40" />
					</div>
				</div>
			</td>
		<!-- Separação entre o código e o nome do fornecedor -->
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
						<input type="text" class="form-control input_Vazio" name="nomecliente" aria-describedby="basic-addon1" size="85" placeholder="Nome do cliente" maxlength="100" />
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">CEP</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="cepcliente" aria-describedby="basic-addon1" size="52" placeholder="CEP" maxlength="9" />
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Rua</span>
					</div>
				</div>
			</td>
			<td  colspan="3">
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="ruacliente" aria-describedby="basic-addon1" size="100" placeholder="Endereço" maxlength="100" />
					</div>
				</div>
			</td>

		<!-- Separação entre o endereço e o número do fornecedor -->

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Nº</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="numeroclienter" aria-describedby="basic-addon1" size="52" placeholder="Nº" maxlength="6" />
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Complemento</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="complementocliente" aria-describedby="basic-addon1" size="52" placeholder="Complemento" maxlength="30" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Cidade</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="cidadecliente" aria-describedby="basic-addon1" size="52" placeholder="Cidade" maxlength="30" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">UF</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">


					<select class="form-control" name="uf">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['uf'] as $uf) {
								
								if($this->session->flashdata('uf') == $uf->id_uf){

									echo '<option selected value="'.$uf->id_uf.'">'.$uf->uf.'</option>';
								
								} else {
								
									echo '<option value="'.$uf->id_uf.'">'.$uf->uf.'</option>';
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
						<span class="help-inline">Telefone/Ramal</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="tel1cliente" aria-describedby="basic-addon1" size="52" placeholder="Telefone" maxlength="12" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Telefone/Ramal</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="tel2cliente" aria-describedby="basic-addon1" size="52" placeholder="Telefone" maxlength="12" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Fax</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="faxcliente" aria-describedby="basic-addon1" size="52" placeholder="Fax" maxlength="12" />
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Contato</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="contatocliente" aria-describedby="basic-addon1" size="52" placeholder="Contato" maxlength="30" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">E-mail</span>
					</div>
				</div>
			</td>
			<td colspan="3">
				<div class="control-group">
					<div class="controls">
					<input type="email" class="form-control input_Vazio" name="emailcliente" aria-describedby="basic-addon1" size="45" placeholder="E-mail" maxlength="40" />
					</div>
				</div>
			</tr>

		</tbody>
	</table>


	

	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Criar Cliente', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-cliente', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>