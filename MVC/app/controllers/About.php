<?php

class About extends Controller  {
    public function index ($nama = 'galuh', $pekerjaan = 'Programmer', $umur = 21)
    {
        $data ['nama'] =$nama;
        $data ['pekerjaan'] = $pekerjaan;
        $data ['umur'] =$umur;
        $data['judul'] = 'About me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}