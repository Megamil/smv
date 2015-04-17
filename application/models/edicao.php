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

	public function servicos_Editar($dados = null)
	{

		$this->db->where('id_servicos',$dados["id_servicos"]);
		return $this->db->update('tbl_servicos',$dados);

	}

	public function fornecedor_Prestador_Editar($dados = null)
	{

		$this->db->where('id_fornecedorprestador',$dados["id_fornecedorprestador"]);
		return $this->db->update('tbl_fornecedorprestador',$dados);

	}

	public function cliente_Editar($dados = null)
	{

		$this->db->where('id_cliente',$dados["id_cliente"]);
		return $this->db->update('tbl_clientes',$dados);
	}

	public function colaborador_Editar($dados = null)
	{

		$this->db->where('id_colaborador',$dados["id_colaborador"]);
		return $this->db->update('tbl_colaboradores',$dados);
	}

		public function veiculo_Editar($dados = null)
	{

		$this->db->where('id_veiculo',$dados["id_veiculo"]);
		return $this->db->update('tbl_veiculo',$dados);
	}

	public function unidade_Utilizadora_Editar($dados = null)
	{

		$this->db->where('id_unidadeutilizadora',$dados["id_unidadeutilizadora"]);
		return $this->db->update('tbl_unidadeutilizadora',$dados);
	}

	public function solicita_Ordem_Servico_Editar($dados = null)
	{

		$this->db->where('id_solicitaordemservico',$dados["id_solicitaordemservico"]);
		return $this->db->update('tbl_solicitaordemservico',$dados);
	}

	public function Contrato_Ata_Editar($dados = null)
	{

		$this->db->where('id_contratoata',$dados["id_contratoata"]);
		return $this->db->update('tbl_contratoata',$dados);
	}

	public function item_Editar($dados = null)
	{

		$this->db->where('id_itens',$dados["id_itens"]);
		return $this->db->update('tbl_itens',$dados);
	}

	public function entrada_Itens_Editar($dados = null)
	{

		$this->db->where('id_entradaitens',$dados["id_entradaitens"]);
		return $this->db->update('tbl_entradaitens',$dados);
	}

	public function saida_Itens_Editar($dados = null)
	{

		$this->db->where('id_saidaitens',$dados["id_saidaitens"]);
		return $this->db->update('tbl_saidaitens',$dados);
	}

	public function empenho_Editar($dados = null)
	{

		$this->db->where('id_empenho',$dados["id_empenho"]);
		return $this->db->update('tbl_empenho',$dados);
	}

	public function ordem_Servico_Editar($dados = null)
	{

		$this->db->where('id_ordemservico',$dados["id_ordemservico"]);
		return $this->db->update('tbl_ordemservico',$dados);
	}

	public function itemExcluir($dados = null){

		return $this->db->delete("tbl_ordemservico_x_item",array('id_ordemservico_x_item' => $dados));

	}

	public function empenhoExcluirAf($dados = null){

		return $this->db->delete("tbl_afpecas_x_empenho",array('id_afpecas_x_empenho' => $dados));

	}

	public function itemExcluirAf($dados = null){

		return $this->db->delete("tbl_afpecas_x_itens",array('id_afpecas_x_itens' => $dados));

	}

	public function empenhoExcluirAfs($dados = null){

		return $this->db->delete("tbl_afservicos_x_empenho",array('id_afservicos_x_empenho' => $dados));

	}

	public function itemExcluirAfs($dados = null){

		return $this->db->delete("tbl_afservicos_x_itens",array('id_afservicos_x_itens' => $dados));

	}

	public function servicoExcluir($dados = null){

		return $this->db->delete("tbl_ordemservico_x_servico",array('id_ordemservico_x_servico' => $dados));

	}

	public function ServicoExcluirAfs($dados = null) {
		return $this->db->delete("tbl_afservicos_x_servicos",array('id_afservicos_x_servicos' => $dados));
	}

	public function obter_Id_Os($id_solicitacao = null)
	{

		$this->db->where('id_solicitacao',$id_solicitacao);
		$dados = $this->db->get('tbl_ordemservico')->result();

		$id = 2;

		return $id;
	}

	public function af_Pecas_Editar($dados = null)
	{

		$this->db->where('id_afpecas',$dados["id_afpecas"]);
		return $this->db->update('tbl_autofornecpecas',$dados);
	}

	public function af_Servicos_Editar($dados = null)
	{

		$this->db->where('id_afservicos',$dados["id_afservicos"]);
		return $this->db->update('tbl_autofornecservicos',$dados);
	}


//**************************************************FUNÇÕES DE CALCULOS**************************************************************//

	//Em caso de saída de itens da baixa na tabela de itens.
	public function saida_Itens_Novo($subtrairTotal){

		return $this->db->query('update tbl_itens set estoquedisponivel = estoquedisponivel - '.$subtrairTotal["quantidade"].' where id_itens = '.$subtrairTotal["id_itens"].';');

	}

	//Estorno de uma saída para a tabela de itens.
	public function estorno_Saida_Itens_Novo($estornoSaida){

		$this->db->query('update tbl_saidaitens set estorno = \'t\' where id_saidaitens ='.$estornoSaida["id_saidaitens"].';');
		return $this->db->query('update tbl_itens set estoquedisponivel = estoquedisponivel + '.$estornoSaida["quantidade"].' where id_itens = '.$estornoSaida["codigointerno"].';');

	}

	//Em caso de entrada de itens soma na tabela de itens.
	public function entrada_Itens_Novo($somaTotal){

		return $this->db->query('update tbl_itens set estoquedisponivel = estoquedisponivel + '.$somaTotal["quantidade"].' where id_itens = '.$somaTotal["id_itens"].';');

	}

}