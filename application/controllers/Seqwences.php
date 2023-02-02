<?php
Class Seqwences extends CI_Controller{
    function __construct(){
        parent::__construct();
        session_start();
    }
    function index(){
        $menustatus = $this->menu->getmenustatus('seqwences',1);
        //if($this->padiauth->isloggedin()){
            $this->load->view('seqwences/list',$menustatus);
        //}else{
          //  redirect('/main/index');
        //}
    }
    function get_datas(){
        $objs = $this->crud->read('seqwences',array('1'=>'1'));
        echo '{"data":'.json_encode($objs['res']).'}';
    }
}