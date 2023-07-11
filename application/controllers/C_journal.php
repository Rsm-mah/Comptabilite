<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_journal extends CI_Controller {

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

    public function journal($idcode_journal) 
    {
        $data['idcode_journal'] = $idcode_journal;
        $data['mois'] = $this->journal->selectallMois();
        $data['allCodeJournal'] = $this->cj->getAllCodeJournal();
        $data['journalById'] = $this->journal->getJournalById($idcode_journal);
        $data['sumdebitBalance'] = $this->balance->sumdebitBalance();
        $data['sumcreditBalance'] = $this->balance->sumcreditBalance();
        $data['detail_codeJournal'] = $this->cj->getCodeJournal($idcode_journal);
        
        $verif = $this->journal->CalculSoldeById($idcode_journal);
        $value = intval($verif[0]['solde']);
        if ($value < 0) {
            $data['solde'] = 'Solde crediteur';
            $data['valeur_solde'] = -1 * $value;
        }else if ($value > 0) {
            $data['solde'] = 'Solde debiteur';
            $data['valeur_solde'] = $value;
        }else if ($value == 0) {
            $data['solde'] = 'Solde';
            $data['valeur_solde'] = 0;
        }


		$this->load->view('header',$data);
		$this->load->view('journal',$data);
		$this->load->view('footer');
    }

    public function addJournal()
	{
        $idcode_journal = $this->input->post('idcode_journal');

        $mois = $this->input->post('mois');
        $jour = $this->input->post('jour');
        $annee = $this->input->post('annee');
        // $time = strtotime($annee + '-' + $mois + '-' +$jour);
        // $date = date.timezone ('Y-m-d',$time);

		$num_piece = $this->input->post('num_piece');
		$ref_piece = $this->input->post('ref_piece');
		$num_compte = $this->input->post('num_compte');
		$ecriture = $this->input->post('ecriture');
		$devise = $this->input->post('devise');
		$quantite = $this->input->post('quantite');
		$montant_devise = $this->input->post('montant_devise');
		$debit = $this->input->post('debit');
		$credit = $this->input->post('credit');

        
        
		$this->journal->insertJournal($idcode_journal, $mois, $jour, $num_piece, $ref_piece, $num_compte, $ecriture, $devise, $quantite, $montant_devise, $debit, $credit);
        
        $num_compte_mere = $this->balance->selectcompteMere($num_compte);
    
        $num_compte_balance = array();
        $num_compte_balance = $this->balance->selectNumCompteBalance();
        $count = 0;

        $this->grand_livre->insertGrandlivre($num_compte,$annee . '-' . $mois . '-' . $jour,$num_piece,$ref_piece,$ecriture,$debit,$credit);

        for ($i=0; $i < count($num_compte_balance); $i++) { 
            if ($num_compte_balance[$i]['num_compte'] != $num_compte_mere[0]['numero']) {
                $count++;
            }
        }

        if ($count == count($num_compte_balance)) {
            $this->balance->insertBalance($num_compte_mere[0]['numero'], $num_compte_mere[0]['intitule'], $debit, $credit);
        }else if($count != count($num_compte_balance)){
            $select = $this->balance->selectBalance($num_compte_mere[0]['numero']);
            if ($debit != 0 && $credit == 0) {
                $new_debit = intval($select[0]['debit'])+$debit;
                $this->balance->updateDebitBalance($select[0]['num_compte'],$new_debit);
            }else if($credit != 0 && $debit == 0) {
                $new_credit = intval($select[0]['credit'])+$credit;
                $this->balance->updateCreditBalance($select[0]['num_compte'],$new_credit);
            }
        }

        $select = $this->balance->selectBalance($num_compte_mere[0]['numero']);
        if (intval($select[0]['debit']) > intval($select[0]['credit'])) {
            $calcul = intval($select[0]['debit']) - intval($select[0]['credit']);
            $this->balance->updateBalance($select[0]['num_compte'],$calcul,0);
        }else if(intval($select[0]['debit']) < intval($select[0]['credit'])) {
            $calcul = (intval($select[0]['debit']) - intval($select[0]['credit'])) * -1;
            $this->balance->updateBalance($select[0]['num_compte'],0,$calcul);
        }
        

		$this->journal($idcode_journal);

	}
   
}
