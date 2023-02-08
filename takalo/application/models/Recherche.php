<?php
	class Recherche extends CI_Model{

		public function searches($categorie,$moC){
			$query = "select descriptions,prix from objet where descriptions like '%".$this->db->escape_like_str($moC)."%' and idCategorie=".$this->db->escape($categorie)."";
			$query = $this->db->query($query);
			$result = array();
			foreach($query->result_array() as $row){
				$result[]=$row;
			}
			return $result;

		}
	}
?>