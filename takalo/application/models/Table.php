<?php
	
	class Table extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function maka(){
			$qq = $this->db->get('Objet');
			return $qq->result();
		}
	}
?>