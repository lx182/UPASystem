<?php

class Vistas extends CI_Controller {
    public function estado_de_cuenta_A_view(){
            $this->load->view('administrador/edoCuenta');
        }
    public function estado_de_cuenta_C_view(){
            $this->load->view('cajas/edoCuenta');
        }
        public function reportes_C_view(){
            $this->load->view('cajas/reportes');
        }
        public function conceptos_C_view(){
            $this->load->view('cajas/conceptos');
        }
        public function generarTabla_view(){
            $this->load->view('cajas/resultReports');
        }
            
}

?>