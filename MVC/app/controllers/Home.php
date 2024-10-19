<?php

class Home extends controller{
    public function index()
    {
        $data['nama'] = 'Galuh Wikri';
        $data['judul'] = 'Home';
        $this->view('templates/header' , $data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}

?>