<?php
class mpenyakit extends CI_Model{
    
   function selectAll($table)
   {
        return $this->db->get($table)->result();
   }
    
   function tambah($data , $t){
       
       $this->db->insert($t, $data);
       
   }
    
    function cariinfo($page){
        $this->db->select('*');
        $this->db->from('informasi');
        $this->db->where('id_informasi',$page);
        
        return $this->db->get()->result(); //return informasi
    }
}
?>