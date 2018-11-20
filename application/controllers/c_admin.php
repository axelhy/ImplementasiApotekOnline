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
        if ($this->session->userdata('admin')=='adminlogin'){
		$data=array(
                'obat'=>$this->apotek->getallobat(),
                'sup'=>$this->apotek->getallsup(),
                'pemasokan'=>$this->apotek->getallpemasokan(),
                'transaksi'=>$this->apotek->getalltransaksi()
            );
		$this->load->view('v_tabeladmin',$data);
    }else {
        $this->session->set_flashdata('logindulu','logiadmin');
        redirect('Welcome');
    }
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

    public function del_transaksi()
    {
        $idtransaksi=$this->input->post('idtransaksi');
        $hapus=$this->apotek->deltransaksi($idtransaksi);
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


public function edit_transaksi (){
    $data = array(
                        'idTransaksi'=>$this->input->post('idtransaksi'),
                        'idKonsumen'=>$this->input->post('namakonsumen'),
                        'idObat'=>$this->input->post('obat'),
                        'statusPesanan'=>$this->input->post('sp'),
                        'statusPembayaran'=>$this->input->post('spembayaran'),
                        'tglTransaksi'=>$this->input->post('tanggal'),
                        'totalBiaya'=>$this->input->post('total')
        );
         $this->load->model('apotek');
        $this->apotek->updtransaksi($data,$this->input->post('idtransaksi') );
         redirect('c_admin/admin');
}

}

