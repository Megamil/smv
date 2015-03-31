<?php echo form_fieldset("Nova Unidade Utilizadora"); 
$form = array('name' => 'form'); 
echo form_open("criar/nova_Unidade_Utilizadora",$form); ?>

<!--Vide Página 22-->

	<div class="erro_Campo_Vazio" ></div>
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
						<span class="help-inline">Departamento:</span>
					</div>
				</div>
			</td>
			<td>
				
				<select class="form-control input_Vazio" name="id_depto" placeholder="Departamento"  style="max-width:100%" >
					<option>Selecione...</option>
					<?php 
						foreach ($pack['depto'] as $depto) {
							if($this->session->flashdata('depto') == $depto->coddepto){
								echo '<option selected value="'.$depto->id_depto.'"> Código: '.$depto->coddepto.' Departamento: '.$depto->depto.'</option>';
							} else {
								echo '<option value="'.$depto->id_depto.'">Código: '.$depto->coddepto.' Departamento: '.$depto->depto.'</option>';
							}
						}
					?>
				</select>
			</td>
		</tr>

	<!-- ////////////////////////////////// DIVISÃO ////////////////////////////////// -->
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Divisão:</span>
					</div>
				</div>
			</td>
			<td>
				
				<select class="form-control" name="id_divisao" placeholder="Divisão"  style="max-width:100%" >
					<option>Selecione...</option>
					<?php 
						foreach ($pack['divisao'] as $divisao) {
							if($this->session->flashdata('divisao') == $divisao->coddivisao){
								echo '<option selected value="'.$divisao->id_divisao.'"> Código: '.$divisao->coddivisao.' Divisão: '.$divisao->divisao.'</option>';
							} else {
								echo '<option value="'.$divisao->id_divisao.'">Código: '.$divisao->coddivisao.' Divisão: '.$divisao->divisao.'</option>';
							}
						}
					?>
				</select>
			</td>
		</tr>
	<!-- ////////////////////////////////// SEÇÃO ////////////////////////////////// -->
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Seção:</span>
					</div>
				</div>
			</td>
			<td>
				
				<select class="form-control" name="id_secao" placeholder="Seção"  style="max-width:100%" >
					<option>Selecione...</option>
					<?php 
						foreach ($pack['secao'] as $secao) {
							if($this->session->flashdata('secao') == $secao->codsecao){
								echo '<option selected value="'.$secao->id_secao.'"> Código: '.$secao->codsecao.' Seção: '.$secao->secao.'</option>';
							} else {
								echo '<option value="'.$secao->id_secao.'">Código: '.$secao->codsecao.' Seção: '.$secao->secao.'</option>';
							}
						}
					?>
				</select>
			</td>
		</tr>
	<!-- ////////////////////////////////// SETOR ////////////////////////////////// -->
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Setor:</span>
					</div>
				</div>
			</td>
			<td>
				
				<select class="form-control" name="id_setor" placeholder="Setor"  style="max-width:100%" >
					<option>Selecione...</option>
					<?php 
						foreach ($pack['setor'] as $setor) {
							if($this->session->flashdata('setor') == $setor->codsetor){
								echo '<option selected value="'.$setor->id_setor.'"> Código: '.$setor->codsetor.' Setor: '.$setor->setor.'</option>';
							} else {
								echo '<option value="'.$setor->id_setor.'">Código: '.$setor->codsetor.' Setor: '.$setor->setor.'</option>';
							}
						}
					?>
				</select>
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
								<input type="text" class="form-control input_Vazio cepValidar" name="cep" value="<?php echo $this->session->flashdata('cep'); ?>" aria-describedby="basic-addon1" style="max-width:95px" placeholder="CEP" maxlength="9"/>
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
									<input type="text" class="form-control" name="complemento" value="<?php echo $this->session->flashdata('complemento'); ?>" aria-describedby="basic-addon1" style="max-width:150px" placeholder="Complemento" maxlength="30"/>
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
									<select class="form-control input_Vazio" name="uf" placeholder="UF"  style="max-width:150px" >
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
									<input type="text" class="form-control input_Vazio telefoneValidar" name="telefone" value="<?php echo $this->session->flashdata('telefone'); ?>" aria-describedby="basic-addon1" placeholder="Telefone" maxlength="14" style="max-width:130px" />
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
									<input type="text" class="form-control" name="ramal" onkeypress="return Numero(event)" value="<?php echo $this->session->flashdata('ramal'); ?>" aria-describedby="basic-addon1" placeholder="Ramal" maxlength="4" style="max-width:70px"/>
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
									<input type="text" class="form-control telefoneValidar" name="fax" value="<?php echo $this->session->flashdata('fax'); ?>" aria-describedby="basic-addon1" placeholder="Fax" maxlength="13" style="max-width:120px" />
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
									<input type="email" class="form-control input_Vazio" name="email" value="<?php echo $this->session->flashdata('email'); ?>" aria-describedby="basic-addon1" placeholder="Email" maxlength="130" />
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
									<input type="text" class="form-control input_Vazio" name="cnpj" id="cnpjValidar" value="<?php echo $this->session->flashdata('cnpj'); ?>" aria-describedby="basic-addon1" placeholder="CNPJ" maxlength="13" style="max-width:300px"/>
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
									<input type="text" class="form-control input_Vazio cepValidar" name="cepfaturamento" value="<?php echo $this->session->flashdata('cep'); ?>" aria-describedby="basic-addon1" style="max-width:95px" placeholder="CEP" maxlength="9"/>
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
											<input type="text" class="form-control input_Vazio" name="ruafaturamento" value="<?php echo $this->session->flashdata('rua'); ?>" aria-describedby="basic-addon1" size="50" placeholder="Endereço" maxlength="100"/>
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
											<input type="text" class="form-control input_Vazio" name="numerofaturamento" value="<?php echo $this->session->flashdata('numero'); ?>" aria-describedby="basic-addon1" placeholder="Nº" maxlength="6" style="max-width:80px" />
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
											<input type="text" class="form-control" name="complementofaturamento" value="<?php echo $this->session->flashdata('complemento'); ?>" aria-describedby="basic-addon1" style="max-width:150px" placeholder="Complemento" maxlength="30"/>
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
											<input type="text" class="form-control input_Vazio" name="cidadefaturamento" value="<?php echo $this->session->flashdata('cidade'); ?>" aria-describedby="basic-addon1" size="30" placeholder="Cidade" maxlength="30"/>
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
											<select class="form-control input_Vazio" name="uffaturamento" placeholder="UF"  style="max-width:150px">
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

	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Criar Unidade Utilizadora', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-unidade_Utilizadora', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>