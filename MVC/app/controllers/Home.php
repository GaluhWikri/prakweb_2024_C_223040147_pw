<?php

class Home extends controller{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header');
        $this->view('home/index');
        $this->view('templates/footer');
    }
}