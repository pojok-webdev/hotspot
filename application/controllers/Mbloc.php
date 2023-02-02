<?php
Class Mbloc extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->load->view('mbloc/index');
    }
    function login(){
        $this->load->view('mbloc/login_oldd');
    }
}