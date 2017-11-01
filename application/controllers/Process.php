<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {
    
    function __construct()
    {
		parent:: __construct();
		$this->load->model('Mproses');
		
	}
    
    public function header()
    {
        $data = array('title' => 'Sistem Pakar Gigi');
        $this->load->view('header',$data);    
    }
    
    function riwayatpenyakit(){
        $data['riwayat'] = $this->Mproses->selectAll($table='riwayat');
        $this->header();
        $this->load->view('admin', $data);
        $this->load->view('footer');
    }
    
  
    
    public function hitung()
    {
        $d=$this->input->post('gejala');        
        if(count($d)<3){
            echo "<script>alert('Maaf anda harus memilih lebih dari 2 gejala');window.history.back();</script>";
        }
        $p1 = $this->karies($d);
        $p2 = $this->pulpitis($d);
        $p3 = $this->periodontis($d);
        $p4 = $this->gingivitis($d);
        $p5 = $this->abses($d);
        $p6 = $this->kanker($d);
        $p7 = $this->calculus($d);
        $p8 = $this->stomatitis($d);
        
        $big=0;
        
        if($p1>$p2){$big=$p1; $hasil='Karies (Gigi Berlubang)';}
        else {$big=$p2;$hasil='Pulpitis (Radang Pulpa Gigi)';}
        if($big>$p3){$big=$big; $hasil=$hasil;}
        else {$big=$p3;$hasil='Periodontitis (Radang Jaringan Penyangga Gigi)';}
        if($big>$p4){$big=$big; $hasil=$hasil;}
        else {$big=$p4;$hasil='Gingivitis (Peradangan Gusi)';}
        if($big>$p5){$big=$big; $hasil=$hasil;}
        else {$big=$p5;$hasil='Abses Gigi';}
        if($big>$p6){$big=$big; $hasil=$hasil;}
        else {$big=$p6;$hasil='Kanker Gusi';}
        if($big>$p7){$big=$big; $hasil=$hasil;}
        else {$big=$p7;$hasil='Calculus (Karang Gigi)';}
        if($big>$p8){$big=$big; $hasil=$hasil;}
        else {$big=$p8;$hasil='Stomatitis (Radang Mulut)';}
        
        $bigx = round($big*100); 
        
        //input data ke riwayat
        $pil = join(',',$d);
        //$pil = NULL;
        //$pil = implode(",", $d);
        
        $input = array( 
            'nama' => $this->session->userdata('nama'),
            'pil' => $pil,
            'penyakit' => $hasil, 
            'nilaicf' => $big, 
            'id_user' => $this->session->userdata('id'));
        
        $qinput = $this->Mproses->inputData($input);
        
        $db = 'riwayat';
        $p = 'id_riwayat';
        $id_user = $this->session->userdata('id');
        $result= $this->Mproses->selectHasil($id_user);
        foreach ($result as $rr){
        $id_riwayat = $rr->id_riwayat;
        }
        
        $data['hasil'] = $this->Mproses->selectWhere($db,$p,$id_riwayat);
        $this->header();
        $this->load->view('hasil',$data);
        $this->load->view('footer');

        
    }
    
    public function karies($d)
    {
        $p = 1;
        $query = $this->Mproses->cari($d,$p);
        if(count($query)>1){
        $cf=0;
        $a =0;

        foreach($query as $c){
            $cfn[$a]=$c->cf_pakar;
            if($a==1){
                $cf = $cfn[0] + ($cfn[1] * (1 - $cfn[0]));
            } else {
                $cf = $cfn[$a] + ($cf * (1 - $cfn[$a]));
            }
            $a++;
        }
        
        $hasil = $cf;
        
        } else {
            $cf=0;
            foreach($query as $c){
            $cfn[0]=$c->cf_pakar;
            $cf = $cfn[0] + ($cfn[0] * (1 - $cfn[0]));
            
            }

            $hasil = $cf;
            
        }
        return $hasil;
    }
    
    

public function pulpitis($d)
    {
        $p = 2;
        $query = $this->Mproses->cari($d,$p);
        if(count($query)>1){
        $cf=0;
        $a =0;

        foreach($query as $c){
            $cfn[$a]=$c->cf_pakar;
            if($a==1){
                $cf = $cfn[0] + ($cfn[1] * (1 - $cfn[0]));
            } else {
                $cf = $cfn[$a] + ($cf * (1 - $cfn[$a]));
            }
            $a++;
        }
        
        $hasil = $cf;
        
        } else {
            
            $cf=0;
            foreach($query as $c){
            $cfn[0]=$c->cf_pakar;
            $cf = $cfn[0] + ($cfn[0] * (1 - $cfn[0]));
            
            }

            $hasil = $cf;
            
        }
        return $hasil;
    }
    
    public function periodontis($d)
    {
        $p = 3;
        $query = $this->Mproses->cari($d,$p);
        if(count($query)>1){
        $cf=0;
        $a =0;

        foreach($query as $c){
            $cfn[$a]=$c->cf_pakar;
            if($a==1){
                $cf = $cfn[0] + ($cfn[1] * (1 - $cfn[0]));
            } else {
                $cf = $cfn[$a] + ($cf * (1 - $cfn[$a]));
            }
            $a++;
        }
        
        $hasil = $cf;
        
        } else {
            $cf=0;
            foreach($query as $c){
            $cfn[0]=$c->cf_pakar;
            $cf = $cfn[0] + ($cfn[0] * (1 - $cfn[0]));
            
            }

            $hasil = $cf;
            
        }
        return $hasil;
    }
    
    public function gingivitis($d)
    {
        $p = 4;
        $query = $this->Mproses->cari($d,$p);
        if(count($query)>1){
        $cf=0;
        $a =0;

        foreach($query as $c){
            $cfn[$a]=$c->cf_pakar;
            if($a==1){
                $cf = $cfn[0] + ($cfn[1] * (1 - $cfn[0]));
            } else {
                $cf = $cfn[$a] + ($cf * (1 - $cfn[$a]));
            }
            $a++;
        }
        
        $hasil = $cf;
        
        } else {
            $cf=0;
            foreach($query as $c){
            $cfn[0]=$c->cf_pakar;
            $cf = $cfn[0] + ($cfn[0] * (1 - $cfn[0]));
            
            }

            $hasil = $cf;
            
        }
        return $hasil;
    }
    
    public function abses($d)
    {
        $p = 5;
        $query = $this->Mproses->cari($d,$p);
        if(count($query)>1){
        $cf=0;
        $a =0;

        foreach($query as $c){
            $cfn[$a]=$c->cf_pakar;
            if($a==1){
                $cf = $cfn[0] + ($cfn[1] * (1 - $cfn[0]));
            } else {
                $cf = $cfn[$a] + ($cf * (1 - $cfn[$a]));
            }
            $a++;
        }
        
        $hasil = $cf;
        
        } else {
            $cf=0;
            foreach($query as $c){
            $cfn[0]=$c->cf_pakar;
            $cf = $cfn[0] + ($cfn[0] * (1 - $cfn[0]));
            
            }

            $hasil = $cf;
            
        }
        return $hasil;
    }
    
    public function kanker($d)
    {
        $p = 6;
        $query = $this->Mproses->cari($d,$p);
        if(count($query)>1){
        $cf=0;
        $a =0;

        foreach($query as $c){
            $cfn[$a]=$c->cf_pakar;
            if($a==1){
                $cf = $cfn[0] + ($cfn[1] * (1 - $cfn[0]));
            } else {
                $cf = $cfn[$a] + ($cf * (1 - $cfn[$a]));
            }
            $a++;
        }
        
        $hasil = $cf;
        
        } else {
            $cf=0;
            foreach($query as $c){
            $cfn[0]=$c->cf_pakar;
            $cf = $cfn[0] + ($cfn[0] * (1 - $cfn[0]));
            
            }

            $hasil = $cf;
            
        }
        return $hasil;
    }
    
    public function calculus($d)
    {
        $p = 7;
        $query = $this->Mproses->cari($d,$p);
        if(count($query)>1){
        $cf=0;
        $a =0;

        foreach($query as $c){
            $cfn[$a]=$c->cf_pakar;
            if($a==1){
                $cf = $cfn[0] + ($cfn[1] * (1 - $cfn[0]));
            } else {
                $cf = $cfn[$a] + ($cf * (1 - $cfn[$a]));
            }
            $a++;
        }
        
        $hasil = $cf;
        
        } else {
            $cf=0;
            foreach($query as $c){
            $cfn[0]=$c->cf_pakar;
            $cf = $cfn[0] + ($cfn[0] * (1 - $cfn[0]));
            
            }

            $hasil = $cf;
            
        }
        return $hasil;
    }
    
    public function stomatitis($d)
    {
        $p = 8;
        $query = $this->Mproses->cari($d,$p);
        if(count($query)>1){
        $cf=0;
        $a =0;

        foreach($query as $c){
            $cfn[$a]=$c->cf_pakar;
            if($a==1){
                $cf = $cfn[0] + ($cfn[1] * (1 - $cfn[0]));
            } else {
                $cf = $cfn[$a] + ($cf * (1 - $cfn[$a]));
            }
            $a++;
        }
        
        $hasil = $cf;
        
        } else {
            $cf=0;
            foreach($query as $c){
            $cfn[0]=$c->cf_pakar;
            $cf = $cfn[0] + ($cfn[0] * (1 - $cfn[0]));
            
            }

            $hasil = $cf;
            
        }
        return $hasil;
    }
    
    public function inputgejala()
    {
        if($this->Mproses->inputgejala()==TRUE){
            redirect('admin/page/tambahgejala/1');
        } else {
            redirect('admin/page/tambahgejala/0');
        }
    }
    
    public function inputpenyakit()
    {
        if($this->Mproses->inputpenyakit()==TRUE){
            redirect('admin/page/tambahgejala/1');
        } else {
            redirect('admin/page/tambahgejala/0');
        }
    }
    
    public function lihatHasil($db,$p,$id)
    {
        $data['hasil'] = $this->Mproses->selectWhere($db,$p,$id);
        
        $this->header();
        $this->load->view('hasil',$data);
        $this->load->view('footer');
        
    }
    
}
