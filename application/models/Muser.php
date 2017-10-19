<?php
class Muser extends CI_Model{
    protected $_table = 'users';
    public function __construct(){
        parent::__construct();
    }
    public function checkLogin($u,$p){
        $this->db->where('username',$u);
        $this->db->where('password',$p);
        $query = $this->db->get($this->_table);
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
}