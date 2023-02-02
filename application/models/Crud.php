<?php
Class Crud extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function save($tableName,$params){
        $keys = array();
        $vals = array();
        foreach($params as $key=>$val){
            array_push($keys,$key);
            array_push($vals,$val);
        }
        $sql = 'insert into '.$tableName.' ';
        $sql.= '('.implode(",",$keys).') ';
        $sql.=' values ';
        $sql.= '("'.implode('","',$vals).'") ';
        $ci = & get_instance();
        $ci->db->query($sql);
        return array('sql'=>$sql);
    }
    function read($tableName,$params){
        $cond = array();
        foreach($params as $key=>$val){
            array_push($cond,$key.'="'.$val.'" ');
        }
        $sql = 'select * from ' . $tableName . ' ';
        $sql.= 'where ' . implode(',',$cond);
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'res'=>$que->result(),'cnt'=>$que->num_rows()
        );
    }
    function update($tableName,$params){
        $conditions = array();$columns = array();
        foreach($params['columns'] as $key=>$val){
            array_push($columns,$key.'="'.$val.'" ');
        }
        foreach($params['conditions'] as $key=>$val){
            array_push($conditions,$key.'="'.$val.'" ');
        }
        $sql = 'update '. $tableName.' ';
        $sql.= 'set ' . implode(',',$columns) . ' ';
        $sql.= 'where '. implode(',',$conditions) . ' ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'sql'=>$sql
        );
    }
    function upsert($tableName,$data){
        $cols = array();$vals = array();$alt = array();
        foreach($data as $key=>$val){
            array_push($cols,$key);
            array_push($vals,$val);
            array_push($alt,$key.'="'.$val.'" ');
        }
        $sql = 'insert into ' . $tableName . ' (' . implode(',',$cols) . ') ';
        $sql.= 'values ("' . implode('","',$vals) . '" ) ';
        $sql.= 'on duplicate key update '.implode(',',$alt). ' ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'sql'=>$sql
        );
    }
    function delete($tableName,$params){
        $conditions = array();
        foreach($params as $key=>$val){
            array_push($conditions,$key . '="' . $val . '" ');
        }
        $sql = 'delete from ' . $tableName . ' ';
        $sql.= 'where ' . implode(',',$conditions);
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'sql'=>$sql
        );
    }
}