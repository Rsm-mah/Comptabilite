<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_listfacture extends CI_Controller {

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

	public function listefacture()
	{
        $data['allCodeJournal'] = $this->cj->getAllCodeJournal();
        $data['allbalance'] = $this->balance->selectallBalance();
        $data['sumdebitBalance'] = $this->balance->sumdebitBalance();
        $data['sumcreditBalance'] = $this->balance->sumcreditBalance();

		$data['allFacture'] = $this->listfacture->getAllFacture();

		$this->load->view('header',$data);
		$this->load->view('listfacture',$data);
		$this->load->view('footer');
	}
    
}