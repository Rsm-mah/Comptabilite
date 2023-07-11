<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Sportregime extends CI_Model {
        public function getAllSport() {
            $plat = array();

            $sql = "SELECT * FROM sportregime";

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $plat [] = $row;
            }

            return $plat;
        }

        public function getSportByobjectif($idobjectif) {
            $request="select * from sportregime where idobjectif=%s";
            $request=sprintf($request, $idobjectif);
            $result=$this->db->query($request);
            $liste=array();
            for($i=0; $row=$result->result_array()[$i]; $i++){
                $liste[$i]['sport']=$row['sport'];
                $liste[$i]['calorieperdue']=$row['calorieperdue'];
                if(!isset($result->result_array()[$i+1])){
                    break;
                }
            }
            return $liste;
        }
    }

?>