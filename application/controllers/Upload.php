<?php
Class Upload extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function upload(){

        /* Getting file name */
        $filename = $_FILES['file']['name'];

        /* Location */
        $location = $this->config->item('uploadpath');//"upload/".$filename;
        $uploadOk = 1;

        if($uploadOk == 0){
        echo 0;
        }else{
        /* Upload file */
            $time = time();
        $target_dir = $this->config->item('uploadpath');//"C:\phpworkspace\imageserver\uploads\ ";//"/uploads/";
        if($this->padiconfig->development){
            $target_dir = '/home/klien/www/hotspot/uploads/brands/';
        }else{
            $target_dir = 'C:\phpworkspace\hotspot\uploads\carousels\\';
        }
        //$location = $target_dir . basename($_FILES["file"]["name"]);
            $location = trim($target_dir)."brand".date("YmdHis",$time).".jpg";
        if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
            //echo json_encode($location);
            echo json_encode($_FILES);
        }else{
            echo 'LOCATION : '.$target_dir;
        }
        }
    }
    function uploadcarousel(){

        /* Getting file name */
        $filename = $_FILES['file']['name'];

        $uploadOk = 1;

        if($uploadOk == 0){
        echo 0;
        }else{
        /* Upload file */
            $time = time();
        $target_dir = $this->config->item('uploadpath');//"C:\phpworkspace\imageserver\uploads\ ";//"/uploads/";
        if($this->padiconfig->development){
            $target_dir = '/home/klien/www/hotspot/uploads/carousels/';
        }else{
            $target_dir = 'C:\phpworkspace\hotspot\uploads\carousels\\';
        }
        //$location = $target_dir . basename($_FILES["file"]["name"]);
        $location = trim($target_dir)."carousel".date("YmdHis",$time).".jpg";
        if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
            //echo json_encode($location);
            echo json_encode($_FILES);
        }else{
            echo 'LOCATION : '.$target_dir;
        }
        }
    }
    function uploadvideo(){

        /* Getting file name */
        $filename = $_FILES['file']['name'];

        $uploadOk = 1;

        if($uploadOk == 0){
        echo 0;
        }else{
        /* Upload file */
            $time = time();
        if($this->padiconfig->development){
            $target_dir = '/home/klien/www/hotspot/uploads/videos/';
        }else{
            $target_dir = 'C:\phpworkspace\hotspot\uploads\videos\\';
        }
        //$location = $target_dir . basename($_FILES["file"]["name"]);
        $location = trim($target_dir)."video".date("YmdHis",$time).".mp4";
        if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
            //echo json_encode($location);
            echo json_encode($_FILES);
        }else{
            echo 'LOCATION : '.$target_dir;
        }
        }
    }
    function uploadbrand(){

        /* Getting file name */
        $filename = $_FILES['file']['name'];

        $uploadOk = 1;

        if($uploadOk == 0){
        echo 0;
        }else{
            $time = time();
        if($this->padiconfig->development){
            $target_dir = '/home/klien/www/hotspot/uploads/brands/';
        }else{
            $target_dir = 'C:\phpworkspace\hotspot\uploads\brands\\';
        }
        $location = trim($target_dir)."brand".date("YmdHis",$time).".mp4";
        if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
            echo json_encode($_FILES);
        }else{
            echo 'LOCATION : '.$target_dir;
        }
        }
    }
    function remove(){
        $removetype= $this->uri->segment(3);
        $name = $this->uri->segment(4);
        if($this->padiconfig->development){
            $target_dir = '/home/klien/www/hotspot/uploads/'.$removetype.'/';
        }else{
            $target_dir = 'C:\phpworkspace\hotspot\uploads\\'.$removetype.'\\';
        }
        echo unlink($target_dir.$name);
    }
    function uploadsponsor(){

        /* Getting file name */
        $filename = $_FILES['file']['name'];

        $uploadOk = 1;

        if($uploadOk == 0){
        echo 0;
        }else{
        /* Upload file */
            $time = time();
        if(1==1){
            $target_dir = '/home/klien/www/hotspot/uploads/sponsors/';
        }else{
            $target_dir = 'C:\phpworkspace\hotspot\uploads\sponsors\\';
        }
        //$location = $target_dir . basename($_FILES["file"]["name"]);
        $location = trim($target_dir)."sponsor".date("YmdHis",$time).".jpg";
        if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
            //echo json_encode($location);
            echo json_encode($_FILES);
        }else{
            echo 'LOCATION : '.$target_dir;
        }
        }
    }
    function index(){
        $this->load->view('pic/uploader');
    }
    function xxx(){
        echo json_encode($_FILES);
    }
}