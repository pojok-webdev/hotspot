<?php
Class Main extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('crud');
        session_start();
    }
    function showimages(){
        $this->load->view('main/showimages');
    }
    function index2(){
        echo "test";
        $this->load->view('main/index');
    }
    function index(){
        //$this->load->view('gallery/index');
        //redirect('/pic/brand/1');
        $this->load->view('commons/login');
    }
    function showgallery(){
        $this->load->view('gallery/index');
    }
    function checkbrand(){}
    function checkFileSize(){
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }          
    }
    function checkFileType($imageFileType){
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        return true;
        }
    }
    function waktu(){
        $time = time();
        echo date("YmdHis",$time);
    }
    function doUpload($imageFileType,$target_dir,$target_file){
        if($this->checkFileType($imageFileType)){
        //if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "Target FIle " . $target_file;
              echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
          }
    }
    function uploadhandler(){
        $this->config->load('padiconfig');
        $target_dir = $this->config->item('uploadpath');//"C:\phpworkspace\imageserver\uploads\ ";//"/uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
                $this->doUpload($imageFileType,$target_dir,$target_file);
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
    }
    function test(){
        $c = $this->uri->segment(3);
        $res = $this->crud->read('brands',array('role'=>'brand1'));
        print_r($res);
        echo "\n";
        echo $res['res'][0]->name;
    }
    function brand(){
        $c = $this->uri->segment(3);
        $res = $this->crud->read('brands',array('role'=>'brand'.$c.''));
        $file = './uploads/brands/'.$res['res'][0]->name;
        $type = 'image/jpeg';
        header('Content-Type:'.$type);
        header('Content-Length: ' . filesize($file));
        readfile($file);
    }
    function sponsor(){
        $c = $this->uri->segment(3);
        $res = $this->crud->read('sponsors',array('role'=>'sponsor'.$c.''));
        $file = './uploads/sponsors/'.$res['res'][0]->name;
        $type = 'image/jpeg';
        header('Content-Type:'.$type);
        header('Content-Length: ' . filesize($file));
        readfile($file);
    }
    function setsponsor(){
        $params = $this->input->post();
        /*$this->crud->upsert('brands',array(
            'name'=>$params->name
        ));*/
        $this->crud->delete('sponsors',array(
            'role'=>$params['role']
        ));
        $this->crud->save('sponsors',array(
            'name'=>$params['name'],
            'role'=>$params['role']
        ));
        echo json_encode('{"result":"ok"}');
    }
    function banner(){
        $id = $this->uri->segment(3);
        $objs = $this->crud->read('banners',array('role'=>'banner'.$id));
        echo $objs['res'][0]->name;
    }
    function setbanner(){
        $params = $this->input->post();
        /*$this->crud->upsert('brands',array(
            'name'=>$params->name
        ));*/
        /*$this->crud->delete('brands',array(
            'role'=>$params['role']
        ));*/
        $this->crud->upsert('banners',array(
            'name'=>$params['name'],
            'role'=>$params['role']
        ));
        echo json_encode('{"result":"ok"}');
    }
    function setcarousel(){
        $params = $this->input->post();
        /*$this->crud->upsert('brands',array(
            'name'=>$params->name
        ));*/
        $this->crud->delete('carousels',array(
            'role'=>$params['role']
        ));
        $this->crud->save('carousels',array(
            'name'=>$params['name'],
            'role'=>$params['role']
        ));
        echo json_encode('{"result":"ok","name":'+$params["name"]+',"role":'+$params["role"]+'}');
    }
    function setvideo(){
        $params = $this->input->post();
        $this->crud->delete('videos',array(
            '1'=>'1'
        ));
        $this->crud->save('videos',array(
            'name'=>$params['name'],
            'role'=>$params['role']
        ));
        echo json_encode('{"result":"ok"}');
    }

    function carousel(){
        $c = $this->uri->segment(3);
        $res = $this->crud->read('carousels',array('role'=>'carousel'.$c.''));
        $file = './uploads/carousels/'.$res['res'][0]->name;
        $type = 'image/jpeg';
        header('Content-Type:'.$type);
        header('Content-Length: ' . filesize($file));
        readfile($file);
        $type = 'image/jpeg';
        header('Content-Type:'.$type);
        header('Content-Length: ' . filesize($file));
        readfile($file);
    }
    function video(){
        $c = $this->uri->segment(3);
        $res = $this->crud->read('videos',array('1'=>'1'));
        $file = './uploads/videos/'.$res['res'][0]->name;
        $type = 'video/mp4';
        header('Content-Type:'.$type);
        header('Content-Length: ' . filesize($file));
        readfile($file);
    }
    function removeimage(){
        $params = $this->input->post();
        if(true){
            $target_dir = '/home/klien/www/hotspot/uploads/carousels/';
        }else{
            $target_dir = 'C:\phpworkspace\hotspot\uploads\carousels\\';
        }
        if(unlink($target_dir . $params['name'])){
            echo '{status:"OK"}';
        }else{
            echo '{status:"Fail"}';
        };
    }
    function paditeknologi(){
        $file = './images/LogoPadiTech.svg';
        echo file_get_contents('./images/logo-padinet.jpeg' );
    }
    function image1(){
        $file = './images/boxed-water-is-better-_gWz-xsn-_4-unsplash.jpg';
        $type = 'image/jpeg';
        header('Content-Type:'.$type);
        header('Content-Length: ' . filesize($file));
        readfile($file);
    }
    function image2(){
        $file = './images/alexandre-bury-NVXwlz2CXuI-unsplash.jpg';

        if (file_exists($file))
        {
            $size = getimagesize($file);

            $fp = fopen($file, 'rb');

            if ($size and $fp)
            {
                // Optional never cache
            //  header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
            //  header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
            //  header('Pragma: no-cache');

                // Optional cache if not changed
            //  header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($file)).' GMT');

                // Optional send not modified
            //  if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) and 
            //      filemtime($file) == strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']))
            //  {
            //      header('HTTP/1.1 304 Not Modified');
            //  }

                header('Content-Type: '.$size['mime']);
                header('Content-Length: '.filesize($file));

                fpassthru($fp);

                exit;
            }
        }
    }
    function index_(){
        $this->load->view('external/login');
    }
    function loginc(){
        $this->load->view('loginc',array(
            'imageserver'=>'http://padiweb.padinet.com/'
        ));
    }
    function register(){
        $this->load->view('users/register');
    }
}