<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class formc_addpemasok extends CI_Controller {

	public function __construct()
    {
        parent ::__construct();
        $this->load->model('apotek');
    }

    //    FUNGSI LOAD FORM 
    public function index()
	{
		$this->load->view('form_addpemasok');
	}
//    ---FUNGSI LOAD FORM 
//  ===============================================================================================
//    FUNGSI 
	public function add()
	{
                	 
                    $data=array(
                        'idSupplier'=>$this->input->post('idpsk'),
                        'namSupplier'=>$this->input->post('namapsk')
             
                    );
                    $this->load->model('apotek');
                    $this->apotek->pemasok($data);
                    $this->load->view('v_admin',$data);
	}
//    ---FUNGSI  
//  ===============================================================================================
//      FUNGSLI LOGOUT
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Welcome');
    }
 //      ---FUNGSLI LOGOUT
//  ===============================================================================================
}
