<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class edicao extends CI_Model {


	public function montadora_Editar($dados = null)
	{

		$this->db->where('id_montadora',$dados["id_montadora"]);
		return $this->db->update('tbl_montadora',$dados);

	}

	public function secao_Editar($dados = null)
	{

		$this->db->where('id_secao',$dados["id_secao"]);
		return $this->db->update('tbl_secao',$dados);

	}

	public function divisao_Editar($dados = null)
	{

		$this->db->where('id_divisao',$dados["id_divisao"]);
		return $this->db->update('tbl_divisao',$dados);

	}

	public function departamento_Editar($dados = null)
	{

		$this->db->where('id_depto',$dados["id_depto"]);
		return $this->db->update('tbl_depto',$dados);

	}

	public function modalidade_Editar($dados = null)
	{

		$this->db->where('id_modalidadedelicitacao',$dados["id_modalidadedelicitacao"]);
		return $this->db->update('tbl_modalidadedelicitacao',$dados);

	}

}