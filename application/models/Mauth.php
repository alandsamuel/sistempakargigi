<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MAuth extends CI_Model{
    
   public function daftar($data)
   {
		$this->db->insert('user', $data);
   }
    
   public function login($u , $p)
   {
       $this->db->select('*');
       $this->db->from('user');
       $this->db->where('username', $u);
       $this->db->where('password', $p);
       
       return $this->db->get();
   }
    
}
?>