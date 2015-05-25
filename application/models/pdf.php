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




		
	}

	public function impresso_Autorizacao_Fornec_Exec_Servicos_pag1($os = null){




	}

	public function impresso_Autorizacao_Fornec_Exec_Servicos_pag2($os = null){



		
	}

}