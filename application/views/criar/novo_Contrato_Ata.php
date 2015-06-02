<!--Usado para preencher alguns campos-->
<?php echo form_fieldset("Novo Contrato/Ata"); 
$form = array('name' => 'form'); 
echo form_open("criar/novo_Contrato_Ata",$form); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/json.js"></script>
<script type="text/javascript">

	jQuery(document).ready(function(){

		$('#AdicionarObjeto').click(function(){

			localStorage.setItem('numerocontratoata', $("#numerocontratoata").val());
			localStorage.setItem('dtinivigencia', $("#dtinivigencia").val());
			localStorage.setItem('dtfimvigencia', $("#dtfimvigencia").val());
			localStorage.setItem('numanoemissorprorrogacao', $("#numanoemissorprorrogacao").val());
			localStorage.setItem('dtinivigenciaprorrog', $("#dtinivigenciaprorrog").val());
			localStorage.setItem('dtfimvigenciaprorrog', $("#dtfimvigenciaprorrog").val());
			localStorage.setItem('id_fornecedorprestador', $("#id_fornecedorprestador").val());
			localStorage.setItem('cnpjValidar', $("#cnpjValidar").val());
			localStorage.setItem('procadmin', $("#procadmin").val());
			localStorage.setItem('id_modalidadelicitacao', $("#id_modalidadelicitacao").val());
			localStorage.setItem('numerolicitacao', $("#numerolicitacao").val());
			localStorage.setItem('datahomologacao', $("#datahomologacao").val());
			localStorage.setItem('prazoentrega', $("#prazoentrega").val());
			localStorage.setItem('prazopagto', $("#prazopagto").val());
			localStorage.setItem('orgaosparticipantes', $("#orgaosparticipantes").val());


		});

		$('#cancelarNovoObjeto').click(function(){

			$('#objetotitulo').val('');
			$('#objetotexto').val('');


		});
	 
			if(localStorage.getItem('numerocontratoata')){ $("#numerocontratoata").val(localStorage.getItem('numerocontratoata')); }
			if(localStorage.getItem('dtinivigencia')){ $("#dtinivigencia").val(localStorage.getItem('dtinivigencia')); }
			if(localStorage.getItem('dtfimvigencia')){ $("#dtfimvigencia").val(localStorage.getItem('dtfimvigencia')); }
			if(localStorage.getItem('numanoemissorprorrogacao')){ $("#numanoemissorprorrogacao").val(localStorage.getItem('numanoemissorprorrogacao')); }
			if(localStorage.getItem('dtinivigenciaprorrog')){ $("#dtinivigenciaprorrog").val(localStorage.getItem('dtinivigenciaprorrog')); }
			if(localStorage.getItem('dtfimvigenciaprorrog')){ $("#dtfimvigenciaprorrog").val(localStorage.getItem('dtfimvigenciaprorrog')); }
			if(localStorage.getItem('id_fornecedorprestador')){ $("#id_fornecedorprestador").val(localStorage.getItem('id_fornecedorprestador')); }
			if(localStorage.getItem('cnpjValidar')){ $("#cnpjValidar").val(localStorage.getItem('cnpjValidar')); }
			if(localStorage.getItem('procadmin')){ $("#procadmin").val(localStorage.getItem('procadmin')); }
			if(localStorage.getItem('id_modalidadelicitacao')){ $("#id_modalidadelicitacao").val(localStorage.getItem('id_modalidadelicitacao')); }
			if(localStorage.getItem('numerolicitacao')){ $("#numerolicitacao").val(localStorage.getItem('numerolicitacao')); }
			if(localStorage.getItem('datahomologacao')){ $("#datahomologacao").val(localStorage.getItem('datahomologacao')); }
			if(localStorage.getItem('prazoentrega')){ $("#prazoentrega").val(localStorage.getItem('prazoentrega')); }
			if(localStorage.getItem('prazopagto')){ $("#prazopagto").val(localStorage.getItem('prazopagto')); }
			if(localStorage.getItem('orgaosparticipantes')){ $("#orgaosparticipantes").val(localStorage.getItem('orgaosparticipantes')); }


			localStorage.clear();
		
	});
