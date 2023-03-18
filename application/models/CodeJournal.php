<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class CodeJournal extends CI_Model {
        

        public function insertCodeJournal($code, $intitule) {
            $sql = "INSERT INTO Code_journal(code, intitule) VALUES ('%s', '%s')";
            
            $sql = sprintf($sql, $code, $intitule);

            $this->db->query($sql);
        }

        public function updateCodeJournal($idcode_journal, $code, $intitule) {
            $sql = "UPDATE Code_journal SET code = '%s', intitule = '%s' WHERE idcode_journal = %d";

            $sql = sprintf($sql, $code, $intitule, $idcode_journal);

            $this->db->query($sql);
        }

        public function deleteCodeJournal($idcode_journal) {
            $sql = "DELETE FROM Code_journal WHERE idcode_journal = %d";

            $sql = sprintf($sql, $idcode_journal);

            $this->db->query($sql);

        }


        public function getAllCodeJournal() {
            $allCodeJ = array();

            $sql = "SELECT * FROM Code_journal";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $allCodeJ [] = $row;
            }

            return $allCodeJ;
        }

        public function getCodeJournal($id) {
            $sql = "SELECT * FROM Code_journal WHERE idcode_journal = %d";

            $sql = sprintf($sql, $id);

            $query = $this->db->query($sql);

            $row = $query->result_array();

            return $row;
        }

    }

?>