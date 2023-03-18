<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Nrcs extends CI_Model {
        

        public function insertNrcs($numero, $chemin) {
            $sql = "INSERT INTO NRCS(numero, chemin) VALUES ('%s', '%s')";
            
            $sql = sprintf($sql, $numero, $chemin);

            $this->db->query($sql);
        }


        public function getNrcs() {
            $nrcs = array();

            $sql = "SELECT * FROM NRCS";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $nrcs [] = $row;
            }

            return $nrcs;
        }

    }

?>