<?php
	class Categorie_controller extends CI_Controller{

		public function makacateg(){
			$this->load->helper('url');
			$this->load->model('Categorie');
			$data['cat'] = $this->Categorie->categorie();
			$this->load->model('Table');
			$data['obj'] = $this->Table->maka();

			$this->load->view('accueil',$data);
			// $rr = $this->Categorie->categorie();
			// var_dump($rr);
		}

				public function makacateg1(){
			$this->load->helper('url');
			$this->load->model('Categorie');
			$data['cat'] = $this->Categorie->categorie();
			$this->load->model('Admin');
			$data['users']= $this->Admin->Les_inscrits();
			$data['exc']= $this->Admin->echanges();
			$this->load->view('contact',$data);
			// $rr = $this->Categorie->categorie();
			// var_dump($rr);
		}

			public function makacateg2(){
			$this->load->helper('url');
			$this->load->model('Categorie');
			$data['cat'] = $this->Categorie->categorie();
			$mot = $this->input->post('mot');
			$categ = $this->input->post('categ');
			$this->load->model('Recherche');
			$data['rech']= $this->Recherche->searches($categ,$mot);
			$this->load->view('Search',$data);
			// $rr = $this->Categorie->categorie();
			// var_dump($rr);
		}

			public function echangee(){
			$this->load->helper('url');
			$this->load->model('Categorie');
			$data['cat'] = $this->Categorie->categorie();
			$mot = $this->input->post('mot');
			$categ = $this->input->post('categ');
			$this->load->model('Recherche');
			$data['rech']= $this->Recherche->searches($categ,$mot);
			$this->load->view('Search',$data);
			// $rr = $this->Categorie->categorie();
			// var_dump($rr);
		}


	}
?>