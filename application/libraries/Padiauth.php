<?php
Class Padiauth {
    function getuser($email){
        $sql = 'select password,salt from users ';
        $sql.= 'where email="'.$email. '" ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        if($que->num_rows()===1){
            return array(
                'password'=>$res[0]->password,'salt'=>$res[0]->salt
            );
        }else{
            return false;
        }
    }
    function login($email,$password){
        $user = $this->getuser($email);
        if($user!==false){
            if(sha1($password.$user['salt'])===$user['password']){
                return true;
                //return json_encode(array('result'=>'password cocok'));
            }else{
                return false;
                //return json_encode(array('result'=>'password salah'));
            }
        }else{
            return false;//json_encode(array('result'=>'user tidak ditemukan'));
        }
    }
    function createuser($name,$email,$password){
        $salt = sha1(random_string('alnum', 32));
        $user = array(
            'name'=>$name,
            'email'=>$email,
            'salt' => $salt,
            'password' =>sha1($password.$salt) 
        );
        $sql = 'insert into users (name,email,salt,password) ';
        $sql.= 'values ';
        $sql.= '("'.$user['name'].'","'.$user['email'].'","'.$user['salt'].'","'.$user['password'].'")';
        $ci = & get_instance();
        $que = $ci->db->query($sql);

    }
    function changepassword($email,$password){
        $salt = sha1(random_string('alnum', 32));
        $user = array(
            'email'=>$email,
            'salt' => $salt,
            'password' =>sha1($password.$salt) 
        );
        $sql = 'update users set salt="'.$user['salt'].'",password="'.$user['password'].'" ';
        $sql.= 'where ';
        $sql.= 'email="'.$user['email'].'" ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array('sql'=>$sql);
    }
    function isloggedin(){
        if(isset($_SESSION)){
            return true;
        }
        return false;
    }
}