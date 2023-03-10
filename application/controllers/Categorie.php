<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('categorie_model');
		$this->load->model('objet_model');
	}

	public function index() {
		$data = array();
		$data['categories'] = $this->categorie_model->get_categorie();
		$data['objet'] = ($this->input->get('categories') == null) ? $this->objet_model->getObjetbyidCategories(1) : $this->objet_model->getObjetbyidCategories($this->input->get('categories'));
		
		$this->load->view('category', $data);
	}

	public function categoriser() {
		$data = array();
		$data['objet'] = $this->objet_model->get_by_id($this->input->get('id'));
		$data['categories'] = $this->categorie_model->get_categorie();
		
		$this->load->view('categorisation', $data);
	}

	public function update() {
		$this->objet_model->modif_categorie($this->input->post('categorie'), $this->input->post('objet'));
		redirect(base_url('index.php/categorie'));
	}
}
