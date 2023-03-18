<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Utilisateur extends CI_Model {
        
            public function getUtilisateur($email , $password) {
            
                $sql = "SELECT * FROM Utilisateur WHERE mail = '%s' AND mot_de_passe = '%s' ";
    
                $sql = sprintf($sql, $email , $password);
                
                $query = $this->db->query($sql);
                
                $row = $query->row_array();
    
                return $row;
            }

    }

?>