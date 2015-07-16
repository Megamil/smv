<!--Usado para preencher alguns campos-->
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/json.js"></script>
<?php echo form_fieldset("Editar Autorização de Fornecimento de Serviços"); 
$form = array('name' => 'form'); 
echo form_open("edicoes/editando_Af_Servicos",$form); ?>

	<div class="erro_Campo_Vazio" ></div>

		<?php echo form_hidden('id_afservicos',$pack['afservicos']->row()->id_afservicos); ?>

<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Ano</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" value="<?php echo $pack['afservicos']->row()->ano; ?>" name="ano" aria-describedby="basic-addon1" placeholder="Ano" style="max-width:80px" />
					</div>
				</div>
			</td>

			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Número AF</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="id_afservicos" id="id_afservicos" value="<?php echo $pack['afservicos']->row()->id_afservicos; ?>" aria-describedby="basic-addon1" placeholder="Nº AF" style="max-width:80px" disabled/>
					</div>
				</div>
			</td>

			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Ordem de Serviço</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<select class="form-control input_Vazio"  name="id_ordemservico" id="id_ordemservico" placeholder="Ordem de Serviço">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['ordemservico'] as $ordemservico) {
								if($pack['afservicos']->row()->id_ordemservico == $ordemservico->id_ordemservico){
									echo '<option selected value="'.$ordemservico->id_ordemservico.'">'.$ordemservico->id_ordemservico.'</option>';
								} else {
									echo '<option value="'.$ordemservico->id_ordemservico.'">'.$ordemservico->id_ordemservico.'</option>';
								}
							}
						?>
					</select>
					</div>
				</div>
			</td>
		
			<td valign="top" colspan="2">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Fornecedor / Prestador</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<select class="form-control input_Vazio"  name="id_fornecedorprestador" placeholder="Fornecedor/Prestador" style="max-width:450px">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['fornecedorprestador'] as $fornecedorprestador) {
								if($pack['afservicos']->row()->id_fornecedor == $fornecedorprestador->id_fornecedorprestador){
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
		</tr>
		<tr>
		<!-- ***************************** FINAL DA PRIMEIRA LINHA *********************************** -->
		<tr>
			<td align="left" valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline"><strong>PEÇAS SUBSTITUÍDAS</strong></span>
					</div>
				</div>
			</td>
			<td valign="middle" colspan="4" align="left">
				<div class="control-group">
					<div class="controls">
					<div class="btn btn-info pull-center no-print" data-toggle="modal" data-target="#modelAdicionarItem">INCLUIR</div>
					</div>
				</div>	
			</td>
		</tr>
		<!-- ***************************** FINAL DA SEGUNDA LINHA *********************************** -->
		<tr>
			<td valign="top" colspan="9">
					<table class="table table-striped table-hover table-condensed">
						<thead> 
							<tr>
								<th class="span2">Código</th>
								<th class="span2">Código Montadora</th>
								<th class="span2">Descrição</th>
								<th class="span2">Unidade</th>
								<th class="span2">Qtde.</th>
								<th class="span2">Valor Unitário</th>
								<th class="span2">Desc. % </th>
								<th class="span2">Valor total com desc</th>
								<th class="span2 no-print">Excluir</th>
							</tr>
						</thead>

						<tbody>
							<?php
								$custo = 0;
								foreach ($pack['afitens'] as $afitens) {
									echo "<tr>";
										$liquido = ( $afitens->precobruto - ( ($afitens->precobruto * $afitens->desconto) /100) );
										$liquido = $liquido * $afitens->quantidade;
										$custo = $custo + $liquido;
						    			echo "<td>$afitens->id_itens</td>";
						    			echo "<td>$afitens->codigomontadora</td>";
						    			echo "<td>$afitens->descricao</td>";
						    			echo "<td>$afitens->unidademedida</td>";
						    			echo "<td>$afitens->quantidade</td>";
						    			echo "<td>R$ ".number_format($afitens->precobruto, 2,',','')."</td>";
						    			echo "<td>$afitens->desconto %</td>";
						    			echo "<td>R$ ".number_format($liquido, 2,',','')."</td>";
										echo '<td class="no-print">'.anchor('edicoes/excluir_Af_Servicos_x_itens/'.$afitens->id_afservicos_x_itens.'/'.$pack['afservicos']->row()->id_afservicos,'Excluir').'</td>';
									echo "</tr>";
								}
								
							?>
						<tr>
							<td colspan="8" valign="top" align="right">
										<span class="help-inline">Valor Total</span>
							</td>

							<td align="right">
								<div class="control-group">
									<div class="controls input-group">
										<span class="input-group-addon" id="basic-addon1">R$</span>
										<input type="text" class="form-control" name="valortotal" value="<?php echo number_format($custo, 2,',',''); ?>" aria-describedby="basic-addon1" placeholder="Valor Total" style="max-width:150px" disabled/>
									</div>
								</div>
							</td>
						</tr>
						</tbody>
					</table>
			</td>
		</tr>
		<!-- ***************************** FINAL DA TERCEIRA LINHA *********************************** -->
		<tr>
			<td align="left" valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline"><strong>SERVIÇOS</strong></span>
					</div>
				</div>
			</td>
			<td valign="middle" colspan="4" align="left">
				<div class="control-group">
					<div class="controls">
					<div class="btn btn-info pull-center" data-toggle="modal" data-target="#modelAdicionarServico">INCLUIR</div>
					</div>
				</div>	
			</td>
		</tr>
		<!-- ***************************** FINAL DA QUARTA LINHA *********************************** -->
		<tr>
			<td valign="top" colspan="6">
					<table class="table table-striped table-hover table-condensed">
						<thead> 
							<tr>
								<th class="span2">Descrição</th>
								<th class="span2">Unid.</th>
								<th class="span2">Qtde.</th>
								<th class="span2">Valor Unitário</th>
								<th class="span2">Valor Total</th>
								<th class="span4 no-print">Excluir</th>
							</tr>
						</thead>

						<tbody>
							<?php

								$soma = 0;

								foreach ($pack['afsservicos'] as $afsservicos) {
									echo "<tr>";
										$soma = $soma + $afsservicos->valortotal; 
						    			echo "<td>$afsservicos->descricao</td>";
						    			echo "<td>$afsservicos->unidademedida</td>";
						    			echo "<td>$afsservicos->quantidade</td>";
						    			echo "<td>R$ ".number_format($afsservicos->valorunitario, 2,',','')."</td>";
						    			echo "<td>R$ ".number_format($afsservicos->valortotal, 2,',','')."</td>";
										echo '<td class="span4 no-print">'.anchor('edicoes/excluir_Af_Servicos_x_servicos/'.$afsservicos->id_afservicos_x_servicos.'/'.$pack['afservicos']->row()->id_afservicos,'Excluir').'</td>';
									echo "</tr>";
								}
							?>
						<tr>
							<td colspan="5" valign="top" align="right">
										<span class="help-inline">Valor Total</span>
							</td>

							<td align="right">
								<div class="control-group">
									<div class="controls input-group">
										<span class="input-group-addon" id="basic-addon1">R$</span>
										<input type="text" class="form-control" value="<?php echo number_format($soma, 2,',',''); ?>" name="valortotal" aria-describedby="basic-addon1" placeholder="Valor Total" style="max-width:150px" disabled/>
									</div>
								</div>
							</td>
						</tr>
						</tbody>
					</table>
			</td>
		</tr>
		<!-- ***************************** FINAL DA QUINTA LINHA *********************************** -->
		<tr>
			<td align="left" valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline"><strong>EMPENHOS</strong></span>
					</div>
				</div>
			</td>
			<td  valign="middle" colspan="4" align="left">
				<div class="control-group">
					<div class="controls">
						<div class="btn btn-info pull-center no-print" data-toggle="modal" data-target="#modelAdicionarEmpenho">INCLUIR</div>
					</div>
				</div>	
			</td>
		</tr>
		<!-- ***************************** FINAL DA QUARTA LINHA *********************************** -->
		<tr>	
			<td valign="top" colspan="6">
				<table class="table table-striped table-hover table-condensed">
						<thead> 
							<tr>
								<th class="span2">Número/Ano</th>
								<th class="span2">Segmento</th>
								<th class="span2">Dotação</th>
								<th class="span2">Valor</th>
								<th class="span2">Nota Fiscal</th>
								<th class="span2">Contrato/Ata</th>
								<th class="span2 no-print">Excluir</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$soma = 0;
								foreach ($pack['afempenho'] as $afempenho) {
									$soma = $soma + $afempenho->valorempenho; 
									echo "<tr>";
										echo "<td>$afempenho->numeroempenho</td>";
										echo "<td>$afempenho->segmento</td>";
						    			echo "<td>$afempenho->codigonumero</td>";
						    			echo "<td>R$ ".number_format($afempenho->valorempenho, 2,',','')."</td>";
						    			echo "<td>$afempenho->numeroficha</td>";
						    			echo "<td>$afempenho->numcontratoata</td>";
										echo '<td class="no-print">'.anchor('edicoes/excluir_Af_Servicos_x_Pecas/'.$afempenho->id_afservicos_x_empenho.'/'.$pack['afservicos']->row()->id_afservicos,'Excluir').'</td>';
									echo "</tr>";
								}
							
							?>
							<tr>
							<td colspan="6" valign="top" align="right">
										<span class="help-inline">Valor Total</span>
							</td>

							<td align="right">
								<div class="controls input-group">
									<span class="input-group-addon" id="basic-addon1">R$</span>
										<input type="text" class="form-control" name="valortotal2" aria-describedby="basic-addon1" value="<?php echo number_format($soma, 2,',',''); ?>" placeholder="Valor Total" style="max-width:150px" disabled/>
									</div>
								</div>
							</td>
						</tr>
						</tbody>
					</table>

			</td>
		</tr>
		<!-- ***************************** FINAL DA SÉTIMA LINHA *********************************** -->
		<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Contrato / Ata</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls input-group">

					<select class="form-control input_Vazio" name="id_contratoata" id="id_contratoata" placeholder="Contrato/Ata" style="max-width:400px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['contratoata'] as $contratoata) {

									$inicio = substr($contratoata->numerocontratoata, 0, 4);
									$meio = substr($contratoata->numerocontratoata, 4, 4);
									$fim = substr($contratoata->numerocontratoata, 8, 4);
									$formatado = $inicio . "/" . $meio. "-" .$fim;	

									if($pack['afservicos']->row()->id_contratoata == $contratoata->id_contratoata){
										echo '<option selected value="'.$contratoata->id_contratoata.'">'.$formatado.'</option>';
									} else {
										echo '<option value="'.$contratoata->id_contratoata.'">'.$formatado.'</option>';
									}
								}
							?>
						</select>
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Início da vigência</span>
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">
					<input type="date" class="form-control input_Vazio" name="iniciovigencia" id="iniciovigencia" aria-describedby="basic-addon1" placeholder="Inicio Vigência" style="max-width:150px" disabled/>
					</div>
				</div>
			</td>

			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Término da vigência</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="date" class="form-control input_Vazio" name="fimvigencia" id="fimvigencia" aria-describedby="basic-addon1" placeholder="Fim Vigência" style="max-width:150px" disabled/>
					</div>
				</div>
			</td>
			
			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">P.A. registro de preços</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control processo" name="paregprecos" id="paregprecos" aria-describedby="basic-addon1" placeholder="PA Reg. Preços" style="max-width:220px" disabled/>
					</div>
				</div>
			</td>

			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">P.A. de empenho</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control processo" name="paempenho" id="paempenho" aria-describedby="basic-addon1"  placeholder="PA Empenho" style="max-width:220px" disabled/>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA SÉTIMA LINHA *********************************** -->
		<tr>
			<td valign="top" colspan="5">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Objeto</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<textarea name="id_objeto" class="form-control input_Vazio" cols="140" id="objeto" rows="1" placeholder="Objeto" disabled></textarea>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA OITAVA LINHA *********************************** -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prazo de entrega</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="prazoentrega" id="prazoentrega" aria-describedby="basic-addon1" placeholder="Prazo Entrega" style="max-width:185px" maxlength="20" disabled/>
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prazo de pagamento</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="prazopagto" id="prazopagto" aria-describedby="basic-addon1" placeholder="Prazo Pagto" style="max-width:460px" disabled/>
					</div>
				</div>
			</td>

			<td valign="middle">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Contato</span>
					</div>
				</div>
		
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="contato" value="<?php echo $pack['afservicos']->row()->contato; ?>" aria-describedby="basic-addon1" placeholder="Contato" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Orçamento</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" value="<?php echo $pack['afservicos']->row()->orcamento; ?>" name="orcamento" aria-describedby="basic-addon1" placeholder="Orçamento" />
					</div>
				</div>
			</td>

			<td valign="top" colspan="2">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Veículo Prefixo</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls input-group">
					<span class="help-inline input-group-addon">DT-</span>
					<input type="text" class="form-control input_Vazio" name="id_veiculoprefixo" id="id_veiculoprefixo" aria-describedby="basic-addon1" placeholder="Prefixo" style="max-width:100px" disabled/>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA NONA LINHA *********************************** -->
		<tr>
			<td valign="middle" colspan="2">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Colaborado responsável 1</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<select class="form-control input_Vazio" name="id_colaborador" placeholder="Colaborador 1" style="max-width:240px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['colaborador'] as $colaborador) {
									if($pack['afservicos']->row()->id_colaborador == $colaborador->id_colaborador){
										echo '<option selected value="'.$colaborador->id_colaborador.'">'.$colaborador->nome.'</option>';
									} else {
										echo '<option value="'.$colaborador->id_colaborador.'">'.$colaborador->nome.'</option>';
									}
								}
							?>
						</select>
					</div>
				</div>
			</td>

			<td valign="top" colspan="3">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Colaborado responsável 2</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<select class="form-control input_Vazio" name="id_colaborador2" placeholder="Colaborador 2" style="max-width:240px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['colaborador'] as $colaborador) {
									if($pack['afservicos']->row()->id_colaborador2 == $colaborador->id_colaborador){
										echo '<option selected value="'.$colaborador->id_colaborador.'">'.$colaborador->nome.'</option>';
									} else {
										echo '<option value="'.$colaborador->id_colaborador.'">'.$colaborador->nome.'</option>';
									}
								}
							?>
						</select>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA DECIMA LINHA *********************************** -->
		<tr>
			<td valign="top" colspan="5">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Observações</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<textarea name="observacoes" class="form-control input_Vazio" cols="140" rows="1" placeholder="Observações"> <?php echo $pack['afservicos']->row()->observacoes; ?></textarea>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA DECIMA PRIMEIRA LINHA *********************************** -->
		</tbody>
