<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {


public function __construct()
    {
        parent::__construct();
        $this->load->model('apotek');
        $this->load->helper('download');
    }
public function user(){
	$this->load->view('v_registrasi');
}


}

