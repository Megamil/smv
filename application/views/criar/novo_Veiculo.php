<?php echo form_fieldset("Novo Veiculo"); 
$form = array('name' => 'form'); 
echo form_open("criar/novo_Veiculo",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
	<div id="msgemail"></div> <!--Aviso de e-mail incorreto-->
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
			<tbody>
				<tr>
					<td align="left">

					<table border="0">	
						<tr>
							<td>
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Prefixo</span>
									</div>
								</div>
			
								<div class="control-group">
									<div class="controls input-group">
										<span class="input-group-addon" id="basic-addon1">DT- </span>
										<input type="text" class="form-control input_Vazio" name="prefixo" value="<?php echo $this->session->flashdata('prefixoveiculo'); ?>" aria-describedby="basic-addon1" placeholder="Prefixo" maxlength="10" size="15"/>
									</div>

								</div>
							</td>

							<td>
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Modelo</span>
									</div>
								</div>
			
								<div class="control-group">
									<div class="controls">
									<input type="text" class="form-control input_Vazio" name="modelo" value="<?php echo $this->session->flashdata('modeloveiculo'); ?>" aria-describedby="basic-addon1" size="50" placeholder="Modelo" maxlength="50" />
									</div>
								</div>
							</td>
			
							<td>
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Marca</span>
									</div>
								</div>
			
								<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control input_Vazio" name="marca" value="<?php echo $this->session->flashdata('marcaveiculo'); ?>" aria-describedby="basic-addon1" size="20" placeholder="Marca" maxlength="20" />
								</div>
								</div>
							</td>
			
							<td>
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Tipo</span>
									</div>
								</div>
			
								<div class="control-group">
									<div class="controls">
									<input type="text" class="form-control input_Vazio" name="tipo" value="<?php echo $this->session->flashdata('tipoveiculo'); ?>" aria-describedby="basic-addon1" size="20" placeholder="Tipo" maxlength="30" />
									</div>
								</div>
							</td>
						</tr>
					</table>
					</td>
				</tr>
					<!-- Segunda Linha ta tabela -->
				<tr>
					<td>
					<table border="0">
						<tr>
							<td valign="top">
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Ano Fab/Ano Mod.</span>
									</div>
								</div>
			
								<div class="control-group">
									<div class="controls">
									<input type="text" class="form-control input_Vazio" maxlength="4" name="anomodelo" onkeypress='return numero(event)' value="<?php echo $this->session->flashdata('anofabmodveiculo'); ?>" aria-describedby="basic-addon1" size="10" placeholder="Ano" maxlength="9" />
									</div>
								</div>
							</td>
							<td width="30"></td>
							<td valign="top">
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Placa</span>
									</div>
								</div>
			
								<div class="control-group">
									<div class="controls">
									<input type="text" class="form-control input_Vazio" id="placaValidar" name="placa" value="<?php echo $this->session->flashdata('placaveiculo'); ?>" aria-describedby="basic-addon1" size="10" placeholder="Placa" maxlength="9" />
									</div>
								</div>
							</td>
							<td width="30"></td>
							<td valign="top">
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Chassis</span>
									</div>
								</div>
			
								<div class="control-group">
									<div class="controls">
									<input type="text" class="form-control input_Vazio" name="chassis" value="<?php echo $this->session->flashdata('chassisveiculo'); ?>" aria-describedby="basic-addon1" size="60" placeholder="Chassis" maxlength="60" />
								</div>
								</div>
							</td>
						</tr>
					</table>
					</td>
				</tr>
						<!--Terceira Linha da tabea -->
				<tr>
					<td>
					<table border="0">
						<tr align="left">
							<td valign="top">
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Número do Motor</span>
									</div>
								</div>
			
								<div class="control-group">
									<div class="controls">
									<input type="text" class="form-control" name="numeromotor" value="<?php echo $this->session->flashdata('numeromotorveiculo'); ?>" aria-describedby="basic-addon1" size="19" placeholder="Nº Motor" maxlength="16" />
									</div>
								</div>
							</td>
							<td width="30"></td>
							<td valign="top">
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Detalhes do Motor</span>
									</div>
								</div>
			
								<div class="control-group">
									<div class="controls">
									<input type="text" class="form-control input_Vazio" name="detalhemotor" value="<?php echo $this->session->flashdata('detalhemotorveiculo'); ?>" aria-describedby="basic-addon1" size="25" placeholder="Detalhe Motor" maxlength="50" />
										</div>
									</div>
								</td>
							<td width="30"></td>
							<td valign="top">
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Combustível</span>
									</div>
								</div>
	
								<div class="control-group">
									<div class="controls">
					
									<select class="form-control input_Vazio" placeholder="Combustível" style="min-width:500px" name="id_combustivel" value="<?php echo $this->session->flashdata('combustivel'); ?>">

									<option>Selecione...</option>

									<?php 

										foreach ($pack['combustivel'] as $combustivel) {
								
											if($this->session->flashdata('combustivel') == $combustivel->id_combustivel){
												echo '<option selected value="'.$combustivel->id_combustivel.'">'.$combustivel->combustivel.'</option>';
											} else {
												echo '<option value="'.$combustivel->id_combustivel.'">'.$combustivel->combustivel.'</option>';
											}
							
										}

									?>

									</select>
								</div>

							</td>
						</tr>
					</table>
					</td>
				</tr>
					<!-- Quarta Linha da Tabela -->
				<tr>
					<td>
					<table border="0">
						<tr align="left">
							<td valign="top">
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Unidade de Serviço</span>
									</div>
								</div>
	
								<div class="control-group">
									<div class="controls">
					
									<select class="form-control input_Vazio" placeholder="Unidade de saúde" style="min-width:500px" name="id_unidadeservicosaude" value="<?php echo $this->session->flashdata('unidadesaude'); ?>">

									<option>Selecione...</option>

									<?php 

										foreach ($pack['unidadesaude'] as $unidadesaude) {
								
											if($this->session->flashdata('unidadesaude') == $unidadesaude->id_unidadesaude){
												echo '<option selected value="'.$unidadesaude->id_unidadesaude.'">'.$unidadesaude->unidadesaude.'</option>';
											} else {
												echo '<option value="'.$unidadesaude->id_unidadesaude.'">'.$unidadesaude->unidadesaude.'</option>';
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
					<!-- Quinta linha da tabela -->
				<tr>
					<td>
					<table border="0">
						<tr align="left">
							<td valign="middle">
								<span class="help-inline">Estado: <div class="span3"></div></span>
							
									<?php 

										foreach ($pack['estadoveiculo'] as $estadoveiculo) {
					
											if($estadoveiculo->id_estadoveiculo == $this->session->flashdata('estadoveiculo')) {
												echo '<input type="radio" name="id_estadoveiculo" aria-describedby="basic-addon1" value="'.$estadoveiculo->id_estadoveiculo.'" checked /> '.$estadoveiculo->estadoveiculo.' ';
											} else {
												echo '<input type="radio" name="id_estadoveiculo" aria-describedby="basic-addon1" value="'.$estadoveiculo->id_estadoveiculo.'" checked /> '.$estadoveiculo->estadoveiculo.' ';
											}						
										}

			 						?>
							</td>
							<td width="30"></td>
							<td valign="top">
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Observações</span>
									</div>
								</div>

								<div class="control-group">
									<div class="controls">
									<input type="text" class="form-control" name="observ" value="<?php echo $this->session->flashdata('observveiculo'); ?>" aria-describedby="basic-addon1" size="80" placeholder="Observações" maxlength="300" />
									</div>
								</div>
							</td>
			
						</tr>
					</table>
					</td>
				</tr>
			</tr>
			</tbody>
	</table>


	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Criar Veiculo', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-veiculo', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>