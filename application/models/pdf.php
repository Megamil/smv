<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pdf extends CI_Model {

	public function ubs_Ou_Dep($os = null) {

		$validar = $this->db->query('select id_unidadesolicitante from tbl_solicitaordemservico 
		inner join tbl_ordemservico on id_solicitacao = id_solicitaordemservico where id_ordemservico = '.$os.';')->row();

		if($validar->id_unidadesolicitante > 10000){
			return false; //se for Cnes
		} else {
			return true; //Se for id
		}


	}

	public function pdf_impresso_Vistoria($os = null){

		if($this->ubs_Ou_Dep($os)){ //Caso seja dept

			$pack = $this->db->query('SELECT id_ordemservico,id_unidadesolicitante,depto,divisao,secao,setor,observacoes,tso.defeitoapresentado,modelo,prefixo,km,CURRENT_DATE hoje  
			from tbl_ordemservico
			left join tbl_solicitaordemservico tso on tso.id_solicitaordemservico = id_solicitacao
			left join tbl_veiculo tv on tso.id_veiculo = tv.id_veiculo
			left join tbl_unidadeutilizadora tuu on tuu.id_unidadeutilizadora = id_unidadesolicitante
			left join tbl_depto id on id.id_depto = tuu.id_depto
			left join tbl_divisao idi on idi.id_divisao = tuu.id_divisao
			left join tbl_secao ise on ise.id_secao = tuu.id_secao
			left join tbl_setor iset on iset.id_setor = tuu.id_setor
			where id_ordemservico = '.$os.';');

			return $pack;

		} else { //Caso seja ubs

			$pack = $this->db->query('SELECT id_ordemservico,id_unidadesolicitante,unidadesaude,observacoes,tso.defeitoapresentado,modelo,prefixo,km,CURRENT_DATE hoje  
			from tbl_ordemservico
			left join tbl_solicitaordemservico tso on tso.id_solicitaordemservico = id_solicitacao
			left join tbl_veiculo tv on tso.id_veiculo = tv.id_veiculo
			left join tbl_unidadeutilizadora tuu on tuu.id_unidadeutilizadora = id_unidadesolicitante
			left join tbl_unidadesaude on cnes = id_unidadesolicitante
			where id_ordemservico ='.$os.';');

			return $pack;

		}

	
	}

	public function pdf_impresso_Servicos_Externos($os = null){


		if($this->ubs_Ou_Dep($os)){ //Caso seja dept

			$pack = $this->db->query('SELECT id_ordemservico,id_unidadesolicitante,depto,divisao,secao,setor,observacoes,tso.defeitoapresentado,modelo,prefixo,km,CURRENT_DATE hoje  
			from tbl_ordemservico
			left join tbl_solicitaordemservico tso on tso.id_solicitaordemservico = id_solicitacao
			left join tbl_veiculo tv on tso.id_veiculo = tv.id_veiculo
			left join tbl_unidadeutilizadora tuu on tuu.id_unidadeutilizadora = id_unidadesolicitante
			left join tbl_depto id on id.id_depto = tuu.id_depto
			left join tbl_divisao idi on idi.id_divisao = tuu.id_divisao
			left join tbl_secao ise on ise.id_secao = tuu.id_secao
			left join tbl_setor iset on iset.id_setor = tuu.id_setor
			where id_ordemservico = '.$os.';');

			return $pack;

		} else { //Caso seja ubs

			$pack = $this->db->query('SELECT id_ordemservico,id_unidadesolicitante,unidadesaude,observacoes,tso.defeitoapresentado,modelo,prefixo,km,CURRENT_DATE hoje  
			from tbl_ordemservico
			left join tbl_solicitaordemservico tso on tso.id_solicitaordemservico = id_solicitacao
			left join tbl_veiculo tv on tso.id_veiculo = tv.id_veiculo
			left join tbl_unidadeutilizadora tuu on tuu.id_unidadeutilizadora = id_unidadesolicitante
			left join tbl_unidadesaude on cnes = id_unidadesolicitante
			where id_ordemservico ='.$os.';');

			return $pack;

		}


	}

	public function pdf_impresso_Retirada_Estoque($os = null) {


		if($this->ubs_Ou_Dep($os)){ //Caso seja dept

			$pack = array( 
			
				'pack' => $this->db->query('SELECT id_ordemservico,id_unidadesolicitante,depto,divisao,secao,setor,observacoes 
				from tbl_ordemservico
				left join tbl_solicitaordemservico tso on tso.id_solicitaordemservico = id_solicitacao
				left join tbl_unidadeutilizadora tuu on tuu.id_unidadeutilizadora = id_unidadesolicitante
				left join tbl_depto id on id.id_depto = tuu.id_depto
				left join tbl_divisao idi on idi.id_divisao = tuu.id_divisao
				left join tbl_secao ise on ise.id_secao = tuu.id_secao
				left join tbl_setor iset on iset.id_setor = tuu.id_setor
				where id_ordemservico = '.$os.';'),

				'codigo' => $this->db->query('SELECT tc.codigo from tbl_saidaitens ts
				left join tbl_clientes tc on tc.id_cliente = tc.id_cliente
				where ordemservico = '.$os.' limit 1;'),

				'itens' => $this->db->query('SELECT id_saidaitens,codigomontadora,quantidade,unidademedida,descricao from tbl_itens ti
				left join tbl_saidaitens ts on id_itens = codigointerno
				left join tbl_unidademedida tu on tu.id_unidademedida = ti.id_unidademedida
				where ordemservico = '.$os.';')->result()

			);

			return $pack;

		} else { //Caso seja ubs

			$pack = array( 
			
				'pack' => $this->db->query('SELECT id_ordemservico,id_unidadesolicitante,unidadesaude,observacoes  
				from tbl_ordemservico
				left join tbl_solicitaordemservico tso on tso.id_solicitaordemservico = id_solicitacao
				left join tbl_veiculo tv on tso.id_veiculo = tv.id_veiculo
				left join tbl_unidadeutilizadora tuu on tuu.id_unidadeutilizadora = id_unidadesolicitante
				left join tbl_unidadesaude on cnes = id_unidadesolicitante
				where id_ordemservico ='.$os.';'),

				'codigo' => $this->db->query('SELECT tc.codigo from tbl_saidaitens ts
				left join tbl_clientes tc on tc.id_cliente = tc.id_cliente
				where ordemservico = '.$os.' limit 1;'),

				'itens' => $this->db->query('SELECT id_saidaitens,codigomontadora,quantidade,unidademedida,descricao from tbl_itens ti
				left join tbl_saidaitens ts on id_itens = codigointerno
				left join tbl_unidademedida tu on tu.id_unidademedida = ti.id_unidademedida
				where ordemservico = '.$os.';')->result()

			);

			return $pack;

		}

		
	}

	public function impresso_Autorizacao_Fornec_Exec_Servicos_pag1($os = null){

		$pack = array(  

			// 'contratante' => $this->db->query('select tf.id_fornecedorprestador,te.numprocadmempenho,tc.numerocontratoata,tc.dtinivigencia,tc.dtfimvigencia,te.numprocregpreco from tbl_empenho te
			// left join tbl_contratoata tc on te.numcontratoata = tc.id_contratoata
			// left join tbl_fornecedorprestador tf on tf.id_fornecedorprestador = te.id_fornecedorprestador
			// left join tbl_ordemservico tos on tos.id_fornecedorprestador = tf.id_fornecedorprestador
			// where id_ordemservico = '.$os.';'),

			'fornecedor' => $this->db->query('SELECT nome,codigo,rua,numero,complemento,cidade,uf,tel1,fax,cnpj,email from 
			tbl_fornecedorprestador tf inner join tbl_ordemservico tos on tf.id_fornecedorprestador = tos.id_fornecedorprestador
			where id_ordemservico ='.$os.';'),

			//'requisitante' => $this->db->query(''.$os.';'),

			//'pagamento' => $this->db->query(''.$os.';'),

			'pecas' => $this->db->query('SELECT id_itens,codigomontadora,descricao,unidademedida,quantidade,precobruto,desconto, ((precobruto -((precobruto*desconto)/100))*quantidade) valorTotal
			from tbl_ordemservico_x_item 
			left join tbl_itens ti on id_itens = id_item
			left join tbl_unidademedida tu on tu.id_unidademedida = ti.id_unidademedida
			where id_ordemservico = '.$os.';')->result(),

			'servicos' => $this->db->query('SELECT servico,quantidade,valorunitario, (quantidade*valorunitario) valorTotal from tbl_servicos
			left join tbl_ordemservico_x_servico on id_servico = id_servicos
			where id_ordemservico ='.$os.';')->result()


		);

		return $pack;


	}


}