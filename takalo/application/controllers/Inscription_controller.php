<?php
	
	class Inscription_controller extends CI_Controller{

		PUBLIC function index(){
			$this->load->helper('url');
			$this->load->view('Inscription');
		}
		public function add_user(){
				$this->load->helper('url');
			$nom = $this->input->get('nom');
			$mail = $this->input->get('mail');
			$mdp = $this->input->get('mdp');
			$this->load->model('Inscri');
			$this->Inscri->checkInscri($nom,$mail,$mdp);
			$this->load->view('Login');
		}


				public function connecter(){
				
			$mail = $this->input->post('mail');
			$mdp = $this->input->post('mdp');
			$this->load->model('Login_model');
			$res = $this->Login_model->checklogin($mail,$mdp);
			if ($res == true) {
				$this->load->helper('url');
				$this->load->view('Login');
				
			}
			else{
				$this->load->helper('url');
				$this->load->view('accueil');
			
			}
		}
	}
?>