<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_compteTiers extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function compteTiers() 
    {
        $data['allCompteTiers'] = $this->ct->getAllCompteT();
        $data['allCompteGeneraux'] = $this->cg->getAllCompteG();
		$data['allCodeJournal'] = $this->cj->getAllCodeJournal();
		$data['sumdebitBalance'] = $this->balance->sumdebitBalance();
        $data['sumcreditBalance'] = $this->balance->sumcreditBalance();

		$this->load->view('header', $data);
		$this->load->view('compte_tiers', $data);
		$this->load->view('footer');

    }

    public function modifCompteTiers($id)
    {
		$data['detailComteTiers'] = $this->ct->getCompteT($id);
		$this->load->view('modif_compte_tiers', $data);
    }

    public function updateValueCompteTiers()
	{
		$id = $this->input->post('id');
        $idCompteGeneraux = $this->input->post('idCompteGeneraux');
		$code = $this->input->post('code');
		$intitule = $this->input->post('intitule');

		$this->ct->updateCompteT($id, $idCompteGeneraux, $code, $intitule);

		$this->compteTiers();

	}

    public function generateZero($nb)
    {
        $result = strval($nb);
        $maxChiffre = 5;

        if(strlen($nb) < $maxChiffre)
        {
            $chiffreManquant = $maxChiffre - strlen($nb);
            for($i = 0; $i < $chiffreManquant; $i++)
            {
                $result = $result."0";
            }
        }

		return $result;
    }

    public function addCompteTiers()
	{
        $numero = $this->input->post('numero');
		$intitule = $this->input->post('intitule');

		$this->ct->insertCompteT($numero, $intitule);
    
		$this->compteTiers();

	}

    public function deleteCompteTiers($id)
	{
		$this->ct->deleteCompteT($id);

		$this->compteTiers();

	}
   
}
