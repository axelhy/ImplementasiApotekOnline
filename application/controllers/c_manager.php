<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class c_manager extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
        $this->load->model('apotek');
        $this->load->helper('download');
	}

	public function manager(){
		$data=array(
                'obat'=>$this->apotek->getallobat(),
                'sup'=>$this->apotek->getallsup(),
                'pemasokan'=>$this->apotek->getallpemasokan()   
            );
		$this->load->view('v_tabelmanager',$data);
	}
}