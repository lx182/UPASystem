<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

	}

	function index()
	{
            $this->load->view('contenido/headers/header_admin');
            $this->load->view('contenido/body/estado_de_cuenta');
	}
}