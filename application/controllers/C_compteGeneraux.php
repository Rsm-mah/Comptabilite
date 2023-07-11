<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_compteGeneraux extends CI_Controller {

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
	public function compte_generaux()
	{

		$compteGeneraux['compteGeneraux'] = $this->cg->getAllCompteG();
		$data['allCodeJournal'] = $this->cj->getAllCodeJournal();
		$data['sumdebitBalance'] = $this->balance->sumdebitBalance();
        $data['sumcreditBalance'] = $this->balance->sumcreditBalance();

		$this->load->view('header', $data);
		$this->load->view('compte_generaux', $compteGeneraux);
		$this->load->view('footer');
	}

    
    public function modifCompteG($id_compteG)
    {
		$data['detail_compteG'] = $this->cg->getCompteG($id_compteG);
		$this->load->view('modif_compte_generaux', $data);
    }

	public function updateValueCompteGeneraux()
	{
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$intitule = $this->input->post('intitule');

		$this->cg->updateCompteG($id, $code, $intitule);

		$this->compte_generaux();

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

	public function addCompteGeneraux()
	{
		$numero_compte = $this->generateZero($this->input->post('numero_compte'));
		$intitule = $this->input->post('intitule');

		$this->cg->insertCompteG($numero_compte, $intitule);

		$this->compte_generaux();

	}

	public function deleteCompteGeneraux($id)
	{
		$this->cg->deleteCompteG($id);

		$this->compte_generaux();

	}
}
