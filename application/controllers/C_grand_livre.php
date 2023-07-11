<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_grand_livre extends CI_Controller {

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

	public function grandlivre()
	{
        $data['compteGeneraux'] = $this->cg->getAllCompteG();
        $data['allCodeJournal'] = $this->cj->getAllCodeJournal();
        $data['sumdebitBalance'] = $this->balance->sumdebitBalance();
        $data['sumcreditBalance'] = $this->balance->sumcreditBalance();
		
		$data['grandLivre'] = $this->grand_livre->selectallGrandLivre();

		$this->load->view('header',$data);
		$this->load->view('grand_livre',$data);
		$this->load->view('footer');
	}

	public function getGrandLivreByNum_Compte()
	{
		$data['compteGeneraux'] = $this->cg->getAllCompteG();
        $data['allCodeJournal'] = $this->cj->getAllCodeJournal();
        $data['sumdebitBalance'] = $this->balance->sumdebitBalance();
        $data['sumcreditBalance'] = $this->balance->sumcreditBalance();

		$num_compte = $this->input->post('num_compte');
		if ($num_compte == '1') {
			$data['grandLivre'] = $this->grand_livre->selectallGrandLivre();
		}
		else if ($num_compte != null) {
			$data['grandLivre'] = $this->grand_livre->getGrandLivreByNum_Compte($num_compte);
		}


		$this->load->view('header',$data);
		$this->load->view('grand_livre',$data);
		$this->load->view('footer');
	}
    
}
