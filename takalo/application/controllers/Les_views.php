<?php
	class Les_views extends CI_Controller{

		public function acc(){
			$this->load->helper('url');
			$this->load->view('accueil');
		}


		public function contact(){
			$this->load->helper('url');
			$this->load->view('contact');
		}


		public function about(){
			$this->load->helper('url');
			$this->load->view('about');
		}
	}
?>