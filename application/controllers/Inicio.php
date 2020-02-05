<?php 
/**
		 * 
		 */
class Inicio extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();	
	}
	function index()
	{
		$this->load->view('Inicio/cabecera');
		$this->load->view('Inicio/pie');
	}
}		
?>