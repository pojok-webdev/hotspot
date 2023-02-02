<?php
Class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('crud');
    }
    function index__(){
        $this->load->view('external/login');
    }
    function getUserIP(){
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
    }
    function getlocation($ip){
        return json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    }
    function index(){
        //print_r($this->getlocation($this->getUserIP()));
        $this->crud->save('counter',array('ipaddress'=>$this->getUserIP()));
        $settings = $this->crud->read('settings',array(
            '"1"'=>'1'
        ));
        $data = array(
            'title'=>$settings['res'][0]->title
        );
        //$this->load->view('logine',$data);
        $this->load->view('mbloc/index',$data);
    }
    function bannerclick(){
        $params = $this->input->post();
        echo json_encode($this->crud->save('bannercounters',array('ipaddress'=>$this->getUserIP(),'name'=>$params['name'])));
    }
    function saveinfo(){
        $params = $this->input->post();
        $this->crud->save('visitors',array(
            'name'=>$params['name'],
            'gender'=>$params['gender'],
            'age'=>$params['age'],
            'hp'=>$params['hp'],
            'email'=>$params['email'],
            'medsos'=>$params['medsos']
        ));
        //redirect("http://mbloc.padinet.com/login?dst=http%3A%2F%2Fwww.msftconnecttest.com%2Fredirect&username=T-94%3A65%3A9C%3A7E%3ADE%3AC0");
        //redirect("http://172/login?dst=http%3A%2F%2Fwww.msftconnecttest.com%2Fredirect&username=T-94%3A65%3A9C%3A7E%3ADE%3AC0");
    }
    function status(){
        redirect('http://172.29.1.1/status');
    }
}