</script>

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
						<input type="text" class="form-control input_Vazio nem" value="<?php echo $this->session->flashdata('numerocontratoata'); ?>" id="numerocontratoata"  name="numerocontratoata" aria-describedby="basic-addon1" placeholder="Número/Ano/Emissor" />
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
						<input type="text" class="form-control input_Vazio dataValidar" value="<?php echo $this->session->flashdata('dtinivigencia'); ?>" id="dtinivigencia" name="dtinivigencia" aria-describedby="basic-addon1" placeholder="Data Início" />
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
					<input type="text" class="form-control input_Vazio dataValidar" value="<?php echo $this->session->flashdata('dtfimvigencia'); ?>" id="dtfimvigencia"  name="dtfimvigencia" aria-describedby="basic-addon1" placeholder="Data Fim" />
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
					<input type="text" class="form-control nem" value="<?php echo $this->session->flashdata('numanoemissorprorrogacao'); ?>" id="numanoemissorprorrogacao"  name="numanoemissorprorrogacao" aria-describedby="basic-addon1" placeholder="Número Prorrogação" maxlength="15" />
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
						<input type="text" class="form-control dataValidar" value="<?php echo $this->session->flashdata('dtinivigenciaprorrog'); ?>" id="dtinivigenciaprorrog"  name="dtinivigenciaprorrog" aria-describedby="basic-addon1" placeholder="Data Início"/>
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
					<input type="text" class="form-control dataValidar" value="<?php echo $this->session->flashdata('dtfimvigenciaprorrog'); ?>" id="dtfimvigenciaprorrog" name="dtfimvigenciaprorrog" aria-describedby="basic-addon1"  placeholder="Data Fim"/>
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
					<select class="form-control input_Vazio" id="id_fornecedorprestador"  name="id_fornecedorprestador" placeholder="Fornecedor">

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
					<input type="text" class="form-control input_Vazio" value="<?php echo $this->session->flashdata('cnpj'); ?>"  name="cnpj" id="cnpjValidar" aria-describedby="basic-addon1" placeholder="CNPJ" />
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
					<input type="text" class="form-control input_Vazio processo" value="<?php echo $this->session->flashdata('procadmin'); ?>" id="procadmin" name="procadmin" aria-describedby="basic-addon1" placeholder="Nº Processo" />
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

					<select class="form-control input_Vazio" id="id_modalidadelicitacao" name="id_modalidadelicitacao" placeholder="Modalidade">
						<option>Selecione...</option>

						<?php 

							foreach ($pack['modalidadedelicitacao'] as $modalidadedelicitacao) {
								
								if($this->session->flashdata('id_modalidadelicitacao') == $modalidadedelicitacao->id_modalidadedelicitacao){

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
					<input type="text" class="form-control input_Vazio nem" value="<?php echo $this->session->flashdata('numerolicitacao'); ?>" id="numerolicitacao" name="numerolicitacao" aria-describedby="basic-addon1" placeholder="Nº Licitação" />
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
					<input type="text" class="form-control input_Vazio dataValidar" value="<?php echo $this->session->flashdata('datahomologacao'); ?>" id="datahomologacao" name="datahomologacao" aria-describedby="basic-addon1" placeholder="Data Homologação" />
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
					<select class="form-control input_Vazio" name="id_objetotitulo" id="objeto" placeholder="Objeto">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['objeto'] as $objeto) {
								if($this->session->flashdata('id_objetotitulo') == $objeto->id_objeto){
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
					<div class="btn btn-success pull-center" data-toggle="modal" data-target="#modelAdicionar" id="AdicionarObjeto">NOVO</div>
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
					<textarea class="form-control" name="objetotexto" id="objetoTexto" cols="86" rows="3" disabled></textarea>
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
					<input type="text" class="form-control input_Vazio" value="<?php echo $this->session->flashdata('prazoentrega'); ?>" name="prazoentrega" id="prazoentrega" aria-describedby="basic-addon1" placeholder="Prazo de Entrega" />
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
					<input type="text" class="form-control input_Vazio" value="<?php echo $this->session->flashdata('prazopagto'); ?>" name="prazopagto" id="prazopagto" aria-describedby="basic-addon1" placeholder="Prazo de Pagamento" />
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
					<input type="text" class="form-control" value="<?php echo $this->session->flashdata('orgaosparticipantes'); ?>" name="orgaosparticipantes" id="orgaosparticipantes" aria-describedby="basic-addon1" placeholder="Orgãos participantes" />
					</div>
				</div>
			</td>
		</tr>
		<!-- final da oitava linha da tela -->
		<tr>
			<td><div class="btn btn-warning pull-center" data-toggle="modal" data-target="#modelAdicionarAnexo">Inserir Anexo</div></td>
			<td><?php echo anchor('main/redirecionar/', '<div class="btn btn-warning pull-center"> Excluir Anexo </div>')?></td>
		</tr>
		</tbody>
</table>

	<?php echo form_submit(array('name'=>'cadastrarNovoContratoAta'),'Criar Contrato/Ata', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/contratoata-Contrato_Ata', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////////// Modal para Adicionar novo objeto /////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////-->

<div class="modal fade" id="modelAdicionar" tabindex="-1" role="dialog" aria-labelledby="modelAdicionar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="errorModalObj"></div>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar"> Cancelar a adição do Obejto?</h4>
      </div>

      <div class="modal-body">
      	<table border="0">
			<thead align="left"><span id="basic-addon1"></span></thead>
				<tbody>
					<tr>
						<td>
							<div class="input-group">
								<span class="input-group-addon">Título</span>
								<input type="text" class="form-control" id="nomeobjetotitulo" name="nomeobjetotitulo" aria-describedby="basic-addon1" size="52" placeholder="Título do Objeto" maxlength="100" />
							</div>
						</td>
					</tr>
					<tr>
						<td valign="top">
							<div class="input-group">
								<span class="input-group-addon">Texto</span>
								<textarea name="nomeobjetotexto" id="nomeobjetotexto" type="text" cols="53" rows="10" placeholder="Texto do Objeto" maxlength="700"></textarea>
							</div>
						</td>
					</tr>
				</tbody>
		</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal" id="cancelarNovoObjeto">Cancelar</button>
        <button type="button" class="btn btn-success" id="novoObjeto">Criar Objeto</button>
        </div>
    </div>
  </div>
</div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////////// MODAL PARA INCLUIR ANEXO /////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////-->
	
<div class="modal fade" id="modelAdicionarAnexo" tabindex="-1" role="dialog" aria-labelledby="modelAdicionar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar"> Cancelar inclusão do anexo?</h4>
      </div>

      <div class="modal-body">
      	<table border="0">
			<thead align="left"><span id="basic-addon1"></span></thead>
				<tbody>
					<tr>
						<td>
							<div class="input-group">
								<span class="input-group-addon">Nome do Anexo</span>
								<input type="text" class="form-control" name="anexo" aria-describedby="basic-addon1" size="52" placeholder="Nome do Anexo" maxlength="100" />
							</div>
						</td>
						<td><input type="button" class="btn" value="Procurar..." name="procuraranexo" /></td>
					</tr>
				</tbody>
		</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        <?php echo anchor('criar/novo_Objeto/','<div class="btn btn-warning pull-center"> Incluir Anexo </div>')?>
       </div>
    </div>
  </div>
</div>