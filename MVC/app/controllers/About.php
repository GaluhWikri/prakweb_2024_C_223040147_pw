<?php

class About {
    public function index ($nama = 'galuh', $pekerjaan = 'Programmer')
    {
        echo "Halo, nama saya $nama , saya adalah $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}