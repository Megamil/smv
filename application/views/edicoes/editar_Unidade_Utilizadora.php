<?php echo form_fieldset("Editar Unidade Utilizadora"); 
$form = array('name' => 'form'); 
echo form_open("edicoes/editando_Unidade_Utilizadora",$form); ?>

	<div class="erro_Campo_Vazio" ></div>

		<?php echo form_hidden('id_unidadeutilizadora', $pack['unidadeutilizadora']->row()->id_unidadeutilizadora); ?>

<table>
<tbody>
<tr>
<td>
	<!-- ////////////////////////////////// DADOS BÁSICOS ///////////////////////////////////////////////////////////////////-->
<table width="730">
		<thead align="left"><span id="basic-addon1"></span></thead>
	<tbody>
	<!-- ////////////////////////////////// DEPARTAMENTO ////////////////////////////////// -->	
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
						<input type="text" class="form-control input_Vazio" name="id_depto" value="<?php echo $this->session->flashdata('id_depto'); ?>" aria-describedby="basic-addon1"  style="max-width:110px" placeholder="Codigo" maxlength="15" />
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Departamento</span>
					</div>
				</div>
			</td>
			<td width="430">
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="depto" value="<?php echo $this->session->flashdata('depto'); ?>" aria-describedby="basic-addon1" placeholder="Nome do Departamento" maxlength="50" disabled/>
					</div>
				</div>
			</td>
		</tr>
	<!-- ////////////////////////////////// DIVISÃO ////////////////////////////////// -->
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
						<input type="text" class="form-control input_Vazio" name="id_divisao" value="<?php echo $this->session->flashdata('id_divisao'); ?>" aria-describedby="basic-addon1" style="max-width:110px" placeholder="Codigo" maxlength="15" />
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Divisão</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="divisao" value="<?php echo $this->session->flashdata('divisao'); ?>" aria-describedby="basic-addon1" placeholder="Nome da Divisão" maxlength="50" disabled/>
					</div>
				</div>
			</td>
		</tr>
	<!-- ////////////////////////////////// SEÇÃO ////////////////////////////////// -->
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
						<input type="text" class="form-control input_Vazio" name="id_secao" value="<?php echo $this->session->flashdata('id_secao'); ?>" aria-describedby="basic-addon1" style="max-width:110px" placeholder="Codigo" maxlength="15" />
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Seção</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="secao" value="<?php echo $this->session->flashdata('secao'); ?>" aria-describedby="basic-addon1" placeholder="Nome da Seção" maxlength="50" disabled/>
					</div>
				</div>
			</td>
		</tr>
	<!-- ////////////////////////////////// SETOR ////////////////////////////////// -->
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
						<input type="text" class="form-control input_Vazio" name="id_setor" value="<?php echo $this->session->flashdata('id_setor'); ?>" aria-describedby="basic-addon1" style="max-width:110px" placeholder="Codigo" maxlength="15" />
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Setor</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="secao" value="<?php echo $this->session->flashdata('setor'); ?>" aria-describedby="basic-addon1" placeholder="Nome do Setor" maxlength="50" disabled/>
					</div>
				</div>
			</td>
		</tr>

	</tbody>
</table> 
</td>
</tr>
	<!-- ////////////////////////////////// ENDEREÇO ////////////////////////////////////////////////////////////////////////-->
