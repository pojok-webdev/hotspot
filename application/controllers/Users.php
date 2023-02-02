<?php
Class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
        session_start();
    }
    function index(){
        if($this->padiauth->isloggedin()){
            $menustatus = $this->menu->getmenustatus('users',1);
            $this->load->view('users/list',$menustatus
        );            
        }else{
            redirect('/main/index');
        }
    }
    function register(){
        $menustatus = $this->menu->getmenustatus('users',1);
        $this->load->view('users/register',$menustatus);
    }
    function get_datas(){
        $objs = $this->crud->read('users',array('1'=>'1'));
        echo '{"data":'.json_encode($objs['res']).'}';
    }
    function update(){
        $params = $this->input->post();
        echo json_encode($this->crud->update('users',array(
            'columns'=>array(
                'name'=>$params['name'],
                'email'=>$params['email']
            ),
            'conditions'=>array(
                'email'=>$params['email']
            )
        )));
    }
    function save(){
        $params = $this->input->post();
        $this->load->library('auth');
        echo json_encode($this->auth->create_user($params['name'],$params['password'],$params['email']));
/*        echo json_encode($this->crud->save('users',array(
            'name'=>$params['name'],'email'=>$params['email']
        )));*/
    }
    function changepassword(){
        $params = $this->input->post();
        echo json_encode($this->padiauth->changepassword($_SESSION['email'],$params['password']));
    }
}