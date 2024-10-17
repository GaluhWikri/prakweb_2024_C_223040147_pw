<?php
// define('NAMA', 'Galuh Wikri Ramadhan');
// echo NAMA;
//
// echo "<br>";
//
// const UMUR = 21;
// echo UMUR;
//
//
// class Coba {
//   const NAMA = 'Galuh';
// }
//
// echo Coba::NAMA;


//echo __FILE__;

 function coba() {
     return __FUNCTION__;
 }


class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>