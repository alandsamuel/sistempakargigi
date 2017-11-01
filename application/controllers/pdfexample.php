<?php 
class pdfexample extends CI_Controller{
    function __construct() { 
		parent::__construct();
	} 
		
	function pdf()
	{
		$this->load->helper('pdf_helper');
		$data = array('Title' => array('Asik'));
		$this->load->view('pdfreport', $data);
	}
      
}
?>