<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class formc_tambah_obat extends CI_Controller {

    //    FUNGSI LOAD FORM UPLOAD GALERY
    public function index()
	{
		$this->load->view('form_tambah_obat');
	}
//    ---FUNGSI LOAD FORM UPLOAD GALERY
//  ===============================================================================================
//    FUNGSI UPLOAD GALERY
	public function upload()
	{
	    $config['upload_path']          = './DATAIMAGE/';
	    $config['allowed_types']        = 'jpg||png||mkv';
	    $config['max_size']             = 8388608;

	    $this->load->library('upload', $config);

	    if ( ! $this->upload->do_upload())
	    {
	        $data['asd']= $this->upload->display_errors();
	        $this->load->view('form_tambah_obat',$data);
	    }
	    else
	    {
	        $this->load->model('apotek');
	        $file_data= $this->upload->data();
	        $data=array(
	            'idObat'=>$this->input->post('idobat'),
	            'namaObat'=>$this->input->post('nama'), 
	            'stock'=>$this->input->post('stock'), 
	            'keteranganKhasiat'=>$this->input->post('ket'), 
	            'harga'=>$this->input->post('harga'),
	            'foto'=>$file_data['file_name']
               

            );
	        $this->apotek->addobat($data);
	        $this->session->set_flashdata('alert','sukses_upload');
	        redirect('c_admin/admin',$data);
	    }
	}
//    ---FUNGSI  UPLOAD GALERY
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
