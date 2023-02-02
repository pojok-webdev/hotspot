<?php
Class Otentikasi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('padiauth');
        session_start();
    }
    function create(){
        $params = $this->input->post();
        $this->padiauth->createuser($params['name'],$params['email'],$params['password']);
    }
    function resetpassword(){}
    function changepassword(){}
    function login(){
        $params = $this->input->post();
        if ($this->padiauth->login($params['email'],$params['password'])){
            $_SESSION['email'] = $params['email'];
            redirect('/Manage/brand/1');
        }
//        echo $this->padiauth->getuser($params['email']);
    }
    function logout(){
        session_destroy();
        redirect('/main/index');
    }
    function index(){
        $this->load->view('auth/index');
    }
    function sessionstatus(){
        echo session_status();
    }
}