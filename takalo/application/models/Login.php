<?php
	class Connexion extends CI_Model(){

		public function index(){
			$nom = $this->session->set_userdata('nom','mail','mot de passe');
			if ($nom == false) {
				$echo "falseeeee";
			}
		}

		public function connect(){
			$this->form_validation->set_rules('nom','mail','mot de passe');

			if ($this->form_validation->run()) {
				if (isset()) {
					// code...
				$this->load->view('view');

				}

			}
		}
	}
?>