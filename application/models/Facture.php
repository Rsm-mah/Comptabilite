<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Facture extends CI_Model {
        public function insertFacture($date_facture,$idcompte_tiers,$ref_bc,$objet) {
            $sql = "INSERT INTO Facture(date_facture, idcompte_tiers, ref_bc, objet) VALUES ('%s', %d, '%s', '%s')";
            
            $sql = sprintf($sql, $date_facture,$idcompte_tiers,$ref_bc,$objet);

            $this->db->query($sql);
        }

        public function getAllUnite() {
            $allUnite = array();

            $sql = "SELECT * FROM Unite";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $allUnite [] = $row;
            }

            return $allUnite;
        }

        public function getMaxIdFacture() {
            $maxIdFacture = array();

            $sql = "SELECT * FROM facture where idfacture=(select max(idfacture) from facture)";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $maxIdFacture [] = $row;
            }

            return $maxIdFacture;
        }

        public function getFactureById($idfacture) {
            $factureById = array();
            
            $sql = "SELECT * FROM facture WHERE idfacture = %d";

            $sql = sprintf($sql, $idfacture);

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $factureById [] = $row;
            }

            return $factureById;
        }

        public function getClientById($idcompte_tiers) {
            $clientById = array();
            
            $sql = "SELECT idcompte_tiers,intitule FROM compte_tiers WHERE idcompte_tiers = %d";

            $sql = sprintf($sql, $idcompte_tiers);

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $clientById [] = $row;
            }

            return $clientById;
        }

        public function deleteFacture($idfacture)
        {
            $sql = "DELETE from facture where idfacture = %d";
            
            $sql = sprintf($sql, $idfacture);

            $this->db->query($sql);
        }

    }
?>