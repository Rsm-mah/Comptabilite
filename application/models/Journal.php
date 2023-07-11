<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Journal extends CI_Model {
        

        public function insertJournal($idcode_journal, $idmois, $jour, $num_piece, $ref_piece, $num_compte, $ecriture, $devise, $quantite, $montant_devise, $debit, $credit) {
            var_dump($debit);
            $sql = "INSERT INTO Journal(idcode_journal, idmois, jour, num_piece, ref_piece, num_compte, ecriture, devise, quantite, montant_devise, debit, credit) VALUES (%d, %d, %d, %d, '%s', %d, '%s', '%s', %d, %d, %g, %g)";
            
            $sql = sprintf($sql, $idcode_journal, $idmois, $jour, $num_piece, $ref_piece, $num_compte, $ecriture, $devise, $quantite, $montant_devise, $debit, $credit);

            $this->db->query($sql);
        }

        public function selectallMois() {
            $allMois = array();

            $sql = "SELECT * FROM Mois";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $allMois [] = $row;
            }

            return $allMois;
        }

        public function getJournalById($idcode_journal) {
            $journalById = array();
            
            $sql = "SELECT * FROM Journal WHERE idcode_journal = %d";

            $sql = sprintf($sql, $idcode_journal);

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $journalById [] = $row;
            }

            return $journalById;
        }

        public function CalculSoldeById($idcode_journal) {
            $sql = "SELECT sum(debit) - sum(credit) as solde FROM Journal WHERE idcode_journal = %d";

            $sql = sprintf($sql, $idcode_journal);

            $query = $this->db->query($sql);

            $row = $query->result_array();

            return $row;
        }

    }

?>