<?php
Class Manage extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('directory');
        $this->load->library('menu');
        session_start();
        $_SESSION['email']='puji@padi.net.id';
    }
    function brand(){
        $brand_id = $this->uri->segment(3);
        $imagecategory = $this->uri->segment(2);
        $menustatus = $this->menu->getmenustatus($brand_id,$imagecategory);
        $this->load->view('admin/brand',array_merge(array(
            'brand_id'=>$brand_id,
            'map' => (directory_map('./uploads/brands', 1)!==false)?directory_map('./uploads/brands', 1):array(),
            'activemenu'=>array('video'=>'','brand'=>'active','carousel'=>'')
        ),$menustatus)
    );
    }
    function video(){
        $video_id = $this->uri->segment(3);
        $imagecategory = $this->uri->segment(2);
        $menustatus = $this->menu->getmenustatus($video_id,$imagecategory);
        $this->load->view('admin/gallery',array_merge(
            array(
            'video_id'=>$video_id,
            'map' => (directory_map('./uploads/videos', 1)!==false)?directory_map('./uploads/videos', 1):array(),
            'activemenu'=>array('video'=>'active','brand'=>'','carousel'=>'')
        ),$menustatus)
    );
    }
    function carousel(){
        $carousel_id = $this->uri->segment(3);
        $imagecategory = $this->uri->segment(2);
        $menustatus = $this->menu->getmenustatus($carousel_id,$imagecategory);
        $this->load->view('pic/carousel',array_merge(array(
            'carousel_id'=>$carousel_id,
            'map' => (directory_map('./uploads/carousels', 1)!==false)?directory_map('./uploads/carousels', 1):array(),
            'activemenu'=>array('brand'=>'','video'=>'','carousel'=>'active')
        ),$menustatus)
        );
    }
    function index(){
        $_SESSION['email']='puji@padi.net.id';
        $this->load->view('pic/index');
    }
    function video2(){
        $video_id = $this->uri->segment(3);
        $imagecategory = $this->uri->segment(2);
        $menustatus = $this->menu->getmenustatus($video_id,$imagecategory);
        $this->load->view('admin/video',array_merge(
            array(
                'video_id'=>$video_id,
                'map' => (directory_map('./uploads/videos', 1)!==false)?directory_map('./uploads/videos', 1):array(),
                'activemenu'=>array('video'=>'active')
            ),$menustatus)
        );
    }
    function selectedvideo(){
        $this->load->model('crud');
        $res = $this->crud->read('videos',array('1'=>'1'));
        echo $res['res'][0]->name;
    }
    function sponsor(){
        $sponsor_id = $this->uri->segment(3);
        $imagecategory = $this->uri->segment(2);
        $menustatus = $this->menu->getmenustatus($sponsor_id,$imagecategory);

        $this->load->view('pic/sponsor',array_merge(array(
            'sponsor_id'=>$sponsor_id,
            'map' => (directory_map('./uploads/sponsors', 1)!==false)?directory_map('./uploads/sponsors', 1):array(),
        ),$menustatus)
    );
    }
    function user(){
        if($this->padiauth->isloggedin()){
            $menustatus = $this->menu->getmenustatus('users',1);
            $this->load->view('users/list',$menustatus
        );            
        }else{
            redirect('/main/index');
        }
    }
    function seqwence(){
        $menustatus = $this->menu->getmenustatus('seqwences',1);
        //if($this->padiauth->isloggedin()){
            $this->load->view('seqwences/list',$menustatus);
        //}else{
          //  redirect('/main/index');
        //}
    }
    function choose(){
        $this->load->view('');
    }
}