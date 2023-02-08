<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    
    public function countUser(){
        $isany=0;
        $query = $this->db->query('SELECT count(*) nbUtilisateurs FROM utilisateurs'); 
        $array = $query->row_array();
        for ($i = 0; $i < count($array); $i++) {
            $isany+=1;
        }
        return $isany;
    }
/// Fonction pour lister tous les users
    public function get_users() {
        $query = $this->db->query('SELECT * FROM user'); 
        return $query->result_array();
    }

/// Fonction pour verifier un compte par son email et son mot de passe
    public function check_user($email = '', $mdp='') {
        $sql = 'SELECT * FROM utilisateurs WHERE email = %s AND mdp = %s';
        $sql = sprintf($sql, $this->db->escape($email), $this->db->escape($mdp));
        $query = $this->db->query($sql);
        return $query->result_array();;
    }
    
/// Fonction pour verifier si le compte est un administrateur
    public function check_admin($email = '', $mdp='') {
        $sql = 'SELECT * FROM utilisateurs WHERE email = %s AND mdp = %s AND isAdmin= %d';
        $sql = sprintf($sql, $this->db->escape($email), $this->db->escape($mdp), 10);
        $query = $this->db->query($sql);
        return $query->result_array();
    }

/// Fonction s'inscrire sur le site
    public function sign_up($nom='', $prenom='', $email = '', $mdp='') {
        $sql = 'INSERT INTO user(nom, prenom, email, mdp, isAdmin) VALUES (%s, %s, %s, %s, 0)';
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($prenom), $this->db->escape($email), $this->db->escape($mdp));
        $query = $this->db->query($sql);
    }

/// Fonction pour obtenir le nombre d'utilisateurs inscrits
    public function get_count() {
        $sql='SELECT count(*) nb_user FROM user';
        $query = $this->db->query($sql); 
        return $query->result_array();
    }
}
?>

