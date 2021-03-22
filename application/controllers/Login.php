<?php 

defined('BASEPATH') OR exit('ação não permitida');

class login extends CI_Controller{

    public function index(){

    // [email] => admin@admin
    // [password] => 12345

    //   echo '<pre>';
    //  print_r($this->input->post());
    //  exit();

        $identity = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $remember = FALSE;
        if($this->ion_auth->login($identity, $password , $remember)){
            redirect('home');
        }else{
            echo 'erro de validação';
            $this->load->view('layout/header');
            $this->load->view('login/index');
    
        }


       
    }
    
}
