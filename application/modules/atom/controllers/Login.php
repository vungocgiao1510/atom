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
            if($u && $p){
                $check_login = array(
                    "username" => $u,
                    "password" => $p
                );
                $data = $this->Muser->checkLogin($u,$p);
                if($data == TRUE){
                    redirect(base_url().'gcms/dashboard/index');
                } else {
                    $this->_data['error'] = 'Tài khoản hoặc mật khẩu không đúng.';
                }
            }
        }
        $this->load->view($this->_data['filename'], $this->_data);
    }
}