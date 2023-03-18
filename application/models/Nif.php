<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Nif extends CI_Model {
        

        public function insertNif($numero, $chemin) {
            $sql = "INSERT INTO NIF(numero, chemin) VALUES ('%s', '%s')";
            
            $sql = sprintf($sql, $numero, $chemin);

            $this->db->query($sql);
        }


        public function getNif() {
            $nif = array();

            $sql = "SELECT * FROM NIF";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $nif [] = $row;
            }

            return $nif;
        }

    }

?>