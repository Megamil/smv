<?php

 if($pack["pack"]->row()->id_unidadesolicitante > 1000){
 	$unidade = $pack["pack"]->row()->unidadesaude;
	$departamento = '';
 	$divisao = '';
 	$secao = '';
 	$setor = '';
 } else {
 	$unidade = "__________________________________________";
 	$departamento = 'Departamento: '.$pack["pack"]->row()->depto;
 	$divisao = 'Divisão: '.$pack["pack"]->row()->divisao;
 	$secao = 'Seção: '.$pack["pack"]->row()->secao;
 	$setor = 'Setor: '.$pack["pack"]->row()->setor;
 }

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

					#pecas{
						border-style: solid;
						border-width: 1px;
						border-collapse: collapse;
					}
					#pecas td{
						border-style: solid;
						border-width: 1px;
						border-collapse: collapse;
					}

					#negrito{
					font-weight: bold;
					}

			</style>
	</head>
	<body>
		<table border="0" class="page">
			<tr>
				<td>
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
								<label name="departamento">'.$departamento.'</label><br />
								<label name="divisao">'.$divisao.'</label><br />
								<label name="secao">'.$secao.'</label><br />
								<label name="setor">'.$setor.'</label>
							</td>
						</tr>

						<tr>
							<td height="20px" align="bottom" id="negrito"><span>RETIRADA DE ITENS DO ESTOQUE</span></td>
							<td align="right" colspan="2" id="negrito">
								<div>
									<span>Ordem de Serviço Nº:&nbsp;</span>
								</div>
							</td>
							<td align="left" width="100px">
								<div>
									<label name="ordemservico">'.$pack["pack"]->row()->id_ordemservico.'</label>
								</div>
							</td>
						</tr>
					</table>
					<span>&nbsp;</span>
						<fieldset class="borda">
							<legend class="borda">Dados do Cliente</legend>
								<br />
								<table border="0" width="100%">
									<tr>
										<td valign="top" colspan="2">
											<label name="modelo" id="negrito">Código do cliente: <br>'.$pack["codigo"]->row()->codigo.'</label>
										</td>
															
										<td valign="top" colspan="2">
											<label name="data" id="negrito">Data: </label> <br>'.date("d/m/Y").'
										</td>
									</tr>

									<tr>
										<td colspan="4" height="40px">
											<label name="unidade" id="negrito">Unidade: '.$unidade.'&nbsp;</label>
										</td>
									</tr>
								</table>
								<br />
						</fieldset>

						<fieldset class="borda">
							<legend class="borda">Relação de Itens Entregues do Estoque</legend>
								<br />
								<table>
									<tr>
										<td align="center">
											<table id="pecas">
												<tr>
													<td width="55px" align="center" id="negrito">Código</td>
													<td align="center" id="negrito">Código Montadora</td>
													<td width="35px" align="center" id="negrito">Quant</td>
													<td align="center" id="negrito">Unidade</td>
													<td width="470px" align="center" id="negrito">Descrição</td>
												</tr>';
												
												foreach ($pack['itens'] as $itens) {
													$html = $html."<tr>";
													    $html = $html."<td>$itens->id_saidaitens</td>";
														$html = $html."<td>$itens->codigomontadora</td>";
														$html = $html."<td>$itens->quantidade</td>";
														$html = $html."<td>$itens->unidademedida</td>";
														$html = $html."<td>$itens->descricao</td>";
													$html = $html."</tr>";
												} 

												$html = $html.'</table>
											<br />
										</td>
									</tr>
								</table>
						</fieldset>
											
						<fieldset class="borda">
							<legend class="borda">Observações</legend>
								<table>
									<tr>
										<td height="80px">
											'.$pack["pack"]->row()->observacoes.'
										</td>
									</tr>
								</table>
						</fieldset>

						<fieldset class="borda">
							<legend class="borda">Recibo de Entrega dos Itens</legend>
							<br />
								<table border="0" width="100%">
									<tr>
										<td colspan="4" height="30px">
											<span id="negrito">Nome</span> _______________________________________________________________________________________________
										</td>
									</tr>

									<tr>
										<td height="30px">
											<span id="negrito">Data</span> ____/____/______
										</td>
										<td colspan="3">
											<span id="negrito">Assinatura</span>__________________________________________________________
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
require_once('dompdf_config.inc.php');
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper('A4','portrait');
$dompdf->render();

$dompdf->stream('retirada_estoque.pdf',array('Attachment'=>0));

/*array('Attachment'=>0) esse array e para abrir o pdf no navegador */
?>