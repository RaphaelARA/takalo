<?php
	class Inscri extends CI_Model{

		public function checkInscri($nom,$mail,$mdp){
			$sql = "insert into utilisateur values (null,%s,%s,%s,0)";
			$sql = sprintf($sql,$this->db->escape($nom),$this->db->escape($mail),$this->db->escape($mdp));
			echo $sql;
			$this->db->query($sql);
		}
	}
?>