<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Topdf extends CI_Controller {
 
    /**
     * Example: DOMPDF 
     *
     * Documentation: 
     * http://code.google.com/p/dompdf/wiki/Usage
     *
     */
    
    function __construct()
    {
        parent::__construct();
        $this->load->model("Mproses");
    }
    
    public function download($db,$p,$id) {   
        // Load all views as normal
        $data['hasil'] = $this->Mproses->selectWhere($db,$p,$id);
        
        $this->load->view('hasil',$data);
        // Get output html
        $html = $this->output->get_output();
         
        // Load library
        $this->load->library('dompdf_gen');
        $today = date('D-M-Y h:i:s');
        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream($today.".pdf",array('Attachment'=>1));
        //or without preview in browser
        //$this->dompdf->stream("welcome.pdf");
    }
}