<?php

class Home extends Controller {
    
    public function start(){
        $this->view('home/Start');
    }

    public function about(){
        $this->view('home/AboutUs');
    }

    public function login(){
        $this->view('home/Login');
    }

    public function register(){
        $this->view('home/Create_account');
    }

    public function statistics(){
        $this->view('home/Statistics');
    }

    public function edit(){
        $this->view('home/Edit');
    }

    public function generator(){
        $this->view('home/Generator');
    }

    public function informations(){
        $this->view('home/Informations');
    }

    public function profil(){
        $this->view('home/Profil');
    }

    public function reset() {
        $this->view('home/Resset_password');
    }

    public function workout() {
        $this->view('home/Workout');
    }

}

?>