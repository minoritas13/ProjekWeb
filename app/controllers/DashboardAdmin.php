<?php

class DashboardAdmin extends Controller{
    public function index(){
        session_start();
        if(!isset($_SESSION['user'])){
            header('Location: ' . BASEURL);    
        }else{
            $this->view('dashboardAdmin/index');
        }
        
    }
}