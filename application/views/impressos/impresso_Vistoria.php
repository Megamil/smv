<link rel="stylesheet" href="<?php echo base_url(); ?>style/css/impressos.css"></link>

<table border="0" class="page">
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="98.6%">
				<!-- /////////////////////////////////BOTÃO DE IMPRIMIR O FORMULÁRIO//////////////////////////////// -->
				<tr>
					<td align="right" colspan="4">
						<button type="button" class="btn btn-info no-print" name="imprimir" id="imprimir">Imprimir</button>
					</td>
				</tr>
				<!-- /////////////////////////////////LINHA DO CABEÇALHO DO FORMULÁRIO//////////////////////////////// -->
				<tr>
					<tr>
						<td rowspan="2" align="center" valign="top" width="180">
							<img id="img" width="150" src="/smv/style/img/brasaopmg.jpg" /></td>
						<td colspan="3" align="center">
							<label>PREFEITURA MUNICIPAL DE GUARULHOS<br>SECRETARIA DA SAÚDE</label></td>
					</tr>
						
					<tr>
						<td colspan="3" align="center" valign="top">
						<font size="1px"><label name="departamento">Departamento</label></font><br />
						<font size="1px"><label name="divisao">Divisão</label></font><br />
						<font size="1px"><label name="secao">Seção</label></font><br />
						<font size="1px"><label name="setor">Setor</label></font>
						</td>
					</tr>
				</tr>
				<!-- /////////////////////////////////LINHA DO SUBTITULO DO FORMULÁRIO//////////////////////////////// -->
				<tr>
					<td><span>VISTORIA</span></td>
					
					<td align="right" colspan="2">
						<div>
							<span>Ordem de serviço nº: </span>
						</div>
					</td>
					<td align="left" width="180">
						<div>
							<label name="ordemservico">OS Nº</label>
						</div>
					</td>
				</tr>
			</table>
				<fieldset class="borda">
					<legend class="borda">Dados do Veículo</legend>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td valign="top" width="300px">
										<span class="span2">Modelo</span>
											<br />
										<label name="modelo">Modelo</label>
									</td>
									
									<td valign="top" width="180">
										<span class="span2">Prefixo</span>
											<br />
										<label name="dt">DT- </label>
										<label name="prefixo">prefixo</label>
									</td>
												
									<td valign="top" width="180">
										<span class="span2">KM</span>
											<br />
										<label name="km">KM</label>
									</td>
													
									<td valign="top" width="180">
										<span class="span2">Data</span>
											<br />
										<label name="data">Data</label>
									</td>
								</tr>
								<tr>
									<td colspan="4">
										<span class="span2">Unidade</span>
											<br />
										<label name="unidade">Unidade</label>
									</td>
								</tr>
							</table>
				</fieldset>

				<fieldset class="borda">
					<legend class="borda">Vistoria</legend>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td>
										<table id="listapecas" border="0" cellspacing="0" cellpadding="0" width="100%">
											<tr>
												<th>S</th>
												<th>N</th>
												<th>Descrição</th>
											</tr>
															
											<tbody>
												<tr>
													<td width="20px"></td>
													<td width="20px"></td>
													<td><span class="span2">Estepe</span></td>
												</tr>
																	
												<tr>
													<td></td>
													<td></td>
													<td><span class="span2">Triângulo</span></td>
												</tr>
																	
												<tr>
													<td></td>
													<td></td>
													<td><span class="span2">Extintor</span></td>
												</tr>
																
												<tr>
													<td></td>
													<td></td>
													<td><span class="span2">Macaco</span></td>
												</tr>
															
												<tr>
													<td></td>
													<td></td>
													<td><span class="span2">Chave de roda</span></td>
												</tr>
																	
												<tr>
													<td></td>
													<td></td>
													<td><span class="span2">Documentos</span></td>
												</tr>
																	
												<tr>
													<td></td>
													<td></td>
													<td><span class="span2">Tacógrafo</span></td>
												</tr>
																	
												<tr>
													<td></td>
													<td></td>
													<td>&nbsp;</td>
												</tr>
																	
												<tr>
													<td></td>
													<td></td>
													<td>&nbsp;</td>
												</tr>
																	
											</tbody>
										</table>
									</td>
													
									<td rowspan="3" colspan="3" valign="top" align="center">
										<img id="img" weight="410" width="450" src="/smv/style/img/lataria.png" />
									</td>
								</tr>
											
								<tr>
									<td width="30%">
										<fieldset class="borda">
											<legend class="borda">Número da Bateria</legend>
												<table>
													<tr>
														<td valign="middle">
															<label name="numbateria">Nº da bateria</label>
														</td>
													</tr>
												</table>
										</fieldset>
									</td>
								</tr>
													
								<tr>
									<td rowspan="3" valign="top" align="center">
										<img id="img" weight="150" width="130" src="/smv/style/img/medidorcombustivel.png" />
									</td>
								</tr>
								
								<tr>
									<td>
										<fieldset class="borda">
											<legend class="borda">Responsável pela vistoria</legend>
												<table width="95%">
													<tr>
														<td>
															<span>Data:</span>
																<br />
															<label name="dataresponsavel">Data</label>
														</td>
																			
														<td>
															<span>Nome:</span>
																<br />
															<label name="nomeresponsavel">Nome do Responsável</label>
														</td>	
													</tr>
												</table>
										</fieldset>
									</td>
								</tr>
							</table>
				</fieldset>
					
				<fieldset class="borda">
					<legend class="borda">Defeito Apresentado</legend>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td>
										<label name="defeito">Defeito Apresentado</label>
									</td>
								</tr>
							</table>
				</fieldset>
					
				<fieldset class="borda">
					<legend class="borda">Observações</legend>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td>
										<label name="observacoes">Observações</label>
									</td>
								</tr>
							</table>
				</fieldset>
			</table>
		</td>
	</tr>
</table>