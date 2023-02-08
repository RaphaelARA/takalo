<?php
	class Admin_controller extends CI_Controller{

		public function les_user(){
			$this->load->helper('url');
			$this->load->model('Admin');
			$data['users']= $this->Admin->Les_inscrits();
			$this->load->view('contact',$data);
		}


			public function les_echange(){
			$this->load->helper('url');
			$this->load->model('Admin');
			$d['exc']= $this->Admin->echanges();
			$this->load->view('contact',$d);
		}
	}
?>