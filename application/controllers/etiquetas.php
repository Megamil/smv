<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Etiquetas extends CI_Controller {

	public function configurar_etiqueta(){

		$config = array('me'=>$this->input->post('margemesquerda'),'md'=>$this->input->post('margemdireita'),
			'ms'=>$this->input->post('margemsuperior'),'le'=>$this->input->post('largura'),
			'ae'=>$this->input->post('altura'),'ee'=>$this->input->post('espacoetiqueta'),
			'fonte'=>$this->input->post('fonte'),'tamanhofonte'=>$this->input->post('tamanhofonte'),
			'papel'=>$this->input->post('papel'),
			'sql' => $this->dados_iniciais_model->impresso_Etiquetas()
			);


		$this->load->view('../../fpdf/etiquetas/pdf_impresso_Etiqueta',$config);



	}
}