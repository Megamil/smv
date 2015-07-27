<!--Usado para preencher a lista de itens selecionados-->
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/etiquetas.js"></script>
<form action="/smv/etiquetas/configurar_etiqueta" method="post" accept-charset="utf-8" target="_blank">
<fieldset class="borda">
	<legend class="borda">Inclusão dos Itens na Etiqueta</legend>

	<table class="table table-striped table-hover table-condensed" id="tabelaDESATIVADO">
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
					echo '<td> <input class="form-control" name="qts[]" id="qts" placeholder="Quantidade" value="1" style="max-width:50px"> </td>';
					//echo '<td> <input class="imprimircb" type="checkbox" name="imprimir[]" id="etiqueta'.$itens->id_itens.'" value="'.$itens->id_itens.'"></td>';
					echo '<td>
						<select name="imprimir[]" class="form-control imprimircb" placeholder="Etiquetas" style="max-width:200px">
						<option value="0" selected>Não Imprimir</option>
						<option value="'.$itens->id_itens.'">Imprimir</option>
						</select>
					</td>';
												
					echo '</tr>';

				}
			?>
		
		</tbody>
		<hr>
		<div class="btn btn-info pull-center" data-toggle="modal" data-target="#modelConfigurarEtiqueta" id="config">Configurar Etiquetas</div>
	</table>
	

</fieldset>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	 /////////////////////////////////// MODAL PARA AS CONFIGURAÇÕES DAS ETIQUETAS /////////////////////////////////////////////////////////////
	 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
-->
<div class="modal fade" id="modelConfigurarEtiqueta" tabindex="-1" role="dialog" aria-labelledby="modelConfigurar" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
      
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" id="fecharmodal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
			<h4 class="modal-title" id="modelDeletar">Configuração das Etiquetas para impressão</h>
		</div>
		<div class="errorModalItem" ></div>
		<div class="modal-body">
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
													<input type="text" class="form-control" name="titulo" placeholder="(Opcional, irá gravar no banco)" id="nomeEtiqueta" style="max-width:250px" />
											</td>
										</tr>
										<tr>
											<td align="center">
												<label>Margem Superior(mm)</label><br />
												<input type="text" class="form-control input_Vazio" name="margemsuperior" id="margemsuperior" placeholder="mm" style="max-width:70px" />
											</td>
											<td align="center">
												<label>Margem Direita(mm)</label><br />
												<input type="text" class="form-control input_Vazio" name="margemdireita" id="margemdireita" placeholder="mm" style="max-width:70px" />
											</td>
										</tr>
										<tr>
											<td align="center">
												<label>Margem Esquerda(mm)</label><br />
												<input type="text" class="form-control input_Vazio" name="margemesquerda" id="margemesquerda" placeholder="mm" style="max-width:70px" />
											</td>
											<td align="center">
												<label>Espaço das Etiquetas(mm)</label><br />
												<input type="text" class="form-control input_Vazio" name="espacoetiqueta" id="espacoetiqueta" placeholder="mm" style="max-width:70px" />
											</td>
										</tr>
										<tr>
											<td align="center">
												<label>Largura(mm)</label><br />
												<input type="text" class="form-control input_Vazio" name="largura" id="largura" placeholder="mm" style="max-width:70px" />
											</td>
											<td align="center">
												<label>Altura(mm)</label><br />
												<input type="text" class="form-control input_Vazio" name="altura" id="altura" placeholder="mm" style="max-width:70px" />
											</td>
										</tr>
										<tr>
											<td align="center">
												<label>Fonte</label><br />
												<select name="fonte" id="fonte" class="form-control input_Vazio" placeholder="Fonte" style="max-width:200px">
													<option value="courier">Courier</option>
													<option value="helvetica">Helvetica</option>
													<option value="times" selected>Times New Roman</option>
												</select>
											</td>
											<td align="center">
												<label>Tamanho Fonte</label><br />
												<select name="tamanhofonte" id="tamanhofonte" class="form-control input_Vazio" placeholder="Tamanho Fonte" style="max-width:200px">
													<option value="7">7</option>
													<option value="8" selected>8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</td>
										</tr>
										<tr>
											<td align="center">
												<label>Tamanho Papel</label><br />
												<select name="papel" id="papel" class="form-control" placeholder="Tamanho Papel" style="max-width:200px">
													<option value="A4" selected>A4</option>
													<option value="A5">A5</option>
													<option value="Letter">Letter</option>
												</select>
											</td>

											<td align="center">
												<label>Etiquetas salvas</label><br />
												<select name="etiqueta" id="etiqueta" class="form-control" placeholder="Etiquetas" style="max-width:200px">
												<option value="" selected>Selecione...</option>
													<?php
														 foreach ($pack['etiquetas'] as $eti) {

														 	echo "<option value='$eti->id_etiqueta'>$eti->nomeetiqueta</option>";

														 }
													?>
												</select>
											</td>

										</tr>
									</table>
							</fieldset>
							
						</td>
					</tr>
				</table>
		<div class="modal-footer">
			<button type="submit" class="btn btn-info" id="validar_Enviar">Imprimir</button>
		</div>
		</form>
		</div>
		</div>
	</div>
</div>