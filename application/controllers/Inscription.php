<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {

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
		$data['devise_tenu_compte'] = $this->devise->getAllDevise();

		$this->load->view('inscription', $data);
		
	}	
	
	public function uploadFile($numero)
	{
		$this->load->library('upload');

        $config['upload_path'] = './uploads/'; // directory where uploaded files are saved
        $config['allowed_types'] = 'gif|jpg|png|pdf'; // allowed file types
        $config['max_size'] = '20000'; // maximum file size in kilobytes
        $config['max_width'] = '1024'; // maximum image width
        $config['max_height'] = '768'; // maximum image height

        $this->upload->initialize($config);

		$chemin = "";

        if (!$this->upload->do_upload($numero)) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('inscription', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $chemin = $config['upload_path'].$data['upload_data']['file_name'];
        }
        
        return $chemin;
	}		

	public function addEntreprise()
	{
		$nom = $this->input->post('nom');
		$objet = $this->input->post('objet');
		$siege = $this->input->post('siege');
		$email = $this->input->post('email');
		$mot_de_passe = $this->input->post('mot_de_passe');
		$capital = $this->input->post('capital');
		$telephone = $this->input->post('telephone');
		$date_creation = $this->input->post('date_creation');
		$date_debut = $this->input->post('date_debut');
		$dirigeant = $this->input->post('dirigeant');
		$nombre_employe = $this->input->post('nombre_employe');

		$nif = $this->input->post('nif');
		$ns = $this->input->post('ns');
		$nrcs = $this->input->post('nrcs');
		
		$num_nif = $this->input->post('num_nif');
		$num_ns = $this->input->post('num_ns');
		$num_nrcs = $this->input->post('num_nrcs');


		$devise_tenu_compte = $this->input->post('devise_tenu_compte');

		$chemin_nif = $this->uploadFile('nif');
		$chemin_ns = $this->uploadFile('ns');
		$chemin_nrcs = $this->uploadFile('nrcs');

		$this->entreprise->insertEntreprise($nom, $dirigeant, $objet, $siege, $email, $mot_de_passe, $telephone, $nombre_employe, $date_creation, $date_debut, $num_nif, $chemin_nif, $num_ns, $chemin_ns, $num_nrcs, $chemin_nrcs, $devise_tenu_compte);
		

		redirect('welcome');
	}
}
