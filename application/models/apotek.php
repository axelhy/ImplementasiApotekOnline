<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class apotek extends CI_Model
{
	
	function __construct()
	{
		 parent::__construct();
        $this->table_name = 'supplier';
	}

	public function getadmin($username){
        $this->db->where('unameAdmin',$username);
        $admin= $this->db->get('admin');
        return $admin->row_array();
    }

    public function getallobat()
    {
        $data=$this->db->get('obat');
        return $data->result_array();
    }

    public function getallpemasokan()
    {
        $data=$this->db->get('pemasokan');
        return $data->result_array();
    }

    public function getallsup()
    {
        $data=$this->db->get('supplier');
        return $data->result_array();
    }

    public function getobat($id){
        $this->db->where('idObat',$id);
        $dataobat=$this->db->get('obat');
        return $dataobat->row_array();
    }

 public function pemasok($data){
        $this->db->insert('supplier',$data);
    }

    public function konsumen($data){
        $this->db->insert('konsumen',$data);
    }

    public function delobat($idobat)
    {
        $table = 'obat';
        $this->db->where('idObat',$idobat);
        $delete = $this->db->delete($table);
        if ($delete){
            return TRUE;
        }else {
            return FALSE;
        }
    }

    public function delkeranjang($idobat)
    {
        $table = 'keranjang';
        $this->db->where('obat',$idobat);
        $delete = $this->db->delete($table);
        if ($delete){
            return TRUE;
        }else {
            return FALSE;
        }
    }

    public function delallkeranjang()
    {
        $delete=$this->db->query("DELETE  FROM keranjang WHERE 1");
        if ($delete){
            return TRUE;
        }else {
            return FALSE;
        }
    }

public function delpemasok($idpemasok)
    {
        $table = 'supplier';
        $this->db->where('idSupplier',$idpemasok);
        $delete = $this->db->delete($table);
        if ($delete){
            return TRUE;
        }else {
            return FALSE;
        }
    }

    public function delpemasokan($idpemasokan)
    {
        $table = 'pemasokan';
        $this->db->where('idPemasokan',$idpemasokan);
        $delete = $this->db->delete($table);
        if ($delete){
            return TRUE;
        }else {
            return FALSE;
        }
    }


    public function deltransaksi($idtransaksi)
    {
        $table = 'transaksi';
        $this->db->where('idTransaksi',$idtransaksi);
        $delete = $this->db->delete($table);
        if ($delete){
            return TRUE;
        }else {
            return FALSE;
        }
    }

   public function getallobatk($pemilik){
    
    $this->db->where('pemilik',$pemilik);
    $data=$this->db->get('keranjang');
    return $data->result_array();
    }

    public function cari($inputan){
        $this->db->like('namaObat',$inputan);
        $data=$this->db->get('obat');
    return $data->result_array();
    }

    public function gettransaksi($inputan){
        $this->db->where('idTransaksi',$inputan);
        $data=$this->db->get('transaksi');
    return $data->result_array();
    }


    public function getcustomer($customer){
    
    $this->db->where('username',$customer);
    $data=$this->db->get('konsumen');
    return $data->result_array();
    }

    public function getallobatkk(){
    $data=$this->db->get('keranjang');
    return $data->result_array();
    }

    public function getalltransaksi(){
        $data=$this->db->get('transaksi');
        return $data->result_array();
    }
   

     public function addobat($data){
        $this->db->insert('obat',$data);
    }
    public function transaksi($data){
        $this->db->insert('transaksi',$data);
    }

    public function addkeranjang($datas){
        
        $this->db->insert('keranjang',$datas);
    }

public function updjumlah($data,$id)
    {
        $this->db->where('obat',$id);
        $this->db->update('keranjang',$data);
    }

    public function updtransaksi($data,$id)
    {
        $this->db->where('idTransaksi',$id);
        $this->db->update('transaksi',$data);
    }

}