<table border="0" class="page">
	<tr>
		<td colspan="4">
			<fieldset class="borda">
				<legend class="borda">Identificação do Contratante</legend>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td valign="top" colspan="2">
								<label class="span2">Descrição</label>
								<br />
								<select class="form-control input_Vazio"  name="id_fornecedorprestador" placeholder="Fornecedor">
									<option>Selecione...</option>
									<?php 
										foreach ($pack['itens'] as $itens) {
											
											if($this->session->flashdata('id_itens') == $itens->id_itens){
												echo '<option selected value="'.$itens->id_itens.'">'.$itens->descricao.'</option>';
											} else {
												echo '<option value="'.$itens->id_itens.'">'.$itens->descricao.'</option>';
											}

										}
									?>
								</select>
							</td>
							
							<td valign="top" colspan="2">
								<label class="span2">Quantidade</label>
								<br />
								<input type="text" name="qtdetiquetas" class="form-controls" style="max-width:30px"/>
							</td>
						</tr>

						<tr>				
							<td>
							
							</td>
						</tr>
				</table>
			</fieldset>
		</td>
	</tr>
</table>