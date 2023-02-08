<?php
	
	class User extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function makauser(){
			$qq = $this->db->get('users');
			return $qq->result();
		}


		public function manisauser(){
			$query = this->db->query('select COUNT(idUser) from users');

			foreach($query->result_array() as $row){
				echo $row['COUNT(idUser)'];
			}
			
		}
	}
?>