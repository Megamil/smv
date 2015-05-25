<?php
$html = '
<html>
<meta charset="utf-8"/>
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
								<img id="img" width="120px" height="70px" src="'.base_url().'style/img/brasaopmg.jpg" />
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
												</tr>
												<tr>
													<td>&nbsp;</td>
													<td></td>
													<td></td>
													<td></td>
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
													<td></td>
													<td></td>
													<td></td>
												</tr>
											</table>
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
												<tr>
													<td>&nbsp;</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>&nbsp;</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>&nbsp;</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>&nbsp;</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td align="right">
											<table border="0" width="100%">
												<tr>
													<td align="right" id="negrito">
														<label>Total dos serviços:&nbsp;</label>
													</td>
													<td width="150px">
														<span>Total dos serviços</span>
													</td>
												</tr>
											</table>
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

$dompdf->stream('autorizacao_fornecimento_pag2.pdf',array('Attachment'=>0));

/*array('Attachment'=>0) esse array e para abrir o pdf no navegador */
?>