</table>

	<?php echo form_submit(array('name'=>'EditarAutorizacaoServicos'),'Salvar Edição', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<input type="button" class="btn btn-info no-print" name="imprimir" id="imprimir" value="Imprimir">
	<?php echo anchor('main/redirecionar/autorizacoes-af_Servicos', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////// MODAL PARA ADICIONAR EMPENHOS NA ORDEM ///////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="modal fade" id="modelAdicionarEmpenho" tabindex="-1" role="dialog" aria-labelledby="modelAdicionar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar"> Adição do Empenho?</h4>
      </div>
	<div class="errorModalEmpenho" ></div>
      <div class="modal-body">
      	<table border="0">
      		<tr>

      			<td>
      			    <div class="control-group">
						<div class="controls">
							<span class="help-inline">Número/Ano Empenho</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<select class="form-control" name="empenho_id_empenho" id="empenho_id_empenho" placeholder="Empenho" style="max-width:600px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['empenho'] as $empenho) {

									$antes = substr($empenho->numeroempenho, 0, 4);
									$depois = substr($empenho->numeroempenho, 4);
									$formatada = $antes . "/" . $depois;

									if($this->session->flashdata('id_empenho') == $empenho->id_empenho) {
										echo '<option selected value="'.$empenho->id_empenho.'">Empenho: '.$formatada.' - Segmento: '.$empenho->segmento.' - Dotação: '.$empenho->dotacao.'</option>';
									}else{
										echo '<option value="'.$empenho->id_empenho.'">Empenho: '.$formatada.' - Segmento: '.$empenho->segmento.' - Dotação: '.$empenho->dotacao.'</option>';
									}
								}
							?>
						</select>
						</div>
					</div>		
      			</td>
      		</tr>

      	</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" id="validar_Enviar_Empenho">Incluir Empenho</button>
      </div>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////// MODAL PARA ADICIONAR ITENS NA ORDEM //////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="modal fade" id="modelAdicionarItem" tabindex="-1" role="dialog" aria-labelledby="modelAdicionar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar"> Adição do Item?</h4>
      </div>
      <div class="errorModalItem" ></div>
      <div class="modal-body">
      		<table border="0">
      		<tr>
      			<td colspan="3">
      				<div class="control-group">
						<div class="controls">
							<span class="help-inline">Descrição do Material</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<select class="form-control vazio" name="item_id_servico" id="item_id_servico" placeholder="Item" >
							<option>Selecione...</option>
							<?php 
								foreach ($pack['itens'] as $itens) {
									
									$valor = number_format($itens->liquido, 2,',','');

									if($this->session->flashdata('id_itens') == $itens->id_itens){
										echo '<option selected value="'.$itens->id_itens.'">'.$itens->descricao.' Valor R$: '.$valor.'</option>';
									} else {
										echo '<option value="'.$itens->id_itens.'">'.$itens->descricao.' Valor R$: '.$valor.'</option>';
									}
								}
							?>
						</select>
						</div>
					</div>	
      			</td>
      		</tr>
      		<!-- *******************************************FINAL DA PRIMEIRA LINHA DO MODAL************************************* -->
      		<tr>
      			<td>
      			    <div class="control-group">
						<div class="controls">
							<span class="help-inline">Quatidade</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control vazio" name="quantidade"  id="modal_quantidade" aria-describedby="basic-addon1" placeholder="Quantidade" style="max-width:130px" />
						</div>
					</div>		
      			</td>
      		</tr>

      	</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" id="validar_Enviar_Item">Incluir Material</button>
       </div>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////// MODAL PARA ADICIONAR SERVIÇOS NA ORDEM ///////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="modal fade" id="modelAdicionarServico" tabindex="-1" role="dialog" aria-labelledby="modelAdicionar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar"> Cancelar a adição do Serviço?</h4>
      </div>
	<div class="errorModalServico" ></div>
      <div class="modal-body">
      		<table border="0">
      		<tr>
      			<td colspan="3">
      				<div class="control-group">
						<div class="controls">
							<span class="help-inline">Descrição do Serviço</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<select class="form-control vazios" name="id_servico" id="id_servicos" placeholder="Servico" >
							<option>Selecione...</option>
							<?php 
								foreach ($pack['servico'] as $servico) {
									if($this->session->flashdata('id_servico') == $servico->id_servicos){
										echo '<option selected value="'.$servico->id_servicos.'">'.$servico->servico.' - Valor R$: '.number_format($servico->valorunitario, 2,',','').'</option>';
									} else {
										echo '<option value="'.$servico->id_servicos.'">'.$servico->servico.' - Valor R$: '.number_format($servico->valorunitario, 2,',','').'</option>';
									}
								}
							?>
						</select>
						</div>
					</div>	
      			</td>
      		</tr>
      		<!-- *******************************************FINAL DA PRIMEIRA LINHA DO MODAL************************************* -->
      		<tr>
      			<td>
      			    <div class="control-group">
						<div class="controls">
							<span class="help-inline">Quatidade</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control vazios" name="quantidade" id="quantidade" aria-describedby="basic-addon1" placeholder="Quantidade" style="max-width:130px" />
						</div>
					</div>		
      			</td>
      		</tr>

      	</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" id="validar_Enviar_Servico">Incluir Serviço</button>
       </div>
    </div>
  </div>
</div>