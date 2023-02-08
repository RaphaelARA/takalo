<?php
	class Admin extends CI_Model{

		public function les_inscrits(){
			$query = "select COUNT(idUtilisateur) from utilisateur";
			$queryy = $this->db->query($query);
			$row =$queryy->row_array();
			return $row['COUNT(idUtilisateur)'];
		}

		public function echanges(){
			$echanges = "select COUNT(idDemande) from mety";
			$ex = $this->db->query($echanges);
			$r =$ex->row_array();
			return $r['COUNT(idDemande)'];
		}



	}
?>