<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Balance extends CI_Model {
        public function insertBalance($num_compte, $intitule, $debit, $credit) {
            $sql = "INSERT INTO Balance(num_compte, intitule, debit, credit) VALUES (%d, '%s', %g, %g)";
            
            $sql = sprintf($sql, $num_compte, $intitule, $debit, $credit);

            $this->db->query($sql);
        }

        public function updateBalance($num_compte,$debit, $credit) {
            $sql = "UPDATE Balance SET debit = %d, credit = %d WHERE num_compte = %d";

            $sql = sprintf($sql,$debit, $credit, $num_compte);

            $this->db->query($sql);
        }

        public function updateDebitBalance($num_compte,$debit) {
            $sql = "UPDATE Balance SET debit = %d WHERE num_compte = %d";

            $sql = sprintf($sql, $debit, $num_compte);

            $this->db->query($sql);
        }

        public function updateCreditBalance($num_compte,$credit) {
            $sql = "UPDATE Balance SET credit = %d WHERE num_compte = %d";

            $sql = sprintf($sql, $credit, $num_compte);

            $this->db->query($sql);
        }

        public function selectNumCompte($num_compte) {
            $sql = "SELECT numero,intitule FROM Compte_tiers WHERE numero = %d";

            $sql = sprintf($sql, $num_compte);

            $query = $this->db->query($sql);

            $row = $query->result_array();

            if ($row == null) {
                $sql = "SELECT numero,intitule FROM Compte_generaux WHERE numero = %d";

                $sql = sprintf($sql, $num_compte);

                $query = $this->db->query($sql);

                $row = $query->result_array();
            }

            return $row;
        }

        public function selectcompteMere($num_compte) {
            $sql = "SELECT numero,intitule from compte_generaux where numero= %d";

            $sql = sprintf($sql, $num_compte);

            $query = $this->db->query($sql);

            $row = $query->result_array();

            return $row;
        }

        public function selectNumCompteBalance() {
            $allnumcompteBalance = array();

            $sql = "SELECT num_compte FROM Balance";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $allnumcompteBalance [] = $row;
            }

            return $allnumcompteBalance;
        }

        public function selectBalance($num_compte) {
            $sql = "SELECT * FROM Balance WHERE num_compte = %d";

            $sql = sprintf($sql, $num_compte);

            $query = $this->db->query($sql);

            $row = $query->result_array();

            return $row;
        }

        public function selectallBalance() {
            $allBalance = array();

            $sql = "SELECT * FROM Balance";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $allBalance [] = $row;
            }

            return $allBalance;
        }

        public function sumdebitBalance() {
            $sql = "SELECT sum(debit) as sumDebit FROM Balance";

            $query = $this->db->query($sql);

            $row = $query->result_array();

            return $row;
        }

        public function sumcreditBalance() {
            $sql = "SELECT sum(credit) as sumCredit FROM Balance";

            $query = $this->db->query($sql);

            $row = $query->result_array();

            return $row;
        }


    }

?>