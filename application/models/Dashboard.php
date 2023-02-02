<?php
Class Dashboard extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getdataharian(){
        $sql = 'select ipaddress,dt,count(dt)cnt from ( ';
        $sql.= 'select ipaddress,date_format(createdate,"%Y-%m-%d") dt from counter ';
        $sql.= ')A group by ipaddress,dt ';
        $ci = & get_instance();
        $que= $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result(),'sql'=>$sql
        );
    }
    function getdataclickbannerharian($params){
        $sql = 'select ipaddress,dt,count(dt)cnt from ( ';
        $sql.= 'select ipaddress,date_format(createdate,"%Y-%m-%d") dt from bannercounters ';
        $sql.= 'where name="'.$params['name'].'" ';
        $sql.= ')A group by ipaddress,dt ';
        $ci = & get_instance();
        $que= $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result(),'sql'=>$sql
        );
    }
    function getdistinctipaddress(){
        $sql = 'select distinct ipaddress from counter ';
        $ci = & get_instance();
        $que= $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result(),'sql'=>$sql
        );
    }
    function getuniquevisitor($dt){
        $sql = 'select ipaddress,count(dt)cnt from ( ';
        $sql.= 'select ipaddress,date_format(createdate,"%Y-%m-%d") dt from counter ';
        $sql.= ')A where dt="'.$dt.'" group by ipaddress ';
        $ci = & get_instance();
        $que= $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result(),'sql'=>$sql
        );
    }
    function getdatavisitors(){
        $sql = 'select name,age,email,hp,case gender when "0" then "Wanita" when "1" then "Pria" else "" end gender ,medsos from visitors ';
        $ci = & get_instance();
        $que= $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result(),'sql'=>$sql
        );
    }
}