<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

	}

	function index()
	{
            $this->load->view('header');
            $this->load->view('cajas/index');
            //$this->load->view('contenido/estado_de_cuenta');
	}
}