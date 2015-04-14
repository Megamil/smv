<style> /*Estilo criado apenas para a tabela com a lista de peças*/
	#listapecas{
		border-spacing: 0;
 		border: 1px solid black;
  		margin-bottom: 10px;
  		vertical-align: middle;
  		padding: 5px;
  		position: static;
  		float: none;
  		width: 100%;
  	}
  	#listapecas th{
	text-align: center;
	border: 1px solid black;
	}

	#listapecas td{
	border: 1px solid black;
	}
</style>

<table border="1">
	<tr>
		<td colspan="6" align="right">
			<input type="button" class="btn btn-info no-print" name="imprimir" value="Imprimir" onclick="window.print();">
		</td>
	</tr>
	
		<tbody>
			<tr><td>
				<tr>
					<td rowspan="5" align="center" valign="top"> <img id="img" weight="150" width="150" src="/smv/style/img/brasaopmg.jpg"> </img></td>
					<td colspan="4" align="center" height="7"><font size="2"><label>PREFEITURA MUNICIPAL DE GUARULHOS<br>SECRETARIA DA SAÚDE</label></font></td>
				</tr>
				
				<tr>
					<td colspan="4" align="center" valign="top" height="7"><font size="1"><label name="departamento" placeholder="Departamento">Departamento</label></font></td>
				</tr>
				
				<tr>
					<td colspan="4" align="center" valign="top"><font size="1"><label name="divisao" placeholder="Divisão">Divisão</label></font></td>
				</tr>
				
				<tr>
					<td colspan="4" align="center" valign="top"><font size="1"><label name="secao" placeholder="Seção">Seção</label></font></td>
				</tr>
				
				<tr>
					<td colspan="4" align="center" valign="top"><font size="1"><label name="setor" placeholder="Setor">Setor</label></font></td>
				</tr>
							
				<tr>
					<td><span class="span2">VISTORIA</span></td>
					<td colspan="2" align="right"><span class="span2">Ordem de serviço nº: </span></td>
					<td><input type="text" class="form-control" placeholder="OS nº" style="max-width:150px"></td>
				</tr>
			</td></tr>
			
			<tr>
				<table border="1">
					<tr>
						<td>
							<table>
								<tr>
									<td colspan="4" align="left"><span class="span2">Dados do Veículo</span></td>
								</tr>
								<tr>
									<td>
										<div class="form-group">
											<div class="form-controls">
												<span class="span2">Modelo</span>
											</div>	
										</div>
										
										<div class="form-group">
											<div class="form-controls">
												<input type="text" class="form-control" name="modelo" placeholder="Modelo" >
											</div>	
										</div>
									</td>
									
									<td>
										<div class="form-group">
											<div class="form-controls">
												<span class="span2">Prefixo</span>
											</div>	
										</div>
										
										<div class="form-group">
											<div class="form-controls input-group">
												<span class="input-group-addon">DT- </span>
												<input type="text" class="form-control" name="prefixo" placeholder="Prefixo" style="max-width:100px" >
											</div>	
										</div>
									</td>
									
									<td>
										<div class="form-group">
											<div class="form-controls">
												<span class="span2">KM</span>
											</div>	
										</div>
										
										<div class="form-group">
											<div class="form-controls">
												<input type="text" class="form-control" name="km" placeholder="KM" style="max-width:100px" />
											</div>	
										</div>
									</td>
									
									<td>
										<div class="form-group">
											<div class="form-controls">
												<span class="span2">Data</span>
											</div>	
										</div>
										
										<div class="form-group">
											<div class="form-controls">
												<input type="date" class="form-control dataValidar"  style="max-width:100px" name="data" placeholder="Data" />
											</div>	
										</div>
									</td>
								</tr>
											
								<tr>
									<td colspan="4" valign="top">
										<div class="form-group">
											<div class="form-controls">
												<span class="span2">Unidade</span>
											</div>	
										</div>
										
										<div class="form-group">
											<div class="form-controls">
												<input type="text" class="form-control" name="unidade" placeholder="Unidade Cliente" >
											</div>	
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</tr>
			
			<tr><td>
				<tr>
					<td colspan="4">Vistoria</td>
				</tr>
				<tr>
					<td>
						<table id="listapecas">
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
					
					<td rowspan="3" colspan="3">
						<img src="" alt="Foto Lataria dos Carros" />
					</td>
				</tr>
			
					<tr>
						<td>
							<div class="form-group">
								<div class="form-controls">
									<span class="span2">Número da Bateria</span>
								</div>	
							</div>

							<div class="form-group">
								<div class="form-controls">
									<input type="text" class="form-control" name="numerobateria" placeholder="Nº da Bateria" >
								</div>	
							</div>
						</td>
					</tr>
					
					<tr>
						<td rowspan="2">
							<img src="" alt="Nível Tanque Combustível" />
						</td>
					</tr>
					
					<tr>
						<td colspan="3" valign="bottom">
							<div class="form-group">
								<div class="form-controls">
									<span class="span2">Responsável pela vistoria</span>
								</div>	
							</div>
						</td>
					</tr>
					
					<tr>
						<td></td>
						
						<td>
							<div class="form-group">
								<div class="form-controls">
									<span>Data:</span><input type="text" class="form-control dataValidar" name="datavistoria" placeholder="Data" style="max-width:100px">
								</div>	
							</div>
						</td>
						
						<td colspan="2">
							<div class="form-group">
								<div class="form-controls">
									<span>Nome:</span><input type="text" class="form-control" name="datavistoria" placeholder="Nome" style="max-width:300px">
								</div>	
							</div>
						</td>	
					</tr>
			</td></tr>
			
			<tr>
				<td colspan="4">
					<div class="form-group">
						<div class="form-controls">
							<span class="span2">Defeito Apresentado</span>
						</div>	
					</div>

					<div class="form-group">
						<div class="form-controls">
							<textarea type="text" class="form-control" name="defeitoapresentado" placeholder="Defeito apresentado"></textarea>
						</div>	
					</div>
				</td>
			
			</tr>
			
			<tr>
				<td colspan="4">
					<div class="form-group">
						<div class="form-controls">
							<span class="span2">Observações</span>
						</div>	
					</div>

					<div class="form-group">
						<div class="form-controls">
							<textarea type="text" class="form-control" name="defeitoapresentado" placeholder="Observações"></textarea>
						</div>	
					</div>
				</td>
			</tr>
		</tbody>
</table>