<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class ListFacture extends CI_Model {
        public function getAllFacture() {
            $allFacture = array();

            $sql = "SELECT idfacture,date_facture,facture.idcompte_tiers as idcompte_tiers,compte_tiers.intitule as client,ref_bc,objet FROM Facture join compte_tiers on compte_tiers.idcompte_tiers=facture.idcompte_tiers";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $allFacture [] = $row;
            }

            return $allFacture;
        }

        public function recherche($idfacture,$date_facture,$client,$ref_bc,$objet) {
            $recherche = array();
            
            $sql = "select idfacture,date_facture,compte_tiers.intitule,ref_bc,objet from facture 
            join compte_tiers on compte_tiers.idcompte_tiers=facture.idcompte_tiers 
            where idfacture=%d or date_facture='%s' or compte_tiers.intitule='%s' or ref_bc like '%s' or objet like '%s';";

            $sql = sprintf($sql, $idcompte_tiers, $date_facture, $client, $ref_bc, $objet);

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $recherche [] = $row;
            }

            return $recherche;
        }


    }
?>