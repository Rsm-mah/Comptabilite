<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Platregime extends CI_Model {
        public function getAllPlat() {
            $plat = array();

            $sql = "SELECT * FROM platregime";

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