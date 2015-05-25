<?php echo form_open("pdf_controller/autorizacao_Fornec_Exec_Servicos_pag1","target=\"_blank\""); ?>

<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead></thead>
		<tbody>
		<tr>
			<td>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">Ordem de Serviço Nº: </span>
 					<select class="form-control input_Vazio" name="ordemservico" placeholder="Ordem de Serviço" value="<?php echo $this->session->flashdata('ordemservico'); ?>">

						<option>Selecione...</option>

						<?php 

							foreach ($pack as $ordemservico) {
														
								echo '<option value="'.$ordemservico->id_ordemservico.'">'.$ordemservico->id_ordemservico.'</option>';
							
							}

						?>
				</div>
			</td>
		</tr>
		</tbody>
	</table>
<?php echo form_fieldset_close(); ?>

<a class="btn no-print btn-info" id="validar_Enviar">Formulário de Autorização de Fornecimento</a>

<?php echo form_close(); ?>
