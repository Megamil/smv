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
				<td align="center">
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
							<td height="20px" align="bottom" id="negrito"><span>VISTORIA</span></td>
							<td align="right" colspan="2" id="negrito">
								<div>
									<span>Ordem de Servi&ccedil;o No:&nbsp;</span>
								</div>
							</td>
							<td align="left" width="100px">
								<div>
									<label name="ordemservico">OS No.</label>
								</div>
							</td>
						</tr>
					</table>
					<span>&nbsp;</span>
					<fieldset class="borda">
						<legend class="borda">Dados do Ve&iacute;culo</legend>
							<br />
							<table border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="top" width="250px" id="negrito">
										<label>Modelo</label>
									</td>
										
									<td valign="top" width="150px">
										<label id="negrito">Prefixo</label>
										<br />
										<label name="dt">DT- </label>
									</td>
										
									<td valign="top"  width="150px" id="negrito">
										<label>KM</label>
									</td>
										
									<td valign="top" width="100px" id="negrito">
										<label>Data</label>
									</td>
								</tr>
								<tr>
									<td colspan="4"  height="50px">
										<label  id="negrito">Unidade</label> _______________________________________________________________________
																				
									</td>
								</tr>
							</table>
					</fieldset>
					<fieldset class="borda">
						<legend class="borda">Vistoria</legend>
						<br />
							<table border="0" cellspacing="0" cellpadding="0" width="100%">
								<tr>
									<td align="center" width="250px">
										<table border="1" cellpadding="0" cellspacing="0" align="center">
											<tr>
												<td align="center" id="negrito">S</td>
												<td align="center" id="negrito">N</td>
												<td align="center" id="negrito">Descri&ccedil;&atilde;o</td>
											</tr>
												
											<tr>
												<td width="26px">&nbsp;</td>
												<td width="26px">&nbsp;</td>
												<td width="100px">Estepe</td>
											</tr>
												
											<tr>
												<td></td>
												<td></td>
												<td>Tri&acirc;ngulo</td>
											</tr>
													
											<tr>
												<td></td>
												<td></td>
												<td>Extintor</td>
											</tr>
												
											<tr>
												<td></td>
												<td></td>
												<td>Macaco</td>
											</tr>
											
											<tr>
												<td></td>
												<td></td>
												<td>Chave de roda</td>
											</tr>
												
											<tr>
												<td></td>
												<td></td>
												<td>Documentos</td>
											</tr>
												
											<tr>
												<td></td>
												<td></td>
												<td>Tac&oacute;grafo</td>
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
											
										</table>
									</td>
										
									<td rowspan="3" colspan="3" valign="top" align="center">
										<img id="img" height="410" width="450" src="../../style/img/lataria.png" />
										<br />&nbsp;
									</td>
								</tr>
									
								<tr>
									<td align="center">
										
										<fieldset class="borda">
											<legend class="borda">N&uacute;mero da Bateria</legend>
												<p>
													&nbsp;
												</p>
										</fieldset>
										
									</td>
								</tr>
									
								<tr>
									<td rowspan="2" valign="top" align="center">
										<img id="img" width="140" src="../../style/img/medidorcombustivel.png" />
									</td>
								</tr>
									
								<tr>
									<td colspan="3">
										<fieldset class="borda">
											<legend class="borda">Respons&aacute;vel pela vistoria</legend>
												<table border="0" width="100%">
													<tr>
														<td align="left" width="100px" height="40px" valign="bottom">
															<label id="negrito">Data:</label>____/____/____
															<br />&nbsp;
														</td>
															
														<td align="right" width="250px" height="30px" valign="bottom">
															<label id="negrito">Nome:</span>__________________________________________________
															<br />&nbsp;
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
							<table width="100%" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td height="80px">
										<
									</td>
								</tr>
							</table>
					</fieldset>
						
					<fieldset class="borda">
						<legend class="borda">Observa&ccedil;&otilde;es</legend>
							<table width="100%" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td height="80px">
										
									</td>
								</tr>
							</table>
					</fieldset>
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

$dompdf->stream('vistoria.pdf',array('Attachment'=>0));

/*array('Attachment'=>0) esse array e para abrir o pdf no navegador */
?>