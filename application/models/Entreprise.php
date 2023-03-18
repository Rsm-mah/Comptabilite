<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Entreprise extends CI_Model {
        

        public function insertEntreprise($nom, $nom_dirigeant, $objet, $siege, $email, $mdp, $telephone, $nb_employe, $date_creation, $date_debut, $num_nif, $chem_nif, $num_ns, $chem_ns, $num_nrcs, $chem_nrcs, $devise_tenu_compte) {
            
            $sql = "INSERT INTO Entreprise VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', %d, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', %d)";
            
            $sql = sprintf($sql, $nom, $nom_dirigeant, $objet, $siege, $email, $mdp, $telephone, $nb_employe, $date_creation, $date_debut, $num_nif, $chem_nif, $num_ns, $chem_ns, $num_nrcs, $chem_nrcs, $devise_tenu_compte);

            $this->db->query($sql);
        }

        

        public function getEntreprise() {
            $entreprise = array();

            $sql = "SELECT * FROM Entreprise";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $entreprise [] = $row;
            }

            return $entreprise;
        }

    }

?>

