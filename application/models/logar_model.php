<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logar_model extends CI_Model {


	public function validar($login = null)
	{

		$this->db->where('usuario',$login['usuario']);
		$this->db->where('senha',$login['senha']);
		$this->db->where('ativo','t');
		$ativo = $this->db->get('usuarios');

		if($ativo->num_rows() == 1) { /*Se existir um usuário com essa senha*/

			return true;

		} else {

			return false;

		}

	}

}

?>