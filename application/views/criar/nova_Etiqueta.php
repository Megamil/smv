<!--Usado para preencher a lista de itens selecionados-->
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/etiquetas.js"></script>

<table border="0" class="page">
	<tr>
		<td colspan="4">
			<fieldset class="borda">
				<legend class="borda">Inclusão dos Itens na Etiqueta</legend>

				<table class="table table-striped table-hover table-condensed" id="tabela">
					<thead> 
						<tr>
							<th class="span2">DESCRIÇÃO</th>
							<th class="span2">QUANTIDADE</th>
							<th class="span2">IMPRIMIR</th>
						</tr>
					</thead>

					<tbody>

						<?php 
							foreach ($pack['itens'] as $itens) {
	
								echo '<tr align="center">';
								echo '<td> <label style="min-width:500px">Código: '.$itens->id_itens.' - '.$itens->descricao.'</label> </td>';
								echo '<td> <input class="form-control" name="qts" id="qts" placeholder="Quantidade" value="1" style="max-width:50px"> </td>';
								echo '<td> <input type="checkbox" name="imprimir" value="'.$itens->id_itens.'"></td>';
								echo '</tr>';

							}
						?>

					</tbody>
				</table>

				<br><hr>

					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>				
							<td colspan="12" align="center">
								<div class="btn btn-info pull-center" data-toggle="modal" data-target="#modelConfigurarEtiqueta">Configurar Etiquetas</div>
							</td>
						</tr>
					</table>

			</fieldset>
		</td>
		<td>

		</td>
	</tr>
</table>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	 /////////////////////////////////// MODAL PARA AS CONFIGURAÇÕES DAS ETIQUETAS /////////////////////////////////////////////////////////////
	 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
-->
<div class="modal fade" id="modelConfigurarEtiqueta" tabindex="-1" role="dialog" aria-labelledby="modelConfigurar" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
      
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
			<h4 class="modal-title" id="modelDeletar">Configuração das Etiquetas para impressão</h>
		</div>
		<div class="errorModalItem" ></div>
		<div class="modal-body">
      		<form action="/smv/etiquetas/configurar_etiqueta" method="post" accept-charset="utf-8" target="_blank">
				<div class="erro_Campo_Vazio" ></div>
				<table>
					<tr>
						<td align="center">
							<fieldset class="borda">
								<legend class="borda">Configuração das Etiquetas</legend>
									<table border="0" class="table table-condensed table-bordered">
										<tr>
											<td colspan="2" align="center">
												<label>Nome</label><br />
												<div class="input-group">
													<input type="text" class="form-control" name="titulo" placeholder="Título" style="max-width:250px" />
													<span class="input-group-btn">
														<button type="button" class="btn" data-dismiss="modal">Salvar</button>
													</span>
    											</div><!-- /input-group -->
											</td>
										</tr>
										<tr>
											<td align="center">
												<label>Margem Superior(mm)</label><br />
												<input type="text" class="form-control input_Vazio" name="margemsuperior" placeholder="mm" style="max-width:70px" />
											</td>
											<td align="center">
												<label>Margem Direita(mm)</label><br />
												<input type="text" class="form-control input_Vazio" name="margemdireita" placeholder="mm" style="max-width:70px" />
											</td>
										</tr>
										<tr>
											<td align="center">
												<label>Margem Esquerda(mm)</label><br />
												<input type="text" class="form-control input_Vazio" name="margemesquerda" placeholder="mm" style="max-width:70px" />
											</td>
											<td align="center">
												<label>Espaço das Etiquetas(mm)</label><br />
												<input type="text" class="form-control input_Vazio" name="espacoetiqueta" placeholder="mm" style="max-width:70px" />
											</td>
										</tr>
										<tr>
											<td align="center">
												<label>Largura(mm)</label><br />
												<input type="text" class="form-control input_Vazio" name="largura" placeholder="mm" style="max-width:70px" />
											</td>
											<td align="center">
												<label>Altura(mm)</label><br />
												<input type="text" class="form-control input_Vazio" name="altura" placeholder="mm" style="max-width:70px" />
											</td>
										</tr>
										<tr>
											<td align="center">
												<label>Fonte</label><br />
												<select name="fonte" id="fonte" class="form-control input_Vazio" placeholder="Fonte" style="max-width:200px">
													<option value="" selected>Selecione...</option>
													<option value="courier">Courier</option>
													<option value="helvetica">Helvetica</option>
													<option value="times">Times New Roman</option>
													<option value="zapfdingbats">Zapfdingbats</option>
												</select>
											</td>
											<td align="center">
												<label>Tamanho Fonte</label><br />
												<select name="tamanhofonte" id="tamanhofonte" class="form-control input_Vazio" placeholder="Tamanho Fonte" style="max-width:200px">
													<option value="" selected>Selecione...</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</td>
										</tr>
										<tr>
											<td align="center">
												<label>Tamanho Papel</label><br />
												<select name="papel" id="papel" class="form-control input_Vazio" placeholder="Tamanho Papel" style="max-width:200px">
													<option value="" selected>Selecione...</option>
													<option value="A4">A4</option>
													<option value="A5">A5</option>
													<option value="Letter">Letter</option>
												</select>
											</td>

											<td align="center">
												<label>Etiquetas salvas</label><br />
												<select name="papel" id="papel" class="form-control" placeholder="Etiquetas" style="max-width:200px">
												<option value="" selected>Selecione...</option>
													<?php
														// foreach ($etiquetas as $eti) {

														//	 echo "<option value='$eti->id_etiqueta'>$eti->nome</option>";

														// }
													?>
												</select>
											</td>

										</tr>
									</table>
							</fieldset>
							
						</td>
					</tr>
				</table>
				<?php echo form_close(); ?>

		<div class="modal-footer">
			<button type="submit" class="btn btn-info" id="validar_Enviar">Imprimir</button>
		</div>
		</div>
		</div>
	</div>
</div>