<form action="relatorios-relatorio_Estoque_Ativo" method="post" accept-charset="utf-8" target="_self">

	<div class="erro_Campo_Vazio" ></div>
	
	<table border="0">
		<tr>
			<td>
				<div>
					<input type="radio" name="filtro" style="white-space: nowrap;" />
					<span>Período de</span>
				</div>
			</td>
			<td>
				<div>
					<input type="text" class="form-control" name="dtinicio" aria-describedby="basic-addon1" placeholder="Data Inicio" />
				</div>
			</td>	
			<td>
				<div>
					<span>a</span>
				</div>
			</td>
			<td>
				<div>
					<input type="text" class="form-control" name="dtfim" aria-describedby="basic-addon1" placeholder="Data Fim" />
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<div>
					<input type="radio" name="filtro" />
					<span>Código de</span>
				</div>
			</td>
			<td>
				<div>
					<input type="text" class="form-control" name="dtinicio" aria-describedby="basic-addon1" placeholder="Data Inicio" />
				</div>
			</td>	
			<td>
				<div>
					<span>a</span>
				</div>
			</td>
			<td>
				<div>
					<input type="text" name="dtfim" class="form-control" aria-describedby="basic-addon1" placeholder="Data Fim" />
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<div>
					<input type="radio" name="filtro" />
					<span>Grupo</span>
				</div>
			</td>
			<td colspan="3">
				<div>
					<select name="grupoitens" placeholder="Grupo Itens" class="form-control" value="<?php echo $this->session->flashdata('grupoitens'); ?>">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['grupoitens'] as $grupoitens) {
								if($this->session->flashdata('grupoitens') == $grupoitens->id_grupoitens){
									echo '<option selected value="'.$grupoitens->id_grupoitens.'">'.$grupoitens->id_grupoitens.'</option>';
								} else {
									echo '<option value="'.$grupoitens->id_grupoitens.'">'.$grupoitens->grupoitens.'</option>';
								}
							}
						?>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<div>
					<input type="radio" name="filtro" />
					<span>Fornecedor</span>
				</div>
			</td>
			<td colspan="3">
				<div>
					<select name="fornecedorprestador" class="form-control" placeholder="Grupo Itens" value="<?php echo $this->session->flashdata('fornecedorprestador'); ?>">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['fornecedorprestador'] as $fornecedorprestador) {
								if($this->session->flashdata('fornecedorprestador') == $fornecedorprestador->id_fornecedorprestador){
									echo '<option selected value="'.$fornecedorprestador->id_fornecedorprestador.'">'.$fornecedorprestador->id_fornecedorprestador.'</option>';
								} else {
									echo '<option value="'.$fornecedorprestador->id_fornecedorprestador.'">'.$fornecedorprestador->nome.'</option>';
								}
							}
						?>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<div>
					<input type="radio" name="filtro" />
					<span>Ordem:</span>
				</div>
			</td>
			<td colspan="3">
				<div>
					<span>
						<input type="radio" name="ordem" />
						<span>Código Interno</span><br />
						<input type="radio" name="ordem" />
						<span>Código Montadora</span><br />
						<input type="radio" name="ordem" />
						<span>Descrição</span><br />
						<input type="radio" name="ordem" />
						<span>Data Inicial</span>
					</span>
				</div>
			</td>
		</tr>
	
	</table>
	
	<button type="submit" class="btn btn-success" id="validar_Enviar">Exibir Relatório</button>

<?php echo form_fieldset_close(); ?>