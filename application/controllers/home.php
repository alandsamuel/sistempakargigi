<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
     function __construct()
    {
	parent::__construct();
	$this->load->model('mpenyakit');
    $this->load->model('Mproses');
    }

    public function header()
    {
        $data = array('title' => 'Sistem Pakar Gigi', 'login' => $this->session->userdata('login'));
        $this->load->view('header',$data);    
    }
    
	public function index()
	{
		$this->header();
        $this->load->view('index');
        $this->load->view('footer');
	}
    
    public function login()
    {
        $this->header();
        $this->load->view('login');
        $this->load->view('footer');
    }
    
    public function daftar()
    {
        $this->header();
        $this->load->view('signup');
        $this->load->view('footer');
    }
    
    public function informasi ()
    {
        $this->header();
        $this->load->view('informasi');
        $this->load->view('footer');
    }
    
    public function karies ()
    {
        $this->header();
        $this->load->view('karies');
        $this->load->view('footer');
    }
    
     public function pulpitis ()
    {
        $this->header();
        $this->load->view('pulpitis');
        $this->load->view('footer');
    }
    
     public function kankergusi ()
    {
        $this->header();
        $this->load->view('kankergusi');
        $this->load->view('footer');
    }
    
     public function periodontitis ()
    {
        $this->header();
        $this->load->view('periodontitis');
        $this->load->view('footer');
    }
    
     public function gingivitis ()
    {
        $this->header();
        $this->load->view('gingivitis');
        $this->load->view('footer');
    }
    
     public function absesgigi ()
    {
        $this->header();
        $this->load->view('absesgigi');
        $this->load->view('footer');
    }
    
      public function kalkulus ()
    {
        $this->header();
        $this->load->view('kalkulus');
        $this->load->view('footer');
    }
    
     public function stomatitis ()
    {
        $this->header();
        $this->load->view('stomatitis');
        $this->load->view('footer');
    }
    
     public function diagnosa ()
    {
        $this->header();
        if($this->session->userdata('login')==1){
            $this->cekpenyakit();
        } else {
            $this->load->view('login');
        }
        $this->load->view('footer');
    }
    
    
    public function cekpenyakit ()
    {
        $data['gejala']=$this->mpenyakit->selectAll($table='gejalapenyakit');
         $data['driwayat']=$this->Mproses->selectWhere($table='riwayat', $param='id_user', $id=$this->session->userdata('id'));
        
        
		$jumlah_data = count($data['driwayat']);
        $config['full_tag_open'] = '<p style="color:black;">';
        $config['full_tag_close'] = '</p>';
		$config['first_link'] = ' ';
        $config['last_link'] = ' ';
        $config['next_link'] = '&gt;&gt;';
        $config['prev_link'] = '&lt;&lt;';
		$config['base_url'] = URL.'index.php/home/diagnosa/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 6;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['riwayat'] = $this->Mproses->selectPagination($id=$this->session->userdata('id'), $config['per_page'], $from);
        
        $this->load->view('diagnosa', $data);
    }
  
    
    public function kritiksaran()
    {
        $saran = array(
        'nama' => $this->input->post('nama'), 
        'email' => $this->input->post('email'),
        'kritik' => $this->input->post('kritiksaran'));
        $this->load->model('Mproses');
        $query = $this->Mproses->kritiksaran($saran); 
    }
    
    
  public function tentang ()
    {
        $this->header();
        $this->load->view('tentang');
        $this->load->view('footer');
    }
    
      public function saran ()
    {
        $data['notif'] = $this->uri->segment(3);
        $this->header();
        $this->load->view('saran', $data);
        $this->load->view('footer');
    }
    
    public function logout()
    {
        session_destroy();
        redirect('home/login');
    }  
}
?>


