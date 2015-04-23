<link rel='stylesheet' href='<?php echo base_url(); ?>style/css/impressos.css'></link>

<table border='0' class='page' width='100%'>
	<tr>
		<td>
			<table width='98.6%' border="0">
			<!-- /////////////////////////////////BOTÃO DE IMPRIMIR O FORMULÁRIO//////////////////////////////// -->
				<tr>
					<td align='right' colspan='4'>
						<button type='button' class='no-print' name='imprimir' id='imprimir'>Imprimir</button>
					</td>
				</tr>
				<!-- /////////////////////////////////LINHA DO CABEÇALHO DO FORMULÁRIO//////////////////////////////// -->
				<tr>
					<td rowspan='2' align='center' valign='top' width='180' heigth="150">
						<img id='img' width='150' src='/smv/style/img/brasaopmg.jpg' />
					</td>
					<td colspan='3' align='center'>
						<label>PREFEITURA MUNICIPAL DE GUARULHOS<br>SECRETARIA DA SAÚDE</label>
					</td>
				</tr>
										
				<tr>
					<td colspan='3' align='center' valign='top'>
						<font size='1px'><label name='departamento'>Departamento</label></font><br />
						<font size='1px'><label name='divisao'>Divisão</label></font><br />
						<font size='1px'><label name='secao'>Seção</label></font><br />
						<font size='1px'><label name='setor'>Setor</label></font>
					</td>
				</tr>
				<!-- /////////////////////////////////LINHA DO SUBTITULO DO FORMULÁRIO//////////////////////////////// -->
				<tr>
					<td><span>RETIRADA DE ITENS DO ESTOQUE</span></td>
								
					<td align='right' colspan='2'>
						<span>Ordem de serviço nº: </span>
					</td>
					<td align='left' width='180'>
						<label name='ordemservico'>OS Nº</label>
					</td>
				</tr>
			</table>
				<fieldset class='borda'>
					<legend class='borda'>Dados do Cliente</legend>
						<table width='100%' border="0">
							<tr>
								<td valign='top' width='300px'>
									<span class='span2'>Código</span>
									<br />
									<label name='modelo'>Código</label>
								</td>
													
								<td valign='top' width='180'>
									<span class='span2'>Data</span>
									<br />
									<label name='prefixo'>Data</label>
								</td>
							</tr>
							<tr>
								<td colspan='4'>
									<span class='span2'>Unidade</span>
									<br />
									<label name='unidade'>Unidade</label>
								</td>
							</tr>
						</table>
				</fieldset>

				<fieldset class='borda'>
					<legend class='borda'>Relação de Itens Entregues do Estoque</legend>
						<table width='100%'>
							<tr>
								<td>
									<table border="1" width="100%" height="100%" cellpadding='0' cellspancing='0' id='listapecas'>
										<tr>
											<td width="50px">Código</td>
											<td width="115px">Código Montadora</td>
											<td width="50px">Quant</td>
											<td width="55px">Unidade</td>
											<td width="500px">Descrição</td>
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
										<!--
									<table id="listapecas" width="100%" height="100%" cellpadding='0' cellspancing='0'>
										<thead> 
											<tr>
												<th class="span3">Código </th>
												<th class="span2">Código Montadora</th>
												<th class="span2">Quant</th>
												<th class="span2">Unidade</th>
												<th class="span2">Descrição</th>
											</tr>
										</thead>

											<tbody>
												<?php
												/*
													foreach ($pack['saidaitens'] as $saidaitens) {
														echo "<td width='50px' align='center'>$saidaitens->codigointerno</td>";
														    foreach($pack['itens'] as $itens){
															 	if($itens->id_itens == $saidaitens->codigointerno) {
															 		echo "<td width='115px' align='center'>$itens->codigomontadora</td>"; 
															 		break;
															 	}
														    }
														echo "<td width='50px' align='center'>$saidaitens->quantidade</td>";						foreach ($pack['unidademedida'] as $unidademedida) {
						 									 	if($unidademedida->id_unidademedida == $itens->id_unidademedida) {
															 		echo "<td width='55px' align='center'>$unidademedida->unidademedida</td>"; 
															 		break;
															 	}
															}
														    foreach($pack['itens'] as $itens){
															 	if($itens->id_itens == $saidaitens->codigointerno) {
															 		echo "<td width='500px' align='left'>$itens->descricao</td>"; 
															 		break;
															 	}
														    }
														echo "</tr>";
													}
												*/
												?>
											</tbody>
									</table>
														-->
								</td>
							</tr>
						</table>
				</fieldset>
									
				<fieldset class='borda'>
					<legend class='borda'>Observações</legend>
						<table width='100%'>
							<tr>
								<td>
									<label name='observacoes'>Observações</label>
								</td>
							</tr>
						</table>
				</fieldset>

				<fieldset class='borda'>
					<legend class='borda'>Recibo de Entrega dos Itens</legend>
						<table width='100%' border="0">
							<tr>
								<td colspan='4' height="20px">
									<span>Nome __________________________________________________________________________________</span>
								</td>
							</tr>

							<tr>
								<td height="30px" width="40%">
									<span>Data ____/ ____/ ______</span>
								</td>
								<td colspan='3'>
									<span>Assinatura__________________________________________________________</span>
								</td>
							</tr>
						</table>
				</fieldset>
		</td>
	</tr>			
</table>