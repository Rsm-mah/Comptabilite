<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_facture extends CI_Controller {

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

	public function facture()
	{
        $data['allCodeJournal'] = $this->cj->getAllCodeJournal();
        $data['allbalance'] = $this->balance->selectallBalance();
        $data['sumdebitBalance'] = $this->balance->sumdebitBalance();
        $data['sumcreditBalance'] = $this->balance->sumcreditBalance();

        $data['client'] = $this->ct->getAllCompteT();
        $data['allUnite'] = $this->facture->getAllUnite();

		$this->load->view('header',$data);
		$this->load->view('facture',$data);
		$this->load->view('footer');
	}

    public function addFacture()
	{
		$date_facture = $this->input->post('date_facture');
		$idcompte_tiers = $this->input->post('client');
        $ref_bc = $this->input->post('ref_bc');
		$objet = $this->input->post('objet');

        $date = str_replace('/', '-', $date_facture);


        // var_dump($date_facture);
        // var_dump(date('Y-m-d', strtotime($date)));
		$this->facture->insertFacture(date('Y-m-d', strtotime($date)),$idcompte_tiers,$ref_bc,$objet);

        $data['compteGeneraux'] = $this->cg->getAllCompteG();
        $data['allCodeJournal'] = $this->cj->getAllCodeJournal();
        $data['sumdebitBalance'] = $this->balance->sumdebitBalance();
        $data['sumcreditBalance'] = $this->balance->sumcreditBalance();

        $data['maxidfacture'] = $this->facture->getMaxIdFacture();
        $data['clientById'] = $this->facture->getClientById($idcompte_tiers);
        $data['allUnite'] = $this->facture->getAllUnite();

        $idfacture = $this->facture->getMaxIdFacture();
        // var_dump($idfacture);
        $data['detailfacture'] = $this->operation->getDetailFactureById($idfacture[0]['idfacture']);
        $data['total_HT'] = $this->operation->TotalHT($idfacture[0]['idfacture']);
        $data['total_taux20'] = $this->operation->TotalTaux20($idfacture[0]['idfacture']);
        $data['total_TTC'] = $this->operation->TotalTTC($idfacture[0]['idfacture']);

		$this->load->view('header',$data);
		$this->load->view('operation',$data);
		$this->load->view('footer');
	}
    
    public function deletedetailfacture($idfacture)
    {
        $this->operation->deleteOperation($idfacture);
        $this->facture->deleteFacture($idfacture);

        $this->facture();
    }
}