<tr>
<td>
<table class="table table-bordered">
	<tbody>
		<tr>
			<td>
				<table width="98%" style="margin-top: 10px">
					<tr>
						<td colspan="3">
							<div class="control-group">
								<div class="controls">
									<span class="help-inline"><span><b>ENDEREÇO</b></span>
								</div>
							</div>
						</td>
						<!-- ////////////////////////////////// CEP ////////////////////////////////// -->
						<td colspan="3">
							<div class="input-group">
								<span class="input-group-addon">CEP</span>
								<input type="text" class="form-control input_Vazio" name="cep" value="<?php echo $this->session->flashdata('cep'); ?>" aria-describedby="basic-addon1" style="max-width:95px" placeholder="CEP" maxlength="9"/>
							</div>
						</td>
					</tr>
					<!-- ////////////////////////////////// ENDEREÇO ////////////////////////////////// -->
					<tr>
						<td>							
							<div class="control-group">
								<div class="controls">
									<span class="help-inline">Rua</span>
								</div>
							</div>
						</td>
						<td colspan="3">
							<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control input_Vazio" name="rua" value="<?php echo $this->session->flashdata('rua'); ?>" aria-describedby="basic-addon1" size="50" placeholder="Endereço" maxlength="100"/>
								</div>
							</div>
						</td>
						<td>
							<div class="control-group">
								<div class="controls">
									<span class="help-inline">Número</span>
								</div>
							</div>
						</td>
						<td>
							<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control input_Vazio" name="numero" value="<?php echo $this->session->flashdata('numero'); ?>" aria-describedby="basic-addon1" placeholder="Nº" maxlength="6" style="max-width:80px" />
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<div class="controls">
									<span class="help-inline">Complemento</span>
								</div>
							</div>
						</td>
						<td>
							<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control input_Vazio" name="complemento" value="<?php echo $this->session->flashdata('complemento'); ?>" aria-describedby="basic-addon1" style="max-width:150px" placeholder="Complemento" maxlength="30"/>
								</div>
							</div>
						</td>
						<td>
							<div class="control-group">
								<div class="controls">
									<span class="help-inline">Cidade</span>
								</div>
							</div>
						</td>
						<td>
							<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control input_Vazio" name="cidade" value="<?php echo $this->session->flashdata('cidade'); ?>" aria-describedby="basic-addon1" size="30" placeholder="Cidade" maxlength="30"/>
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
									<select class="form-control input_Vazio" name="uf" placeholder="UF"  style="max-width:115px" >
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
						<td>
							<div class="control-group">
								<div class="controls">
									<span class="help-inline">Telefone</span>
								</div>
							</div>
						</td>
						<td>
							<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control input_Vazio" name="telefone" value="<?php echo $this->session->flashdata('telefone'); ?>" aria-describedby="basic-addon1" placeholder="Telefone" maxlength="13" style="max-width:120px" />
								</div>
							</div>	
						</td>
						<td>
							<div class="control-group">
								<div class="controls">
									<span class="help-inline">Ramal</span>
								</div>
							</div>
						</td>
						<td width="200">
							<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control input_Vazio" name="ramal" value="<?php echo $this->session->flashdata('ramal'); ?>" aria-describedby="basic-addon1" placeholder="Ramal" maxlength="4" style="max-width:70px"/>
								</div>
							</div>
						</td>
						<td>
							<div class="control-group">
								<div class="controls">
									<span class="help-inline">Fax</span>
								</div>
							</div>
						</td>
						<td>
							<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control input_Vazio" name="fax" value="<?php echo $this->session->flashdata('fax'); ?>" aria-describedby="basic-addon1" placeholder="Fax" maxlength="13" style="max-width:120px" />
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<div class="controls">
									<span class="help-inline">Contato</span>
								</div>
							</div>
						</td>
						<td>
							<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control input_Vazio" name="contato" value="<?php echo $this->session->flashdata('contato'); ?>" aria-describedby="basic-addon1" placeholder="Contato" maxlength="13" style="max-width:120px" />
								</div>
							</div>
						</td>
						<td>
							<div class="control-group">
								<div class="controls">
									<span class="help-inline">E-mail</span>
								</div>
							</div>
						</td>
						<td colspan="3">				
							<div class="control-group">
								<div class="controls">
									<input type="email" class="form-control input_Vazio" name="email" value="<?php echo $this->session->flashdata('email'); ?>" aria-describedby="basic-addon1" placeholder="Email" maxlength="13" />
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<div class="controls">
									<span class="help-inline">CNPJ</span>
								</div>
							</div>
						</td>
						<td colspan="3">				
							<div class="control-group">
								<div class="controls">
									<input type="email" class="form-control input_Vazio" name="cnpj" value="<?php echo $this->session->flashdata('cnpj'); ?>" aria-describedby="basic-addon1" placeholder="CNPJ" maxlength="13" style="max-width:300px"/>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
	<!-- ////////////////////////////////// ENDEREÇO DE FATURAMENTO //////////////////////////////////////////////////////////-->
<tr>
<td>
<table class="table table-bordered">
		<tbody>
			<tr>
				<td>
					<table width="98%" style="margin-top: 10px">
					<!-- ////////////////////////////////// CEP ////////////////////////////////// -->
						<tr>
							<td colspan="3">
								<div class="control-group">
									<div class="controls">
										<span class="help-inline"><b>ENDEREÇO FATURAMENTO<b></span>
									</div>
								</div>
							</td>
							<td colspan="3">
								<div class="input-group">
									<span class="input-group-addon">CEP</span>
									<input type="text" class="form-control input_Vazio" name="cep" value="<?php echo $this->session->flashdata('cep'); ?>" aria-describedby="basic-addon1" style="max-width:95px" placeholder="CEP" maxlength="9"/>
								</div>
							</td>
						</tr>
					<!-- ////////////////////////////////// ENDEREÇO ////////////////////////////////// -->
						<tr>
							<td>
								<div class="control-group">
									<div class="controls">
										<span class="help-inline">Rua</span>
									</div>
								</div>
							</td>
								<td colspan="3">
									<div class="control-group">
										<div class="controls">
											<input type="text" class="form-control input_Vazio" name="rua" value="<?php echo $this->session->flashdata('rua'); ?>" aria-describedby="basic-addon1" size="50" placeholder="Endereço" maxlength="100"/>
										</div>
									</div>
								</td>
								<td>
									<div class="control-group">
										<div class="controls">
											<span class="help-inline">Número</span>
										</div>
									</div>
								</td>
								<td>
									<div class="control-group">
										<div class="controls">
											<input type="text" class="form-control input_Vazio" name="numero" value="<?php echo $this->session->flashdata('numero'); ?>" aria-describedby="basic-addon1" placeholder="Nº" maxlength="6" style="max-width:80px" />
										</div>
									</div>
								</td>
		
						</tr>
						<tr>
								<td>
									<div class="control-group">
										<div class="controls">
											<span class="help-inline">Complemento</span>
										</div>
									</div>
								</td>
								<td>
									<div class="control-group">
										<div class="controls">
											<input type="text" class="form-control input_Vazio" name="complemento" value="<?php echo $this->session->flashdata('complemento'); ?>" aria-describedby="basic-addon1" style="max-width:150px" placeholder="Complemento" maxlength="30"/>
										</div>
									</div>
								</td>
								<td>							
									<div class="control-group">
										<div class="controls">
											<span class="help-inline">Cidade</span>
										</div>
									</div>
								</td>
								<td>
									<div class="control-group">
										<div class="controls">
											<input type="text" class="form-control input_Vazio" name="cidade" value="<?php echo $this->session->flashdata('cidade'); ?>" aria-describedby="basic-addon1" size="30" placeholder="Cidade" maxlength="30"/>
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
											<select class="form-control input_Vazio" name="uf" placeholder="UF"  style="max-width:115px">
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
					</table>
				</td>
			</tr>
		</tbody>
</table>	
</td>
</tr>
</tbody>
</table>

	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Editar Unidade Utilizadora', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-unidade_Utilizadora', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>