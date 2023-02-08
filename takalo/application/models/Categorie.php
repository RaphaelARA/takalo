<?php
	class Categorie extends CI_Model{

		public function categorie(){
			$cat = $this->db->get('categorie');
			return $cat->result();
		}
	}
?>