<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('nomeAplicacao','Sistema de Manutenção de Veículos'); /*Nome da aplicação*/

class edicoes extends CI_Controller {

	public function editar_Montadora(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Montadora'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Montadora(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_montadora.montadora]');

		if($this->form_validation->run()) {

			$dados = array(
				'id_montadora' => $this->input->post('id_montadora'),
				'montadora' => $this->input->post('nome')
				);

			if($this->edicao->montadora_Editar($dados)) {

				$this->session->set_userdata('aviso','Montadora: '.$this->input->post('nome').' Alterada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Montadora/'.$this->input->post('id_montadora'));

			} else {

				$this->session->set_userdata('aviso','Erro ao editar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Montadora/'.$this->input->post('id_montadora'));
			}

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Montadora/'.$this->input->post('id_montadora'));

		}

	}

	public function editar_Secao(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Secao'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Secao(){

		if($this->input->post('nome') != $this->input->post('nomeOriginal')) {

			$this->form_validation->set_rules('nome','Nome','is_unique[tbl_secao.secao]');
		}

		if($this->input->post('codsecao') != $this->input->post('codOriginal')) {
			$this->form_validation->set_rules('codsecao','Código','is_unique[tbl_secao.codsecao]');
		}


		if($this->form_validation->run()) {

			$dados = array(
				'id_secao' => $this->input->post('id_secao'),
				'secao' => $this->input->post('nome'),
				'codsecao' => $this->input->post('codsecao')
				);

			if($this->edicao->secao_Editar($dados)) {

				$this->session->set_userdata('aviso','Seção: '.$this->input->post('nome').' Alterada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Secao/'.$this->input->post('id_secao'));

			} else {

				$this->session->set_userdata('aviso','Erro ao editar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Secao/'.$this->input->post('id_secao'));
			}

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Secao/'.$this->input->post('id_secao'));

		}

	}

	public function editar_Cliente(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Cliente'); /*Redirecionar para adicionar aplicações (Editar Cliente)*/

	}

	public function editando_Cliente(){

		//Else criado somente para o "if ($this->form_validation->run())" entrar.
		if($this->input->post('nomecliente') != $this->input->post('nomeOriginal')) {

			$this->form_validation->set_rules('nomecliente','Nome','is_unique[tbl_clientes.nome]');
		}else {
			$this->form_validation->set_rules('nomecliente','Nome','required');
		}

		if($this->input->post('codigocliente') != $this->input->post('codOriginal')) {
			$this->form_validation->set_rules('codigocliente','Código','is_unique[tbl_clientes.codigo]');
		} else {
			$this->form_validation->set_rules('codigocliente','Código','required');
		}

		if ($this->form_validation->run()) {
		
			if ($this->input->post('complementocliente') != '') {
				
				$complemento = $this->input->post('complementocliente');

			} else {

				$complemento = null;

			}

			if($this->input->post('tel2cliente') != '') {

				$tel2 = $this->input->post('tel2cliente');

			} else {

				$tel2 = null;

			}

			if($this->input->post('faxcliente') != ''){

				$fax = $this->input->post('faxcliente');

			} else {

				$fax = null;

			}

		$dados = array (

			'id_cliente' => $this->input->post('id_cliente'),
			'codigo' => $this->input->post('codigocliente'),
			'nome' => $this->input->post('nomecliente'),
			'cep' => $this->input->post('cepcliente'),
			'rua' => $this->input->post('ruacliente'),
			'numero' => $this->input->post('numeroclienter'),
			'complemento' => $complemento,
			'cidade' => $this->input->post('cidadecliente'),
			'uf' => $this->input->post('uf'),
			'telramal1' => $this->input->post('tel1cliente'),
			'telramal2' => $tel2,
			'fax' => $fax,
			'contato' => $this->input->post('contatocliente'),
			'email' => $this->input->post('emailcliente')

			);

			$this->edicao->cliente($dados);

			$this->session->set_userdata('aviso','Cliente: '.$this->input->post('nomecliente').' Editado com sucesso!');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/edicoes-editar_Cliente/'.$this->input->post('id_cliente'));

		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Cliente/'.$this->input->post('id_cliente'));

		}

	}


	public function editar_Divisao(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Divisao'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Divisao(){

		if($this->input->post('nome') != $this->input->post('nomeOriginal')) {
			$this->form_validation->set_rules('nome','Nome','is_unique[tbl_divisao.divisao]');
		}
		
		if($this->input->post('coddivisao') != $this->input->post('codOriginal')) {
			$this->form_validation->set_rules('coddivisao','Código','is_unique[tbl_divisao.coddivisao]');
		}

		if($this->form_validation->run()) {

			$dados = array(
				'id_divisao' => $this->input->post('id_divisao'),
				'divisao' => $this->input->post('nome'),
				'coddivisao' => $this->input->post('coddivisao')
				);

			if($this->edicao->divisao_Editar($dados)) {

				$this->session->set_userdata('aviso','Divisão: '.$this->input->post('nome').' Alterada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Divisao/'.$this->input->post('id_divisao'));

			} else {

				$this->session->set_userdata('aviso','Erro ao editar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Divisao/'.$this->input->post('id_divisao'));
			}

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Divisao/'.$this->input->post('id_divisao'));

		}

	}

	public function editar_Departamento(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Departamento'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Departamento(){

		if($this->input->post('nome') != $this->input->post('nomeOriginal')) {
			$this->form_validation->set_rules('nome','Nome','is_unique[tbl_depto.depto]');
		}

		if($this->input->post('coddepto') != $this->input->post('codOriginal')) {
			$this->form_validation->set_rules('coddepto','Código','is_unique[tbl_depto.coddepto]');
		}

		if($this->form_validation->run()) {

			$dados = array(
				'id_depto' => $this->input->post('id_departamento'),
				'depto' => $this->input->post('nome'),
				'coddepto' => $this->input->post('coddepto')
				);

			if($this->edicao->departamento_Editar($dados)) {

				$this->session->set_userdata('aviso','Departamento: '.$this->input->post('nome').' Alterado com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Departamento/'.$this->input->post('id_departamento'));

			} else {

				$this->session->set_userdata('aviso','Erro ao editar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Departamento/'.$this->input->post('id_departamento'));
			}

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Departamento/'.$this->input->post('id_departamento'));

		}

	}

	public function editar_Modalidade(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Modalidade_Licitacao'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editar_Dotacao(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Dotacao/'.$this->uri->segment(3)); /*Redirecionar para adicionar Dotações (Editar Dotação)*/

	}

	public function editando_Dotacao(){

		$this->form_validation->set_rules('nomedotacao','Nome da Dotação','required');
		$this->form_validation->set_rules('segmento','Segmento','required');
		$this->form_validation->set_rules('estadodotacao','Segmento','required');
		$this->form_validation->set_rules('tipodotacao','Tipo dotação','required');

		if($this->input->post('segmento') == 'Selecione...') {

			$this->session->set_userdata('aviso','Campo de segmento é obrigatório');
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Dotacao/'.$this->input->post('id_dotacao'));
		}

		if($this->form_validation->run()) {


			$dados = array (

				'id_dotacao' => $this->input->post('id_dotacao'),
				'codigonumero' => $this->input->post('nomedotacao'),
				'id_segmento' => $this->input->post('segmento'),
				'idtipodotacao' => $this->input->post('tipodotacao'),
				'statusdotacao' => $this->input->post('estadodotacao')

			);

			$this->edicao->dotacao_Editar($dados);

			$this->session->set_userdata('aviso','Dotação : '.$this->input->post('nomedotacao').' Editada com sucesso!');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/edicoes-editar_Dotacao/'.$this->input->post('id_dotacao'));


		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Dotacao/'.$this->input->post('id_dotacao'));

		}



	}

	public function editar_Grupo_Itens(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Grupo_Itens/'.$this->uri->segment(3)); /*Redirecionar para adicionar Grupo de Itens (Editar Grupo de Itens)*/

	}

	public function editando_Grupo_Itens(){

		$this->form_validation->set_rules('nomegrupoitens','Nome do Grupo de itens','is_unique[tbl_grupoitens.grupoitens]');

		if($this->form_validation->run()) {

			$dados = array (

				'id_grupoitens' => $this->input->post('id_grupoitens'),
				'grupoitens' => $this->input->post('nomegrupoitens')

			);

			$this->edicao->grupo_Itens_Editar($dados);

			$this->session->set_userdata('aviso','Grupo itens : '.$this->input->post('nomegrupoitens').' Editado com sucesso!');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/edicoes-editar_Grupo_Itens/'.$this->input->post('id_grupoitens'));

		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Grupo_Itens/'.$this->input->post('id_grupoitens'));

		}

	}

	public function editar_Setor(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Setor/'.$this->uri->segment(3)); /*Redirecionar para adicionar Setor (Editar Setor)*/

	}

	public function editando_Setor(){

		if($this->input->post('nome') != $this->input->post('nomeOriginal')) {
			$this->form_validation->set_rules('nome','Nome','is_unique[tbl_setor.setor]');
		}

		if($this->input->post('codsetor') != $this->input->post('codOriginal')) {
			$this->form_validation->set_rules('codsetor','Código','is_unique[tbl_setor.codsetor]');
		}

		if($this->form_validation->run()) {

			$dados = array(
				'id_setor' => $this->input->post('id_setor'),
				'setor' => $this->input->post('nome'),
				'codsetor' => $this->input->post('codsetor')
				);

			$this->edicao->setor_Editar($dados);

				$this->session->set_userdata('aviso','Setor: '.$this->input->post('nome').' Alterado com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Setor/'.$this->input->post('id_setor'));

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Setor/'.$this->input->post('id_setor'));

		}


	}

	public function editar_Marca_Itens(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Marca_Itens/'.$this->uri->segment(3)); /*Redirecionar para adicionar Setor (Editar Setor)*/

	}

	public function editando_Marca_Itens(){

		$this->form_validation->set_rules('nome','Marca','is_unique[tbl_marcaitens.marcaitens]');

		if($this->form_validation->run()) {

			$dados = array(
				'id_marcaitens' => $this->input->post('id_marcaitens'),
				'marcaitens' => $this->input->post('nome')
				);

				$this->edicao->marca_Itens_Editar($dados);

				$this->session->set_userdata('aviso','Marca: '.$this->input->post('nome').' Alterada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Marca_Itens/'.$this->input->post('id_marcaitens'));

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Marca_Itens/'.$this->input->post('id_marcaitens'));

		}

	}

	public function editando_Modalidade(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_modalidadedelicitacao.modalidadedelicitacao]');

		if($this->form_validation->run()) {

			$dados = array(
				'id_modalidadedelicitacao' => $this->input->post('id_modalidade'),
				'modalidadedelicitacao' => $this->input->post('nome')
				);

			if($this->edicao->Modalidade_Editar($dados)) {

				$this->session->set_userdata('aviso','Modalidade: '.$this->input->post('nome').' Alterada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Modalidade_Licitacao/'.$this->input->post('id_Modalidade'));

			} else {

				$this->session->set_userdata('aviso','Erro ao editar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Modalidade_Licitacao/'.$this->input->post('id_Modalidade'));
			}

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Modalidade_Licitacao/'.$this->input->post('id_Modalidade'));

		}

	}


	public function editar_Fornecedor_Prestador(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Fornecedor_Prestador/'.$this->uri->segment(3)); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Fornecedor_Prestador(){

		$this->form_validation->set_rules('nomefornecedorprestador','Nome','required');
		$this->form_validation->set_rules('cepfornecedorprestador','CEP','required');
		$this->form_validation->set_rules('ruafornecedorprestador','Rua','required');
		$this->form_validation->set_rules('numerofornecedorprestador','Número','required');
		$this->form_validation->set_rules('cidadefornecedorprestador','Cidade','required');
		$this->form_validation->set_rules('uf','UF','required');
		$this->form_validation->set_rules('tel1fornecedorprestador','Telefone','required');
		$this->form_validation->set_rules('contatofornecedorprestador','Contato','required');
		$this->form_validation->set_rules('emailfornecedorprestador','E-mail','required');
		$this->form_validation->set_rules('cnpjfornecedorprestador','CNPJ','required');
		$this->form_validation->set_rules('checkpecas','Tipo de serviço','required');

		if ($this->form_validation->run()) {

				if ($this->input->post('complementofornecedorprestador') != '') {
					
					$complemento = $this->input->post('complementofornecedorprestador');

				} else {

					$complemento = null;

				}

				if($this->input->post('tel2fornecedorprestador') != '') {

					$tel2 = $this->input->post('tel2fornecedorprestador');

				} else {

					$tel2 = null;

				}

				if($this->input->post('faxfornecedorprestador') != ''){

					$fax = $this->input->post('faxfornecedorprestador');

				} else {

					$fax = null;

				}

			$dados = array (

				'id_fornecedorprestador' => $this->input->post('id_fornecedorprestador'),
				'nome' => $this->input->post('nomefornecedorprestador'),
				'cep' => $this->input->post('cepfornecedorprestador'),
				'rua' => $this->input->post('ruafornecedorprestador'),
				'numero' => $this->input->post('numerofornecedorprestador'),
				'complemento' => $complemento,
				'cidade' => $this->input->post('cidadefornecedorprestador'),
				'uf' => $this->input->post('uf'),
				'tel1' => $this->input->post('tel1fornecedorprestador'),
				'tel2' => $tel2,
				'fax' => $fax,
				'contato' => $this->input->post('contatofornecedorprestador'),
				'email' => $this->input->post('emailfornecedorprestador'),
				'cnpj' => $this->input->post('cnpjfornecedorprestador'),
				'id_tiposervico' => $this->input->post('checkpecas')

			);

			$this->edicao->fornecedor_Prestador_Editar($dados);
			$this->session->set_userdata('aviso',''.$this->input->post('nomefornecedorprestador').' Editado com sucesso');
			$this->session->set_userdata('tipo','success');
			redirect('main/redirecionar/edicoes-editar_Fornecedor_Prestador/'.$this->input->post('id_fornecedorprestador'));

		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');
			redirect('main/redirecionar/edicoes-editar_Fornecedor_Prestador/'.$this->input->post('id_fornecedorprestador'));

		}


	}

	public function editar_Servico(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Servico/'.$this->uri->segment(3)); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Servico(){

		$this->form_validation->set_rules('nomeservico','Serviço','required');
		$this->form_validation->set_rules('unidademedida','Unidade de medida','required');
		$this->form_validation->set_rules('valorservico','Valor','required');
		$this->form_validation->set_rules('fornecedorprestador','Fornecedor / Prestador','required');

		if($this->form_validation->run()) {


			if($this->input->post('fornecedorprestador') == 'Selecione...' || $this->input->post('unidademedida') == 'Selecione...') {

			$this->session->set_userdata('aviso','Selecione um Prestador de serviço e uma unidade de medida.');
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Servico');

			}

			$dados = array (
				
				'id_servicos' => $this->input->post('id_servicos'),
				'servico' => $this->input->post('nomeservico'),
				'valorunitario' => $this->input->post('valorservico'),
				'id_fornecedorprestador' => $this->input->post('fornecedorprestador'),
				'id_unidademedida' => $this->input->post('unidademedida')

				);

			$this->edicao->servicos($dados);

			$this->session->set_userdata('aviso','Serviço: '.$this->input->post('nomeservico').' Alterado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/edicoes-editar_Servico');


		} else {


			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Servico');

		}


	}

	public function editar_Colaborador(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Colaborador'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Colaborador() {

		$this->form_validation->set_rules('codigocolaborador','Código','required');
		$this->form_validation->set_rules('nomecolaborador','Nome','required');
		$this->form_validation->set_rules('cpfcolaborador','CPF','required');
		$this->form_validation->set_rules('emailcolaborador','E-mail','required');
		$this->form_validation->set_rules('telefonecolaborador','Telefone','required');
		$this->form_validation->set_rules('celularcolaborador','Celular','required');
		$this->form_validation->set_rules('funcaocolaborador','Fundação','required');

		if($this->form_validation->run()) {

			if($this->input->post('setor') == 'Selecione...') {

			$this->session->set_userdata('aviso','O campo Setor é obrigatório.');
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Colaborador');

			}

			$dados = array(
				'id_colaborador' => $this->input->post('id_colaborador'),
				'codigofuncional' => $this->input->post('codigocolaborador'),
				'nome' => $this->input->post('nomecolaborador'),
				'cpf' => $this->input->post('cpfcolaborador'),
				'email' => $this->input->post('emailcolaborador'),
				'telefone' => $this->input->post('telefonecolaborador'),
				'celular' => $this->input->post('celularcolaborador'),
				'funcaocargo' => $this->input->post('funcaocolaborador'),
				'id_setor' => $this->input->post('setor')
				);

			$this->edicao->colaborador($dados);

			$this->session->set_userdata('aviso','Colaborador: '.$this->input->post('nomecolaborador').' Alterado com sucesso!');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/edicoes-editar_Colaborador');

		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Colaborador');

		}

	}

	public function editar_Veiculo(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Veiculo'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Veiculo(){

	if($this->input->post('preOriginal') != $this->input->post('prefixo')) {
		$this->form_validation->set_rules('prefixo','Prefixo','is_unique[tbl_veiculo.prefixo]');
	} else {
		$this->form_validation->set_rules('prefixo','Prefixo','required');
	}

	if($this->form_validation->run()){

			if ($this->input->post('numeromotor') != '') {
				
				$numeromotor = $this->input->post('numeromotor');

			} else {

				$numeromotor = null;

			}

			if($this->input->post('detalhemotor') != '') {

				$detalhemotor = $this->input->post('detalhemotor');

			} else {

				$detalhemotor = null;

			}

			if($this->input->post('observ') != ''){

				$observ = $this->input->post('observ');

			} else {

				$observ = null;

			}

		$dados = array (

			'id_veiculo' => $this->input->post('id_veiculo'),
			'prefixo' => $this->input->post('prefixo'),
			'modelo' => $this->input->post('modelo'),
			'marca' => $this->input->post('marca'),
			'tipo' => $this->input->post('tipo'),
			'chassis' => $this->input->post('chassis'),
			'anomodelo' => $this->input->post('anomodelo'),
			'placa' => $this->input->post('placa'),
			'numeromotor' => $numeromotor,
			'detalhemotor' =>$detalhemotor,
			'id_combustivel' => $this->input->post('id_combustivel'),
			'id_unidadeservicosaude' => $this->input->post('id_unidadeservicosaude'),
			'id_estadoveiculo' => $this->input->post('id_estadoveiculo'),
			'observ' => $observ

		);

			$this->edicao->veiculo($dados);

			$this->session->set_userdata('aviso','Veículo: '.$this->input->post('prefixo').' Alterado com sucesso');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/edicoes-editar_Veiculo');


	} else {


			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Veiculo');

		}


	}

	public function editar_Objeto(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Objeto/'.$this->uri->segment(3)); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Objeto(){

		$this->form_validation->set_rules('nomeobjetotitulo','Título do objeto','required');

		if($this->form_validation->run()) {

			$dados = array(
				'id_objeto' => $this->input->post('id_objeto'),
				'objetotitulo' => $this->input->post('nomeobjetotitulo'),
				'objetotexto' => $this->input->post('nomeobjetotexto')
				);

				$this->edicao->objeto_Editar($dados); 

				$this->session->set_userdata('aviso','Objeto: '.$this->input->post('nomeobjetotitulo').' Alterado com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Objeto/'.$this->input->post('id_objeto'));

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Objeto/'.$this->input->post('id_objeto'));

		}

	}

	public function editar_Solicitacao_Ordem_Servico(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Solicitacao_Ordem_Servico'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Solicitacao_Ordem_Servico(){

		$dados = array (

			'id_solicitaordemservico' => $this->input->post('id_solicitaordemservico'),
			'id_unidadesolicitante' => $this->input->post('unidadesolicitante'),
			'id_veiculo' => $this->input->post('prefixo'),
			'km' => $this->input->post('km'),
			'defeitoapresentado' => $this->input->post('defeitoapresentado'),
			'id_estadosolicitacao' => $this->input->post('id_estadosolicitacao')

		);

		$this->edicao->solicita_Ordem_Servico_Editar($dados);

		$this->session->set_userdata('aviso','Ordem de serviço alterada com sucesso');
		$this->session->set_userdata('tipo','success');

		redirect('main/redirecionar/edicoes-editar_Solicitacao_Ordem_Servico/'.$this->input->post('id_solicitaordemservico'));

	}

	public function editar_Contrato_Ata(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Contrato_Ata'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Contrato_Ata() {

		$this->form_validation->set_rules('numerocontratoata','Número do Contrato/ATA','required');
		$this->form_validation->set_rules('dtinivigencia','Início da Vigência','required|valid_date');
		$this->form_validation->set_rules('dtfimvigencia','Término da Vigência','required|valid_date');
		$this->form_validation->set_rules('dtinivigenciaprorrog','Início da Vigência','valid_date');
		$this->form_validation->set_rules('dtfimvigenciaprorrog','Término da Vigência','valid_date');
		$this->form_validation->set_rules('id_fornecedorprestador','Fornecedor','required');
		$this->form_validation->set_rules('cnpj','CNPJ','required');
		$this->form_validation->set_rules('procadmin','Processo Administrativo','required');
		$this->form_validation->set_rules('id_modalidadelicitacao','Modalidade Licitação','required');
		$this->form_validation->set_rules('numerolicitacao','Licitação','required');
		$this->form_validation->set_rules('datahomologacao','Data da Homologação','required|valid_date');
		$this->form_validation->set_rules('id_objetotitulo','Objeto - Título','required');
		$this->form_validation->set_rules('prazoentrega','Prazo de Entrega','required');
		$this->form_validation->set_rules('prazopagto','Prazo de pagamento','required');

		if($this->form_validation->run()){

			if($this->input->post('numanoemissorprorrogacao') == '') {$numanoemissorprorrogacao = null;} else {$numanoemissorprorrogacao = $this->input->post('numanoemissorprorrogacao');}
			if($this->input->post('dtinivigenciaprorrog') == '') {$dtinivigenciaprorrog = null;} else {$dtinivigenciaprorrog = $this->input->post('dtinivigenciaprorrog');}
			if($this->input->post('dtfimvigenciaprorrog') == '') {$dtfimvigenciaprorrog = null;} else {$dtfimvigenciaprorrog = $this->input->post('dtfimvigenciaprorrog');}
			if($this->input->post('orgaosparticipantes') == '') {$orgaosparticipantes = null;} else {$orgaosparticipantes = $this->input->post('orgaosparticipantes');}

			$dados = array (

				'id_contratoata' => $this->input->post('id_contratoata'),
				'numerocontratoata' => $this->input->post('numerocontratoata'),
				'dtinivigencia' => $this->input->post('dtinivigencia'),
				'dtfimvigencia' => $this->input->post('dtfimvigencia'),
				'numanoemissorprorrogacao' => $numanoemissorprorrogacao,
				'dtinivigenciaprorrog' => $dtinivigenciaprorrog,
				'dtfimvigenciaprorrog' => $dtfimvigenciaprorrog,
				'id_fornecedorprestador' => $this->input->post('id_fornecedorprestador'),
				'cnpj' => $this->input->post('cnpj'),
				'procadmin' => $this->input->post('procadmin'),
				'id_modalidadelicitacao' => $this->input->post('id_modalidadelicitacao'),
				'numerolicitacao' => $this->input->post('numerolicitacao'),
				'datahomologacao' => $this->input->post('datahomologacao'),
				'id_objetotitulo' => $this->input->post('id_objetotitulo'),
				'prazoentrega' => $this->input->post('prazoentrega'),
				'prazopagto' => $this->input->post('prazopagto'),
				'orgaosparticipantes' => $orgaosparticipantes

			);

			$this->edicao->Contrato_Ata_Editar($dados);

			$this->session->set_userdata('aviso','Contrato/ATA Criado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/edicoes-editar_Contrato_Ata/'.$this->input->post('id_contratoata'));

		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Contrato_Ata/'.$this->input->post('id_contratoata'));

		}
		
	}

	public function editar_Unidade_Utilizadora(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Unidade_Utilizadora'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Unidade_Utilizadora() {

		/*Impede que '' ou 'Selecione...', em caso de campo select, seja enviado para o banco no lugar de um número, para os campos não obrigatórios*/
		if($this->input->post('complemento') == '') { $complemento = null;} else { $complemento = $this->input->post('complemento'); }
		if($this->input->post('ramal') == '') { $ramal = null;} else { $ramal = $this->input->post('ramal'); }
		if($this->input->post('fax') == '') { $fax = null;} else { $fax = $this->input->post('fax'); }
		if($this->input->post('complementofaturamento') == '') { $complementofaturamento = null;} else { $complementofaturamento = $this->input->post('complementofaturamento'); }
		if($this->input->post('id_divisao') == 'Selecione...') { $id_divisao = null;} else { $id_divisao = $this->input->post('id_divisao'); }
		if($this->input->post('id_secao') == 'Selecione...') { $id_secao = null;} else { $id_secao = $this->input->post('id_secao'); }
		if($this->input->post('id_setor') == 'Selecione...') { $id_setor = null;} else { $id_setor = $this->input->post('id_setor'); }


		$dados = array (

			'id_unidadeutilizadora' => $this->input->post('id_unidadeutilizadora'),
			'cep' => $this->input->post('cep'),
			'rua' => $this->input->post('rua'),
			'numero' => $this->input->post('numero'),
			'complemento' => $complemento,
			'cidade' => $this->input->post('cidade'),
			'uf' => $this->input->post('uf'),
			'telefone' => $this->input->post('telefone'),
			'ramal' => $ramal,
			'fax' => $fax,
			'contato' => $this->input->post('contato'),
			'email' => $this->input->post('email'),
			'cnpj' => $this->input->post('cnpj'),
			'cepfaturamento' => $this->input->post('cepfaturamento'),
			'ruafaturamento' => $this->input->post('ruafaturamento'),
			'numerofaturamento' => $this->input->post('numerofaturamento'),
			'complementofaturamento' => $complementofaturamento,
			'cidadefaturamento' => $this->input->post('cidadefaturamento'),
			'uffaturamento' => $this->input->post('uffaturamento'),
			'id_depto' => $this->input->post('id_depto'),
			'id_divisao' => $id_divisao,
			'id_secao' => $id_secao,
			'id_setor' => $id_setor

		);

		if($this->edicao->unidade_Utilizadora_Editar($dados)){

			$this->session->set_userdata('aviso','Unidade utilizadora Adicionada com sucesso');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/edicoes-editar_Unidade_Utilizadora');

		} else {

			$this->session->set_userdata('aviso','Unidade utilizadora não pode ser Editada.');
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Unidade_Utilizadora');

		}

	}

}