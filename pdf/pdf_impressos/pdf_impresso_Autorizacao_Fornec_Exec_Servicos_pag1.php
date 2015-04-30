<?php
$html = '
<html>
	<head>
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
								<img id="img" width="120px" height="70px" src="../../style/img/brasaopmg.jpg" />
							</td>
							<td colspan="3" align="center" id="negrito">
								<label>PREFEITURA MUNICIPAL DE GUARULHOS<br>SECRETARIA DA SA&Uacute;DE</label>
							</td>
						</tr>
							
						<tr>
							<td colspan="3"  align="center"  valign="top" id="negrito">
								<label name="departamento">Departamento</label><br />
								<label name="divisao">Divis&atilde;o</label><br />
								<label name="secao">Se&ccedil;&atilde;o</label><br />
								<label name="setor">Setor</label>
							</td>
						</tr>

						<tr>
							<td colspan="2" height="30px"><label id="negrito">AUTORIZA&Ccedil;&Atilde;O DE FORNECIMENTO / EXECU&Ccedil;&Atilde;O DE SERVI&Ccedil;OS No.:</label></td>
					
							<td align="center">
								<div>
									<label name="ordemservico">9999/9999 - C&oacute;digo Divis&atilde;o SS</label>
								</div>
							</td>
							<td align="center">
								<div>
									<span><b>P&aacute;gina</b>&nbsp;01/02</span>
								</div>
							</td>
						</tr>
					</table>
					<br />
						<fieldset class="borda">
							<legend class="borda">Identifica&ccedil;&atilde;o do Contratante</legend>
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
											<label id="negrito">Vig&ecirc;ncia</label>
											<br />
											<span name="data">de 99/99/9999 a 99/99/9999</span>
										</td>
												
										<td valign="top" align="center">
											<label id="negrito">P.A - Reg. Pre&ccedil;os</label>
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
							<legend class="borda">Identifica&ccedil;&atilde;o do Fornecedor</legend>
								<br />
								<table border="0" cellspacing="0" cellpadding="0" width="100%">
									<tr>
										<td colspan="3" height="40px">
											<label id="negrito">A - Nome</label>
											<br />
											<span>Nome do Fornecedor</span>
										</td>

										<td>
											<label id="negrito">C&oacute;digo</label>
											<br />
											<span>C&oacute;digo</span>
										</td>
									</tr>

									<tr>
										<td colspan="4" height="40px">
											<label id="negrito">B - Endere&ccedil;o</label>
											<br />
											<span>(rua, n&uacute;mero, complemento, bairro, cidade, estado)</span>
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
							<legend class="borda">Identifica&ccedil;&atilde;o da Unidade Requisitante</legend>
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
											<label id="negrito">B - Or&ccedil;amento</label>
											<br />
											<span>Or&ccedil;amento</span>
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
											<label id="negrito">D - Endere&ccedil;o de entrega</label>
											<br />
											<span>(rua, n&uacute;mero, complemento, bairro, cidade, estado)</span>
										</td>
									</tr>
								</table>
								<br />	
						</fieldset>
								
						<fieldset class="borda">
							<legend class="borda">Identifica&ccedil;&atilde;o da Fonte de Pagamento</legend>
								<br />
								<table border="0">	
									<tr>
										<td colspan="4">
											<table border="1" width="100%" id="listapecas" cellspacing="0" cellpadding="0">
												<tr>
													<td width="90px" align="center" id="negrito">A - Empenho</td>
													<td align="center" id="negrito">B - Dota&ccedil;&atilde;o</td>
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
											<label id="negrito">D - Condi&ccedil;oes de pagamento</label>
											<br />
											<span>Valor total</span>
										</td>
										<td colspan="3">
											<span>CONDI&Ccedil;&Otilde;ES DE PAGAMENTO CONTADAS DA DATA DA APRESENTA&Ccedil;&Atilde;O DO DOCUMENTO FISCAL, QUE DEVER&Atilde; SER DEVIDAMENTE ATESTADO PELA UNIDADE REQUISITANTE</span>
										</td>
									</tr>
									<tr>
										<td colspan="4" height="40px">
											<label id="negrito">E - Endere&ccedil;o para faturamento</label>
											<br />
											<span>(rua, n&uacute;mero, complemento, bairro, cidade, estado)</span>
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
					<label id="negrito">Ve&iacute;culo</label>
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
					<span>Tipo do Ve&iacute;culo</span>
				</td>
			</tr>
		</table>
	</body>
</html>
';
require_once('../dompdf_config.inc.php');
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper('A4','portrait');
$dompdf->render();

$dompdf->stream('autorizacao_fornecimento_pag1.pdf',array('Attachment'=>0));

/*array('Attachment'=>0) esse array e para abrir o pdf no navegador */
?>