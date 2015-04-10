<?php echo form_fieldset("Nova Autorização de Fornecimento de Serviços"); 
$form = array('name' => 'form'); 
echo form_open("criar/nova_Af_Servicos",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
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
						<input type="text" class="form-control input_Vazio" name="ano" aria-describedby="basic-addon1" placeholder="Ano" style="max-width:100px" />
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
						<select class="form-control input_Vazio"  name="id_ordemservico" placeholder="Ordem de Serviço">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['ordemservico'] as $ordemservico) {
								if($this->session->flashdata('id_ordemservico') == $ordemservico->id_ordemservico){
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
		
			<td valign="top" colspan="3">
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
								if($this->session->flashdata('id_fornecedorprestador') == $fornecedorprestador->id_fornecedorprestador){
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
					<div class="btn btn-info pull-center" data-toggle="modal" data-target="#modelAdicionarItem">INCLUIR</div>
					</div>
				</div>	
			</td>
		</tr>
		<!-- ***************************** FINAL DA SEGUNDA LINHA *********************************** -->
		<tr>
			<td valign="top" colspan="5">
					<table class="table table-striped table-hover table-condensed">
						<thead> 
							<tr>
								<th class="span3">Editar</th>
								<th class="span2">Código</th>
								<th class="span2">Código Montadora</th>
								<th class="span2">Descrição</th>
								<th class="span2">Unidade</th>
								<th class="span2">Qtde.</th>
								<th class="span2">Valor Unitário</th>
								<th class="span2">Desc. % </th>
								<th class="span2">Valor do Item</th>
								<th class="span2">Excluir</th>
							</tr>
						</thead>

						<tbody>
							<?php
								foreach ($pack['afservicos'] as $afservicos) {
									echo "<tr>";
						  				echo '<td>'.anchor('edicoes/editar_Af_Servicos_x_itens/'.$afservicos->id_afservicos.'','Editar').'</td>';
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
										echo '<td>'.anchor('exclusoes/excluir_Af_Servicos_x_itens/'.$afservicos->id_afservicos.'','Excluir').'</td>';
									echo "</tr>";
								}
							?>
						<tr>
							<td colspan="9" valign="top" align="right">
										<span class="help-inline">Valor Total</span>
							</td>

							<td align="right">
								<div class="control-group">
									<div class="controls">
										<input type="text" class="form-control" name="valortotal" aria-describedby="basic-addon1" placeholder="Valor Total" style="max-width:150px" disabled/>
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
			<td valign="top" colspan="5">
					<table class="table table-striped table-hover table-condensed">
						<thead> 
							<tr>
								<th class="span3">Editar</th>
								<th class="span2">Descrição</th>
								<th class="span2">Unid.</th>
								<th class="span2">Qtde.</th>
								<th class="span2">Valor Unitário</th>
								<th class="span2">Valor do Item</th>
								<th class="span2">Excluir</th>
							</tr>
						</thead>

						<tbody>
							<?php
								foreach ($pack['afservicos'] as $afservicos) {
									echo "<tr>";
						  				echo '<td>'.anchor('edicoes/editar_Af_Servicos_x_servicos/'.$afservicos->id_afservicos.'','Editar').'</td>';
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
										echo '<td>'.anchor('exclusoes/excluir_Af_Servicos_x_servicos/'.$afservicos->id_afservicos.'','Excluir').'</td>';
									echo "</tr>";
								}
							?>
						<tr>
							<td colspan="9" valign="top" align="right">
										<span class="help-inline">Valor Total</span>
							</td>

							<td align="right">
								<div class="control-group">
									<div class="controls">
										<input type="text" class="form-control" name="valortotal" aria-describedby="basic-addon1" placeholder="Valor Total" style="max-width:150px" disabled/>
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
						<div class="btn btn-info pull-center" data-toggle="modal" data-target="#modelAdicionarEmpenho">INCLUIR</div>
					</div>
				</div>	
			</td>
		</tr>
		<!-- ***************************** FINAL DA SEXTA LINHA *********************************** -->
		<tr>	
			<td valign="top" colspan="5">
				<table class="table table-striped table-hover table-condensed">
						<thead> 
							<tr>
								<th class="span3">Editar</th>
								<th class="span2">Número/Ano</th>
								<th class="span2">Segmento</th>
								<th class="span2">Dotação</th>
								<th class="span2">Valor</th>
								<th class="span2">Nota Fiscal</th>
								<th class="span2">Contrato/Ata</th>
								<th class="span2">Excluir</th>
							</tr>
						</thead>

						<tbody>
							<?php
								foreach ($pack['afservicos'] as $afservicos) {
									echo "<tr>";
						  				echo '<td>'.anchor('edicoes/editar_Af_Servicos_x_empenho/'.$afservicos->id_afservicos.'','Editar').'</td>';
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
						    			echo "<td> </td>";
										echo '<td>'.anchor('exclusoes/excluir_Af_Servicos_x_empenho/'.$afservicos->id_afservicos.'','Excluir').'</td>';
									echo "</tr>";
								}
							?>
							<tr>
							<td colspan="7" valign="top" align="right">
										<span class="help-inline">Valor Total</span>
							</td>

							<td align="right">
								<div class="control-group">
									<div class="controls">
										<input type="text" class="form-control" name="valortotal2" aria-describedby="basic-addon1" placeholder="Valor Total" style="max-width:150px" disabled/>
									</div>
								</div>
							</td>
						</tr>
						</tbody>
					</table>

			</td>
		</tr>
		<!-- ***************************** FINAL DA SÉTIMA LINHA *********************************** -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Contrato / Ata</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls input-group">
						<input type="text" class="form-control input_Vazio processo" name="id_contratoata" aria-describedby="basic-addon1" placeholder="Contrato/Ata" />
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
					<input type="text" class="form-control input_Vazio dataValidar" name="iniciovigencia" aria-describedby="basic-addon1" placeholder="Inicio Vigência" style="max-width:100px" disabled/>
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
					<input type="text" class="form-control input_Vazio dataValidar" name="fimvigencia" aria-describedby="basic-addon1" placeholder="Fim Vigência" style="max-width:100px" disabled/>
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
						<input type="text" class="form-control processo" name="paregprecos" aria-describedby="basic-addon1" placeholder="PA Reg. Preços" style="max-width:220px" disabled/>
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
					<input type="text" class="form-control processo" name="paempenho" aria-describedby="basic-addon1"  placeholder="PA Empenho" style="max-width:220px" disabled/>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA OITAVA LINHA *********************************** -->
		<tr>
			<td valign="top" colspan="5">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Objeto</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<textarea name="id_objeto" class="form-control input_Vazio" cols="140" rows="1" placeholder="Objeto"></textarea>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA NONA LINHA *********************************** -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prazo de entrega</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="prazoentrega" aria-describedby="basic-addon1" placeholder="Prazo Entrega" style="max-width:185px" maxlength="20" disabled/>
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
					<input type="text" class="form-control input_Vazio" name="prazopagto" aria-describedby="basic-addon1" placeholder="Prazo Pagto" style="max-width:460px" disabled/>
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
					<input type="text" class="form-control input_Vazio" name="contato" aria-describedby="basic-addon1" placeholder="Contato" />
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
						<input type="text" class="form-control input_Vazio" name="oraamento" aria-describedby="basic-addon1" placeholder="Orçamento" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Veículo Prefixo</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls input-group">
					<span class="help-inline input-group-addon">DT-</span>
					<input type="text" class="form-control input_Vazio" name="id_veiculoprefixo" aria-describedby="basic-addon1" placeholder="Prefixo" style="max-width:100px" disabled/>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA DÉCIMA LINHA *********************************** -->
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
									if($this->session->flashdata('id_colaborador') == $colaborador->id_colaborador){
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
									if($this->session->flashdata('id_colaborador') == $colaborador->id_colaborador){
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
		<!-- ***************************** FINAL DA DECIMA PRIMEIRA LINHA *********************************** -->
		<tr>
			<td valign="top" colspan="5">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Observações</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<textarea name="observacoes" class="form-control input_Vazio" cols="140" rows="1" placeholder="Observações"></textarea>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA DECIMA SEGUNDA LINHA *********************************** -->
		</tbody>
</table>

	<?php echo form_submit(array('name'=>'cadastrarNovaAutorizacaoPecas'),'Criar Autorização de Fornecimento de Serviços', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/', '<div class="btn btn-info pull-center"> Imprimir </div>')?>
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
        <h4 class="modal-title" id="modelDeletar"> Cancelar a adição do Empenho?</h4>
      </div>

      <div class="modal-body">
      	<table border="0">
      		<tr>
      			<td colspan="2">
      				<div class="control-group">
						<div class="controls">
							<span class="help-inline">Segmento</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<select class="form-control input_Vazio" name="id_segmento" placeholder="Segmento" style="max-width:300px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['segmento'] as $segmento) {
									if($this->session->flashdata('id_segmento') == $segmento->id_segmento){
										echo '<option selected value="'.$segmento->id_segmento.'">'.$segmento->segmento.'</option>';
									} else {
										echo '<option value="'.$segmento->id_segmento.'">'.$segmento->segmento.'</option>';
									}
								}
							?>
						</select>
						</div>
					</div>	
      			</td>
      			
      			<td>
      			    <div class="control-group">
						<div class="controls">
							<span class="help-inline">Número/Ano Empenho</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<select class="form-control input_Vazio" name="id_empenho" placeholder="Empenho" style="max-width:300px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['empenho'] as $empenho) {
									if($this->session->flashdata('id_empenho') == $empenho->id_empenho) {
										echo '<option selected value="'.$empenho->id_empenho.'">'.$empenho->numeroempenho.'</option>';
									}else{
										echo '<option value="'.$empenho->id_empenho.'">'.$empenho->numeroempenho.'</option>';
									}
								}
							?>
						</select>
						</div>
					</div>		
      			</td>
   
      			<td>
	      			<div class="control-group">
						<div class="controls">
							<span class="help-inline">Número da Dotação</span>
						</div>
					</div>
					
					<div class="control-group">
						<div class="controls">
							<select class="form-control input_Vazio" name="id_empenho" placeholder="Empenho" style="max-width:300px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['dotacao'] as $dotacao) {
									if($this->session->flashdata('id_dotacao') == $dotacao->id_dotacao) {
										echo '<option selected value="'.$dotacao->id_dotacao.'">'.$dotacao->codigonumero.'</option>';
									}else{
										echo '<option value="'.$dotacao->id_dotacao.'">'.$dotacao->codigonumero.'</option>';
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
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        <?php echo form_submit(array('name'=>'cadastrarNovoServicoOrdem'),'Incluir Empenho', 'class="btn btn-success" id="validar_Enviar"'); ?>
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
        <h4 class="modal-title" id="modelDeletar"> Cancelar a adição do Item?</h4>
      </div>

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
							<select class="form-control input_Vazio" name="id_servico" placeholder="Servico" >
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
							<input type="text" class="form-control input_Vazio" name="quantidade" aria-describedby="basic-addon1" placeholder="Quantidade" style="max-width:130px" />
						</div>
					</div>		
      			</td>

      			<td>
					<div class="control-group">
						<div class="controls">
							<span class="help-inline">Valor unitário</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control input_Vazio" name="valorunitario" aria-describedby="basic-addon1" placeholder="Valor unitário" disabled/>
						</div>
					</div>	
				</td>
      		</tr>

      	</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        <?php echo form_submit(array('name'=>'cadastrarNovoMaterialOrdem'),'Incluir Material', 'class="btn btn-success" id="validar_Enviar"'); ?>
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
							<select class="form-control input_Vazio" name="id_servico" placeholder="Servico" >
							<option>Selecione...</option>
							<?php 
								foreach ($pack['servico'] as $servico) {
									if($this->session->flashdata('id_servico') == $servico->id_servico){
										echo '<option selected value="'.$servico->id_servico.'">'.$servico->servico.'</option>';
									} else {
										echo '<option value="'.$servico->id_servico.'">'.$servico->servico.'</option>';
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
							<input type="text" class="form-control input_Vazio" name="quantidade" aria-describedby="basic-addon1" placeholder="Quantidade" style="max-width:130px" />
						</div>
					</div>		
      			</td>

      			<td>
					<div class="control-group">
						<div class="controls">
							<span class="help-inline">Valor unitário</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control input_Vazio" name="valorunitario" aria-describedby="basic-addon1" placeholder="Valor unitário" disabled/>
						</div>
					</div>	
				</td>
      		</tr>

      	</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        <?php echo form_submit(array('name'=>'cadastrarNovoMaterialOrdem'),'Incluir Serviço', 'class="btn btn-success" id="validar_Enviar"'); ?>
       </div>
    </div>
  </div>
</div>