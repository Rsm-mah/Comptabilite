<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Genre extends CI_Model {
        public function getAllGenre() {
            $genre = array();

            $sql = "SELECT * FROM genre";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $genre [] = $row;
            }

            return $genre;
        }
    }

?>