<?php echo form_fieldset("Editar Veiculo"); 
$form = array('name' => 'form');
echo form_open("edicoes/editando_Veiculo  ",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
<!-- Previne que o usuário altere o nome ou o código para um já existente -->
<?php echo form_hidden('preOriginal',$pack['veiculo']->row()->prefixo); ?>

<?php echo form_hidden('id_veiculo',$pack['veiculo']->row()->id_veiculo); ?>

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
										<input type="text" class="form-control input_Vazio" name="prefixo" value="<?php echo $pack['veiculo']->row()->prefixo; ?>" aria-describedby="basic-addon1" placeholder="Prefixo" maxlength="10" size="15"/>
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
									<input type="text" class="form-control input_Vazio" name="modelo" value="<?php echo $pack['veiculo']->row()->modelo; ?>" aria-describedby="basic-addon1" size="50" placeholder="Modelo" maxlength="50" />
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
									<input type="text" class="form-control input_Vazio" name="marca" value="<?php echo $pack['veiculo']->row()->marca; ?>" aria-describedby="basic-addon1" size="20" placeholder="Marca" maxlength="20" />
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
									<input type="text" class="form-control input_Vazio" name="tipo" value="<?php echo $pack['veiculo']->row()->tipo; ?>" aria-describedby="basic-addon1" size="20" placeholder="Tipo" maxlength="30" />
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
									<input type="text" class="form-control input_Vazio" maxlength="4" name="anomodelo" onkeypress='return numero(event)' value="<?php echo $pack['veiculo']->row()->anomodelo; ?>" aria-describedby="basic-addon1" size="10" placeholder="Ano" maxlength="9" />
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
									<input type="text" class="form-control input_Vazio" id="placaValidar" name="placa" value="<?php echo $pack['veiculo']->row()->placa; ?>" aria-describedby="basic-addon1" size="10" placeholder="Placa" maxlength="9" />
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
									<input type="text" class="form-control input_Vazio" name="chassis" value="<?php echo $pack['veiculo']->row()->chassis; ?>" aria-describedby="basic-addon1" size="60" placeholder="Chassis" maxlength="60" />
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
									<input type="text" class="form-control" name="numeromotor" value="<?php echo $pack['veiculo']->row()->numeromotor; ?>" aria-describedby="basic-addon1" size="19" placeholder="Nº Motor" maxlength="16" />
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
									<input type="text" class="form-control" name="detalhemotor" value="<?php echo $pack['veiculo']->row()->detalhemotor; ?>" aria-describedby="basic-addon1" size="25" placeholder="Detalhe Motor" maxlength="50" />
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
					
									<select class="form-control input_Vazio" placeholder="Combustível" style="min-width:500px" name="id_combustivel" value="<?php echo $pack['veiculo']->row()->id_combustivel; ?>">

									<option>Selecione...</option>

									<?php 

										foreach ($pack['combustivel'] as $combustivel) {
								
											if($pack['veiculo']->row()->id_combustivel == $combustivel->id_combustivel){
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
					
									<select class="form-control input_Vazio" placeholder="Unidade de saúde" style="min-width:500px" name="id_unidadeservicosaude" value="<?php echo $pack['veiculo']->row()->id_unidadeservicosaude; ?>">

									<option>Selecione...</option>

									<?php 

										foreach ($pack['unidadesaude'] as $unidadesaude) {
								
											if($pack['veiculo']->row()->id_unidadeservicosaude == $unidadesaude->id_unidadesaude){
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
					
											if($estadoveiculo->id_estadoveiculo == $pack['veiculo']->row()->id_estadoveiculo) {
												echo '<input type="radio" name="id_estadoveiculo" aria-describedby="basic-addon1" value="'.$estadoveiculo->id_estadoveiculo.'" checked /> '.$estadoveiculo->estadoveiculo.' ';
											} else {
												echo '<input type="radio" name="id_estadoveiculo" aria-describedby="basic-addon1" value="'.$estadoveiculo->id_estadoveiculo.'"/> '.$estadoveiculo->estadoveiculo.' ';
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
									<input type="text" class="form-control" name="observ" value="<?php echo $pack['veiculo']->row()->observ ?>" aria-describedby="basic-addon1" size="80" placeholder="Observações" maxlength="300" />
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

	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Salvar Edição', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-veiculo', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>