<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ajout extends CI_Controller {

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
	public function ajout_regime()
	{
        $data['objectif'] = $this->objectif->getAllObjectif();

        $this->load->view('ajout_regime',$data);
	}	

    public function ajout_sportive()
	{
        $data['objectif'] = $this->objectif->getAllObjectif();

        $this->load->view('ajout_sportive',$data);
	}	

    public function insert_regime()
    {
        $objectif = $this->input->post('objectif');
        $plat = $this->input->post('plat');
        $calorie = $this->input->post('calorie');
        $prix = $this->input->post('prix');

        $this->platregime->insertPlatRegime($objectif,$plat,$calorie,$prix);
        redirect('c_tableau/tableau_regime');
    }

    public function insert_sportive()
    {
        $objectif = $this->input->post('objectif');
        $sport = $this->input->post('sport');
        $calorieperdue = $this->input->post('calorieperdue');

        $this->sportregime->insertSportRegime($objectif,$sport,$calorieperdue);

        redirect('c_tableau/tableau_sportive');
    }
    
}
