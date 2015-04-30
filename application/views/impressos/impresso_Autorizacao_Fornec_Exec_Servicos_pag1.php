<link rel="stylesheet" href="<?php echo base_url(); ?>style/css/impressos.css"></link>

<table border="0" class="page">
	<tr>
		<td colspan="4">
			<table border="0" cellspacing="0" cellpadding="0" width="98.6%">
				<!-- /////////////////////////////////BOTÃO DE IMPRIMIR O FORMULÁRIO//////////////////////////////// -->
				<tr>
					<td align="right" colspan="4">
						<a href="impressos-impresso_Autorizacao_Fornec_Exec_Servicos_pag2" class="btn no-print btn-info">Pág2</a>
						<a href="<?php echo base_url(); ?>pdf/pdf_impressos/pdf_impresso_Autorizacao_Fornec_Exec_Servicos_pag1.php" target="_blank" class="btn no-print btn-info">PDF Impressão</a>
						<!-- <button type="button" class="btn btn-info no-print" name="imprimir" id="imprimir">Imprimir</button> -->
					</td>
				</tr>
				<!-- /////////////////////////////////LINHA DO CABEÇALHO DO FORMULÁRIO//////////////////////////////// -->
				<tr>
					<td rowspan="2" align="center" valign="top" width="180">
						<img id="img" width="150" src="/smv/style/img/brasaopmg.jpg" />
					</td>
					<td colspan="3" align="center">
						<label>PREFEITURA MUNICIPAL DE GUARULHOS<br>SECRETARIA DA SAÚDE</label>
					</td>
				</tr>
						
				<tr>
					<td colspan="3" align="center" valign="top">
						<font size="1px"><label name="departamento">Departamento</label></font><br />
						<font size="1px"><label name="divisao">Divisão</label></font><br />
						<font size="1px"><label name="secao">Seção</label></font><br />
						<font size="1px"><label name="setor">Setor</label></font>
					</td>
				</tr>
				<!-- /////////////////////////////////LINHA DO SUBTITULO DO FORMULÁRIO//////////////////////////////// -->
				<tr>
					<td colspan="2"><label>AUTORIZAÇÃO DE FORNECIMENTO / EXECUÇÃO DE SERVIÇOS Nº:</label></td>
					
					<td align="left" width="200">
						<div>
							<label name="ordemservico">9999/9999 - Código Divisão SS</label>
						</div>
					</td>
					<td align="center">
						<div>
							<span><b>Página</b><br /> 01/02</span>
						</div>
					</td>
				</tr>
			</table>
				<fieldset class="borda">
					<legend class="borda">Identificação do Contratante</legend>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td valign="top" colspan="2">
										<label class="span2">Nome</label>
											<br />
										<span name="modelo">Prefeitura Municipal de Guarulhos</span>
									</td>
									
									<td valign="top" colspan="2">
										<label class="span2">CNPJ</label>
											<br />
										<span name="prefixo">46.319.000/0001-50</span>
									</td>
								</tr>

								<tr>				
									<td valign="top" align="center">
										<label class="span2">Contrato/Ata</label>
											<br />
										<span name="km">9999/9999-AAAA</span>
									</td>
													
									<td valign="top" align="center">
										<label class="span2">Vigência</label>
											<br />
										<span name="data">de 99/99/9999 a 99/99/9999</span>
									</td>
									
									<td valign="top" align="center">
										<label class="span2">P.A - Reg. Preços</label>
											<br />
										<span name="data">9999/9999</span>
									</td>

									<td valign="top" align="center">
										<label class="span2">P.A - Empenho</label>
											<br />
										<span name="data">9999/9999</span>
									</td>
								</tr>
							</table>
				</fieldset>

				<fieldset class="borda">
					<legend class="borda">Identificação do Fornecedor</legend>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td colspan="3">
										<label class="span2">A - Nome</label>
										<br />
										<span>Nome do Fornecedor</span>
									</td>

									<td>
										<label class="span2">Código</label>
										<br />
										<span>Código</span>
									</td>
								</tr>

								<tr>
									<td colspan="4">
										<label class="span2">B - Endereço</label>
										<br />
										<span>(rua, número, complemento, bairro, cidade, estado)</span>
									</td>
								</tr>
								<tr>
									<td>
										<label class="span2">C - Telefone</label>
										<br />
										<span>Telefone do Fornecedor</span>
									</td>

									<td>
										<label class="span2">Fax</label>
										<br />
										<span>Fax do Fornecedor</span>
									</td>
									<td  colspan="2">
										<label class="span2">CNPJ</label>
										<br />
										<span>CNPJ do Fornecedor</span>
									</td>
								</tr>
								<tr>
									<td colspan="4">
										<label class="span2">D - E-mail</label>
										<br />
										<span>E-mail do Fornecedor</span>
									</td>
								</tr>
							</table>
				</fieldset>
					
				<fieldset class="borda">
					<legend class="borda">Identificação da Unidade Requisitante</legend>
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td colspan="3">
										<label class="span2">A - Nome</label>
										<br />
										<span>Nome da Unidade</span>
									</td>

									<td>
										<label class="span2">Telefone</label>
										<br />
										<span>Telefone</span>
									</td>
								</tr>

								<tr>
									<td>
										<label class="span2">B - Orçamento</label>
										<br />
										<span>Orçamento</span>
									</td>

									<td colspan="2">
										<label class="span2">C - Prazo de Entrega</label>
										<br />
										<span>Prazo de Entrega</span>
									</td>
									<td >
										<label class="span2">Contato</label>
										<br />
										<span>Contato</span>
									</td>
								</tr>
								<tr>
									<td colspan="4">
										<label class="span2">D - Endereço de entrega</label>
										<br />
										<span>(rua, número, complemento, bairro, cidade, estado)</span>
									</td>
								</tr>
							</table>	
				</fieldset>
					
				<fieldset class="borda">
					<legend class="borda">Identificação da Fonte de Pagamento</legend>
						<table>	
							<tr>
								<td colspan="4">
									<table border="1" width="100%"  id="listapecas" cellspacing="0" cellpadding="0">
										<thead>
											<th width="90px">A - Empenho</th>
											<th>B - Dotação</th>
											<th width="80px">Valor</th>
											<th width="100px">Segmento</th>
											<th width="100px">Reserva</th>
										</thead>
										<tbody>
											<tr>
												<td>9999/9999</td>
												<td></td>
												<td>R$ 99.999,99</td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>&nbsp;</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>&nbsp;</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>&nbsp;</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
									</tbody>
									</table>
								</td>
							</tr>
							<tr>
								<td colspan = "4">
									<label class="span2">C - Valor total</label>
									<br />
									<span>Valor total</span>
								</td>
							</tr>
							<tr>
								<td width="200px">
									<label class="span2">D - Condiçoes de pagamento</label>
									<br />
									<span>Valor total</span>
								</td>
								<td colpan="3">
									<span>CONDIÇÕES DE PAGAMENTO CONTADAS DA DATA DA APRESENTAÇÃO DO DOCUMENTO FISCAL, QUE DEVERÁ SER DEVIDAMENTE ATESTADO PELA UNIDADE REQUISITANTE</span>
								</td>
							</tr>
							<tr>
								<td colspan="4">
									<label class="span2">E - Endereço para faturamento</label>
									<br />
									<span>(rua, número, complemento, bairro, cidade, estado)</span>
								</td>
							</tr>							
						</table>	
				</fieldset>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<label class="span2">Objeto</label>
			<br />
			<span>Objeto</span>
		</td>
	</tr>

	<tr>
		<td align="center">
			<label class="span2">Veículo</label>
		</td>
		<td>
			<label class="span2">Prefixo</label>
			<br />
			<span>DT - 9999</span>
		</td>
		<td>
			<label class="span2">Placa</label>
			<br />
			<span>AAAA-9999</span>
		</td>
		<td>
			<label class="span2">Tipo</label>
			<br />
			<span>Tipo do Veículo</span>
		</td>
	</tr>
</table>