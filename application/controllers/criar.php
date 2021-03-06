<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('nomeAplicacao','Sistema de Manutenção de Veículos'); /*Nome da aplicação*/

class criar extends CI_Controller {

	public function nova_Montadora(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_montadora.montadora]');

		if($this->form_validation->run()) {

			$nome = array ('montadora' => $this->input->post('nome'));

			if($this->novo->montadora_Nova($nome)) {

				$this->session->set_userdata('aviso','Montadora: '.$this->input->post('nome').' Adicionada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/criar-nova_Montadora');

			} else {

				$this->session->set_userdata('aviso','Erro ao cadastrar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Montadora');
			}
		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Montadora');

		}

	}

	public function novo_Colaborador(){

		$this->form_validation->set_rules('codigocolaborador','Código','required');
		$this->form_validation->set_rules('nomecolaborador','Nome','required');
		$this->form_validation->set_rules('cpfcolaborador','CPF','required');
		$this->form_validation->set_rules('emailcolaborador','E-mail','required');
		$this->form_validation->set_rules('telefonecolaborador','Telefone','required');
		$this->form_validation->set_rules('celularcolaborador','Celular','required');
		$this->form_validation->set_rules('funcaocolaborador','Fundação','required');

		if($this->form_validation->run()) {


			if($this->input->post('setor') == 'Selecione...') {

			$this->session->set_flashdata('codigocolaborador', $this->input->post('codigocolaborador'));
			$this->session->set_flashdata('nomecolaborador', $this->input->post('nomecolaborador'));
			$this->session->set_flashdata('cpfcolaborador', $this->input->post('cpfcolaborador'));
			$this->session->set_flashdata('emailcolaborador', $this->input->post('emailcolaborador'));
			$this->session->set_flashdata('telefonecolaborador', $this->input->post('telefonecolaborador'));
			$this->session->set_flashdata('celularcolaborador', $this->input->post('celularcolaborador'));
			$this->session->set_flashdata('funcaocolaborador', $this->input->post('funcaocolaborador'));
			$this->session->set_flashdata('setor', $this->input->post('setor'));

			$this->session->set_userdata('aviso','O campo Setor é obrigatório.');
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Colaborador');

			}

			$dados = array (
				'codigofuncional' => $this->input->post('codigocolaborador'),
				'nome' => $this->input->post('nomecolaborador'),
				'cpf' => $this->input->post('cpfcolaborador'),
				'email' => $this->input->post('emailcolaborador'),
				'telefone' => $this->input->post('telefonecolaborador'),
				'celular' => $this->input->post('celularcolaborador'),
				'funcaocargo' => $this->input->post('funcaocolaborador'),
				'id_setor' => $this->input->post('setor')
				);

			$this->novo->colaborador_Novo($dados);

			$this->session->set_userdata('aviso','Colaborador: '.$this->input->post('nomecolaborador').' Adicionado com sucesso!');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Colaborador');

		} else {

			$this->session->set_flashdata('codigocolaborador', $this->input->post('codigocolaborador'));
			$this->session->set_flashdata('nomecolaborador', $this->input->post('nomecolaborador'));
			$this->session->set_flashdata('cpfcolaborador', $this->input->post('cpfcolaborador'));
			$this->session->set_flashdata('emailcolaborador', $this->input->post('emailcolaborador'));
			$this->session->set_flashdata('telefonecolaborador', $this->input->post('telefonecolaborador'));
			$this->session->set_flashdata('celularcolaborador', $this->input->post('celularcolaborador'));
			$this->session->set_flashdata('funcaocolaborador', $this->input->post('funcaocolaborador'));
			$this->session->set_flashdata('setor', $this->input->post('setor'));

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Colaborador');

		}

	}

		public function nova_Divisao(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_divisao.divisao]');

		if($this->form_validation->run()) {

			$nome = array ('divisao' => $this->input->post('nome'), 
				'coddivisao' => $this->input->post('coddivisao'),
				'coddepto' => $this->input->post('coddepto'));

			if($this->novo->divisao_Nova($nome)) {

				$this->session->set_userdata('aviso','Divisao: '.$this->input->post('nome').' Adicionada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/criar-nova_Divisao');

			} else {

				$this->session->set_userdata('aviso','Erro ao cadastrar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Divisao');
			}
		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Divisao');
			
		}

	}

		public function nova_Secao(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_secao.secao]');

		if($this->form_validation->run()) {

			$nome = array (
					'secao' => $this->input->post('nome'),
					'codsecao' => $this->input->post('codsecao'),
					'coddepto' => $this->input->post('coddepto'),
					'coddivisao' => $this->input->post('coddivisao')
				);

			if($this->novo->secao_Nova($nome)) {

				$this->session->set_userdata('aviso','Seção: '.$this->input->post('nome').' Adicionada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/criar-nova_Secao');

			} else {

				$this->session->set_userdata('aviso','Erro ao cadastrar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Secao');
			}

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Secao');
			
		}

	}

		public function novo_Departamento(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_depto.depto]');

		if($this->form_validation->run()) {

			$nome = array ('depto' => $this->input->post('nome'), 
				'coddepto' => $this->input->post('coddepto'));

			if($this->novo->departamento_Novo($nome)) {

				$this->session->set_userdata('aviso','Departamento: '.$this->input->post('nome').' Adicionado com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/criar-novo_Departamento');

			} else {

				$this->session->set_userdata('aviso','Erro ao cadastrar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-novo_Departamento');
			}
		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-novo_Departamento');
			
		}

	}

		public function nova_Modalidade_Licitatoria(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_modalidadedelicitacao.modalidadedelicitacao]');

		if($this->form_validation->run()) {

			$nome = array ('modalidadedelicitacao' => $this->input->post('nome'));

			if($this->novo->modalidade_Licitatoria_Nova($nome)) {

				$this->session->set_userdata('aviso','Modalidade Licitatória: '.$this->input->post('nome').' Adicionado com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/criar-nova_Modalidade_Licitacao');

			} else {

				$this->session->set_userdata('aviso','Erro ao cadastrar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Modalidade_Licitacao');
			}
		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Modalidade_Licitacao');
			
		}

	}

	public function nova_Dotacao(){

		$this->form_validation->set_rules('nomedotacao','Nome da Dotação','required');
		$this->form_validation->set_rules('segmento','Segmento','required');
		$this->form_validation->set_rules('estadodotacao','Segmento','required');
		$this->form_validation->set_rules('tipodotacao','Tipo dotação','required');

		if($this->input->post('segmento') == 'Selecione...') {

			$this->session->set_userdata('aviso','Campo de segmento é obrigatório');
			$this->session->set_userdata('tipo','danger');

			$this->session->set_flashdata('nomedotacao', $this->input->post('nomedotacao'));
			$this->session->set_flashdata('segmento', $this->input->post('segmento'));
			$this->session->set_flashdata('estadodotacao', $this->input->post('estadodotacao'));
			$this->session->set_flashdata('tipodotacao', $this->input->post('tipodotacao'));

			redirect('main/redirecionar/criar-nova_Dotacao');
		}

		if($this->form_validation->run()) {


			$dados = array (

				'codigonumero' => $this->input->post('nomedotacao'),
				'id_segmento' => $this->input->post('segmento'),
				'idtipodotacao' => $this->input->post('tipodotacao'),
				'statusdotacao' => $this->input->post('estadodotacao')

			);

			$this->novo->dotacao_Nova($dados);

			$this->session->set_userdata('aviso','Dotação : '.$this->input->post('nomedotacao').' Adicionada com sucesso!');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-nova_Dotacao');


		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			$this->session->set_flashdata('nomedotacao', $this->input->post('nomedotacao'));
			$this->session->set_flashdata('segmento', $this->input->post('segmento'));
			$this->session->set_flashdata('estadodotacao', $this->input->post('estadodotacao'));
			$this->session->set_flashdata('tipodotacao', $this->input->post('tipodotacao'));

			redirect('main/redirecionar/criar-nova_Dotacao');

		}


	}


	public function novo_Grupo_Itens(){

		$this->form_validation->set_rules('nomegrupoitens','Nome do Grupo de itens','is_unique[tbl_grupoitens.grupoitens]');

		if($this->form_validation->run()) {

			$dados = array ('grupoitens' => $this->input->post('nomegrupoitens'));

			$this->novo->grupo_Itens_Novo($dados);

			$this->session->set_userdata('aviso','Grupo: '.$this->input->post('nomegrupoitens').' Adicionado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Grupo_Itens');


		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Grupo_Itens');

		}

	}

	public function novo_Setor(){

		$this->form_validation->set_rules('nome','Nome do setor','is_unique[tbl_setor.setor]');

		if($this->form_validation->run()) {

			$dados = array (
				'setor' => $this->input->post('nome'), 
				'codsetor' => $this->input->post('codsetor'),
				'coddepto' => $this->input->post('coddepto'),
				'coddivisao' => $this->input->post('coddivisao'),
				'codsecao' => $this->input->post('codsecao')
				);

			$this->novo->setor_Novo($dados);

			$this->session->set_userdata('aviso','Setor: '.$this->input->post('nome').' Adicionado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Setor');


		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Setor');

		}

	}

	public function novo_Objeto(){

		$this->form_validation->set_rules('nomeobjetotitulo','Título do Objeto','is_unique[tbl_objeto.objetotitulo]');

		if($this->form_validation->run()) {

			$dados = array ('objetotitulo' => $this->input->post('nomeobjetotitulo'), 'objetotexto' => $this->input->post('nomeobjetotexto'));

			$this->novo->objeto_Novo($dados);

			$this->session->set_userdata('aviso','Objeto: '.$this->input->post('nomeobjetotitulo').' Adicionado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Objeto');


		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Objeto');

		}

	}

	public function nova_Marca_Itens(){

		$this->form_validation->set_rules('nome','Marca','is_unique[tbl_marcaitens.marcaitens]');

		if($this->form_validation->run()) {

			$dados = array ('marcaitens' => $this->input->post('nome'));

			$this->novo->Marca_Itens_Novo($dados);

			$this->session->set_userdata('aviso','Marca: '.$this->input->post('nome').' Adicionada com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-nova_Marca_Itens');


		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-nova_Marca_Itens');

		}

	}

	public function novo_Servico(){

		$this->form_validation->set_rules('nomeservico','Serviço','required');
		$this->form_validation->set_rules('unidademedida','Unidade de medida','required');
		$this->form_validation->set_rules('valorservico','Valor','required');
		$this->form_validation->set_rules('fornecedorprestador','Fornecedor / Prestador','required');

		if($this->form_validation->run()) {


			if($this->input->post('fornecedorprestador') == 'Selecione...' || $this->input->post('unidademedida') == 'Selecione...') {

			$this->session->set_flashdata('nomeservico', $this->input->post('nomeservico'));
			$this->session->set_flashdata('unidademedida', $this->input->post('unidademedida'));
			$this->session->set_flashdata('valorservico', $this->input->post('valorservico'));
			$this->session->set_flashdata('fornecedorprestador', $this->input->post('fornecedorprestador'));

			$this->session->set_userdata('aviso','Selecione um Prestador de serviço e uma unidade de medida.');
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Servico');

			}

			$dados = array (
				
				'servico' => $this->input->post('nomeservico'),
				'valorunitario' => $this->input->post('valorservico'),
				'id_fornecedorprestador' => $this->input->post('fornecedorprestador'),
				'id_unidademedida' => $this->input->post('unidademedida')

				);

			$this->novo->servico_Novo($dados);

			$this->session->set_userdata('aviso','Serviço: '.$this->input->post('nomeservico').' Adicionado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Servico');


		} else {

			$this->session->set_flashdata('nomeservico', $this->input->post('nomeservico'));
			$this->session->set_flashdata('unidademedida', $this->input->post('unidademedida'));
			$this->session->set_flashdata('valorservico', $this->input->post('valorservico'));
			$this->session->set_flashdata('fornecedorprestador', $this->input->post('fornecedorprestador'));

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Servico');

		}

	}

	public function novo_Fornecedor_Prestador() {

		$this->form_validation->set_rules('codigofornecedorprestador','Código','required');
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

				'codigo' => $this->input->post('codigofornecedorprestador'),
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

			$this->novo->fornecedor_Prestador_Novo($dados);

			$this->session->set_userdata('aviso',''.$this->input->post('nomefornecedorprestador').' Adicionado com sucesso');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Fornecedor_Prestador');

		} else {

			$this->session->set_flashdata('codigofornecedorprestador', $this->input->post('codigofornecedorprestador'));
			$this->session->set_flashdata('nomefornecedorprestador', $this->input->post('nomefornecedorprestador'));
			$this->session->set_flashdata('cepfornecedorprestador', $this->input->post('cepfornecedorprestador'));
			$this->session->set_flashdata('ruafornecedorprestador', $this->input->post('ruafornecedorprestador'));
			$this->session->set_flashdata('numerofornecedorprestador', $this->input->post('numerofornecedorprestador'));
			$this->session->set_flashdata('complementofornecedorprestador', $this->input->post('complementofornecedorprestador'));
			$this->session->set_flashdata('cidadefornecedorprestador', $this->input->post('cidadefornecedorprestador'));
			$this->session->set_flashdata('uf', $this->input->post('uf'));
			$this->session->set_flashdata('tel1fornecedorprestador', $this->input->post('tel1fornecedorprestador'));
			$this->session->set_flashdata('tel2fornecedorprestador', $this->input->post('tel2fornecedorprestador'));
			$this->session->set_flashdata('faxfornecedorprestador', $this->input->post('faxfornecedorprestador'));
			$this->session->set_flashdata('contatofornecedorprestador', $this->input->post('contatofornecedorprestador'));
			$this->session->set_flashdata('emailfornecedorprestador', $this->input->post('emailfornecedorprestador'));
			$this->session->set_flashdata('cnpjfornecedorprestador', $this->input->post('cnpjfornecedorprestador'));
			$this->session->set_flashdata('checkpecas', $this->input->post('checkpecas'));

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Fornecedor_Prestador');
		}

	}

