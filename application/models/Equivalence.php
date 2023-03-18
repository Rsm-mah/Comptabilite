<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Equivalence extends CI_Model {
        

        public function insertEquivalence($id_devise, $equivalence) {
            $sql = "INSERT INTO Equivalence(iddevise, equivalence) VALUES (%d, %d)";
            
            $sql = sprintf($sql, $id_devise, $equivalence);

            $this->db->query($sql);
        }

        public function updateEquivalence($id_equivalence, $id_devise, $equivalence) {
            $sql = "UPDATE Equivalence SET iddevise = %d, equivalence = %d WHERE idequivalence = %d";

            $sql = sprintf($sql, $id_devise, $equivalence, $id_equivalence);

            $this->db->query($sql);
        }

        public function deleteEquivalence($id_equivalence) {
            $sql = "DELETE FROM Equivalence WHERE idequivalence = %d";

            $sql = sprintf($sql, $id_equivalence);

            $this->db->query($sql);

        }


        public function getAllEquivalence() {
            $allEquivalence = array();

            $sql = "SELECT * FROM Equivalence";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $allEquivalence [] = $row;
            }

            return $allEquivalence;
        }

    }

?>