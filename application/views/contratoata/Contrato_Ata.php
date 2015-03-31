	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Contrato_Ata', '<button class="btn btn-info pull-center"> Criar novo Contrato/Ata </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">Número do Contrato/Ata</th>
				<th class="span2">Processo Administrativo</th>
				<th class="span2">Data Homologação</th>
				<th class="span2">Número da Licitação</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['contratoata'] as $contratoata) {
						echo "<tr>";
						    echo "<td>$contratoata->numerocontratoata</td>";
						    echo "<td>$contratoata->procadmin</td>";
						    //Formata a data para Dia-Mês-Ano, visto que de padrão a data vem em norte americano.
							$dataFormatada = date("d-m-Y", strtotime($contratoata->datahomologacao));
							echo '<td>'.$dataFormatada.'</td>';
							echo "<td>$contratoata->numerolicitacao</td>";
							echo '<td>'.anchor('edicoes/editar_Contrato_Ata/'.$contratoata->id_contratoata.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>