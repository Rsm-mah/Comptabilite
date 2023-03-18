<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {


	public function uploadFile()
	{
		$this->load->library('upload');

        $config['upload_path'] = './uploads/'; // directory where uploaded files are saved
        $config['allowed_types'] = 'gif|jpg|png|pdf'; // allowed file types
        $config['max_size'] = '20000'; // maximum file size in kilobytes
        $config['max_width'] = '1024'; // maximum image width
        $config['max_height'] = '768'; // maximum image height

        $this->upload->initialize($config);


        if (!$this->upload->do_upload('nif')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('test_csv', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('welcome_message', $data);
        }
        
        //file_name
	}		
}