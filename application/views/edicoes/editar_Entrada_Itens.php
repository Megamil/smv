<script type="text/javascript" src="<?php echo base_url(); ?>style/js/entradaItem.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/json.js"></script>
<?php echo form_fieldset("Editar Entrada de Itens"); ?>
 <?php $form = array('name' => 'form'); 
	echo form_open("edicoes/editando_Entrada_Itens"); ?>

	<?php echo form_hidden('id_entradaitens',$pack['entradaitens']->row()->id_entradaitens); ?>


	<input type="hidden" id="maximo" disabled>

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
						<select class="form-control input_Vazio" name="codigointerno" id="codigointerno" placeholder="Descrição do Item" disabled>
							<option>Selecione...</option>
							<?php 
								foreach ($pack['itens'] as $itens) {

									if($pack['entradaitens']->row()->codigointerno == $itens->id_itens){
										echo '<option selected value="'.$itens->id_itens.'">'.$itens->descricao.' Quantidade Atual: '.$itens->estoquedisponivel.'</option>';
									} else {
										echo '<option value="'.$itens->id_itens.'">'.$itens->descricao.' Quantidade Atual: '.$itens->estoquedisponivel.'</option>';
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
 						<input class="form-control input_Vazio" type="text" id="entrada" class="form-control input_Vazio" value="<?php echo $pack['entradaitens']->row()->quantidade; ?>" placeholder="Qtd." name="quantidade" aria-describedby="basic-addon1" style="max-width:90px" disabled/>
					</div>
				</div>
			</td>

			<td>	
				<div class="control-group">
					<div class="controls">
  						<span id="basic-addon1">Valor Bruto</span>
 						<input class="form-control" type="text" id="preco" name="valorbruto" aria-describedby="basic-addon1" style="max-width:90px" disabled>
					</div>
				</div>
			</td>

			<td>	
				<div class="control-group">
					<div class="controls">	
  						<span id="basic-addon1">Desconto %</span>
 						<input class="form-control" type="text" id="desconto" name="desconto" aria-describedby="basic-addon1" style="max-width:90px" disabled>
 					</div>
				</div>
			</td>

			<td>	
				<div class="control-group">
					<div class="controls">
  						<span id="basic-addon1">Valor Líquido</span>
 						<input class="form-control" type="text" id="resultado" name="valorliquido" aria-describedby="basic-addon1" style="max-width:90px" disabled>
  					</div>
				</div>
			</td>

			<td>	
				<div class="control-group">
					<div class="controls">	
  						<span id="basic-addon1">Nota Fiscal</span>
 						<input type="text" class="form-control input_Vazio" placeholder="Nota Fiscal" value="<?php echo $pack['entradaitens']->row()->numnotafiscal; ?>" name="numnotafiscal" aria-describedby="basic-addon1" style="max-width:110px" maxlength="11"/>
 					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="control-group">
					<div class="controls">
						<span id="basic-addon1">Fornecedor / Prestador</span>
						<select class="form-control input_Vazio" name="id_fornecedor" placeholder="Clientes">
							<option>Selecione...</option>
							<?php 

							foreach ($pack['fornecedorprestador'] as $fornecedorprestador) {
								
								if($pack['entradaitens']->row()->id_fornecedor == $fornecedorprestador->id_fornecedorprestador){

									echo '<option selected value="'.$fornecedorprestador->id_fornecedorprestador.'">'.$fornecedorprestador->nome.'</option>';
								
								} else {
								
									echo '<option value="'.$fornecedorprestador->id_fornecedorprestador.'">'.$fornecedorprestador->nome.'</option>';
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
  						<span id="basic-addon1">Data Entrada</span>
 						<input type="text" class="form-control input_Vazio dataValidar" value="<?php echo $pack['entradaitens']->row()->dataentrada; ?>" placeholder="Data Entrada" id="dataentrada" name="dataentrada" aria-describedby="basic-addon1" style="max-width:100px" disabled/>
 					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<div class="control-group">
					<div class="controls">
						<span id="basic-addon1">Observações</span>
						<textarea name="observacoes" cols="30" rows="2" class="form-control"><?php echo $pack['entradaitens']->row()->observacoes; ?></textarea>
					</div>	
				</div>
			</td>
		</tr>

		</tbody>
	</table>

	<button type="submit" class="btn btn-success pull-center" id="validar_Enviar"> Salvar Edição </button>

	<?php 
	 	echo anchor('main/redirecionar/estoque-entrada_Itens', '<div class="btn btn-info pull-center"> CANCELAR </div>');
		echo form_fieldset_close();
	?>
