<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Devise extends CI_Model {
        

        public function insertDevise($nom) {
            $sql = "INSERT INTO Devise(nom) VALUES ('%s')";
            
            $sql = sprintf($sql, $nom);

            $this->db->query($sql);
        }

        public function updateDevise($id_devise, $nom) {
            $sql = "UPDATE Devise SET nom = '%s' WHERE iddevise = %d";

            $sql = sprintf($sql, $nom, $id_devise);

            $this->db->query($sql);
        }

        public function deleteDevise($id_devise) {
            $sql = "DELETE FROM Devise WHERE iddevise = %d";

            $sql = sprintf($sql, $id_devise);

            $this->db->query($sql);

        }


        public function getAllDevise() {
            $allDevise = array();

            $sql = "SELECT * FROM Devise";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $allDevise [] = $row;
            }

            return $allDevise;
        }
        

    }

?>