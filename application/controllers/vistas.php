<?php

class Vistas extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        require_once 'openid.php';
    }

    public function index()
    {
        $this->load->view('header');
        if($this->session->userData('matUser')){
            $this->load->view('cajas/index');
        }else{
                $openid = new LightOpenID(base_url().'index.php');
                $openid->identity = 'https://www.google.com/accounts/o8/id';
                $openid->required = array(
                    'namePerson/first',
                    'namePerson/last',
                    'contact/email',
                    'birthDate', 
                    'person/gender',
                    'contact/postalCode/home',
                    'contact/country/home',
                    'pref/language',
                    'pref/timezone',  
                );
        //  $openid->returnUrl = 'http://localhost/login_thirdparty/login_google.php';

            $openid->returnUrl = base_url().'index.php/vistas/loginAuth';

        //  echo '<a href="'.$openid->authUrl().'">Login with Google</a>';

                $data['openid'] = $openid;
                $this->load->view('login/login', $data);
                //
        
        }
    }

    public function loginAuth()
    {
         $openid = new LightOpenID(base_url().'/index.php');

        if($openid->mode)
        {
            if($openid->mode == 'cancel')
            {
                echo "User has canceled authentication !";
            }
            elseif($openid->validate())
            {
                $data = $openid->getAttributes();
                $this->session->set_userData('nombre',$data['namePerson/first']." ".$data['namePerson/last']);
                $this->session->set_userData('matUser', strtoupper( substr($data['contact/email'], 0, 8)));
    //          $
                 redirect(base_url()."index.php");
//              echo "<meta http-equiv = 'refresh' content = '0; url=http://speechwithmilo.com/speechtherapy/adminpanel/'>";
            }
            else
            {
                echo "The user has not logged in";
            }
        }
        else
        {
            echo "Go to the login page to logged in";
        }
    }
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
        public function agregarCon_view(){
            $this->load->view('cajas/agregarConcepto');
        }
        public function asignarCon_view(){
            $this->load->view('cajas/asignarConcepto');
        }

        public function logout() {
        $this->session->sess_destroy();
        header("Location: " . base_url()."index.php");
    }
            
}

?>