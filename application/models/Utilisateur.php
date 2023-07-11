<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Utilisateur extends CI_Model {

            public function insertUtilisateur($ididentifiant,$nom,$prenom,$idgenre,$datedenaissance,$taille,$poid) {
                $sql = "INSERT INTO utilisateur(ididentifiant,nom,prenom,idgenre,datedenaissance,taille,poids) VALUES (%d,'%s','%s',%d,'%s',%d,%d)";
                
                $sql = sprintf($sql, $ididentifiant, $nom, $prenom, $idgenre, $datedenaissance, $taille, $poid);

                $this->db->query($sql);
            }
        
    }

?>