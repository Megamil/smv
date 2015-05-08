<form action="/smv/etiquetas/configurar_etiqueta" method="post" accept-charset="utf-8" target="_blank">
<div class="erro_Campo_Vazio" ></div>
<table width="40%">
	<tr>
		<td align="center">
			<fieldset class="borda">
				<legend class="borda">Configuração das Etiquetas</legend>
					<table border="0" class="table table-condensed table-bordered">
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
								<select name="fonte" id="fonte" class="form-control input_Vazio" style="max-width:177px">
									<option value="" selected>Selecione...</option>
									<option value="courier">Courier</option>
									<option value="helvetica">Helvetica</option>
									<option value="times">Times New Roman</option>
									<option value="zapfdingbats">Zapfdingbats</option>
								</select>
							</td>
							<td align="center">
								<label>Tamanho Fonte</label><br />
								<select name="tamanhofonte" id="tamanhofonte" class="form-control input_Vazio" style="max-width:125px">
									<option value="" selected>Selecione...</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</td>
						</tr>
						<tr>
							<td align="center" colspan="2">
								<label>Tamanho Papel</label><br />
								<select name="papel" id="papel" class="form-control input_Vazio" style="max-width:125px">
									<option value="" selected>Selecione...</option>
									<option value="A4">A4</option>
									<option value="A5">A5</option>
									<option value="Letter">Letter</option>
								</select>
							</td>
						</tr>
					</table>
			</fieldset>
			<button type="submit" class="btn btn-info" id="validar_Enviar">Imprimir</button>
		</td>
	</tr>
</table>
<?php echo form_close(); ?>