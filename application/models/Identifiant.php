<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Identifiant extends CI_Model {

            public function insertIdentifiant($email,$password) {
                $sql = "INSERT INTO identifiant(email,motdepasse) VALUES ('%s','%s')";
                
                $sql = sprintf($sql, $email, $password);

                $this->db->query($sql);
            }
        
            public function getIdentifiant($email , $password) {    
                $request="select ididentifiant,isadmin from identifiant where email='%s' and motdepasse='%s'";
                $request=sprintf($request, $email, $password);
                $result=$this->db->query($request);
                return $result->row_array();
            }

            public function getUtilisateurByIdentifiant($ididentifiant)
            {
                $request="select identifiant.email,identifiant.isadmin,utilisateur.ididentifiant,nom,prenom,datedenaissance,taille,poids from utilisateur 
                join identifiant on identifiant.ididentifiant=utilisateur.ididentifiant where utilisateur.ididentifiant='%s'";
                $request=sprintf($request, $ididentifiant);
                $result=$this->db->query($request);
                return $result->row_array();
            }
    }

?>