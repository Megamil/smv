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

	public function servico_Novo($dados = null)
	{

		return $this->db->insert('tbl_servicos',$dados);

	}

	public function fornecedor_Prestador_Novo($dados = null)
	{

		return $this->db->insert('tbl_fornecedorprestador',$dados);

	}

	public function cliente_Novo($dados = null)
	{

		return $this->db->insert('tbl_clientes',$dados);

	}

	public function colaborador_Novo($dados = null)
	{

		return $this->db->insert('tbl_colaboradores',$dados);

	}

	public function veiculo_Novo($dados = null)
	{

		return $this->db->insert('tbl_veiculo',$dados);

	}

	public function unidade_Utilizadora_Novo($dados = null)
	{

		return $this->db->insert('tbl_unidadeutilizadora',$dados);

	}

	public function solicita_Ordem_Servico_Nova($dados = null)
	{

		$this->db->insert('tbl_solicitaordemservico',$dados);
		return $this->db->insert_id();

	}

	//Cria uma ordem de serviço somente com o id.
	public function gerar_Nova_Os($dados = null)
	{

		$this->db->insert('tbl_ordemservico',$dados);
		return $this->db->insert_id();

	}

	public function Contrato_Ata_Novo($dados = null)
	{

		
		$this->db->insert('tbl_contratoata',$dados);
		return $this->db->insert_id();

	}

	public function anexar($anexo = null) {

		return $this->db->insert('tbl_anexos',$anexo);
		
	}

	public function item_Novo($dados = null)
	{

		return $this->db->insert('tbl_itens',$dados);

	}

	public function entrada_Itens_Novo($dados = null)
	{

		return $this->db->insert('tbl_entradaitens',$dados);
		
	}

	public function saida_Itens_Novo($dados = null)
	{

		return $this->db->insert('tbl_saidaitens',$dados);

	}

		public function empenho_Novo($dados = null)
	{

		return $this->db->insert('tbl_empenho',$dados);

	}

		public function etiqueta_Nova($dados = null)
	{

		return $this->db->insert('tbl_etiquetas',$dados);

	}


	public function af_Pecas_Nova($dados = null)
	{
		$this->db->insert('tbl_autofornecpecas',$dados);
		return $this->db->insert_id();

	}

	public function af_Servicos_Nova($dados = null)
	{
		$this->db->insert('tbl_autofornecservicos',$dados);
		return $this->db->insert_id();

	}

}

?>