<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Operation extends CI_Model {
        public function insertDetailFacture($idfacture,$designation,$idunite,$nombre,$prix_unitaire,$montant_ht) {
            $sql = "INSERT INTO detailfacture(idfacture, designation, idunite, nombre, prix_unitaire, montant_ht) VALUES (%d, '%s', %d, %d, %g, %g)";
            
            $sql = sprintf($sql, $idfacture,$designation,$idunite,$nombre,$prix_unitaire,$montant_ht);

            $this->db->query($sql);
        }

        public function getDetailFactureById($idfacture) {
            $detailfacture = array();

            $sql = "SELECT * FROM detailfacture where idfacture = %d";

            $sql = sprintf($sql, $idfacture);

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $detailfacture [] = $row;
            }

            return $detailfacture;
        }

        public function deleteOperation($idfacture)
        {
            $sql = "DELETE from detailfacture where idfacture = %d";
            
            $sql = sprintf($sql, $idfacture);

            $this->db->query($sql);
        }

        public function getTaux() {
            $taux = array();

            $sql = "SELECT * FROM  taxe";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $taux [] = $row;
            }

            return $taux;
        }

        //CALCUL MONTANT HORS-TAXE
        public function TotalHT($idfacture) {
            $total_HT = array();

            $sql = "SELECT sum(montant_ht) as TotalHT FROM detailfacture where idfacture=%d";

            $sql = sprintf($sql, $idfacture);

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $total_HT [] = $row;
            }

            return $total_HT;
        }


        //CALCUL TAUX 20%
        public function TotalTaux20($idfacture) {
            $taux = $this->getTaux();
            $totalHT = $this->TotalHT($idfacture);

            $totalTaux20 = ($totalHT[0]['TotalHT'] * $taux[0]['taux']) / 100;

            return $totalTaux20;
        }

        
        //CALCUL TTC
        public function TotalTTC($idfacture) {
            $totalHT = $this->TotalHT($idfacture);
            $totalTaux20 = $this->TotalTaux20($idfacture);

            $totalTTC = $totalHT[0]['TotalHT']+$totalTaux20;

            return $totalTTC;
        }

    }
?>