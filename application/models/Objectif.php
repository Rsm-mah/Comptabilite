<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Objectif extends CI_Model {
        public function getAllObjectif() {
            $objectif = array();

            $sql = "SELECT * FROM objectif";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $objectif [] = $row;
            }

            return $objectif;
        }
    }

?>