<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
     function __construct()
    {
	parent::__construct();
	$this->load->model('Mauth');
    }

    public function daftar()
    {
        $this->form_validation->set_rules('level', 'Level', array('required','min_length[3]'));
        $this->form_validation->set_rules('nama', 'Nama', array('required','min_length[3]'));
        $this->form_validation->set_rules('email', 'Email', array('required','valid_email'));
        $this->form_validation->set_rules('username', 'Username', array('required','min_length[3]'));
        $this->form_validation->set_rules('password', 'Password', array('required','min_length[3]','alpha_numeric'));
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', array('required','min_length[3]'));
        $this->form_validation->set_rules('gender', 'Gender', array('required','min_length[3]'));
       
        
        
        if ($this->form_validation->run() == FALSE)
                {
                        echo "<script>alert('Maaf Data gagal di input!');window.history.back();</script>";
                }
                else
                {
                        $data = array ( 'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('gender'),
                        'level' => $this->input->post('level'));
        
                        $insert = $this->Mauth->daftar($data);
                        
                        echo "<script>alert('Data berhasil di input!, silahkan login'); window.history.go(-2);</script>";
                        /*$data['notif']='Data anda sudah kami input, terima kasih !';

                        $this->load->view('header');
                        $this->load->view('signup', $data);
                        $this->load->view('footer');*/
                }
        
    }
    
    public function login()
    {
        $usern = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $cek = $this->Mauth->login($usern, $pass);
        
        if($cek->num_rows()>0){
            foreach($cek->result() as $u){
                $udata = array( 'id' => $u->id_user,
                                'nama' => $u->nama, 
                                'email' => $u->email,
                               'jkel' => $u->jenis_kelamin,
                               'lahir' => $u->tanggal_lahir,
                                'level' => $u->level,
                                'login' => 1);
            }
            
            $this->session->set_userdata($udata);
            
            if ($udata['level']!='admin'){
            redirect('home/index/',$this->session->userdata());
            } else {
                echo "<script>alert('Login Berhasil!');</script>";
                $this->admin();
            }
        } else {
            echo "<script>alert('Maaf usern atau pass anda salah!'); window.history.back();</script>";
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        session_destroy();
        
        redirect('home/');
    }
    
    public function admin(){
        redirect('admin/page', $this->session->userdata());
    }
    
}
?>

