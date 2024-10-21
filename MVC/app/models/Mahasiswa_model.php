<?php

class Mahasiswa_model
{
//    private $mhs =
//        [
//        [
//            "nama" => "Galuh Wikri Ramadhan",
//            "nrp" => "223040147",
//            "email" => "galuhwikri05@gmail.com",
//            "jurusan" => "Teknik Informatika"
//        ],
//        [
//            "nama" => "Wikri Ramadhan",
//            "nrp" => "223040147",
//            "email" => "galuhwikri05@gmail.com",
//            "jurusan" => "Teknik Informatika"
//        ],
//        [
//            "nama" => "Galuh Ramadhan",
//            "nrp" => "223040147",
//            "email" => "galuhwikri05@gmail.com",
//            "jurusan" => "Teknik Informatika"
//        ],
//    ];
    private $dbh; //database
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=prakweb_2024_c_223040147';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
