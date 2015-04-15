<style>
#listapecas{
	vertical-align: top;
	padding: 0;
	border-top: 1px solid;
	border-left: 1px solid;
	border-bottom: 1px solid;
	border-right: 1px solid;
	border-spacing:0;
}
#listapecas th{
	text-align: center;
	vertical-align: top;
	padding: 0;
	border-top: 1px solid;
	border-left: 1px solid;
	border-bottom: 1px solid;
	border-right: 1px solid;
	border-spacing:0;
}
#listapecas td{
	vertical-align: top;
	padding: 0;
	border-top: 1px solid;
	border-left: 1px solid;
	border-bottom: 1px solid;
	border-right: 1px solid;
	border-spacing:0;
}

</style>

<table border="0" width="90%">
<tr>
<td>
<form>
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<!-- /////////////////////////////////BOTÃO DE IMPRIMIR O FORMULÁRIO//////////////////////////////// -->
		<tr>
			<td align="right" colspan="4">
				<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
			</td>
		</tr>
		<!-- /////////////////////////////////LINHA DO CABEÇALHO DO FORMULÁRIO//////////////////////////////// -->
		<tr>
			<tr>
				<td rowspan="2" align="center" valign="middle">
					<img id="img" weight="150" width="150" src="/smv/style/img/brasaopmg.jpg" /></td>
				<td colspan="4" align="center">
					<font size="2"><label>PREFEITURA MUNICIPAL DE GUARULHOS<br>SECRETARIA DA SAÚDE</label></font></td>
			</tr>
				
			<tr>
				<td colspan="4" align="center" valign="top">
				<font size="1px"><label name="departamento">Departamento</label></font><br />
				<font size="1px"><label name="divisao">Divisão</label></font><br />
				<font size="1px"><label name="secao">Seção</label></font><br />
				<font size="1px"><label name="setor">Setor</label></font>
				</td>
			</tr>
		</tr>
		<!-- /////////////////////////////////LINHA DO SUBTITULO DO FORMULÁRIO//////////////////////////////// -->
		<tr>
			<td><span class="span2">VISTORIA</span></td>
				<td colspan="2" align="right">
				<span class="span2">Ordem de serviço nº: </span>
				<input type="text" class="form-control" placeholder="OS nº" style="max-width:150px">
			</td>
		</tr>
	</table>
		<fieldset class="borda">
		<legend class="borda">Dados do Veículo</legend>
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td valign="top" width="300px">
							<div class="form-group form-controls">
								<span class="span2">Modelo</span>
								<input type="text" class="form-control" name="modelo" placeholder="Modelo">
						</td>
						
						<td valign="top">
							<div class="form-group">
								<span class="span2">Prefixo</span>
							<div class="form-controls input-group">
								<span class="input-group-addon">DT- </span>
								<input type="text" class="form-control" name="prefixo" placeholder="Prefixo" style="max-width:100px" >
							</div>	
							</div>
						</td>
									
						<td valign="top">
							<div class="form-group">
								<div class="form-controls">
									<span class="span2">KM</span>
									<input type="text" class="form-control" name="km" placeholder="KM" style="max-width:100px" />
								</div>	
							</div>
						</td>
										
						<td valign="top">
							<div class="form-group">
								<div class="form-controls">
									<span class="span2">Data</span>
										<input type="date" class="form-control dataValidar"  style="max-width:100px" name="data" placeholder="Data" />
								</div>	
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="4">
							<div class="form-group form-controls">
								<span class="span2">Unidade</span>
								<input type="text" class="form-control" name="unidade" placeholder="Unidade Cliente" style="max-width:500px">
							</div>
						</td>
					</tr>
				</table>
		</fieldset>
		
		<fieldset class="borda">
		<legend class="borda">Vistoria</legend>
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<table id="listapecas" cellspacing="0" cellpadding="0" width="90%">
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
									<input type="text" class="form-control" name="numerobateria" placeholder="Nº da Bateria" style="max-width:150px">
								</div>	
							</div>
						</td>
					</tr>
										
					<tr>
						<td rowspan="3" valign="top">
							<img src="" alt="Nível Tanque Combustível" />
						</td>
					</tr>
					
					<tr>
						<td colspan="3" valign="top">
							<span class="span2">Responsável pela vistoria</span>
						</td>
					</tr>
										
					<tr>
						<td>
							<div class="form-group form-controls">
								<span>Data:</span>
								<input type="text" class="form-control dataValidar" name="datavistoria" placeholder="Data" style="max-width:100px">
							</div>
						</td>
											
						<td>
							<div class="form-group form-controls">
								<span>Nome:</span>
								<input type="text" class="form-control" name="datavistoria" placeholder="Nome" style="max-width:250px">
							</div>
						</td>	
					</tr>
					
				</table>
		</fieldset>
		
		<fieldset class="borda">
		<legend class="borda">Defeito Apresentado</legend>
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<div class="form-group">
								<div class="form-controls">
									<textarea type="text" cols="80" rows="1" class="form-control" name="defeitoapresentado" placeholder="Defeito apresentado" style="max-width:600px"></textarea>
								</div>	
							</div>
						</td>
					</tr>
				</table>
		</fieldset>
		
		<fieldset class="borda">
		<legend class="borda">Observações</legend>
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<div class="form-group">
								<div class="form-controls">
									<textarea type="text" cols="80" rows="1" class="form-control" name="defeitoapresentado" placeholder="Observações" style="max-width:600px"></textarea>
								</div>	
							</div>	
						</td>
					</tr>
				</table>
		</fieldset>
</form>
</td>
</tr>
</table>