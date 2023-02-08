<?php
	class Recherche_controller extends CI_Controller{

		public function search(){
			$this->load->helper('url');
			$mot = $this->input->post('mot');
			$categ = $this->input->post('categ');
			$this->load->model('Recherche');
			$data['rech'] = $this->Recherche->searches($categ,$mot);
			$this->load->view('Search',$data);
		}
	}
?>