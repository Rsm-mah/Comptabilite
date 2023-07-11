<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Operation extends CI_Controller {

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

	public function operation()
	{
        $data['compteGeneraux'] = $this->cg->getAllCompteG();
        $data['allCodeJournal'] = $this->cj->getAllCodeJournal();
        $data['sumdebitBalance'] = $this->balance->sumdebitBalance();
        $data['sumcreditBalance'] = $this->balance->sumcreditBalance();

		$this->load->view('header',$data);
		$this->load->view('operation',$data);
		$this->load->view('footer');
	}

    public function adddetailfacture()
    {
        $idfacture = $this->input->post('idfacture');
        $designation = $this->input->post('designation');
        $idunite = $this->input->post('unite');
        $nombre = $this->input->post('nombre');
        $prix_unitaire = $this->input->post('prix_unitaire');
        $montant_ht = $this->input->post('montant_ht');

        $idcompte_tiers = $this->input->post('client');

        $this->operation->insertDetailFacture($idfacture,$designation,$idunite,$nombre,$prix_unitaire,$montant_ht);

        $data['compteGeneraux'] = $this->cg->getAllCompteG();
        $data['allCodeJournal'] = $this->cj->getAllCodeJournal();
        $data['sumdebitBalance'] = $this->balance->sumdebitBalance();
        $data['sumcreditBalance'] = $this->balance->sumcreditBalance();

        $data['detailfacture'] = $this->operation->getDetailFactureById($idfacture);
        $data['maxidfacture'] = $this->facture->getMaxIdFacture();
        $data['clientById'] = $this->facture->getClientById($idcompte_tiers);
        $data['allUnite'] = $this->facture->getAllUnite();

        $data['total_HT'] = $this->operation->TotalHT($idfacture);
        $data['total_taux20'] = $this->operation->TotalTaux20($idfacture);
        $data['total_TTC'] = $this->operation->TotalTTC($idfacture);

		$this->load->view('header',$data);
		$this->load->view('operation',$data);
		$this->load->view('footer');
    }
    
}
