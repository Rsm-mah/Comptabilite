<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan_comptable extends CI_Controller {

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
		$this->load->view('header');
		$this->load->view('plan_comptable');
		$this->load->view('footer');
	}

	public function compte_tiers()
	{
		$this->load->view('header');
		$this->load->view('compte_tiers');
		$this->load->view('footer');
	}

	public function code_journal()
	{
		$this->load->view('header');
		$this->load->view('code_journal');
		$this->load->view('footer');
	}
    
    public function modif_plan_comptable()
    {
		$this->load->view('modif_compte');
    }
}
