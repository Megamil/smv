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

	public function dotacao_Nova($dados = null)
	{

		return $this->db->insert('tbl_dotacao',$dados);

	}

	public function grupo_Itens_Nova($dados = null)
	{

		return $this->db->insert('tbl_grupoitens',$dados);

	}

	public function objeto_Nova($dados = null)
	{

		return $this->db->insert('tbl_objeto',$dados);

	}

	public function setor_Nova($dados = null)
	{

		return $this->db->insert('tbl_setor',$dados);

	}

	public function grupo_Itens_Novo($dados = null)
	{

		return $this->db->insert('tbl_grupoitens',$dados);

	}

	public function setor_Novo($dados = null)
	{

		return $this->db->insert('tbl_setor',$dados);

	}

		public function Marca_Itens_Novo($dados = null)
	{

		return $this->db->insert('tbl_marcaitens',$dados);

	}

		public function objeto_Novo($dados = null)
	{

		return $this->db->insert('tbl_objeto',$dados);

	}


}

?>