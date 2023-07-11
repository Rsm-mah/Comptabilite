<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_InfoFacture extends CI_Controller {

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

	public function infofacture($idfacture,$idclient)
	{
        $data['allCodeJournal'] = $this->cj->getAllCodeJournal();
        $data['allbalance'] = $this->balance->selectallBalance();
        $data['sumdebitBalance'] = $this->balance->sumdebitBalance();
        $data['sumcreditBalance'] = $this->balance->sumcreditBalance();

        $data['facture'] = $this->facture->getFactureById($idfacture);
        $data['detailfacture'] = $this->operation->getDetailFactureById($idfacture);
        $data['clientById'] = $this->facture->getClientById($idclient);

        $data['total_HT'] = $this->operation->TotalHT($idfacture);
        $data['total_taux20'] = $this->operation->TotalTaux20($idfacture);
        $data['total_TTC'] = $this->operation->TotalTTC($idfacture);

		$this->load->view('header',$data);
		$this->load->view('infofacture',$data);
		$this->load->view('footer');
	}
    
}
