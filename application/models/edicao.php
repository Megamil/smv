
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

	public function dotacao_Editar($dados = null)
	{

		$this->db->where('id_dotacao',$dados["id_dotacao"]);
		return $this->db->update('tbl_dotacao',$dados);

	}

	public function grupo_Itens_Editar($dados = null)
	{

		$this->db->where('id_grupoitens',$dados["id_grupoitens"]);
		return $this->db->update('tbl_grupoitens',$dados);

	}

		public function setor_Editar($dados = null)
	{

		$this->db->where('id_setor',$dados["id_setor"]);
		return $this->db->update('tbl_setor',$dados);

	}

		public function objeto_Editar($dados = null)
	{

		$this->db->where('id_objeto',$dados["id_objeto"]);
		return $this->db->update('tbl_objeto',$dados);

	}

		public function marca_Itens_Editar($dados = null)
	{

		$this->db->where('id_marcaitens',$dados["id_marcaitens"]);
		return $this->db->update('tbl_marcaitens',$dados);

	}

	public function servicos($dados = null)
	{

		$this->db->where('id_servicos',$dados["id_servicos"]);
		return $this->db->update('tbl_servicos',$dados);

	}

	public function fornecedor_Prestador_Editar($dados = null)
	{

		$this->db->where('id_fornecedorprestador',$dados["id_fornecedorprestador"]);
		return $this->db->update('tbl_fornecedorprestador',$dados);

	}

	public function cliente($dados = null)
	{

		$this->db->where('id_cliente',$dados["id_cliente"]);
		return $this->db->update('tbl_cliente',$dados);
	}

	public function colaborador($dados = null)
	{

		$this->db->where('id_colaborador',$dados["id_colaborador"]);
		return $this->db->update('tbl_colaboradores',$dados);
	}

		public function veiculo($dados = null)
	{

		$this->db->where('id_veiculo',$dados["id_veiculo"]);
		return $this->db->update('tbl_veiculo',$dados);
	}

}