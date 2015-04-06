<script type="text/javascript" src="<?php echo base_url(); ?>style/js/saidaItem.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/json.js"></script>
<?php echo form_fieldset("Editar Saída de Itens"); ?>

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

										if($pack['saidaitens']->row()->codigointerno == $itens->id_itens){
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
 						<input class="form-control input_Vazio" value="<?php echo $pack['saidaitens']->row()->quantidade; ?>" type="text" id="saida" class="form-control input_Vazio" placeholder="Qtd." name="quantidade" aria-describedby="basic-addon1" style="max-width:90px" disabled/>
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
 						<input class="form-control" type="text" id="desconto"  name="desconto" aria-describedby="basic-addon1" style="max-width:90px" disabled>
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
  						<span id="basic-addon1">Ordem de Serviço</span>
 						<input type="text" class="form-control" value="<?php echo $pack['saidaitens']->row()->ordemservico; ?>" placeholder="Ordem Serviço" name="ordemservico" aria-describedby="basic-addon1" style="max-width:110px" maxlength="11" disabled>
 					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="control-group">
					<div class="controls">
						<span id="basic-addon1">Cliente</span>
						<select class="form-control input_Vazio" name="id_cliente" placeholder="Clientes" disabled>
							<option>Selecione...</option>
							<?php 

							foreach ($pack['cliente'] as $cliente) {
								
								if($pack['saidaitens']->row()->id_cliente == $cliente->id_cliente){

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
 						<input type="text" class="form-control input_Vazio dataValidar" value="<?php echo $pack['saidaitens']->row()->datasaida; ?>"  placeholder="Data Saída" id="datasaida" name="datasaida" aria-describedby="basic-addon1" style="max-width:100px" disabled>
 					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<div class="control-group">
					<div class="controls">
						<span id="basic-addon1">Observações</span>
						<textarea name="observacoes" cols="30" rows="2"  class="form-control" disabled><?php echo $pack['saidaitens']->row()->observacoes; ?></textarea>
					</div>	
				</div>
			</td>
		</tr>

		</tbody>
	</table>


	<?php 

		if($pack['saidaitens']->row()->estorno != 't') {
			echo '<button class="btn btn-danger pull-center" data-toggle="modal" data-target="#modelEstorno"> ESTORNAR </button>';
		} else {
			echo '<button class="btn btn-danger pull-center" disabled> JÁ ESTORNADO </button>';
		}

	 ?>
	<?php echo anchor('main/redirecionar/estoque-saida_Itens', '<div class="btn btn-warning pull-center"> CANCELAR </div>')?>



<!-- Modal para estornar -->
<div class="modal fade" id="modelEstorno" tabindex="-1" role="dialog" aria-labelledby="modelEstorno" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

     <?php $form = array('name' => 'form'); 
		echo form_open("edicoes/editando_Saida_Itens"); ?>

		<?php echo form_hidden('id_saidaitens',$pack['saidaitens']->row()->id_saidaitens); ?>
		<?php echo form_hidden('codigointerno',$pack['saidaitens']->row()->codigointerno); ?>
		<?php echo form_hidden('quantidade',$pack['saidaitens']->row()->quantidade); ?>

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar">Estornar esta saída?</h4>
      </div>

      <div class="modal-body">
      	<p>Tem certeza que deseja estornar esta saída?</p>
      </div>

      <div class="modal-footer">
 		<button type="submit" class="btn btn-danger pull-center" data-toggle="modal" data-target="#modelEstorno"> CONFIRMAR ESTORNO </button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">CANCELAR</button>

       </div>
       <?php echo form_fieldset_close(); ?>
    </div>
  </div>
</div>