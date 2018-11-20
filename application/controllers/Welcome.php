<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent ::__construct();
        $this->load->model('apotek');
    }
	
	public function index()
	{

		$this->load->view('v_login');
	}

    public function status()
    {
        $this->load->view('v_status');
    }

    public function cekstatus()
    {

        $data= array(
            'ceki'=>$this->apotek->gettransaksi($this->input->post('cek')),



    );
        $this->session->set_flashdata('cek','cek');
        $this->load->view('v_status',$data);
    }


	public function login()
	{
		$this->load->view('v_login');
	}
	public function listobat()
	{
        if ($this->session->userdata('user')=='loginuser'){
        $data=array(
                'obat'=>$this->apotek->getallobat(),
                'sup'=>$this->apotek->getallsup(),
                'pemasokan'=>$this->apotek->getallpemasokan()   
            );
		$this->load->view('v_listobat',$data);
    }else {
        $this->session->set_flashdata('logindulu','logiuser');
        redirect('welcome');
    }
	}

    public function cari()
    {
        if ($this->session->userdata('user')=='loginuser'){
        $data=array(
                'obat'=>$this->apotek->cari($this->input->post('inputan')),
                'sup'=>$this->apotek->getallsup(),
                'pemasokan'=>$this->apotek->getallpemasokan()   
            );
        $this->load->view('v_listobat',$data);
    }else {
        $this->session->set_flashdata('logindulu','logiuser');
        redirect('welcome');
    }
    }



	public function detailobat()
	{
        if ($this->session->userdata('user')=='loginuser'){
		$this->load->view('v_detailobat');
        }else {
            $this->session->set_flashdata('logindulu','logiuser');
        redirect('welcome');
    }
    }
	public function pembayaran()
	{
        if ($this->session->userdata('user')=='loginuser'){
        $data['konsumen']=array(
                        
                        'namaKonsumen'=>$this->input->post('nama'),
                        'noHP'=>$this->input->post('noHP'),
                        'Alamat'=>$this->input->post('alamat'),
                        'obat'=>$this->apotek->getallobat(),
                        'sup'=>$this->apotek->getallsup(),
                        'pemasokan'=>$this->apotek->getallpemasokan()  
             
                    );
        $this->load->model('apotek');
        $data['keranjang']=$this->apotek->getallobatk($this->session->userdata('nama'));
		$this->load->view('v_pembayaran',$data);
    }else {
        $this->session->set_flashdata('logindulu','logiuser');
        redirect('welcome');

	}

}

	



	public function login2()
    {
    	$this->load->model('apotek');
        $this->db->where('unameAdmin',$this->input->post('loginUsername'));
        $this->db->where('pwAdmin',$this->input->post('loginPassword'));
        $a= $this->db->get('admin');
        $this->db->where('username',$this->input->post('loginUsername'));
        $this->db->where('password',$this->input->post('loginPassword'));
        $u= $this->db->get('konsumen');

                    // FUNGSI  LOGIN  USER ///
        if ($u->num_rows()==1) {
            $this->session->set_userdata('nama',$this->input->post('loginUsername'));
            $this->session->set_userdata('user','loginuser');
            redirect('welcome/listobat');
        }
                    //  ---FUNGSI  LOGIN  USER ///
        //  =========================================================================
                    //  FUNGSI  LOGIN ADMIN ///
       if ($a->num_rows()==1 ) {
            $this->load->model('apotek');
            // $this->session->set_userdata('udah',$this->input->post('inputEmail'));
            // $this->session->set_userdata('udah2','loginadmin');
            $this->session->set_userdata('nama',$this->input->post('loginUsername'));
            $this->session->set_userdata('admin','adminlogin');
            redirect('c_admin/admin'.$this->session->userdata('namaadmin'));
        }
                    //  ---FUNGSI  LOGIN  ADMIN ///
        //  =========================================================================
        //  FUNGSI  LOGIN  JIKA SALAH USERNAME DAN PASSWORD ///
        else{
            $this->session->set_flashdata('info','*invalid username or  password ');
            redirect('Welcome/login');
        }
                    //  ---FUNGSI  LOGIN  JIKA SALAH USERNAME DAN PASSWORD ///
        //  =========================================================================
    }

