<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Echange_model extends CI_Model {

/// Fonction pour lister les échanges
    public function get_echanges() {
        $query = $this->db->query('SELECT * FROM echange'); 
        return $query->result_array();
    }

    
/// Fonction pour lister les échanges
    public function getlistEchange() {
        $query = $this->db->query('SELECT * FROM Proposition WHERE date_acceptation IS NULL'); 
        return $query->result_array();
    }
    
/// Fonction pour lister les échanges pour vous
    public function getEchangeSelf($idUtilisateurs) {
        $sql = 'SELECT * FROM Proposition pro JOIN objet o ON pro.idObjet1=o.idObjet WHERE date_acceptation IS NULL AND o.idUtilisateurs=%s';
        $sql = sprintf($sql, $this->db->escape($id_user));
        echo $sql;
        $query = $this->db->query($sql);
        $array = $query->result_array();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['objet1'] = $this->objet_model->get_by_id($array[$i]['idObjet1']);
            $array[$i]['objet2'] = $this->objet_model->get_by_id($array[$i]['idObjet2']);
        }
        return $array;
    }

/// Fonction pour obtenir le nombre d'échange
    public function CountProposition() {
        $sql='SELECT count(*) nbProposition FROM proposition';
        $query = $this->db->query($sql); 
        return $query->result_array();
    }

/// Fonction pour obtenir le nombre d'échange par user
    public function getCountperUser() {
        $sql='SELECT o.idUtilisateurs user, count(*) nbProposition FROM proposition pro JOIN objet o ON pro.idObjet1=o.idObjet GROUP BY o.idUtilisateurs';
        $query = $this->db->query($sql); 
        return $query->result_array();
    }

/// Fonction pour obtenir l'hitorique des echange effectués'
    public function get_historique() {
        $sql='SELECT o1.idUtilisateurs user1, pro.idObjet1, o2.idUtilisateurs user2, pro.idObjet2, pro.date_acceptation FROM proposition pro JOIN objet o1 ON pro.idObjet1=o1.idObjet JOIN objet o2 ON pro.idObjet2=o2.idObjet WHERE date_acceptation IS NOT NULL GROUP BY o1.idUtilisateurs, o2.idUtilisateurs';
        $query = $this->db->query($sql); 
        return $query->result_array();
    }

/// Fonction pour créer une nouvelle catégorie
    public function echanger($idObjet1='', $idObjet2=''){
        $sql='INSERT INTO proposition(idObjet1, idObjet2, etat) VALUES (%s, %s, 2)';
        $sql = sprintf($sql, $this->db->escape($idObjet1), $this->db->escape($idObjet2));
        $query = $this->db->query($sql); 
    }

/// Fonction pour accepter un echange
    public function accepterProposition($date='', $id_objet1='', $id_objet2=''){
        $sql1 = 'UPDATE proposition pro JOIN objet o1 ON pro.idObjet1=o1.idObjet JOIN objet o2 ON pro.idObjet2=o2.idObjet SET dateacc=%s WHERE o1.idObjet=%s AND o2.idObjet=%s';
        $sql1 = sprintf($sql1, $this->db->escape($date), $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $sql2 = 'UPDATE proposition pro JOIN objet o1 ON pro.idObjet1=o1.idObjet JOIN objet o2 ON pro.idObjet2=o2.idObjet SET o1.idUtilisateurs=o2.idUtilisateurs, o2.idUtilisateurs=o1.idUtilisateurs WHERE o1.idUtilisateurs=%s AND o2.idUtilisateurs=%s';
        $sql2 = sprintf($sql2, $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $query = $this->db->query($sql1);
        $query = $this->db->query($sql2);
    }
}