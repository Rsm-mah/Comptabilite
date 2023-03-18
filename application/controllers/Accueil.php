<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {


	public function index()
	{
		$this->load->view('test_csv');
		
	}	
    
    public function generateZero()
    {
        $nb = $this->input->get('nb');
        $result['val'] = strval($nb);
        $maxChiffre = 5;

        if(strlen($nb) < $maxChiffre)
        {
            $chiffreManquant = $maxChiffre - strlen($nb);
            for($i = 0; $i < $chiffreManquant; $i++)
            {
                $result['val'] = $result['val']."0";
            }
        }

        
        $this->load->view('test_csv', $result);
    }
}