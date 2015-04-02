<?php echo form_fieldset("Editar Saída de Itens");
$form = array('name' => 'form'); 
echo form_open("edicoes/editando_Saida_Itens"); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead></thead>
		<tbody>
		<tr>
			<td colspan="5">
				<div class="control-group">
					<div class="controls">
						<span id="basic-addon1">Descrição </span>
					</div>
				</div>
 			
				<div class="control-group">
					<div class="controls">
						<select class="form-control input_Vazio" name="codigointerno" placeholder="Descrição do Item">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['itens'] as $itens) {
									if($this->session->flashdata('itens') == $itens->id_itens){
										echo '<option selected value="'.$itens->id_itens.'">'.$itens->descricao.'</option>';
									} else {
										echo '<option value="'.$itens->id_itens.'">'.$itens->descricao.'</option>';
									}
								}
							?>
						</select>
					</div>
				</div>
  			</td>
		</tr>	
		<tr>	
			<td>	
				<div class="control-group">
					<div class="controls">
  						<span id="basic-addon1">Quantidade</span>
 						<input type="text" class="form-control input_Vazio" placeholder="Qtd." name="quantidade" aria-describedby="basic-addon1" style="max-width:90px" />
					</div>
				</div>
			</td>

			<td>	
				<div class="control-group">
					<div class="controls">
  						<span id="basic-addon1">Valor Bruto</span>
 						<input type="text" class="form-control input_Vazio" placeholder="Valor Bruto" name="valorbruto" aria-describedby="basic-addon1" style="max-width:90px" disabled/>
					</div>
				</div>
			</td>

			<td>	
				<div class="control-group">
					<div class="controls">	
  						<span id="basic-addon1">Desconto %</span>
 						<input type="text" class="form-control input_Vazio" placeholder="Desconto %" name="desconto" aria-describedby="basic-addon1" style="max-width:90px" disabled/>
 					</div>
				</div>
			</td>

			<td>	
				<div class="control-group">
					<div class="controls">
  						<span id="basic-addon1">Valor Líquido</span>
 						<input type="text" class="form-control input_Vazio" placeholder="Valor Líquido" name="valorliquido" aria-describedby="basic-addon1" style="max-width:90px" disabled />
  					</div>
				</div>
			</td>

			<td>	
				<div class="control-group">
					<div class="controls">	
  						<span id="basic-addon1">Ordem de Serviço</span>
 						<input type="text" class="form-control input_Vazio" placeholder="Ordem Serviço" name="ordemservico" aria-describedby="basic-addon1" style="max-width:110px" maxlength="11"/>
 					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="control-group">
					<div class="controls">
						<span id="basic-addon1">Cliente</span>
						<select class="form-control input_Vazio" name="id_cliente" placeholder="Clientes">
							<option>Selecione...</option>
							<?php 

							foreach ($pack['cliente'] as $cliente) {
								
								if($this->session->flashdata('cliente') == $cliente->id_cliente){

									echo '<option selected value="'.$cliente->id_cliente.'">'.$cliente->nome.'</option>';
								
								} else {
								
									echo '<option value="'.$cliente->id_cliente.'">'.$cliente->nome.'</option>';
								}
							
							}

						?>
						</select>
					</div>
				</div>
			</td>

			<td colspan="3">
				<div class="control-group">
					<div class="controls">
  						<span id="basic-addon1">Data Saída</span>
 						<input type="text" class="form-control input_Vazio dataValidar" placeholder="Data Saída" name="datasaida" aria-describedby="basic-addon1" style="max-width:100px" />
 					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<div class="control-group">
					<div class="controls">
						<span id="basic-addon1">Observações</span>
						<textarea name="observacoes" cols="30" rows="2" class="form-control input_Vazio"></textarea>
					</div>	
				</div>
			</td>
		</tr>

		</tbody>
	</table>

	<?php echo form_submit(array('name'=>'cadastrarNovo'),'Editar Saída de Itens', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/estoque-saida_Itens', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>