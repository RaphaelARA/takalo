<?php
	class Login_model extends CI_Model{

		public function checklogin($mail,$mdp){
			$valeur = true;
			$query = $this->db->query('select * from utilisateur');
			$data = array();
			foreach($query->result_array() as $row){
				if($row['email'] == $mail && $row['mdp' == $mdp]){
					$user = $this->session->set_userdata('idUser',$row['idUtilisateur']);
					$valeur =true;
				}
				else{
					$valeur= false;
				}
				return $valeur;
			}
		}


		public function admin(){
			$select = $this->db->query("select * from administrateur");
			$result =$select ->row_array();
			return $result;
		}
	}
?>