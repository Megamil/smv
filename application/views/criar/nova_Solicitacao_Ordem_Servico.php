<?php echo form_fieldset("Nova Solicitação de Ordem de Serviço"); 
$form = array('name' => 'form'); 
echo form_open("criar/nova_Solicitacao_Ordem_Servico",$form); ?>

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
									<span class="help-inline">Número solicitação</span>
									</div>
								</div>
			
								<div class="control-group">
									<div class="controls">
									<input type="text" class="form-control input_Vazio" name="id_solicitaordemservico" aria-describedby="basic-addon1" disabled/>
									</div>
								</div>
							</td>
							
							<td colspan="3">
								<div class="control-group">
									<div class="controls">
									<span class="help-inline">Unidade</span>
									</div>
								</div>
			
								<div class="control-group">
									<div class="controls input-group">
										<select class="form-control input_Vazio" name="unidadesolicitante" placeholder="Unidade Solicitante">
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
										<input type="text" class="form-control input_Vazio" name="prefixo" aria-describedby="basic-addon1" placeholder="Prefixo" maxlength="10" size="15"/>
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
									<input type="text" class="form-control input_Vazio" name="modelo" aria-describedby="basic-addon1" size="50" placeholder="Modelo" disabled />
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
									<input type="text" class="form-control input_Vazio" name="marca" aria-describedby="basic-addon1" size="20" placeholder="Marca" disabled />
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
									<input type="text" class="form-control input_Vazio" name="tipo" aria-describedby="basic-addon1" size="20" placeholder="Tipo" disabled />
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
										<span class="help-inline">Placa</span>
										</div>
									</div>
			
									<div class="control-group">
										<div class="controls">
										<input type="text" class="form-control input_Vazio" name="placa" aria-describedby="basic-addon1" size="10" disabled />
										</div>
									</div>
								</td>
							
								<td valign="top">
									<div class="control-group">
										<div class="controls">
											<span class="help-inline">KM</span>

										</div>
									</div>
									
									<div class="control-group">
										<div class="controls">
											<input type="text" class="form-control input_Vazio" name="km" aria-describedby="basic-addon1" size="10" />
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
											<span class="help-inline">Defeito apresentado</span>
										</div>
									</div>
			
									<div class="control-group">
										<div class="controls">
											<textarea name="defeitoapresentao" class="textarea_Vazio" cols="130" rows="3" placeholder="Defeito apresentado"></textarea>
										</div>
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
								<td valign="middle">
									<div class="control-group">
										<div class="controls">
											<span class="help-inline">Estado</span>
										</div>
									</div>
			
									<div class="control-group">
										<div class="controls">
											<select class="form-control input_Vazio" name="id_estadoordemservico" placeholder="Unidade de medida">
											<option>Selecione...</option>
												<?php 
													foreach ($pack['estadoordemservico'] as $estadoordemservico) {
														if($this->session->flashdata('estadoordemservico') == $estadoordemservico->id_estadoordemservico){
															echo '<option selected value="'.$estadoordemservico->id_estadoordemservico.'">'.$estadoordemservico->estadoordemservico.'</option>';
														} else {
															echo '<option value="'.$estadoordemservico->id_estadoordemservico.'">'.$estadoordemservico->estadoordemservico.'</option>';
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
			</tr>
			</tbody>
	</table>



	

	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Criar Solicitação de Ordem de Serviço', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/ordemservico-solicita_Ordem_Servico', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

	<?php echo anchor('main/redirecionar/ordemservico-ordem_Servico', '<div class="btn btn-info pull-center"> Gerar Ordem de Serviço </div>')?>

<?php echo form_fieldset_close(); ?>