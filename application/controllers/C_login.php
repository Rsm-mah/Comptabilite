<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

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
	public function index()
	{
		$this->load->view('index');
		
	}
	
	public function loginadmin()
	{
		$this->load->view('loginadmin');
	}

	public function verifLogin()
	{
		$data = array();

		$email = $this->input->post('email');
		$mdp = $this->input->post('mot_de_passe');

		$value = $this->identifiant->getIdentifiant($email, $mdp);

		if($value == null) {
			redirect('c_login');

		}else{
			redirect('setup/index/'.$value);
		}
	}
    
}
