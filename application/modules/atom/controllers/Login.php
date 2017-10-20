<?php
class Login extends LoginController{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->_data['title'] = 'Đăng nhập quản trị';
        $this->_data['error'] = "";
        if($this->input->post('ok')){
            $u = ($this->input->post('username')) ? $this->input->post("username") : '';
            $p = ($this->input->post('password')) ? $this->input->post("password") : '';
            $data = $this->Muser->checkLogin($u,$p);
            if($data != false){
                $ses_user = array(
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'level' => $data['level'],
                    'created' => $data['created'],
                    'updated' => $date['updated'],
                    'lang' => 1,
                );
            }
        }
        $this->load->view($this->_data['filename'], $this->_data);
    }
}