public function novo_Cliente() {

	$this->form_validation->set_rules('nomecliente','Nome','is_unique[tbl_clientes.nome]');

	if($this->form_validation->run()){

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

			$this->novo->cliente_Novo($dados);

			$this->session->set_userdata('aviso','Cliente: '.$this->input->post('nomecliente').' Adicionado com sucesso');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Cliente');


	} else {

			$this->session->set_flashdata('codigocliente', $this->input->post('codigocliente'));
			$this->session->set_flashdata('nomecliente', $this->input->post('nomecliente'));
			$this->session->set_flashdata('cepcliente', $this->input->post('cepcliente'));
			$this->session->set_flashdata('ruacliente', $this->input->post('ruacliente'));
			$this->session->set_flashdata('numeroclienter', $this->input->post('numeroclienter'));
			$this->session->set_flashdata('complementocliente', $this->input->post('complementocliente'));
			$this->session->set_flashdata('cidadecliente', $this->input->post('cidadecliente'));
			$this->session->set_flashdata('uf', $this->input->post('uf'));
			$this->session->set_flashdata('tel1cliente', $this->input->post('tel1cliente'));
			$this->session->set_flashdata('tel2cliente', $this->input->post('tel2cliente'));
			$this->session->set_flashdata('faxcliente', $this->input->post('faxcliente'));
			$this->session->set_flashdata('contatocliente', $this->input->post('contatocliente'));
			$this->session->set_flashdata('emailcliente', $this->input->post('emailcliente'));

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Cliente');

		}

	}

	public function novo_Veiculo() {

	$this->form_validation->set_rules('prefixo','Prefixo','is_unique[tbl_veiculo.prefixo]');

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

			$this->novo->veiculo_Novo($dados);

			$this->session->set_userdata('aviso','Veículo: '.$this->input->post('prefixo').' Adicionado com sucesso');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Veiculo');


	} else {

			$this->session->set_flashdata('prefixo', $this->input->post('prefixo'));
			$this->session->set_flashdata('modelo', $this->input->post('modelo'));
			$this->session->set_flashdata('marca', $this->input->post('marca'));
			$this->session->set_flashdata('tipo', $this->input->post('tipo'));
			$this->session->set_flashdata('chassis', $this->input->post('chassis'));
			$this->session->set_flashdata('anomodelo', $this->input->post('anomodelo'));
			$this->session->set_flashdata('placa', $this->input->post('placa'));
			$this->session->set_flashdata('numeromotor', $this->input->post('numeromotor'));
			$this->session->set_flashdata('detalhemotor', $this->input->post('detalhemotor'));
			$this->session->set_flashdata('id_combustivel', $this->input->post('id_combustivel'));
			$this->session->set_flashdata('id_unidadeservicosaude', $this->input->post('tel2cliente'));
			$this->session->set_flashdata('id_estadoveiculo', $this->input->post('id_estadoveiculo'));
			$this->session->set_flashdata('observ', $this->input->post('observ'));

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Veiculo');

		}

	}

	public function nova_Unidade_Utilizadora() {

		/*Impede que '' ou 'Selecione...', em caso de campo select, seja enviado para o banco no lugar de um número, para os campos não obrigatórios*/
		if($this->input->post('complemento') == '') { $complemento = null;} else { $complemento = $this->input->post('complemento'); }
		if($this->input->post('ramal') == '') { $ramal = null;} else { $ramal = $this->input->post('ramal'); }
		if($this->input->post('fax') == '') { $fax = null;} else { $fax = $this->input->post('fax'); }
		if($this->input->post('complementofaturamento') == '') { $complementofaturamento = null;} else { $complementofaturamento = $this->input->post('complementofaturamento'); }
		if($this->input->post('id_divisao') == 'Selecione...') { $id_divisao = null;} else { $id_divisao = $this->input->post('id_divisao'); }
		if($this->input->post('id_secao') == 'Selecione...') { $id_secao = null;} else { $id_secao = $this->input->post('id_secao'); }
		if($this->input->post('id_setor') == 'Selecione...') { $id_setor = null;} else { $id_setor = $this->input->post('id_setor'); }


		$dados = array (

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

		if($this->novo->unidade_Utilizadora_Novo($dados)){

			$this->session->set_userdata('aviso','Unidade utilizadora Adicionada com sucesso');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-nova_Unidade_Utilizadora');

		} else {

			$this->session->set_userdata('aviso','Unidade utilizadora não pode ser adicionada.');
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-nova_Unidade_Utilizadora');

		}

	}

	public function nova_Solicitacao_Ordem_Servico() {

		$dados = array (

			'id_unidadesolicitante' => $this->input->post('unidadesolicitante'),
			'id_veiculo' => $this->input->post('prefixo'),
			'km' => $this->input->post('km'),
			'defeitoapresentado' => $this->input->post('defeitoapresentado'),
			'id_estadosolicitacao' => $this->input->post('id_estadosolicitacao'),
			'datasolicitacao' => date("d/m/Y")

		);

		$id_retorno = $this->novo->solicita_Ordem_Servico_Nova($dados);

		$this->session->set_userdata('aviso','Solicitação de Ordem de serviço criada com sucesso');
		$this->session->set_userdata('tipo','success');

		$this->session->set_userdata('idEditar',$id_retorno); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Solicitacao_Ordem_Servico/'.$id_retorno);
		
	}

	public function gerar_Ordem_Servico() {

			$dados = array ('id_solicitacao' => $this->uri->segment(3));

			$id_retorno = $this->novo->gerar_Nova_Os($dados);

			$this->session->set_userdata('aviso','Ordem de serviço gerada com sucesso');
			$this->session->set_userdata('tipo','success');
			
			$this->session->set_userdata('idEditar',$id_retorno); /*Saber ID que está sendo editado*/
			redirect('main/redirecionar/edicoes-editar_Ordem_Servico/'.$id_retorno);

	}

	public function novo_Contrato_Ata() {

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
			/*//////////////////////////////////////////////////////////////
			/////////////////UPLOAD DE ANEXOS///////////////////////////////
			////////////////////////////////////////////////////////////////*/

					if($this->input->post('numanoemissorprorrogacao') == '') {$numanoemissorprorrogacao = null;} else {$numanoemissorprorrogacao = $this->input->post('numanoemissorprorrogacao');}
					if($this->input->post('dtinivigenciaprorrog') == '') {$dtinivigenciaprorrog = null;} else {$dtinivigenciaprorrog = $this->input->post('dtinivigenciaprorrog');}
					if($this->input->post('dtfimvigenciaprorrog') == '') {$dtfimvigenciaprorrog = null;} else {$dtfimvigenciaprorrog = $this->input->post('dtfimvigenciaprorrog');}
					if($this->input->post('orgaosparticipantes') == '') {$orgaosparticipantes = null;} else {$orgaosparticipantes = $this->input->post('orgaosparticipantes');}
					

					$dados = array (

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

					$id_contratoata = $this->novo->Contrato_Ata_Novo($dados);

					// Envia o contrato ATA

					$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/smv/uploadanexos/';
					$config['allowed_types'] = 'jpg|png|pdf|docx|xlsx|doc|xls|txt';
					$config['max_size'] = '10000';
					$config['max_width'] = '10240';
					$config['max_height'] = '7680';

					$this->load->library('upload',$config);

					/*		Usado para quando é encontrado erro no UPLOAD (Verificar necessidade de usar)				
						$error = array ('error' => $this->upload->display_errors());
						$data = array ('error' => $error);
						$this->load->view('erro',$data);

						$this->session->set_userdata('aviso',$this->upload->display_errors().$config['upload_path']);
						$this->session->set_userdata('tipo','danger');

						redirect('main/redirecionar/criar-novo_Contrato_Ata');*/
				
					if($this->upload->do_upload()){

						$data = $this->upload->data();
						$anexo = $data['full_path'];
						
						$anexoEditado = explode("/",$anexo);
					
						$anexar = array (

							'id_contratoata' => $this->input->post('id_contratoata'),
							'caminhoanexo' => ''.$anexoEditado[count($anexoEditado)-1].'' //Extrair somente o nome e extensão.

						);

						$this->novo->anexar($anexar);

						$this->session->set_userdata('aviso','Contrato/ATA + Anexo Criados com sucesso.');
						$this->session->set_userdata('tipo','success');

						redirect('main/redirecionar/criar-novo_Contrato_Ata');

					}

						$this->session->set_userdata('aviso','Contrato/ATA Criado com sucesso.');
						$this->session->set_userdata('tipo','success');

						redirect('main/redirecionar/criar-novo_Contrato_Ata');

			/*//////////////////////////////////////////////////////////////
			/////////////////UPLOAD DE ANEXOS///////////////////////////////
			////////////////////////////////////////////////////////////////*/

		} else {

			$this->session->set_flashdata('numerocontratoata', $this->input->post('numerocontratoata'));
			$this->session->set_flashdata('dtinivigencia', $this->input->post('dtinivigencia'));
			$this->session->set_flashdata('dtfimvigencia', $this->input->post('dtfimvigencia'));
			$this->session->set_flashdata('numanoemissorprorrogacao', $this->input->post('numanoemissorprorrogacao'));
			$this->session->set_flashdata('dtinivigenciaprorrog', $this->input->post('dtinivigenciaprorrog'));
			$this->session->set_flashdata('dtfimvigenciaprorrog', $this->input->post('dtfimvigenciaprorrog'));
			$this->session->set_flashdata('id_fornecedorprestador', $this->input->post('id_fornecedorprestador'));
			$this->session->set_flashdata('cnpj', $this->input->post('cnpj'));
			$this->session->set_flashdata('procadmin', $this->input->post('procadmin'));
			$this->session->set_flashdata('id_modalidadelicitacao', $this->input->post('id_modalidadelicitacao'));
			$this->session->set_flashdata('numerolicitacao', $this->input->post('numerolicitacao'));
			$this->session->set_flashdata('datahomologacao', $this->input->post('datahomologacao'));
			$this->session->set_flashdata('id_objetotitulo', $this->input->post('id_objetotitulo'));
			$this->session->set_flashdata('prazoentrega', $this->input->post('prazoentrega'));
			$this->session->set_flashdata('prazopagto', $this->input->post('prazopagto'));
			$this->session->set_flashdata('orgaosparticipantes', $this->input->post('orgaosparticipantes'));


			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Contrato_Ata');

		}
		
	}

public function novo_Item() {

		$this->form_validation->set_rules('codigomontadora','Código Montadora','required|is_unique[tbl_itens.codigomontadora]');
		$this->form_validation->set_rules('descricao','Descrição','required');
		$this->form_validation->set_rules('id_unidademedida','Unidade de Medida','required');

		if($this->input->post('id_grupoitens') == 'Selecione...') {$id_grupoitens = null;} else {$id_grupoitens = $this->input->post('id_grupoitens');}
		if($this->input->post('id_montadora1') == 'Selecione...') {$id_montadora1 = null;} else {$id_montadora1 = $this->input->post('id_montadora1');}
		if($this->input->post('id_montadora2') == 'Selecione...') {$id_montadora2 = null;} else {$id_montadora2 = $this->input->post('id_montadora2');}
		if($this->input->post('localizacao') == '') {$localizacao = null;} else {$localizacao = $this->input->post('localizacao');}
		if($this->input->post('id_estadoitem') == '') {$id_estadoitem = null;} else {$id_estadoitem = $this->input->post('id_estadoitem');}
		if($this->input->post('precobruto') == '') {$precobruto = null;} else {$precobruto = $this->input->post('precobruto');}
		if($this->input->post('gaveta') == '') {$gaveta = null;} else {$gaveta = $this->input->post('gaveta');}
		if($this->input->post('desconto') == '') {$desconto = 0;} else {$desconto = $this->input->post('desconto');}

		if($this->form_validation->run()){

			$dados = array (

				'codigomontadora' => $this->input->post('codigomontadora'),
				'descricao' => $this->input->post('descricao'),
				'id_unidademedida' => $this->input->post('id_unidademedida'),
				'id_grupoitens' => $id_grupoitens,
				'id_montadora1' => $id_montadora1,
				'id_montadora2' => $id_montadora2,
				'localizacao' => $localizacao,
				'id_estadoitem' => $id_estadoitem,
				'precobruto' => $precobruto,
				'gaveta' => $gaveta,
				'desconto' => $desconto,
				'estoquedisponivel' => 0,
				'id_marcaitens' => $this->input->post('id_marcaitens')

			);

			$this->novo->item_Novo($dados);

			$this->session->set_userdata('aviso','Item adicionado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Item');

		}



		$this->session->set_flashdata('codigomontadora', $this->input->post('codigomontadora'));
		$this->session->set_flashdata('descricao', $this->input->post('descricao'));
		$this->session->set_flashdata('id_unidademedida', $this->input->post('id_unidademedida'));
		$this->session->set_flashdata('id_grupoitens', $this->input->post('id_grupoitens'));
		$this->session->set_flashdata('id_montadora1', $this->input->post('id_montadora1'));
		$this->session->set_flashdata('id_montadora2', $this->input->post('id_montadora2'));
		$this->session->set_flashdata('localizacao', $this->input->post('localizacao'));
		$this->session->set_flashdata('gaveta', $this->input->post('gaveta'));
		$this->session->set_flashdata('id_estadoitem', $this->input->post('id_estadoitem'));
		$this->session->set_flashdata('precobruto', $this->input->post('precobruto'));
		$this->session->set_flashdata('desconto', $this->input->post('desconto'));

		$this->session->set_userdata('aviso',validation_errors());
		$this->session->set_userdata('tipo','danger');

		redirect('main/redirecionar/criar-novo_Item');
		
	}


public function nova_Saida_Itens() {

		$this->form_validation->set_rules('codigointerno','Item','required');
		$this->form_validation->set_rules('quantidade','Quantidade','required');
		$this->form_validation->set_rules('id_cliente','Cliente','required');
		$this->form_validation->set_rules('datasaida','Data Saída','required');

		if($this->form_validation->run()){


			if($this->input->post('ordemservico') != '') {$ordemservico = $this->input->post('ordemservico');} else {$ordemservico = null;}
			if($this->input->post('observacoes') != '') {$observacoes = $this->input->post('observacoes');} else {$observacoes = null;}

			$dados = array (

				'codigointerno' => $this->input->post('codigointerno'),
				'quantidade' => $this->input->post('quantidade'),
				'id_cliente' => $this->input->post('id_cliente'),
				'datasaida' => $this->input->post('datasaida'),
				'ordemservico' => $ordemservico,
				'observacoes' => $observacoes

			);
			//Usado para subtrair do total.
			$subtrairTotal = array (

				'id_itens' => $this->input->post('codigointerno'),
				'quantidade' => $this->input->post('quantidade'),

			);

			$this->novo->saida_Itens_Novo($dados);
			$this->edicao->saida_Itens_Novo($subtrairTotal);

			$this->session->set_userdata('aviso','Saída realizada com sucesso');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-nova_Saida_Itens');

		}

		$this->session->set_flashdata('codigointerno', $this->input->post('codigointerno'));
		$this->session->set_flashdata('quantidade', $this->input->post('quantidade'));
		$this->session->set_flashdata('id_cliente', $this->input->post('id_cliente'));
		$this->session->set_flashdata('datasaida', $this->input->post('datasaida'));
		$this->session->set_flashdata('ordemservico', $this->input->post('ordemservico'));
		$this->session->set_flashdata('observacoes', $this->input->post('observacoes'));

		$this->session->set_userdata('aviso',validation_errors());
		$this->session->set_userdata('tipo','danger');

		redirect('main/redirecionar/criar-nova_Saida_Itens');
		
	}

public function nova_Entrada_Itens() {

		$this->form_validation->set_rules('codigointerno','Item','required');
		$this->form_validation->set_rules('quantidade','Quantidade','required');
		$this->form_validation->set_rules('id_fornecedor','Fornecedor','required');
		$this->form_validation->set_rules('dataentrada','Data Entrada','required');

		if($this->form_validation->run()){


			if($this->input->post('numnotafiscal') != '') {$numnotafiscal = $this->input->post('numnotafiscal');} else {$numnotafiscal = null;}
			if($this->input->post('observacoes') != '') {$observacoes = $this->input->post('observacoes');} else {$observacoes = null;}

			$dados = array (

				'codigointerno' => $this->input->post('codigointerno'),
				'quantidade' => $this->input->post('quantidade'),
				'id_fornecedor' => $this->input->post('id_fornecedor'),
				'dataentrada' => $this->input->post('dataentrada'),
				'numnotafiscal' => $numnotafiscal,
				'observacoes' => $observacoes

			);
			//Usado para subtrair do total.
			$somaTotal = array (

				'id_itens' => $this->input->post('codigointerno'),
				'quantidade' => $this->input->post('quantidade'),

			);

			$this->novo->entrada_Itens_Novo($dados);
			$this->edicao->entrada_Itens_Novo($somaTotal);

			$this->session->set_userdata('aviso','Entrada realizada com sucesso');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-nova_Entrada_Itens');

		}

		$this->session->set_flashdata('codigointerno', $this->input->post('codigointerno'));
		$this->session->set_flashdata('quantidade', $this->input->post('quantidade'));
		$this->session->set_flashdata('id_fornecedor', $this->input->post('id_fornecedor'));
		$this->session->set_flashdata('dataentrada', $this->input->post('dataentrada'));
		$this->session->set_flashdata('numnotafiscal', $this->input->post('numnotafiscal'));
		$this->session->set_flashdata('observacoes', $this->input->post('observacoes'));

		$this->session->set_userdata('aviso',validation_errors());
		$this->session->set_userdata('tipo','danger');

		redirect('main/redirecionar/criar-nova_Entrada_Itens');
		
	}

	public function novo_Empenho() {

		$this->form_validation->set_rules('numeroempenho','Empenho','is_unique[tbl_empenho.numeroempenho]');

		if($this->form_validation->run()){

			$dados = array (

				'id_segmento' => $this->input->post('id_segmento'),
				'id_fornecedorprestador' => $this->input->post('id_fornecedorprestador'),
				'numeroempenho' => $this->input->post('numeroempenho'),
				'valorempenho' => $this->input->post('valorempenho'),
				'dtiniciovigencia' => $this->input->post('dtiniciovigencia'),
				'dtfimvigencia' => $this->input->post('dtfimvigencia'),
				'numprocadmempenho' => $this->input->post('numprocadmempenho'),
				'numcontratoata' => $this->input->post('numcontratoata'),
				'reservaorcamentaria' => $this->input->post('reservaorcamentaria'),
				'numeroficha' => $this->input->post('numeroficha'),
				'id_dotacao' => $this->input->post('id_dotacao'),
				'numprocregpreco' => $this->input->post('numprocregpreco')

			);

			$this->novo->empenho_Novo($dados);

			$this->session->set_userdata('aviso','Empenho Criado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Empenho');

		} else {

			$this->session->set_flashdata('id_segmento', $this->input->post('id_segmento'));
			$this->session->set_flashdata('id_fornecedorprestador', $this->input->post('id_fornecedorprestador'));
			$this->session->set_flashdata('numeroempenho', $this->input->post('numeroempenho'));
			$this->session->set_flashdata('valorempenho', $this->input->post('valorempenho'));
			$this->session->set_flashdata('dtiniciovigencia', $this->input->post('dtiniciovigencia'));
			$this->session->set_flashdata('dtfimvigencia', $this->input->post('dtfimvigencia'));
			$this->session->set_flashdata('numprocadmempenho', $this->input->post('numprocadmempenho'));
			$this->session->set_flashdata('numcontratoata', $this->input->post('numcontratoata'));
			$this->session->set_flashdata('reservaorcamentaria', $this->input->post('reservaorcamentaria'));
			$this->session->set_flashdata('numeroficha', $this->input->post('numeroficha'));
			$this->session->set_flashdata('id_dotacao', $this->input->post('id_dotacao'));
			$this->session->set_flashdata('numprocregpreco', $this->input->post('numprocregpreco'));

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Empenho');

		}

	}


		public function nova_Af_Pecas(){

		$this->form_validation->set_rules('ano','Ano','Required');
		$this->form_validation->set_rules('id_ordemservico','Ordem de Servico','Required');
		$this->form_validation->set_rules('id_fornecedorprestador','Fornecedor','Required');
		$this->form_validation->set_rules('id_contratoata','Contrato/Ata','Required');
		$this->form_validation->set_rules('contato','Contato','Required');
		$this->form_validation->set_rules('id_colaborador','Colaborador','Required');
		$this->form_validation->set_rules('id_colaborador2','Colaborador 2','Required');
		$this->form_validation->set_rules('observacoes','Observação','Required');
		

		if($this->form_validation->run()){

			$dados = array (

				'ano' => $this->input->post('ano'),
				'id_ordemservico' => $this->input->post('id_ordemservico'),
				'id_fornecedorprestador' => $this->input->post('id_fornecedorprestador'),
				'id_contratoata' => $this->input->post('id_contratoata'),
				'contato' => $this->input->post('contato'),
				'id_colaborador' => $this->input->post('id_colaborador'),
				'id_colaborador2' => $this->input->post('id_colaborador2'),
				'observacoes' => $this->input->post('observacoes'),
				'dataafpecas' => date("Y-m-d")

			);

			$id_retorno = $this->novo->af_Pecas_Nova($dados);

			$this->session->set_userdata('aviso','AF Criada com Sucesso!');
			$this->session->set_userdata('tipo','success');
			
			$this->session->set_userdata('idEditar',$id_retorno); /*Saber ID que está sendo editado*/
			redirect('main/redirecionar/edicoes-editar_Af_Pecas/'.$id_retorno);

		} else {



		$this->session->set_flashdata('ano', $this->input->post('ano'));
		$this->session->set_flashdata('id_ordemservico', $this->input->post('id_ordemservico'));
		$this->session->set_flashdata('id_fornecedorprestador', $this->input->post('id_fornecedorprestador'));
		$this->session->set_flashdata('id_contratoata', $this->input->post('id_contratoata'));
		$this->session->set_flashdata('contato', $this->input->post('contato'));
		$this->session->set_flashdata('id_colaborador', $this->input->post('id_colaborador'));
		$this->session->set_flashdata('id_colaborador2', $this->input->post('id_colaborador2'));
		$this->session->set_flashdata('observacoes', $this->input->post('observacoes'));
		$this->session->set_flashdata('dataafpecas', $this->input->post('dataafpecas'));

		$this->session->set_userdata('aviso',validation_errors());
		$this->session->set_userdata('tipo','danger');

		redirect('main/redirecionar/criar-nova_Af_Pecas');

		}

			
		}

		public function nova_Af_Servicos(){

		$this->form_validation->set_rules('ano','Ano','Required');
		$this->form_validation->set_rules('id_ordemservico','Ordem de Servico','Required');
		$this->form_validation->set_rules('id_fornecedorprestador','Fornecedor','Required');
		$this->form_validation->set_rules('id_contratoata','Contrato/Ata','Required');
		$this->form_validation->set_rules('contato','Contato','Required');
		$this->form_validation->set_rules('orcamento','Orçamento','Required');
		$this->form_validation->set_rules('id_colaborador','Colaborador','Required');
		$this->form_validation->set_rules('id_colaborador2','Colaborador 2','Required');
		$this->form_validation->set_rules('observacoes','Observação','Required');

		if($this->form_validation->run()){

			$dados = array (

				'ano' => $this->input->post('ano'),
				'id_ordemservico' => $this->input->post('id_ordemservico'),
				'id_fornecedor' => $this->input->post('id_fornecedorprestador'),
				'id_contratoata' => $this->input->post('id_contratoata'),
				'contato' => $this->input->post('contato'),
				'orcamento' => $this->input->post('orcamento'),
				'id_colaborador' => $this->input->post('id_colaborador'),
				'id_colaborador2' => $this->input->post('id_colaborador2'),
				'observacoes' => $this->input->post('observacoes'),
				'dataafservicos' => date('Y-m-d')

			);

			$id_retorno = $this->novo->af_Servicos_Nova($dados);

			$this->session->set_userdata('aviso','AF Criada com Sucesso!');
			$this->session->set_userdata('tipo','success');
			
			$this->session->set_userdata('idEditar',$id_retorno); /*Saber ID que está sendo editado*/
			redirect('main/redirecionar/edicoes-editar_Af_Servicos/'.$id_retorno);

		} else {



		$this->session->set_flashdata('ano', $this->input->post('ano'));
		$this->session->set_flashdata('id_ordemservico', $this->input->post('id_ordemservico'));
		$this->session->set_flashdata('id_fornecedorprestador', $this->input->post('id_fornecedorprestador'));
		$this->session->set_flashdata('id_contratoata', $this->input->post('id_contratoata'));
		$this->session->set_flashdata('contato', $this->input->post('contato'));
		$this->session->set_flashdata('orcamento', $this->input->post('orcamento'));
		$this->session->set_flashdata('id_colaborador', $this->input->post('id_colaborador'));
		$this->session->set_flashdata('id_colaborador2', $this->input->post('id_colaborador2'));
		$this->session->set_flashdata('observacoes', $this->input->post('observacoes'));

		$this->session->set_userdata('aviso',validation_errors());
		$this->session->set_userdata('tipo','danger');

		redirect('main/redirecionar/criar-nova_Af_Pecas');

		}

			
		}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */