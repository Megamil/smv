<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class novo extends CI_Model {


	public function montadora_Nova($nome = null)
	{

		return $this->db->insert('tbl_montadora',$nome);

	}

	public function divisao_Nova($nome = null)
	{

		return $this->db->insert('tbl_divisao',$nome);

	}

	public function secao_Nova($nome = null)
	{

		return $this->db->insert('tbl_secao',$nome);

	}

	public function departamento_Novo($nome = null)
	{

		return $this->db->insert('tbl_depto',$nome);

	}

	public function modalidade_Licitatoria_Nova($nome = null)
	{

		return $this->db->insert('tbl_modalidadedelicitacao',$nome);

	}

}

?>