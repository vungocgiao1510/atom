<?php
class Dashboard extends AdminController{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        echo "Day la Dashboard trong Amin Controll Panel";
    }
}

