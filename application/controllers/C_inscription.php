<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_inscription extends CI_Controller {

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
		$data['genre'] = $this->genre->getAllGenre();

		$this->load->view('inscription',$data);
	}	

	public function inscriptionprofil()
	{
		$data['nom']  = $this->input->post('nom');
		$data['prenom'] = $this->input->post('prenom');
		$data['genre'] = $this->input->post('genre');
		$data['date_naissance'] = $this->input->post('date_naissance');
		$data['email'] = $this->input->post('email');
		$data['mot_de_passe'] = $this->input->post('mot_de_passe');

		$this->load->view('inscriptionprofil',$data);
	}

	public function insertion()
	{
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$idgenre = $this->input->post('genre');
		$date_naissance = $this->input->post('date_naissance');
		$email = $this->input->post('email');
		$mot_de_passe = $this->input->post('mot_de_passe');
		$taille = $this->input->post('taille');
		$poid = $this->input->post('poid');

		$this->identifiant->insertIdentifiant($email,$mot_de_passe);
		$ididentifiant = $this->identifiant->getIdentifiant($email,$mot_de_passe);

		$this->utilisateur->insertUtilisateur($ididentifiant,$nom,$prenom,$idgenre,$date_naissance,$taille,$poid);

		redirect('c_login');
	}
    
}
