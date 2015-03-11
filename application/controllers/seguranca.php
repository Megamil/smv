<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('validacao','/[^a-zA-Z0-9]/'); /*Usado para validar o Nome do usuário e do Grupo*/

class Seguranca extends CI_Controller {

	public function senha() { /*Alterar a senha*/

		/*Valida se o campo foi preenchido e se é igual ao outro e se todos foram preenchidos*/
		$this->form_validation->set_rules('senhaAtual', 'senhaAtual', 'required');
		$this->form_validation->set_rules("senha", "Nova Senha", "required|matches[senha2]");
		$this->form_validation->set_rules('senha2', 'Confirme a nova Senha', 'required');

		if($this->form_validation->run()) { /*Caso não existam erros ele grava*/

			$senha = array (

				'senhaAtual' => md5($this->input->post('senhaAtual')),
				'senha' => md5($this->input->post('senha'))

			);

			if($this->seguranca_model->alterarSenha($senha)) {
			
				/*Aviso para o header em caso de sucesso*/
				$this->session->set_userdata('aviso','Senha alterada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/seguranca-alterar_Senha');

			} else {

				/*Aviso para o header em caso de erro ao verificar senha atual*/
				$this->session->set_userdata('aviso','Senha atual não confere!');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/seguranca-alterar_Senha');

			 }


		} else {/*Em caso de erros nos campos*/

			/*Aviso para o header em caso de erro com os campos de senha*/
			$this->session->set_userdata('aviso',validation_errors()); /*Exibir erro campo a campo*/
			$this->session->set_userdata('tipo','danger');
			redirect('main/redirecionar/seguranca-alterar_Senha');

		}

	}

	public function novoUsuario() { /*Criar usuário*/

	if($this->input->post('email') == '') {
		
			$email = null;
		
		} else {
			
			$email = $this->input->post('email');
		
	}
	/*Previne erro ao inserir '' no banco de dados*/

	if($this->input->post('telefone') == '') { 
		
			$telefone = null;
		
		} else {
			
			$telefone = $this->input->post('telefone');

			$telefone = str_replace("(", '',$telefone);
			$telefone = str_replace(")", '',$telefone);
			$telefone = str_replace("-", '',$telefone);

	}
	/*Previne erro ao inserir '' no banco de dados*/

		$formulario = array (

				'usuario' => $this->input->post('usuario'),
				'nome' => $this->input->post('nome'),
				'email' => $email,
				'telefone' => $telefone,
				'senha' => md5($this->input->post('senha')),
				'ativo' => 't'

			);

		$this->session->set_flashdata($formulario); //Copia os campos preenchidos para em caso de erro não serem perdidos!

		if(preg_match(validacao,$this->input->post('usuario')) == TRUE) //Valida as restrições de caracteres especiais.
	{
		$this->session->set_userdata('aviso','Caracteres não permitidos no campo Usuário. Não use caracteres especiais, por exemplo a tecla espaço ou acentuação.');
		$this->session->set_userdata('tipo','danger');
		$this->session->set_flashdata('usuario',null); /*Para não trazer o nome errado no campo*/
		redirect('main/redirecionar/seguranca-novo_Usuario');
	}
	
	$this->form_validation->set_rules('usuario', 'usuario', 'required|is_unique[usuarios.usuario]');
	$this->form_validation->set_rules('nome', 'nome', 'required');
	$this->form_validation->set_rules('email', 'email', 'is_unique[usuarios.email]');
	$this->form_validation->set_rules('senha', 'senha', 'required');

	if ($this->form_validation->run()) { /*validações dos campo*/

		$this->seguranca_model->incluirUsuario($formulario);

		$this->session->set_userdata('aviso','Usuário: "'.$formulario['usuario'].'", Adicionado com sucesso.');
		$this->session->set_userdata('tipo','success');

		$this->session->set_userdata('usuarioASerEditado',$this->input->post('usuario')); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/seguranca-editar_Usuario'); /*Redirecionar para adicionar grupo (Editar usuário)*/

		} else { /*Em caso de erros nos campos*/

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');
			redirect('main/redirecionar/seguranca-novo_Usuario');

		}
		
	}

