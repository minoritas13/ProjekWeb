<?php

class DashboardKasir extends Controller{

    public function index(){
        session_start();
        $data['title'] = 'dashboardKasir';

        if(!isset($_SESSION['user'])){
            header('Location: ' . BASEURL);    
        }else{
            $this->view('template/header', $data);
            $this->view('dashboardKasir/index');
            $this->view('template/footer');
        }
        
    }
}