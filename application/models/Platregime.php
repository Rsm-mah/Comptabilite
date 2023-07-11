<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Platregime extends CI_Model {
        public function insertPlatRegime($idobjectif,$plat,$calorie,$prix) {
            $sql = "INSERT INTO platregime(idobjectif,plat,calorie,prix) VALUES (%d,'%s',%d,%d)";
            
            $sql = sprintf($sql, $idobjectif,$plat,$calorie,$prix);

            $this->db->query($sql);
        }


        public function getAllPlat() {
            $plat = array();

            $sql = "SELECT objectif.nomobjectif as objectif,plat,calorie,prix FROM platregime join objectif on objectif.idobjectif=platregime.idobjectif";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $plat [] = $row;
            }

            return $plat;
        }

        public function getPlatByobjectif($idobjectif) {
            $request="select * from platregime where idobjectif=%s";
            $request=sprintf($request, $idobjectif);
            $result=$this->db->query($request);
            $liste=array();
            for($i=0; $row=$result->result_array()[$i]; $i++){
                $liste[$i]['plat']=$row['plat'];
                $liste[$i]['calorie']=$row['calorie'];
                if(!isset($result->result_array()[$i+1])){
                    break;
                }
            }
            return $liste;
        }
    }

?>