<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class CompteGeneraux extends CI_Model {
        

        public function insertCompteG($numero, $intitule) {
            $sql = "INSERT INTO Compte_generaux(numero, intitule) VALUES ('%s', '%s')";
            
            $sql = sprintf($sql, $numero, $intitule);

            $this->db->query($sql);
        }

        public function updateCompteG($idcompte_generaux, $numero, $intitule) {
            $sql = "UPDATE Compte_generaux SET numero = '%s', intitule = '%s' WHERE idcompte_generaux = %d";

            $sql = sprintf($sql, $numero, $intitule, $idcompte_generaux);

            $this->db->query($sql);
        }

        public function deleteCompteG($idcompte_generaux) {
            $sql = "DELETE FROM Compte_generaux WHERE idcompte_generaux = %d";

            $sql = sprintf($sql, $idcompte_generaux);

            $this->db->query($sql);

        }


        public function getAllCompteG() {
            $allCompteG = array();

            $sql = "SELECT * FROM Compte_generaux";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $allCompteG [] = $row;
            }

            return $allCompteG;
        }

        public function getCompteG($id) {

            $sql = "SELECT * FROM Compte_generaux WHERE idcompte_generaux = %d";

            $sql = sprintf($sql, $id);

            $query = $this->db->query($sql);

            $row = $query->result_array();

            return $row;
        }

    }

?>