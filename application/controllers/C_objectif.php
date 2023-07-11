<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_objectif extends CI_Controller {

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
        $objectif = $this->input->post('objectif');
        $data['objectif'] = $this->objectif->getAllObjectif();

        if ($objectif == null) {
            $data['plat'] = $this->platregime->getAllPlat();
            $data['sport'] = $this->sportregime->getAllSport();
        } else {
            $data['plat'] = $this->platregime->getPlatByobjectif($objectif);
            $data['sport'] = $this->sportregime->getSportByobjectif($objectif);
            if ($data['sport'] == 0) {
                $data['sport'] = "Aucun Sport";
            }
        }

        $this->load->view('header');
        $this->load->view('objectif',$data);
        $this->load->view('footer');
	}	
    
}
