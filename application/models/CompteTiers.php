<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class CompteTiers extends CI_Model {
        

        public function insertCompteT($numero, $intitule) {
            $sql = "INSERT INTO Compte_tiers(numero, intitule) VALUES ('%s', '%s')";
            
            $sql = sprintf($sql, $numero, $intitule);

            $this->db->query($sql);
        }

        public function updateCompteT($idcompte_tiers, $idcompte_generaux, $numero, $intitule) {
            $sql = "UPDATE Compte_tiers SET idcompte_generaux = %d, numero = '%s', intitule = '%s' WHERE idcompte_tiers = %d";

            $sql = sprintf($sql, $idcompte_generaux, $numero, $intitule, $idcompte_tiers);

            $this->db->query($sql);
        }

        public function deleteCompteT($idcompte_tiers) {
            $sql = "DELETE FROM Compte_tiers WHERE idcompte_tiers = %d";

            $sql = sprintf($sql, $idcompte_tiers);

            $this->db->query($sql);

        }


        public function getAllCompteT() {
            $allCompteT = array();

            $sql = "SELECT * FROM Compte_tiers";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $allCompteT [] = $row;
            }

            return $allCompteT;
        }

        public function getCompteT($id) {
    
            $sql = "SELECT * FROM Compte_tiers WHERE idcompte_tiers = %d";

            $sql = sprintf($sql, $id);

            $query = $this->db->query($sql);

            $row = $query->result_array();

            return $row;
        }

    }

?>