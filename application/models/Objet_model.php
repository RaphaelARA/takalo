<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Objet_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('objet_model');
    }

/// Fonction pour lister tous les objets
    public function getObjet() {
        $query = $this->db->query('SELECT * FROM objet'); 
        $array = $query->row_array();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['photo'] = $this->objet_model->getPhotoObjet($array[$i]['idObjet']);
        }
        return $array;
    }

/// Fonction pour obtenir un objet par son id
    public function get_by_id($id) {
        $sql='SELECT o.*, u.nom as utilisateurs FROM objet o JOIN utilisateurs u ON o.idUtilisateurs=u.idUtilisateurs WHERE o.idUtilisateurs = %d';
        $sql = sprintf($sql, $this->db->escape($id));
        echo $sql;
        $query = $this->db->query($sql);
        $objet = $query->row_array();
        $object=array();
        $object['photo'] =$this->getPhotoObjet($objet['idObjet']);

        return $object;
    }

/// Fonction pour obtenir les photos d'un objet par son id
    public function get_photo() {
        $sql='SELECT * FROM photo p JOIN objet o ON p.idObjet=o.idObjet';
        $query = $this->db->query($sql); 
        return $query->result_array();
    }

/// Fonction pour obtenir les photos d'un objet par son id
    public function getPhotoObjet($idObjet) {
        $sql='SELECT * FROM photo p JOIN objet o ON p.idObjet=o.idObjet WHERE o.idObjet=%d';
        $sql = sprintf($sql, $this->db->escape($idObjet));
        $query = $this->db->query($sql);
        echo $sql;
        return $query->result_array();
    }

/// Fonction pour obtenir un objet par son id
    public function getObjetbyIdUtilisateurs($id) {
        $sql='SELECT * FROM objet WHERE idUtilisateurs = %s';
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql); 
        $array = $query->result_array();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['photo'] = $this->objet_model->getPhotoObjet($array[$i]['idObjet']);
        }
        return $array;
    }

/// Fonction pour obtenir les objet n'appartenat pas à un utilisateur en utilisant son id
    public function getObjetOther($id) {
        $sql='SELECT * FROM objet WHERE NOT idUtilisateurs = %d';
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql); 
        $array = $query->result_array();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['photo'] = $this->objet_model->getPhotoObjet($array[$i]['idObjet']);
        }
        return $array;
    }

/// Fonction pour obtenir un objet par son idcategorie
    public function getObjetbyidCategories($idCategorie) {
        $sql='SELECT * FROM objet WHERE idCategories = %s';
        $sql = sprintf($sql, $this->db->escape($idCategorie));
        $query = $this->db->query($sql); 
        return $query->result_array();
    }
    
/// Fonction pour modifier la catégorie d'un objet
    public function modif_categorie($idCategorie = '', $idObjet='') {
        $sql = 'UPDATE objet SET idCategories = %s WHERE id = %s';
        $sql = sprintf($sql, $this->db->escape($id_categorie), $this->db->escape($id_objet));
        $query = $this->db->query($sql);
    }

/// Fonction pour modifier un objet
    public function UpdateObjet($nom='', $description='', $prixestimatif='', $idObjet='') {
        $sql1='INSERT INTO modifier(idObjet) values(%s)';
        $sql1=sprintf($sql,$this->escape($idObjet));
        $query1=$this->sdb->query($sql1);

        $sql = 'UPDATE objet SET nom=%s, descript = %s,  prixestimatif = %s WHERE idObjet = %s';
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($description), $this->db->escape($prixestimatif), $this->db->escape($idObjet));
        echo $sql;
        $query = $this->db->query($sql);
    }    

/// Fonction ajouter un objet au site
    public function addObjet($idUtilisateurs='',$nom='', $idCategories='', $description = '', $prixestimatif='') {
        $sql = 'INSERT INTO objet (idUtilisateurs, nom, idCategories, descript, prixestimatif) VALUES (%s, %s, %s, %s, %s)';
        $sql = sprintf($sql, $this->db->escape($idUtilisateurs), $this->db->escape($nom), $this->db->escape($idCategorie), $this->db->escape($description), $this->db->escape($prixestimatif));
        $query = $this->db->query($sql);
    }

/// Fonction delete un objet au site
    public function deleteObjet($id=''){
        $sql1='INSERT INTO deletobjet(idObjet) values(%s)';
        $sql1=sprintf($sql,$this->escape($id));
        $query1=$this->sdb->query($sql1);

        $sql = 'DELETE from objet where idObjet=%s';
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql);

    }

/// Fonction de recherche
    public function rechercher_objet($mot_cle='', $categorie='') {
        $mc='%'.$mot_cle.'%';
        $sql="SELECT * FROM objet WHERE nom LIKE %s AND idCategories = %s";
        $sql = sprintf($sql, $this->db->escape($mc), $this->db->escape($categorie));
        $query = $this->db->query($sql); 
        return $query->result_array();
    }   
}