<?php
Class Admin extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getmenu(){
        return array(
            0=>'video'
        );
    }
}