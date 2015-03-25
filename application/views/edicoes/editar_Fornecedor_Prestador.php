<?php echo form_fieldset("Editar Fornecedor/Prestador"); 
$form = array('name' => 'form');
echo form_open("edicoes/editando_Fornecedor_Prestador",$form); ?>

	<?php echo form_hidden('id_fornecedorprestador', $pack['fornecedor']->row()->id_fornecedorprestador); ?>

	<div class="erro_Campo_Vazio" ></div>
	<div id="msgemail"></div> <!--Aviso de e-mail incorreto-->
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
						<input type="text" class="form-control input_Vazio" name="codigofornecedorprestador" value="<?php echo $pack['fornecedor']->row()->codigo; ?>" aria-describedby="basic-addon1" size="52" placeholder="Codigo" maxlength="40" disabled />
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
						<input type="text" class="form-control input_Vazio" name="nomefornecedorprestador" value="<?php echo $pack['fornecedor']->row()->nome; ?>" aria-describedby="basic-addon1" size="85" placeholder="Nome do Fornecedor/Prestador" maxlength="100" />
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
					<input type="text" class="form-control input_Vazio" id="cepValidar" name="cepfornecedorprestador" onkeypress='return numero(event)' value="<?php echo $pack['fornecedor']->row()->cep ?>" aria-describedby="basic-addon1" size="52" placeholder="CEP" maxlength="8" />
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
					<input type="text" class="form-control input_Vazio" name="ruafornecedorprestador" value="<?php echo $pack['fornecedor']->row()->rua; ?>" aria-describedby="basic-addon1" size="100" placeholder="Endereço" maxlength="100" />
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
					<input type="text" class="form-control input_Vazio" name="numerofornecedorprestador" value="<?php echo $pack['fornecedor']->row()->numero; ?>" aria-describedby="basic-addon1" size="52" placeholder="Nº" maxlength="6" />
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
					<input type="text" class="form-control input_Vazio" name="complementofornecedorprestador" value="<?php echo $pack['fornecedor']->row()->complemento; ?>" aria-describedby="basic-addon1" size="52" placeholder="Complemento" maxlength="30" />
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
					<input type="text" class="form-control input_Vazio" name="cidadefornecedorprestador" value="<?php echo $pack['fornecedor']->row()->cidade; ?>" aria-describedby="basic-addon1" size="52" placeholder="Cidade" maxlength="30" />
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


					<select class="form-control input_Vazio" name="uf" placeholder="UF">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['uf'] as $uf) {
								
								if($pack['fornecedor']->row()->uf == $uf->id_uf){

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
						<span class="help-inline">Telefone</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio telefoneValidar" name="tel1fornecedorprestador" onkeypress='return numero(event)' value="<?php echo $pack['fornecedor']->row()->tel1; ?>" aria-describedby="basic-addon1" size="52" placeholder="Telefone" maxlength="13" />
					</div>
				</div>
			</td>

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
					<input type="text" class="form-control input_Vazio telefoneValidar" name="tel2fornecedorprestador" onkeypress='return numero(event)' value="<?php echo $pack['fornecedor']->row()->tel2; ?>" aria-describedby="basic-addon1" size="52" placeholder="Telefone" maxlength="13" />
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
					<input type="text" class="form-control input_Vazio telefoneValidar" name="faxfornecedorprestador" onkeypress='return numero(event)' value="<?php echo $pack['fornecedor']->row()->fax; ?>" aria-describedby="basic-addon1" size="52" placeholder="Fax" maxlength="12" />
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
					<input type="text" class="form-control input_Vazio" name="contatofornecedorprestador" value="<?php echo $pack['fornecedor']->row()->contato; ?>" aria-describedby="basic-addon1" size="52" placeholder="Contato" maxlength="30" />
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
					<input type="email" class="form-control input_Vazio" name="emailfornecedorprestador" onblur="validacaoEmail(novo.emailfornecedorprestador)" value="<?php echo $pack['fornecedor']->row()->email; ?>" aria-describedby="basic-addon1" size="45" placeholder="E-mail" maxlength="40" />
					<div id="msgemail"></div> <!--Aviso de e-mail incorreto-->
					</div>
				</div>
			</td>

			<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">CNPJ</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" id="cnpjValidar" class="form-control input_Vazio" name="cnpjfornecedorprestador" onkeypress='return numero(event)' value="<?php echo $pack['fornecedor']->row()->cnpj; ?>" aria-describedby="basic-addon1" size="52" placeholder="CNPJ" maxlength="30" />
					</div>
				</div>
			</td>
	
			<td valign="top">
				<span class="help-inline">Tipo:</span>
			</td>
			<td valign="top" colspan="3">					

			<?php 

				foreach ($pack['tiposervico'] as $tiposervico) {
					
				if($tiposervico->id_tiposervico == $pack['fornecedor']->row()->id_tiposervico) {

					echo '<input type="radio" name="checkpecas" aria-describedby="basic-addon1" value="'.$tiposervico->id_tiposervico.'" checked /> '.$tiposervico->tiposervico.' ';

				} else {

					echo '<input type="radio" name="checkpecas" aria-describedby="basic-addon1" value="'.$tiposervico->id_tiposervico.'"/> '.$tiposervico->tiposervico.' ';

				}


				}


			 ?>


			</td>
		</tr>

		</tbody>
	</table>

	

	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Editar Fornecedor/Prestador', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-fornecedor_Prestador', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>