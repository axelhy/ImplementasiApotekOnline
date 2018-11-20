<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {


public function __construct()
    {
        parent::__construct();
        $this->load->model('apotek');
        $this->load->helper('download');
    }
public function admin()
	{

		$data=array(
                'obat'=>$this->apotek->getallobat(),
                'sup'=>$this->apotek->getallsup(),
                'pemasokan'=>$this->apotek->getallpemasokan()   
            );
		$this->load->view('v_tabeladmin',$data);
	}


public function tambah()
    {
                     
                    $data=array(
                        'idSupplier'=>$this->input->post('nama'),
                        'namSupplier'=>$this->input->post('nik')
             
                    );
                    $this->load->model('apotek');
                    $this->apotek->pemasok($data);
                    $this->load->view('v_admin',$data);
    }

public function del_obat()
    {
        $idobat=$this->input->post('idobat');
        $hapus=$this->apotek->delobat($idobat);
        if ($hapus){
            $this->session->set_flashdata('alert','sukses_hapus');
            redirect('c_admin/admin');
        }else {
            echo "<script>alert('gagal hapus data')</script>";
        }
    }

    public function del_pemasok()
    {
        $idpemasok=$this->input->post('idpemasok');
        $hapus=$this->apotek->delpemasok($idpemasok);
        if ($hapus){
            $this->session->set_flashdata('alert','sukses_hapus');
            redirect('c_admin/admin');
        }else {
            echo "<script>alert('gagal hapus data')</script>";
        }
    }

    public function del_pemasokan()
    {
        $idpemasokan=$this->input->post('idpemasokan');
        $hapus=$this->apotek->delpemasokan($idpemasokan);
        if ($hapus){
            $this->session->set_flashdata('alert','sukses_hapus');
            redirect('c_admin/admin');
        }else {
            echo "<script>alert('gagal hapus data')</script>";
        }
    }


}

