<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Grand_livre extends CI_Model {
        public function insertGrandlivre($numero_compte,$date, $numero_piece, $reference_piece,$intitule, $debit, $credit) {
            $sql = "INSERT INTO Grand_Livre(num_compte, date, num_piece, ref_piece, ecriture, debit, credit) VALUES (%d, '%s', %d, '%s' , '%s', %g, %g)";
            
            $sql = sprintf($sql, $numero_compte,$date, $numero_piece,$reference_piece, $intitule,$debit,$credit);

            $this->db->query($sql);
        }

        public function selectallGrandLivre() {
            $allGrandLivre = array();

            $sql = "SELECT * FROM Grand_Livre";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $allGrandLivre [] = $row;
            }

            return $allGrandLivre;
        }

        public function getGrandLivreByNum_Compte($num_compte) {
            $grandLivreNum_Compte = array();
            
            $sql = "SELECT * FROM Grand_Livre WHERE num_compte = %d";

            $sql = sprintf($sql, $num_compte);

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $grandLivreNum_Compte [] = $row;
            }

            return $grandLivreNum_Compte;
        }
    }

?>