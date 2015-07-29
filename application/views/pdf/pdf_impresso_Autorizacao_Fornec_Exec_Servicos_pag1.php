<?php

anchor_popup("pdf_controller/autorizacao_Fornec_Exec_Servicos_pag2");

$html = '
<html>
<meta charset="utf-8"/>
	<head>
	<link rel="shortcut icon" href="pdf.png" type="image/x-icon">
		<title></title>
			<style>
					thead {
						text-align : center;
					}
					
					table {
						padding: 0;
						border: 0;
						border-spacing: 0;
					  }
					.table td,
					  .table th {
						background-color: #ffffff !important;
						padding: 0;
						padding-left: 10px;
						padding-bottom: 5px;
					  }
					.table-bordered th,
					  .table-bordered td {
						border: 0 solid #ddd !important;
						padding: 0;
					  }
					}

					body {
						margin: 5px 5px 5px 5px;
						padding: 0;
						background-color: #ffffff;
					}
					
					* {
						box-sizing: border-box;
						-moz-box-sizing: border-box;
					}
					
					.corpo {
					  border-style: solid;
					  border-width: 1px;
					  border-color: #000;
					  box-shadow: 2px 2px 1px #000;
					  background-color: #ffffff;
					  opacity: 0.85;	
					  overflow: auto;
					  position: relative;
					  padding: 10px;
					  margin-bottom: 30px;
					  margin-right: auto;
					  margin-left: auto;
					  transition: 1s;
					}
					
					@media print
					{    
						.no-print, .no-print *
						{
							display: none !important;
						}
					}
					
					@media (min-width: 768px) {
					  .corpo {
						width: 750px;
					  }
					}
					
					@media (min-width: 992px) {
					  .corpo {
						width: 970px;
					  }
					}
					
					@media (min-width: 1200px) {
					  .corpo {
						width: 1170px;
					  }
					}
					
					fieldset.borda {
						border: 1px solid #000 !important;
						padding: 0 5px 0 1.4em !important;
						margin: 0 10px 1.5em 0 !important;
						-webkit-box-shadow:  0px 0px 0px 0px #000;
								box-shadow:  0px 0px 0px 0px #000;
					}
					
					legend.borda {
					  width:inherit; /* Or auto */
						padding: 0 0 0 0; /* To give a bit of padding on the left and right */
						border-bottom: none;
						border-top: none;
						border-radius: none;
						font-size: 12px;
						font-weight: bolder;
					}
					.page {
						width: 20cm;
						min-height: 29cm;
						padding: 0cm;
						margin: 0cm auto;
						border: 0px #D3D3D3 solid;
						border-radius: 5px;
						background: white;
						box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
						font: 8pt "Tahoma";
					}
					
					.subpage {
					  padding: 1cm;
					  border: 5px red solid;
					  height: 256mm;
					  outline: 0.5cm #FFEAEA solid;
					}
					
					@page {
					  size: A4;
					  margin: 1px;
					}
					@media print {
					  .page {
						margin: 0;
						border: initial;
						border-radius: initial;
						width: initial;
						min-height: initial;
						box-shadow: initial;
						background: initial;
						page-break-after: always;
						}
					  .corpo{
						border: 0 0 0 0 !important;
					  }
					}
					
					#negrito{
					font-weight: bold;
					}

			</style>
	</head>
	<body>
		<table border="0" class="page">
			<tr>
				<td colspan="4">
					<table border="0" cellspacing="0" cellpadding="0" width="740px">
						<tr>
							<td rowspan="2"  align="center"  valign="middle"  width="140">
								<img src="./style/img/brasaopmg.jpg" id="img" width="120px" height="70px" >
							</td>
							<td colspan="3" align="center" id="negrito">
								<label>PREFEITURA MUNICIPAL DE GUARULHOS<br>SECRETARIA DA SAÚDE</label>
							</td>
						</tr>
							
						<tr>
							<td colspan="3"  align="center"  valign="top" id="negrito">
								<label name="departamento">Departamento Administrativo e Financeiro da Saúde</label><br />
								<label name="divisao">Divisão Técnica de Gestão da Frota</label><br />
								<label name="secao">Seção Técnica de Manutenção de Veículos</label><br />
							</td>
						</tr>

						<tr>
							<td colspan="2" height="30px"><label id="negrito">AUTORIZAÇÃO DE FORNECIMENTO / EXECUÇÃO DE SERVIÇOS Nº:</label></td>
					
							<td align="center">
								<div>
									<label name="ordemservico">9999/9999 - Código Divisão SS</label>
								</div>
							</td>
							<td align="center">
								<div>
									<span><b>Página</b>&nbsp;01/02</span>
								</div>
							</td>
						</tr>
					</table>
					<br />
						<fieldset class="borda">
							<legend class="borda">Identificação do Contratante</legend>
							<br />
								<table border="0" cellspacing="0" cellpadding="0" width="100%">
									<tr>
										<td valign="top" colspan="2" height="40px">
											<label id="negrito">Nome</label>
											<br />
											<span name="modelo">Prefeitura Municipal de Guarulhos</span>
										</td>
												
										<td valign="top" colspan="2">
											<label id="negrito">CNPJ</label>
											<br />
											<span name="prefixo">46.319.000/0001-50</span>
										</td>
									</tr>

									<tr>				
										<td valign="top" align="center" height="40px">
											<label id="negrito">Contrato/Ata</label>
											<br />
											<span name="km">9999/9999-AAAA</span>
										</td>
														
										<td valign="top" align="center">
											<label id="negrito">Vigência</label>
											<br />
											<span name="data">de 99/99/9999 a 99/99/9999</span>
										</td>
												
										<td valign="top" align="center">
											<label id="negrito">P.A - Reg. Preços</label>
											<br />
											<span name="data">9999/9999</span>
										</td>

										<td valign="top" align="center">
											<label id="negrito">P.A - Empenho</label>
											<br />
											<span name="data">9999/9999</span>
										</td>
									</tr>
								</table>
								<br />
						</fieldset>

						<fieldset class="borda">
							<legend class="borda">Identificação do Fornecedor</legend>
								<br />
								<table border="0" cellspacing="0" cellpadding="0" width="100%">
									<tr>
										<td colspan="3" height="40px">
											<label id="negrito">A - Nome</label>
											<br />
											<span>Nome do Fornecedor</span>
										</td>

										<td>
											<label id="negrito">Código</label>
											<br />
											<span>Código</span>
										</td>
									</tr>

									<tr>
										<td colspan="4" height="40px">
											<label id="negrito">B - Endereço</label>
											<br />
											<span>(rua, número, complemento, bairro, cidade, estado)</span>
										</td>
									</tr>

									<tr>
										<td height="40px">
											<label id="negrito">C - Telefone</label>
											<br />
											<span>Telefone do Fornecedor</span>
										</td>

										<td>
											<label id="negrito">Fax</label>
											<br />
											<span>Fax do Fornecedor</span>
										</td>
										
										<td  colspan="2">
											<label id="negrito">CNPJ</label>
											<br />
											<span>CNPJ do Fornecedor</span>
										</td>
									</tr>
									
									<tr>
										<td colspan="4" height="40px">
											<label id="negrito">D - E-mail</label>
											<br />
											<span>E-mail do Fornecedor</span>
										</td>
									</tr>
								</table>
								<br />
						</fieldset>
								
						<fieldset class="borda">
							<legend class="borda">Identificação da Unidade Requisitante</legend>
								<br />
								<table border="0" cellspacing="0" cellpadding="0" width="100%">
									<tr>
										<td colspan="2" height="40px">
											<label id="negrito">A - Nome</label>
											<br />
											<span>Nome da Unidade</span>
										</td>
										<td>
											<label id="negrito">Telefone</label>
											<br />
											<span>Telefone</span>
										</td>
									</tr>

									<tr>
										<td height="40px">
											<label id="negrito">B - Orçamento</label>
											<br />
											<span>Orçamento</span>
										</td>
										<td>
											<label id="negrito">C - Prazo de Entrega</label>
											<br />
											<span>Prazo de Entrega</span>
										</td>
										<td >
											<label id="negrito">Contato</label>
											<br />
											<span>Contato</span>
										</td>
									</tr>

									<tr>
										<td colspan="3" height="40px">
											<label id="negrito">D - Endereço de entrega</label>
											<br />
											<span>(rua, número, complemento, bairro, cidade, estado)</span>
										</td>
									</tr>
								</table>
								<br />	
						</fieldset>
								
						<fieldset class="borda">
							<legend class="borda">Identificação da Fonte de Pagamento</legend>
								<br />
								<table border="0">	
									<tr>
										<td colspan="4">
											<table border="1" width="100%" id="listapecas" cellspacing="0" cellpadding="0">
												<tr>
													<td width="90px" align="center" id="negrito">A - Empenho</td>
													<td align="center" id="negrito">B - Dotação</td>
													<td width="80px" align="center" id="negrito">Valor</td>
													<td width="100px" align="center" id="negrito">Segmento</td>
													<td width="100px" align="center" id="negrito">Reserva</td>
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
											</table>
										</td>
									</tr>
									<tr>
										<td colspan="4" height="40px">
											<label id="negrito">C - Valor total</label>
											<br />
											<span>Valor total</span>
										</td>
									</tr>
									<tr>
										<td width="200px" height="40px">
											<label id="negrito">D - Condições de pagamento</label>
											<br />
											<span>Valor total</span>
										</td>
										<td colspan="3">
											<span>CONDIÇÕES DE PAGAMENTO CONTADAS DA DATA DA APRESENTAÇÃO DO DOCUMENTO FISCAL, QUE DEVERÃO SER DEVIDAMENTE ATESTADO PELA UNIDADE REQUISITANTE</span>
										</td>
									</tr>
									<tr>
										<td colspan="4" height="40px">
											<label id="negrito">E - Endereço para faturamento</label>
											<br />
											<span>(rua, número, complemento, bairro, cidade, estado)</span>
										</td>
									</tr>							
								</table>
								<br />	
						</fieldset>
				</td>
			</tr>
			
			<tr>
				<td colspan="4" height="90px" valign="top">
					<label id="negrito">Objeto</label>
					<br />
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
				</td>
			</tr>

			<tr>
				<td align="center"  height="40px">
					<label id="negrito">Veículo</label>
				</td>
				<td>
					<label id="negrito">Prefixo</label>
					<br />
					<span>DT - 9999</span>
				</td>
				<td>
					<label id="negrito">Placa</label>
					<br />
					<span>AAAA-9999</span>
				</td>
				<td>
					<label id="negrito">Tipo</label>
					<br />
					<span>Tipo do Veículo</span>
				</td>
			</tr>
		</table>

	<div style="page-break-after: always;"> </div>

		<table border="0" class="page">
			<tr>
				<td colspan="4">
					<table border="0" cellspacing="0" cellpadding="0" width="740px">
						<tr>
							<td rowspan="2"  align="center"  valign="middle"  width="140">
								<img id="img" width="120px" height="70px" src="./style/img/brasaopmg.jpg" />
							</td>
							<td colspan="3" align="center" id="negrito">
								<label>PREFEITURA MUNICIPAL DE GUARULHOS<br>SECRETARIA DA SAÚDE</label>
							</td>
						</tr>
							
						<tr>
							<td colspan="3"  align="center"  valign="top" id="negrito">
								<label name="departamento">Departamento</label><br />
								<label name="divisao">Divisão</label><br />
								<label name="secao">Seção</label><br />
								<label name="setor">Setor</label>
							</td>
						</tr>

						<tr>
							<td colspan="2" height="30px"><label id="negrito">AUTORIZAÇÃO DE FORNECIMENTO / EXECUÇÃO DE SERVIÇOS Nº:</label></td>
					
							<td align="center">
								<div>
									<label name="ordemservico">9999/9999 - Código Divisão SS</label>
								</div>
							</td>
							<td align="center">
								<div>
									<span><b>Página</b>&nbsp;02/02</span>
								</div>
							</td>
						</tr>
					</table>
					<br />
					<fieldset class="borda">
						<legend class="borda">Peças</legend>
							<br />
								<table border="0" width="100% cellspacing="0" cellpadding="0">
									<tr>
										<td>
											<table border="1" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="50px" align="center" id="negrito">Código</td>
													<td width="110px" align="center" id="negrito">Código Montadora</td>
													<td width="300px" align="center" id="negrito">Descrição</td>
													<td align="center" id="negrito">Unid</td>
													<td width="45px" align="center" id="negrito">Quant</td>
													<td width="60px" align="center" id="negrito">Valor Unitário</td>
													<td width="50px" align="center" id="negrito">Desc %</td>
													<td width="50px" align="center" id="negrito">Valor total</td>
												</tr>';

												foreach ($pack['pecas'] as $pecas) {
													$html = $html."<tr>";
													    $html = $html."<td>$pecas->id_itens</td>";
														$html = $html."<td>$pecas->codigomontadora</td>";
														$html = $html."<td>$pecas->descricao</td>";
														$html = $html."<td>$pecas->unidademedida</td>";
														$html = $html."<td>$pecas->quantidade</td>";
														$html = $html."<td>$pecas->precobruto</td>";
														$html = $html."<td>$pecas->desconto</td>";
														$html = $html."<td>$pecas->valortotal</td>";
													$html = $html."</tr>";
												} 
												
											$html = $html.'</table>
										</td>
									</tr>
									<tr>
										<td align="right">
											<table border="0" width="100%">
												<tr>
													<td align="right" id="negrito">
														<label>Total das peças:&nbsp;</label>
													</td>
													<td width="150px">
														<span>Total das peças</span>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							<br />
					</fieldset>

					<fieldset class="borda">
						<legend class="borda">Serviços</legend>
							<br />
								<table border="0" cellspacing="0" cellpadding="0" width="100%">
									<tr>
										<td>
											<table border="1" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="300px" align="center" id="negrito">Descrição</td>
													<td width="45px" align="center" id="negrito">Quant</td>
													<td width="60px" align="center" id="negrito">Valor Unitário</td>
													<td width="50px" align="center" id="negrito">Valor total</td>
												</tr>
												';

												foreach ($pack['servicos'] as $servicos) {
													$html = $html."<tr>";
													    $html = $html."<td>$servicos->servico</td>";
														$html = $html."<td>$servicos->quantidade</td>";
														$html = $html."<td>$servicos->valorunitario</td>";
														$html = $html."<td>$servicos->valortotal</td>";
													$html = $html."</tr>";
												} 
												
											$html = $html.'</table>
										</td>
									</tr>
								</table>
							<br />
					</fieldset>
				</td>
			</tr>
			<tr>
				<td colspan="4">
					<span>
						FUNDAMENTO: ESTA AUTORIZAÇÃO DE FORNECIMENTO/EXECUÇÃO DE SERVIÇO DECORRENTE DO INSTRUMENTO DE REGISTRO DE PREÇOS ACIMA IDENTIFICADO, FOI EMITIDA EM CONFORMIDADE COM O DISPOSTO DO ARTIGO 62, £4º, LEI FEDERAL Nº 8.666/93, CUJOS TERMOS E CONDIÇÕES DE FORNECIMENTO/EXECUÇÃO DE SERVIÇO SÃO OS CONSTANTES DO EDITAL, ATA DE REGISTRO DE PREÇOS - ARP E NESTA AUTORIZAÇÃO DE FORNECIMENTO - AF.
					</span>
				</td>
			</tr>

			<tr>
				<td align="center" height="100px" colspan="4">
					<span>
						Guarulhos _____, de ___________________ de 20____.
					</span>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"  height="100px">
					<span>Nome do Colaborador-1</span>
					<br />
					<span>Cargo/Função do Colaborador-1</span>
				</td>
				<td colspan="2" align="center">
					<span>Nome do Colaborador-2</span>
					<br />
					<span>Cargo/Função do Colaborador-2</span>
				</td>
			</tr>
		</table>
	</body>
</html>
';
require_once('dompdf_config.inc.php');
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper('A4','portrait');
$dompdf->render();

$dompdf->stream('autorizacao_fornecimento_pag1.pdf',array('Attachment'=>0));

/*array('Attachment'=>0) esse array e para abrir o pdf no navegador */
?>