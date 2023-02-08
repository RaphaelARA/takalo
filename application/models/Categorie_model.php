<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_model extends CI_Model {

/// Fonction pour lister les catégories
    public function get_categorie() {
        $query = $this->db->query('SELECT * FROM categories'); 
        return $query->result_array();
    }

/// Fonction pour chercher une catégorie à partir de son id
    public function get_by_id($id) {
        $sql='SELECT * FROM categories WHERE idCategories = %d';
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql); 
        return $query->result_array();
    }

/// Fonction pour créer une nouvelle catégorie
    public function new_categorie($nom){
        $sql='INSERT INTO categories(nom) VALUES (%s)';
        $sql = sprintf($sql, $this->db->escape($nom));
        $query = $this->db->query($sql); 
    }

/// Fonction pour retirer une catégorie
    public function delete($nom){
        $sql='DELETE FROM categories WHERE nom = %s';
        $sql = sprintf($sql, $this->db->escape($nom));
        $query = $this->db->query($sql); 
    }
}
?>