public function keranjang()
    {
        if ($this->session->userdata('user')=='loginuser'){
        $data=array(
                'keranjang'=>$this->apotek->getallobatk($this->session->userdata('nama')),
                'obat'=>$this->apotek->getallobat(),
                'sup'=>$this->apotek->getallsup(),
                'pemasokan'=>$this->apotek->getallpemasokan()   
            );
        $this->load->view('v_keranjang',$data);
    }else{ 
        $this->session->set_flashdata('logindulu','logiuser');
        redirect('welcome');
    }
    }
    
    public function del_keranjang()
    {
        $idobat=$this->input->post('idobat');
        $hapus=$this->apotek->delkeranjang($idobat);
        if ($hapus){
            $this->session->set_flashdata('alert','sukses_hapus');
            redirect('welcome/keranjang');
        }else {
            echo "<script>alert('gagal hapus data')</script>";
        }
    }

     public function delall()
    {
        
        $hapus=$this->apotek->delallkeranjang();
        if ($hapus){
            $this->session->set_flashdata('alert','sukses_hapus');
            redirect('welcome/keranjang');
        }else {
            echo "<script>alert('gagal hapus data')</script>";
        }
    }

    public function inputData()
    {
        $this->load->model('apotek');
        $data['total'] =$this->input->post('total');
        $data['customer']=$this->apotek->getcustomer($this->session->userdata('nama'));  
        $this->load->view('v_datadiri',$data);
    }

    public function getobat($id)
    {
        if ($this->session->userdata('user')=='loginuser'){
        $data = array();
        $data['idObat']=$id;
        $data['dataobat'] = $this->apotek->getobat($id);
        $this->load->view('v_detailobat', $data);
    }else {
        $this->session->set_flashdata('logindulu','logiuser');
        redirect('welcome');
    }
    }

    public function addkeranjang($id)
    {
        $obat = $this->db->get_where('keranjang', array('obat' => $id));
        if ($obat->num_rows() > 0  )
        {
            $data = array();
        
        $data['dataobat'] = $this->apotek->getobat($id);
           $this->load->view('v_detailobat', $data); 
        }
        else
        {
        $data = array();
        $jml=$this->input->post('jumlah');
        $hrg=$this->input->post('harga');
        $total=$jml*$hrg;
        $datas=array(
                    'obat'=>$id,
                    'jumlah'=>$this->input->post('jumlah'),
                    'harga'=>$this->input->post('harga'),
                    'pemilik'=>$this->input->post('pemilik'),
                    'total'=>$total
        );
        $data['dataobat'] = $this->apotek->getobat($id);
        $this->load->model('apotek');
        $this->apotek->addkeranjang($datas);
        $this->load->view('v_detailobat', $data);
        }
        
    }


public function editjumlah($id)
    {
        $data = array(
                    'obat'=>$id,
                    'jumlah'=>$this->input->post('jumlah'),
                    'harga'=>$this->input->post('harga'),
                    'total'=>$this->input->post('totalper')
        );
         $this->load->model('apotek');
        $this->apotek->updjumlah($data, $id);
         redirect('welcome/keranjang');
}
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

    public function addkonsumen()
    {
                     $this->load->model('apotek');
                    // $datas=array(
                        
                    //     'namaKonsumen'=>$this->input->post('nama'),
                    //     'noHP'=>$this->input->post('noHP'),
                    //     'Alamat'=>$this->input->post('alamat'),
                         
             
                    // );
                    // $datat=array(
                        
                    //     'idKonsumen'=>$this->input->post('idkon'),
                    //     'idObat'=>$this->input->post('idobat'),
                    //     'statusPesanan'=>$this->input->post('statusp'),
                    //     'statusPembayaran'=>$this->input->post('statuspem'),
                    //     'tglTransaksi'=>$this->input->post('tgl'),
                    //     'totalBiaya'=>$this->input->post('tot')
                         
             
                    // );

                     
                     
                    $data=array(
                        'keranjang'=>$this->apotek->getallobatk($this->session->userdata('nama')),
                        'obat'=>$this->apotek->getallobat(),
                        'sup'=>$this->apotek->getallsup(),
                        'pemasokan'=>$this->apotek->getallpemasokan()
                     );

                    
                    $this->load->model('apotek');
                    // $this->apotek->konsumen($datas);
                     $this->apotek->transaksi($datat);
                    $this->session->set_flashdata('transaksi','sukses');
                    $this->load->view('v_listobat',$data);
    }

public function logout(){
        $this->session->sess_destroy();
        redirect('welcome');
    }
    
    



    function list(){
        // konfigurasi class pagination
        $config['base_url']=base_url()."index.php/welcome/listobat";
            $config['total_rows']= $this->db->query("SELECT * FROM obat;")->num_rows();
            $config['per_page']=12;
        $config['num_links'] = 2;
            $config['uri_segment']=3;
            $config['first_link']='< Pertama ';
        $config['last_link']='Terakhir > ';
        $config['next_link']='> ';
        $config['prev_link']='< ';
            $this->pagination->initialize($config);
 
        // konfigurasi model dan view untuk menampilkan data
        $this->load->model('apotek');
        $data['dataobat']=$this->apotek->getallobat($config);
        $this->load->view('v_listobat', $data);
    }
}
