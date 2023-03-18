<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Ns extends CI_Model {
        

        public function insertNs($numero, $chemin) {
            $sql = "INSERT INTO NS(numero, chemin) VALUES ('%s', '%s')";
            
            $sql = sprintf($sql, $numero, $chemin);

            $this->db->query($sql);
        }


        public function getNs() {
            $ns = array();

            $sql = "SELECT * FROM NS";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $ns [] = $row;
            }

            return $ns;
        }

    }

?>