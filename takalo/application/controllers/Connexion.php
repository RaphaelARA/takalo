<?php

	class Connexion extends CI_Controller{
		public function login(){
			echo $this->input->post('name');

		}

		public function loaddd(){
			$this->load->view('accueil');

		}

		public function makaaa(){
			$this->load->helper('url');
			
			$this->load->model('Table');
			$data['anarana'] = $this->Table->maka();
				$this->load->view('accueil',$data);
		}

	}
?>