<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproses extends CI_Model {
    
      function selectWhere($table, $param, $id)
   {
          $this->db->select('*');
          $this->db->from($table);
          $this->db->where($param,$id);
          
        return $this->db->get()->result();
   }
    
    function selectHasil($id)
    {
            
        $this->db->select('id_riwayat');
        $this->db->from('riwayat');
        $this->db->where('id_user',$id);
        $this->db->order_by('id_riwayat', 'DESC');
        $this->db->limit(1);
        
        return $this->db->get()->result();
        
    }
    
    function edit($db, $data)
    {
        return $this->db->replace($db,$data);
    }
    
    function selectPagination($id, $number,$offset)
    {
        $this->db->select('*');
        $this->db->from('riwayat');
        $this->db->where('id_user',$id);
    
        return $this->db->get('',$number,$offset)->result();
    }
    
    function cari($d,$p)
    {
            $this->db->select('*');
            $this->db->from('gejalapenyakit');
            $this->db->where_in('id_gejala',$d);
            $this->db->where('id_penyakit',$p);
            $this->db->order_by('id_gejala', 'ASC');

        return $this->db->get()->result();
    }
    
    function kritiksaran($saran)
    {
        if($this->db->insert('saran',$saran)==TRUE){
        redirect('home/saran/1');
        } else {
        redirect('home/saran/2');
        }
        
    }
    
    public function saran()
    {
        $this->db->select('*');
        $this->db->from('saran');
        return $this->db->get()->result();
    }
 
    public function inputgejala()
    {
        $data = array('id_penyakit' => $this->input->post('penyakit'), 
                      'gejala' => $this->input->post('namagejala'),
                      'cf_pakar' => $this->input->post('cf_pakar'));
        
        $this->db->insert('gejalapenyakit',$data);
    }
    
    public function inputpenyakit()
    {
        $data = array('namapenyakit' => $this->input->post('namapenyakit'));
        
        $this->db->insert('penyakit',$data);
    }
    
    public function cekpenyakit()
    {
        $this->db->select('*');
        $this->db->from('riwayat');
        return $this->db->get()->result();
    }
    
    public function inputData($data)
    {
        $this->db->insert('riwayat', $data);
        
    }
}


        