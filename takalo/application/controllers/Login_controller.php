<?php
	class Login_controller extends CI_Controller{

		public function connecter(){
			$mail = $this->input->post('mail');
			$mdp = $this->input->post('mdp');
			$this->load->model('Login_model');
			$res = $this->Login_model->checklogin($mail,$mdp);
			if ($res == true) {
				$this->load->helper('url');
				$this->load->view('accueil');
			}
			else{
				$this->load->helper('url');
				$this->load->view('Login');
			}
		}
	}
?>