	public function editarUsuario() { /*Link de editar usuário na tela de usuários*/

		$this->session->set_userdata('usuarioASerEditado',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/seguranca-editar_Usuario'); /*Redirecionar para adicionar grupo (Editar usuário)*/

	}

	public function salvarAlteracoesUsuarios() {

	$this->form_validation->set_rules('nome', 'Nome', 'required');

	/*Garante que, se for alterado, o campo ainda seja único no banco*/
	if($this->input->post('email') != $this->input->post('emailAnterior')) {

		$this->form_validation->set_rules('email', 'E-mail', 'is_unique[usuarios.email]');

	} 

	/*Garante que, se for alterado, o campo ainda seja único no banco*/
	if($this->input->post('usuario') != $this->input->post('usuarioAnterior')) {

		$this->form_validation->set_rules('usuario', 'Usuario', 'is_unique[usuarios.usuario]');

	} else {

		$this->form_validation->set_rules('usuario', 'Usuario', 'required');

	}
	

	if(preg_match(validacao,$this->input->post('usuario')) == TRUE) //Valida as restrições de caracteres especiais.
	{
		$this->session->set_userdata('aviso','Caracteres não permitidos no campo Usuário. Não use caracteres especiais, por exemplo a tecla espaço ou acentuação.');
		$this->session->set_userdata('tipo','danger');
		$this->session->set_userdata('usuarioASerEditado',$this->input->post('usuarioAnterior')); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/seguranca-editar_Usuario');
	}

	if ($this->form_validation->run()) { /*validações dos campo*/

		if($this->input->post('email') == '') {
		
			$email = null;
		
		} else {
			
			$email = $this->input->post('email');
		
	}
	/*Previne erro ao inserir '' no banco de dados*/

	if($this->input->post('telefone') == '') { 
		
			$telefone = null;
		
		} else {
			
			$telefone = $this->input->post('telefone');

			$telefone = str_replace("(", '',$telefone);
			$telefone = str_replace(")", '',$telefone);
			$telefone = str_replace("-", '',$telefone);
		
	}

	if($this->input->post('senha') == '') { /*para não alterar a senha quando o usuário não escrever no campo*/

		$formulario = array (

			'id_usuario' => $this->input->post('id_usuario'),
			'usuario' => $this->input->post('usuario'),
			'nome' => $this->input->post('nome'),
			'email' => $email,
			'telefone' => $telefone,

		);

	} else { /*Previne erro ao inserir '' no banco de dados*/

		$formulario = array (

			'id_usuario' => $this->input->post('id_usuario'),
			'usuario' => $this->input->post('usuario'),
			'nome' => $this->input->post('nome'),
			'email' => $email,
			'telefone' => $telefone,
			'senha' => md5($this->input->post('senha'))

		);

	}

			if($this->input->post('usuarioAnterior') == $this->session->userdata('usuario')) {

				/*Caso seja alterado, o usuário logado, deverá ser atualizado*/
				$this->session->set_userdata('usuario',$dados['usuario']); 

			}

		if ($this->seguranca_model->editarUsuario($formulario,$this->input->post('usuarioAnterior'))) {
				
				$this->session->set_userdata('aviso','Update realizado com sucesso');
				$this->session->set_userdata('tipo','success');
				$this->session->set_userdata('usuarioASerEditado',$this->input->post('usuario')); /*Saber ID que está sendo editado*/
				redirect('main/redirecionar/seguranca-editar_Usuario'); 
			
			} else { /*Em caso de erros no momento do update*/

				$this->session->set_userdata('usuarioASerEditado',$this->input->post('usuarioAnterior')); /*Saber ID que está sendo editado*/
				redirect('main/redirecionar/seguranca-editar_Usuario'); 
			}

		} else { /*Em caso de erros nos campos*/

		$this->session->set_userdata('aviso',validation_errors());
		$this->session->set_userdata('tipo','danger');
		$this->session->set_userdata('usuarioASerEditado',$this->input->post('usuarioAnterior')); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/seguranca-editar_Usuario');

		}

	}

	public function ativarInativarUsuario() { /*Ativa ou inativa usuário*/

		if ($this->uri->segment(5) == 't') { /*Define aviso que irá aparecer, caso ele esta sendo inativado*/
			
			$this->session->set_userdata('aviso','Usuário: '.$this->uri->segment(4).' inativado com sucesso!');
			$this->session->set_userdata('tipo','success');

		} else { /*Define aviso que irá aparecer, caso ele esta sendo ativado*/

			$this->session->set_userdata('aviso','Usuário: '.$this->uri->segment(4).' ativado com sucesso!');
			$this->session->set_userdata('tipo','success');

		}

		$this->seguranca_model->atiInaUsuario($this->uri->segment(3),$this->uri->segment(5));
		redirect('main/redirecionar/seguranca-usuarios');

	}

	public function deletarGrupo() { /*Apagar grupo*/

		$this->session->set_userdata('aviso','Grupo: '.$this->uri->segment(4).' deletado com sucesso!');
		$this->session->set_userdata('tipo','success');

		$this->seguranca_model->apagarGrupo($this->uri->segment(3));
		redirect('main/redirecionar/seguranca-grupos');

	}

	public function novoGrupo() { /*Adicionar um novo grupo*/

		$this->form_validation->set_rules('nome_grupo','Nome do grupo','required|is_unique[grupos.nome_grupo]');
		$this->form_validation->set_rules('descricao_grupo','Descrição do grupo','required');

		if(preg_match(validacao,$this->input->post('nome_grupo')) == TRUE) //Valida as restrições de caracteres especiais.
		{
			$this->session->set_userdata('aviso','Caracteres não permitidos no campo Nome do Grupo. Não use caracteres especiais, por exemplo a tecla espaço ou acentuação.');
			$this->session->set_userdata('tipo','danger');
			$this->session->set_flashdata('descricao_grupo',$this->input->post('descricao_grupo'));
			redirect('main/redirecionar/seguranca-novo_Grupo');
		}

		$formulario = array (

			'nome_grupo' => $this->input->post('nome_grupo'),
			'descricao_grupo' => $this->input->post('descricao_grupo')

			);

		$this->session->set_flashdata($formulario); //Copia os campos preenchidos para em caso de erro não serem perdidos!

		if ($this->form_validation->run()) {

			$this->session->set_userdata('aviso','Grupo: "'.$formulario['nome_grupo'].'", Adicionado com sucesso.');
			$this->session->set_userdata('tipo','success');

			$this->seguranca_model->incluirGrupo($formulario);
			$this->session->set_userdata('grupoASerEditado',$this->input->post('nome_grupo')); /*Saber ID que está sendo editado*/
			redirect('main/redirecionar/seguranca-editar_Grupo');
			
		} else { /*Em caso de erros nos campos*/

		$this->session->set_userdata('aviso',validation_errors());
		$this->session->set_userdata('tipo','danger');
		redirect('main/redirecionar/seguranca-novo_Grupo');

		}

	}

	public function editarGrupo() {

		$this->session->set_userdata('grupoASerEditado',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/seguranca-editar_Grupo'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function salvarAlteracoesGrupos(){

		/*Garante que, se for alterado, o campo ainda seja único no banco*/
		if($this->input->post('nome_grupo') != $this->input->post('grupoAnterior')) {
		
			$this->form_validation->set_rules('nome_grupo','Nome do grupo','required|is_unique[grupos.nome_grupo]');	
		
		} else {

			$this->form_validation->set_rules('nome_grupo','Nome do grupo','required');
		}
		
		$this->form_validation->set_rules('descricao_grupo','Descrição do grupo','required');

		$formulario = array (

			'id_grupo' => $this->input->post('id_grupo'),
			'nome_grupo' => $this->input->post('nome_grupo'),
			'descricao_grupo' => $this->input->post('descricao_grupo')

			);

		if(preg_match(validacao,$this->input->post('nome_grupo')) == TRUE) { //Valida as restrições de caracteres especiais.

		$this->session->set_userdata('aviso','Caracteres não permitidos no campo Nome do Grupo. Não use caracteres especiais, por exemplo a tecla espaço ou acentuação.');
		$this->session->set_userdata('tipo','danger');
		$this->session->set_userdata('grupoASerEditado',$this->input->post('grupoAnterior')); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/seguranca-editar_Grupo');

		}

		if ($this->form_validation->run()) {

			if ($this->seguranca_model->editarGrupo($formulario)) {

				$this->session->set_userdata('aviso','Update realizado com sucesso');
				$this->session->set_userdata('tipo','success');
				$this->session->set_userdata('grupoASerEditado',$this->input->post('nome_grupo')); /*Saber ID que está sendo editado*/
				redirect('main/redirecionar/seguranca-editar_Grupo'); 

				
			} else { /*Em caso de erros no momento do update*/

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');
		
			$this->session->set_userdata('grupoASerEditado',$this->input->post('grupoAnterior')); /*Saber ID que está sendo editado*/
			redirect('main/redirecionar/seguranca-editar_Grupo');

			}


		} else { /*Em caso de erros nos campos*/

		$this->session->set_userdata('aviso',validation_errors());
		$this->session->set_userdata('tipo','danger');
		$this->session->set_userdata('grupoASerEditado',$this->input->post('grupoAnterior')); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/seguranca-editar_Grupo');

		}

	}

	public function adicionarAoGrupo(){

		$this->session->set_userdata('aviso','Adicionado ao grupo: '.$this->uri->segment(5).' com sucesso.');
		$this->session->set_userdata('tipo','success');
		$this->session->set_userdata('usuarioASerEditado',$this->uri->segment(6)); /*Saber ID que está sendo editado*/

		$dados = array (

			'fk_usuario' => $this->uri->segment(3),
			'fk_grupo' => $this->uri->segment(4)

			);

		$this->seguranca_model->addAoGrupo($dados);
		
		redirect('main/redirecionar/seguranca-editar_Usuario'); 
	}

	/*LEGENDA PARA SEGMENT DAS FUNÇÕES: REMOVER DO GRUPO E ADICIONAR AO GRUPO
	3 = NÚMERO DO USUÁRIO, USADO PARA ADICIONAR/REMOVER A TABELA DE RELACIONAMENTO
	4 = NÚMERO DO GRUPO, USADO PARA ADICIONAR/REMOVER A TABELA DE RELACIONAMENTO
	5 = NOME DO GRUPO, USADO PARA EXIBIR MENSAGEM PÓS INSERT OU DELETE
	6 = NOME DO USUÁRIO, USADO PARA QUANDO FOR RECARREGAR A TELA SABER QUAL USUÁRIO ERA.*/

	public function removerDoGrupo(){

		$this->session->set_userdata('aviso','Removido do grupo: '.$this->uri->segment(5).' com sucesso.');
		$this->session->set_userdata('tipo','success');
		$this->session->set_userdata('usuarioASerEditado',$this->uri->segment(6)); /*Saber ID que está sendo editado*/

		$dados = array (

			'fk_usuario' => $this->uri->segment(3),
			'fk_grupo' => $this->uri->segment(4)

			);

		$this->seguranca_model->remDoGrupo($dados);
		redirect('main/redirecionar/seguranca-editar_Usuario'); 
		
	}

	public function adicionarAppAoGrupo(){

		$renomeado = str_replace("_", " ", $this->uri->segment(6)); /*Tirar os _ dos nomes e insere espaço*/

		$this->session->set_userdata('aviso','Aplicação: '.ucfirst($renomeado).' adicionada ao grupo com sucesso.');
		$this->session->set_userdata('tipo','success');
		$this->session->set_userdata('grupoASerEditado',$this->uri->segment(5)); /*Saber ID que está sendo editado*/

		$dados = array (

			'fk_aplicacao' => $this->uri->segment(3),
			'fk_grupo' => $this->uri->segment(4)

			);

		$this->seguranca_model->addAppAoGrupo($dados);
		
		redirect('main/redirecionar/seguranca-editar_Grupo'); 
	}

	/*LEGENDA PARA SEGMENT DAS FUNÇÕES: REMOVER DO GRUPO E ADICIONAR AO GRUPO
	3 = NÚMERO DA APLICAÇÃO, USADO PARA ADICIONAR/REMOVER A TABELA DE RELACIONAMENTO
	4 = NÚMERO DO GRUPO, USADO PARA ADICIONAR/REMOVER A TABELA DE RELACIONAMENTO
	5 = NOME DO GRUPO, USADO PARA EXIBIR MENSAGEM PÓS INSERT OU DELETE
	6 = NOME DA APLICAÇÃO, USADO PARA QUANDO FOR RECARREGAR A TELA SABER QUAL APLICAÇÃO ERA.*/

	public function removerAppDoGrupo(){
			
		$renomeado = str_replace("_", " ", $this->uri->segment(6)); /*Tirar os _ dos nomes e insere espaço*/

		$this->session->set_userdata('aviso','Aplicação: '.ucfirst($renomeado).' removida do grupo com sucesso.');
		$this->session->set_userdata('tipo','success');
		$this->session->set_userdata('grupoASerEditado',$this->uri->segment(5)); /*Saber ID que está sendo editado*/

		$dados = array (

			'fk_aplicacao' => $this->uri->segment(3),
			'fk_grupo' => $this->uri->segment(4)

			);

		$this->seguranca_model->remAppDoGrupo($dados);
		redirect('main/redirecionar/seguranca-editar_Grupo'); 
		
	}

	public function deslogar() {

		$this->session->sess_destroy();
		redirect('main/index','refresh');

	}

}