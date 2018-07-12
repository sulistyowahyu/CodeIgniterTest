<?php

class Beranda extends CI_Controller{

    public function __construct(){
        parent::__construct();


        if(!$this->session->userdata('isLogin')){
            redirect('login');
        }

    }    
    
    public function index(){

        $data['menu']="beranda";
        $this->load->view('template', $data);

    }


    public function keluar(){

        $this->session->sess_destroy();
        redirect('login');

    }

}