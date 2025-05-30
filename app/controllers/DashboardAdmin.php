<?php

class DashboardAdmin extends Controller{
    public function index(){
        session_start();
        $data['title'] = 'dashboardAdmin';

        if(!isset($_SESSION['user'])){
            header('Location: ' . BASEURL);    
        }else{
            $this->view('template/header', $data);
            $this->view('dashboardAdmin/index');
            $this->view('template/footer');
        }
        
    }
}