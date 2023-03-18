<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_codeJournal extends CI_Controller {

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

	public function codeJournal()
	{
        $data['allCodeJournal'] = $this->cj->getAllCodeJournal();

		$this->load->view('header');
		$this->load->view('code_journal', $data);
		$this->load->view('footer');
	}
    
    public function modifCodeJournal($id_codeJournal)
    {
		$data['detail_codeJournal'] = $this->cj->getCodeJournal($id_codeJournal);
		$this->load->view('modif_code_journal', $data);
    }

	public function updateValueCodeJournal()
	{
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$intitule = $this->input->post('intitule');

		$this->cj->updateCodeJournal($id, $code, $intitule);

		$this->codeJournal();

	}


	public function addCodeJournal()
	{
		$code = $this->input->post('code');
		$intitule = $this->input->post('intitule');

		$this->cj->insertCodeJournal($code, $intitule);

		$this->codeJournal();

	}

	public function deleteCodeJournal($id)
	{
		$this->cj->deleteCodeJournal($id);

		$this->codeJournal();

	}
}
