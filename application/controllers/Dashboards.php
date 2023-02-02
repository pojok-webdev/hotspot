<?php
Class Dashboards extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('dashboard');
    }
    function index(){
        $this->load->view('dashboard/index');
    }
    function dataharian(){
        echo json_encode($this->dashboard->getdataharian());
    }
    function dataclickbannerharian(){
        $params = $this->input->post();
        echo json_encode($this->dashboard->getdataclickbannerharian(array('name'=>$params['name'])));
    }
    function uniquevisitor(){
        $dt = $this->uri->segment(3);
        echo json_encode($this->dashboard->getuniquevisitor($dt));
    }
    function datavisitors(){
        $objs = $this->dashboard->getdatavisitors();
        echo '{"data":'.json_encode($objs['res']).'}';
    }
    function visitors(){
        $this->load->view('dashboard/visitors');
    }
}