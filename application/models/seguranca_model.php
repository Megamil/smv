<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Seguranca_model extends CI_Model {

		public function alterarSenha($senha = null)
		{ /*Valida senha atual e altera caso esteja correta.*/		

			if($this->db->get_where('usuarios',$dados = array ('usuario' => $this->session->userdata('usuario'),'senha' => $senha['senhaAtual']))->num_rows() == 1) {

				$this->db->where('usuario',$this->session->userdata('usuario'));
				$this->db->update('usuarios',$pass = array ('senha' => $senha['senha']));

				return true;

			} else {

				return false;
			
			}


		}

		public function existeAplicacao($aplicacao = null) { /*Valida o acesso a uma aplicação existente*/

			if($this->db->get_where('aplicacoes',array('nome_aplicacao' => $aplicacao))->num_rows() > 0) {
				return true;
			} else {
				return false;
			}

		}

		public function aplicacaoAcessoNegado($aplicacao = null) { //Retorna a descrição da aplicação para aparecer quando o usuário tiver seu acesso negado.

			return $this->db->get_where('aplicacoes',array ('nome_aplicacao' => $aplicacao))->row();

		}

		public function apagarGrupo($id_grupo = null){ /*Deleta um grupo*/

			$this->db->where('fk_grupo',$id_grupo); /*Apaga os vínculos com as aplicações*/
			$this->db->delete('grupo_aplicacoes');
			
			$this->db->where('fk_grupo',$id_grupo); /*Apaga os vínculos com os usuários*/
			$this->db->delete('grupo_usuarios');

			return $this->db->delete('grupos', array ('id_grupo' => $id_grupo));

		}

		public function atiInaUsuario($id_usuario = null,$ativo = null){ /*Altera o Status do usuário, ativando ou inativando*/

			if($ativo == 't') {

				return $this->db->query('update usuarios set ativo = \'f\' where usuario = \''.$this->uri->segment(4).'\'');

			} else {

				return $this->db->query('update usuarios set ativo = \'t\' where usuario = \''.$this->uri->segment(4).'\'');

			}

		}

		public function validarAcesso($aplicacao = null){/*Valida se o usuário pertence a um grupo com permissão a esta tela*/

			$validar = $this->db->query('select U.usuario
			from usuarios U inner join grupo_usuarios GU on U.id_usuario = GU.fk_usuario
			inner join grupo_aplicacoes GA on GA.fk_grupo = GU.fk_grupo
			inner join aplicacoes A on A.id_aplicacao = GA.fk_aplicacao
			where A.nome_aplicacao = \''.$aplicacao.'\'
			and U.usuario = \''.$this->session->userdata('usuario').'\';');

			if($validar->num_rows() == 0) { /*Se o usuário não tiver permissão*/

				return	false;

			} else { /*Se o usuário tiver permissão*/

				return true;
			
			}

		}

		public function incluirUsuario($dados = null) { /*Cria um novo usuário*/

				return $this->db->insert('usuarios',$dados);	

		}

		public function editarUsuario($dados = null,$usuarioAnterior = null) {

			$this->db->where('usuario',$usuarioAnterior);
			return $this->db->update('usuarios',$dados);

		}

		public function incluirGrupo($formulario = null) { /*Criar um novo grupo*/

			return $this->db->insert('grupos',$formulario);	

		}

		public function editarGrupo($dados = null)  {

			$this->db->where('id_grupo',$dados['id_grupo']);
			return $this->db->update('grupos',$dados);

		}

		public function addAoGrupo($dados = null){ /*Adiciona usuário ao grupo*/

			return $this->db->insert('grupo_usuarios',$dados);

		}

		public function remDoGrupo($dados = null){ /*Remove usuário do grupo*/
			
			$this->db->where('fk_usuario',$dados['fk_usuario']);
			$this->db->where('fk_grupo',$dados['fk_grupo']);
			return $this->db->delete('grupo_usuarios',$dados);

		}

		public function addAppAoGrupo($dados = null){ /*Adiciona aplicação ao grupo*/

			return $this->db->insert('grupo_aplicacoes',$dados);

		}

		public function remAppDoGrupo($dados = null){ /*Remove aplicação do grupo*/
			
			$this->db->where('fk_aplicacao',$dados['fk_aplicacao']);
			$this->db->where('fk_grupo',$dados['fk_grupo']);
			return $this->db->delete('grupo_aplicacoes',$dados);

		}

	}

?>