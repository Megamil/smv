<!--Usado para preencher alguns campos-->
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/json.js"></script>
<?php echo form_fieldset("Novo Contrato/Ata"); 
$form = array('name' => 'form'); 
echo form_open("criar/novo_Contrato_Ata",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Número/Ano/Emissor</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio disabled" name="numerocontratoata" aria-describedby="basic-addon1" placeholder="Número/Ano/Emissor" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Início da Vigência</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="date" class="form-control input_Vazio dataValidar" name="dtinivigencia" aria-describedby="basic-addon1" placeholder="Data Início" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Término da Vigência</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="date" class="form-control input_Vazio dataValidar" name="dtfimvigencia" aria-describedby="basic-addon1" placeholder="Data Fim" />
					</div>
				</div>
			</td>
		</tr>
		<!-- final da primeira linha da tela -->
		<tr>
			<td valign="top">
					<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prorrogação</span>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Documento: número/ano/emissor</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="numanoemissorprorrogacao" aria-describedby="basic-addon1" placeholder="Número Prorrogação" maxlength="15" />
					</div>
				</div>
			</td>
			
			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Início da Vigência</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="date" class="form-control input_Vazio dataValidar" name="dtinivigenciaprorrog" aria-describedby="basic-addon1" placeholder="Data Início"/>
					</div>
				</div>
			</td>

			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Término da Vigência</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="date" class="form-control input_Vazio dataValidar" name="dtfimvigenciaprorrog" aria-describedby="basic-addon1"  placeholder="Data Fim"/>
					</div>
				</div>
			</td>
		</tr>
	<!-- final da segunda linha da tela -->
		<tr>
			<td valign="top" colspan="3">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Fornecedor</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<select class="form-control input_Vazio" name="id_fornecedorprestador" placeholder="Fornecedor">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['fornecedorprestador'] as $fornecedorprestador) {
								
								if($this->session->flashdata('fornecedorprestador') == $fornecedorprestador->id_fornecedorprestador){

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
	<!-- final da terceira linha da tela -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">CNPJ</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control" name="cnpj" id="cnpjValidar" aria-describedby="basic-addon1" placeholder="CNPJ" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Processo Administrativo</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="procadmin" aria-describedby="basic-addon1" placeholder="Nº Processo" />
					</div>
				</div>
			</td>
		</tr>
		<!-- final da quarta linha da tela -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Modalidade Licitação</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">

					<select class="form-control input_Vazio" name="id_modalidadedelicitacao" placeholder="Modalidade">
						<option>Selecione...</option>

						<?php 

							foreach ($pack['modalidadedelicitacao'] as $modalidadedelicitacao) {
								
								if($this->session->flashdata('modalidadedelicitacao') == $modalidadedelicitacao->id_modalidadedelicitacao){

									echo '<option selected value="'.$modalidadedelicitacao->id_modalidadedelicitacao.'">'.$modalidadedelicitacao->modalidadedelicitacao.'</option>';

								} else {

									echo '<option value="'.$modalidadedelicitacao->id_modalidadedelicitacao.'">'.$modalidadedelicitacao->modalidadedelicitacao.'</option>';

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
						<span class="help-inline">Licitação</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="numerolicitacao" aria-describedby="basic-addon1" placeholder="Nº Licitação" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Data da Homologação</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="date" class="form-control input_Vazio dataValidar" name="datahomologacao" aria-describedby="basic-addon1" placeholder="Data Homologação" />
					</div>
				</div>
			</td>
		</tr>
	<!-- final da quinta linha da tela -->
		<tr>
			<td valign="top" colspan="2">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Objeto - Título</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<select class="form-control input_Vazio" name="id_objeto" id="objeto" placeholder="Objeto">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['objeto'] as $objeto) {
								if($this->session->flashdata('objeto') == $objeto->id_objeto){
									echo '<option selected value="'.$objeto->id_objeto.'">'.$objeto->objetotitulo.'</option>';
								} else {
									echo '<option value="'.$objeto->id_objeto.'">'.$objeto->objetotitulo.'</option>';
								}
							}
						?>
					</select>
					</div>
				</div>
			</td>

			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
					<div class="btn btn-success pull-center" data-toggle="modal" data-target="#modelAdicionar">NOVO</div>
					</div>
				</div>
			</td>
		</tr>
		<!-- final da sexta linha da tela -->
		<tr>
			<td colspan="3">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Objeto</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
					<textarea name="objetotexto" id="objetoTexto" cols="86" rows="3" disabled></textarea>
					</div>
				</div>
			</td>
		</tr>
		<!-- final da setima linha da tela -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prazo de Entrega</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control" name="prazoentrega" aria-describedby="basic-addon1" placeholder="Prazo de Entrega" />
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prazo de pagamento</span>
					</div>
				</div>
	
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="prazopagto" aria-describedby="basic-addon1" placeholder="Prazo de Pagamento" />
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Orgãos Participantes</span>
					</div>
				</div>
	
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="orgaosparticipantes" aria-describedby="basic-addon1" placeholder="Orgãos participantes" />
					</div>
				</div>
			</td>
		</tr>
		<!-- final da oitava linha da tela -->
		<tr>
			<td><?php echo anchor('main/redirecionar/', '<div class="btn btn-warning pull-center"> Inserir Anexo </div>')?></td>
			<td><?php echo anchor('main/redirecionar/', '<div class="btn btn-warning pull-center"> Excluir Anexo </div>')?></td>
		</tr>
		</tbody>
</table>

	<?php echo form_submit(array('name'=>'cadastrarNovoContratoAta'),'Criar Contrato/Ata', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/contratoata-Contrato_Ata', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>

<!-- Modal para Adicionar novo objeto grupo -->
<div class="modal fade" id="modelAdicionar" tabindex="-1" role="dialog" aria-labelledby="modelAdicionar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar"> Cancelar a adição do Contrato/Ata?</h4>
      </div>

      <div class="modal-body">
      	<p>Para criar um novo objeto você será redirecionado para a tela de criação de objeto. <br> Deseja realmente cancelar a adição do Contrato/Ata?</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Continuar</button>
        <?php echo anchor('criar/novo_Objeto/','<div class="btn btn-warning pull-center"> Criar Objeto </div>')?>
       </div>
    </div>
  </div>
</div>