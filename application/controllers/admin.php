<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
     function __construct()
    {
	parent::__construct();
	$this->load->model('Mauth');
    $this->load->model('Mpenyakit');
    $this->load->model('Mproses');
    }
    
    public function header()
    {
        $data = array('title' => 'Sistem Pakar Gigi', 'login' => 0);
        $this->load->view('header',$data);    
    }
    
    function page(){
        $data['gejala'] = $this->Mpenyakit->selectAll($table='gejalapenyakit');
        $data['penyakit'] = $this->Mpenyakit->selectAll($table='penyakit');
        $data['saran'] = $this->Mpenyakit->selectAll($table='saran');
        $data['user'] = $this->Mpenyakit->selectAll($table='user');
        $this->header();
        $this->load->view('admin', $data);
        $this->load->view('footer');
        
    }
    
function hapus($db,$id)
    {
    switch($db){
       case'penyakit';
        $this->db->delete($db, array('id_penyakit' => $id));
                redirect('admin/page/lihatpenyakit');
                break;
            
         case'saran';
        $this->db->delete($db, array('id_saran' => $id));
                redirect('admin/page/lihatsaran');
                break;
            
        case'user';
        $this->db->delete($db, array('id_user' => $id));
        redirect('admin/page/lihatmember');
        break;
                
            default :
             $this->db->delete($db, array('id_penyakit' => $id));
                redirect('admin/page/lihatgejala');
        }
    }
    
function update($db,$param,$id)
{
    /*$db = $this->uri->segment(3);
    $param = $this->uri->segment(4);
    $id = $this->uri->segment(5);*/
    $data['edit'] = $this->Mproses->selectWhere($db, $param, $id);
    
    $this->header();
    $this->load->view('editadmin',$data);
    $this->load->view('footer');
}
    
    function terimaupdate($db, $id)
    {
        $data = array ( 'id' => $id,
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('gender'),
                        'level' => $this->input->post('level'));
        
        if($this->Mproses->edit($db, $data)) {
            redirect('admin/page/lihatmember');
        } else {
            redirect('admin/update/user/id_user/'.$id);
        }
        
        
    }

}